<?php

// Require the correct variable type to be used (no auto-converting)
declare (strict_types = 1);

// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Load you classes
require_once 'config.php';
require_once 'classes/DatabaseManager.php';
require_once 'classes/CardRepository.php';

$databaseManager = new DatabaseManager($config['host'], $config['user'], $config['password'], $config['dbname']);
$databaseManager->connect();

// This example is about a Pokémon card collection
// Update the naming if you'd like to work with another collection
$cardRepository = new CardRepository($databaseManager);
$cards = $cardRepository->get();

function printR($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
}

// Get the current action to execute
// If nothing is specified, it will remain empty (home should be loaded)
$action = $_GET['action'] ?? null;

// Load the relevant action
// This system will help you to only execute the code you want, instead of all of it (or complex if statements)
switch ($action) {
  case 'create':
    create($cardRepository);
    break;
  case 'update':
    update();
    break;
  case 'delete':
    del($cardRepository);
    break;
  default:
    overview();
    break;
}

function overview()
{
  // Load your view
  // Tip: you can load this dynamically and based on a variable, if you want to load another view
  global $cardRepository; 
  $cards = $cardRepository->get();
  require 'overview.php';
}


function create($cardRepository)
{
  // TODO: provide the create logic
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $cardRepository->create($_POST['team'], (int)$_POST['season'],$_POST['player'],$_POST['size'],$_POST['brand'], $_POST['condition']);
  }

  require 'create.php';
}

function update()
{

}

function del($cardRepository)
{
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $cardRepository->delete($_POST['deleteBtn']);
  }
  require 'overview.php';
}
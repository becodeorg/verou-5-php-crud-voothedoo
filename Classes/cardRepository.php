<?php

// This class is focussed on dealing with queries for one type of data
// That allows for easier re-using and it's rather easy to find all your queries
// This technique is called the repository pattern
class CardRepository
{
  private DatabaseManager $databaseManager;

  // This class needs a database connection to function
  public function __construct(DatabaseManager $databaseManager)
  {
      $this->databaseManager = $databaseManager;
  }

  public function create(string $team, int $season, string $player, string $size, string $brand, string $condition)
  {
    try {
      $connection = $this->databaseManager->connection;
      $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $tableName = 'jersey';
      $query = "INSERT INTO $tableName( team, season, player, size, brand, `condition` ) VALUES ( '$team', $season, '$player', '$size', '$brand', '$condition' )";
      $connection->exec($query);

      echo "New record created successfully";

    } catch (PDOException $e) {
      echo $query . "<br>" . $e->getMessage();
    }
  }

  // Get one
  // public function find(): array
  // {

  // }

  // Get all
  public function get(): array
  {
    try {
      $connection = $this->databaseManager->connection;
      $tableName = 'jersey';
      $query = "SELECT * FROM $tableName";
      $statement = $connection->query($query);
      $result = $statement->fetchAll(PDO::FETCH_ASSOC);
      return $result;

    } catch (PDOException $e) {
      echo "Query failed: " . $e->getMessage();
      return [];
    }
  }

  public function update(): void
  {

  }

  public function delete($deleteId): void
  {
    try {
      $connection = $this->databaseManager->connection;
      $tableName = 'jersey';
      $query = "DELETE FROM $tableName WHERE id = $deleteId";
      $connection->exec($query);
      echo "Deleted Succesfully!";
      header("Location: ?", true, 301);
    }catch (PDOException $e) {
      echo "Query failed: " . $e->getMessage();
    }
    
  }

}
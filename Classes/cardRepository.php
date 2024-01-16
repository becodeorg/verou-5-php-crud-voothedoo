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

  public function create(): void
  {

  }

  // Get one
  public function find(): array
  {

  }

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
    // We get the database connection first, so we can apply our queries with it
    // return $this->databaseManager->connection-> (runYourQueryHere)
  }

  public function update(): void
  {

  }

  public function delete(): void
  {

  }

}
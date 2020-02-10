<?php


class QueryBuilder
{
    /**
     * @var PDO
     */
    private $pdo;

    public function __construct(PDO $pdo)
    {

        $this->pdo = $pdo;
    }

    public function selectAll($table, $intoClass)
    {
        $statement = $this->pdo->prepare("select * from $table");
        $statement->execute();

        return $tasks = $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }
}
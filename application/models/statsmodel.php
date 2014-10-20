<?php

class StatsModel
{
    /**
     * Every model needs a database connection, passed to the model
     * @param object $db A PDO database connection
     */
    function __construct($db) {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }


    public function getAmountOfBooks()
    {
        $sql = "SELECT COUNT(*) AS amount_of_books FROM inventory";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetch()->amount_of_books;
    }

    public function getAmountOfBooksCart()
    {
        $sql = "SELECT SUM(quantity) AS amount_of_books FROM shopping_cart";
        $query = $this->db->prepare($sql);
        $query->execute();

        return $query->fetch()->amount_of_books;
    }
}

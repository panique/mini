<?php

class Stats_Model extends Database
{
    /**
     * @var int Amount of songs we have in database
     */
    public $amount_of_songs = null;

    /**
     * Every model needs this constructor that creates a database connection.
     * It creates a PDO database connection when a model is constructed.
     */
    function __construct() {
        try {
            $this->db = new Database();
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    /**
     * Gets simple "stats", in this demo just to show how to use two models in one controller
     */
    public function getPageStats()
    {
        $sql = "SELECT COUNT(id) AS amount_of_songs FROM song";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows
        $this->amount_of_songs = $query->fetch()->amount_of_songs;
    }

    /**
     * Adds a song (from form) to database table
     * @param $artist string Artist
     * @param $track string Track
     * @param $link string Link
     */
    public function addSong($artist, $track, $link)
    {
        $sql = "INSERT INTO song (artist, track, link) VALUES (:artist, :track, :link)";
        $query = $this->db->prepare($sql);
        $query->execute(array(':artist' => $artist, ':track' => $track, ':link' => $link));
    }

    /**
     * @param $song_id integer ID of song
     */
    public function deleteSong($song_id)
    {
        $sql = "DELETE FROM song WHERE id = :song_id";
        $query = $this->db->prepare($sql);
        $query->execute(array(':song_id' => $song_id));
    }
}

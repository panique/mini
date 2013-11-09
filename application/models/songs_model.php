<?php

class Songs_Model extends Database
{
    /**
     * @var array The list of the songs, usually an array of objects (as each PDO result is an object here)
     */
    public $songs = array();

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
     * Gets all songs from database table
     */
    public function getAllSongs()
    {
        $sql = "SELECT id, artist, track, link FROM song";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows
        $this->songs = $query->fetchAll();
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

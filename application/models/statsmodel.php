<?php

class StatsModel extends Model
{
    /**
     * Get simple "stats". This is just a simple demo to show
     * how to use more than one model in a controllers (see application/controllers/SongsController.php for more)
     */
    public function getAmountOfSongs()
    {
        $sql = "SELECT COUNT(id) AS amount_of_songs FROM song";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetchAll() is the PDO method that gets all result rows
        return $query->fetch()->amount_of_songs;
    }
}

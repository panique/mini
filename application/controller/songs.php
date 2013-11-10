<?php

/**
 * Class Songs
 * This is a demo class.
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Songs extends Controller
{
    //function __construct() {
    //    parent::__construct();
    //}

    /**
     * PAGE:
     */
    public function index()
    {
        // simple message to show where you are
        echo 'Message from Controller: You are in the Controller: Songs, using the method index().';

        // load model, perform an action on the model
        $songs_model = $this->loadModel('Songs_Model');
        $songs_model->getAllSongs();

        // load header and view
        require 'application/views/_templates/header.php';
        require 'application/views/songs/index.php';
        require 'application/views/_templates/footer.php';
    }

    /**
     * ACTION:
     */
    public function addSong()
    {
        // simple message to show where you are
        echo 'Message from Controller: You are in the Controller: Songs, using the method addSong().';

        if (isset($_POST["submit_add_song"])) {
            // load model, perform an action on the model
            $songs_model = $this->loadModel('Songs_Model');
            $songs_model->addSong($_POST["artist"], $_POST["track"],  $_POST["link"]);
        }

        // where to go after song has been added ?
        header('location: ' . URL . 'songs/index');
    }

    /**
     * ACTION:
     */
    public function deleteSong($song_id)
    {
        // simple message to show where you are
        echo 'Message from Controller: You are in the Controller: Songs, using the method deleteSong().';

        if (isset($song_id)) {
            // load model, perform an action on the model
            $songs_model = $this->loadModel('Songs_Model');
            $songs_model->deleteSong($song_id);
        }

        // where to go after song has been added ?
        header('location: ' . URL . 'songs/index');
    }
}

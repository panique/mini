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
    /**
     * @var null A container that collects data from the model(s) to pass it to the view
     */
    private $model = null;

    /**
     * PAGE:
     */
    public function index()
    {
        // simple message to show where you are
        echo 'Message from Controller: You are in the Controller: Songs, using the method index().';

        // load a model, perform an action, pass the data to model-container
        $songs_model = $this->loadModel('Songs_Model');
        $this->model->songs = $songs_model->getAllSongs();

        // load view, always write without .php (header/footer are automatically loaded, see libs/controller for more)
        $this->loadView('songs/index', $this->model);
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

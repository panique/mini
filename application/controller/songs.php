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
     * PAGE: index
     * This method handles what happens when you move to http://yourproject/songs/index
     */
    public function index()
    {
        // simple message to show where you are
        echo 'Message from Controller: You are in the Controller: Songs, using the method index().';

        // load a model, perform an action, pass the returned data to a variable
        // NOTE: please write the name of the model "LikeThis"
        $songs_model = $this->loadModel('SongsModel');
        $songs = $songs_model->getAllSongs();

        // load another model, perform an action, pass the returned data to a variable
        // NOTE: please write the name of the model "LikeThis"
        $stats_model = $this->loadModel('StatsModel');
        $amount_of_songs = $stats_model->getAmountOfSongs();

       // load views. within the views we can echo out $songs and $amount_of_songs easily
        require APP . 'views/_templates/header.php';
        require APP . 'views/songs/index.php';
        require APP . 'views/_templates/footer.php';
    }

    /**
     * ACTION: addSong
     * This method handles what happens when you move to http://yourproject/songs/addsong
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "add a song" form on songs/index
     * directs the user after the form submit. This method handles all the POST data from the form and then redirects
     * the user back to songs/index via the last line: header(...)
     * This is an example of how to handle a POST request.
     */
    public function addSong()
    {

        // if we have POST data to create a new song entry
        if (isset($_POST["submit_add_song"])) {
            // load model, perform an action on the model
            $songs_model = $this->loadModel('SongsModel');
            $songs_model->addSong($_POST["artist"], $_POST["track"],  $_POST["link"]);
        }

        // where to go after song has been added
        header('location: ' . URL . 'songs/index');
    }

    /**
     * ACTION: deleteSong
     * This method handles what happens when you move to http://yourproject/songs/deletesong
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "delete a song" button on songs/index
     * directs the user after the click. This method handles all the data from the GET request (in the URL!) and then
     * redirects the user back to songs/index via the last line: header(...)
     * This is an example of how to handle a GET request.
     * @param int $song_id Id of the to-delete song
     */
    public function deleteSong($song_id)
    {

        // if we have an id of a song that should be deleted
        if (isset($song_id)) {
            // load model, perform an action on the model
            $songs_model = $this->loadModel('SongsModel');
            $songs_model->deleteSong($song_id);
        }

        // where to go after song has been deleted
        header('location: ' . URL . 'songs/index');
    }

     /**
     * ACTION: editSong
     * This method handles what happens when you move to http://yourproject/songs/editsong
     * @param int $song_id Id of the to-edit song
     */
    public function editSong($song_id)
    {
        // if we have an id of a song that should be edited
        if (isset($song_id)) {
            // load model, perform an action on the model: here we get the song by its id
            $songs_model = $this->loadModel('SongsModel');
            $song = $songs_model->getSong($song_id);
            // in a real application we would also check if this db entry exists and therefore show the result or
            // redirect the user to an error page or similar

            // load views. within the views we can echo out $song easily
            require APP . 'views/_templates/header.php';
            require APP . 'views/songs/edit.php';
            require APP . 'views/_templates/footer.php';
        } else {
            // redirect user to songs index page (as we don't have a song_id)
            header('location: ' . URL . 'songs/index');
        }
    }
    
    /**
     * ACTION: updateSong
     * This method handles what happens when you move to http://yourproject/songs/updatesong
     * IMPORTANT: This is not a normal page, it's an ACTION. This is where the "update a song" form on songs/edit
     * directs the user after the form submit. This method handles all the POST data from the form and then redirects
     * the user back to songs/index via the last line: header(...)
     * This is an example of how to handle a POST request.
     */
    public function updateSong()
    {

        // if we have POST data to create a new song entry
        if (isset($_POST["submit_update_song"])) {
            // load model, perform an action on the model
            $songs_model = $this->loadModel('SongsModel');
            $songs_model->updateSong($_POST["artist"], $_POST["track"],  $_POST["link"], $_POST['song_id']);
        }

        // where to go after song has been added
        header('location: ' . URL . 'songs/index');
    }

    /**
     * AJAX-ACTION: ajaxGetStats
     * TODO documentation
     */
    public function ajaxGetStats()
    {
        $stats_model = $this->loadModel('StatsModel');
        $amount_of_songs = $stats_model->getAmountOfSongs();

        // simply echo out something
        // side-fact: This is also a nice way to build an API. For serious application you would output JSON here
        echo $amount_of_songs;
    }

}

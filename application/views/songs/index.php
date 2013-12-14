<div class="container">
    <h2>You are in the View: application/views/song/index.php (everything in this box comes from that file)</h2>
    <!-- add song form -->
    <div>
        <h3>Add a song</h3>
        <form action="<?php echo URL; ?>songs/addsong" method="POST">
            <label>Artist</label>
            <input type="text" name="artist" value="" required />
            <label>Track</label>
            <input type="text" name="track" value="" required />
            <label>Link</label>
            <input type="text" name="link" value="" />
            <input type="submit" name="submit_add_song" value="Submit" />
        </form>
    </div>
    <!-- main content output -->
    <div>
        <h3>Amount of songs (data from second model)</h3>
        <div>
            <?php echo $amount_of_songs; ?>
        </div>
        <h3>List of songs (data from first model)</h3>
        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>Id</td>
                <td>Artist</td>
                <td>Track</td>
                <td>Link</td>
                <td>DELETE</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($songs as $song) { ?>
                <tr>
                    <td><?php if (isset($song->id)) echo $song->id; ?></td>
                    <td><?php if (isset($song->artist)) echo $song->artist; ?></td>
                    <td><?php if (isset($song->track)) echo $song->track; ?></td>
                    <td>
                        <?php if (isset($song->link)) { ?>
                            <a href="<?php echo $song->link; ?>"><?php echo $song->link; ?></a>
                        <?php } ?>
                    </td>
                    <td><a href="<?php echo URL . 'songs/deletesong/' . $song->id; ?>">x</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>

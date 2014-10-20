<div class="container">

    <div>
        <h3>Collection</h3>
        <div>
            <h3>Total Number of Books: <?php echo $amount_of_books; ?></h3>
        </div>

        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Category</td>
                <td>Price</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($inventory as $book) { ?>
                <tr>
                    <td><?php if (isset($book->item_id)) echo $book->item_id; ?></td>
                    <td><a href="<?php echo URL . 'inventory/detailview/' . $book->item_id; ?>">
                      <?php if (isset($book->item_name)) echo $book->item_name; ?></a></td>
                    <td><?php if (isset($book->category)) echo $book->category; ?></td>
                    <td><?php if (isset($book->price)) echo $book->price; ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>

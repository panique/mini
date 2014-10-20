<div class="container">

    <div>
        <h3>CART</h3>
        <div>
            <h3>Total Number of Books: <?php echo $amount_of_books; ?></h3>
        </div>

        <table>
            <thead style="background-color: #ddd; font-weight: bold;">
            <tr>
                <td>customerId</td>
                <td>itemID</td>
                <td>sessionId</td>
                <td>Qty</td>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($cart as $book) { ?>
                <tr>
                    <td><?php if (isset($book->customer_id)) echo $book->customer_id; ?></td>
                    <td>
                      <?php if (isset($book->item_id)) echo $book->item_id; ?></td>
                    <td><?php if (isset($book->session_id)) echo $book->session_id; ?></td>
                    <td><?php if (isset($book->quantity)) echo $book->quantity; ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>

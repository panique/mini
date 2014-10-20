<div class="container">
  <h3>Name : <?php echo $book[0]->item_name; ?></h3>
  </br><h3>Description:</h3>
  <p> <?php echo $book[0]->item_description; ?> </p>
  <a href=<?php echo URL.'cart/addtocart/'.$book[0]->item_id ?> > Add To Cart </a>
  <input type="button" id = "review" name = "review" value="Add Review"/>
  
</div>

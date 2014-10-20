<?php

class CartModel
{
    /**
     * Every model needs a database connection, passed to the model
     * @param object $db A PDO database connection
     */
    function __construct($db) {
        try {
            $this->db = $db;
        } catch (PDOException $e) {
            exit('Database connection could not be established.');
        }
    }

    public function getAllBooksCart()
    {
        $sql = "SELECT * FROM shopping_cart as sc inner join inventory as inv on sc.item_id = inv.item_id";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    public function addtocart($i_id, $c_id=0, $qty =1){

        $sql = '';
        if($this->getBook($i_id))
        {
            $s_id =101;
            if($this->getBookCart($i_id, $s_id)) {
                $x=$this->getBookCart($i_id, $s_id);
                $qty = $x[0]->quantity + $qty;

                $sql = "UPDATE shopping_cart SET quantity = :qty WHERE session_id  = :s_id  AND item_id = :i_id";
                $query = $this->db->prepare($sql);
                $query->execute(array(':i_id' => $i_id, ':s_id' => $s_id, ':qty' => $qty));
               
            }
            else{
                if($c_id == 0){
                    $sql = "INSERT INTO shopping_cart (customer_id , item_id, session_id, quantity)VALUES( NULL, :i_id, :s_id, :qty)";
                    $query = $this->db->prepare($sql);
                    $query->execute(array(':i_id' => $i_id, ':s_id' => $s_id, ':qty' => $qty));
                }
                else{
                    $sql = "INSERT INTO shopping_cart (customer_id , item_id, session_id, quantity)VALUES( :c_id, :i_id, :s_id, :qty)";
                    $query = $this->db->prepare($sql);
                    $query->execute(array(':c_id' => $c_id,':i_id' => $i_id, ':s_id' => $s_id, ':qty' => $qty));
                }
            }
            /*$sql = "INSERT INTO shopping_cart VALUES(NULL,:i_id, :s_id, :qty)";
                $query = $this->db->prepare($sql);
                $query->execute(array(':i_id'=> $i_id, ':s_id' => $s_id, ':qty' => $qty));*/
            
            return $query->num_rows;
        }
        return 0;
        

    }

    public function getBook($id){
        $sql = "SELECT * FROM inventory WHERE item_id = :id";
        $query = $this->db->prepare($sql);
        $query->execute(array(':id' => $id));
        return $query->fetchAll();

    }

    public function getBookCart($id, $sid){
        $sql = "SELECT * FROM shopping_cart WHERE item_id = :id AND session_id = :sid";
        $query = $this->db->prepare($sql);
        $query->execute(array(':id' => $id, ':sid' => $sid));
        return $query->fetchAll();

    }


}

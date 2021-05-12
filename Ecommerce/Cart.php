<?php
 require_once 'login.php';
 $con = new mysqli($hn, $un, $pw, $db);
 if ($con->connect_error) die($con->connect_error);

// php cart class
class Cart 
{   // insert into cart table
    public  function insertIntoCart($params = null, $table = "cart"){
        if ($this->db->con != null){
            if ($params != null){
                // "Insert into cart(cust_id) values (0)"
                // get table columns
                $columns = implode(',', array_keys($params));

                $values = implode(',' , array_values($params));

                // create sql query
                $query_string = sprintf("INSERT INTO %s(%s) VALUES(%s)", $table, $columns, $values);

                // execute query
                $result = $this->db->con->query($query_string);
                return $result;
            }
        }
    }

    // to get cust_id and prod_id and insert into cart table
    public  function addToCart($custid, $prodid){
        if (isset($custid) && isset($prodid)){
            $params = array(
                "cust_id" => $userid,
                "prod_id" => $itemid
            );

            // insert data into cart
            $result = $this->insertIntoCart($params);
            if ($result){
                // Reload Page
                header("Location: " . $_SERVER['PHP_SELF']);
            }
        }
    }

    // delete cart item using cart item id
    public function deleteCart($prod_id = null, $table = 'cart'){
        if($prod_id != null){
            $result = $this->db->con->query("DELETE FROM {$table} WHERE prod_id={$prod_id}");
            if($result){
                header("Location:" . $_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }

    // calculate sub total
    public function getSum($arr){
        if(isset($arr)){
            $sum = 0;
            foreach ($arr as $item){
                $sum += floatval($item[0]);
            }
            return sprintf('%.2f' , $sum);
        }
    }

    // get item_it of shopping cart list
    public function getCartId($cartArray = null, $key = "prod_id"){
        if ($cartArray != null){
            $cart_id = array_map(function ($value) use($key){
                return $value[$key];
            }, $cartArray);
            return $cart_id;
        }
    }

    // Save for later
    public function saveForLater($prod_id = null, $saveTable = "wishlist", $fromTable = "cart"){
        if ($prod_id != null){
            $query = "INSERT INTO {$saveTable} SELECT * FROM {$fromTable} WHERE prod_id={$prod_id};";
            $query .= "DELETE FROM {$fromTable} WHERE prod_id={$prod_id};";

            // execute multiple query
            $result = $this->db->con->multi_query($query);

            if($result){
                header("Location :" . $_SERVER['PHP_SELF']);
            }
            return $result;
        }
    }
}
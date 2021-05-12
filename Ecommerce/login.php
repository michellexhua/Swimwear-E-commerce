<?php
$hn = 'localhost';
$un = 'hua112_eshop';
$pw = 'password';
$db = "hua112_eshop";

Class Database{
    public function getData(){
        $sql = "SELECT * FROM $this->tablename";

        $result = mysqli_query($this->con, $sql);

        if(mysqli_num_rows($result) > 0){
            return $result;
        }
    }
}
?>

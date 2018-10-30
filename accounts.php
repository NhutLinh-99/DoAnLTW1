<?php
include './db.php';
class accounts extends db {
    public function  selectuser(){
        $sql = "SELECT * FROM accounts";
    $result = $this->query($sql);
    return $result;
    }
}
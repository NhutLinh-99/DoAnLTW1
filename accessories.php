<?php
include './db.php';

class accessories extends db{
   
    
    public function getUsers($keyword=null){
        if($keyword){
            $sql = 'SELECT * FROM accessories WHERE ten LIKE "%'.$keyword.'%"';
        }else{
            $sql = 'SELECT * FROM accessories';
        }
        $accessories = $this->select($sql);
        return $accessories;
    }
    
    public function deleteUser($id) {
        $sql = 'DELETE FROM accessories WHERE id = '.$id;
        $this->query($sql);
    }
    
    public function insertUser($data) {
        $sql = 'INSERT INTO accessories (`ten`,`hinh`,`gia`)'.
                'VALUE ("'.$data['ten'].'","'.$data['hinh'].'","'.$data['gia'].'")';
        $this->query($sql);
    }
    
    public function findUser($id) {
        $sql = 'SELECT * FROM accessories WHERE id ='.$id;
        $user = $this->select($sql);
        return $user[0];
    }
    
    public function updateUser($data) {
        $sql = 'UPDATE `accessories`'.
                'SET `ten` = "'.$data['ten'].'", '.
                '`hinh` = "'.$data['hinh'].'", '.
                '`gia` = "'.$data['gia'].'" '.
                'WHERE id='.$data['id']; 
        $this->query($sql);
    }
    //them user
    public function insertUsers($add){
            $sql = 'INSERT INTO `accounts` (`id`,`username`, `password`)'
                  .'VALUES ("'.NULL.'","'.$add['username'].'","'.$add['password'].'")';
        $this->query($sql);
    }
}
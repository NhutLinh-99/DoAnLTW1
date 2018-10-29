<?php
include './db.php';

class users extends db{
   
    
    public function getUsers($keyword=null){
        if($keyword){
            $sql = 'SELECT * FROM users WHERE ten LIKE "%'.$keyword.'%"';
        }else{
            $sql = 'SELECT * FROM users';
        }
        $users = $this->select($sql);
        return $users;
    }
        
    public function deleteUser($id) {
        $sql = 'DELETE FROM users WHERE id = '.$id;
        $this->query($sql);
    }
    
    public function insertUser($data) {
        $sql = 'INSERT INTO users (`ten`,`hinh`,`gia`)'.
                'VALUE ("'.$data['ten'].'","'.$data['hinh'].'","'.$data['gia'].'")';
        $this->query($sql);
    }
    
    public function findUser($id) {
        $sql = 'SELECT * FROM users WHERE id ='.$id;
        $user = $this->select($sql);
        return $user[0];
    }
    
    public function updateUser($data) {
        $sql = 'UPDATE `users`'.
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


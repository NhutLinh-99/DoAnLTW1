<?php
include './db.php';

class computers extends db{
   
    
    public function getUsers($keyword=null){
        if($keyword){
            $sql = 'SELECT * FROM computers WHERE ten LIKE "%'.$keyword.'%"';
        }else{
            $sql = 'SELECT * FROM computers';
        }
        $computers = $this->select($sql);
        return $computers;
    }
    
    public function deleteUser($id) {
        $sql = 'DELETE FROM computers WHERE id = '.$id;
        $this->query($sql);
    }
    
    public function insertUser($data) {
        $sql = 'INSERT INTO computers (`ten`,`hinh`,`gia`)'.
                'VALUE ("'.$data['ten'].'","'.$data['hinh'].'","'.$data['gia'].'")';
        $this->query($sql);
    }
    
    public function findUser($id) {
        $sql = 'SELECT * FROM computers WHERE id ='.$id;
        $user = $this->select($sql);
        return $user[0];
    }
    
    public function updateUser($data) {
        $sql = 'UPDATE `computers`'.
                'SET `ten` = "'.$data['ten'].'", '.
                '`hinh` = "'.$data['hinh'].'", '.
                '`gia` = "'.$data['gia'].'" '.
                'WHERE id='.$data['id']; 
        $this->query($sql);
    }
  
}
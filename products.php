<?php
include './db.php';

class products extends db{
   
    //show
    public function getPhones($keyword=null){
        if($keyword){
            $sql = 'SELECT * FROM phones WHERE ten LIKE "%'.$keyword.'%"';
        }else{
            $sql = 'SELECT * FROM phones';
        }
        $phones = $this->select($sql);
        return $phones;
    }
    
    public function getComputers($keyword=null){
        if($keyword){
            $sql = 'SELECT * FROM computers WHERE ten LIKE "%'.$keyword.'%"';
        }else{
            $sql = 'SELECT * FROM computers';
        }
        $computers = $this->select($sql);
        return $computers;
    }
    
    public function getAccessories($keyword=null){
        if($keyword){
            $sql = 'SELECT * FROM accessories WHERE ten LIKE "%'.$keyword.'%"';
        }else{
            $sql = 'SELECT * FROM accessories';
        }
        $accessories = $this->select($sql);
        return $accessories;
    }
    //delete    
    public function deletePhone($id) {
        $sql = 'DELETE FROM phones WHERE id = '.$id;
        $this->query($sql);
    }
    
    public function deleteComputer($id) {
        $sql = 'DELETE FROM computers WHERE id = '.$id;
        $this->query($sql);
    }
    
    public function deleteAccess($id) {
        $sql = 'DELETE FROM accessories WHERE id = '.$id;
        $this->query($sql);
    }
    //Insert
    public function insertPhone($data) {
        $sql = 'INSERT INTO phones (`ten`,`hinh`,`gia`,`cauhinh`,`hang`)'.
                'VALUE ("'.$data['ten'].'","'.$data['hinh'].'","'.$data['gia'].'","'.$data['cauhinh'].'","'.$data['hang'].'")';
        $this->query($sql);
    }
   
    public function insertAccount($add){
        $sql = 'INSERT INTO accounts (`id`,`username`, `password`)'
              .'VALUES ("'.NULL.'","'.$add['username'].'","'.$add['password'].'")';
        $this->query($sql);
    }
    
    public function insertComputer($data) {
        $sql = 'INSERT INTO phones (`ten`,`hinh`,`gia`,`cauhinh`,`hang`)'.
                'VALUE ("'.$data['ten'].'","'.$data['hinh'].'","'.$data['gia'].'","'.$data['cauhinh'].'","'.$data['hang'].'")';
        $this->query($sql);
    }
    
    public function insertAccess($data) {
        $sql = 'INSERT INTO accessories (`ten`,`hinh`,`gia`)'.
                'VALUE ("'.$data['ten'].'","'.$data['hinh'].'","'.$data['gia'].'")';
        $this->query($sql);
    }
    ///Find
    public function findPhone($id) {
        $sql = 'SELECT * FROM phones WHERE id ='.$id;
        $user = $this->select($sql);
        return $user[0];
    }
    
    public function findComputer($id) {
        $sql = 'SELECT * FROM computers WHERE id ='.$id;
        $user = $this->select($sql);
        return $user[0];
    }
    
    public function findAccess($id) {
        $sql = 'SELECT * FROM accessories WHERE id ='.$id;
        $user = $this->select($sql);
        return $user[0];
    }
    //Update
    public function updatePhone($data) {
        $sql = 'UPDATE `phones`'.
                'SET `ten` = "'.$data['ten'].'", '.
                '`hinh` = "'.$data['hinh'].'", '.
                '`gia` = "'.$data['gia'].'", '.
                '`cauhinh` = "'.$data['cauhinh'].'", '.
                '`hang` = "'.$data['hang'].'" '.
                'WHERE id='.$data['id']; 
        $this->query($sql);
    }
    
     public function updateComputer($data) {
        $sql = 'UPDATE `computers`'.
                'SET `ten` = "'.$data['ten'].'", '.
                '`hinh` = "'.$data['hinh'].'", '.
                '`gia` = "'.$data['gia'].'", '.
                '`cauhinh` = "'.$data['cauhinh'].'", '.
                '`hang` = "'.$data['hang'].'" '.
                'WHERE id='.$data['id']; 
        $this->query($sql);
    }
    
    public function updateAccess($data) {
        $sql = 'UPDATE `accessories`'.
                'SET `ten` = "'.$data['ten'].'", '.
                '`hinh` = "'.$data['hinh'].'", '.
                '`gia` = "'.$data['gia'].'" '.
                'WHERE id='.$data['id']; 
        $this->query($sql);
    }
}

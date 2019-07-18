<?php

class DB_object{
    public $result;
    public $sql;
    public $r_arr=[];

    public function seleteAll(){
        global $connection;
        $this->sql="SELECT * FROM ".static::$db_table." ORDER BY id DESC";
        $this->result=$connection->query($this->sql);
        while($row=$this->result->fetch_assoc()){
            $this->r_arr[]=$row;
        }
        return $this->r_arr;
    }

    public function find_by_id($id){
        global $connection;
        $this->sql="SELECT * FROM ".static::$db_table." WHERE id=$id";
        $this->result=$connection->query($this->sql);
        while($row=$this->result->fetch_assoc()){
            $this->r_arr[]=$row;
        }
        return $this->r_arr;
    }
}
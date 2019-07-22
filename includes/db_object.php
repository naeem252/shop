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


    public function create(){
        global $connection;
        $set_property_arr=[];
        $set_val_property_arr=[];
        foreach (static::$table_col as $val){
            if(property_exists($this,$val)){
                $set_property_arr[]="{$val}";
            }
        }
        foreach (static::$table_col as $val){
            if(property_exists($this,$val)){
                $set_val_property_arr[]="'".scp($this->$val)."'";
            }
        }
        $this->sql="INSERT INTO ".static::$db_table."(".implode(", ",$set_property_arr).") ";
        $this->sql.="VALUES (".implode(", ",$set_val_property_arr).")";
        $this->result=$connection->query($this->sql);
        return $this->result;
    }




    public function update_by_id($id){
        global $connection;
        $set_val_property_arr=[];
        foreach (static::$table_col as $val){
            if(property_exists($this,$val)){
                $set_val_property_arr[]="{$val}='{$this->$val}'";
            }
        }
        $this->sql="UPDATE ".static::$db_table." SET ".implode(", ",$set_val_property_arr)." WHERE id=$id";
        $this->result=$connection->query($this->sql);
        return $this->result;
    }
}
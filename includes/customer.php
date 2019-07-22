<?php

class Customer extends DB_object{
    static $db_table='customers';
    public $name;
    public $device;
    public $device_problem;
    public $coupon_code;
    public $date;
    public $counter=0;
  public  $numResult;
  public $row;
    public $new_coupon_code;
    static $table_col=['name','device','device_problem','coupon_code',"date"];

    function __construct()
    {
        $this->get_last_coupon_code();
    }


    public function get_last_coupon_code(){
        global $connection;
        $this->sql="SELECT * FROM customers";
        $this->result=$connection->query($this->sql);
        $this->numResult=mysqli_num_rows($this->result);

        while ($this->row = $this->result->fetch_row()) {
            if (++$this->counter == $this->numResult) {
                // last row
                $this->new_coupon_code=$this->row['coupon_code']++;
            }
        }
    }
}

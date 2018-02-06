<?php

//define('DB_SERVER', 'localhost');
//define('DB_USER', 'ut38dqx1_dhanson');
//define('DB_PASS', 'dhanson@123');
//define('DB_NAME', 'ut38dqx1_Dhansons_Db');



class DbClass {

    //Database connection
    public $link;

    // public function __construct() {
    //     $link = mysql_connect("localhost", "root", "") or die('could not connect to database');
    //     $db = mysql_select_db("mydb", $link)or die('unable to connect database');
    // }

    public function __construct() {
        $link = mysql_connect("localhost", "root", "") or die('could not connect to database');
        $db = mysql_select_db("ut38dqx1_Dhansons_Db", $link)or die('unable to connect database');
    }
    //function for insert data into database
    public function insert_all($fname, $email, $contact, $reason, $descrip) {
        $qry = "insert into rental(fname,email,contact,reason,descrip,action,date)values('$fname','$email','$contact','$reason','$descrip','post',CURDATE())";
        $res = mysql_query($qry);
        return $res;
    }

    //function for pagination with limit
    public function pagination($startLimit) {
        $endLimit = $startLimit + 24;
        $startLimit -=1;
        $query = "select * from `rental`ORDER BY id DESC limit $startLimit,$endLimit";
        $res = mysql_query($query);
        return $res;
    }

    //function for pagination with all data
    public function paginationAll() {

        $query = "select * from `rental` ORDER BY id DESC";
        $res = mysql_query($query);
        $num = mysql_num_rows($res);
        return (int) $num;
    }

}

?>
<?php  


// yousef : extending a class names Questions from fat free default class named Mapper
class UsersModel extends DB\SQL\Mapper {

    function __construct(DB\SQL $db){
        parent::__construct($db, 'tblusers');
    }

    // yousef : fetch the latest user from db
    function testFunction(){
        //first argument is WHERE, second arg are options
    $this->load(array(), array("limit"=>1, "ORDER"=>"id DESC" )); // SELECT * FROM questions ORDER BY id DESC LIMIT 1

        return $this->query[0]; // result of the sql statement as an array and index 0
    }

    // yousef: insert new user into user table
    function insertUser(){
		$this->copyFrom('POST');
		$this->save(); // execute insert into the table
    }

    //yousef: to find a user by username
    function getUserByUsername( $username ){
        $this->load( array ( "username=?", $username ));
        return $this->query[0];
    }

    //yousef : all users from the tblUsers
    function getAllUsers(){
        $this->load(); 
        return $this->query[0];
    }

}



?>
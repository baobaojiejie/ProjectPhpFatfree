<?php  


// extending a class names Questions from fat free default class named Mapper
class Users extends DB\SQL\Mapper {

    function __construct(DB\SQL $db){
        parent::__construct($db, 'tblusers');
    }

    //fetch the latest qustion from db
    function testFunction(){
        //first argument is WHERE, second arg are options
    $this->load(array(), array("limit"=>1, "ORDER"=>"id DESC" )); // SELECT * FROM questions ORDER BY id DESC LIMIT 1

        return $this->query[0]; // result of the sql statement as an array and index 0
    }

    function allQuestions(){
        $this->load(); //SELECT * FROM questions

        return $this->query;
    }

    // function getById( $id ){
    //     $this->load( array ( "id=?", $id ));
    //     // SELECT * FROM questions WHERE id = $id

    //     return $this->query[0];
    // }


}



?>
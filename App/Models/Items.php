<?php // Items Model All related database queries

class Items extends DB\SQL\MAPPER{  //Extends fat-free DB\SQL\Mapper  parent class to have access to methods and fields

    // constructor
    function __construct(DB\SQL $db){

        // call parent construct pass $db and table name
        parent::__construct($db,'tblitems');
    } 

    //////////////// FUNCTIONS ////////////////////////////
    // Query the required data to DB and return to Controller for processing

    // Save New Item => Create
    function saveItem(){

        //Copying all values from global variable POST using fat-free		
    		$this->copyFrom('POST');
    		$this->save(); // execute save
    }

    // Adrian: Get by Id
	//**Note $qid variables is received from controller that receives it from the view
  	function getItemById($item_id){
        $this->load( array( "item_id = ?",$item_id ) );

        return $this->query[0];
    }


    // fetching all Items from DB
    function getAllItems(){
        $this->load();
        return $this->query;
    }


    // fetching only ACTIVE Items from DB
    function getActiveItems($owner){

        // time now as db format
        $now = date("Y-m-d H:i:s");
        
        $this->load( array( 'end_date_time > ? AND owner<>?', $now, $owner ));

        return $this->query;
    }

    // fetching only expired Items from DB
    function getExpiredItems(){
        // time now as db format
        $now = date("Y-m-d H:i:s");
        
        $this->load( array( 'end_date_time < ?', $now ));

        return $this->query;
    }

    // fetching myItems
    function getMyItems($username){
        $this->load( array( "owner = ?", $username ) );

        return $this->query;
    }

    // Yousef: delete an item from db
	function removeitemById( $id ){
		$this->load( array( "item_id = ?", $id ), array( "limit" => 1 ) );
		// like:  SELECT * FROM answers WHERE id = $id LIMIT 1

		$this->erase();
		// like : DELETE FROM answers WHERE id = $id AND ....;
	}

    // Zhao: 
    function getById($id){
        
        $this->load(array("item_id=?",$id ) );
            
        return $this->query[0];
        
    }
 
    function showFirst(){
        $this->load();
        return $this->query[0];
    }
 
    function listAllAvailableItems(){
 
        $now = date("Y-m-d H:i:s");
       
        $this->load(array( 'end_date_time > ?', $now),array('order'=>"end_date_time"));
 
        return $this->query;
    }

}

?>
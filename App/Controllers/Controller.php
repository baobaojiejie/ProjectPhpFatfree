<?php // Controller/Controller.php
 
/* This file is our Super Controller for all other controllers  */

class Controller{
 
  protected $db;
 
  function __construct(){
 
	//setting up db instance so we can use it
    $this->db = new DB\SQL(
      "mysql:host=localhost;port=3307;dbname=ipd25_projects", //db name
			"ipd25", //db user
			"ipd25_pw" // db password
    );
	}

}
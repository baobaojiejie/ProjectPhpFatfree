<?php // Item controller
require "includes/functions.php";

class ItemsController extends Controller{

    // reference variable declaration
    private $model;

    // constructor
    function __construct(){

        // calling parent constructor to initialize it
        parent::__construct();

        // Initializing $model reference variable with Items Model Object
        $this->model = new Items($this->db); // db comes from the Parent Controller
    } // end ItemsController constructor


    //////////////// FUNCTIONS ////////////////////////////
    // Ask the Model for VIEW required data and return to VIEW

    // test show addItem.html
    function displayItemsPage(){

        $view = new Template;
        echo $view->render("Items/items.html");
    }

    function displayAddItem(){

        $view = new Template;
        echo $view->render("Items/addItem.html");
    }


    // Save new Item (Entity)
    // We pass $f variable to have access to fat-free framework data members
    function addItem($f){
        // View Object
        $view = new Template;

        if($f->get('POST.description') != "" 
            && $f->get('POST.end_date_time') != ""
            && $f->get('POST.starting_bid') != "" ){
            

            // Validating end_date_time > date()
            $isEndDateValid =  isEndDateValid($f->get('POST.end_date_time'), $f);

            // Validating startingbid > 0 and integer
            $isStartingBidValid = isStartingBidValid($f->get('POST.starting_bid'), $f);
            
            // setting variables for default values
            // description
            setDefaultValue("description", $f->get('POST.description'),$f);

            // end_date_time
            if($isEndDateValid){
                // default value for end_date_time
                setDefaultValue("end_date_time", $f->get('POST.end_date_time'),$f);
            }

            // StartingBid
            if($isStartingBidValid){
                // default value for StartingBid
                setDefaultValue("starting_bid", $f->get('POST.starting_bid'),$f);
            }

            // If validation is ok save to DB
            if($isEndDateValid && $isStartingBidValid){
                
                //Asking the Model to save the data in DB
			    $this->model->saveItem();

                // message array set with values if items saved in database
                $f->set("message",$f->get('POST'));

			    //redirect to new success page
			    echo $view->render("Items/items.html");
            }else{
                //show error
                echo $view->render("Items/addItem.html");
            }
            
        }else{
            //show error
			$f->set("error", "All values must be entered");

            // Setting variables default values
            //description
            if($f->get('POST.description') != ""){
                setDefaultValue("description", $f->get('POST.description'),$f);
            }

            // end_date
            if($f->get('POST.end_date_time') != ""){
                setDefaultValue("end_date_time", $f->get('POST.end_date_time'),$f);
            }

            // StartingBid
            if($f->get('POST.starting_bid') != ""){
                // default value for StartingBid
                setDefaultValue("starting_bid", $f->get('POST.starting_bid'),$f);
            }

            echo $view->render("Items/addItem.html");
        }       
    }

    // Fetching data byId
    function searchItemById($f){
        //Ask model to get the item from db
        $result = $this->model->getItemById($f->get('GET.item_id'));

        // setting variable to use in HTML view
		$f->set('itemData',$result);
        
		// Rendering information received from MODEL to VIEW
		$view = new Template;
    	echo $view->render("Items/itemSuccessFullyAdded.html");
    }


    // fetch all Items
    function searchAllItems($f){

        $view = new Template;

        //Ask model to get all items from db
        $result = $this->model->getAllItems(); 

        if($result != null){
            // setting variable to use in HTML view
		    $f->set('AllItems',$result);
            $f->set('table','allItemsTbl');  
        }else{
            //setError($error, $f)
            setError("No items found in database");
        }
        echo $view->render("Items/items.html");
    }


    // Fetching active items
    function searchActiveItems($f){

        $view = new Template;


         // Yousef : a var to fetch username from th ecookie and use it for query with model function name : getMyItem
         $loggedInUser = $_COOKIE['cookie_username'];
        
        // asking model to fetch all only active item
        $activeItems = $this->model->getActiveItems($loggedInUser);

        if($activeItems != null){
            // setting variable to use in HTML view
		    $f->set('activeItems',$activeItems);
            $f->set('table','activeItems');  
        }else{
            //setError($error, $f)
            setError("No active items found in database",$f);
        }
        echo $view->render("Items/items.html");

    }

    // fetching expired Items
    function searchExpiredItems($f){
        $view = new Template;

        // asking model to fetch all expired items
        $expiredItems = $this->model->getExpiredItems();

        if($expiredItems != null){
            // setting variable to use in HTML view
		    $f->set('expiredItems',$expiredItems);
            $f->set('table','expiredItems');  
        }else{
            //setError($error, $f)
            setError("There are no expired items at this moment",$f);
        }
        echo $view->render("Items/items.html");
    }

    //Fetching my Items
    function searchMyItems($f){

        $view = new Template;


        // Yousef : a var to fetch username from th ecookie and use it for query with model function name : getMyItem
        $loggedInUsername = $_COOKIE['cookie_username'];
        
        // asking model to fetch my Items only
       
        $myItems = $this->model->getMyItems($loggedInUsername);   //yousef: add a parameter inseide ();

        if($myItems != null){
            // setting variable to use in HTML view
		    $f->set('myItems',$myItems);
            $f->set('table','myItems');  
        }else{
            //setError($error, $f)
            setError("You have no items for auction.",$f);
        }
        echo $view->render("Items/items.html");

    }


    // Yousef : Handler for deletion of an item by user who owns the item
    function deleteItemById( $f, $params){


        //yousef : interact with db to delete item 
        $this->model->removeitemById( $params['itemID'] );

        // redirect to same page
        $f->reroute('/myItems/');
    }

    //Zhao : Handel full detail view ad start biiding
    function displayDetailById($f,$params){ 
   
    
        $result = $this->model->getById($params['iid']);
        $f->set('fatchedItem', $result );
        $f->set('loginCheck',false);
        $f->set('SESSION.user',$result->owner);

        $bids = new Bids($this->db);
        $result1 = $bids->getBidsByItemId($params['iid']);

        if($result1)
        {
            $f->set("bids", $result1);
            $f->set("highestBid", $result1[0]->amount );
            $f->set("check",true);
            $f->set("error",false);
        }
        else
        {
            $f->set("check",false);
            $f->set("error",false);
        }

        // $f->reroute('/detailpage');

        $template = new Template;
        echo $template->render("detailpage.html");
        
    }


 



    // Zhao : show all the items
    // function showAll($f){
 
    //     $f->set('items',$this->model->listAllAvailableItems());
        
    //     $template = new Template;
        
    //     echo $template->render("itemlist.html");
        
    // }


    
    
}

?>
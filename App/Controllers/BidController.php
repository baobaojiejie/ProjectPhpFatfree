<?php
 
//zhao
 
class BidController extends Controller {
 
    private $model;  
 
    
    function __construct(){
        
        parent::__construct();      // get specific database connected.
 
        $this->model = new Bids( $this->db );   //put table's data in a variable
 
    }
 
    function bidItem($f,$params){
 
        
        // $loggedInUsername = $_COOKIE['cookie_username'];
        

        // $user = $f->get($loggedInUsername);
 
        // if(empty($user)){
        if (empty ($_COOKIE['cookie_username'])) {

 
        $modelItem = new Items($this->db);
        $result = $modelItem->getById($params['iid']);
        $f->set('fatchedItem', $result );
        $f->set('loginCheck',true);
        $f->set('error',false);
        
 
        // $bids = new Bids($this->db);
        // $result1 = $bids->getBidsByItemId($params['iid']);
        $result1 = $this->model->getBidsByItemId($params['iid']);
 
        if($result1)
        {
            $f->set("bids", $result1);
            $f->set("highestBid", $result1[0]->amount );
            $f->set("check",true);
        }
        else
        {
            $f->set("check",false);
        }
 
      
 
        $template = new Template;
        echo $template->render('detailpage.html');
 
        }

        else{
 
            $data = $f->get('POST.amount');
 
            $modelItem = new Items($this->db);
                
            $result = $modelItem->getById($params['iid']);
            $f->set('fatchedItem', $result );
            $f->set('loginCheck',false);
           
 
            $result1 = $this->model->getBidsByItemId($params['iid']);
                
            if($result1)
            {
                $f->set("bids", $result1);
                $f->set("highestBid", $result1[0]->amount );
                $f->set("check",true);
            }
            else
            {
                $f->set("check",false);
                $f->set("highestBid", $result->starting_bid);
            }
 
           
 
            if($data !='' && $data>$f->get('highestBid'))
            {
               
                
 
                $this->model->addBid();
                $f->set('error',false);
 
                $f->reroute('detailpage/@iid');
                }
                
            else{
 
                $f->set('error',true);
                
                $template = new Template;
                echo $template->render('detailpage.html');
            
            }
        }
     }
 
    
  
 
}
 
 
 
?>
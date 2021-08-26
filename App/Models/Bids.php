<?php  

//zhao

class Bids extends DB\SQL\Mapper {

    function __construct(DB\SQL $db){
        parent::__construct($db, 'tblbids');
    }

  

    function showFirst(){
        $this->load();
        return $this->query[0];
    }

    function getBidsByItemId($id){
        $bids = $this->load(array("item_id=?",$id),array("order"=>"amount DESC"));
        $count=$this->loaded();
        if($count==0)
        {
            return null;
        }
        else
        {
        return $this->query;
        }
    }

    function getBidsOfItem60(){

        $bids=$this->load(array("item_id=?",60),array("order"=>"amount DESC"));
      
        return $this->query;
    
    }

    function addBid(){

            $this->copyfrom('POST');
            $this->save();
    }
    

}
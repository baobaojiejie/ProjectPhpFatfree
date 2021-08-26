<?php

// Yousef : UsersController

class UsersController extends Controller {

    private $model;  // how we connect to a specific table

    //Yousef : executed as soon as the class is initialized
    function __construct(){
        parent::__construct(); // ensure parent constructor gets executed
        $this->model = new UsersModel( $this->db );
    }


    // Handler for the landing page (home page)
    function homepage(){
    

        // initialize my view template
        $view = new Template;
        //output the view
        echo $view->render("homepage.html");

    }

    // Yousef : Authentication and then leading to user panel
    function gotoUserPanel($f){ 
  
        //if web browser is not ok with undefined var of error
        $f->set("error", false);

        //keeping GET array credentials in var
        $username = $f->get('GET.username');
        $email = $f->get('GET.email');
        
        // null validation
        if($username == "" || $email == "") {
            // error for the null input
            $f->set("error", "All fields must be completed to sign in");
            //  output View
            $view = new Template;
            echo $view->render("homepage.html");
        }else {

            // yousef : save query result inside a variable type json object
            $userObj = ($this->model->getUserByUsername($username));

            if (is_null($userObj) || $userObj->email != $email ){  //validation for empty result of query and email correlation

                $f->set("error", "User can not be found or email is incorrect");
                //  output View
                $view = new Template;
                echo $view->render("homepage.html");
                

            }else{

                // successful login 
                // username and email are ok 
                $f->set("userData", $this->model->getUserByUsername($username));
                $f->set("username", $userObj->username);


                //create cookie for the user
                $expiration = time() + (60 * 60 * 60 * 24 * 10); //expiration time is Unix timestamp + 10 days
                setcookie ("cookie_username", $username, $expiration);

                $f->set("loggdIn", true);
                

                //output to VIEW
                $view = new Template;
                echo $view->render("currentUserPanel.html");

            }

        }   
    }

     // Yousef : handler for logout 
    function logoutUser($f){
         //deos cookie access code exist and has content as a sign of successful login
         if (!empty ($_COOKIE['cookie_username'])
            && isset($_COOKIE['cookie_username'])) {
            
            setcookie ("cookie_username", "", time()-1);
            $f->set("loggdIn", false);
            $f->reroute('/homepage/'); //redirect to new page
        }
    }


     // Yousef :Handler for user creation
     function createUserForm($f){
        $view = new Template;
        //output the view
        echo $view->render("createUserForm.html");

    }

    // Yousef : save a new user into the db
    function saveUser($f){

        $modelUsers = new UsersModel($this->db);

        if ( $f->get('POST.username') == "" || $f->get('POST.email') == "" || 
            $f->get('POST.name') == "" || $f->get('POST.password') == "")  {

                //show error
            $f->set("error", "All fields must be completed");
            $view = new Template;
            echo $view->render("createUserForm.html");
            
            }elseif ($_POST['password'] != $_POST['retype']) {
                $f->set("error", "Password and retyping password do not match");
                $view = new Template;
                echo $view->render("createUserForm.html");

                // Yousef: username only contain letters and numbers
            }elseif (preg_match('/[^A-Za-z0-9]/', $username)) {
                $f->set("error", "Only letters and numbers are acceptable for username");
                //  output View
                $view = new Template;
                echo $view->render("createUserForm.html");
            }else {
               //insert answer into db
            
                $this->model->insertUser();	// save to database
            
                // $f->reroute('/signUPCompleted/'. $f->get('POST.name')); // redirect to new page

                $view = new Template;
                //output the view
                echo $view->render("signUPCompleted.html");   

            }   
      
    }


}


?>
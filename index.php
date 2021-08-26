<?php 

/*THIS IS OUR WEB APP BRAIN 

1. loader for composer
2. initialize FAT-FREE
3. FAT FREE MVC parts loader
4. Routing
5. run the FAT-FREE 

*/


// 1.composer auto loader
require ("vendor/autoload.php");

//2. initialize FAT-FREE
$f3 = Base::instance();

// 3. config FAT-FREE
$f3->set('AUTOLOAD', "App/Controllers/,App/Models/"); //load MVC controllers and models
$f3->set('UI', "App/Views/");   //load MVC views


// 4. Routes - don't forget .htaccess
// "*" is a brilliant thing and means every request and it doesn't matter what
$f3->route("GET /*", function(){echo "I've created here using * for all other unknown requests";});
$f3->route("GET /", "UsersController->homepage");
$f3->route("GET /homepage", "UsersController->homepage");

$f3->route("GET /currentUser", "UsersController->currentUser");

// yousef
$f3->route("GET /createUser", "UsersController->createUser");
$f3->route("GET /signUp", "UsersController->signUp");
$f3->route("GET /currentUser", "UsersController->currentUser");
$f3->route("GET /createUserForm", "UsersController->createUserForm");
$f3->route("POST /saveUser", "UsersController->saveUser");
$f3->route("GET /gotoUserPanel", "UsersController->gotoUserPanel");
$f3->route("GET /logout", "UsersController->logoutUser");

//adrian
//Display addItem page
$f3->route("GET /addItem", "ItemsController->displayAddItem");

//Display items page
$f3->route("GET /items", "ItemsController->displayItemsPage");
// $f3->route("GET /detailpage/items", "ItemsController->displayItemsPage");



//AddItem
$f3->route("POST /addItem", "ItemsController->addItem");

//fetch from database
$f3->route("GET /searchItem", "ItemsController->searchItemById");

//All Items in DB
$f3->route("GET /allItems", "ItemsController->searchAllItems");

//Active Items
$f3->route("GET /activeItems", "ItemsController->searchActiveItems");

// My Items
$f3->route("GET /myItems", "ItemsController->searchMyItems");

// Expired Items
$f3->route("GET /expiredItems", "ItemsController->searchExpiredItems");

//deleting an item byId
$f3->route("GET /delete/@itemID", "ItemsController->deleteItemById");

// Zhao:
$f3->route("GET /detailpage/@iid", "ItemsController->displayDetailById");
$f3->route("POST /detailpage/@iid", "BidController->bidItem");



// $f3->set('CACHE',true);
// $f3->route("GET /detailpage", "ItemController->displayFirst");
// $f3->route("GET /itemlist", "ItemsController->showAll");
// $f3->route("POST /list", "ItemController->showAll");

// $f3->route("GET /detailpage/@iid", "ItemController->displayFirst");
// new Session();







// 5. execute FAT-FREE
$f3->run();


?>
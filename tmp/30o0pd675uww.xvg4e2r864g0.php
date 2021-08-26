<!-- header.html will be inserted here -->
<?php echo $this->render('header.html',NULL,get_defined_vars(),0); ?>
<br>
<main class="row">
    <div class="container-fluid col-12 border rounded py-3 px-4">
        <?php if ($message): ?>
            <div class="alert alert-success col-md-12 text-center" role="alert">"<?= ($message['description']) ?>" as a new item added successfully for the auction</div>
        <?php endif; ?>
        
        <div col-md-12>
            
            
            <?php if (($_COOKIE['cookie_username'] != null)): ?>
                
            <h1 class="fw-light">Item Management</h1>
            <br>
            <a class="btn btn-primary" href="activeItems/" role="button">Items on Auction</a>
            <!-- Must add userName Variables  in My Items link-->
            
            
            <a class="btn btn-primary" href="myItems/" role="button">My Items</a> 
            <a class="btn btn-primary" href="expiredItems/" role="button">Expired Items</a>
            <a class="btn btn-primary" href="addItem/" role="button">Add new Item</a>
            <a class="btn btn-primary" href="allItems/" role="button">All Items</a>

            
            <?php endif; ?>        
        </div>
        <br>
         <!-- All Items Table Starts here -->
        <?php if ($table  == 'allItemsTbl'): ?>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Item Id</th>
                    <th scope="col">Description</th>
                    <th scope="col">Bid Expiration Time</th>
                    <th scope="col">Starting Bid</th>
                    <th scope="col">Owner</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach (($AllItems?:[]) as $key=>$item): ?>
                    <tr>
                        <th scope="row"><?= ($item['item_id']) ?></th>
                        <td><?= ($item['description']) ?></td>
                        <td><?= ($item['end_date_time']) ?></td>
                        <td><?= ($item['starting_bid']) ?></td>
                        <td><?= ($item['owner']) ?></td>
                        <!-- <?php if ($table  == 'allItemsTbl'): ?>
                            <td><a class="btn btn-success" href="bid/<?= ($item['item_id']) ?>" role="button">Bid</a></td>
                        <?php endif; ?> -->
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
        <!-- All Items Table ends here -->
    
        <!-- Active Items Table Starts here -->
        <?php if ($table  == 'activeItems'): ?>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Item Id</th>
                    <th scope="col">Description</th>
                    <th scope="col">Bid Expiration Time</th>
                    <th scope="col">Starting Bid</th>
                    <th scope="col">Owner</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach (($activeItems?:[]) as $key=>$item): ?>
                    <tr>
                        <th scope="row"><?= ($item['item_id']) ?></th>
                        <td><?= ($item['description']) ?></td>
                        <td><?= ($item['end_date_time']) ?></td>
                        <td><?= ($item['starting_bid']) ?></td>
                        <td><?= ($item['owner']) ?></td>
                        <!-- Adrian: html lines -->
                        <!-- <td><a class="btn btn-success" href="bid/<?= ($item['item_id']) ?>" role="button">View Detail</a></td> -->
                        <!-- Zhao: html lines -->
                        <td><a class="btn btn-success" href="detailpage/<?= ($item['item_id']) ?>" role="button">View Detail</a></td>

                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
         <!-- Active Items Table Ends here -->

         <!-- My Items Table Starts here -->
         <?php if ($table  == 'myItems'): ?>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Item Id</th>
                    <th scope="col">Description</th>
                    <th scope="col">Bid Expiration Time</th>
                    <th scope="col">Starting Bid</th>
                    <th scope="col">Owner</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <?php foreach (($myItems?:[]) as $key=>$item): ?>
                    <tr>
                        <th scope="row"><?= ($item['item_id']) ?></th>
                        <td><?= ($item['description']) ?></td>
                        <td><?= ($item['end_date_time']) ?></td>
                        <td><?= ($item['starting_bid']) ?></td>
                        <td><?= ($item['owner']) ?></td>
                        <td><a class="btn btn-danger" href="delete/<?= ($item['item_id']) ?>" role="button">Delete</a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
         <!-- My Items Table Ends here -->
         
        <!--Expired Items Table Starts here -->
        <?php if ($table  == 'expiredItems'): ?>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Item Id</th>
                    <th scope="col">Description</th>
                    <th scope="col">Bid Expiration Time</th>
                    <th scope="col">Starting Bid</th>
                    <th scope="col">Owner</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach (($expiredItems?:[]) as $key=>$item): ?>
                    <tr class="table-secondary">
                        <th scope="row"><?= ($item['item_id']) ?></th>
                        <td><?= ($item['description']) ?></td>
                        <td><?= ($item['end_date_time']) ?></td>
                        <td><?= ($item['starting_bid']) ?></td>
                        <td><?= ($item['owner']) ?></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
        <!-- Expired Items Table Ends here -->
              
        






        <!-- insert biding part for the items from detailpage.html-->
        <!-- <?php if (true): ?>








            
        <?php endif; ?> -->

         








    </div>
</main>

<!-- footer.html gonna be inserted here  -->
<?php echo $this->render('footer.html',NULL,get_defined_vars(),0); ?>

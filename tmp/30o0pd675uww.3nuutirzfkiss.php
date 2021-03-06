<?php echo $this->render('header.html',NULL,get_defined_vars(),0); ?>
<!-- <body class="bg-light"> -->
    
<div class="container">
  <main>
    <div class="py-5 text-center">
      
      <h2>Item Detail</h2>
      <p class="lead">Please sign in to make your first bid</p>
    </div>

 
      <div class="col-md-10 col-lg-12">
        <h4 class="mb-3">Item Description: <span class="data"><?= ($fatchedItem['description']) ?></span></h4>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
                <h5>End Time : <span class="data"><?= ($fatchedItem['end_date_time']) ?></span></h5>
            </div>
            <div class="col-sm-6">
                <h5>Starting Bid : <span class="data"><?= ($fatchedItem['starting_bid']) ?></span></h5>
            </div>
            <div class="col-sm-6">
                <h5>Owner : <span class="data"><?= ($fatchedItem['owner']) ?></span></h5>
            </div>
          </div>
          <hr class="my-4">
          <?php if ($check == true): ?>
          <div class="col-sm-12" >
            <div class="col-sm-6">
                <h5>Highest Bid : <span class="data"><?= ($highestBid) ?></span></h5>
            </div>
            <div class="row g-3">
                <div class="col-sm-3">
                    <h5>Related Bids : </h5>
                </div>
                <div class="col-sm-9">
                    <table class="table">
                        <thead>
                          <tr>
                            
                            <th scope="col">User Name</th>
                            
                            <th scope="col">Bid Amount($)</th>
                            <th scope="col">Bid Time</th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php foreach (($bids?:[]) as $bid): ?>
                                <tr>
                                    <th scope="row"><?= ($bid['username']) ?></th>
                                    <td><?= ($bid['amount']) ?></td>
                                    <td><?= ($bid['date_time']) ?></td>
                                
                                  </tr>
                                
                            <?php endforeach; ?>
                     
                        </tbody>
                      </table>
                </div>
            </div>
                
              
          </div>
        <?php endif; ?>
        </form>
        
         
        <hr class="my-4">
        
        <?php if ($loginCheck == true): ?>
        <p class="lead">Please <span><a href="#">signin</a></span> or <span><a href="#">register</a></span> to bid</p>
        <?php endif; ?>
        <?php if ($error): ?>
            <div class="alert alert-danger" role="alert">Input cant be empty and  has to be positive integer and greater than the present highest bidding amount.Please re-enter</div>
        <?php endif; ?>
     
        <form method="post">
          <h4>Input Amout for Bid</h4> 
          <input type="text" class="w-50 form-control"  name="amount" placeholder="$">
          <input type="submit"class="w-50 btn btn-primary btn-lg" value="Bid">
          <input type="hidden" name="item_id" value="<?= ($fatchedItem['item_id']) ?>" />
          <input type="hidden" name="username" value="<?= ($fatchedItem['owner']) ?>" />
        </form>
      </div>
    </div>
  </main>
</div>

  <?php echo $this->render('footer.html',NULL,get_defined_vars(),0); ?>
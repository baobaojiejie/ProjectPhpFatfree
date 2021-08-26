<!-- header.html will be inserted here -->
<?php echo $this->render('header.html',NULL,get_defined_vars(),0); ?>
<br>
<main class="row">

  <!-- Add Item starts here -->
  <div class="container-fluid col-4 border rounded py-3 px-4">
    <h5 class="">Add Item</h5>

    <!-- Check if @error exist and is instantiated -->
    <?php if ($error): ?>
      <div class="alert alert-danger col-md-12" role="alert"><?= ($error) ?></div>
    <?php endif; ?>
    <hr>
    <form class="row g-3" method="POST">
    <div class="col-md-12">
      <label for="description" class="form-label">Description</label>
      <input type="text" class="form-control" id="description" name="description" placeholder="Item Description" value="<?= ($description) ?>">
    </div>
    <br>
    <div class="col-md-12">
      <label for="expirationDate" class="form-label">Auction Date Expiration</label>
      <input type="datetime-local" class="form-control" id="expirationDate" name="end_date_time"  value="<?= ($end_date_time) ?>">
    </div>
    <br>
    <div class="col-md-12">
      <label for="bidAmount" class="form-label">Starting Bid Amount</label>
      <input type="text" class="form-control" id="bidAmount" placeholder="Enter Value" name="starting_bid" value="<?= ($starting_bid) ?>">
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary w-50">Save</button>
      <!-- Must pass the username get variable from signed-in form TO BE ADDED (adrian)-->
      <!-- Yousef: set hidden input value by username by fetch from the cookie -->
      <input type="hidden" name="owner" value="<?= ($username = $_COOKIE['cookie_username']) ?>" /> 
      <br>
      <hr>
      <a class="btn btn-success" href="items/" role="button">Browse Items</a>
    </div>
    </form>
  </div>
</main>

<!-- footer.html gonna be inserted here  -->
<?php echo $this->render('footer.html',NULL,get_defined_vars(),0); ?>

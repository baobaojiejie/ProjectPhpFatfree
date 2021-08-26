<!-- header.html will be inserted here -->
<?php echo $this->render('header.html',NULL,get_defined_vars(),0); ?>
<main>
  <div class="container-fluid">
    <br>
  <form class="row g-3" method="POST" action="">
    <div class="col-md-4">
      <label for="inputEmail4" class="form-label">Description</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Item Description">
    </div>
    <div class="col-md-4">
      <label for="inputPassword4" class="form-label">Auction Date Expiration</label>
      <input type="datetime-local" class="form-control" id="inputPassword4">
    </div>
    <div class="col-md-4">
      <label for="inputAddress" class="form-label">Starting Bid Amount</label>
      <input type="text" class="form-control" id="inputAddress" placeholder="Enter Value">
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </form>
</div>
</main>

<!-- footer.html gonna be inserted here  -->
<?php echo $this->render('footer.html',NULL,get_defined_vars(),0); ?>

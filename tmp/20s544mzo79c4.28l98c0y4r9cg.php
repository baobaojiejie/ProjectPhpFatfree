<!-- header.html will be inserted here -->
<?php echo $this->render('header.html',NULL,get_defined_vars(),0); ?>
<br>
<main class="row">
<!-- Add Item starts here -->
  <div class="container-fluid col-4 border rounded py-3 px-4">
    
    <h5 class="">Add Item</h5>
    <hr>
  <form class="row g-3" method="POST">
    <div class="col-md-12">
      <label for="description" class="form-label">Description</label>
      <input type="text" class="form-control" id="description" name="description" placeholder="Item Description" value="">
    </div>
    <br>
    <div class="col-md-12">
      <label for="expirationDate" class="form-label">Auction Date Expiration</label>
      <input type="datetime-local" class="form-control" id="expirationDate" name="end_date_time">
    </div>
    <br>
    <div class="col-md-12">
      <label for="bidAmount" class="form-label">Starting Bid Amount</label>
      <input type="text" class="form-control" id="bidAmount" placeholder="Enter Value" name="starting_bid">
    </div>
    <div class="col-12">
      <button type="submit" class="btn btn-primary">Save</button>
    </div>
  </form>
</div>

<!-- Table starts here -->
<!-- <div class="container-fluid col-8 border py-3 px-4">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
      </tr>
      <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
      </tr>
      <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
      </tr>
    </tbody>
  </table>
</div> -->


</main>

<!-- footer.html gonna be inserted here  -->
<?php echo $this->render('footer.html',NULL,get_defined_vars(),0); ?>

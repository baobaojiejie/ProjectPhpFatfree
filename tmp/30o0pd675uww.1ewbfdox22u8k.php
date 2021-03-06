<!-- header.html will be inserted here -->
<?php echo $this->render('header.html',NULL,get_defined_vars(),0); ?>

<!-- <?php if ($_COOKIE['cookie_username'] == null): ?>

	<script>document.location.href = 'homepage';</script>

<?php endif; ?> -->

<main>
  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <?php if ($message): ?>
          <div class="alert alert-success col-md-12 text-center" role="alert">Item: <?= ($message['description']) ?> successfully added for auction</div>
      <?php endif; ?>
        <!-- f3 generate user name -->
        <h1 class="fw-light">Hello <?= ($userData['name']) ?></h1>
        <p class="lead text-muted">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam vero
          quis eius distinctio voluptates. Eligendi vero corporis dignissimos
          harum quae nihil! Nesciunt provident voluptatem tempore nemo quas ea
          eaque ducimus.
        </p>


        <hr>
        <!-- <a class="w-50 btn btn-lg btn-primary" href="items/<?= ($userData['username']) ?>" role="button">Items</a>  -->
        <a class="w-50 btn btn-lg btn-primary" href="items/" role="button">Item management</a> <br/><br/>
        
        <a class="w-50 btn btn-lg btn-primary" href="items/" role="button">Add a new Item</a> <br/><br/>

        <a class="w-50 btn btn-lg btn-primary" href="items/" role="button">List of all items</a> <br/><br/>

        <hr>
        <form action="logout" method="GET">
        <button class="w-50 btn btn-lg btn-primary" type="submit">
          Sign out
        </button>
      </form>
      </div>
  </section>

 
</main>



<!-- footer.html gonna be inserted here  -->
<?php echo $this->render('footer.html',NULL,get_defined_vars(),0); ?>

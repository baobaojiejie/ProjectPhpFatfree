<!-- header.html will be inserted here -->
<?php echo $this->render('header.html',NULL,get_defined_vars(),0); ?>

<main>
  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">item: <?= ($item['item_id']) ?></h1>

        <h1 class="fw-light">Deletion has been completed successfully</h1>
        <p class="lead text-muted">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam vero
          quis eius distinctio voluptates. Eligendi vero corporis dignissimos
          harum quae nihil! Nesciunt provident voluptatem tempore nemo quas ea
          eaque ducimus.
        </p>

        <a class="w-50 btn btn-lg btn-primary" href="currentUserPanel.html" role="button">Back to the Item Management</a> <br/><br/>

        
    </div>
  </section>

 
</main>

<!-- footer.html gonna be inserted here  -->
<?php echo $this->render('footer.html',NULL,get_defined_vars(),0); ?>

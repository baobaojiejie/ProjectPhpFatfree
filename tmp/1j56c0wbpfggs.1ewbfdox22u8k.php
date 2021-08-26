<!-- header.html will be inserted here -->
<?php echo $this->render('header.html',NULL,get_defined_vars(),0); ?>
<main>
  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Hello <?= ($data['name']) ?></h1>
        <p class="lead text-muted">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam vero
          quis eius distinctio voluptates. Eligendi vero corporis dignissimos
          harum quae nihil! Nesciunt provident voluptatem tempore nemo quas ea
          eaque ducimus.
        </p>

        <button class="w-50 btn btn-lg btn-primary" type="submit">
          Command 1
        </button><hr>
        <button class="w-50 btn btn-lg btn-primary" type="submit">
          Command 2
        </button><br/><br/>
        <button class="w-50 btn btn-lg btn-primary" type="submit">
          Command 3
        </button><hr>
        <form action="homepage">
        <button class="w-50 btn btn-lg btn-primary" type="submit">
          Sign out
        </button>
      </form>
      </div>
  </section>

 
</main>

<!-- footer.html gonna be inserted here  -->
<?php echo $this->render('footer.html',NULL,get_defined_vars(),0); ?>

<!-- header.html will be inserted here -->
<?php echo $this->render('header.html',NULL,get_defined_vars(),0); ?>
<main>
  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Auction Community</h1>
        <p class="lead text-muted">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam vero
          quis eius distinctio voluptates. Eligendi vero corporis dignissimos
          harum quae nihil! Nesciunt provident voluptatem tempore nemo quas ea
          eaque ducimus.
        </p>
        <div class="form-signin">
          <form action="currentUser" method="GET">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
              <input
                type="text"
                class="form-control"
                name="username"
                id="floatingInput"
                placeholder="User name"
              />
              <label for="username">Username</label>
            </div>
            <div class="form-floating">
              <input
                type="email"
                class="form-control"
                name="email"
                id="floatingPassword"
                placeholder="Your Email"
              />
              <label for="name">Email</label>
            </div>

            <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="remember-me" /> Remember me
              </label>
            </div>
            <button class="w-50 btn btn-lg btn-primary" type="submit">
              Sign in
            </button>
          </form>
          <hr />
          <form action="createUser">
            <button class="w-50 btn btn-lg btn-success" type="submit">
              Create new account
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>


  <!-- auction item list by showing as a grid map table -->
  <?php echo $this->render('items.html',NULL,get_defined_vars(),0); ?>
</main>

<!-- footer.html gonna be inserted here  -->
<?php echo $this->render('footer.html',NULL,get_defined_vars(),0); ?>

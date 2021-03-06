<!-- header.html will be inserted here -->
<?php echo $this->render('header.html',NULL,get_defined_vars(),0); ?>
<main>
  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Join us in Auction Land !</h1>
        <p class="lead text-muted">
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam vero
          quis eius distinctio voluptates. Eligendi harum quae nihil! 
        </p>
        <div class="form-signin">
          <form action="saveUser" method="POST">
            <h1 class="h3 mb-3 fw-normal">
              Please complete the registeration form
            </h1>
            <?php if ($error): ?>
              <div class="alert alert-danger" role="alert"><?= ($error) ?></div>
            <?php endif; ?>

            <div class="form-floating">
              <input
                type="text"
                class="form-control"
                name="name"
                id="floatingInput"
                placeholder="Your name"
              />
              <label for="name">Name</label>
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
                type="password"
                class="form-control"
                name="password"
                id="floatingPassword"
                placeholder="Password"
              />
              <label for="password">Password</label>
            </div>
            <div class="form-floating">
              <input
                type="password"
                class="form-control"
                name="retype"
                id="floatingPassword"
                placeholder="Retype Password"
              />
              <label for="retype">Retype Password</label>
            </div>

            <div class="checkbox mb-3">
              <label>
                <input type="checkbox" value="remember-me" /> I like to
                subscribe to weekly newsletter
              </label>
            </div>
            <button class="w-50 btn btn-lg btn-primary" type="submit">
              Sign up
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>

<!-- footer.html gonna be inserted here  -->
<?php echo $this->render('footer.html',NULL,get_defined_vars(),0); ?>

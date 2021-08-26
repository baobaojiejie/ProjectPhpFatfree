<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Item <?= ($itemData['description']) ?> saved Successfully added</h1>
</body>
</html> -->

<!-- header.html will be inserted here -->
<?php echo $this->render('header.html',NULL,get_defined_vars(),0); ?>
<main>
  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">Hello <?= ($data['name']) ?></h1>
        <p class="lead text-muted">
          Item: <?= ($savedItemData['description']) ?> has been added to the auction successfully
        </p>

        <button class="w-50 btn btn-lg btn-primary" type="submit">
          See All Items
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
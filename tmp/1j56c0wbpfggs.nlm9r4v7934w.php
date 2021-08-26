<!-- header part of all pages  -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Hugo 0.84.0" />
    <title>Album example · Bootstrap v5.0</title>

    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/5.0/examples/album/"
    />

    <!-- Bootstrap core CSS -->
    <link href="Style/css/bootstrap.css" rel="stylesheet" />

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body>
    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">About</h4>
              <p class="text-muted">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                Aliquid, nam. Architecto quo adipisci explicabo non earum odio
                voluptatum nihil, sit quae neque ullam distinctio dolor suscipit
                obcaecati cumque magnam libero.
              </p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">En | Fr</a></li>
                <li><a href="#" class="text-white">Contact us</a></li>
                <!-- Items -->
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-white" href="items/" id="dropdown08" data-bs-toggle="dropdown" aria-expanded="false">Items</a>
                  <ul class="dropdown-menu" aria-labelledby="dropdown08">
                    <li><a class="dropdown-item" href="items/">Browse Items</a></li>
                    <li><a class="dropdown-item" href="addItem/">Add Item</a></li>
                    <li><a class="dropdown-item" href="myItems/">Delete Item</a></li>
                  </ul>
                </li>
                <!-- BIDS -->
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-white" href="#" id="dropdown08" data-bs-toggle="dropdown" aria-expanded="false">Bids</a>
                  <ul class="dropdown-menu" aria-labelledby="dropdown08">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
        
      </div>
      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <strong>Bonjour Bye Auction</strong>
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarHeader"
            aria-controls="navbarHeader"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>


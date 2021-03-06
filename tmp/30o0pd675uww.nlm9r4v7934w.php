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
    <title>Bonjour Bye</title>

    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/5.0/examples/album/"
    />

    <!-- Bootstrap core CSS -->
    <link href="<?= ($BASE) ?>/Style/css/bootstrap.css" rel="stylesheet" />

    <!-- yousef: favicon -->
    <link rel="shortcut icon" type="image/svg" href="Style/favicon.svg" />

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
                This is a course project designed and developed by ZATY Group
                for PHP course, IPD-25, John Abbott College, Summer 2021. <br/> ZATY Group: Zhao,
                Adriano, Tasha, Yousef
              </p>
            </div>

            <!-- Navigation bar part  -->
            <div class="col-sm-4 offset-md-1 py-4">
              <ul class="list-unstyled">
                <a
                  class="nav-link text-white"
                  href="homepage/"
                  id="dropdown08"
                  aria-expanded="false"
                  >Home page</a
                >

                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle text-white"
                    href="items/"
                    id="dropdown08"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                    >Select Language</a
                  >
                  <ul class="dropdown-menu" aria-labelledby="dropdown08">
                    <li><a class="dropdown-item" href="<?= ($BASE) ?>/items/">English</a></li>
                    <li>
                      <a class="dropdown-item" href="<?= ($BASE) ?>/addItem/">French</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="<?= ($BASE) ?>/myItems/">Chinese</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="<?= ($BASE) ?>/myItems/">Persian</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="<?= ($BASE) ?>/myItems/">Spanish</a>
                    </li>
                  </ul>
                </li>


                <!-- User Items -->
                <!-- f3 check for logged in user -->
                <!-- <?php if ($gender=='M'): ?><?php endif; ?> -->

                <?php if (($_COOKIE['cookie_username'] != null)): ?>
                


                <li class="nav-item dropdown">
                  <a
                    class="nav-link dropdown-toggle text-white"
                    href="items/"
                    id="dropdown08"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                    >User Area</a
                  >
                  <ul class="dropdown-menu" aria-labelledby="dropdown08">
                    <li>
                      <a class="dropdown-item" href="<?= ($BASE) ?>/items/">Item Management</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="<?= ($BASE) ?>/addItem/">Add Item</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="<?= ($BASE) ?>/myItems/">Delete Item</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="<?= ($BASE) ?>/logout/">Sign out</a>
                    </li>
                  </ul>
                </li>

                
                
              <?php endif; ?>
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


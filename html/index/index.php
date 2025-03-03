<?php include(HTML_DIR. 'overall/header.php'); ?>

  <body>
      <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
        <div class="container-fluid">
          <a class="navbar-brand" href="<?php echo APP_URL; ?>">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">

                <?php
                  if(!isset($_SESSION['app_id'])){
                    echo '<a class="nav-link active" aria-current="page" href="?view=login">Login</a>';
                  } else {
                    echo '<a class="nav-link active" aria-current="page" href="?view=logout">'. strtoupper($_users[$_SESSION['app_id']]['nombre']) .'</a>';
                  }
                ?>
                
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>

            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

  <main>
    <h1>Hello, world!</h1>
  </main>

  <?php include(HTML_DIR. 'overall/footer.php'); ?>
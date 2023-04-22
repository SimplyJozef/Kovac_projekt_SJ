<header id="#top">
      <nav class="main-navigation navbar navbar-expand-lg navbar-light">
          <div class="container">
            <a class="navbar-brand" href="index.php"><img src="assets/images/white-logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

           

            <div class="collapse navbar-collapse" id="navbarNav">
                
              <ul class="navbar-nav">

                <?php
                include('functions/menu.php');
                 print_menu($menu); ?>
            </div>
          </div>
      </nav>
  </header>
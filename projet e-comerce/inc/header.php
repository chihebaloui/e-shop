<nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">E-SHOP</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Categories
                </a>
                <ul class="dropdown-menu">
                  <?php
                  foreach($categories as $categories)
                  print ' <li><a class="dropdown-item" href="#">'.$categories['nom'].'</a></li>';
                  ?>
                 
        
                </ul>
              </li>
              <?php if (isset($_SESSION['nom'])){
                print '<li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="profil.php">profile</a>
                  </li>';
              } 
              else{
                print'<li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="connexion.php">connexion</a>
                  </li>
             </li>
             <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="registre.php">registre</a>
              </li>
             <li>';
              }?>
             
            


             </li>
            </ul>
            <form class="d-flex" role="search" action="index.php" method="POST">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <?php
             if (isset($_SESSION['nom'])){
              print '
            <a href="deconnexion.php" class="btn btn-primary">déconnexion</a>';}

            ?>
          </div>
        </div>
      </nav>
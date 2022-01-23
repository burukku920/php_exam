<nav class="navbar navbar-expand-lg navbar-light btn-warning">
  <div class="container-fluid">
    <a class="navbar-brand btn-primary" href="#">Php_exam_forum</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link btn-secondary" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn-secondary" href="articles.php">New</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn-secondary" href="mesPost.php">Mes Articles</a>
        </li>
        
        <?php
        if(isset($_SESSION['auth'])) {
        ?>
          <li class="nav-item">
            <a class="nav-link btn-danger" href="actions/users/logout.php">Logout</a>
          </li>
          <?php
        }
        ?>

        <li class="nav-item">
          <a class="nav-link btn-secondary" href="profil.php?id=<?php echo $_SESSION['id']?>">Mon profil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn-success" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link btn-light" href="register.php">Register</a>
        </li>
    </ul>
    </div>
  </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top" id="mainNav">
  <div class="container">
  <a class="navbar-brand font-weight-bold" href="#page-top">NontonLah!</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <?php if (isset($_SESSION["tbl_user"])): ?>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
      <?php else: ?>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <?php endif ?>
     
    </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger " href="https://www.instagram.com/rickymiftahuddin/?hl=id">Hubungi Kami</a>
            </li>
          </ul>
  </div>
</nav>

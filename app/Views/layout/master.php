<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url(relativePath: 'assets/style/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url(relativePath: 'assets/style/S_inscrire.css'); ?>">
    <title>Get Taxi</title>
    
</head>
<body>
<nav class="navbar navbar-expand-lg" style="background-color: #ef9f34;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Get Taxi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Client</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Chaufeur</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="<?= base_url('\se_connecter'); ?>" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Se connecter
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="<?= base_url(relativePath: '/S_inscrire'); ?>">S'inscrire</a></li>
          <li><a class="dropdown-item" href="<?= base_url('/se_connecter'); ?>">Se connecter</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
        <?= $this->renderSection('content') ?>
    </div>
    <footer class="text-center mt-5">
        <p>&copy; <?= date('Y'); ?> KARKOURI Ayoub. All rights reserved.</p>
    </footer>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>

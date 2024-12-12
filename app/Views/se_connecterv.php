<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/style/bootstrap.min.css'); ?>">
    
    <title>Get Taxi</title>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg" style="background-color: #ef9f34;">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">Get Taxi</a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-white" href="/about">About</a>
          </li>
          
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle text-white"
              href="#"
              id="navbarDropdown"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
            S'inscrire
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li>
                <a
                  class="dropdown-item"
                  href="<?= base_url('/S_inscrire'); ?>"
                >S'inscrire</a>
              </li>
              <li>
                <a
                  class="dropdown-item"
                  href="<?= base_url('/se_connecter'); ?>"
                >Se connecter</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="container d-flex flex-column align-items-center my-5">
    <!-- Taxi Image -->
    <img
      src="<?= base_url('assets/img/taxi.png'); ?>"
      class="img-fluid mb-4"
      alt="Taxi"
      style="max-width: 200px;"
    />
    <h2 class="mb-4">Se connecter</h2>
    <!-- Login Form -->
    <!-- Login Form -->
    <form
  class="bg-white p-4 rounded shadow"
  style="max-width: 400px; width: 100%;"
  action="<?= base_url('/authentifier'); ?>"  
  method="post"  
>
<?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('error'); ?></div>
<?php endif; ?>

  <div class="mb-3">
    <label for="email" class="form-label">Adresse email</label>
    <input
      type="email"
      class="form-control"
      id="email"
      name="email"  
      required
    />
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Mot de passe</label>
    <input
      type="password"
      class="form-control"
      id="password"
      name="password"  
      required
    />
  </div>
  <button type="submit" class="btn btn-primary w-100">Se connecter</button>
</form>


  </div>

  <!-- Footer -->
  <footer
    class="text-center mt-auto py-3"
    style="background-color: #ef9f34; color: white;"
  >
    <p class="mb-0">&copy; <?= date('Y'); ?> KARKOURI Ayoub. All rights reserved.</p>
  </footer>

  <script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>

</html>

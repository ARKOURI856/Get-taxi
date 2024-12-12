<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Taxi</title>
    <link rel="stylesheet" href="<?= base_url(relativePath: 'assets/style/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url(relativePath: 'assets/style/style.css'); ?>">
</head>
<body>

    <!-- Header Section -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Get Taxi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        
        
      </ul>
      <form class="d-flex">
       <a class="dropdown-item" href="/S_inscrire">Client</a>
       <a class="dropdown-item" href="/S_inscrire_chauff">Chaufeur</a>
       <a class="dropdown-item" href="/about">About</a>
       
      </form>
    </div>
  </div>
</nav>

    <!-- Main Content Section -->
    <section class="hero">
        <div class="text-content">
        <h1>Welcome to Your Taxi Service</h1>
<p>Get reliable rides at your fingertips. Book a taxi anytime, anywhere.</p>

<a href="<?= base_url('/S_inscrire_chauff'); ?>" class="btn btn-warning">Get start</a>
            </button>
        </div>
        <div class="image-content">
            <img src="<?= base_url('assets/img/index.png'); ?>" alt="Taxi Service Illustration" class="index_img">
        </div>
       
    </section>

    <footer class="text-center mt-5">
        <p>&copy; <?= date('Y'); ?> KARKOURI Ayoub. All rights reserved.</p>
    </footer>
    <script src="assets/js/bootstrap.bundle.min.js"></script></body>
</html>

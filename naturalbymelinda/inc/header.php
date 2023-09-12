<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>
    <link rel="stylesheet" href="css/header.css">
</head>
<body>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" routerLink="" routerLinkActive="active-link"
            [routerLinkActiveOptions]="{exact:true}">Acasa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" routerLink="about.php" routerLinkActive="active-link">Despre</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Servicii
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" routerLink="/bridalmkp">Bridal Makeup</a></li>
            <li><a class="dropdown-item" routerLink="/destinationwed">Destination Weddings</a></li>
            <li><a class="dropdown-item" routerLink="/skincare">Skincare</a></li>
            <li><a class="dropdown-item" routerLink="/skincare">Workshops</a></li>
            <li><a class="dropdown-item" routerLink="/skincare">Courses</a></li>
          </ul>
        </li>
      </ul>
      <a class="navbar-brand" routerLink="">
        <img src="images/logo.jpg">
      </a>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" routerLink="portofolio" routerLinkActive="active-link">Portofoliu</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" routerLink="blog" routerLinkActive="active-link">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" routerLink="contact" routerLinkActive="active-link">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

</body>
</html>
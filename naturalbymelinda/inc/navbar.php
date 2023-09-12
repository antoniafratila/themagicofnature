<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar</title>
  <link rel="stylesheet" href="css/navbar.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link p-3 mx-5" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-3 mx-5" href="about.php">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle p-3 mx-5" href="#" role="button" data-bs-toggle="dropdown" data-bs-target="#serviciiDropdown" aria-expanded="false">
              Servicii
            </a>
            <ul class="dropdown-menu" id="serviciiDropdown">
              <li><a class="dropdown-item" href="bridalmkp.php">Bridal Makeup</a></li>
              <li><a class="dropdown-item" href="destinationwed">Destination Wedding</a></li>
              <li><a class="dropdown-item" href="skincare.php">Skincare</a></li>
              <li><a class="dropdown-item" href="workshop.php">Workshops</a></li>
              <li><a class="dropdown-item" href="courses.php">Courses</a></li>
            </ul>
          </li>
        </ul>
        <img src="images/logo.jpg" class="img-fluid" style="height: 100px; width: 100px;">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link p-3 mx-5" href="portofolio.php">Portofolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-3 mx-5" href="about.php">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link p-3 mx-5" href="contact.php">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>
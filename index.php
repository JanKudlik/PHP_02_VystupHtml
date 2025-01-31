<!doctype html>
<html lang="en">
<?php 
$authorName = "Jan Kudlík";
echo "<head>
  <meta charset=\"utf-8\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
  <meta name= $authorName content=\"yourName\">
  <meta name=\"description\" content=\"\">
  <title>EduCover Template for PVA</title>
  <!-- Bootstrap core CSS -->
  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.css\">
  <!-- Custom styles for this template -->
  <link href=\"cover.css\" rel=\"stylesheet\">
</head>"; 
?>

<body class="text-center">

<div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
  <header class="masthead mb-auto">
    <div class="inner">
      <h3 class="masthead-brand">EduCover</h3>
      <nav class="nav nav-masthead justify-content-center">
        <a class="nav-link active" href="#">Home</a>
        <a class="nav-link" href="aboutme.php"> <?php 
        echo "About " . "$authorName";
        ?>
        </a>
        <a class="nav-link" href="#">Contact</a>
      </nav>
    </div>
  </header>

  <main role="main" class="inner cover">
    <h1 class="cover-heading">
      <?php
      echo "Hello World!"
      ?>
    </h1>
    <p class="lead">EduCover is a one-page template used as a basis for teaching the subject PVA Programming and Development at the Business Academy in Opava.</p>
    <p class="lead">
      <a href="#" class="btn btn-lg btn-secondary">Learn more</a>
    </p>
  </main>

  <footer class="mastfoot mt-auto">
    <div class="inner">
      <p>EduCover template for PVA, by <a href="https://github.com/AdamFiser">Adam</a> </p>
    </div>
  </footer>
</div>



</body>
</html>
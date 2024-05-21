<?php
include 'db.php';
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SYALOMITHA PALANDENG</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>
<body>
  <!-- loader -->
  <div class="bg-loader">
    <div class="loader"></div>
  </div>

  <!-- header -->
  <header>
    <div class="container">
      <h1><a href="index.html">SYALOMITHA PALANDENG</a></h1>
      <ul>
        <li class="active"><a href="index.html">HOME</a></li>
        <li><a href="gallery.html">GALLERY</a></li>
        <li><a href="blog.html">BLOG</a></li>
        <li><a href="contact.html">CONTACT</a></li>
      </ul>
    </div>
  </header>
  <?php
            $sql = "SELECT JUDUL, LINK FROM blog";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<article>";
                    echo "<h3>" . $row["title"] . "</h3>";
                    echo "<p><a href='" . $row["LINK"] . "'>" . $row["JUDUL"] . "</a></p>";
                    echo "</article>";
                }
            } else {
                echo "<p>No blog posts found.</p>";
            }
            ?>

  <!-- banner -->
  <section class="banner">
    <h2>WELCOME TO MY WEBSITE</h2>
  </section>

  <!-- about -->
  <section class="home">
    <div class="container">
      <h3>HOME</h3>
      <p> Welcome to my website</p>
    </div>
  </section>


  <button onclick="toggleDarkMode()">Dark Mode</button>
</body>
</html>

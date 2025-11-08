<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />

  <!-- AOS Animation Library -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  
  <!-- External CSS -->
  <link rel="stylesheet" href="../style.css">

  <!-- Title -->
  <meta name="author" content="Delcon Industries">
<meta name="publisher" content="Delcon Industries">
<title> <?php echo isset($page_title) ? $page_title : 'HROP Sheet Manufacturer in Palwal | High-Quality Hot Rolled Pickled & Oiled Sheets'; ?> </title>

<meta name="description" content="  <?php echo isset($description) ? $description : 'We are a trusted HROP Sheet manufacturer in Palwal offering durable, precision-engineered hot rolled pickled and oiled sheets for construction, fabrication, and industrial use. Reliable quality, competitive price, and long service life.'; ?>">
<meta name="keywords" content="<?php echo isset($keyword) ? $keyword : 'HROP Sheet Manufacturer in Palwal, Hot Rolled Pickled and Oiled Sheet Supplier, Best HROP Sheet Manufacturer, Industrial HROP Sheets Palwal, Durable HROP Steel Sheets'; ?>">
<link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
</head>
<body>
    <section class="navbar">
          <section class="logo"><img src="../img/dalcon-logo.png" alt=""></section>
          <button class="hamburger" id="hamburger">&#9776;</button>
          <nav class="nav-links" id="navLinks">
            <a href="../Palwal/index.php">Home</a>
            <a href="../Palwal/about.php">About Us</a>  
            <div class="dropdown">
                <button class="dropbtn"><a href="../Palwal/HRSHEET.php">Products</a> 
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                  <a href="../Palwal/HRSHEET.php">HR Sheets</a>
                  <a href="../Palwal/CRSHEETS.php">CR sheets</a>
                  <a href="../Palwal/CRCIRCLE.php">CR Circle</a>
                  <a href="../Palwal/HRCIRCLE.php">HR Circle</a>
                  <a href="../Palwal/HROPSHEETS.php">HROP Sheets</a>
                </div>
              </div> 
            <a href="../Palwal/contact.php">Contact Us</a>
          </nav>
        </section>


        <script>
      const hamburger = document.getElementById("hamburger");
      const navLinks = document.getElementById("navLinks");

      hamburger.addEventListener("click", () => {
        navLinks.style.display =
          navLinks.style.display === "flex" ? "none" : "flex";
      });
    </script>

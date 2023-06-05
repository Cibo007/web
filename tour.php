<?php
$conn = mysqli_connect("localhost", "root", "", "wisata");


$result = mysqli_query($conn, "select * from tour");
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style\tour.css" />
  <link
    href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@500&family=Kaushan+Script&family=Montserrat&family=Roboto:ital@1&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <title>Document</title>
</head>

<body>

  <!-- Navbar start -->
  <div class="navbar">
    <nav>
      <div class="nav-logo">
        <a href="">
          <h1>Pesonaindo</h1>
        </a>
      </div>

      <div class="nav-menu">
        <ul>
          <a class="menu home" href="main.php">
            <li>Home</li>
          </a>
          <a class="menu about" href="">
            <li>About</li>
          </a>
          <a class="menu tour" href="#">
            <li>Tour</li>
          </a>
          <a class="menu contact" href="">
            <li>Contact</li>
          </a>
        </ul>
      </div>

      <div class="profile">
        <!-- <span>Pain</span> -->
        <img src="asset\img\bromo.jpg" alt="" />
        <a href="index.html"><i class="fa-solid fa-door-open fa-xl" style="color: #ffffff;"></i></a>
      </div>
    </nav>
  </div>

  <!-- Navbar end -->

  <div id="heigth"></div>
  <div class="container" >

    <?php foreach ($result as $res): ?>
      <div class="card">

        <div class="wrapper-right">
          <div class="img-content">
            <img src="asset\img\<?php echo $res["gambar"] ?>" alt="">
          </div>
          <div class="tag-logo">
            <span>Pesonaindo</span>
          </div>
        </div>

        <div class="wrapper-left">
          <div class="title">
            <span>
              <?php echo $res["nama"] ?>
            </span>
          </div>
          <div class="desc">
            <span>
              <?php echo $res["deskripsi"] ?>
            </span>
          </div>
          <div class="location">
            <span class="logo"><i class="fa-solid fa-location-dot fa-xl" style="color: #ffffff;"></i></span>
            <span class="loc">
              <?php echo $res["lokasi"] ?>
          </div>
        </div>
      </div>

    <?php endforeach ?>
  </div>    
<!-- footer start -->
<div class="footer">
      <div class="footer-left">
        <div class="footer-menu">
          <h2 class="f-title ft-left">footer left</h2>
          <ul>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur repellat necessitatibus</li>
            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae quibusdam modi</li>
          </ul>
        </div>
      </div>

      <div class="footer-center">
        <div class="footer-about">
          <h2 class="f-title ft-about">About Us</h2>
          <span class="f-about-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur repellat necessitatibus</span>
        </div>
        <hr>
        <div class="footer-socialmedia">
          <h2 class="f-title ft-socialmedia">Social Media</h2>
         <ul>
          <a href=""><li><svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512"><style>svg{fill:#000000}</style><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg></li></a>
          <a href=""><li><svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512"><style>svg{fill:#000000}</style><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg></li></a>
          <a href=""><li><svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 448 512"><style>svg{fill:#000000}</style><path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z"/></svg></li></a>
          <a href=""><li><svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 448 512"><style>svg{fill:#000000}</style><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg></li></a>
          <a href=""><li><svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 496 512"><style>svg{fill:#000000}</style><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg></li></a>
         </ul>
        </div>
      </div>

      <div class="footer-right">
        <div class="footer-help">
          <h2 class="f-title ft-right">Help</h2>
          <ul>
            <a href=""><li>- FAQ</li></a>
            <a href="tos.php"><li>- Term Of Service</li></a>
          </ul>
        </div>
      </div>
    </div>
    
    <div id="footer-bottom">
      <a href="#heigth"><div class="circle-up">
        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><path d="M201.4 137.4c12.5-12.5 32.8-12.5 45.3 0l160 160c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L224 205.3 86.6 342.6c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3l160-160z"/></svg>
      </div>
    </a>
    </div>
    <!-- footer end -->
    <script src="script js\script.js"></script>
</body>

</html>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="css\style.css?v=<?php echo time(); ?>">
</head>

<body>
  <header>
    <nav>
      <div class="logo">
        <img src="img\logo\logo5_28_14940.png" alt="" id="logoi" />
      </div>
      <ul>
        <li><a href="women.html">WOMEN</a></li>
        <li><a href="men.html">MEN</a></li>
        <li><a href="kids.html">KIDS</a></li>
        <li><a href="brands.html">BRANDS</a></li>
      </ul>
      <div class="searchdiv">
        <input type="text" name="" id="" placeholder="Search Here" />
        <img src=".\img\logo\images.jpg" alt="" class="searchimg" />
      </div>
      <div class="container_login">
        <!-- name show after login where login button exist  -->
        <?php
        if (isset($_SESSION["name"])) {
        ?>
          <div class="shows">
            <?php echo $_SESSION["name"] ?>
          </div>
        <?php
        }
        ?>

        <?php
        if (isset($_SESSION["name"])) {
        ?>
          <a href="php\logout.php"><button class="log">Logout</button></a>
        <?php
        }
        ?>
        <!-- before login,login button show in header -->
        <?php
        if (!isset($_SESSION["name"])) {
        ?>
          <button class="logout">Admin</button>
          <a href="loginsystm.html"><button class="log" value="login">login</button></a>
        <?php
        }
        ?>
      </div>
    </nav>
  </header>
  <main>
    <!-- for big image -->
    <div class="bgimage-container">
      <div class="big-imagediv">
        <img src=".\img\bgimage\images.jpeg" alt="" id="big-image" />
      </div>
    </div>
    <!-- 
    ##################################################################################
                               first product line start here -->
    <div class="titletext">
      <h3>Popular on Shopping Mart </h3>
    </div>
    <div class="container-product1">
      <div class="product">
        <div class="img-container1">
          <a href=".\showimg\secondpage11.php">
            <img src=".\img\homepage\WhatsApp Image 2022-05-29 at 1.05.20 PM.jpeg " alt="" height="150px" class="imgsize" /></a>
        </div>
        <div class="textbelow">
          <h4>Selvia</h4>
          <p>women fit and black dress</p>

          <h5 class="Rs">Rs.699</h5>
        </div>
      </div>
      <div class="product">
        <div class="img-container1">
          <a href=".\showimg\secondpage12.php">
            <img src=".\img\homepage\WhatsApp Image 2022-05-29 at 1.05.21 PM (1).jpeg" alt="" height="150px" class="imgsize" /></a>
        </div>
        <div class="textbelow">
          <h4>Selvia</h4>
          <p>women a line white dress</p>

          <h5 class="Rs">Rs.599</h5>
        </div>
      </div>
      <div class="product">
        <div class="img-container1">
          <a href=".\showimg\secondpage13.php">
            <img src=".\img\homepage\WhatsApp Image 2022-05-29 at 1.05.21 PM.jpeg" alt="" height="150px" class="imgsize" /></a>
        </div>
        <div class="textbelow">
          <h4>Selvia</h4>
          <p>women bodycon and red dress</p>

          <h5 class="Rs">Rs.499</h5>
        </div>
      </div>
      <div class="product">
        <div class="img-container1">
          <a href=".\showimg\secondpage14.php">
            <img src=".\img\homepage\WhatsApp Image 2022-05-29 at 1.05.20 PM (1).jpeg" alt="" height="150px" class="imgsize" /></a>
        </div>
        <div class="textbelow">
          <h4>Selvia</h4>
          <p>women a line white dress</p>

          <h5 class="Rs">Rs.399</h5>
        </div>
      </div>
      <div class="product">
        <div class="img-container1">
          <a href=".\showimg\secondpage15.php">
            <img src=".\img\homepage\WhatsApp Image 2022-05-29 at 1.05.19 PM.jpeg" alt="" height="150px" class="imgsize" /></a>
        </div>
        <div class="textbelow">
          <h4>Selvia</h4>
          <p>women a line red dress</p>

          <h5 class="Rs">Rs.299</h5>
        </div>
      </div>
    </div>
    <!-- 
    ##################################################################################
                               2nd product line start here -->
    <div class="titletext">
      <h3>Trending Now For Men</h3>
    </div>
    <div class="container-product1">
      <div class="product">
        <div class="img-container">
          <a href=".\showimg\secondpage16.php">
            <img src=".\img\homepage\Product 21.jpeg" alt="" height="150px" class="imgsize imgradius2" /></a>
        </div>
        <div class="textbelow">
          <h4>Polo Plus</h4>
          <p>solid men polo t-shirt</p>

          <h5 class="Rs">Rs.499</h5>
        </div>
      </div>
      <div class="product">
        <div class="img-container">
          <a href=".\showimg\secondpage17.php">
            <img src=".\img\homepage\Product 22.jpeg" alt="" height="150px" class="imgsize imgradius2" /></a>
        </div>
        <div class="textbelow">
          <h4>Alan Jonson</h4>
          <p>solid men alan t-shirt</p>

          <h5 class="Rs">Rs.499</h5>
        </div>
      </div>
      <div class="product">
        <div class="img-container">
          <a href=".\showimg\secondpage18.php">
            <img src=".\img\homepage\Product 23.jpeg" alt="" height="150px" class="imgsize imgradius2" /></a>
        </div>
        <div class="textbelow">
          <h4>Ganshon</h4>
          <p>solid men shon t-shirt</p>

          <h5 class="Rs">Rs.499</h5>
        </div>
      </div>
      <div class="product">
        <div class="img-container">
          <a href=".\showimg\secondpage19.php">
            <img src=".\img\homepage\Product 24.jpeg" alt="" height="150px" class="imgsize imgradius2" /></a>
        </div>
        <div class="textbelow">
          <h4>Hijacked</h4>
          <p>awesome t-shirt for men</p>

          <h5 class="Rs">Rs.499</h5>
        </div>
      </div>
      <div class="product">
        <div class="img-container">
          <a href=".\showimg\secondpage20.php">
            <img src=".\img\homepage\Product 25.jpeg" alt="" height="150px" class="imgsize imgradius2" /></a>
        </div>
        <div class="textbelow">
          <h4>Polo Plus</h4>
          <p>solid men polo t-shirt</p>

          <h5 class="Rs">Rs.499</h5>
        </div>
      </div>
    </div>
    <!-- 
    ##################################################################################
                               3rd line start here  -->
    <div class="titletext">
      <h3>Trending Now For kids</h3>
    </div>
    <div class="container-product1">
      <div class="product product3">
        <div class="img-container">
          <a href=".\showimg\secondpage21.php">
            <img src=".\img\homepage\Product 31.jpeg" alt="" height="150px" class="imgsize3 imgradius3" /></a>
        </div>
        <div class="textbelow">
          <h4>Ftc Fashions</h4>
          <p>beautiful dress for girls</p>
          <h5 class="Rs">Rs.699</h5>
        </div>
      </div>

      <div class="product product3">
        <div class="img-container">
          <a href=".\showimg\secondpage22.php"><img src=".\img\homepage\Product 32.jpeg" alt="" height="150px" class="imgsize3 imgradius3" /></a>
        </div>
        <div class="textbelow">
          <h4>Tanque Fashions</h4>
          <p>beautiful dress for girls</p>

          <h5 class="Rs">Rs.499</h5>
        </div>
      </div>
      <div class="product product3">
        <div class="img-container">
          <a href=".\showimg\secondpage23.php">
            <img src=".\img\homepage\Product 35.jpeg" alt="" height="150px" class="imgsize3 imgradius3" /></a>
        </div>
        <div class="textbelow">
          <h4>Kaarigari Fashions</h4>
          <p>beautiful dress for girls</p>

          <h5 class="Rs">Rs.399</h5>
        </div>
      </div>
      <div class="product product3">
        <div class="img-container">
          <a href=".\showimg\secondpage24.php">
            <img src=".\img\homepage\Product 33.jpeg" alt="" height="150px" class="imgsize3 imgradius3" /></a>
        </div>
        <div class="textbelow">
          <h4>Sonia Collection</h4>
          <p>beautiful dress for girls</p>

          <h5 class="Rs">Rs.299</h5>
        </div>
      </div>
      <div class="product product3">
        <div class="img-container">
          <a href=".\showimg\secondpage25.php">
            <img src=".\img\homepage\Product 34.jpeg" alt="" height="150px" class="imgsize3 imgradius3" /></a>
        </div>
        <div class="textbelow">
          <h4>Beautiful Collection</h4>
          <p>beautiful dress for girls</p>
          <h5 class="Rs">Rs.199</h5>
        </div>
      </div>
    </div>
  </main>
  <!-- 
    ##################################################################################
                               for footer tag- -->
  <footer class="footer1">
    <div class="footer_container">
      <div class="f_text">
        <p>Screenshot</p>
        <p>Terms and Conditions</p>
        <p>Refound Policy</p>
        <p>Premium Account</p>
      </div>
      <div class="all_imgcontainer">
        <div class="fimg_container">
          <img src="img\logo\facebook.jpg" alt="" class="f_imgsize">
          <a href="https://www.facebook.com/md.shahidraza.3954546" class="link_f">
            <p class="fimg_text">facebook </p>
          </a>
        </div>
        <div class="fimg_container" id="height">
          <img src="img\logo\instagram.png" alt="" class="f_imgsize">
          <a href="https://www.instagram.com/invites/contact/?i=hexrlyzjp6zr&utm_content=g7lt276" class="link_f">
            <p class="fimg_text">Instagram</p>
          </a>
        </div>
        <div class="fimg_container" id="height">
          <img src="img\logo\massage1.png" alt="" class="f_imgsize">
          <p class="fimg_text">7488952139</p>
        </div>
      </div>
      <div class="all_imgcontainer">
        <div class="fimg_container">
          <img src="img\logo\whatshapp.png" alt="" class="f_imgsize">
          <p class="fimg_text">7463086672</p>
        </div>
        <div class="fimg_container" id="height">
          <img src="img\logo\gmail.png" alt="" class="f_imgsize">
          <p class="fimg_text">mdshahidraza7886@gmail.com</p>
        </div>
        <div class="fimg_container" id="height">
          <img src="img\logo\phone.png" alt="" class="f_imgsize">
          <p class="fimg_text">7463086672</p>
        </div>
      </div>
    </div>
  </footer>
  <!-- 
    ##################################################################################
                               second footer -->
  <footer>
    <div class="l_footer">
      <p>Copyright &copy; Shoppingmart.com</p>
    </div>
  </footer>
</body>

</html>
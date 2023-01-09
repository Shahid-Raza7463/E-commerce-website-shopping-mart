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
  <link rel="stylesheet" href=".\css\iframedelivery.css?v=<?php echo time(); ?>" />
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
    <div class="backward">
      <img src="img\logo\arrow11-removebg-preview.png" alt="" class="arrow" onclick="history.back()">
    </div>
    <div class="bodycontainer">
      <div class="iframe_img_container">
        <iframe src="deleveryform.html" frameborder="0"></iframe>

        <!-- right side product -->
        <div class="productss">
          <div>
            <h2>Trending Now For kids</h2>
          </div>
          <div class="container-productab">
            <div class="productab">
              <div class="img-containerab">
                <a href=".\showimg\secondpage21.php">
                  <img src=".\img\homepage\Product 31.jpeg" alt="" height="150px" class="imgsizeab imgradius3" /></a>
              </div>
              <div class="textbelowab">
                <h4 class="text">Ftc Fashionsk</h4>
                <p class="text">beautiful dress for girlst</p>
                <p class="text">Rs.699</p>
              </div>
            </div>
            <div class="productab">
              <div class="img-containerab">
                <a href=".\showimg\secondpage22.php">
                  <img src=".\img\homepage\Product 32.jpeg" alt="" height="150px" class="imgsizeab imgradius3" /></a>
              </div>
              <div class="textbelowab">
                <h4 class="text">Tanque Fashions</h4>
                <p class="text">beautiful dress for girls</p>
                <p class="text">Rs.499</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- first product line start here -->
    <div class="titletext">
      <h3>Popular on Shopping Mart</h3>
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
  </main>

  <div>
    <footer class="footer1">
      <div class="footer_container">
        <div class="f_text">
          <p>Screenshot</p>
          <p>Terms and Conditions</p>
          <p>Refound Policy</p>
          <p>Premium Account</p>
          <p>Privacy</p>
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
              <p class="fimg_text">Instaagram</p>
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
    <footer>
      <div class="l_footer">
        <p>Copyright &copy; Shoppingmart.com</p>
      </div>

    </footer>
  </div>
</body>

</html>
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
  <link rel="stylesheet" href="..\css\secondpage.css?v=<?php echo time(); ?>">
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
          <a href="..\php\logout.php"><button class="log">Logout</button></a>
        <?php
        }
        ?>
        <!-- before login,login button show in header -->
        <?php
        if (!isset($_SESSION["name"])) {
        ?>
          <button class="logout">Admin</button>
          <a href="..\loginsystm.html"><button class="log" value="login">login</button></a>
        <?php
        }
        ?>
      </div>
    </nav>
  </header>
  <main>
    <div class="containerbody">
      <div class="backward">
        <img src="..\img\logo\arrow11-removebg-preview.png" alt="" class="arrow" onclick="history.back()">
      </div>
      <div class="productcontainer">
        <div class="image-container">
          <iframe src="image12.html" frameborder="0"></iframe>
        </div>
        <div class="titleofproduct">
          <p id="textd">FTC FASHIONS</p>
          <p class="text">Mini/Short Festive/wedding Dress (white Sleeve)</p>
          <div class="price">
            <h1 class="text">Rs.219</h1>
            <p><strike class="striket">1999</strike></p>
            <p class="off">63% off</p>
          </div>
          <h5>SELECT SIZE</h5>
          <div class="choosesize">
            <button class="choosebtn">X</button>
            <button class="choosebtn">S</button>
            <button class="choosebtn">M</button>
            <button class="choosebtn">L</button>
            <button class="choosebtn">2XL</button>
          </div>
          <div class="quantity">
            <div id="quan">QUANTITY</div>
            <div>
              <select name="" id="quantityn">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
          </div>
          <h5>MATERIAL & FIT</h5>
          <div class="material">
            <pre class="fontpre">
    -Product type:Fit and Flare Dress
    -Pattern:Blend
    -Sleeves: 3/4 sleeves
    -Color: white
    -Brand: febric
    -Fit: 8 year
    -Product Material: febric cotton
    -length: 8 year only
    -Style: whiteNet
    -Neck: round Nec                        
                        </pre>
            <pre class="fontpre">
    This is very good dress and size is fit
    so you can try one time this product
    without any hesitation 

                        </pre>
          </div>
          <div class="btun">
            <input type="button" id="addbutton" value="ADD TO CART" />
            <a href="..\iframedelivery.php"><input type="button" id="buybutton" value="BUY NOW" /></a>
          </div>
        </div>
      </div>
      <!-- start first line here -->
      <div class="titletext">
        <h3>Trending Now For kids</h3>
      </div>
      <div class="container-product1">
        <div class="product product3">
          <div class="img-container">
            <a href=".\secondpage21.php">
              <img src=".\img\firstpage\Product 31.jpeg" alt="" height="150px" class="imgsize3 imgradius3" /></a>
          </div>
          <div class="textbelow">
            <h4>Ftc Fashions</h4>
            <p>beautiful dress for girls</p>

            <h5 class="Rs">Rs.499</h5>
          </div>
        </div>

        <div class="product product3">
          <div class="img-container">
            <a href=".\secondpage22.php"><img src=".\img\firstpage\Product 32.jpeg" alt="" height="150px" class="imgsize3 imgradius3" /></a>
          </div>
          <div class="textbelow">
            <h4>Tanque Fashions</h4>
            <p>beautiful dress for girls</p>

            <h5 class="Rs">Rs.499</h5>
          </div>
        </div>
        <div class="product product3">
          <div class="img-container">
            <a href=".\secondpage23.php">
              <img src=".\img\firstpage\Product 35.jpeg" alt="" height="150px" class="imgsize3 imgradius3" /></a>
          </div>
          <div class="textbelow">
            <h4>Kaarigari Fashions</h4>
            <p>beautiful dress for girls</p>

            <h5 class="Rs">Rs.499</h5>
          </div>
        </div>
        <div class="product product3">
          <div class="img-container">
            <a href=".\secondpage24.php">
              <img src=".\img\firstpage\Product 33.jpeg" alt="" height="150px" class="imgsize3 imgradius3" /></a>
          </div>
          <div class="textbelow">
            <h4>Sonia Collection</h4>
            <p>beautiful dress for girls</p>

            <h5 class="Rs">Rs.499</h5>
          </div>
        </div>
        <div class="product product3">
          <div class="img-container">
            <a href=".\secondpage25.php">
              <img src=".\img\firstpage\Product 34.jpeg" alt="" height="150px" class="imgsize3 imgradius3" /></a>
          </div>
          <div class="textbelow">
            <h4>Beautiful Collection</h4>
            <p>beautiful dress for girls</p>

            <h5 class="Rs">Rs.499</h5>
          </div>
        </div>
      </div>

    </div>
  </main>
  <!-- for footer tag-->
  <div>
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
            <img src="..\img\logo\facebook.jpg" alt="" class="f_imgsize">
            <a href="https://www.facebook.com/md.shahidraza.3954546" class="link_f">
              <p class="fimg_text">facebook </p>
            </a>
          </div>
          <div class="fimg_container" id="height">
            <img src="..\img\logo\instagram.png" alt="" class="f_imgsize">
            <a href="https://www.instagram.com/invites/contact/?i=hexrlyzjp6zr&utm_content=g7lt276" class="link_f">
              <p class="fimg_text">Instaagram</p>
            </a>
          </div>
          <div class="fimg_container" id="height">
            <img src="..\img\logo\massage1.png" alt="" class="f_imgsize">
            <p class="fimg_text">7488952139</p>
          </div>
        </div>
        <div class="all_imgcontainer">
          <div class="fimg_container">
            <img src="..\img\logo\whatshapp.png" alt="" class="f_imgsize">
            <p class="fimg_text">7463086672</p>
          </div>
          <div class="fimg_container" id="height">
            <img src="..\img\logo\gmail.png" alt="" class="f_imgsize">
            <p class="fimg_text">mdshahidraza7886@gmail.com</p>
          </div>
          <div class="fimg_container" id="height">
            <img src="..\img\logo\phone.png" alt="" class="f_imgsize">
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
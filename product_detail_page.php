<?php
error_reporting(0);
session_start();
include 'includes/include.inc.php';
echo get_header("Product Details");
include 'login/conn.php';

$q = "SELECT * FROM `product_page` WHERE id = '{$_GET['id']}' ";
$r = mysqli_query($conn, $q);

if (isset($_POST['submit'])) {
  if (isset($_SESSION['cart'])) {
    $arrItems = array_column($_SESSION['cart'], 'name');
    if (in_array($_POST['name'], $arrItems)) {
      echo "<script>
            alert('Item already Added....');
            window.location.href('cart.php');
            </script>";
    } else {

      $count = count($_SESSION['cart']);
      $_SESSION['cart'][$count] = array('img' => $_POST['img'], 'name' => $_POST['name'], 'price' => $_POST['price']);
      echo "<script>
        alert('Item Added');
        window.location.href('index.php');
        </script>";
    }
  } else {
    $_SESSION['cart'][0] = array('img' => $_POST['img'], 'name' => $_POST['name'], 'price' => $_POST['price']);
    echo "<script>
        alert('Item Added');
        window.location.href('index.php');
        </script>";
  }
}

if (isset($_POST['SubmitR'])) {
  $Rname = $_POST['Rname'];
  $Remail = $_POST['Remail'];
  $Review = $_POST['Review'];
  $star = $_POST['totalstars'];
  $qs = " INSERT INTO starr(Name, Email, Rating, Review)
  VALUES('$Rname', '$Remail', '$star', '$Review') ";
  $rs = mysqli_query($conn, $qs) or die(mysqli_error($conn));
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

  <title>Product Details</title>
</head>

<body>

  <section class="container-fluid">
    <div class="row d-flex justify-content-center">
      <div class="col-md-10 col-12 pt-5">
        <div class="row m-0 p-0  justify-content-center align-items-center">

          <?php
          while ($row = mysqli_fetch_assoc($r)) {
          ?>
            <form method="POST" class="col-10">
              <div class="srow row ">
                <div class="col-md-6 d-md-flex flex-column justify-content-center">
                  <img name="img" src="<?php echo $row['image'] ?>" alt="img" style="width: 80%;">
                </div>
                <div class="col-md-6 d-mdflex flex-column justify-content-center">
                  <h2 name="title" class="text-center"> <?php echo  $row['title'] ?> </h2>
                  <p><?php echo $row['description'] ?></p>

                  <h3 name="price">Price : <?php echo $row['price'] ?></h3>
                  <h5><input class="w-lg-25 w-75" type="text" name="qty" placeholder="Qty."></h5>

                  <h3>Rating : <div class="badge bg-primary"><small class="output">4.4 </small><i class="fas fa-star text-warning "></i></div>
                  </h3>

                  <div class="text-center">
                    <button class="bg-success rounded-pill fs-4" name="submit" type="submit">Add to cart</button>
                  </div>
                </div>
            </form>
          <?php
          }
          ?>

          <div class="col-12">
            <div class="col-md-5 col-12 d-flex text-center justify-content-center align-items-center">
              <div class="row m-0 p-0">
                <?php
                if (isset($_SESSION['username'])) {
                ?>
                  <input type="text" name="Rname" class="py-2 my-2" placeholder="Enter your name">
                  <input type="email" name="Remail" class="py-2 my-2" placeholder="Email...">
                  <div class="stars fs-md-2 fs-4">
                    <i data-iam="1" class="star fas fa-star"></i>
                    <i data-iam="2" class="star fas fa-star"></i>
                    <i data-iam="3" class="star fas fa-star"></i>
                    <i data-iam="4" class="star fas fa-star"></i>
                    <i data-iam="5" class="star fas fa-star"></i>
                  </div>
                  <input class="d-none" type="text" name="totalstars" class="starCount" value="1">
                  <textarea name="Review" class="py-2 my-2 mb-4" cols="15" rows="8" placeholder="Review"></textarea>
                  <button name="SubmitR" type="submit" value="submit" class="btn rounded-pill bg-success">Submit</button>
                <?php
                } else {
                ?>
                  <h5>If you want to rate please <a href="login/login.php" class="text-decoration-none">Login In</a></h5>
                <?php
                }
                ?>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    </div>
  </section>




  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta1/js/bootstrap.bundle.min.js"></script>
  <script>
    const stars = document.querySelector('.stars');
    const star = document.querySelectorAll('.star');
    const output = document.querySelector('.output');

    for (let i = 0; i < star.length; i++) {
      star[i].starValue = (i + 1);

      ["click", "mouseover", "mouseout"].forEach(function(e) {
        star[i].addEventListener(e, showstar);
      });

      function showstar(e) {
        let type = e.type;
        let starValue = this.starValue;
        if (type === 'click') {
          if (starValue > 1) {
            output.innerHTML = starValue;
          }

          selectedStr = star[i].getAttribute('data-iam');
          document.querySelector('.starCount').value = selectedStr;
        }

        star.forEach(function(ele, ind) {
          if (type === "click") {
            if (ind < starValue) {
              ele.classList.add("Orange");
            } else {
              ele.classList.remove("Orange");
            }
          }

          if (type === "mouseover") {
            if (ind < starValue) {
              ele.classList.add("yellow");
            } else {
              ele.classList.remove("yellow");
            }
          }

          if (type === "mouseout") {
            ele.classList.remove("yellow");
          }
        })

      }


    }
  </script>
  <script src="js/new.js "></script>
</body>

</html>
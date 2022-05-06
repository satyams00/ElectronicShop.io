<?php
error_reporting(0);
include 'includes/include.inc.php';
include 'login/conn.php';
echo get_header("Electronic Shop");

session_start();



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
            $_SESSION['cart'][$count] = array('img' => $_POST['img'], 'name' => $_POST['name'], 'price' => $_POST['price'], 'qty' => $_POST['qty']);
            echo "<script>
        alert('Item Added');
        window.location.href('index.php');
        </script>";
        }
    } else {
        $_SESSION['cart'][0] = array('img' => $_POST['img'], 'name' => $_POST['name'], 'price' => $_POST['price'], 'qty' => $_POST['qty']);
        echo "<script>
        alert('Item Added');
        window.location.href('index.php');
        </script>";
    }
}

if (isset($_POST['remove_items'])) {
    foreach ($_SESSION['cart'] as $key => $value) {
        if ($value['name'] == $_POST['name']) {
            unset($_SESSION['cart'][$key]);
            $_SESSION['cart'] = array_values($_SESSION['cart']);
            echo "<script>
              alert('Removed Succesfully');
              window.location.href='cart.php';
              </script>";
        }
    }
}
?>



<section class="container-fluid my-mainPage p-0 overflow-hidden" style="height: 100vh;width:100%;">
    <div class="d-flex p-0 slider w-100 h-100">
        <div class="col-12 class_for_js h-100 bg-responsive" style="background: url(img/m1.jpeg) no-repeat; background-position: center center;" id="lastClone">
            <div class="d-flex flex-column justify-content-center h-100 p-5 m-0">
                <h2 class="slider_items_down fs-5 fs-sm-3">Mobile Collection 2022</h2>
                <h1 class="slider_items_up display-4" s2 display-sm-4yle="font-weight:600;">Latest Model</h1>
                <div>
                    <button class="slider_items_scale btn btn-info rounded px-5  fs-6fs--sm5 rounded-pill"> Shop Now </button>
                </div>
            </div>
        </div>
        <div class="col-12 class_for_js h-100 d-flex p-5" style="background: url(img/l1.png) no-repeat; background-position: center center; ">
            <div class="d-flex flex-column justify-content-center h-100 p-5 m-0">
                <h2 class="slider_items_down fs-5 fs-sm-3">Laptop Collection 2022</h2>
                <h1 class="slider_items_up display-2 display-sm-4" style="font-weight:600;">Latest Model</h1>
                <div>
                    <button class="slider_items_scale btn btn-info rounded px-5 fs-6 fs-sm-5 rounded-pill"> Shop Now </button>
                </div>
            </div>
        </div>
        <div class="col-12 class_for_js h-100 d-flex p-5" style="background: url(img/h1.jpg) no-repeat; background-position: center center;">
            <div class="d-flex flex-column justify-content-center h-100 p-5 m-0">
                <h2 class="slider_items_down fs-5 fs-sm-3">Headphone Collection 2022</h2>
                <h1 class="slider_items_up display-2 display-sm-4" style="font-weight:600;">Latest Model</h1>
                <div>
                    <button class="slider_items_scale btn btn-info rounded px-5 fs-6 fs-sm-5 rounded-pill"> Shop Now </button>
                </div>
            </div>
        </div>
        <div class="col-12 class_for_js h-100 d-flex p-5" style="background: url(img/m1.jpeg) no-repeat; background-position: center center;">
            <div class="d-flex flex-column justify-content-center h-100 p-5 m-0">
                <h2 class="slider_items_down fs-5 fs-sm-3">Mobile Collection 2022</h2>
                <h1 class="slider_items_up display-2 display-sm-4" style="font-weight:600;">Latest Model</h1>
                <div>
                    <button class="slider_items_scale btn btn-info rounded px-5 fs-6 fs-sm-5 rounded-pill"> Shop Now </button>
                </div>
            </div>
        </div>
        <div class="col-12 class_for_js h-100 d-flex p-5" style="background: url(img/l1.png) no-repeat; background-position: center center;" id="firstClone">
            <div class="d-flex flex-column justify-content-center h-100 p-5 m-0">
                <h2 class="slider_items_down fs-5 fs-sm-3">Laptop Collection 2022</h2>
                <h1 class="slider_items_up display-2 display-sm-4" style="font-weight:600;">Latest Model</h1>
                <div>
                    <button class="slider_items_scale btn btn-info rounded px-5 fs-6 fs-sm-5 rounded-pill"> Shop Now </button>
                </div>
            </div>
        </div>
    </div>
    <div class="myBtns">
        <i class="fas fa-chevron-left" id="prevbtn"></i>
        <i class="fas fa-chevron-right" id="nextbtn"></i>
    </div>
</section>
<section class="container-fluid">
    <div class="row p-0">
        <div class="col-10 m-auto">
            <div class="ss_items col-12 p-0 d-flex flex-column flex-sm-row my-3 ">
                <div class="ss_items_img col-md-3 col-10 mx-auto" style="background: url(img/m1.jpeg);">
                    <a href="#" class=" text-decoration-none fs-2 text-dark fw-bold w-50 mt-auto">Mobile <span class="fs-5 fw-normal"> Trending 2022</span></a>
                    <div class="overlay"></div>
                    <div class="shop_up ">
                        <a href="#" class="text-decoration-none text-uppercase text-white ">Shop</a>
                    </div>
                </div>
                <div class="ss_items_img col-md-3 col-10 mx-auto" style="background: url(img/l1.png);">
                    <a href="#" class=" text-decoration-none fs-2 text-dark fw-bold w-50 mt-auto">Laptop <br> <span class="fw-normal fs-5"> New 2022</span></a>
                    <div class="overlay"></div>
                    <div class="shop_up ">
                        <a href="#" class="text-decoration-none text-uppercase text-white ">Shop</a>
                    </div>
                </div>
                <div class="ss_items_img col-md-3 col-10 mx-auto" style="background: url(img/h1.jpg);">
                    <a href="#" class=" text-decoration-none fs-2 text-dark fw-bold w-50 mt-auto">Accessories <span class="fs-5 fw-normal"> New Trend</span></a>
                    <div class="overlay"></div>
                    <div class="shop_up ">
                        <a href="#" class="text-decoration-none text-uppercase text-white ">Shop</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container-fluid">
    <h1 class="d-flex justify-content-center my-5">Product Overview</h1>
    <div class="row justify-content-center">
        <div class="col-10 p-0">
            <div class="row p-0 m-0">
                <div class="col-12 d-flex flex-xl-row flex-lg-column flex-column justify-content-between py-3 px-lg-5 px-0">
                    <div>
                        <ul class="d-flex p-0" style="flex-wrap: wrap;">
                            <a href="#" class="text-decoration-none text-dark m-3">All products</a>
                            <a href="#" class="text-decoration-none text-dark m-3">Mobile</a>
                            <a href="#" class="text-decoration-none text-dark m-3">Laptop</a>
                            <a href="#" class="text-decoration-none text-dark m-3">HeadPhone</a>
                            <a href="#" class="text-decoration-none text-dark m-3">Watches</a>
                        </ul>
                    </div>
                    <div class="d-flex align-items-center justify-content-end px-2">
                        <button class="btn btn-transparent mx-1" style="border:1.4px solid lightgray;"><i class="fa fa-filter mx-3">Filter</i></button>
                        <button class="btn btn-transparent" style="border:1.4px solid lightgray;"><i class="fa fa-search mx-3">Search</i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 p-0">
            <div class="row p-0 m-0 ss_product_grid justify-content-center">
                <div class="col-10">
                    <div class="row p-0 m-0">
                        <div class="col-12 p-0">
                            <div class="row p-0 m-0 flex-column flex-sm-row">
                                <?php

                                $q = " SELECT * FROM `product_page`";
                                $qf = mysqli_query($conn, $q);

                                while ($row = mysqli_fetch_assoc($qf)) {
                                ?>
                                    <div class="col-sm-3 col-12 d-flex flex-column justify-content-center">
                                        <form method="POST" class="row p-0 m-0 justify-content-center">
                                            <div class="col-sm-10 col-12 product_container p-0 d-flex flex-column justify-content-center align-items-center">
                                                <a href="product_detail_page.php?id=<?php echo $row['id'] ?>"><img src="<?php echo $row['image'] ?>" class="w-100 rounded" alt="Product"></a>
                                            </div>
                                            <a href="#" class="d-flex justify-content-between text-decoration-none text-secondary px-4 pt-2"><?php echo $row['title'] ?><span class="text-danger"><i class="far fa-heart mx-0"></i></span></a>
                                            <p class="text-center">₹<?php echo $row['price'] ?> <input class="w-25 text-center" type="text" min="1" max="20" value="1"> </p>
                                            <button name="submit" type="submit" class="btn bg-primary mb-5">Add to Cart</button>
                                            <input type="hidden" name="img" value="<?php echo $row['image'] ?>">
                                            <input type="hidden" name="name" value="<?php echo $row['title'] ?>">
                                            <input type="hidden" name="price" value="<?php echo $row['price'] ?>">
                                            <input type="hidden" name="qty" value="1">
                                        </form>
                                    </div>

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

<script src="js/new.js"></script>
<?php
echo get_footer();

<?php include 'includes/include.inc.php';
error_reporting(0);
include 'login/conn.php';

echo get_header("Shop");
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

$qqueryFilt = " SELECT * FROM `product_page`";

if (isset($_GET['priceFilt']) && isset($_GET['starFilt'])) {
    if($_GET['priceFilt'] != 'all' && $_GET['starFilt'] != 'all' ){
        if ($_GET['priceFilt'] == '40000') {
            $qqueryFilt = " SELECT * FROM `product_page` WHERE price < {$_GET['priceFilt']} AND rating < {$_GET['starFilt']} ";
        } else {
            $qqueryFilt = " SELECT * FROM `product_page` WHERE price < {$_GET['priceFilt']} AND price > {$_GET['priceFilt']}-10000 AND rating < {$_GET['starFilt']} ";
        }
    }else{
        if($_GET['priceFilt'] == 'all'){
            $qqueryFilt = " SELECT * FROM `product_page` WHERE rating < {$_GET['starFilt']} ";
        }else if($_GET['starFilt']){
            $qqueryFilt = " SELECT * FROM `product_page` WHERE price < {$_GET['priceFilt']} ";
        }
    }
} else {
    if (isset($_GET['priceFilt']) && $_GET['priceFilt'] != 'all') {

        $qqueryFilt = " SELECT * FROM `product_page` WHERE price < {$_GET['priceFilt']} ";
    } else if (isset($_GET['starFilt']) && $_GET['starFilt'] != 'all') {
        $qqueryFilt = " SELECT * FROM `product_page` WHERE rating > {$_GET['starFilt']} ";
    }
}

?>


<section class="container-fluid" style="padding-top: 5rem">
    <h1 class="d-flex justify-content-center mx-5">Product Overview</h1>
    <div class="row mt-5 justify-content-center">
        <div class="col-md-10 col-12">
            <div class="row ss_product_grid justify-content-center mt-5">
                <form method="POST" class="col-md-3 col-10">
                    <label for="text" class="fs-3  pt-5">Filter by Price</label>
                    <ul class="P list-group p-3 fs-5">
                        <li class="list-group-item">
                            <input name="Prc" value="10000" class="prc form-check-input me-1 checkBoxPrice" type="checkbox">
                            Below 10000
                        </li>
                        <li class="list-group-item">
                            <input name="Prc" value="20000" class="prc form-check-input me-1 checkBoxPrice" type="checkbox">
                            Below 20000
                        </li>
                        <li class="list-group-item">
                            <input name="Prc" value="30000" class="prc form-check-input me-1 checkBoxPrice" type="checkbox">
                            Below 30000
                        </li>
                        <li class="list-group-item">
                            <input name="Prc" value="40000" class="prc form-check-input me-1 checkBoxPrice" type="checkbox">
                            Below 40000
                        </li>
                        <li class="list-group-item">
                            <input name="Prc" value="50000" class="prc form-check-input me-1 checkBoxPrice" type="checkbox">
                            Below 40000
                        </li>
                    </ul>
                    <label for="text" class="fs-3  pt-5">Filter by Rating</label>
                    <ul class="list-group p-3 fs-5">
                        <li class="list-group-item">
                            <input class="form-check-input me-1  checkBoxStar" name="str" value="4" type="checkbox">
                            1 - 5 Star
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-1  checkBoxStar" name="str" value="3" type="checkbox">
                            1 - 4 Star
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-1  checkBoxStar" name="str" value="2" type="checkbox">
                            1 - 3 Star
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-1  checkBoxStar" name="str" value="1" type="checkbox">
                            1 - 2 Star
                        </li>
                        <li class="list-group-item">
                            <input class="form-check-input me-1  checkBoxStar" name="str" value="0" type="checkbox">
                            1 - 1 Star
                        </li>
                    </ul>
                </form>
                <div class="col-md-9 col-10 mb-5">
                    <div class="col-12">
                        <div class="row p-0 m-0 flex-column flex-sm-row">
                            <?php
                            $qf = mysqli_query($conn, $qqueryFilt);

                            while ($row = mysqli_fetch_assoc($qf)) {
                            ?>
                                <div class="col-sm-3 col-12 d-flex flex-column justify-content-center">
                                    <form method="POST" class="row p-0 m-0 justify-content-center">
                                        <div class="col-sm-10 col-12 product_container p-0 d-flex flex-column justify-content-center align-items-center">
                                            <a href="product_detail_page.php?id=<?php echo $row['id'] ?>"><img src="<?php echo $row['image'] ?>" class="w-100 rounded" alt="Product"></a>
                                        </div>
                                        <a href="#" class="d-flex justify-content-between text-decoration-none text-secondary px-4 pt-2"><?php echo $row['title'] ?><span class="text-danger"><i class="far fa-heart mx-0"></i></span></a>
                                        <p class="text-center">₹<?php echo $row['price'] ?> <input class="w-25 text-center" type="text" min="1" max="20" value="1"> </p>
                                        <h3>Rating :<div class="badge bg-primary"><small><?php echo $row['rating'] ?> </small><i class="fas fa-star text-warning "></i></div></h3>
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
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">

    var pirceFilt = 'all';
    var strFilt = 'all';

    $('.checkBoxPrice').on('change', function() {
        $('.checkBoxPrice').not(this).prop('checked', false);
        pirceFilt = this.value;
        updateFilr();
    });
    $('.checkBoxStar').on('change', function() {
        $('.checkBoxStar').not(this).prop('checked', false);
        strFilt = this.value;
        updateFilr();
    });

    var myPrcCheckbox = document.querySelectorAll('.checkBoxPrice');
    var myStarCheckbox = document.querySelectorAll('.checkBoxStar');

    var myDPrice = '<?php if (isset($_GET['priceFilt'])) {
                        echo $_GET['priceFilt'];
                    } else {
                        echo 'all';
                    } ?>';

    if (myDPrice != 'all') {
        for (let i = 0; i < myPrcCheckbox.length; i++) {
            if (myPrcCheckbox[i].value == myDPrice) {
                myPrcCheckbox[i].checked = true;
            }
        }
        pirceFilt = myDPrice;
    }

    var myDStar = '<?php if (isset($_GET['starFilt'])) {
                        echo $_GET['starFilt'];
                    } else {
                        echo 'all';
                    } ?>';

    if (myDStar != 'all') {
        for (let i = 0; i < myStarCheckbox.length; i++) {
            if (myStarCheckbox[i].value == myDStar) {
                myStarCheckbox[i].checked = true;
            }
        }
        strFilt = myDStar;
    }

    function updateFilr() {
        window.location = 'shop.php?priceFilt=' + pirceFilt + '&starFilt=' + strFilt;
    }
</script>

<?php
echo get_footer();
?>
<?php include 'includes/include.inc.php';
include 'login/conn.php';
echo get_header("Cart");
session_start();



?> 
<section class="container-fluid mb-5" style="padding-top: 5rem">
    <div class="row justify-content-center">
        <div class="col-10">
            <p><a href="index.php" class="text-decoration-none text-dark">Home</a> <span class="fs-6"> > Shipping Cart</span></p>
        </div>
        <div class="col-md-8 col-12 p-0">
            <div class="row m-0 p-0 justify-content-center mt-5">
                <div class="col-10">
                    <div class="col-12 d-flex justify-content-center align-items-center    " style="border: 1px solid #bbb3b39c;">
                        <div class="col-4 text-center pt-2">
                            <p>Product</p>
                        </div>
                        <div class="col-2 text-center pt-2">
                            <p>Price</p>
                        </div>
                        <div class="col-2 text-center pt-2">
                            <p>Quantity</p>
                        </div>
                        <div class="col-2 text-center pt-2">
                            <p>Total</p>
                        </div>
                        <div class="col-2">
                            <p>Action</p>
                        </div>
                    </div> 
                    <div class="col-12 d-flex flex-column justify-content-center align-items-center  " style="border: 1px solid #bbb3b39c;">

                        <?php
                        if (isset($_SESSION['cart'])) {
                            $total = 0;
                            foreach ($_SESSION['cart'] as $key => $value) {
                                $total = $total + $value['price'];
                                echo "<div class='col-12 d-flex justify-content-center align-items-center'>
                                        <div class='col-4 text-center d-flex'>
                                            <img style='width: 25%' src='$value[img]' alt='product' class='m-5'>
                                            <p class='my-auto'>$value[name]</p>
                                        </div>
                                        <div class='col-2 text-center'>
                                            <p>$value[price]</p>
                                            <input type='hidden' class='iprice' value='$value[price]'>
                                        </div>
                                        <div class='col-2 text-center'>
                                            <div class='input-group mb-3 w-50 text-center m-auto'>
                                                <input type='number' value='1' min='1'  max=' 20'class='form-control iqty text-center' onchange='subtotal()'>
                                            </div>
                                        </div>
                                        <div class='col-2 text-center'>
                                            <p class='itotal'></p>
                                        </div>
                                        <div class='col-2'>
                                            <form action='index.php' method='POST'>
                                                <button name='remove_items' class='btn btn-sm btn-outline-danger'>Remove</button>
                                                <input type='hidden' name='name' value='$value[name]'>
                                            </form>
                                        </div>
                                    </div>";
                            }
                        }
                        else {
                            $total = 0;
                        }
                        ?>
                    </div>
                        <div class="col-12 d-flex justify-content-center align-items-center  p-5 mb-5 " style="border: 1px solid #bbb3b39c;">
                            <div class="col-5">
                                <input type="text" placeholder="Coupon code" class="border rounded-pill bg-light fs-5" style="border: 1px solid #bbb3b39c;">
                            </div>
                            <div class="col-7 d-flex">
                                <div class="col-6">
                                    <button class="btn rounded-pill" style="background: #8080806b; border: 1px solid #bbb3b39c;">APPLY COUPON</button>
                                </div>
                                <div class="col-6">
                                <button class="btn rounded-pill" style="background: #8080806b; border: 1px solid #bbb3b39c;">UPDATE CART</button>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 col-12">
            <div class="row m-0 p-0 justify-content-center mt-5 border ">
                <h3 class="fw-bold mt-5">Grand Total :</h3 class="fw-bold">
                <h5 class="text-center fs-4" id="gtotal"></h5>
                <br>
                <form class="text-center my-5" method="POST">
                    
                    <p class="fs-4"><input type="radio"> Cash on delivery</p>
                    <button class="btn btn-primary rounded-pill ">Make Payment</button>
                </form>
            </div>
        </div>
        
    </div>
</section>



<script>
    var gt = 0;
    const iprice = document.getElementsByClassName('iprice');
    const iqty = document.getElementsByClassName('iqty');
    const itotal = document.getElementsByClassName('itotal');
    const gtotal = document.getElementById('gtotal');

    function subtotal() {
        var gt = 0;
        for (let i = 0; i < iprice.length; i++) {
            itotal[i].innerText =(iprice[i].value)*(iqty[i].value);            
            gt = gt + (iprice[i].value)*(iqty[i].value);
        }
        gtotal.innerText = gt;
    }
    subtotal();
</script>


<?php 
echo get_footer();
?>










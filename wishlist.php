<?php
    $shopDB = "thelongdark";
    $shopTable = "shop";
    $shopDiscountsTable = "shopdiscounts";

    $link = mysqli_connect("localhost", "root", "123mnbzzZ01p", $shopDB);
    
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }






    $BucketProductsIdNums = [];
    //$BucketProductsId = [];


    if (isset($_COOKIE["bucketProductsId"]) && $_COOKIE["bucketProductsId"] != "[]") 
    {
        /*$str = array_values($_COOKIE["bucketProductsId"]);*/ 
        $BucketProductsId = $_COOKIE["bucketProductsId"];
        
        
        $numString = "";
    
        for ($i = 0; $i < strlen($BucketProductsId); $i++) 
        { 
            if(is_numeric($BucketProductsId[$i]) == true && is_numeric($BucketProductsId[$i + 1]) == false) 
            {   
                $numString .= $BucketProductsId[$i];
                array_push($BucketProductsIdNums, $numString);
                $numString = "";
                //$BucketProductsIdNums .= $BucketProductsId[$i] . ",";
            } 
            else if(is_numeric($BucketProductsId[$i]) == false) 
            {
                continue;
            } 
            else
            {
                $numString .= $BucketProductsId[$i];
            }
        }
        /*echo $BucketProductsIdNums[0];
        echo $BucketProductsIdNums[1];
        echo $BucketProductsIdNums[2];*/
    }
    else 
    {
        //echo "BucketProductsIdNums " . $_COOKIE["bucketProductsId"];
        $BucketProductsIdNums = [];
    }


    //echo "BucketProductsIdNums " . $_COOKIE["bucketProductsId"];






    $BucketProductsAmountNums = [];

    if (isset($_COOKIE["bucketProductsAmount"]) && $_COOKIE["bucketProductsAmount"] != "[]") 
    {
        /*$str = array_values($_COOKIE["bucketProductsId"]);*/ 
        $BucketProductsId = $_COOKIE["bucketProductsAmount"];
        
        
        $numString = "";
    
        for ($i = 0; $i < strlen($BucketProductsId); $i++) 
        { 
            if(is_numeric($BucketProductsId[$i]) == true && is_numeric($BucketProductsId[$i + 1]) == false) 
            {   
                $numString .= $BucketProductsId[$i];
                array_push($BucketProductsAmountNums, $numString);
                $numString = "";
                //$BucketProductsIdNums .= $BucketProductsId[$i] . ",";
            } 
            else if(is_numeric($BucketProductsId[$i]) == false) 
            {
                continue;
            } 
            else
            {
                $numString .= $BucketProductsId[$i];
            }
        }
        /*echo $BucketProductsIdNums[0];
        echo $BucketProductsIdNums[1];
        echo $BucketProductsIdNums[2];*/
    }
    else 
    {
        //echo "bucketProductsAmount " . $_COOKIE["bucketProductsAmount"];
        $BucketProductsAmountNums = [];
    }


    //echo "bucketProductsAmount " . $_COOKIE["bucketProductsAmount"];














    // WishListProductsId
$WishListProductsIdNums = [];

if (isset($_COOKIE["wishListProductsId"])) 
{
    /*$str = array_values($_COOKIE["wishListProductsId"]);*/ 
    $wishListProductsId = $_COOKIE["wishListProductsId"];
    
    
    $numString = "";

    for ($i = 0; $i < strlen($wishListProductsId); $i++) 
    { 
        if(is_numeric($wishListProductsId[$i]) == true && is_numeric($wishListProductsId[$i + 1]) == false) 
        {   
            $numString .= $wishListProductsId[$i];
            array_push($WishListProductsIdNums, $numString);
            $numString = "";
            //$WishListProductsIdNums .= $BucketProductsId[$i] . ",";
        } 
        else if(is_numeric($wishListProductsId[$i]) == false) 
        {
            continue;
        } 
        else
        {
            $numString .= $wishListProductsId[$i];
        }
    }
}
else 
{
    $WishListProductsIdNums = [];
}



?>












<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Venam - eCommerce HTML5 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="img/logo/logo_big3.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/odometer.css">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/slick.css">
        <link rel="stylesheet" href="css/default.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>

 <!-- preloader  
        <div id="preloader">
            <div id="ctn-preloader" class="ctn-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                    <div class="txt-loading">
                        <span data-text-preloader="H" class="letters-loading">
                            V
                        </span>
                        <span data-text-preloader="I" class="letters-loading">
                            E
                        </span>
                        <span data-text-preloader="N" class="letters-loading">
                            N
                        </span>
                        <span data-text-preloader="T" class="letters-loading">
                            A
                        </span>
                        <span data-text-preloader="E" class="letters-loading">
                            M
                        </span>
                        <span data-text-preloader="R" class="letters-loading">
                            V
                        </span>
                        <span data-text-preloader="L" class="letters-loading">
                            E
                        </span>
                        <span data-text-preloader="A" class="letters-loading">
                            N
                        </span>
                        <span data-text-preloader="N" class="letters-loading">
                            A
                        </span>
                        <span data-text-preloader="D" class="letters-loading">
                            M
                        </span>
                    </div>
                </div>
                <div class="loader">
                    <div class="row">
                        <div class="col-3 loader-section section-left">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-left">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-right">
                            <div class="bg"></div>
                        </div>
                        <div class="col-3 loader-section section-right">
                            <div class="bg"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>//-->
        <!-- preloader end -->


		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        <header class="header-style-two header-style-three">

            <!-- header-top -->
            <div class="header-top-area">
                <div class="custom-container-two">
                    <div class="row">
                        <div class="col-md-8 col-sm-7">
                            <div class="header-top-left">
                                <ul>
                                    <li>
                                        <div class="ship-to">
                                            <span>Ship to</span>
                                            <div class="dropdown">
                                                <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <img src="img/icon/ship_flag.png" alt=""> US/USD
                                                </button>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#"><img src="img/icon/australia.png" alt="">AUS/USD</a>
                                                    <a class="dropdown-item" href="#"><img src="img/icon/bng.png" alt="">BNG/TK</a>
                                                    <a class="dropdown-item" href="#"><img src="img/icon/india.png" alt="">IN/RP</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    
                                   
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-5">
                            <div class="header-top-right">
                                <ul>
                                    <li>
                                        <a href="log_reg/register.html"><i class="flaticon-user"></i>Register</a>
                                        <span>or</span>
                                        <a href="log_reg/login.html">Sign in</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-top-end -->

            <!-- menu-area -->
            <div id="sticky-header" class="main-header menu-area">
                <div class="custom-container-two">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu-wrap">
                                <nav class="menu-nav show">
                                    <div class="logo">
                                        <a href="index.html"><img src="img/logo/222.png" alt="Logo"></a>
                                    </div>
                                    <div class="navbar-wrap main-menu d-none d-lg-flex">
                                        <ul class="navigation">
                                            <li ><a href="long_dark_news.php">NEWS</a></li>

                                            <li><a href="long_dark_survival_mode.html">SURVIVAL MODE </a></li>

                                            <li ><a href="long_dark_story_mode.html">STORY MODE </a></li>

                                            <li ><a href="https://hinterlandforums.com/forums/" target="_blank">COMMUNITY</a></li>

                                            <li class="dropdown active"><a href="shop-right-sidebar.php">SHOP</a></li>

                                            <li><a href="https://hinterlandgames.zendesk.com/hc/en-us" target="_blank">SUPPORT</a></li>
                                            
                                            

                                        </ul>
                                    </div>
                                    <div class="header-action d-none d-md-block">
                                        <ul>
                                            <!-- <li><a href="#"><i class="flaticon-two-arrows"></i></a></li> -->
                                            <li><a href="wishlist.php"><i class="flaticon-heart"></i></a></li>
                                            <li class="header-shop-cart"><a href="bucket.php"><i class="flaticon-shopping-bag"></i></a>
                                                <!-- <span class="cart-total-price">$ 128.00</span> -->




                                                <?php 
                                                    $totalPrice = 0.00;
                                                    SetTotalPrice();
                                                    echo '<span class="cart-total-price">$ '.$totalPrice.'</span>';

                                                
                                                ?>


                                                
                                            <li></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- Mobile Menu  -->
                            <div class="mobile-menu">
                                <div class="menu-backdrop"></div>
                                <div class="close-btn"><i class="fas fa-times"></i></div>

                                <nav class="menu-box">
                                    <div class="nav-logo"><a href="index.html"><img src="img/logo/white_logo.png" alt="" title=""></a>
                                    </div>
                                    <div class="menu-outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- End Mobile Menu -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- menu-area-end -->

           

        </header>
        <!-- header-area-end -->

        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg" data-background="img/bg/breadcrumb_bg.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="breadcrumb-content text-center">
                                <h2>Wishlist</h2>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

      
            <!-- wishlist-area -->
            <section class="wishlist-area pt-100 pb-100">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive-xl">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th class="product-thumbnail" style="cursor: default;"></th>
                                            <th class="product-name" style="cursor: default;">Product</th>
                                            <th class="product-price" style="cursor: default;">Price</th>
                                            <th class="product-quantity" style="cursor: default;">QUANTITY</th>
                                            <th class="product-subtotal" style="cursor: default;">SUBTOTAL</th>
                                            <th class="product-stock-status" style="cursor: default;">Stock Status</th>
                                            <th class="product-add-to-cart" style="cursor: default;"></th>
                                        </tr>
                                    </thead>




















                                    <?php 
                                        
                                        $amountElementId = 100000;
                                        $maxLimitAmountElementId = 1100000;
                                        $totalPriceId = 11100000;

                                        
                                        if(count($WishListProductsIdNums) > 0)
                                        {


                                            //SetTotalPrice();

                                            $productsAmount = count($WishListProductsIdNums);

                                            /*echo '<span class="cart-count">' . $productsAmount . '</span></a>';

                                            echo '<span class="cart-total-price">$' . $totalPrice . '</span>';*/




                                            //echo '<ul class="minicart">';
                                            $index = 0;

                                            
                                            for ($i = 0; $i < count($WishListProductsIdNums); $i++) 
                                            { 
                                                $getAllProductsInfoQuery = "SELECT `Title`,
                                                `Price`, `ImagePath`, `Description`, `Amount` FROM $shopTable WHERE $shopTable.Amount > 0 AND $shopTable.Id = " . $WishListProductsIdNums[$i];

                                                if ($result = mysqli_query($link, $getAllProductsInfoQuery)) {
                                                    
                                                    $row = mysqli_fetch_row($result);
                                                    $productId = $WishListProductsIdNums[$index];
                                                    $index ++;

                                                        

                                                    $title = $row[0];
                                                    $price = $row[1];
                                                    $imagePath = $row[2];
                                                    $imagePath = str_replace("327x358", "103x129", $imagePath);
                                                    $description = $row[3];
                                                    $amount = $row[4];

                                                    $discountPrice = 0.0;

                                                    $discountPrice = GetCurrentProductDiscount($productId, $price);


                                                    PrintWishListProductBlock($title, $imagePath, $price, $discountPrice, $productId, $description, $amount);
                                                    

                                                    mysqli_free_result($result);
                                                }
                                            }


                                            //PrintTotalPrice($totalPrice);



                                            //PrintMakePurchaseButton();
                                        }
                                        else //Bucket is empty
                                        {
                                            //echo '</a>';
                                            //echo '<span class="cart-total-price">$0.00</span>';
                                        }

                                        function SetTotalPrice()
                                        {
                                            global $WishListProductsIdNums;
                                            global $shopTable;
                                            global $totalPrice;
                                            global $link;

                                            $index = 0;

                                            for ($i = 0; $i < count($WishListProductsIdNums); $i++) 
                                            { 
                                                $getAllProductsInfoQuery = "SELECT `Title`,
                                                `Price`, `ImagePath` FROM $shopTable WHERE $shopTable.Amount > 0 AND $shopTable.Id = " . $WishListProductsIdNums[$i];

                                                if ($result = mysqli_query($link, $getAllProductsInfoQuery)) 
                                                {
                                                    
                                                    $row = mysqli_fetch_row($result);
                                                    $productId = $WishListProductsIdNums[$index];
                                                    $index ++;

                                                        

                                                    $title = $row[0];
                                                    $price = $row[1];
                                                    $imagePath = $row[2];

                                                    $discountPrice = 0.0;

                                                    $discountPrice = GetCurrentProductDiscount($productId, $price);


                                                    if($discountPrice > 0)
                                                        $totalPrice += $discountPrice;
                                                    else
                                                        $totalPrice += $price;
                                                }
                                            }

                                            
                                            
                                        }

                                        function GetCurrentProductDiscount(int $id, float $price)
                                        {
                                            global $shopDiscountsTable;
                                            global $shopTable;
                                            $getAllProductsDiscountInfoQuery = "SELECT `Discount` FROM $shopDiscountsTable
                                                                                INNER JOIN $shopTable ON $shopDiscountsTable.ShopProductID = $id";

                                            global $link;
                                            if ($result = mysqli_query($link, $getAllProductsDiscountInfoQuery)) {
                                                if ($row = mysqli_fetch_row($result)) {

                                                    return GetCalculatedDiscount($price, $row[0]);
                                                }

                                                mysqli_free_result($result);
                                            }
                                    
                                            return 0.0;
                                        }

                                        function GetCalculatedDiscount(float $price, float $discount)
                                        {
                                            return $price - (($discount * $price) / 100.0);
                                        }

                                        function generateRandomString($length = 10) {
                                            return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
                                        }
                                        
                                        function PrintWishListProductBlock(string $title, string $imagePath, string $price, float $dicsountPrice, string $id, string $description, int $stockAmount)
                                        {
                                            global $amountElementId;
                                            $amountElementId ++;
                                            global $maxLimitAmountElementId;
                                            $maxLimitAmountElementId ++;
                                            global $totalPriceId;
                                            $totalPriceId ++;

                                            $stockAmountStyle = "";
                                            $addToBucketButtonHTML = "";
                                            if($stockAmount > 0)
                                            {
                                                $addToBucketButtonHTML = '
                                                <td class="product-add-to-cart" style="cursor: default;"><a id="' . $id . '" class="btn" onclick="OnAddToBucketButtonClick('.$id.', '. $amountElementId .')" style="color: white;">Add to Bucket</a></td>';
                                            }
                                            else
                                            {
                                                $stockAmountStyle = 'style="color: gray"';
                                            }

                                            $priceStyle = "";
                                            
                                            if($dicsountPrice > 0)
                                            {
                                                $currentPrice = $price;
                                                
                                                $price = $dicsountPrice;
                                                $dicsountPrice = $currentPrice;

                                                $priceStyle = 'color: blue; font-weight: bold;';
                                            }
                                                

                                            /*$discountPriceHTML = $dicsountPrice > 0 ? '<del>$' . $dicsountPrice . '</del>' : "";
                                            //echo "dicsountPrice: " . $dicsountPrice;
                                            $priceTextStyle = $dicsountPrice > 0 ? 'style="color: blue; font-weight: bold;"' : "";*/

                                            $wishListProductBlockHTML = '
                                            <tbody>
                                                <tr>
                                                    
                                                    <td class="product-thumbnail"><a id="' . $id . '" style="cursor: pointer;" class="wishlist-remove" onclick="OnDeleteButtonClick(this.id)"><i class="flaticon-cancel-1"></i></a><a><img src="' . $imagePath . '" alt=""></a>
                                                    </td>
                                                    <td class="product-name">
                                                        <h4 style="cursor: default;">' . $title . '</h4>
                                                        <p style="cursor: default;">' . $description . '</p>
                                                        
                                                    </td>
                                                    <td class="product-price" style="cursor: default; ' . $priceStyle . '">$ ' . $price . '</td>
                                                    <td class="product-quantity">
                                                        <div style="text-align: center;">
                                                            <p style="font-weight: bold; cursor: pointer;" onClick="OnPlusAmountButtonClick('.$amountElementId.', '.$maxLimitAmountElementId.', '.$totalPriceId.', '.$price.')">+</p>
                                                            <p id="'.$amountElementId.'">1</p>
                                                            <p style="font-weight: bold; cursor: pointer;" onClick="OnMinusAmountButtonClick('.$amountElementId.', '.$totalPriceId.', '.$price.')">-</p>
                                                        </div>
                                                    </td>
                                                    <td id="'. $totalPriceId .'" class="product-subtotal" style="cursor: default; color: gray; font-weight: bold;"><span id="totalPrice" style="color: gray; font-weight: bold;">$ ' . $price . '</span></td>
                                                    <td class="product-stock-status" style="cursor: default;"><span id="'.$maxLimitAmountElementId.'" ' . $stockAmountStyle . '>' . $stockAmount . '</span></td>
                                                    ' . $addToBucketButtonHTML . '
                                                </tr>
                                            </tbody>';

                                            echo $wishListProductBlockHTML;
                                        }

                                        
                                        
                                        function PrintTotalPrice(float $totalPrice)
                                        {   
                                            $totalPriceString = "";
                                            if($totalPrice > 0)
                                                $totalPriceString = $totalPrice;
                                            else
                                                $totalPriceString = "0.00";

                                            $totalPriceHTML = '
                                            <li>
                                                <div class="total-price">
                                                    <span class="f-left">Total:</span>
                                                    <span class="f-right">$' . $totalPriceString . '</span>
                                                </div>
                                            </li>';

                                            echo $totalPriceHTML;
                                        }

                                        function PrintMakePurchaseButton()
                                        {
                                            $makePurchaseButtonHTML = '
                                            <li>
                                                <div class="checkout-link">
                                                    <a href="wishlist.php">Make Purchase</a>
                                                </div>
                                            </li>';

                                            echo $makePurchaseButtonHTML . '</ul>';
                                        }
                                        
                                
                                    ?>




                                    <!-- <tbody>
                                        <tr>
                                            <td class="product-thumbnail"><a id="" style="cursor: pointer;" class="wishlist-remove" onclick="OnDeleteButtonClick(this.id)"><i class="flaticon-cancel-1"></i></a><a><img src="img/clothes/103x129/poster.png" alt=""></a>
                                            </td>
                                            <td class="product-name">
                                                <h4 style="cursor: default;">The Long Dark Poster</h4>
                                                <p style="cursor: default;">Beautiful wall poster</p>
                                                
                                            </td>
                                            <td class="product-price" style="cursor: default;">$ 15.00</td>
                                            <td class="product-quantity">
                                                <div class="cart-plus">
                                                    <form action="#">
                                                        <div class="cart-plus-minus">
                                                            <input style="cursor: default;" type="text" value="2">
                                                        </div>
                                                    </form>
                                                </div>
                                            </td>
                                            <td class="product-subtotal" style="cursor: default;"><span> $ 15.00</span></td>
                                            <td class="product-stock-status" style="cursor: default;"><span>In Stock</span></td>
                                            <td class="product-add-to-cart" style="cursor: default;"><span>Added on March 10. 2020</span><a id="" class="btn" onclick="OnAddToBucketButtonClick(this.id)" style="color: white;">Add to Bucket</a></td>
                                        </tr>
                                    </tbody> -->





                                </table>
                            </div>
                        </div>
                    </div>













                </div>
                

                
            </section>
            <!-- wishlist-area-end -->

                

        </main>
        <!-- main-area-end -->

        <!-- footer-area -->
        <footer class="footer-area">
            <div class="footer-top pt-65 pb-25">
                <div class="container">


                    <div class="footer-newsletter-wrap footer-newsletter-two">
                        <div class="row align-items-center">
                            <div class="col-xl-7 col-lg-6">
                                <div class="newsletter-title">
                                    <h4>Subscribe Now !</h4>
                                    <span>Hinterland By Signing Up To Our Newsletter.</span>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-6">
                                <div class="newsletter-form">
                                    <form action="#">
                                        <input type="email" placeholder="Enter Your Email....">
                                        <button class="btn yellow-btn">Subscribe</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    
                    <div class="row justify-content-between">
                        <div class="col-lg-4 col-md-6">
                            <div class="footer-widget mb-50">
                                <div class="footer-logo mb-30">
                                    <a href="index.html"><img style="width: 141px;" src="img/logo/logo_big2.png" alt=""></a>
                                </div>
                                <div class="footer-text mb-35">
                                    <p>Namkand sodales vel online best prices Amazon Check out ethnic wear, formal wear western wear
                                    Blood Pressure Rate Monito.</p>
                                </div>
                                <div class="footer-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-sm-6">
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-35">
                                    <h5>Customer Service</h5>
                                </div>
                                <div class="fw-link">
                                    <ul>
                                        <li><a href="https://hinterlandgames.zendesk.com/hc/en-us">Help Center</a></li>
                                        <li><a href="https://hinterlandgames.zendesk.com/hc/en-us">Returns</a></li>
                                        <li><a href="https://hinterlandgames.zendesk.com/hc/en-us">Product Recalls</a></li>
                                        <li><a href="https://hinterlandgames.zendesk.com/hc/en-us">Accessibility</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-sm-6">
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-35">
                                    <h5>Quick Links</h5>
                                </div>
                                <div class="fw-link">
                                    <ul>
                                        <li><a href="https://hinterlandgames.zendesk.com/hc/en-us">Return Policy</a></li>
                                        <li><a href="https://hinterlandgames.zendesk.com/hc/en-us">Terms Of Use</a></li>
                                        <li><a href="https://hinterlandgames.zendesk.com/hc/en-us">Security</a></li>
                                        <li><a href="https://hinterlandgames.zendesk.com/hc/en-us">Privacy</a></li>
                                        <li><a href="https://hinterlandgames.zendesk.com/hc/en-us">Store Pickup</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="footer-widget mb-50">
                                <div class="fw-title mb-35">
                                    <h5>Customer Service</h5>
                                </div>
                                <div class="footer-contact">
                                    <ul>
                                        <li><i class="fas fa-map-marker-alt"></i> Lviv,Ukraine</li>
                                        <li><i class="fas fa-headphones"></i> +3809999999</li>
                                        <li><i class="fas fa-envelope-open"></i>Support@info.Com</li>
                                        <li><i class="fas fa-fax"></i>444-444-4555</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright-wrap copyright-style-two">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6">
                            <div class="copyright-text">
                                <p>Copyright © 2020 <a href="#">Long Dark Shop</a> All Rights Reserved.</p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 d-none d-md-block">
                            <div class="payment-method-img text-right">
                                <img src="img/images/card_img.png" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-area-end -->













    <script>  

            //document.cookie = "bucketProductsId= '';expires=Thu, 01 Jan 1970 00:00:00 GMT";
            //document.cookie = "bucketProductsAmount= '';expires=Thu, 01 Jan 1970 00:00:00 GMT";


            // var passedArray = <?php echo json_encode($BucketProductsAmountNums); ?>;  
            // alert(passedArray);  
            // passedArray.splice(0, 1);  //index, 1 
            
            // alert(passedArray);  

            /*var passedArray = <?php echo json_encode($WishListProductsIdNums); ?>;
            arrayValues = [];

            alert(passedArray);

            passedArray[0] = passedArray[1] = passedArray[2] = 1;

            //passedArray.splice(1, 1);

            var json_str = JSON.stringify(passedArray);

            alert(document.cookie);*/

            //document.location.reload(true);



            //Delete from wishList


            //alert(document.cookie);

            //delete WishListItem
            function OnDeleteButtonClick(id) 
            {
                //delete from wishListProductsId Cookie

                var passedArray = <?php echo json_encode($WishListProductsIdNums); ?>;
                arrayValues = [];
                
                for (let i = 0; i < passedArray.length; i++) 
                {
                    if(passedArray[i] != id)
                        arrayValues.push(passedArray[i]);
                }

                var json_str = JSON.stringify(arrayValues);
                document.cookie="wishListProductsId=" + json_str;

                document.location.reload(true);
            } 



            //Amount & TotalPrice


            function OnPlusAmountButtonClick(amountElementId, maxLimitAmountElementId, totalPriceId, productPrice)
            {
                //alert(amountElementId + " " + maxLimitAmountElementId);
                //check amount -- agree/disagree increase
                var maxLimit = parseFloat(document.getElementById(""+maxLimitAmountElementId).innerText);
                
                var amount = parseFloat(document.getElementById(""+amountElementId).innerText);
                if(amount < maxLimit)
                {
                    amount ++;
                    document.getElementById(""+amountElementId).innerText = amount;
                }
                else
                {
                    
                }

                SetTotalPrice(totalPriceId, amount, productPrice);
            }
            
            function OnMinusAmountButtonClick(amountElementId, totalPriceId, productPrice)
            {
                //alert(amountElementId);

                var amount = document.getElementById(""+amountElementId).innerText;
                if(amount > 1)
                {
                    amount --;
                    document.getElementById(""+amountElementId).innerText = amount;
                }

                SetTotalPrice(totalPriceId, amount, productPrice);
            }

            function SetTotalPrice(totalPriceId, amountMultiplier, productPrice)
            {
                var price = parseFloat(productPrice);
                var totalPrice = price * amountMultiplier;
                document.getElementById(""+totalPriceId).innerText = "$ " + totalPrice;
            }
            












            /*var bucketProductsIdNums = <?php echo json_encode($BucketProductsIdNums); ?>;
            alert("bucketProductsIdNums: " + bucketProductsIdNums);

            var currentProductIndexInBucket = bucketProductsIdNums.indexOf("3");
            alert("currentProductIndexInBucket: " + currentProductIndexInBucket);*/








            
            //Add to bucket

            //set BucketAmount
            //set BucketItem (if not setted)
            function OnAddToBucketButtonClick(id, currentAmountId) 
            {
                //alert("click");
                var currentAmount = document.getElementById(currentAmountId).innerText; 

                var bucketProductsIdNums = <?php echo json_encode($BucketProductsIdNums); ?>;

                var bucketProductsAmountNums = <?php echo json_encode($BucketProductsAmountNums); ?>;

                var json_str;


                if(bucketProductsIdNums == false) //if no items in bucket
                {
                    //alert("no items" + "  slectedProductId: " + id);

                    var bucketProductsIdNumsNew = [];
                    bucketProductsIdNumsNew[0] = id;
                    json_str = JSON.stringify(bucketProductsIdNumsNew);
                    document.cookie="bucketProductsId=" + json_str; 
                    
                    //alert("bucketProductsIdNumsNew: " + bucketProductsIdNumsNew);

                    var bucketProductsAmountNumsNew = [];
                    bucketProductsAmountNumsNew[0] = currentAmount;
                    json_str = JSON.stringify(bucketProductsAmountNumsNew);
                    document.cookie="bucketProductsAmount=" + json_str;

                    //alert("bucketProductsAmountNumsNew: " + bucketProductsAmountNumsNew);
                }


                else //if SOME items exists
                {
                    //alert("some items" + "  slectedProductId: " + id);
                    //alert("bucketProductsIdNums: " + bucketProductsIdNums);
                    var currentProductIndexInBucket = bucketProductsIdNums.indexOf(""+id);
                    //alert("currentProductIndexInBucket: " + currentProductIndexInBucket + "  bucketProductsIdNums: " + bucketProductsIdNums);
                    //alert("productIndexInArray: " + productIndexInArray);

                    if(currentProductIndexInBucket == -1) //if this item not exists in the bucket
                    {
                        //alert("not same");
                        
                        bucketProductsIdNums.push(id);
                        json_str = JSON.stringify(bucketProductsIdNums);
                        document.cookie="bucketProductsId=" + json_str; 
                        
                        //alert("bucketProductsIdNums: " + bucketProductsIdNums);

                        bucketProductsAmountNums.push(currentAmount);
                        json_str = JSON.stringify(bucketProductsAmountNums);
                        document.cookie="bucketProductsAmount=" + json_str;

                        //alert("bucketProductsAmountNums: " + bucketProductsAmountNums);
                    }   
                    else //if this item exists in the bucket
                    {
                        //alert("same");

                        var currentProductIndexInBucketNew = bucketProductsIdNums.indexOf(""+id);

                        var num = parseInt(bucketProductsAmountNums[currentProductIndexInBucketNew]);
                        num += parseInt(currentAmount);
                        bucketProductsAmountNums[currentProductIndexInBucketNew] = num;
                    
                        json_str = JSON.stringify(bucketProductsAmountNums);
                        document.cookie="bucketProductsAmount=" + json_str;
                    }
                }

                document.location.reload(true);
































                
                /*if(bucketProductsId == false || bucketProductsId.length < 1) //if no items
                {
                    alert("1" + "  " + id);

                    bucketProductsId.push(id);
                    var json_str = JSON.stringify(bucketProductsId);
                    document.cookie="bucketProductsId=" + json_str; 
                    
                    alert(bucketProductsId);

                    productIndexInArray = bucketProductsId.indexOf(id);

                    if(bucketProductsAmountNums != false) 
                    {
                        bucketProductsAmountNums[productIndexInArray] = parseInt(currentAmount);
                    
                        var json_str = JSON.stringify(bucketProductsAmountNums);
                    
                        document.cookie="bucketProductsAmount=" + json_str;
                    }
                    else //if no items
                    {
                        bucketProductsAmount2 = [];
                        bucketProductsAmount2[productIndexInArray] = parseInt(currentAmount);
                        var json_str = JSON.stringify(bucketProductsAmount2);
                    
                        document.cookie="bucketProductsAmount=" + json_str;
                    }

                    
                }
                else //if some items exists
                {
                    alert("step 2" + "  id: " + id);
                    alert("bucketProductsId: " + bucketProductsId);
                    productIndexInArray = bucketProductsId.indexOf(id);
                    alert("productIndexInArray: " + productIndexInArray);

                    if(productIndexInArray == -1) //if this item not exists in the bucket
                    {
                        alert("not same");
                        
                        

                        //alert(bucketProductsAmount2);

                        if(bucketProductsAmountNums != false || bucketProductsAmountNums.length < 1)
                        {
                            alert(productIndexInArray);
                            num = parseInt(bucketProductsAmountNums[productIndexInArray]);

                            alert(num + " + " + currentAmount);

                            num += parseInt(currentAmount);
                            bucketProductsAmountNums[productIndexInArray] = num;

                            
                            
                            var json_str = JSON.stringify(bucketProductsAmountNums);
                            document.cookie="bucketProductsAmount=" + json_str;
                        }
                        



                        // var bucketProductsAmount = <?php echo json_encode($BucketProductsAmountNums); ?>;

                        // if(bucketProductsAmount != false || bucketProductsAmount.length < 1)
                        // {
                        //     num = parseInt(bucketProductsAmount[productIndexInArray]);
                        //     num += parseInt(currentAmount);
                        //     bucketProductsAmount[productIndexInArray] = num;
                            
                        //     var json_str = JSON.stringify(bucketProductsAmount);
                        //     document.cookie="bucketProductsAmount=" + json_str;
                        // }
                        
                    }   
                    else //if this item exists in the bucket
                    {
                        alert("not same");
                        bucketProductsId.push(id);
                        var json_str = JSON.stringify(bucketProductsId);
                        document.cookie="bucketProductsId=" + json_str; 
                        
                        //alert(bucketProductsId);

                        productIndexInArray = bucketProductsId.indexOf(id);
                        
                        //var bucketProductsAmount = <?php echo json_encode($BucketProductsAmountNums); ?>;

                        bucketProductsAmount[productIndexInArray] = parseInt(currentAmount);
                    
                        var json_str = JSON.stringify(bucketProductsAmount);
                        document.cookie="bucketProductsAmount=" + json_str;
                    }*/
                    

                    

                    // if(bucketProductsAmount != false && bucketProductsAmount.length > 0)
                    // {
                        
                    // }
                    // else
                    // {

                    // }

                    
                //}
                
                
            }

    </script>









		<!-- JS here -->
        <script src="js/vendor/jquery-3.5.0.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.odometer.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/jquery.appear.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/ajax-form.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>

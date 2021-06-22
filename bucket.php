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














    function SetCookiesValues()
    {
        //echo "aaaaaaaaaaaaaa";

        global $BucketProductsIdNums;
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






        global $BucketProductsAmountNums;
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
    }

    










    $IsButtonConfirmPurchaseClicked = "false";

    //setcookie("IsButtonConfirmPurchaseClicked", "true");

    //echo $_COOKIE["IsButtonConfirmPurchaseClicked"];

    //$_SESSION["IsButtonConfirmPurchaseClicked"] = "false";

    DecreaseProductAmount();



    function DecreaseProductAmount()
    {
        global $IsButtonConfirmPurchaseClicked;

        if(isset($_COOKIE["IsButtonConfirmPurchaseClicked"]) && $_COOKIE["IsButtonConfirmPurchaseClicked"] == "true")
        {
            $IsButtonConfirmPurchaseClicked = $_COOKIE["IsButtonConfirmPurchaseClicked"];

            SetCookiesValues();

            //echo "call";

            global $shopTable;
            global $link;

            global $BucketProductsIdNums;
            global $BucketProductsAmountNums;

            for ($i = 0; $i < count($BucketProductsIdNums); $i++) 
            { 
                echo count($BucketProductsIdNums);
                $productId = $BucketProductsIdNums[$i];
                $amontToMinus = $BucketProductsAmountNums[$i];

                //echo $i . "<br>";

                $getAmountValueQuery = "SELECT $shopTable.Amount FROM $shopTable WHERE $shopTable.Id = $productId";
                if ($result = mysqli_query($link, $getAmountValueQuery)) 
                {                                      
                    if($row = mysqli_fetch_row($result))
                    {
                        $currentProductAmount = $row[0];
                    
                        $resultProductAmount = intval($currentProductAmount) - intval($amontToMinus);

                        mysqli_free_result($result);

                        //echo $row;

                        $decreaseProductAmountQuery = "UPDATE $shopTable 
                        SET 
                            $shopTable.Amount = '$resultProductAmount'
                        WHERE
                            $shopTable.Id = $productId";

                        mysqli_query($link, $decreaseProductAmountQuery);
                    }
                }
            }

            setcookie("IsButtonConfirmPurchaseClicked", "false");
            $IsButtonConfirmPurchaseClicked = "true";
            
            setcookie("bucketProductsId", "", time() - 3600);
            setcookie("bucketProductsAmount", "", time() - 3600);

            $BucketProductsIdNums = "";
            $BucketProductsAmountNums = "";
        }
        else
        {
            //setcookie("IsButtonConfirmPurchaseClicked", "false");
            $IsButtonConfirmPurchaseClicked = "false";
            //echo "not call";
        }
        
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
                                            <li></li>
                                            <li></li>
                                            <!-- <li class="header-shop-cart"><a href="wishlist.php"><i class="flaticon-shopping-bag"></i><span class="cart-count">2</span></a> -->
                                                





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
                                <h2>Shopping Cart</h2>
                                
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

                                        if($BucketProductsIdNums != "")
                                        {
                                                if(count($BucketProductsIdNums) > 0)
                                            {


                                                //SetTotalPrice();

                                                $productsAmount = count($BucketProductsIdNums);

                                                /*echo '<span class="cart-count">' . $productsAmount . '</span></a>';

                                                echo '<span class="cart-total-price">$' . $totalPrice . '</span>';*/




                                                //echo '<ul class="minicart">';
                                                $index = 0;

                                                
                                                for ($i = 0; $i < count($BucketProductsIdNums); $i++) 
                                                { 
                                                    $getAllProductsInfoQuery = "SELECT `Title`,
                                                    `Price`, `ImagePath`, `Description`, `Amount` FROM $shopTable WHERE $shopTable.Amount > 0 AND $shopTable.Id = " . $BucketProductsIdNums[$i];

                                                    if ($result = mysqli_query($link, $getAllProductsInfoQuery)) {
                                                        
                                                        $row = mysqli_fetch_row($result);
                                                        $productId = $BucketProductsIdNums[$index];
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
                                        }

                                        

                                        function SetTotalPrice()
                                        {
                                            global $BucketProductsIdNums;
                                            global $shopTable;
                                            global $totalPrice;
                                            global $link;

                                            $index = 0;

                                            for ($i = 0; $i < count($BucketProductsIdNums); $i++) 
                                            { 
                                                $getAllProductsInfoQuery = "SELECT `Title`,
                                                `Price`, `ImagePath` FROM $shopTable WHERE $shopTable.Amount > 0 AND $shopTable.Id = " . $BucketProductsIdNums[$i];

                                                if ($result = mysqli_query($link, $getAllProductsInfoQuery)) 
                                                {
                                                    
                                                    $row = mysqli_fetch_row($result);
                                                    $productId = $BucketProductsIdNums[$index];
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
                                            global $BucketProductsIdNums;
                                            $productIdInArray = array_search($id,  $BucketProductsIdNums);
                                            global $BucketProductsAmountNums;
                                            $currentAmount = $BucketProductsAmountNums[$productIdInArray];
                                            
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
                                                $addToBucketButtonHTML = '';
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
                                                            <p style="font-weight: bold; cursor: pointer;" onClick="OnPlusAmountButtonClick('.$amountElementId.', '.$maxLimitAmountElementId.', '.$totalPriceId.', '.$price.', ' . $id . ')">+</p>
                                                            <p id="'.$amountElementId.'">'.$currentAmount.'</p>
                                                            <p style="font-weight: bold; cursor: pointer;" onClick="OnMinusAmountButtonClick('.$amountElementId.', '.$totalPriceId.', '.$price.', ' . $id . ')">-</p>
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
                                            <td class="product-add-to-cart" style="cursor: default;"><span>Added on March 10. 2020</span><a id="" class="btn" onclick="OnConfirmPurchaseButtonClick(this.id)" style="color: white;">Add to Bucket</a></td>
                                        </tr>
                                    </tbody> -->





                                </table>
                            </div>
                        </div>
                    </div>





                    <div style="margin: 0 auto; padding-left: 250px;padding-right: 200px;padding-top: 50px;" >
                        <h1 style="text-align: center; margin: 75px 0;">Delivery information</h1>
                        <div class="content_inner_text_form">
                            <form action="vlad_work_with_sql_add">
                                <div class="name_surname">
                                    <div class="name">
                                    <label style="font-size: 24px; color: #666;">Name*</label>
                                        <br>
                                        <input class="content_inner_text_third_input_type_One" type="text" size="40">
                                        <label style="font-size: 16px; color: #666;"></label>
                                    </div>
                                </div>
                                <label style="font-size: 24px; color: #666;">Email Address*</label>
                                <br>
                                <input class="content_inner_text_third_input_type_One" type="email" size="90" >
                                <br>
                                <label style="font-size: 24px; color: #666;">Phone number*</label>
                                <br>
                                <input class="content_inner_text_third_input_type_One" type="text" size="90">
                                <br>
                                <label style="font-size: 24px; color: #666;">City*</label>
                                <br>
                                <input class="content_inner_text_third_input_type_One" type="text" size="90">
                                <br>
                                <label style="font-size: 24px; color: #666;">ZIP Code*</label>
                                <br>
                                <input class="content_inner_text_third_input_type_One" type="text" size="90">
                                <br>
                                <div class="button_send">
                                    <div class="box-2">
                                        <div class="product-add-to-cart" style="cursor: default;"><a id="' . $id . '" class="btn" onclick="OnConfirmPurchaseButtonClick()" style="color: white;">Confirm Purchase </a></div>
                                    </div>
                                </div>
                            </form>
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

            



            //Delete from wishList


            //alert(document.cookie);

            //delete WishListItem
            function OnDeleteButtonClick(id) 
            {
                //delete from wishListProductsId Cookie
                var index;
                var passedArray = <?php echo json_encode($BucketProductsIdNums); ?>;
                var arrayValues = [];
                
                for (let i = 0; i < passedArray.length; i++) 
                {
                    if(passedArray[i] != id)
                        arrayValues.push(passedArray[i]);
                    else index = i;
                }

                var json_str = JSON.stringify(arrayValues);
                document.cookie="bucketProductsId=" + json_str;


                var passedArray2 = <?php echo json_encode($BucketProductsAmountNums); ?>;
                var arrayValues2 = [];
                
                for (let i = 0; i < passedArray.length; i++) 
                {
                    if(i != index)
                        arrayValues2.push(passedArray2[i]);
                }

                var json_str2 = JSON.stringify(arrayValues2);
                document.cookie="bucketProductsAmount=" + json_str2;


                document.location.reload(true);
            } 



            //Amount & TotalPrice


            function OnPlusAmountButtonClick(amountElementId, maxLimitAmountElementId, totalPriceId, productPrice, productId)
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

                //alert(amount);

                SetTotalPrice(totalPriceId, amount, productPrice);

                SetProductAmount(productId, amount);
            }
            
            function OnMinusAmountButtonClick(amountElementId, totalPriceId, productPrice, productId)
            {
                //alert(amountElementId);

                var amount = document.getElementById(""+amountElementId).innerText;
                if(amount > 1)
                {
                    amount --;
                    document.getElementById(""+amountElementId).innerText = amount;
                }

                //alert(amount);

                SetTotalPrice(totalPriceId, amount, productPrice);

                SetProductAmount(productId, amount);
            }

            function SetTotalPrice(totalPriceId, amountMultiplier, productPrice)
            {
                var price = parseFloat(productPrice);
                var totalPrice = price * amountMultiplier;
                document.getElementById(""+totalPriceId).innerText = "$ " + totalPrice;
            }
            

            //alert(document.cookie);







            //set amount for all products (on plus/minus change) ---->
            //call function ChangeAmountInDB from php ---->
            //delete all products in bucket cookies


            //підгружати кількість в php
            //change totalPrice in mainMenu
            
            //change db all products in bucket amount - set amount and delete from php
            //delete from bucketList - productId and productAmount +

            bucketProductsIdNumsSetProductAmount = <?php echo json_encode($BucketProductsIdNums); ?>;
            bucketProductsAmountNumsSetProductAmount = <?php echo json_encode($BucketProductsAmountNums); ?>;

            function SetProductAmount(id, amount)
            {
                //var bucketProductsIdNums = <?php echo json_encode($BucketProductsIdNums); ?>;
                //var bucketProductsAmountNums = <?php echo json_encode($BucketProductsAmountNums); ?>;

                var currentProductIndexInBucketNew = bucketProductsIdNumsSetProductAmount.indexOf(""+id);

                //alert(currentProductIndexInBucketNew);
                
                bucketProductsAmountNumsSetProductAmount[currentProductIndexInBucketNew] = parseInt(amount);

                //alert(bucketProductsAmountNums[currentProductIndexInBucketNew]);
            
                var json_str = JSON.stringify(bucketProductsAmountNumsSetProductAmount);
                document.cookie="bucketProductsAmount=" + json_str;
            }
            
            //document.cookie = "IsButtonConfirmPurchaseClicked= '';expires=Thu, 01 Jan 1970 00:00:00 GMT";

            var isButtonConfirmPurchaseClicked = <?php echo $IsButtonConfirmPurchaseClicked; ?>;

            //alert("isButtonConfirmPurchaseClicked: " + isButtonConfirmPurchaseClicked);
            /*if(isButtonConfirmPurchaseClicked == true)
            {
                document.cookie="IsButtonConfirmPurchaseClicked=false";

                
                document.cookie = "bucketProductsId= '';expires=Thu, 01 Jan 1970 00:00:00 GMT";
                document.cookie = "bucketProductsAmount= '';expires=Thu, 01 Jan 1970 00:00:00 GMT";
            }*/

            

            function OnConfirmPurchaseButtonClick() 
            {
                

                
               
                    //alert(2);

                    document.cookie="IsButtonConfirmPurchaseClicked=true";



                    document.location.reload(true);

                

                    //alert("true");
                    //document.cookie="IsButtonConfirmPurchaseClicked=true";
                    
                

                
                //alert("before "+document.cookie);

                
                

                

                





                

                
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

<?php
    $shopDB = "thelongdark";
    $shopTable = "shop";
    $shopDiscountsTable = "shopdiscounts";

    $link = mysqli_connect("localhost", "root", "123mnbzzZ01p", $shopDB);
    
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    

                    // $info  = array(
                    //     "key"  => "value",
                    //     "key2" => "value2",
                    //     "key3" => "value3",
                    // );

                    // setcookie("cookie", serialize($info), time()+3600);
                    

                    // $data = unserialize($_COOKIE["cookie"], ["allowed_classes" => false]);
                    // echo $data["key"];
                    // echo $data["key2"];
                






if (array_key_exists('sortButton', $_POST)) {
    header("Location: shop-right-sidebar.php");
}


if (session_id() == '' || !isset($_SESSION)) { // session isn't started
    session_start();
}






$ShowAllProductsLike = "";
$SortAllProductsBy = "";
$SortAllProductsByColor = "";
$SortAllProductsByPrice = array(
    "min" => "",
    "max" => "",
);

$BucketProductsIdNums = [];

//(Base Type)


if (isset($_COOKIE["showAllProductsLike"])) {
    $showAllProductsLikeCookie = $_COOKIE["showAllProductsLike"];
    $_SESSION["showAllProductsLike"] = $showAllProductsLikeCookie;
    $ShowAllProductsLike = $showAllProductsLikeCookie;

//echo "showAllProductsLike setted = " . $ShowAllProductsLike . "<br>";
}
else {
    $ShowAllProductsLike = "";
//echo "showAllProductsLike not setted <br>";
}





//(--Select--)




if (isset($_COOKIE["sortAllProductsBy"])) {
    $sortAllProductsByCookie = $_COOKIE["sortAllProductsBy"];
    $_SESSION["sortAllProductsBy"] = $sortAllProductsByCookie;
    $SortAllProductsBy = $sortAllProductsByCookie;

//echo "sortAllProductsBy setted = " . $SortAllProductsBy . "<br>";
}
else {
    $SortAllProductsBy = "";
//echo "sortAllProductsBy not setted <br>";
}





//Color


if (isset($_COOKIE["sortAllProductsByColor2"])) {
    $sortAllProductsByColorCookie = $_COOKIE["sortAllProductsByColor2"];
    $_SESSION["sortAllProductsByColor2"] = $sortAllProductsByColorCookie;
    $SortAllProductsByColor = $sortAllProductsByColorCookie;

//echo "sortAllProductsByColor2 setted = " . $SortAllProductsByColor . "<br>";
}
else {
    $SortAllProductsByColor = "";
//echo "sortAllProductsByColor2 not setted <br>";
}









//Price


if (isset($_COOKIE["sortAllProductsByPriceMin"]) && isset($_COOKIE["sortAllProductsByPriceMax"])) {


    $SortAllProductsByPrice["min"] = $_COOKIE["sortAllProductsByPriceMin"];
    $SortAllProductsByPrice["max"] = $_COOKIE["sortAllProductsByPriceMax"];

//echo $SortAllProductsByPrice["min"]. "  And  " . $SortAllProductsByPrice["max"];

//echo "sortAllProductsByPriceMin and sortAllProductsByPriceMax setted = " . $SortAllProductsByColor . "<br>";
}
else {
    $SortAllProductsByPrice["min"] = "";
    $SortAllProductsByPrice["max"] = "";
//echo "sortAllProductsByPriceMin and Max not setted <br>";
}







// BucketProductsId
    

if (isset($_COOKIE["bucketProductsId"])) 
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
    $BucketProductsIdNums = [];
}









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

        //echo $BucketProductsAmountNums[1];

        
        /*echo $BucketProductsIdNums[0];
        echo $BucketProductsIdNums[1];
        echo $BucketProductsIdNums[2];*/
    }
    else 
    {
        echo $_COOKIE["bucketProductsAmount"];
        $BucketProductsAmountNums = [];
    }
















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










//unset($_COOKIE['sortAllProductsByColor']); 



//$_SESSION["showAllProductsLike"] = $_COOKIE["showAllProductsLike"];
//$showAllProductsLike = $_SESSION["showAllProductsLike"];


/*if(isset($_SESSION["showAllProductsLike"]) && $_SESSION["showAllProductsLike"] != "")  {
 $showAllProductsLike = $_SESSION["showAllProductsLike"];
 //echo " isNewsSortedByOlder exists and = " . var_dump($_SESSION["isNewsSortedByOlder"]) . "<br>"; } else {
 $_SESSION["showAllProductsLike"] = $_COOKIE["showAllProductsLike"];
 $showAllProductsLike = $_SESSION["showAllProductsLike"]; }*/





//setcookie("showAllProductsLike", '', time()-1000);


//$showAllProductsLike = $_COOKIE["showAllProductsLike"];
//echo "<br><br><br><br><br><br><br><br><br><br>" . $showAllProductsLike;


//setcookie("showAllProductsLike", '', time()-1000);



/*if(isset($_COOKIE["showAllProductsLike"]))
 {
 $showAllProductsLike = $_COOKIE["showAllProductsLike"];
 setcookie("showAllProductsLike", '', time()-1000);
 
 echo "<br><br><br><br><br><br><br><br><br><br>" . $showAllProductsLike;
 
 //setcookie('showAllProductsLike', null, -1, '/');
 }*/









/*unset($_COOKIE["name"]); 
 setcookie('name', null, -1, '/');*/


//unset($_COOKIE["showAllProductsLike"]); 
//setcookie('showAllProductsLike', null, -1, '/');

//setcookie($name, '', time()-1000, '/');

//echo $_COOKIE["showAllProductsLike"];



?>




<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        
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






















                                    <!-- WISH LIST (DYNAMIC) -->



                                    <div class="header-action d-none d-md-block">
                                        <ul>
                                            <!-- <li><a href="#"><i class="flaticon-two-arrows"></i></a></li> -->
                                            <li><a href="wishlist.php"><i class="flaticon-heart"></i></a></li>
                                             <li class="header-shop-cart"><a href="wishlist.php"><i class="flaticon-shopping-bag"></i>
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                   
                                                   
                                                   
                                                   
                                                
                                                   
                                                   
                                                <!-- Products Buscket -->
                                                   


                                                    <?php 
                                                    
                                                    $totalPrice = 0.00;
                                                    




                                                    
                                                    if(count($BucketProductsIdNums) > 0)
                                                    {


                                                        SetTotalPrice();

                                                        $productsAmount = count($BucketProductsIdNums);

                                                        echo '<span class="cart-count">' . $productsAmount . '</span></a>';

                                                        echo '<span class="cart-total-price">$' . $totalPrice . '</span>';




                                                        echo '<ul class="minicart">';
                                                        $index = 0;

                                                        
                                                            for ($i = 0; $i < count($BucketProductsIdNums); $i++) 
                                                            { 
                                                                $getAllProductsInfoQuery = "SELECT `Title`,
                                                                `Price`, `ImagePath` FROM $shopTable WHERE $shopTable.Amount > 0 AND $shopTable.Id = " . $BucketProductsIdNums[$i];

                                                                if ($result = mysqli_query($link, $getAllProductsInfoQuery)) {
                                                                    
                                                                    $row = mysqli_fetch_row($result);
                                                                    $productId = $BucketProductsIdNums[$index];
                                                                    $index ++;

                                                                        

                                                                        $title = $row[0];
                                                                        $price = $row[1];
                                                                        $imagePath = $row[2];

                                                                        $discountPrice = 0.0;

                                                                        $discountPrice = GetCurrentProductDiscount($productId, $price);


                                                                        // if($discountPrice > 0)
                                                                        //     $totalPrice += $discountPrice;
                                                                        // else
                                                                        //     $totalPrice += $price;


                                                                        PrintBucketProductBlock($title, $imagePath, $price, $discountPrice, $productId);
                                                                    

                                                                    mysqli_free_result($result);
                                                                }
                                                            }


                                                        PrintTotalPrice($totalPrice);



                                                        PrintMakePurchaseButton();
                                                    }
                                                    else //Bucket is empty
                                                    {
                                                        echo '</a>';
                                                        echo '<span class="cart-total-price">$0.00</span>';
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
                                                    
                                                    
                                                    function PrintBucketProductBlock(string $title, string $imagePath, string $price, float $dicsountPrice, string $id)
                                                    {
                                                        if($dicsountPrice > 0)
                                                        {
                                                            $currentPrice = $price;
                                                            
                                                            $price = $dicsountPrice;
                                                            $dicsountPrice = $currentPrice;
                                                        }
                                                            

                                                        $discountPriceHTML = $dicsountPrice > 0 ? '<del>$' . $dicsountPrice . '</del>' : "";
                                                        //echo "dicsountPrice: " . $dicsountPrice;
                                                        $priceTextStyle = $dicsountPrice > 0 ? 'style="color: blue; font-weight: bold;"' : "";

                                                        $bucketProductBlockHTML = '
                                                        <li class="d-flex align-items-start">
                                                            <div class="cart-img">
                                                                <a>
                                                                    <img src="' . $imagePath . '" alt="">
                                                                </a>
                                                            </div>
                                                        <div class="cart-content">
                                                            <h4>
                                                                <a class="Charity" >' . $title . '</a>
                                                            </h4>
                                                            <div class="cart-price">
                                                                <span>
                                                                    ' . $discountPriceHTML . '
                                                                </span>
                                                                <span class="new" ' . $priceTextStyle . '>$' . $price . '</span>
                                                            </div>
                                                        </div>
                                                        <div class="del-icon">
                                                            <a style="cursor: pointer;" id="' . $id . '" onClick="OnBucketMenuDeleteButtonClick(this.id)">
                                                                <i class="far fa-trash-alt"></i>
                                                            </a>
                                                        </div> 
                                                        </li>';

                                                        echo $bucketProductBlockHTML;
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



                                                    <!-- Total Price -->

                                                    <!-- <li>
                                                        <div class="total-price">
                                                            <span class="f-left">Total:</span>
                                                            <span class="f-right">$0.00</span>
                                                        </div>
                                                    </li> -->



                                                    <!-- Buy Buttons -->

                                                    <!-- <li>
                                                        <div class="checkout-link">
                                                            <a href="wishlist.php">Make Purchase</a> -->
                                                            <!-- <a class="red-color" href="#">Checkout</a> -->
                                                        <!-- </div>
                                                    </li> -->







                                                    
                                                







                                            </li>
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
                                <h2>The Long Dark Shop</h2>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->















            <!-- shop-area -->









            
            <section class="shop-area gray-bg pt-100 pb-100">
                <div class="custom-container-two">
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-8">
                            <div class="shop-top-meta mb-40">
                                <!-- <p class="show-result">Showing Products 1-12 Of 10 Result</p> -->
                                <div class="shop-meta-right">
                                    <select class="custom-select" onchange="SetSelectedSortingType(this.value)"> 
                                        <option id="sortingType_1" value="">Select</option>
                                        <option id="sortingType_2" value="Best Match">Best Match</option>
                                        <option id="sortingType_3" value="Newest Item">Newest Item</option>
                                        <option id="sortingType_4" value="A - Z">A - Z</option>
                                    </select>
                                </div>
                            </div>














                            <div class="row">






<?php //Products blocks generationg from bd
    
    //queries to db 


    $getAllProductsInfoQueryAND = "";
    $getAllProductsInfoQueryOREDERBY = "";




    if ($ShowAllProductsLike != "") {
        $getAllProductsInfoQueryAND = " AND Title LIKE '%" . $ShowAllProductsLike . "%'";
    }




    if ($SortAllProductsBy != "") {
        $sortQuery = "";

        if ($SortAllProductsBy == "Best Match")
            $sortQuery = "ORDER BY $shopTable.Rating DESC";

        else if ($SortAllProductsBy == "Newest Item")
            $sortQuery = "ORDER BY $shopTable.AddedDate DESC";

        else if ($SortAllProductsBy == "A - Z")
            $sortQuery = "ORDER BY $shopTable.Title DESC";

        $getAllProductsInfoQueryOREDERBY = $sortQuery;
    }




    if ($SortAllProductsByColor != "") {
        $sortQuery = " AND $shopTable.Color LIKE '%$SortAllProductsByColor%'";

        $getAllProductsInfoQueryAND .= $sortQuery;
    }






    if ($SortAllProductsByPrice["min"] != "" && $SortAllProductsByPrice["max"] != "") {
        $min = $SortAllProductsByPrice["min"];
        $max = $SortAllProductsByPrice["max"];
        $sortQuery = " AND $shopTable.Price BETWEEN $min AND $max";

        $getAllProductsInfoQueryAND .= $sortQuery;
    }




    $getAllProductsInfoQuery = "SELECT `Id`, `Title`,
                                            `Price`, `Rating`, `ImagePath` FROM $shopTable WHERE $shopTable.Amount > 0 $getAllProductsInfoQueryAND $getAllProductsInfoQueryOREDERBY";


    PrintAllAvailableProducts();


    function PrintAllAvailableProducts()
    {
        global $link;
        global $getAllProductsInfoQuery;
        
        if ($result = mysqli_query($link, $getAllProductsInfoQuery)) {
            while ($row = mysqli_fetch_row($result)) {
                $id = $row[0];
                $title = $row[1];
                $price = $row[2];
                $rating = $row[3];
                $imagePath = $row[4];

                $discountPrice = GetCurrentProductDiscount($id, $price);

                PrintNewsBlock($title, $price, $discountPrice, $rating, $imagePath, $id);
            }

            mysqli_free_result($result);
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


    function PrintNewsBlock(string $title, float $price, float $discountPrice, float $rating, string $imagePath, string $id)
    {
        $discountPriceHTML = $discountPrice == 0.0 ? '<span class="new-price"></span>' : '<span class="new-price">$' . $discountPrice . '</span>';
        $pricericeHTML = $discountPrice == 0.0 ? '<div class="old-price">$' . $price . '</div>' : '<del class="old-price">$' . $price . '</del>';
        $ratingHTML = GetRatingHTML($rating);

        $productBlockHTML = '
                                                <div class="col-xl-4 col-lg-6 col-md-4 col-sm-6">
                                                    <div class="exclusive-item exclusive-item-three text-center mb-50">
                                                        <div class="exclusive-item-thumb">
                                                            <a href="shop-details.html">
                                                                <img src="' . $imagePath . '" alt="">
                                                                <img class="overlay-product-thumb" src="' . $imagePath . '" alt="">
                                                            </a>
                                                            <ul class="action">
                                                                
                                                            <li><a id="' . $id . '" style="background-color: lightblue; cursor: pointer;" onclick="OnProductBuyButtonClick(this.id)">BUY</a></li>
                                                            <li><a id="' . $id . '" style="cursor: pointer;" onclick="AddSelectedProductIdToCookies(this.id)"><i class="flaticon-supermarket"></i></a></li>
                                                            <li><a id="' . $id . '" style="cursor: pointer;" onclick="AddSelectedProductIdToWishListCookies(this.id)">WL</a></li>
                                                            
                                                            </ul>
                                                        </div>
                                                        <div class="exclusive-item-content">
                                                            <h5><a href="shop-details.html">' . $title . '</a></h5>
                                                            <div class="exclusive--item--price">
                                                                ' . $pricericeHTML . '
                                                                ' . $discountPriceHTML . '
                                                            </div>
                                                            <div class="rating">
                                                                ' . $ratingHTML . '
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>';

        echo $productBlockHTML;
    }


    function GetRatingHTML(int $rating)
    {
        $ratingHTML = "";
        for ($i = 0; $i < $rating; $i++) {
            $ratingHTML .= "<i class='fas fa-star'></i>";
        }

        return $ratingHTML;
    }




    $_SESSION["showAllProductsLike"] = "";





?>

                             

                            </div>
                            
                            <!-- breadcrumb-area-end 
                            <div class="pagination-wrap">
                                <ul>
                                    <li class="prev"><a href="#"><i class="fas fa-long-arrow-alt-left"></i> Prev</a></li>
                                    <li><a href="#">1</a></li>
                                    <li class="active"><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">...</a></li>
                                    <li><a href="#">10</a></li>
                                    <li class="next"><a href="#">Next <i class="fas fa-long-arrow-alt-right"></i></a></li>
                                </ul>
                            </div>
                            -->
                        </div>




                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                            <aside class="shop-sidebar shop-right-sidebar">
                                
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            <div class="widget shop-widget mb-30">
                                    
                            
                            
                            
                                    <!-- PRODUCT CATEGORY (TYPE) -->
                            
                            
                                <div class="shop-widget-title">
                                    <h6 class="title">Product Categories</h6>
                                </div>
                                <div class="shop-cat-list">
                                    <ul>
                                        <li><a style="cursor: pointer;" id="productCategoriesButton_1" class="sort_button" onclick="SetCookie_ShowAllProductsLike(this.innerHTML, this.id)"> Hoodie </a></li>
                                        <li><a style="cursor: pointer;" id="productCategoriesButton_2" class="sort_button" onclick="SetCookie_ShowAllProductsLike(this.innerHTML, this.id)"> Short Sleeve T-Shirt </a></li>
                                        <li><a style="cursor: pointer;" id="productCategoriesButton_3" class="sort_button" onclick="SetCookie_ShowAllProductsLike(this.innerHTML, this.id)"> Long Sleeve T-Shirt </a></li>
                                        <li><a style="cursor: pointer;" id="productCategoriesButton_4" class="sort_button" onclick="SetCookie_ShowAllProductsLike(this.innerHTML, this.id)"> Accessorie </a></li>
                                    </ul>
                                </div>

                                    <br><br><br><br>


                                <div class="shop-widget-title">
                                        <h6 class="title">Filter By Price</h6>
                                </div>
                                    <div class="price_filter">
                                        <div id="slider-range"></div>
                                        <div class="price_slider_amount">
                                            <span>Price :</span>
                                            <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                        </div>
                                        <p id="currentPriceRange"></p>
                                        <button id="priceFilterButton" style="margin-left: 75%;" onclick="SetDefinedSortingCostRange()">Enter</button>

                                    </div>








                                    <div class="shop-sidebar-color">
                                        <div class="shop-widget-title">
                                            <h6 class="title">Filter Color</h6>
                                        </div>
                                        <div class="shop-size-list">
                                            <ul>
                                                <li id="filterColor_1" onclick="SetSelectedFilterColor('Orange', this.id)"></li>
                                                <li id="filterColor_2" onclick="SetSelectedFilterColor('Yellow', this.id)"></li>
                                                <li id="filterColor_3" onclick="SetSelectedFilterColor('Green', this.id)"></li>
                                                <li id="filterColor_4" onclick="SetSelectedFilterColor('Blue', this.id)"></li>
                                                <li id="filterColor_5" onclick="SetSelectedFilterColor('Black', this.id)"></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <br><br><br><br>



                                    <div class="shop-widget-title">
                                        <h6 class="title">NEW PRODUCT</h6>
                                        <div class="slider-nav"></div>
                                    </div>
                                    <div class="sidebar-product-active">
                                        <div class="sidebar-product-list">
                                            <ul>
                                                <li>
                                                    <div class="sidebar-product-thumb">
                                                        <a href="#"><img src="img/product/sidebar_product01.jpg" alt=""></a>
                                                    </div>
                                                    <div class="sidebar-product-content">
                                                        <div class="rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                        <h5><a href="#">Slim Fit Cotton</a></h5>
                                                        <span>$ 39.00</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="sidebar-product-thumb">
                                                        <a href="#"><img src="img/product/sidebar_product02.jpg" alt=""></a>
                                                    </div>
                                                    <div class="sidebar-product-content">
                                                        <div class="rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                        <h5><a href="#">Slim Fit Cotton</a></h5>
                                                        <span>$ 39.00</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="sidebar-product-thumb">
                                                        <a href="#"><img src="img/product/sidebar_product03.jpg" alt=""></a>
                                                    </div>
                                                    <div class="sidebar-product-content">
                                                        <div class="rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                        <h5><a href="#">Slim Fit Cotton</a></h5>
                                                        <span>$ 39.00</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="sidebar-product-list">
                                            <ul>
                                                <li>
                                                    <div class="sidebar-product-thumb">
                                                        <a href="#"><img src="img/product/sidebar_product01.jpg" alt=""></a>
                                                    </div>
                                                    <div class="sidebar-product-content">
                                                        <div class="rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                        <h5><a href="#">Slim Fit Cotton</a></h5>
                                                        <span>$ 39.00</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="sidebar-product-thumb">
                                                        <a href="#"><img src="img/product/sidebar_product02.jpg" alt=""></a>
                                                    </div>
                                                    <div class="sidebar-product-content">
                                                        <div class="rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                        <h5><a href="#">Slim Fit Cotton</a></h5>
                                                        <span>$ 39.00</span>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="sidebar-product-thumb">
                                                        <a href="#"><img src="img/product/sidebar_product03.jpg" alt=""></a>
                                                    </div>
                                                    <div class="sidebar-product-content">
                                                        <div class="rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                        <h5><a href="#">Slim Fit Cotton</a></h5>
                                                        <span>$ 39.00</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                            </div>








                                <div class="widget shop-widget mb-30">
                                    
                                </div>


                                 <!-- <div class="widget shop-widget mb-30"> -->
                                    <!-- <div class="shop-widget-title">
                                        <h6 class="title">Product Brand</h6>
                                    </div> -->
                                    <!-- <div class="sidebar-brand-list">
                                        <ul>
                                            <li><a href="#">New Arrivals</a></li>
                                            <li><a href="#">Clothing & Accessories</a></li>
                                            <li><a href="#">Vanam Jacket</a></li>
                                            <li><a href="#">Home Electronics</a></li>
                                        </ul>
                                    </div>
                                     <div class="shop-sidebar-size">
                                        <div class="shop-widget-title">
                                            <h6 class="title">Size</h6>
                                        </div>
                                        <div class="shop-size-list">
                                            <ul>
                                                <li><a href="#">S</a></li>
                                                <li><a href="#">M</a></li>
                                                <li><a href="#">L</a></li>
                                                <li><a href="#">XL</a></li>
                                            </ul>
                                        </div>
                                    </div> 
                                    <div class="shop-sidebar-color">
                                        <div class="shop-widget-title">
                                            <h6 class="title">Filter Color</h6>
                                        </div>
                                        <div class="shop-size-list">
                                            <ul>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                                <li></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>  -->
                                
                            </aside>
                        </div>
                    </div>
                </div>
            </section>
            <!-- shop-area-end -->

            

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
                ShowAllProductsLike_Current = "<?php echo $ShowAllProductsLike; ?>";
                SortAllProductsBy_Current =  "<?php echo $SortAllProductsBy; ?>";
                SortAllProductsByColor_Current =  "<?php echo $SortAllProductsByColor; ?>";

                SortAllProductsByPriceMin_Current =  "<?php echo $SortAllProductsByPrice["min"]; ?>";
                SortAllProductsByPriceMax_Current =  "<?php echo $SortAllProductsByPrice["max"]; ?>";

                
                

                

                
                isParametersChanged = false;

                

                
                SortingBySelectedId = "<?php if (isset($_COOKIE["sortAllProductsBySelectedId"]))
                    echo $_COOKIE["sortAllProductsBySelectedId"];
                else
                    echo ""; ?>";
                SortingByTypeId = "<?php if (isset($_COOKIE["showAllProductsByTypeId"]))
                    echo $_COOKIE["showAllProductsByTypeId"];
                else
                    echo ""; ?>";
                SortingByColorId = "<?php if (isset($_COOKIE["sortAllProductsByColorId"]))
                    echo $_COOKIE["sortAllProductsByColorId"];
                else
                    echo ""; ?>";


                if(SortingBySelectedId != "")
                {
                    //alert(SortingBySelectedId);
                    var selectedOption = document.getElementById(SortingBySelectedId);
                    selectedOption.setAttribute('selected', '""');
                }
                if(SortingByTypeId != "")
                {
                    var pressedButton = document.getElementById(SortingByTypeId);
                    pressedButton.setAttribute('style', 'color: blue;');
                }
                if(SortingByColorId != "")
                {
                    var pressedColor = document.getElementById(SortingByColorId);
                    pressedColor.setAttribute('style', 'background-color: black');
                }
                if(SortAllProductsByPriceMin_Current != "" && SortAllProductsByPriceMax_Current != "")
                {
                    var currentPriceRange = document.getElementById("currentPriceRange");
                    currentPriceRange.innerText = "PRICE: $" + SortAllProductsByPriceMin_Current + " - $" + SortAllProductsByPriceMax_Current;
                }
                
                
                





                document.onloadeddata = DeleteSortingCookie();

                function DeleteSortingCookie()
                {
                    //alert(document.cookie);

                    deleteAllCookies();

                    /*document.cookie = "showAllProductsLike+= ; expires = Thu, 01 Jan 1970 00:00:00 GMT";
                    document.cookie = "sortAllProductsBy= ; expires = Thu, 01 Jan 1970 00:00:00 GMT";
                    document.cookie = "sortAllProductsByColor= ; expires = Thu, 01 Jan 1970 00:00:00 GMT";*/

                    //alert(document.cookie);
                }

                function deleteAllCookies() 
                {
                    document.cookie = "sortAllProductsBySelectedId= '';expires=Thu, 01 Jan 1970 00:00:00 GMT";
                    document.cookie = "showAllProductsByTypeId= '';expires=Thu, 01 Jan 1970 00:00:00 GMT";
                    document.cookie = "sortAllProductsByColorId= '';expires=Thu, 01 Jan 1970 00:00:00 GMT";
                    document.cookie = "sortAllProductsByPriceMin= '';expires=Thu, 01 Jan 1970 00:00:00 GMT";
                    document.cookie = "sortAllProductsByPriceMax= '';expires=Thu, 01 Jan 1970 00:00:00 GMT";

                    document.cookie = "sortAllProductsBy= '';expires=Thu, 01 Jan 1970 00:00:00 GMT";
                    document.cookie = "showAllProductsLike= '';expires=Thu, 01 Jan 1970 00:00:00 GMT";
                    document.cookie = "sortAllProductsByColor2= '';expires=Thu, 01 Jan 1970 00:00:00 GMT";
                    document.cookie = "sortAllProductsByPriceMin= '';expires=Thu, 01 Jan 1970 00:00:00 GMT";
                    document.cookie = "sortAllProductsByPriceMax= '';expires=Thu, 01 Jan 1970 00:00:00 GMT";
                    //document.cookie = "bucketProductsId=;expires=Thu, 01 Jan 1970 00:00:00 GMT";





                    /*var cookies = document.cookie.split(";");

                    for (var i = 0; i < cookies.length; i++) 
                    {
                        var cookie = cookies[i];
                        var eqPos = cookie.indexOf("=");
                        var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
                        document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
                    }*/
                }

                //window.onbeforeunload = IsSortingParametersChanged();

                /*function IsSortingParametersChanged()
                {
                    if(isParametersChanged == true) 
                        alert("Was changes");
                    else
                    {
                        alert("deleted");
                        deleteAllCookies();
                    }
                }*/


                function SaveCookies()
                {
                    if(SortAllProductsBy_Current != "")
                        document.cookie = "sortAllProductsBy=" + SortAllProductsBy_Current;
                    if(ShowAllProductsLike_Current != "")
                        document.cookie = "showAllProductsLike=" + ShowAllProductsLike_Current;
                    if(SortAllProductsByColor_Current != "")
                    document.cookie = "sortAllProductsByColor2=" + SortAllProductsByColor_Current;

                    if(SortAllProductsByPriceMin_Current != "" && SortAllProductsByPriceMax_Current != "")
                    {
                        document.cookie = "sortAllProductsByPriceMin=" + SortAllProductsByPriceMin_Current;
                        document.cookie = "sortAllProductsByPriceMax=" + SortAllProductsByPriceMax_Current;
                    }
                }

                function SaveSelectedParametersID()
                {
                    document.cookie = "sortAllProductsBySelectedId=" + SortingBySelectedId;
                    document.cookie = "showAllProductsByTypeId=" + SortingByTypeId;
                    document.cookie = "sortAllProductsByColorId=" + SortingByColorId;
                }

                

                //SORTING TYPE (--select--)

                function SetSelectedSortingType(sortingType)
                {
                    if(sortingType != SortAllProductsBy_Current)
                        SortAllProductsBy_Current = sortingType;


                    /*var selectedOption = document.getElementById(id);
                    selectedOption.setAttribute('selected', '""');*/

                    //SortingBySelectedId = id;
                    //alert(id);


                    //alert(sortingType);
                    if(sortingType == "")
                    {
                        SortingBySelectedId = "sortingType_1";
                    }
                    else if(sortingType == "Best Match")
                    {
                        SortingBySelectedId = "sortingType_2";
                    }
                    else if(sortingType == "Newest Item")
                    {
                        SortingBySelectedId = "sortingType_3";
                    }
                    else if(sortingType == "A - Z")
                    {
                        SortingBySelectedId = "sortingType_4";
                    }

                    




                    
                    SaveCookies();
                    SaveSelectedParametersID();
                    //document.cookie = "sortAllProductsBy=" + sortingType;
                    document.location.reload(true);
                }



                //PRODUCT CATEGORIES (types)

                function SetCookie_ShowAllProductsLike(buttonText, id)
                {
                    if(buttonText != ShowAllProductsLike_Current)
                        ShowAllProductsLike_Current = buttonText;
                    
                    var pressedButton = document.getElementById(id);
                    pressedButton.setAttribute('style', 'color: blue;');

                    SortingByTypeId = id;
                    
                    SaveCookies();
                    SaveSelectedParametersID();
                    //document.cookie = "showAllProductsLike=" + buttonText;
                    document.location.reload(true);
                }




                //FILTER BY PRICE

                function SetDefinedSortingCostRange()
                {
                    costRangeValuesString = document.getElementById('amount').value;
                    costRangeValuesNumber = costRangeValuesString.match(/^\d+|\d+\b|\d+(?=\w)/g);

                    minCost = costRangeValuesNumber[0];
                    maxCost = costRangeValuesNumber[1];

                    SortAllProductsByPriceMin_Current = minCost;
                    SortAllProductsByPriceMax_Current = maxCost;

                    document.cookie = "sortAllProductsByPriceMin=" + minCost;
                    document.cookie = "sortAllProductsByPriceMax=" + maxCost;
                    
                    SaveCookies();
                    SaveSelectedParametersID();
                    document.location.reload(true);
                }

                

                

                //FILTER COLOR

                function SetSelectedFilterColor(color, id)
                {
                    if(color != SortAllProductsByColor_Current)
                        SortAllProductsByColor_Current = color;

                    //SortAllProductsByColor_New = color;
                    //document.cookie = "sortAllProductsByColor2=" + color;

                    var pressedColor = document.getElementById(id);
                    pressedColor.setAttribute('style', 'background-color: black');

                    SortingByColorId = id;

                    SaveCookies();
                    SaveSelectedParametersID();
                    document.location.reload(true);
                }

                




                //-----------Bucket functionality---------------------

                //AddSelectedProductIdToCookies();//////////////

                function OnProductBucketClick() //+
                {
                    AddSelectedProductIdToCookies();
                }   

                

                function OnMenuBucketClick() 
                {
                    document.location = "wishlist.php";
                }

                function OnBucketMenuDeleteButtonClick(id) //+
                {
                    var productIndex;
                    var passedArray = <?php echo json_encode($BucketProductsIdNums); ?>;
                    arrayValues = [];
                    
                    for (let i = 0; i < passedArray.length; i++) 
                    {
                        if(passedArray[i] != id)
                            arrayValues.push(passedArray[i]);
                        else
                            productIndex = i;
                    }

                    var json_str = JSON.stringify(arrayValues);
                    document.cookie="bucketProductsId=" + json_str;





                    passedArray = <?php echo json_encode($BucketProductsAmountNums); ?>;
                    alert("passedArray " + passedArray);
                    
                    //var sliaced = passedArray.slice(productIndex, 1);

                    var a = [];
                    
                    for (let index = 0; index < passedArray.length; index++) 
                    {
                        if(index != productIndex)
                            a.push(passedArray[index]);
                    }
                    
                    var json_str = JSON.stringify(a);
                    document.cookie="bucketProductsAmount=" + json_str;







                    document.location.reload(true);
                    //delete from cookie
                    //reload page (bucket)
                }

                function OnBucketMenuMakePurchaseClick() 
                {
                    document.location = "wishlist.php";
                } 



                //----------Buying functionality----------

                function OnProductBuyButtonClick(id) //+
                {
                    /*var passedArray = <?php echo json_encode($BucketProductsIdNums); ?>;
                    passedArray.push(id);
                    var json_str = JSON.stringify(passedArray);
                    document.cookie="bucketProductsId=" + json_str;*/
                    
                    document.location = "wishlist.php";
                }   



                //alert("1");


                

                   
                    //alert(bucketProductsID[0]);

                    //document.cookie = "sortAllProductsBySelectedId=" + SortingBySelectedId;
                    //document.cookie = "showAllProductsByTypeId=" + SortingByTypeId;
                    //document.cookie = "sortAllProductsByColorId=" + SortingByColorId;



                //Commom (OnAddingNewProduct and OnSiteLoadCookies)

                alert(document.cookie);
               

                function AddSelectedProductIdToCookies(id) //+
                {
                    var passedArray = <?php echo json_encode($BucketProductsIdNums); ?>;

                    if(!passedArray.includes(id))
                    {
                        passedArray.push(id);
                        var json_str = JSON.stringify(passedArray);
                        document.cookie="bucketProductsId=" + json_str;
                        
                        document.location.reload(true);

                        //alert("start");                            
                        var bucketProductsAmount = <?php echo json_encode($BucketProductsAmountNums); ?>;

                        if(bucketProductsAmount != false)
                        {
                            //wasChange = true;
                            
                            //alert(1);

                            productIndexInArray = passedArray.indexOf(id);

                            //alert(productIndexInArray);

                            bucketProductsAmount[productIndexInArray] = 1;
                            
                            json_str = JSON.stringify(bucketProductsAmount);
                        
                            document.cookie="bucketProductsAmount=" + json_str;
                            
                            
                        }
                        else
                        {
                            //alert(2);

                            bucketProductsAmount2 = [];
                            productIndexInArray = passedArray.indexOf(id);

                            bucketProductsAmount2[productIndexInArray] = 1;
                            
                            json_str = JSON.stringify(bucketProductsAmount2);
                        
                            document.cookie="bucketProductsAmount=" + json_str;
                        }

                        document.location.reload(true);

                        
                    }
                }
                
                















                //document.cookie = "wishListProductsId= '';expires=Thu, 01 Jan 1970 00:00:00 GMT";

                //alert(document.cookie);
                



                //Add to WishListProductId

                function AddSelectedProductIdToWishListCookies(id) 
                {
                    var passedArray = <?php echo json_encode($WishListProductsIdNums); ?>;

                    if(!passedArray.includes(id))
                    {
                        passedArray.push(id);
                        var json_str = JSON.stringify(passedArray);
                        document.cookie="wishListProductsId=" + json_str;
                        
                        document.location.reload(true);
                    }
                }


                function SetProductAmount() //(1)
                {

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

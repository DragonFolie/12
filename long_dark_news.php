<?php
$newsDB = "thelongdark";
$newsTable = "news";

$link = mysqli_connect("localhost", "DragonFolie", "nair6455", $newsDB);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

//queries to db 

$newsInfoQuerySortedByNewer = "SELECT `Title`, `Date`, 
        `ImagePath`, `PageFilePath` FROM $newsTable ORDER BY `Date` DESC";

$newsInfoQuerySortedByOlder = "SELECT `Title`, `Date`, 
        `ImagePath`, `PageFilePath` FROM $newsTable ORDER BY `Date` ASC";

// server should keep session data for AT LEAST 1 hour
ini_set('session.gc_maxlifetime', 3600);

// each client should remember their session id for EXACTLY 1 hour
//session_set_cookie_params(3600); 









//is used to start a PHP session or resume the current one in the web page. It generates a unique session ID for the user.
//session_start(); 

if (session_id() == '' || !isset($_SESSION)) { // session isn't started
    session_start();
}


$isNewsSortedByOlder;
$isSearchPerformed;


if (isset($_SESSION["isNewsSortedByOlder"])) {
    $isNewsSortedByOlder = $_SESSION["isNewsSortedByOlder"];
//echo " isNewsSortedByOlder exists and = " . var_dump($_SESSION["isNewsSortedByOlder"]) . "<br>";
}
else {
    $_SESSION["isNewsSortedByOlder"] = false;
}


if (isset($_SESSION["isSearchPerformed"])) {
    $isSearchPerformed = $_SESSION["isSearchPerformed"];
//echo "isSearchPerformed exists and = " . var_dump($_SESSION["isSearchPerformed"]);
}
else {
    $_SESSION["isSearchPerformed"] = false;
}


//$_SESSION["isSearchPerformed"] = true;

$searchQuery = "";



//session_unset();















$IsAllNewsSortedByOlder = false;

if (isset($_COOKIE["IsAllNewsSortedByOlder"])) {
    $IsAllNewsSortedByOlder = $_COOKIE["IsAllNewsSortedByOlder"];
//echo "IsAllNewsSortedByOlder setted <br>";
}
else {
    $IsAllNewsSortedByOlder = false;
//echo "IsAllNewsSortedByOlder not setted <br>";
}





$SearchedText = "";

if (isset($_COOKIE["SearchedText"])) {
    $SearchedText = $_COOKIE["SearchedText"];
//echo "SearchedText setted <br>";
}
else {
    $SearchedText = "";
//echo "SearchedText not setted <br>";
}

/*if($_SESSION["isNewsSortedByOlder"] == null) $_SESSION["isNewsSortedByOlder"] = false;
 if($_SESSION["isSearchPerformed"] == null) $_SESSION["isSearchPerformed"] = false;
 $isNewsSortedByOlder = false;
 $isSearchPerformed = false;
 if($_SESSION["isNewsSortedByOlder"] != null) echo "isNewsSortedByOlder exists";
 if($_SESSION["isSearchPerformed"] != null) echo "isSearchPerformed exists";
 if($_SESSION["isNewsSortedByOlder"] != null) $isNewsSortedByOlder = $_SESSION["isNewsSortedByOlder"];
 if($_SESSION["isSearchPerformed"] != null) $isSearchPerformed = $_SESSION["isSearchPerformed"];*/

//session_unset();

//We need to destroy the PHP session when a user logs out from the web site. To free all the session variable, the following command is used.
//session_unset(); 

//ession variables can be created for future use. It can be accessed throughout the application. You can create a session variable and store value in it with the following syntax:
//$_SESSION["Private"] = 1111; 

/*if($_SESSION["Private"]) 
 echo $_SESSION["Private"];*/

//записує дані сесії і завершує її
//session_write_close();


/*$pageRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) &&
 ($_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0' ||  $_SERVER['HTTP_CACHE_CONTROL'] == 'no-cache'); 
 if($pageRefreshed == 1){
 echo "Yes";
 }else{
 //enter code here
 echo "No";
 }*/



//To end the complete session, following command is used.
//session_destroy();








/*session_set_cookie_params(15,"/");
 //session_commit();
 /*if($isButtonSortClicked == true)
 $_SESSION["Private"] = false;
 else if($isButtonSortClicked == false)
 $_SESSION["Private"] = true;*/



//session_id($private_id);

//$_SESSION['pr_key'] = $b;

?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Атрибут accesskey</title>
        <meta name="viewport" content="width=device-width">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">


        <link rel="stylesheet" type="text/css" href="css/long_dark_news.css">


        <link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
        
    </head>
     
     <body>

        
            
<!-- INSERT INTO `testtable` (`TestColumn1`, `TestColumn2`) VALUES ('First note', '1');
INSERT INTO `testtable` ". "(`TestColumn1`, `TestColumn2`) ". "VALUES('Second note','2') -->

          
        

        <nav class="header">
            <div class="header_container">
                <div class="header_logo">
                    <a href="long_dark_index.html"><img class="header_logo_image" src="img/the_long_dark_logo.png"  alt="the_long_dark_logo" srcset=""></a>
        
                </div>
                <div class="header_container_empty">
        
                </div>
                <div class="header_nav">
                    <ul class="header_inner_ul">
                        <li >
                            <a href="long_dark_news.php" style="color: white;">NEWS</a>
                        </li>
        
                        <li >
                            <a href="long_dark_survival_mode.html" >SURVIVAL MODE</a>
                        </li>
        
                        <li>
                            <a href="long_dark_story_mode.html" >STORY MODE</a>
                        </li>
        
                        <li>
                            <a href="https://hinterlandforums.com/forums/"  target="_blank" >COMMUNITY</a>
                        </li>
                        <li>
                            <a href="shop-right-sidebar.php"   >SHOP</a>
                        </li>
                        <li>
                            <a href="https://hinterlandgames.zendesk.com/hc/en-us"  target="_blank"  >SUPPORT</a>
                        </li>
                        <li>
                            <a>



                                <!-- Search field -->



                                    <button id="searchButton" class="button_search_button" onclick="OnSearchButtonClick()">
                                        <span class="noselect">
                                            <img src="img/loupe.png" alt=""> 
                                        </span>
                                        <div id="circle"></div> 
                                    </button>


                                
                                    <input class="search_field" placeholder="Search text" type="text" size="15" id="searchField" onkeydown="OnSearchSubmit(this, this.value)">
                             
                                
                                
                                
                                



                                
                            </a>
                        </li>
                    </ul>
                </div>
                 
        
            </div>
        
        </nav>
<main class="main">
    <section class="news">
        <h1 class="new_title_main">
            News &amp; Updates 


            <!-- SORTING BUTTON -->
    







                <button name="sortButton" id="test" class="sort_button" onclick="OnSortButtonClick()">
                    <img class="sort_button" src="img/sort-down.png" alt="">
                </button>
                <!-- <button name="showAllNews" id="test" class="sort_button">
                    <img class="sort_button" src="img/loupe.png" alt="">
                </button> -->
        </h1>






        

        <!-- <script type="text/javascript">
  window.onbeforeunload = confirmExit;
  function confirmExit()
  {
    return "You have attempted to leave this page.  If you have made any changes to the fields without clicking the Save button, your changes will be lost.  Are you sure you want to exit this page?";
  }
</script> -->
        

            <?php

function SortNewsByOlder()
{
    global $newsInfoQuerySortedByOlder;
    CreateNewsBlock($newsInfoQuerySortedByOlder);
}

function SortNewsByNewer()
{
    global $newsInfoQuerySortedByNewer;
    CreateNewsBlock($newsInfoQuerySortedByNewer);
}

/*if(array_key_exists('sortButton', $_POST))
 {
 OnButtonSortClick();
 }*/









//Show all button




/*function OnButtonShowAllNewsClick()
 {
 $_SESSION["isNewsSortedByOlder"] = $_SESSION["isSearchPerformed"] = false;
 }
 if(array_key_exists('showAllNews', $_POST))
 {
 OnButtonShowAllNewsClick();
 }*/








// Search 



/*function OnSearchClick()
 {
 PrintFindedNews();
 }*/

function PrintFindedNews()
{
    //if(!$_SESSION["isSearchPerformed"])
    $_SESSION["isSearchPerformed"] = true;
    //else if($_SESSION["isSearchPerformed"])
    //$_SESSION["isSearchPerformed"] = false;

    /*echo "<br><br><br>!!!!  ";
     var_dump($_SESSION["isSearchPerformed"]);
     echo "<br><br><br>";*/

    if (isset($_POST['searchField']))
        $searchText = htmlentities($_POST['searchField']);

    $query = GetSearchQuery($searchText);
    global $searchQuery;
    $searchQuery = $query;


    $_SESSION["isNewsSortedByOlder"] = false;
}

/*if(array_key_exists('searchField', $_POST))
 {
 OnSearchClick();
 }*/

function GetSearchQuery(string $searchText)
{
    global $newsTable;
    $newsInfoQuerySearch = "SELECT `Title`, `Date`, `ImagePath`, `PageFilePath` 
                    FROM $newsTable WHERE Title LIKE '%" . $searchText . "%' ORDER BY `Date` DESC";

    return $newsInfoQuerySearch;
}










//Generating news blocks


function CreateNewsBlock(string $newsInfoQuery)
{
    global $link;
    if ($result = mysqli_query($link, $newsInfoQuery)) {
        while ($row = mysqli_fetch_row($result)) {
            //printf(count($row));

            $title = $row[0];
            $date = $row[1];
            $imagePath = $row[2];
            $pageFilePath = $row[3];

            PrintNewsBlock($title, $date, $imagePath, $pageFilePath);
        }
    }

    mysqli_free_result($result);
}








if ($SearchedText != "") {
    $searchQuery = GetSearchQuery($SearchedText);
    CreateNewsBlock($searchQuery);
}
else if ($IsAllNewsSortedByOlder == true) {
    SortNewsByOlder();
}
else {
    SortNewsByNewer();
}




/*if($_SESSION["isNewsSortedByOlder"])
 {
 //echo "isNewsSortedByOlder <br><br><br><br><br><br><br>";
 SortNewsByOlder();
 }
 
 else if($_SESSION["isSearchPerformed"])
 {   
 //echo "isSearchPerformed <br><br><br><br><br><br><br>";
 CreateNewsBlock($searchQuery);
 }
 
 else
 {
 //echo "SortNewsByNewer <br><br><br><br><br><br><br>";
 SortNewsByNewer();
 }*/






//Reset sessions


//$_SESSION["isNewsSortedByOlder"] = false;
$_SESSION["isSearchPerformed"] = false;



//Reset after leave / change page








function PrintNewsBlock(string $title, string $date, string $imagePath, string $pageFilePath)
{
    $newsBlockHTML = '
                <ul class="list_block_news">
                    <li class="block_news">

                        <span class="time_block">' . "$date" . '</span>

                        <a href="' . "$pageFilePath" . '" class="block_news_img_text">

                            <div class="block_news_img_text">
                                <img src="' . "$imagePath" . '" style="width: 329px; height: auto;"  alt="" srcset="">
                            </div>

                            <div class="block_news_text">
                                <h2 href="#" class="block_news_text_inner">' . "$title" . '</h2>
                            </div>
                            
                        </a>
                    </li>
                </ul>';

    echo $newsBlockHTML;
}
?>




        











        <!-- <ul class="list_block_news">
            <li class="block_news">
                <span class="time_block">30.01.2077</span>
                <a href="long_dark_news_happy-holidays-from-hinterland.php" class="block_news_img_text">
                    <div class="block_news_img_text">

                        
                            
                            <img href="long_dark_news_happy-holidays-from-hinterland.html" src="img/seasons-greetings-blog-header-comp-1.png" style="width: 329px; height: auto;"  alt="" srcset="">
                        
                    </div>
                    <div class="block_news_text">
                        <h2 href="long_dark_news_happy-holidays-from-hinterland.html" class="block_news_text_inner">  Happy Holidays from Hinterland</h2>

                    </div>
                    
                </a>
                

            </li>
            <div class="content_inner_text_hr">
                
            </div>



        </ul> --> 

        <!-- Блоки новин назив list_block_news  block_news_text-текст зліва  block_news_img_text - фото   content_inner_text_hr - полоска після новини --> 

        <!-- <ul class="list_block_news">
            <li class="block_news">
                <span class="time_block">28.05.2020.</span>


                <a href="long_dark_news_the-long-dark-returns-to-geforce-now.html" class="block_news_img_text">

                    <div class="block_news_img_text">
                        <img src="img/Nvidia-Banner-Site-Forum-1360x566-1-1.png" style="width: 329px; height: auto;"  alt="" srcset="">
                    </div>

                    <div class="block_news_text">
                        <h2 href="#" class="block_news_text_inner"> The Long Dark returns to GeForce Now</h2>

                    </div>
                    
                </a>
                

            </li> -->
            
            
            <!-- Блоки новин назив list_block_news  block_news_text-текст зліва  block_news_img_text - фото   content_inner_text_hr - полоска після новини --> 
            <!-- <div class="content_inner_text_hr">
                
            </div>



        </ul> -->


<!-- Блоки новин назив list_block_news  block_news_text-текст зліва  block_news_img_text - фото   content_inner_text_hr - полоска після новини --> 
        <!-- <ul class="list_block_news">
            <li class="block_news">
                <span class="time_block">19.05.2020</span>
                <a href="long_dark_news_fearless-navigator-update-now-live.html" class="block_news_img_text">
                    <div class="block_news_img_text">
                        <img src="img/Fearless-Navigator_Blog_Post_Cover_1360x566-comp-1024x426-1.jpg" style="width: 329px; height: auto;"  alt="" srcset="">
                    </div>
                    <div class="block_news_text">
                        <h2 href="#" class="block_news_text_inner"> FEARLESS NAVIGATOR Update Now Live</h2>

                    </div>
                    
                </a>
                

            </li>
            <div class="content_inner_text_hr">
                
            </div>



        </ul> -->

        <!-- Блоки новин назив list_block_news  block_news_text-текст зліва  block_news_img_text - фото   content_inner_text_hr - полоска після новини --> 
        <!-- <ul class="list_block_news">
            <li class="block_news">
                <span class="time_block">01.04.2020</span>
                <a href="long_dark_news_will-you-survive-winters-embrace.html" class="block_news_img_text">
                    <div class="block_news_img_text">
                        <img src="img/Winters-Embrace_Post-Cover_1366x566-comp.jpg" style="width: 329px; height: auto;"  alt="" srcset="">
                    </div>
                    <div class="block_news_text">
                        <h2 href="#" class="block_news_text_inner"> Will You Survive WINTER’S EMBRACE?</h2>

                    </div>
                    
                </a>
                

            </li>
        </ul> -->




    </section>

</main>


<footer class="footer">

    <div class="footer_inner">

        <h2 >SIGN UP FOR NEWS & UPDATES</h2>

        <div class="email_sender_field">
            <form action="vlad_work_with_sql_email">

                
                <input type="email" value="" name="EMAIL" class="email_sender_field_inner"  required="" aria-label="Your email">
                
                <button type="submit" value="Subscribe" name="subscribe"  class="email_sender_field_inner_submit">Sign Up</button>



            </form>

        </div>

        <ul class="list_photo">
            <li>

                <a class="footer-list-twitter" href="https://www.facebook.com/intothelongdark">
                    <img src="img/icon-share-facebook.svg" width="40px" height="40px" alt="">
                    
                </a>

            </li>
            <li>

                <a href="" class="footer-list-twitter">
                    <img src="img/icon-community-twitch.svg" width="40px" height="36px" alt="https://twitter.com/HinterlandGames">
                </a>

            </li>
            <li>

                <a class="footer-list-twitter" href="https://www.youtube.com/user/hinterlandgames">
                    <img src="img/icon-youtube.svg" width="40px" height="40px" alt="">
                    
                </a>

            </li>
            <li>

                <a href="https://www.twitch.tv/directory/game/The%20Long%20Dark" class="footer-list-twitter">
                    <img src="img/icon-community-twitch.svg" width="40px" height="36px" alt="https://twitter.com/HinterlandGames">
                </a>

            </li>
            


        </ul>

        <ul class="footer_list_text">
            <li >
                <a href="long_dark_news.php" class="footer_list_text_li">NEWS</a>
            </li>

            <li >
                <a href="long_dark_survival_mode.html" class="footer_list_text_li" >SURVIVAL MODE</a>
            </li>

            <li>
                <a href="long_dark_story_mode.html"  class="footer_list_text_li">STORY MODE</a>
            </li>

            <li>
                <a href="https://hinterlandforums.com/forums/" class="footer_list_text_li" target="_blank" >COMMUNITY</a>
            </li>
            <li>
                <a href="shop-right-sidebar.php"  class="footer_list_text_li" >SHOP</a>
            </li>
            <li>
                <a href="https://hinterlandgames.zendesk.com/hc/en-us"class="footer_list_text_li"  target="_blank"  >SUPPORT</a>
            </li>
        </ul>

        <div class="footer_logo">

            <img src="img/logo-hinterland-wordmark.svg" alt="">

        </div>

        <div class="footer_logo_text">
            <p class="copyright">THE LONG DARK © 2012-2021 Hinterland Studio Inc.<br>
                "THE LONG DARK", "Hinterland" and the fox logo are registered trademarks or trademarks of Hinterland Studio Inc. All rights reserved.<br>
                Nintendo Switch is a trademark of Nintendo.

               </p>
               <p class="copyright"><a class="copyright_1"  href="https://hinterlandgames.com/privacy-policy/">Privacy Policy</a></p>

        </div>





    </div>




</footer>
    </body>








    <script> 

        IsAllNewsSortedByOlder = "<?php echo $IsAllNewsSortedByOlder; ?>";

        document.onloadeddata = deleteAllCookies();

        function OnSortButtonClick()
        {
            if(IsAllNewsSortedByOlder == true)
            {   
                document.cookie = "IsAllNewsSortedByOlder=" + "false"
            }
            else if(IsAllNewsSortedByOlder == false)
            {   
                document.cookie = "IsAllNewsSortedByOlder=" + "true"
            }

            document.location.reload(true);
        }

        function OnSearchSubmit(pressedKey, searchFieldText) 
        {
            if(event.key === 'Enter') 
            {
                document.cookie = "SearchedText=" + searchFieldText;
                document.location.reload(true);
            }
        }

        function OnSearchButtonClick()
        {
            var searchFieldText = document.getElementById("searchField").value;
            if(searchFieldText != "")
            {
                document.cookie = "SearchedText=" + searchFieldText;   
                document.location.reload(true);      
            }
        }   

        function deleteAllCookies() 
        {
            var cookies = document.cookie.split(";");

            for (var i = 0; i < cookies.length; i++) 
            {
                var cookie = cookies[i];
                var eqPos = cookie.indexOf("=");
                var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
                document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
            }
        }

    </script>








    </html>
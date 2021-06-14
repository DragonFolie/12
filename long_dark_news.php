<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Атрибут accesskey</title>
        <meta name="viewport" content="width=device-width">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Yusei+Magic&display=swap" rel="stylesheet">
        
    </head>
    <style>
/* General */

body {  width: 100%;
            height: auto; }
     *{
        font-family: 'Yusei Magic', sans-serif;
         padding: 0;
         margin: 0;
         list-style:none;
         text-decoration: none;
         

     }
     ul, ol {
    list-style: none;
}
li {
    list-style-type: none; /* Убираем маркеры */
   }

    .content_inner_text_hr{
    margin: 50px auto;
    width: 650px;
    padding-left:auto ;
    padding-right:auto ;
    color: #666;



}

    /*Header */ /*Header */ /*Header */ /*Header */ /*Header */ /*Header */ /*Header */
    
    .header{
            
    
        }
        .header_container{
            border-bottom: 1px solid #171717;
           
           width: 100%;
           height: 62px;
           background-color: black;
           display: grid;
           grid-template-columns: 30% 15% 55%;
           
   
           
   
           
          
           
   
   
        }
        @media  (max-width:1100px){
           .header_container_empty{
               display: none;
           }
           .header_container{
               display: grid;
               grid-template-columns: 25%  75%;
           }
           
   
           }
        .header_container>div.header_logo{
            
        }
        .header_logo_image{
            width: 186px;
            height: 62px;
            padding-left: 35% ;
        }
   
        .header_container>div.header_container_empty{
   
        }
        .header_container>div.header_nav{
            padding-top: 15px;
            text-align: center;
            vertical-align: middle;
          
           
          
       
       
       }
       .header_inner_ul{
           vertical-align: middle;
   
           margin: 0; /* Обнуляем значение отступов */
       padding: 4px; /* Значение полей */
       }
   
       .header_inner_ul a{
           color:#666;
       }
       .header_inner_ul a:hover{
            color: white;
            transition: 0.5s;
        }
   
       .header_inner_ul li {
       vertical-align: middle;
       display: inline; /* Отображать как строчный элемент */
       margin-right: 20px; /* Отступ слева */
       color: #666;
       padding: 3px; /* Поля вокруг текста */
      }
   
   

   /* NEWS */ /* NEWS */ /* NEWS */ /* NEWS */ /* NEWS */ /* NEWS */ /* NEWS */

    .main{
        background-color: #000000;
        
    }
    .news{
        
    padding-right: 15px;
    padding-left: 15px;
    width: 1170px;
    margin:0 auto;
        
    }
    .new_title_main{
        font-family: 'Yusei Magic', sans-serif;
        padding-top: 104px;
        padding-bottom: 42px;
        letter-spacing: 0em;
        color: white;
        text-align: center;
        font-size: 5.3em;

    }
    .list_block_news{
        margin: 50px auto;
        margin-top: 50px;
        margin-bottom: 0;

    }
    .block_news{
        padding: 45px 0 74px;
    border-bottom: 1px solid #333;
    max-width: 780px;
    margin: 0 auto;
    }
    .time_block{
        display: flex;
    text-align: center;
    align-items: center;
    display: block;
    font-size: 1.7em;
    font-weight: 200;
    color: #757575;
    margin-bottom: 35px;

        
    }
    .block_news_img_text{
        
        display: grid;
        grid-template-columns: 50% 50%;


    }
    .block_news_text_inner{
        font-family: 'Yusei Magic', sans-serif;
        display: flex;
    text-align: center;
    align-items: center;
    padding-top: 50px;
    font-size: 20px;
    font-weight: 200;
    color: #fff;
    display: inline-block;
    vertical-align: top;
    opacity: .6;

    }

    .block_news_text_inner:hover{
        opacity: 1;
        transition: 1s;
    }

    

      /* Footer */ /* Footer */ /* Footer */ /* Footer */ /* Footer */ /* Footer */

      .footer{

border-top: 1px solid #333;
background: #000;
text-align: center;
padding: 87px 0 282px;

}

.footer_inner{

padding-right: 15px;
padding-left: 15px;
margin-right: auto;
margin-left: auto;
width: 1170px;
text-align: center;
color: white;



}

.footer_inner h2{

margin-bottom: 100px;


}


/* Community */

.list_photo{

margin: 0; /* Обнуляем значение отступов */
padding: 4px; /* Значение полей */
}
.list_photo li{
display: inline; /* Отображать как строчный элемент */
margin-right: 5px; /* Отступ слева */
border: 1px solid #000; /* Рамка вокруг текста */
padding: 3px; /* Поля вокруг текста **/
}



.footer-list-twitter{

width: 44px;
height: 36px;
margin: 17px 10px;
opacity: .6;
}
.footer-list-twitter:hover{

transition: .8s;
opacity: 1;
}


/* footer_list_text */ /* footer_list_text */ /* footer_list_text */ /* footer_list_text */

.footer_list_text{
text-align: center;
margin-top: 100px;
line-height: 2em;
font-size: 20px;
color: white;
font-weight: 400;
font-family: "TLD Headline Updated15";


}
.footer_list_text li .footer_list_text_li{
color: white;
opacity: .6;

}

.footer_list_text li:hover .footer_list_text_li:hover{
transition: .5s;
opacity: 1;

}

.footer_logo {
opacity: 0.5;
margin: 65px auto;
max-width: 112px;
max-height: 100px;
text-align: center;
display: flex;
align-items: center;


}
.footer_logo:hover {
opacity: 1;
transition: .8s;



}
.footer_logo_text{

color: white;
}

.copyright {
font-family: 'Yusei Magic', sans-serif;
margin: 42px auto 20px;
font-size: 14px;
font-weight: 200;
line-height: 2em;
max-width: 460px;
color: #757575;
letter-spacing: 0.03em;
}
.copyright_1{
text-decoration: underline;
color: #757575;
}

/* Email Sender */ /* Email Sender */ /* Email Sender */ /* Email Sender */ /* Email Sender */ /* Email Sender */ /* Email Sender */ 
    
.email_sender{
        background: url(img/hesitant-prospect-newsletter-comp.png)  center no-repeat;
        max-width: 880px;
        margin-top: 50 auto;
        
        
    
    
    }
    .email_sender_text{
        margin: 150px auto;
        
        color: white;
        text-align: center;
        
        font-weight: 500;
        font-size: 28px;
        line-height: 1.3em;
        vertical-align: middle;
        display: flex;
        text-align: center;
        align-items: center;
        opacity: 0.8;
        padding: 75px;
    
    }
    .email_sender_field{
        display: block;
        
        border: 1px solid #ffffff66 !important;
        margin: 20px auto 48px;
        width: 100%;
        max-width: 445px;
        height: 74px;
        position: relative;
    
    }
    .email_sender_field_inner{
        border-right: 1px solid #ffffff66 !important;
        vertical-align: top;
        padding: 24px 0 16px 27px;
        background: transparent;
        border: none;
        border-right: 0px;
        max-width: 322px;
        width: 70%;
        height: 74px;
        font-size: 22px;
        font-weight: 200;
        letter-spacing: 0.03em;
        border-radius: 0;
        font-weight: 400;
        box-sizing: border-box;
        outline-width: 0;
        color: white;
    
    }
    
    .email_sender_field_inner_submit{
    
    vertical-align: top;
        padding-top: 26px ;
        padding-left: 20px;
        color: rgba(255,255,255,0.4);
        background-color: transparent;
        font-style: normal;
        border: none;
       
        font-size: 20px; 
        text-transform: uppercase;
        box-sizing: border-box;
        
        
    }
    
    .email_sender_field_inner_submit:hover{
        color: white;
        transition: 1s;
        opacity: 1;
    }

    .search_field{
        padding: 5px;
        margin-left: 15px;
        background-color: #171717;
        border: 1px solid white;
        color: white;
        font-size: 14px;


    }

    .button_search_button{
        background-color: none;
        background: none;
        border: none;
        border-radius: none;
        opacity: .6;
        cursor: pointer;


    }

    .button_search_button:hover{
       transition: 1s;
        opacity:1;
        

    }

    
    .noselect {
        border: none;
  -webkit-touch-callout: none;
    -webkit-user-select: none;
     -khtml-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;
}
.sort_button{
    
        margin-left: 20px;
        opacity: .6;
        cursor: pointer;
        outline: none; /* Для синий ободки */
        border: 0;
        background: transparent;


}

.sort_button:hover{

    transition: 1s;
        opacity:1;

    
}



     </style>
     
     <body>



         <?php 
            /*session_set_cookie_params(15,"/");
            session_start();   // in top of PHP <file></file>












            
//INSERT INTO `testtable` (`TestColumn1`, `TestColumn2`) VALUES ('First note', '1');
//INSERT INTO `testtable` ". "(`TestColumn1`, `TestColumn2`) ". "VALUES('Second note','2')

            //Search

            /*if ($result = mysqli_query($link, "SELECT * FROM testtable WHERE TestColumn1 LIKE '%Second%'"))  //Search
            {

                for ($i=0; $i < 4; $i++) 
                { 
                    $row = mysqli_fetch_row($result);

                    if($row != null)
                    {
                        printf("". count($row));

                        printf("". $row[0]);
                    }

                    

                    //printf("". count($row) . "     " . $row[0] . "  " . $row[1] . "  ");

                    
                }

                mysqli_free_result($result);
                
            }*/


            //Sorting

            /*if ($result = mysqli_query($link, "SELECT * FROM testtable ORDER BY TestColumn1 DESC"))  //Sorting
            {
                for ($i=0; $i < 4; $i++) 
                { 
                    $row = mysqli_fetch_row($result);

                    if($row != null)
                    {
                        printf("". count($row));

                        printf("". $row[0]);
                    }

                    

                    //printf("". count($row) . "     " . $row[0] . "  " . $row[1] . "  ");

                    
                }

                mysqli_free_result($result);
                
            }*/


            

/*
            
            if ($result = mysqli_query($link, "SELECT thelongdark.news.Id, thelongdark.news.Title, 
            thelongdark.news.Date, thelongdark.news.ImagePath, thelongdark.news.PageFilePath FROM 
            thelongdark.news INNER JOIN thelongdark.newscomments ON 
            thelongdark.news.Id = thelongdark.newscomments.NewsID"))  //Search
            {

                for ($i=0; $i < 1; $i++) 
                { 
                    $row = mysqli_fetch_row($result);

                    if($row != null)
                    {
                        printf("". count($row));

                        echo "<br>";

                        printf("". $row[0]);

                        echo "<br>";

                        printf("". $row[1]);

                        echo "<br>";

                        printf("". $row[2]);

                        echo "<br>";
                        
                        printf("". $row[3]);

                        echo "<br>";
                        
                        printf("". $row[4]);
                        
                    }

                    

                    //printf("". count($row));// . "     " . $row[0] . "  " . $row[1] . "  ");

                    
                }

                mysqli_free_result($result);
            }*/


            
            


        ?>


            


















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
                            <a href="long_dark_news.html" style="color: white;">NEWS</a>
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
                            <a href="shop-right-sidebar.html"   >SHOP</a>
                        </li>
                        <li>
                            <a href="https://hinterlandgames.zendesk.com/hc/en-us"  target="_blank"  >SUPPORT</a>
                        </li>
                        <li>
                            <a>







                                <form action="long_dark_news.php" method="post">
                                    <button type="submit" name="searchButton" id="searchButton" class="button_search_button">
                                        <span class="noselect">
                                            <img src="img/loupe.png" alt=""> 
                                        </span>
                                        <div id="circle"></div> 
                                    </button>
                                </form>


                                
                                <form action="long_dark_news.php" method="get">
                                    <input class="search_field" placeholder="Search text" type="text" size="15" name="searchField" id="searchField">
                                </form>
                                
                                
                                
                                



                                
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

            <!-- 
            <button class="sort_button">
                <img class="sort_button" src="img/sort-down.png" alt="">
            </button>  -->





            <!-- SORTING BUTTON -->


            <form method="post">
                <button type="submit" name="sortButton" id="test" class="sort_button">
                    <img class="sort_button" src="img/sort-down.png" alt="">
                </button>
            </form>
        </h1>
        




        <?php
            


            //SESSIONS and will be done
            
            


            $newsDB = "thelongdark";
            $newsTable = "news";
            //echo "<br><br>";

            $link = mysqli_connect("localhost", "root", "123mnbzzZ01p", $newsDB);

            if (mysqli_connect_errno()) 
            {
                printf("Connect failed: %s\n", mysqli_connect_error());
                exit();
            }

            $newsInfoQuerySortedByNewer = "SELECT `Title`, `Date`, 
                `ImagePath`, `PageFilePath` FROM $newsTable ORDER BY `Date` DESC";

            $newsInfoQuerySortedByOlder = "SELECT `Title`, `Date`, 
                `ImagePath`, `PageFilePath` FROM $newsTable ORDER BY `Date` ASC";


            

            $isButtonSortClicked = false;

            /*if($_SESSION["word"])
            {
                echo "1111111111111111111111111111111";
            }*/

            function OnButtonSortClick()
            {
                global $isButtonSortClicked;

                if($isButtonSortClicked == true)
                    echo "true";
                else if($isButtonSortClicked == false)
                    echo "false";

                ChangeButtonState();
                SortNewsByDate();
            }

            function ChangeButtonState()
            {
                /*global $isButtonSortClicked;
                if($isButtonSortClicked == true)
                    $_SESSION["word"] = false;
                else if($isButtonSortClicked == false)
                    $_SESSION["word"] = true;*/
            }

            function SortNewsByDate()
            {
                global $newsInfoQuerySortedByOlder;
                CreateNewsBlock($newsInfoQuerySortedByOlder);
            }

            if(array_key_exists('sortButton', $_POST))
            {
                OnButtonSortClick();
            }


            if($isButtonSortClicked == false)
            {
                CreateNewsBlock($newsInfoQuerySortedByNewer);
            }
                



            // Search 



            function OnSearchClick()
            {
                PrintFindedNews();
            }

            function PrintFindedNews()
            {
                $newsInfoQuerySearch = "";
                $searchText = "";  

                if(isset($_GET['searchField'])) 
                    $searchText = htmlentities($_GET['searchField']);

                $newsInfoQuerySearch = GetSearchQuery($searchText);
                    
                CreateNewsBlock($newsInfoQuerySearch);
            }

            if(array_key_exists('searchField', $_GET))
            {
                OnSearchClick();
            }

            function GetSearchQuery(string $searchText)
            {
                global $newsTable;
                $newsInfoQuerySearch = "SELECT `Title`, `Date`, `ImagePath`, `PageFilePath` 
                FROM $newsTable WHERE Title LIKE '%" . $searchText . "%' ORDER BY `Date` DESC";

                return $newsInfoQuerySearch;
            }




            function CreateNewsBlock(string $newsInfoQuery)
            {
                global $link;
                if ($result = mysqli_query($link, $newsInfoQuery))  
                {
                    while ($row = mysqli_fetch_row($result)) 
                    {
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
                <a href="long_dark_news.html" class="footer_list_text_li">NEWS</a>
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
                <a href="shop-right-sidebar.html"  class="footer_list_text_li" >SHOP</a>
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
    </html>
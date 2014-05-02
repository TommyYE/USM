<!DOCTYPE html>

<?php
if (!isset($_SESSION)) {
  session_start();
  date_default_timezone_set("Australia/Brisbane");
}
?>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>User Satisfaction Map</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'                  type='text/css'>
        <link rel="stylesheet" href="css/normalize.css">
        <script src="js/modernizr-2.6.2.min.js"></script>
        <script src="js/jquery-1.11.0.min.js"></script>
        <script src="js/main.js"></script>
        <link rel="stylesheet" href="css/main.css">
        <script src="js/simple-slider.js"></script>
        <link href="css/simple-slider.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
    <div id="header">
        <div id="head-top">
            <div id ="logo-container">
                <a href=index.html>
                <div id=logo-text>
                    <div id="logo-text-top">USER SATISFACTION MAP of</div>
                    <div id="logo-text-bottom">The Advanced Engineering Building</div>
                </div>
                <div id="logo-img">
                    <img src="img/uqlogosmall.png" alt="UQ Logo" height="50" width="43">
                </div>
                <div id="logo-title">USM-AEB</div>
                </a>
            </div>
        </div>

        <div id="head-bottom">
            <a href=#>
                <div class="menu-btn">
                    <img src="img/icon1.png" alt="UQ Logo" height="70" width="70">
                    <p>BULDING DATA</p>
                </div>
            </a>
            <a href=review.html>
                <div class="menu-btn">
                    <img src="img/icon2.png" alt="UQ Logo" height="70" width="70">
                    <p>REVIEWS</p>
                </div>
            </a>
            <a href=#>
                <div class="menu-btn">
                    <img src="img/icon3.png" alt="UQ Logo" height="70" width="70">
                    <p>FIND A ROOM</p>
                </div>
            </a>
        </div>
    </div>
    <div id="search-bar">
        <form id="search1">
            <input class="Search-text-placeholder" type="text" name="query" placeholder="SEARCH COURSE NAME OR ROOM NUMBER     ">
        </form>    
    </div>
    <div id="content">
        <div id="content-header">
            <img src="img/bookmark.png" alt="UQ Logo" height="55" width="30">
            <h3>You are in Room 103</h3>
        </div>
        <div id="content-image">
            <img src="img/room-103.jpg" alt="Advanced Engineering Building"/>
        </div>
    </div>
    <div id="review-container">
        <form action="saveReview.php" method="GET">
            <div class="review-box">
                <div class="review-text">
                    1. How comfortable do you feel in this room?
                </div>
                <input id ="answer1" type="text" name="review">
            <div class="review-box">
                <div class="review-text">
                    2. Do you like the temperature in this room?
                </div>
                <input id ="answer2" type="text" name="review">
            </div>
            <div class="review-box">
                <div class="review-text">
                    3. Do you want to build a snowman?
                </div>
                <input id ="answer3" type="text" name="review">
            </div>
            <div class="review-box">
                <div class="review-text">
                    4. All your base are belong to us?
                </div>
                <input id ="answer4" type="text" name="review">
            </div>
            <div class="review-box">
                <div class="review-text">
                    Give Comments! (Optional)
                </div>
                <input id ="answer5" type="text" name="review">
                <input class="button green" type="submit" value="Thanks, Submit my review!">
            </div>
        </form>
    </div>
    <div id="footer">
        <div id="footer-text">DECO3800 | G8 Group<br/>The University of Queensland</div>
        <div id="footer-logo"><img src="img/uqlogo2.jpg" alt="Stay Connected"/></div>
    </div>

        <script>
          $("[data-slider]")
            .each(function () {
              var input = $(this);
              $("<span>")
                .addClass("output")
                .insertAfter($(this));
            })
            .bind("slider:ready slider:changed", function (event, data) {
              $(this)
                .nextAll(".output:first")
                  .html(data.value.toFixed(0));
            });
        </script>
    </body>
</html>

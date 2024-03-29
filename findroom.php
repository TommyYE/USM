<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Wisp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/normalize.css">
    <script src="js/modernizr-2.6.2.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/main.js"></script>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/findaroom.css">
    <script>
        function toggle(obj) {

            var toToggle = document.getElementById(obj);

            toToggle.style.display = (toToggle.style.display != 'inherit' ? 'inherit' : 'none');

        }
    </script>
</head>

<body>
    <div id="header">
        <div id="head-top">
            <div id="logo-container">
                <a href=index.php>
                    <div id="logo-img">
                        <img src="img/uqlogosmall.png" alt="UQ Logo" height="50" width="43">
                    </div>
                    <div id="logo-title">WISP</div>
                    <div id=logo-text>
                        <p>Where I'll Study Peacefully in the
                            <br>Advanced Engineering Building</p>
                    </div>
                </a>
            </div>
        </div>

        <div id="head-bottom">
            <div id="nav-container">
                <a href=tbc.php>
                    <div class="menu-btn">
                        <p>BULDING INFO</p>
                    </div>
                </a>
                <a href=review.php>
                    <div class="menu-btn">
                        <p>REVIEWS</p>
                    </div>
                </a>
                <a href=findroom.php>
                    <div class="menu-btn">
                        <p>FIND A ROOM</p>
                    </div>
                </a>
                <a href=# onclick="toggle('search-bar')">
                    <div class="menu-btn2">
                        <img src="img/search.png" alt="Search" height="25" width="25">
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div id="search-bar">
        <form id="search1">
            <input class="Search-text-placeholder" type="text" name="query" placeholder="SEARCH COURSE NAME/ ROOM NUMBER     ">
        </form>
    </div>
    <div id="content">
        <div id="content-header">
            <img src="img/bookmark.png" alt="UQ Logo" height="55" width="30">
            <h3>Find a Room</h3>
        </div>
        <hr>
        <div id="search-types-container">
            <a href=searchlist.php>
                <div class="search-type">
                    <img src="img/searchOrange.png" alt="UQ Logo">
                    <p>SEARCH BY ROOM NUMBER</p>
                </div>
            </a>
            <a href=searchmap.php>
                <div class="search-type">
                    <img src="img/searchBlue.png" alt="UQ Logo">
                    <p>SEARCH BY MAP</p>
                </div>
            </a>

        </div>



    </div>
    <div id="footer">
        <div id="footer-text">DECO3800 | G8 Group
            <br/>The University of Queensland</div>
        <div id="footer-logo">
            <img src="img/uqlogo2.jpg" alt="Stay Connected" />
        </div>
    </div>
</body>

</html>

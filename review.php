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
    <link rel="stylesheet" href="css/review.css">
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
            <h3>You are in Room 200</h3>
        </div>
        <div id="content-image">
            <img src="img/room-103.jpg" alt="Advanced Engineering Building" />
        </div>
    </div>
    <div id="review-container">
        <form>
            <div id="temperature">
                <div class="review-box">
                    <div class="review-text">
                        First, lets talk about temperature. You feel..
                    </div>
                    <div id="1" class="button green">Too Hot!</div>
                    <div id="2" class="button purple">Happy</div>
                    <div id="3" class="button red">Too Cold!</div>
                </div>
                <div id="temp-1" class="review-box">
                    <div class="review-text">
                        Is the sunlight on you?
                    </div>
                    <div id="4" class="button green">Yes</div>
                    <div id="5" class="button red">No</div>
                </div>
                <div id="temp-2" class="review-box">
                    <div class="review-text">
                        Is the aircon working?
                    </div>
                    <div id="6" class="button red">Yes</div>
                    <div id="7" class="button green">No</div>
                </div>
                <div id="temp-3" class="review-box">
                    <div class="review-text">
                        Is the aircon on?
                    </div>
                    <div id="8" class="button red">Yes</div>
                    <div id="9" class="button green">No</div>
                </div>
                <div id="temp-4" class="review-box">
                    <div class="review-text">
                        Do you feel the breeze from outside?
                    </div>
                    <div id="10" class="button red">Yes</div>
                    <div id="11" class="button green">No</div>
                </div>
            </div>
            <hr>
            <div id="light">
                <div class="review-box">
                    <div class="review-text">
                        Now, how is the lighting in the room?
                    </div>
                    <div id="12" class="button green">Too Bright!</div>
                    <div id="13" class="button purple">Just Right</div>
                    <div id="14" class="button red">Too Dark!</div>
                </div>
                <div id="light-1" class="review-box">
                    <div class="review-text">
                        Are the blinds open?
                    </div>
                    <div id="15" class="button green">Yes</div>
                    <div id="16" class="button red">No</div>
                </div>
                <div id="light-2" class="review-box">
                    <div class="review-text">
                        Are the lights to bright inside?
                    </div>
                    <div id="17" class="button red">Yes</div>
                    <div id="18" class="button green">No</div>
                </div>
                <div id="light-3" class="review-box">
                    <div class="review-text">
                        Are the lights on?
                    </div>
                    <div id="19" class="button red">Yes</div>
                    <div id="20" class="button green">No</div>
                </div>
                <div id="light-4" class="review-box">
                    <div class="review-text">
                        Are the shades down?
                    </div>
                    <div id="21" class="button red">Yes</div>
                    <div id="22" class="button green">No</div>
                </div>
                <div id="light-5" class="review-box">
                    <div class="review-text">
                        Is the anything blocking the windows?
                    </div>
                    <div id="23" class="button red">Yes</div>
                    <div id="24" class="button green">No</div>
                </div>
            </div>
            <hr>
            <div id="Noise">
                <div class="review-box">
                    <div class="review-text">
                        Lastly, how is the noise in the room?
                    </div>
                    <div id="25" class="button green">Too Loud!</div>
                    <div id="26" class="button purple">Just Right</div>
                </div>
                <div id="noise-1" class="review-box">
                    <div class="review-text">
                        Is there any construction outside?
                    </div>
                    <div id="27" class="button green">Yes</div>
                    <div id="28" class="button red">No</div>
                </div>
                <div id="noise-2" class="review-box">
                    <div class="review-text">
                        Is there any construction inside?
                    </div>
                    <div id="29" class="button red">Yes</div>
                    <div id="30" class="button green">No</div>
                </div>
            </div>
            <hr>
            <div class="review-box">
                <div class="review-text">
                    Please leave any further comments in the box below.
                </div>
                <textarea id="comment" class="comments" rows="4" cols="32"></textarea>
            </div>
            <div class="review-box">
                <div id="form-submit" class="button highlight" value="Submit Review" onclick="marshall()">Submit Review</div>
            </div>
            <div class="review-box">
                <div id="response"></div>
            </div>

        </form>
    </div>
    <div id="footer">
        <div id="footer-text">DECO3800 | G8 Group
            <br/>The University of Queensland</div>
        <div id="footer-logo">
            <img src="img/uqlogo2.jpg" alt="Stay Connected" />
        </div>
    </div>
    <script src="js/review.js"></script>
</body>

</html>

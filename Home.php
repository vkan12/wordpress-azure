<?php
/*
Template Name: Custom Home Page
*/
?>
    <html>

    <head>
        <script src="http://code.jquery.com/jquery-1.4.3.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="/wp-content/custom/css/footer.css" />
        <link type="text/css" rel="stylesheet" href="http://www.dreamtemplate.com/dreamcodes/divider/css/tsc_divider.css" />

        <style type="text/css">
            img.map,
            map area {
                outline: none;
            }
            
            .fa {
                padding: 10px;
                font-size: 20px;
                width: 20px;
                text-align: center;
                text-decoration: none;
                margin: 5px 2px;
                border-radius: 50%;
            }
            
            .fa:hover {
                opacity: 0.7;
            }
            
            .fa-facebook {
                background: #3B5998;
                color: white;
            }
            
            .fa-twitter {
                background: #55ACEE;
                color: white;
            }
            
            .fa-google {
                background: #dd4b39;
                color: white;
            }
            
            .background-img {
                position: absolute;
                bottom: 0px;
                right: 0px;
                z-index: 1;
                padding: 0px;
                margin: 0px;
            }
            
            hr.style18 {
                height: 30px;
                border-style: solid;
                border-color: #8c8b8b;
                border-width: 1px 0 0 0;
                border-radius: 20px;
            }
            
            hr.style18:before {
                display: block;
                content: "";
                height: 30px;
                margin-top: -31px;
                border-style: solid;
                border-color: #8c8b8b;
                border-width: 0 0 1px 0;
                border-radius: 20px;
            }
        </style>
        <!-- <script>
                  function clearAll() {
                    window.localStorage.clear();
                    window.sessionStorage.clear();
                }

                window.onload = function() {
                    check_browser();
                };

                function check_browser() {

                    // Chrome 1+
                    var isChrome = !!window.chrome && !!window.chrome.webstore;

                    // Internet Explorer 6-11
                    var isIE = /*@cc_on!@*/ false || !!document.documentMode;

                    // Edge 20+
                    var isEdge = !isIE && !!window.StyleMedia;

                    // Firefox 1.0+
                    var isFirefox = typeof InstallTrigger !== 'undefined';

                    // Opera 8.0+
                    var isOpera = (!!window.opr && !!opr.addons) || !!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0;

                    if (isIE || isEdge || isFirefox || isOpera) {
                        alert("Please Note:This Site works better with Chrome.");
                    }

                }
            </script>-->

    </head>
    <header>
        <ul class="my-list-style">

            <li><a class="active" href="javascript:window.location.href=window.location.href">Home</a></li>
            <li><a href="http://watertarget.azurewebsites.net/water-calculator#Bathroom">Water Calculator</a></li>
            <li><a href="http://watertarget.azurewebsites.net/challenge/">Challenge</a></li>
            <li><a href="http://watertarget.azurewebsites.net/wp-content/themes/shapely/page-templates/contact.php">Contact</a></li>

        </ul>

        <h2>Water Target</h2>

        <link rel="stylesheet" type="text/css" href="/wp-content/custom/css/fish.css" />
        <script src="http://code.jquery.com/jquery-1.4.3.min.js"></script>
        <script src="/wp-content/custom/js/fish.js"></script>

    </header>

    <body>
        <div id="form">

            <ul style="float:right">
                <div class="fb-share-button" data-href="https://www.facebook.com/WaterTarget/?ref=aymt_homepage_panel" data-layout="icon" data-mobile-iframe="false">
                    <a class=" fa fa-facebook" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2FWaterTarget%2F%3Fref%3Daymt_homepage_panel&amp;src=sdkpreparse"></a>
                </div>
                <a href="http://twitter.com/share?&text=Hi%20Please%20do%20checkout" class="fa fa-twitter" target="_blank"></a>
                <br/>
                <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            </ul>

            <div id="fb-root"></div>
            <script>
                (function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s);
                    js.id = id;
                    js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=1099498370196935";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));
            </script>
           
            <h3 style="color:Blue">  &nbsp;&nbsp;
  Water Calculator</h3>

            <center>
                <p><b> Click any Water Consuming Area of your house and  Start calculating your water usage!!!</b></p>
                <img id="img_ID" src="/wp-content/uploads/2017/05/homepage-wz-back.gif" alt="house plan" usemap="#Map" hidefocus="true" />
                <map name="Map" id="map_ID">
                    <area alt="kitchen" title="kitchen" href="http://watertarget.azurewebsites.net/water-calculator#dishes" shape="rect" coords="344,228,564,446" />
                    <area alt="toilet" title="toilets" href="http://watertarget.azurewebsites.net/water-calculator#toilets" shape="rect" coords="566,228,788,446" />
                    <area alt="Bathroom" title="Bathroom" href="http://watertarget.azurewebsites.net/water-calculator#Bathroom" shape="rect" coords="572,0,788,222" />
                    <area alt="Laundry" title="Laundry" href="http://watertarget.azurewebsites.net/water-calculator#washer" shape="rect" coords="344,0,564,223" />
                </map>
            </center>

            <script>
              /*This function will change the image map coordinates according to the screen size*/
                window.onload = function() {
                    var ImageMap = function(map, img) {
                            var n,
                                areas = map.getElementsByTagName('area'),
                                len = areas.length,
                                coords = [],
                                previousWidth = 1134;
                            for (n = 0; n < len; n++) {
                                coords[n] = areas[n].coords.split(',');
                            }
                            this.resize = function() {
                                var n, m, clen,
                                    x = img.offsetWidth / previousWidth;
                                for (n = 0; n < len; n++) {
                                    clen = coords[n].length;
                                    for (m = 0; m < clen; m++) {
                                        coords[n][m] *= x;
                                    }
                                    areas[n].coords = coords[n].join(',');
                                }
                                previousWidth = img.offsetWidth;
                                return true;
                            };
                            window.onresize = this.resize;
                        },
                        imageMap = new ImageMap(document.getElementById('map_ID'), document.getElementById('img_ID'));
                    imageMap.resize();
                    return;
                }

               </script>

            <br/>
            <br/>
            <div class="tsc_divider3_black"></div>
            <!--<hr class="style18"/>-->

            <br/>
            <br/>
            <h3 style="color:Blue">  &nbsp;&nbsp;
    Water Target Challenge</h3>

            <center>
                <p><b>Click on the image and test your knowledge on Water Conservation !!!</b></p>
                <a href="http://watertarget.azurewebsites.net/challenge/">
                    <img src="/wp-content/uploads/2017/05/3.gif" style="width:300px" alt="quiz" />
                </a>
                <center>
        </div>
    </body>
    <footer class="footer-distributed">

        <div class="footer-left">

            <img src="/wp-content/uploads/2017/05/logo.png" alt="logo" style="width:100px;"></img>

            <p class="footer-links">
                <a href="javascript:window.location.href=window.location.href">Home</a> ·
                <a href="http://watertarget.azurewebsites.net/about-us/">About</a> ·
                <a href="http://watertarget.azurewebsites.net/wp-content/themes/shapely/page-templates/contact.php">Contact</a>
            </p>

            <p class="footer-company-name">Water Target &copy; 2017</p>
        </div>

        <div class="footer-center">

            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>900 Dandenong Rd, </span> Caulfield East VIC 3145</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>(03) 9903 2000</p>
            </div>

            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:contact.watertarget@yahoo.com">contact.watertarget@yahoo.com</a></p>
            </div>

        </div>

        <div class="footer-right">

            <p class="footer-company-about">
                <span>About the company</span> We are the Blue Can Do's with a "Together We Can Do attitude"
            </p>
    </footer>

    </html>
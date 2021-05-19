<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>Home</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/jssor.slider-21.1.5.mini.js"></script>
    <!-- use jssor.slider-21.1.5.debug.js instead for debug -->
    <script>
        jQuery(document).ready(function ($) {

            var jssor_1_SlideshowTransitions = [
              { $Duration: 1200, x: -0.3, $During: { $Left: [0.3, 0.7] }, $Easing: { $Left: $Jease$.$InCubic, $Opacity: $Jease$.$Linear }, $Opacity: 2 },
              { $Duration: 1200, x: 0.3, $SlideOut: true, $Easing: { $Left: $Jease$.$InCubic, $Opacity: $Jease$.$Linear }, $Opacity: 2 }
            ];

            var jssor_1_options = {
                $AutoPlay: true,
                $SlideshowOptions: {
                    $Class: $JssorSlideshowRunner$,
                    $Transitions: jssor_1_SlideshowTransitions,
                    $TransitionsOrder: 1
                },
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                },
                $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$
                },
                $ThumbnailNavigatorOptions: {
                    $Class: $JssorThumbnailNavigator$,
                    $Cols: 1,
                    $Align: 0,
                    $NoDrag: true
                }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1366);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 100);
                }
            }
            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
    </script>

    <style>
     
        .jssorb01 {
            position: absolute;
        }

            .jssorb01 div, .jssorb01 div:hover, .jssorb01 .av {
                position: absolute;
                /* size of bullet elment */
                width: 1200px;
                height: 1200px;
                filter: alpha(opacity=70);
                opacity: .7;
                overflow: hidden;
                cursor: pointer;
                border: #000 1px solid;
            }

            .jssorb01 div {
                background-color: gray;
            }

                .jssorb01 div:hover, .jssorb01 .av:hover {
                    background-color: #d3d3d3;
                }

            .jssorb01 .av {
                background-color: #fff;
            }

            .jssorb01 .dn, .jssorb01 .dn:hover {
                background-color: #555555;
            }

       
        .jssora05l, .jssora05r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 40px;
            cursor: pointer;
            background: url('img/a17.png') no-repeat;
            overflow: hidden;
        }

        .jssora05l {
            background-position: -10px -40px;
        }

        .jssora05r {
            background-position: -70px -40px;
        }

        .jssora05l:hover {
            background-position: -130px -40px;
        }

        .jssora05r:hover {
            background-position: -190px -40px;
        }


        
    </style>
</head>
<body>
    <div id="main">
        <div id="banner">
           <img class="logo" src="logo1.jpg" alt="logo">
        </div>

     <div id="menu">
        <ul>
            <li><a href="home.html"> Home </a></li>
            <li><a href="gallery.html"> Gallery </a></li>
            <li><a href="history.html"> History </a></li>
            <li><a href="contact.html"> Contact us </a></li>
        </ul>

    </div>
        <br/>
        <div id="jssor_1" style="position: relative; width: 1200px; height: 600px; visibility: hidden;">
            <!-- Loading Screen -->
            
            <div data-u="slides" style="cursor: auto; position: relative; width: 1200px; height: 600px;">
                <div data-p="112.50" style="display: none;">
                    <img data-u="image" src="img/01.jpg" />
                    <div data-u="thumb"></div>
                </div>
                <div data-p="112.50" style="display: none;">
                    <img data-u="image" src="img/02.jpg" />
                    <div data-u="thumb"></div>
                </div>
                <div data-p="112.50" style="display: none;">
                    <img data-u="image" src="img/03.jpg" />
                    <div data-u="thumb"></div>
                </div>
                <div data-p="112.50" style="display: none;">
                    <img data-u="image" src="img/04.jpg" />
                    <div data-u="thumb"></div>
                </div>
                <div data-p="112.50" style="display: none;">
                    <img data-u="image" src="img/05.jpg" />
                    <div data-u="thumb"></div>
                </div>
                <a data-u="any" href="http://www.jssor.com/demos/banner-slider.slider" style="display:none">Banner Slider</a>

            </div>
           
            <!-- Arrow Navigator -->
            <span data-u="arrowleft" class="jssora05l" style="top:0px;left:8px;width:40px;height:40px;" data-autocenter="2"></span>
            <span data-u="arrowright" class="jssora05r" style="top:0px;right:8px;width:40px;height:40px;" data-autocenter="2"></span>
        </div>
            <div class="des">
            <div class="d"> Onam is a festival celebrated in Kerala, India. It is also the state festival 
                of Kerala with State holidays on 4 days starting from Onam Eve (Uthradom) 
                to the 3rd Onam Day </div>
            </div> 
            <div class="des">
            <div class="d">
                
                The floral carpet, known as ‘Onapookkalam’, is made out of the gathered blossoms 
                with several varieties of flowers of differing tints pinched up into little pieces 
                to serve the decorator's purpose  
            </div>
            </div>
            
            <div class="des">
                <div class="d">
                    Traditional dance forms including Thiruvathira, Kummattikali, Pulikali, Thumbi Thullal etc.
                     are performed as part of celebrations all over Kerala at this time
                    </div>

            </div>

        </div>
        <div id="footer">
          <center class="c1">© Copyright 2016 </center>
            </div>
       
    </div>
    <br/>
</body>
</html>

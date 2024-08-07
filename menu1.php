<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Option HomePage - Weststar</title>
    <link rel="stylesheet" type="text/css" href="css/OptionPage/OptionPage.css">
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    </head>
    <body>
        <!-- Header-->
        <header>
            <a class="logo"> Weststar Engineering</a>
            <ul>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
        </header>
        <!-- Picture section-->
        <section class="banner">
            <!-- Image-->
            <div class="imgBx">
                <img src="Images/image.jpg" class="active">
                <img src="Images/LightPole.jpg">
                <img src="Images/smart_cctv.png">
                <img src="Images/trafficlight.jpg">
            </div>
            <!--Button For direct page-->
            <div class="contentBx">
                <div class="active">
                    <h2>Solar Street Light</h2>
                    <P> The IoT solar street light panel is a smart and environmentally friendly lighting system that regulates brightness using solar power and IoT.
                        Equipped with sensors and remote monitoring, it provides real-time data on performance and energy usage, offering an efficient and sustainable urban lighting choice.
                    </P>
                    <a href="main.html" class="btn-btn-info">Detail</a>
                </div>
                <div>
                    <h2>Smart Pole</h2>
                    <P> Quisque varius justo vitae metus imperdiet, eu hendrerit elit vestibulum. Vivamus auctor ullamcorper mi, quis euismod nisl sodales in. Fusce lacinia diam sit amet justo dapibus commodo. 
                        Curabitur ullamcorper, ipsum sit amet condimentum sagittis, elit augue venenatis quam, nec efficitur purus libero eu puru.
                    </P>
                    <a href="#" class="btn-btn-info">Detail</a>
                </div>
                <div>
                    <h2>Smart Closed Circuit Television(CCTV)</h2>
                    <P> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit, sit amet faucibus
                        felis iaculis nec. Nulla laoreet Lorem, ipsum dolor sit amet consectetur..
                    </P>
                    <a href="#" class="btn-btn-info">Detail</a>
                </div>
                <div>
                    <h2>Smart traffic light</h2>
                    <P> Integer gravida augue eu mi aliquet, ut hendrerit lectus fermentum. Aenean eget ipsum a dolor fermentum fringilla. Nunc rutrum metus ac mauris dignissim,
                         id laoreet ex bibendum. Phasellus dapibus justo non lorem tincidunt, vitae lacinia augue consequat.
                    </P>
                    <a href="#" class="btn-btn-info">Detail</a>
                </div>
                <!-- Can add if another slot iot-->
                <!-- <div>
                    <h2>Name iot</h2>
                    <P> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam dictum mattis velit, sit amet faucibus
                        felis iaculis nec. Nulla laoreet Lorem, ipsum dolor sit amet consectetur..
                    </P>
                    <a href="location html">Details</a>
                </div>-->
            </div>
            <!-- Hover button Next & Prev-->
            <ul class="controls">
                <li onclick="PrevSlide();PrevSlideText()"></li>
                <li onclick="nextSlide();nextSlideText();"></li>
               
            </ul>
        </section>
        <script src="js/OptionPage/OptionPage.js" ></script>
    </body>
</html>

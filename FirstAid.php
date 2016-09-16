<!-- SoftwareDeveloper:lawrence k. & tryphean t. -->
<!DOCTYPE html>
<html lang="en">
<?php
 include ("auth.php");

 ?>
<head>
    <meta charset="utf-8">
    <title>HumanDiseaseDiagnosticSystem</title>
    <link rel="stylesheet" href="css/base.css" />
    <link rel="stylesheet" href="css/style2.css" />
    <script src="js/jquery-1.9.1.min.js"></script>
    <script src='js/jquery.scrollto.js'></script>
</head>
<body>
<div id="wrapper">

<header>
    <div class="container clearfix">
        <div id="title">
            <h1><a href="#">First Aid</a></h1>
            <span><a href="index.php">&larr; Home</a></span>
        </div>



    </div>
</header>

<!-- <P><center>###UNDER DEVELOPMENT###</center></p> -->
<div id="main">
    <div class="container clearfix">


        <div id="sidebar">
            <div id="nav-anchor"></div>
            <nav>
                <ul>
                    <li><a href="#about">About</a></li>
                    <li><a href="#injuries"></a></li>
                    <li><a href="#VALI">Ventilator-associated lung injury</a></li>
                    <li><a href="#injuries">injuries</a></li>
                    <li><a href="#injuries">injuries</a></li>
                    <li><a href="#injuries">injuries</a></li>
                </ul>
            </nav>
        </div><!-- /sidebar -->
        <div id="content">

<!--  description in detail and further background here -->

            <section id="about">
                <h1>About</h1>
                <p>
                Injury is damage to the body.This may be caused by accidents, falls, hits, weapons, and other causes.
                 </br>Major trauma is injury that has the potential to cause prolonged disability or death.
             In 2013 4.8 million people died from injuries up from 4.3 million in 1990.
                </br>More than 30% of these deaths were transport related injuries.
        In 2013 367,000 children less than five died from injuries down from 766,000 in 1990.
                </br>Injuries are the cause of 9% of all death and are the sixth leading cause of death in the world.
                </br>Therefore,the System classify injuries to save people through providing knowledge and thus saving lives injuries
                </p>

            </section>


            <section id="VALI">
                <h1>Ventilator-associated lung injury</h1>
              <!-- injuries description here & it's causes-->
               VALI(Ventilator-associated lung injury) is an acute lung injury that develops during mechanical ventilation and is termed ventilator-induced lung injury (VILI) if it can be proven that the mechanical ventilation caused the acute lung injury. In contrast, ventilator-associated lung injury (VALI) exists if the cause cannot be proven. VALI is the appropriate term in most situations because it is virtually impossible to prove what actually caused the lung injury in the hospital
            </section>


            <section id="injuries">
                <h1>injuries</h1>
      <!-- injuries description here & it's causes -->
            </section>

            <section id="injuries">
                <h1>injuries</h1>
                  <!-- injuries description here & it's causes -->

            </section>


            <section id="injuries">
                <h1>injuries</h1>
                <p>

                <!-- injuries description here  & it's causes-->
                </p>
            </section>
            <section id="injuries">
                <h1>injuries</h1>
                <p>
                   Sports injuries can be treated and managed by using the P.R.I.C.E.S., D.R. A.B.C., T.O.T.A.P.S and R.I.C.E.R regimes:</br>
                   P – Protect </br>
                   R – Rest</br>
                   I – Ice</br>
                   C – Compression </br>
                   E – Elevation<br>
                   S - Stabilize<br>

                   </br>
                  D – Danger</br>
                  R – Response</br>
                  A – Airway</br>
                  B – Breathing</br>
                  C – Circulation</br>

                  </br>

                  T – Talk</br>
                  O – Observe</br>
                  T – Touch</br>
                  A – Active movement</br>
                  P – Passive movement</br>
                  S – Skills test</br>

                  </br>

                  R - Rest </br>
                  I - Ice</br>
                  C - Compression</br>
                  E - Elevation</br>
                  R - Referral</br>

                  </br>

                  S - Stop</br>
                  A - Ask</br>
                  L - Look </br>
                  T - Touch</br>
                  A - Active movement</br>
                  P - Passive movement</br>
                  S - Stand up</br>

                  </br>
                </p>
            </section>

        </div><!-- /#content -->
    </div>
</div>
</div>
<script>
    $(document).ready(function(){

        /**
         * This part does the "fixed navigation after scroll" functionality
         * We use the jQuery function scroll() to recalculate our variables as the
         * page is scrolled/
         */
        $(window).scroll(function(){
            var window_top = $(window).scrollTop() + 12; // the "12" should equal the margin-top value for nav.stick
            var div_top = $('#nav-anchor').offset().top;
                if (window_top > div_top) {
                    $('nav').addClass('stick');
                } else {
                    $('nav').removeClass('stick');
                }
        });


        /**
         * This part causes smooth scrolling using scrollto.js
         * We target all a tags inside the nav, and apply the scrollto.js to it.
         */
        $("nav a").click(function(evn){
            evn.preventDefault();
            $('html,body').scrollTo(this.hash, this.hash);
        });



        /**
         * This part handles the highlighting functionality.
         * We use the scroll functionality again, some array creation and
         * manipulation, class adding and class removing, and conditional testing
         */
        var aChildren = $("nav li").children(); // find the a children of the list items
        var aArray = []; // create the empty aArray
        for (var i=0; i < aChildren.length; i++) {
            var aChild = aChildren[i];
            var ahref = $(aChild).attr('href');
            aArray.push(ahref);
        } // this for loop fills the aArray with attribute href values

        $(window).scroll(function(){
            var windowPos = $(window).scrollTop(); // get the offset of the window from the top of page
            var windowHeight = $(window).height(); // get the height of the window
            var docHeight = $(document).height();

            for (var i=0; i < aArray.length; i++) {
                var theID = aArray[i];
                var divPos = $(theID).offset().top; // get the offset of the div from the top of page
                var divHeight = $(theID).height(); // get the height of the div in question
                if (windowPos >= divPos && windowPos < (divPos + divHeight)) {
                    $("a[href='" + theID + "']").addClass("nav-active");
                } else {
                    $("a[href='" + theID + "']").removeClass("nav-active");
                }
            }

            if(windowPos + windowHeight == docHeight) {
                if (!$("nav li:last-child a").hasClass("nav-active")) {
                    var navActiveCurrent = $(".nav-active").attr("href");
                    $("a[href='" + navActiveCurrent + "']").removeClass("nav-active");
                    $("nav li:last-child a").addClass("nav-active");
                }
            }
        });
    });

</script>

<div class="footer">
<p class="wowload flipInX"><a href="#"><i class="fa fa-facebook fa-2x"></i></a> <a href="#"><i class="fa fa-instagram fa-2x"></i></a> <a href="#"><i class="fa fa-twitter fa-2x"></i></a> <a href="#"><i class="fa fa-flickr fa-2x"></i></a> </p>
<center>  Copyright 2016 SoftwareEngineer Lawrence k & Tryphean A. All Rights Reserved.</center>
</div>


</body>
</html>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <title>@yield('title')</title>
        @yield('styles')
    </head>
    <body>
        <div class="container">    
            <header>
                <div id="titlebar">
                    <div id="left_header">
                        <img src="images/icon1.jpg"/>
                    </div>

                    <div id="middle_header">
                        <h1 align="center">UTTARA COLLEGE</h1>
                        <h1 align="center" style="color:#FF6;">উত্তরা কলেজ</h1>
                        <h4 align="center" style="color:white;">Know Thyself</h4>
                    </div>

                    <div id="right_header">
                        <img src="images/UttaraCollege.jpg"/>
                    </div>
                </div>

                <div id="breaking">
                    <p><b>Latest News:</b></p>
                    <marquee>*** 2015-10-16, Notice for HSC 2nd Year Session Fee & Form Fillup and Hostel Sit Rent Payment ***</marquee>
                </div>

                <nav>
                    <ul>
                        <li><a href="/">Home</a></li>
                        <li><a href="gallery">Gallery</a></li>
                        <li><a href="admission">Admission</a></li>
                        <li><a href="contact">Contact</a></li>
                    </ul>
                </nav>
            </header>

            @yield('slide')            

            <main style="width:800px; float:left">
                @yield('content')
            </main>

            <aside>
                <div id="notice">
                    <div id="notice_first">
                        <h1>NOTICE</h1>
                        <ul>
                            <li><a href="#">HSC 2nd year Exam Rotine 2016</a></li>
                            <li><a href="#">HSC 2nd year medel test Rotine 2015</a></li>
                            <li><a href="#">HSC 1nd year class Rotine 2015</a></li>
                            <li><a href="#">HSC 2nd year class Rotine 2015</a></li>
                            <li><a href="#">HSC 2nd year class test Exam 2015</a></li>
                            <li><a href="#">HSC 2nd year Hostel notice</a></li>
                        </ul>
                    </div>
                </div>
                <div id="gallery">
                    <div id="gallery_first">
                        <h1>Photo Gallery</h1><br>
                        <img src="images/college1.jpg" width="80" height="80">
                        <img src="images/college2.jpg" width="80" height="80">
                        <img src="images/college3.jpg" width="80" height="80"><br>
                        <img src="images/college4.jpg" width="80" height="80">
                        <img src="images/college5.jpg" width="80" height="80">
                        <img src="images/college6.jpg" width="80" height="80"><br>
                        <img src="images/college7.jpg" width="80" height="80">
                        <img src="images/college8.jpg" width="80" height="80">
                        <img src="images/college9.jpg" width="80" height="80">
                    </div>
                </div>
                <div id="content">
                    <div id="content_first">
                        <div id="important">
                            <div id="important_first">
                                <h1>Important Links</h1><br>
                                <ul>
                                    <li><a href="http://www.bangladesh.gov.bd/">Bangladesh portal</a></li>
                                    <li><a href="http://www.dhakaeducationboard.gov.bd/">Dhaka Education Board</a></li>
                                    <li><a href="http://www.moedu.gov.bd/">Ministry of Education</a></li>
                                    <li><a href="http://www.nu.edu.bd/">National University</a></li>
                                    <li><a href="http://www.nctb.gov.bd/">NCTB</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>

            <footer>
                <div id="footer_left">
                    <p>All Right Reserved | Design & Developed by : Dept. of CSE,UU <a href="developers">Developers</a></p>
                </div>

                <div id="footer_right">
                    <a href="http://www.facebook.com"><img src="images/facebook.png"/></a>
                    <a href="http://www.skype.com"><img src="images/skype.png"/></a>
                    <a href="http://www.youtube.com"><img src="images/youtube.png"/></a>
                </div>
            </footer>
        </div>
    </body>
</html>
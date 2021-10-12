<!DOCTYPE html>
<html lang="en">
    <head>
        <title> HOME </title>
        <?php include "includes\header.php"; ?>
        <style>
            .navbar-nav{
                flex-direction: row;
                
            }
            .nav-item{
                padding-left: 10px !important
            }
            .homesection{
                background-size: cover;
                background-repeat: no-repeat;
            }
            .top1-medium-spacing{
                padding-top: 10px;
            }
            .bottom1-medium-spacing{
                padding-bottom:10px;
            }
            .icon-spacing{
                padding-left: 10px;
                padding-right: 10px;
            }
            .heading-space{
                padding-top: 23px;
            }
            .content-space{
                padding-top:50px;
            }
            .content-spacing-bottom{
                padding-bottom: 60px;
            }
            
            .footer-section-bg{
                background-color: grey;
            }
            .copyrights-section{
                padding-top: 20px;
                padding-bottom: 15px;
                background-color: blue;
                color: white;
            }
            .custom-font-color{
                color:white;
                text-decoration: none;
            }
            .custom-font-color:hover{
                color:white;
                text-decoration: none;
            }
            .contact-us-spacing{
                padding-top: 15px;
            }

        </style>
    </head>
    <body>
        <header>
        <?php include "includes\landing_nav.php"; ?>
            <div>
                <img src="assets/images/cbit clg.jpg" width="1000" height="500px" >
            </div>
        </header>
        <main>
            <section>
                <div class="container heading-space">
                    <center><h5>About Us</h5></center>                    
                    <div class="row content-space content-spacing-bottom">
                        <div class="col-sm-12 col-md-6">
                            <img src="assets/images/about us.jpg" width="400" alt="about-us">
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Morbi porta eleifend magna dignissim varius. Nunc 
                            tincidunt dui pulvinar tempus rhoncus.</p>
                            <br>

                            <p>
                            vitae pulvinar magna, sit amet sollicitudin eros. Donec 
                            lobortis consectetur semper. Suspendisse mi quam,
                            tempus sit amet tempus ac, faucibus eu lacus.</p>

                            <br>

                            <p>sAliquam eu nibh et mauris hendrerit vestibulum at in ex. 
                            Nunc at nisl euismod, rhoncus sem et, finibus diam. 
                            Donec tristique id urna quis rhoncus.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class=" team-section-bg">
                <div class="container heading-space">
                    <center><h5>Our Amazing Team</h5></center>
                    <div class="row content-space content-spacing-bottom">
                        <div class="col-md-12 col-sm-12 col-lg-4">
                            <div class="card" style="width: 15rem;">
                            <img src="assets/images/team1.jpg" class="card-img-top" height="400" width="200" alt="team1">
                                <div class="card-body">
                                    <div class="text-center">
                                        <span class="fa fa-instagram icon-spacing"></span>
                                        <span class="fa fa-facebook-f icon-spacing"></span>
                                        <span class="fa fa-linkedin icon-spacing"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-4">
                            <div class="card" style="width: 15rem;">
                                <img src="assets/images/team2.jpg" class="card-img-top" height="400" width="200" alt="team2">
                                <div class="card-body">
                                    <div class="text-center">
                                        <span class="fa fa-instagram icon-spacing"></span>
                                        <span class="fa fa-facebook-f icon-spacing"></span>
                                        <span class="fa fa-linkedin icon-spacing"></span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-12 col-sm-12 col-lg-4">
                            <div class="card" style="width: 15rem;">
                            <img src="assets/images/team3.jpg" class="card-img-top" height="400" width="200" alt="team3">
                            <div class="card-body">
                                <div class="text-center">
                                    <span class="fa fa-instagram icon-spacing"></span>
                                    <span class="fa fa-facebook-f icon-spacing"></span>
                                    <span class="fa fa-linkedin icon-spacing"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="container heading-space">
                    <center><h5>Contact US</h5></center>
                    <div class="row content-space content-spacing-bottom">
                        <div class="col-6 text-center">
                            <h5>Find us @</h5>
                            <BR>
                            <div class="contact-us-spacing">
                                <span class="fa fa-envelope-o fa-3x"></span>
                                <p>somemail@gmail.com</p>
                            </div>
                            <div  class="contact-us-spacing">
                                <span class="fa fa-phone fa-3x"></span>
                                <p>1234567890</p>
                            </div>
                            <div  class="contact-us-spacing">
                                <span class="fa fa-map-marker fa-3x"></span>
                                <p>#27, 2nd Main Road,<br> jayaNagar 4th block<br> Bangalore</p>
                            </div>    
                        </div>
                        <div  class="col-6">
                            <div class="text-center">
                            <h5>Write to Us</h5>
                            <p>We'll get back to you</p>
                        </div>
                            <div class="card">
                                <form class="container top-medium-spacing bottom-medium-spacing">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Your Name">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Your Phone No.">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="10" placeholder="Tell us your Requirements"></textarea>
                                    </div>
                                    <div class="form-group text-center">
                                        <button class="btn btn-outline-dark" type="button">Send Message</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                        
                </div>
            </section>

        </main>

       

        
            
            <?php include "includes\\footer.php"; ?>
    </body>

</html>
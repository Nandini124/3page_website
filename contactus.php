<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Contact Us</title>
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
                padding-bottom: 20px;
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
        </header>


        <main>
            <section>
                <div class="container heading-space">
                    <center><h5>DO CONTACT US</h5></center>
                    <div class="row content-space content-spacing-bottom">
                        <div class="col-6 text-center">
                            <h5>Find us @</h5>
                            <BR>
                            <div class="contact-us-spacing">
                                <span class="fa fa-envelope-o fa-3x"></span>
                                <p>cbitkolar@gmail.com</p>
                            </div>
                            <div  class="contact-us-spacing">
                                <span class="fa fa-phone fa-3x"></span>
                                <p>9738481799</p>
                            </div>
                            <div  class="contact-us-spacing">
                                <span class="fa fa-map-marker fa-3x"></span>
                                <p>Srinivaspur to Kolar Road<br> Thordevandahalli,kolar-563101 </p>
                            </div> 
                            <div  class="contact-us-spacing">
                                <span class="fa fa-website fa-3x"></span>
                                <p> www.cbitkolar.edu.in </p>
                            </div>    
                        </div>
                        <div  class="col-6">
                            <div class="text-center">
                            
                        </div>
                            <div class="card">
                                <form class="container top-medium-spacing bottom-medium-spacing">
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Name">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="text" placeholder="Subject">
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" rows="10" type="text" placeholder="Message"></textarea>
                                    </div>
                                    <div class="form-group text-center">
                                        <button class="btn btn-outline-dark" type="button">Submit</button>
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
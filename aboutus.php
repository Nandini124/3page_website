<!DOCTYPE html>
<html lang="en">
    <head>
        <title>About Us</title>
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
        </header>

        <main>
            <section>
                <div class="container heading-space">
                                        
                    <div class="row content-space content-spacing-bottom">
                        <div class="col-sm-12 col-md-6">
                            <img src="assets/images/Aboutus.jpg" width="450" height="650" alt="about-us">
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <h2>ABOUT C Byregowda Institute of Technology</h2>
                            <br>

                            <p>
                                C BYREGOWDA INSTITUTE OF TECHNOLOGY [C.B.I.T] was
                                promoted by C Byregowda Educational and Cultural 
                                Trust ® in the memory of great visionary the late
                                Sri C Byregowda, Ex-Agriculture Minister, Govt. of
                                Karnataka, in the year 2009.</p>
                            <br>

                            <p>
                                The college has been approved by All India Council
                                of Technical Education [AICTE], New Delhi, Affiliated
                                to Visvesvaraya Technological University [VTU], Belgaum
                                and Recognized by Government of Karnataka.</p>

                            <br>

                            <p>
                                C.B.I.T is affiliated to Visvesvaraya Technological
                                University (V.T.U) Belgaum and approved by All India
                                Council for Technical Education (A.I.C.T.E ), New Delhi
                                , recognized by State Government of Karnataka.</p>
                            
                            <br>

                            <p>
                                C.B.I.T is located just 5 km from Kolar city. Kolar is
                                 well Connected to Bangalore (About 60 km away from 
                                 Bangalore) by National Highway and Railways. The campus
                                  is situated in green serene environment spread over 18
                                   acres, on Kolar-Srinivaspur Main Road. C.B.I.T. emphasizes 
                                   on comprehensive educational programme leading to high 
                                   academic standards.</p>

                        </div>
                    </div>
                </div>
            </section>
        </main>

        
        <?php include "includes\\footer.php"; ?>
    </body>
</html>
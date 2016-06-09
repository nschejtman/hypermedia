<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TV & Entertainment</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../stylesheets/tim_smart_fiber.css">
    <link rel="stylesheet" href="../stylesheets/TV_Entertainment.css">
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/home.php"><img src="/images/tim-logo-1024x768.png" alt="TIM"
                                                          height="25px"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Offers <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/offers/home_offer.php">Home</a></li>
                        <li><a href="#">Mobile</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Products <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Smartphone</a></li>
                        <li><a href="#">Tablet</a></li>
                        <li><a href="#">Modem</a></li>
                        <li><a href="#">Smart Living</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Smart Life <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">TV & Entretainment</a></li>
                        <li><a href="#">Health and Wellness</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Assitantce <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/general_assistance.php">General assistance</a></li>
                        <li><a href="/tech_support.php">Tech support</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<div class="container">
    <a href="../home.php">home | </a> TV & Entertainment
    <hr>
    <div class="tabordion">
        <section id="section1">
            <input type="radio" name="sections" id="option1" checked>
            <label for="option1">Film e TV</label>
            <article>
                <h2>Film e TV</h2>
                <div class="items">
                    <img src="../images/TIMVision_banner_1.jpg" class="image">
                    <h3 align="center">TIMvision</h3>
                    <p align="center">Movies, series and cartoons</p>
                    <div align="center">
                        <input type="button" value="Read more" >
                    </div>
                </div>
                <div class="items">
                    <img src="../images/TIMSky_banner_2.jpg" class="image">
                    <h3 align="center">TIM Sky</h3>
                    <p align="center">Calls, Internet & SKY</p>
                    <div align="center">
                        <input type="button" value="Read more" >
                    </div>
                </div>

            </article>
        </section>
        <section id="section2">
            <input type="radio" name="sections" id="option2">
            <label for="option2">Sport</label>
            <article>
                <h2>Sport</h2>
                <p>The costs set out below are those of the list and are applied except for any ongoing promotions to customers who require the activation of the offer TIM SMART FIBER by 31/07 /2016.Per details and information , see "Tim recalls".</p>
                <table class="table">
                    <tr class="tblHdr">
                        <td>Cost items</td>
                        <td>List costs</td>
                        <td>Valid until 31/07/2016</td>
                    </tr>
                    <tr>
                        <td>Activation fee line home</td>
                        <td>3.75€ for 24 months</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Activation fee TIM SMART offer FIBER
                            for New Customers</td>
                        <td>49€</td>
                        <td>0€</td>
                    </tr>
                </table>
            </article>
        </section>
        <section id="section3">
            <input type="radio" name="sections" id="option3">
            <label for="option3">Music</label>
            <article>
                <h2>Music</h2>
                <ul ><p style="color: darkblue">And ' it required to pay by automatic bank transfer or postal debit ( RID ) ?</p>
                    <li>The RID is not mandatory but is required to get the discount on the contribution of the offer activation TIM SMART FIBER ( for free instead of € 49 for New Plants , passes by another operator , for existing customers with fixed line voice and TIM only for now TIM customers with fixed line with ADSL who switch to Fiber.</li>
                    <li>If the promise of domiciliation , expired 90 days from the activation request of the offer TIM SMART FIBER , if the RID is not active will be charged the full amount of the contribution of the offer activation TIM SMART FIBER .</li>
                    <li>The holder is not necessary that the TIM SMART contract is the same as the nominee of the bank RID .</li>
                </ul>
            </article>
        </section>
    </div>



</div>

<!-- scripts added last for faster loading -->
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>


</body>
</html>
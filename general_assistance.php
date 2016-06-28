<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tim</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/stylesheets/main.min.css">
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
                        <li><a href="/offers/TV_Entertainment.php">TV & Entertainment</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Products <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/products.php?category=smartphone">Smartphone</a></li>
                        <li><a href="/products.php?category=tablet">Tablet</a></li>
                        <li><a href="/products.php?category=modem">Modem</a></li>
                        <li><a href="/products.php?category=smart-living">Smart Living</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Smart Life <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/smart-life/TV_Entertainment.php">TV & Entretainment</a></li>
                        <li><a href="/smart-life/Health_Wellness.php">Health and Wellness</a></li>
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
    <ol class="breadcrumb">
        <li>Assistance</li>
        <li class="active">General assistance</li>
    </ol>
    <h1>General assistance</h1>
    <div class="row">
        <div class="col-md-4">
            <ul class="nav nav-pills nav-stacked">
                <li role="presentation" class="active" id="accounts-and-services-pill"><a
                        href="#accounts-and-services-tab">Accounts and services</a></li>
                <li role="presentation" id="payments-and-costs-pill"><a href="#payments-and-costs-tab">Payments and
                        costs</a></li>
                <li role="presentation" id="smart-life-content-pill"><a href="#smart-life-content-tab">Smart life
                        content</a></li>
            </ul>
        </div>
        <div class="col-md-8">
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="accounts-and-services-tab">
                    <h2>Accounts and services</h2>
                    <hr>
                    <h3 class="gray">Activate your account</h3>
                    <p>To request the activation of your account you can simply:</p>
                    <ul>
                        <li>Order it online</li>
                        <li>Call Assistance Services on line 187</li>
                        <li>Go to your nearest Tim Store</li>
                    </ul>
                    <p>You can also check how to activate the different offers in the Offers page. <br> The information
                        needed to activate your account are: </p>
                    <ul>
                        <li>Name and Surname</li>
                        <li>Fiscal code</li>
                        <li>Address</li>
                        <li>Alternative phone number</li>
                        <li>Email address</li>
                    </ul>
                    <hr>
                    <h3 class="gray">Terminate your account/contract</h3>
                    <p>If you wish to finish your contact for one of the following reasons: </p>
                    <ul>
                        <li>Activation of new line</li>
                        <li>Transfer to another operator</li>
                        <li>Activation of a different offer of your TIM account</li>
                        <li>Purchase/Hire of different products</li>
                    </ul>
                    <p>Please contact Assitance Services on line 187</p>
                    <hr>
                    <h3 class="gray">Lost or stolen SIM card</h3>
                    <p class="text-justify">
                        In case of theft or loss of your mobile you will need to promptly block the SIM on the line
                        contained within it.If you are a customer and you are a member rechargeable Section MyTIM Mobile
                        can block the line directly online. If you are not registered to section MyTIM Mobile or if you
                        are a customer subscription you will need to contact Customer Service 119. After identification
                        and verification of ownership of the number (via the communication name, last name, social
                        security number, ...) it will be immediately blocked line telephone traffic.</p>
                    <hr>
                    <h3 class="gray">Request a new SIM card</h3>
                    <p>If your SIM card got lost, stolen or damaged you can simply go to your nearest TIM Store and
                        request a replacement.</p>
                    <hr>
                </div>
                <div role="tabpanel" class="tab-pane" id="payments-and-costs-tab">
                    <h2>Payments and costs</h2>
                    <hr>
                    <h3 class="gray">How to pay my TIM bill</h3>
                    <p>To pay your TIM bill you can choose any of the following alternative methods: </p>
                    <ul>
                        <li>Postal office</li>
                        <li>Bancomat machine</li>
                        <li>Pay point LIS PAGA</li>
                        <li>SISAL</li>
                        <li>Internet banking</li>
                        <li>CityPoste payment</li>
                        <li>COOP</li>
                        <li>Bank office</li>
                    </ul>
                    <hr>
                    <h3 class="gray">Check the use of your suscription</h3>
                    <p>You can check the use of your suscription by either: </p>
                    <ul>
                        <li>Going online to MyTIM Mobile (you need to be registered to MyTIM Mobile)</li>
                        <li>Calling from your phone to the free number 40915</li>
                        <li>Downloading the MyTIM Mobile app from the App Store or Play Store</li>
                    </ul>
                    <hr>
                </div>
                <div role="tabpanel" class="tab-pane" id="smart-life-content-tab">
                    <h2>Smart Life Content</h2>
                    <hr>
                    <h3 class="gray">What is TIMgames?</h3>
                    <p class="text-justify">
                        TIMgames is TIM's gaming service allowing all customers to download on their tablet and
                        smartphone the best games, on demand or subscription.<br><br>

                        With TIMgames you will have a library of over 1,500 games, updated every week with new titles
                        and games on offer.<br><br>

                        TIMgames is accessible both from the App (available for download from Google Play) and browsers
                        on www.timgames.it The user can choose the preferred purchase mode between on-demand and
                        subscription.<br><br>

                        In particular:
                    </p>
                    <ul>
                        <li>On demand: from € 0.49, buying and downloading a game on their mobile phones</li>
                        <li>Subscription: I Love Games Promo, only 2 € a week you can download unlimited games on
                            TIMgames. The first month is promoting only 1 € per week.
                        </li>
                    </ul>
                    <hr>
                    <h3 class="gray">What is TIMmusic?</h3>
                    <p class="text-justify">TIMmusic is the digital music platform from Telecomitalia dedicated to all
                        customers who have a
                        TIM smartphone/tablet, ADSL line, Fiber or TIM internet stick.

                        With TIMmusic can listen to millions of songs streaming with no time limit on your smartphone
                        and tablet or PC. You can create your own playlists or listen to those suggested by famous DJs
                        and artists and share on your favorite social network. The catalog is constantly updated with
                        all the latest releases, often in exclusive preview. </p>
                    <hr>
                    <h3 class="gray">What is TIMvision?</h3>
                    <p class="text-justify">TIMvision is the new answer to the entertainment needs for all the family.
                        TV entirely on
                        demand TIM via an ADSL connection or Fiber allows you to enjoy thousands of titles:the great
                        cinema, the most exciting TV series, the most loved cartoon characters and more like
                        documentaries, reportage and music.<br><br>

                        The TIMvision customers have access to:
                    </p>
                    <ul>
                        <li>TIMvision TV</li>
                        <li>Videostore</li>
                        <li>Free</li>
                        <li>Replay TV</li>
                    </ul>
                    <p>The TIMvision subscription allows you to watch all the content on the PC, Smart TV or TV with
                        decoder, tablets and smartphones without using Giga, anytime, anywhere.</p>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- scripts added last for faster loading -->
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script type="text/javascript">
    $('#accounts-and-services-pill a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });
    $('#payments-and-costs-pill a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });
    $('#smart-life-content-pill a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });
</script>

</body>
</html>

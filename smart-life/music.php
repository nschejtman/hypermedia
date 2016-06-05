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

<style> 
h2 { position: relative ;text-align : center;left : 30% ;width: 30%;}
.grid-tv{  }
.grid-tv > div{  position: relative ;left : 30% ;width: 40%; border-top: 1px solid #e0e0e0;}
.grid-tv ul{  margin: 0 auto;  max-width: 980px;  padding: 0;  font-size: 0;}
.grid-tv ul li{  font-size: 1em;  display: inline-block;    vertical-align: top;    height: 100%;  border-right: 1px solid #e0e0e0;  }
.grid-tv ul.grid-two  li{  width: 49%;  }
.grid-tv ul.grid-three li{  width: 33%;  }
.grid-tv ul li:last-child{  border-right: 0;}
.grid-tv img{  width: 100%;}
.grid-tv .cont{  padding: 50px 25px;  text-align: center;}
.grid-tv h1{  color: #004990;  font-weight: normal;  font-size: 30px;  white-space: nowrap;    font-family: 'GillSansAltOne', Arial;  text-align: center;}
.grid-tv p{  font-family: arial;  font-size: 14px;  color: #004990;  text-align: center;}
.grid-tv .pill {    -webkit-border-radius: 15px;    -moz-border-radius: 15px;    -ms-border-radius: 15px;    border-radius: 15px;    letter-spacing: 1px;    text-transform: uppercase;    padding: 7px 40px;    display: inline-block;    text-align: center;    font-size: 13px;    color: #fff;    margin-top: 25px;    background: #004990;    text-decoration: none;    border: 1px solid #004990;    font-family: "GillSans-light", Arial;}
</style>

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
                        <li><a href="#">Home</a></li>
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
        <li>Smart Life</li>
        <li class="active">TV & Entertainment</li>
        <li class="active">Music</li>
    </ol>
    <div class="row">
    
    <div>   
         <section class="grid-tv" style="background-image:url(/images/music.jpg); ">             
                <div class="cont">                        
                    <h1>TIMmusic</h1>   
                    <p>Step into a world of music with the app TIMmusic. Millions of songs streaming, all the latest releases and many playlists to listen anywhere, anytime, without consuming GB!</p>   
                    
                </div>      
           </section>
    </div>
     <div width="100%" text-align="center"> 
    <h2> products</h2>
    <section class="grid-tv">  
    <div>    
        <ul class="grid-one">     
            <li>        
                <div class="cont">          
                    <img src="/images/beats.jpg">     
                    <h1>Beats headphones</h1>   
                    <p>Audio enhanced with the new Beats sound quality, the sound of Solo2 headphones is sharper and cleaner and emits a broader range of emotions</p>   
                    <a href="#" class="pill">See Detailes</a>    
                </div>      
            </li>      
        </ul> 
    </div>
    </section>
    </div>


    </div>
</div>
<!-- scripts added last for faster loading -->
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>

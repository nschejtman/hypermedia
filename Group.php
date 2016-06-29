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
<?php include('menu.html'); ?>
<div class="container">
    <ol class="breadcrumb">
        <li><a href="/home.php">Home</a></li>
        <li class="active">The Group</li>
    </ol>
</div>

<div class="row">
    <div class="col-md-4">
        <ul class="nav nav-pills nav-stacked">
            <li role="presentation" class="active" id="news-pill"><a href="#news-tab">News</a></li>
            <li role="presentation" id="Governance-pill"><a href="#Governance-tab">Governance</a></li>
            <li role="presentation" id="Business-pill"><a href="#Business-tab">Business</a></li>
        </ul>
    </div>
    <div class="col-md-8">
        <!-- Tab panes -->
        <div class="tab-content" >
            <div role="tabpanel" class="tab-pane active" id="news-tab">
                <h2>News</h2>
                <div >
                    <h3>TIM is the first in Italy to launch 1000 MB ultrabroadband on the FTTH network</h3>
                    <hr>
                    <p>A In Perugia, the first 1,000 super-fast connections in the city were set up thanks to the cabling of a lot of 200 buildings in the Fontivegge district, where fibre optics come directly into the buildings From next Friday the new ultrabroadband services in FTTH technology (Fiber To The Home), which already guarantee a connection speed of up to 1000 Megabit/s, will be available to citizens and businesses TIM's overall investment in Perugia is over 10 million euros. This project follows the one that made it possible to equip the city with a fibre optic network in FTTCab technology which provides connections of up to 100 MB for over 53 thousand homes, equal to 80.3% of the population
                    </p>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane " id="Governance-tab">
                <h2>Governance</h2>
                <div class="imgMusic" >
                    <h3>The Italian telecommunications market</h3>
                    <hr>
                    <p>The Italian TLC market continues to be highly competitive with significant use of the pricing as a lever, which has led to an ongoing impoverishment of the traditional service components, particularly voice service. In this context, the key element in the evolution of the market has been the increased penetration of broadband, first fixed and now also mobile, and above all greater penetration of new generation handsets. At the same time, the evolution of the competitive scenario continues to veer towards a situation of increased complexity, with more inter relationships between players of different markets, opening the field to the competition of non-traditional operators,  particularly OTTs (Over the Top) companies and producers of electronic and consumer devices), as well as giving telecommunication operators the possibility of developing new so-called “network based” services (mainly in the IT and Media fields).
                    </p>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane " id="Business-tab">
                <h2>Business</h2>
                <div class="imgTV" >
                    <h3>In this section, you will find important information on Telecom Italia Group's bond issues.</h3>
                    <hr>
                    <p>The offering circulars, Prospectuses for bond listing, Information Prospectuses on the Issuer, Regulations and notices on the financial instrument have been published in accordance with the regulations in force.
                        None of the financial instruments described in the Prospectuses are offered or sold by the Group Companies.
                        In particular, with regard to issues in sterling and dollars, the information in the attached documents are not and may in no case be an offer of sale or delivery of financial instruments or an offer for the purchase of financial instruments in Italy, either for the public or for  “qualified operators” as defined in Art. 31, paragraph 2 of Consob Regulation N. 11522 of 1 July 1998 (jointly, the “Italian Subjects”); therefore, the financial instruments stated in this information are not the object of purchase, sale or delivery, direct or indirect, in Italy to Italian Subjects.
                        As for the issues in dollars place under the form “144A private placement with registration rights” according to United States regulations, these are private placements with institutional investors made in derogation to the US Securities Act and which do require registration at the SEC at the time of issue, though at a subsequent time.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script type="text/javascript">
    $('#news-pill a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });
    $('#Governance-pill a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });
    $('#Business-pill a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });
</script>

</body>
</html>
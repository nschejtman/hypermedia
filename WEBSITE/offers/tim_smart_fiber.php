<!DOCTYPE html>
<html lang="en">
<head>
    <?php header('Access-Control-Allow-Origin: *'); ?>
    <meta charset="UTF-8">
    <title>Tim-smart-fiber</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../stylesheets/tim_smart_fiber.css">
    <link rel="stylesheet" href="/stylesheets/main.min.css">
</head>
<body>
<?php include('../menu.html'); ?>
<div class="container">
    <ol class="breadcrumb">
        <li><a href="/home.php">home</a></li>
        <li>Offers</li>
        <li><a href="/offers/home_offer.php">Home + Mobile</a></li>
        <li class="active">Tim Smart Fiber</li>
    </ol>

    <hr>

    <div class="row">
        <div class="col-md-4">
            <ul class="nav nav-pills nav-stacked">
                <li role="presentation" class="active" id="offer-pill"><a href="#offer-tab">Offer</a></li>
                <li role="presentation" id="cost-pill"><a href="#cost-tab">Cost</a></li>
                <li role="presentation" id="faq-pill"><a href="#faq-tab">FAQ</a></li>
            </ul>
        </div>
        <div class="col-md-8">
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active grid-tv" id="offer-tab">
                    <h2>Offer</h2>
                    <hr>
                    <h4>TIM SMART FIBER is the complete offer to ...</h4>

                    <h4 class="gray">includes</h4>
                    <h5 style="margin-left: 30px">Internet conection</h5>
                    <h5 style="margin-left: 30px">Phone line</h5>
                    <h5 style="margin-left: 30px">Calls for 0€/min</h5>
                    <h5 style="margin-left: 30px">TIMvision</h5>
                    <hr>
                    <iframe width="695" height="360" src="https://www.youtube.com/embed/5juwo46h0t8" frameborder="0"
                            allowfullscreen></iframe>
                </div>
                <div role="tabpanel" class="tab-pane grid-tv" id="cost-tab">
                    <h2>Cost</h2>
                    <hr>
                    <h5>The costs set out below are those of the list and are applied except for any ongoing promotions
                        to customers who require the activation of the offer TIM SMART FIBER by 31/07 /2016.Per details
                        and information , see "Tim recalls".</h5>

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
                                for New Customers
                            </td>
                            <td>49€</td>
                            <td>0€</td>
                        </tr>
                    </table>
                </div>
                <div role="tabpanel" class="tab-pane grid-tv" id="faq-tab">
                    <h2>FAQ</h2>
                    <hr>
                    <h4>And ' it required to pay by automatic bank transfer or postal debit ( RID ) ?</h4>
                    <h5 style="margin-left: 30px">The RID is not mandatory but is required to get the discount on the
                        contribution of the offer activation TIM SMART FIBER ( for free instead of € 49 for New Plants ,
                        passes by another operator , for existing customers with fixed line voice and TIM only for now
                        TIM customers with fixed line with ADSL who switch to Fiber.</h5>
                    <h5 style="margin-left: 30px">If the promise of domiciliation , expired 90 days from the activation
                        request of the offer TIM SMART FIBER , if the RID is not active will be charged the full amount
                        of the contribution of the offer activation TIM SMART FIBER .</h5>
                    <h5 style="margin-left: 30px">The holder is not necessary that the TIM SMART contract is the same as
                        the nominee of the bank RID .</h5>

                </div>
            </div>
        </div>
    </div>


</div>

<!-- scripts added last for faster loading -->
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<script type="text/javascript">
    $('#offer-pill a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });
    $('#cost-pill a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });
    $('#faq-pill a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });
</script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<?php
// Prepare required parameters:
$adslotId = '9243';
$external_identifier = "4075730";
$user_agent = urlencode($_SERVER['HTTP_USER_AGENT']);
$ip = $_SERVER['REMOTE_ADDR'];
// Make request:
$ayetResponse = file_get_contents("https://www.ayetstudios.com/offers/offerwall_api/" . $adslotId . "?external_identifier=" . $external_identifier . "&user_agent=" . $user_agent . "&ip=" . $ip, false, stream_context_create(['http' => ['ignore_errors' => true]]));
$ayetResponse = json_decode($ayetResponse, true);
// Output response:
// print_r($ayetResponse);
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link href="./custom2.css" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="offer-container">
                    <div class="offer-img-wrap"><img src="//d1mys92jzce605.cloudfront.net/icons/campaign_e13e05b8e9a84410c9672ce500643a314f3d5c80.png"></div>
                    <div class="offer-btn-wrap">
                        <div class="btn-offer "><img src="https://www.ayetstudios.com/img/coins/coin.png">
                            <div class="btn-text ">Earn 420</div>
                        </div>
                        <!-- <div class="modal-btn-offer"><span style="margin-right: 0.4em;">Earn: </span><img src="https://www.ayetstudios.com/img/coins/coin.png">
                            <div class="btn-text">420</div>
                        </div> -->
                    </div>
                    <div class="offer-btn-wrap" style="margin-right:5px;">
                        <div class=" all-icon">
                            <svg class="svg-inline--fa fa-desktop fa-w-18" style="width: 0.9em;" aria-hidden="true" data-prefix="fas" data-icon="desktop" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                <path fill="currentColor" d="M528 0H48C21.5 0 0 21.5 0 48v320c0 26.5 21.5 48 48 48h192l-16 48h-72c-13.3 0-24 10.7-24 24s10.7 24 24 24h272c13.3 0 24-10.7 24-24s-10.7-24-24-24h-72l-16-48h192c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zm-16 352H64V64h448v288z"></path>
                            </svg><!-- <i class="fas fa-desktop" style="width: 0.9em;"></i> -->
                        </div>
                    </div>
                    <div class="offer-desc-wrap flex-desc one-line-wrap "><span class="odw-span-title">Opeepl Survey</span>
                        <div class="odw-span-desc one-line-desc">Complete a survey - new users only</div>
                        
                    </div>

                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

</body>

</html>
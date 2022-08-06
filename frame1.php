<!DOCTYPE html>
<html lang="en">
<?php
$devicename = 'iphone';
$devicetype;
$deviceos;
$userip;
$country_code;
$user_agent;
function getUserIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
function getOS()
{
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    $os_platform =   "Bilinmeyen İşletim Sistemi";
    $os_array =   array(
        '/windows nt 10/i'      =>  'Windows 10',
        '/windows nt 6.3/i'     =>  'Windows 8.1',
        '/windows nt 6.2/i'     =>  'Windows 8',
        '/windows nt 6.1/i'     =>  'Windows 7',
        '/windows nt 6.0/i'     =>  'Windows Vista',
        '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
        '/windows nt 5.1/i'     =>  'Windows XP',
        '/windows xp/i'         =>  'Windows XP',
        '/windows nt 5.0/i'     =>  'Windows 2000',
        '/windows me/i'         =>  'Windows ME',
        '/win98/i'              =>  'Windows 98',
        '/win95/i'              =>  'Windows 95',
        '/win16/i'              =>  'Windows 3.11',
        '/macintosh|mac os x/i' =>  'Mac OS X',
        '/mac_powerpc/i'        =>  'Mac OS 9',
        '/linux/i'              =>  'Linux',
        '/ubuntu/i'             =>  'Ubuntu',
        '/iphone/i'             =>  'iPhone',
        '/ipod/i'               =>  'iPod',
        '/ipad/i'               =>  'iPad',
        '/android/i'            =>  'Android',
        '/blackberry/i'         =>  'other',
        '/webos/i'              =>  'Android'
    );
    foreach ($os_array as $regex => $value) {
        if (preg_match($regex, $user_agent)) {
            $os_platform = $value;
        }
    }
    return $os_platform;
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link href="./custom.css" rel="stylesheet" />
    <script src="https://notik.me/js/core/jquery.min.js"></script>
    <script src="https://notik.me/js/plugins/moment.min.js"></script>
    <?php
    $deviceos = getOS();
    $deviceos = explode(" ", $deviceos);
    $deviceos = $deviceos[0];
    $country_code1 = file_get_contents('http://ip-api.com/json/');
    $country_code1 = json_decode($country_code1, true);
    $country_code = $country_code1['countryCode'];
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    function isMobileDevice()
    {
        return preg_match(
            "/(android|avantgo|blackberry|bolt|boost|cricket|docomo
|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i",
            $_SERVER["HTTP_USER_AGENT"]
        );
    }
    if (isMobileDevice()) {
        $devicetype = "mobile";
    } else {
        $devicetype = "desktop";
    }
    $userip = getUserIpAddr();
    $agent = $_SERVER["HTTP_USER_AGENT"];
    if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE)
        $user_agent = "Mozilla/5.0";
    elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== FALSE) //For Supporting IE 11
        $user_agent = "Mozilla/5.0";
    elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox') !== FALSE)
        $user_agent = "Mozilla/5.0";
    elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== FALSE)
        $user_agent = "Chrome";
    elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera Mini') !== FALSE)
        $user_agent = "OperaMini";
    elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera') !== FALSE)
        $user_agent = "Opera";
    elseif (strpos($_SERVER['HTTP_USER_AGENT'], 'Safari') !== FALSE)
        $user_agent = "Safari";
    else
        echo 'Something else';
    ?>
</head>
<body>
    <div class="container">
        <?php
        $userid = "5";
        $userip=$_SERVER['REMOTE_ADDR'];        
        $data = file_get_contents("https://notik.me/api/v1/get-offers/filtered?api_key=XJuGIKW85xfDz5rNS6zxZye1wLe8vujt&pub_id=N9gz&user_id=5&device_name=$devicename&device_type=$devicetype&device_os=$deviceos&country_code=$country_code&user_agent=$user_agent&ip=$userip");
        $data = json_decode($data, true);
        for ($i = 0; $i < $data["offer_count"]; $i++) {  ?>
            <div class="ss_offer_content ss_offer_allcat" id="offer-372887_e936d55c-6f29-4110-acdb-abb80d213e7d_2.4">
                <div class="row">
                    <div class="col-lg-2 col-sm-3">
                        <div class="offer_images"><a href="<?php echo $data["data"][$i]["click_url"]; ?>" target="_blank" class="offer-url"><img src="<?php echo $data["data"][$i]["image_url"]; ?>" style="max-width: 100px;max-height: 100px;" alt="offer icon"></a></div>
                    </div>
                    <div class="col-lg-10 col-sm-9">
                        <div class="row">
                            <div class="col-lg-9 col-sm-9 align-self-center">
                                <div class="offer_text">
                                    <h2><a href="<?php echo $data["data"][$i]["click_url"]; ?>" target="_blank" class="offer-url"><?php echo $data["data"][$i]["name"]; ?></a></h2>
                                    <p class="allDesc"><?php echo $data["data"][$i]["description1"]; ?><span class="more-text"></span><?php echo $data["data"][$i]["description2"]; ?> <?php echo $data["data"][$i]["description3"]; ?></p>
                                    <div class="tags_ss"><a href="javascript:void(0)"> <?php echo $data["data"][$i]["categories"][0] ?> </a></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-3 align-self-center"><a href="javascript:void(0)" class="offer_icon" data-catrel="offers"><img src="https://notik.me/img/offerwall/<?php echo $data["data"][$i]["categories"][0] ?>.svg" alt="cat-icon"></a></div>
                        </div>
                    </div>
                </div>
                <?php
                $token  = explode("?", $data["data"][$i]["click_url"]);
                $token = explode("&", $token[1]);
                $token = explode("=", $token[0]);
                ?>
                <div class="ss_button"><a href="<?php echo $data["data"][$i]["click_url"]; ?>" target="_blank" class="earn-btn-text offer-url offer-url-btn"><span class="earn-text">Earn</span>&nbsp;<span>3600</span>&nbsp;coins</a></div>
                <div class="ss_button_close"><a href="javascript:void(0)" class="remove-offer-btn" data-offer-token="<?php echo $token[1]; ?>"> <img src="https://notik.me/img/offerwall/close.svg" alt="remove-btn"></a></div>
            </div>
        <?php } ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
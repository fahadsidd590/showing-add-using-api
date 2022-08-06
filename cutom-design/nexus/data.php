<?php
$title = $_POST["url"];
$url = $_POST["password"];
$curl = curl_init($url);
// $test = "false1";
curl_setopt($curl, CURLOPT_NOBODY, true);
$result = curl_exec($curl);
if ($result !== false) {
    $status_code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    if ($status_code == 404) {
        echo json_encode(['code' => 404,'msg'=>"url not find"]);
        exit;
    } else {
        // echo "URL Exists";

        // Start 
        $conn = mysqli_connect("localhost", "root", "", "offerwall") or die("<h1>Connection Faild</h1>");
        $que = "INSERT INTO `website_data`(`website_title`,`website_url`) VALUES 
    ('{$title}','{$url}')";
        mysqli_query($conn, $que) or die("Query Faild");
        //         echo "<script>
        //  window.location.href ='navbar.php'
        //  </script>";
        //  $test = "true1";
        mysqli_close($conn);
        echo json_encode(['code' => 200,'msg'=>"Data Successfully Verified"]);
        exit;
    }
} else {
    echo json_encode(['code' => 404,'msg'=>"Site Title OR URL Not Found"]);
    exit;
}

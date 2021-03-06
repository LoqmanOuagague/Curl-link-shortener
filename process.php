<?php
require_once "./connect.php";
$link = $_POST['link'];
function rand_string()
{
    $chars = "ABCDEFGHIJKLMNOPQRSTUWVYXZ1234567890abcdefghijklmnopqrstuvwxyz";
    $size = strlen($chars);
    $str = "";
    for ($i = 0; $i < 10; $i++) {
        $str .= $chars[rand(0, $size - 1)];
    }
    return $str;
}
if ($_POST) {
    if (!empty($link)) {
        if (preg_match('|^http(s)?://[a-z0-9-]+(.[a-z0-9-]+)*(:[0-9]+)?(/.*)?$|i', $link)) {
            $code = rand_string();
            $query = "INSERT INTO links (redirect_to, redirected_from) VALUES ('" . $code . "','" . $link . "' );";
            $statement = $pdo->prepare($query);
            $statement->execute();
            echo json_encode(["new_link" => $_SERVER['SERVER_NAME'] .  "/redirect/" . $code]);
        } else {
            echo json_encode(["error" => "2"]);
        }
    } else {
        echo json_encode(["error" => "1"]);
    }
} elseif (!empty($_GET['r'])) {
    $code = $_GET['r'];
    if (!empty($code)) {
        echo $code;
        $pdo_statement = $pdo->prepare('SELECT * FROM links WHERE redirect_to=:redirect_to');
        $pdo_statement->execute(['redirect_to' => $code]);
        $link = $pdo_statement->fetch()[2];
        if (!empty($link)) {
            header("Location: $link");
        } else {
            header("Location: ".$_SERVER['SERVER_NAME']."/page-not-found");
        }

        exit();
    }
} else {
    header("Location: ".$_SERVER['SERVER_NAME']."/index");
}

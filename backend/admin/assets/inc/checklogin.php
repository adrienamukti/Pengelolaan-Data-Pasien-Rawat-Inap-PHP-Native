<?php
// function check_login()
// {
// if(strlen($_SESSION['ad_id'])==0)
// 	{
// 		$host = $_SERVER['HTTP_HOST'];
// 		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
// 		$extra="index.php";
// 		$_SESSION["ad_id"]="";
// 		header("Location: http://$host$uri/$extra");
// 	}
// }

function check_login()
{
    if (strlen($_SESSION['ad_id']) == 0 && strlen($_SESSION['doc_id']) == 0)
    {
        $host = $_SERVER['HTTP_HOST'];
        $uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $extra = "index.php";
        header("Location: http://$host$uri/$extra");
        exit();
    }
}
?>

<?php
// function check_login()
// {
// if(strlen($_SESSION['doc_id'])==0)
// 	{
// 		$host = $_SERVER['HTTP_HOST'];
// 		$uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
// 		$extra="index.php";
// 		// $_SESSION["doc_id"]="";
// 		$_SESSION['doc_id'] = $doctor_id;
// 		header("Location: http://$host$uri/$extra");
// 	}
// }
function check_login()
{
    if(!isset($_SESSION['doc_id']) || strlen($_SESSION['doc_id']) == 0)
    {
        $host = $_SERVER['HTTP_HOST'];
        $uri  = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
        $extra = "index.php";
        header("Location: http://$host$uri/$extra");
        exit(); // Penting untuk menghentikan eksekusi script setelah redirect
    }
    // Jika kita sampai di sini, berarti session valid
}
?>

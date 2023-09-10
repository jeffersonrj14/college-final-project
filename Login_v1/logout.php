<?php 
    session_start();
    require_once('../data/data_connect.php');
    $sql = "select * from customers where email = '{$_SESSION['email']}' and login = 2;";
    $result = mysqli_query($con,$sql);
    $count = mysqli_num_rows($result);
    if($count == 1){
        $sql_1 = "update customers set login = 0 where email = '{$_SESSION['email']}';";
        mysqli_query($con,$sql_1);
        if (isset($_COOKIE[session_name()])) {
            setcookie(session_name(),'',time()-1800,'/');
            session_unset();
            session_destroy();
            // $message = 'もう一度ログインする場合は、以下からログインください。<br>';
            // echo $message;
            header('location:../index_copy3.php');
            // echo '<a href="../index_copy3.php" >back to home page</a>';
            // require_once("../web_desige/public_html/project/pro_1/Ecommerce/index.php");
         }else{
            // echo "ログインされていません。ログインしてください。<br>";
            // require_once("../web_desige/public_html/project/pro_2/index.html");
            header("location=./index.html");
         }
        
    }else{
        if (isset($_COOKIE[session_name()])) {
                setcookie(session_name(),'',time()-1800,'/');
                session_unset();
                session_destroy();
                // $message = 'もう一度ログインする場合は、以下からログインください。<br>';
                // echo $message;
                header('location:../index_copy3.php');
        }else{
            // echo "ログインされていません。ログインしてください。<br>";
            // require_once("../web_desige/public_html/project/pro_2/index.html");
            header("location=./index.html");
        }
}

?>

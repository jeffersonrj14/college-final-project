<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment</title>
    <link rel="stylesheet" href="../Login_v1/css/style2.css">
</head>
<body>
<div id="app">
    <form action="../payment/pay_check.php" method="post">
        <!-- product and price  -->
        <h2>Your purches list</h2>
        <?php for($i = 0; $i < $_SESSION['count']; $i++){ ?>
    <table>
        <tbody>
            <tr>
                <td><b>product_name :</b> <div class="texbox"><input type="text" name="name[]" value="<?php echo $name[$i]; ?>"></div><br>
                </td>
            </tr>

            <tr>
                <td><b>per one product :</b> <div class="texbox"><input type="text" name="ppp[]" value="<?php echo $p[$i];?>"> </div><br>
                </td>
            </tr>

            <tr>
                <td><b>amount :</b> <div class="texbox"><input type="text" name="am[]" value="<?php echo $_SESSION['am'][$i]; ?>"> </div><br>
                </td>
            </tr>

            <tr>
                <td><b>total price :</b> <div class="texbox"><input type="text" name="tp[]" value="<?php echo $_SESSION['am'][$i]*$p[$i]; ?>"> </div><br>
                </td>
            </tr>
        <?php }?>
        <!-- change address or edit address  -->
        <tr>
        <div>
            <td><b>
            address :</b> <div class="texbox"><input type="text" name="add" value="<?php echo $_SESSION['add']; ?>"> 
            <a href="../edit_address/input_add.html"><button type="button" id="btn">edit</button></div><br></a>
            <!-- <button type="button" id="btn">edit</button><br> -->
            </td>
        </div>
        </tr>

        <tr>
    <!-- choose payment -->
        <div>
            <td><b>
            payment by :</b> <div class="texbox"><input type="text" name="pb" value="<?php echo $_SESSION['pay']; ?>"> 
            <a href="../payment/pay_choice.html"><button type="button" id="btn">edit</button></div><br></a>
            </td>
        </div>
        </tr>
        </tbody>
    </table>

        <input type="submit" name="check_pay" value="check">
    </form>
    </div>
    <a href="../index_copy3.php">back to homepage</a>

    <script type="text/javascript" src="../edit_address/change_add.js"></script>


</body>
</html>
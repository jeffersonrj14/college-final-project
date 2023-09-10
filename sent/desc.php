<?php
  require_once("../data/data_connect.php");
  $a = $_POST['sub'];
  // echo $a;
  $sql = "select * from products where product_id = {$a};";
  $result = mysqli_query($con,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desc</title>
    <link rel="stylesheet" href="css/style3 copy.css">
    <style>
        html{
            margin-top: 10%;
        }
    </style>
</head>
<body>
    <!-- <h1 class="itemname"></h1>
    <p class="itemdesc"></p> -->
    <div class = "card-wrapper">
        <div class = "card">
        <?php while($row = mysqli_fetch_assoc($result)){?>
          <!-- card left -->
          <div class = "product-imgs">
            <div class = "img-display">
              <div class = "img-showcase">
                <img src = "./img_action - コピー/speaker bluetooth/Anker/71yGUOQxXBL._AC_SL1500_.jpg" alt = "Main image">
                <img src = "./img_action - コピー/speaker bluetooth/Anker/71-kARbJ6qL._AC_SL1500_.jpg" alt = "2nd image">
                <img src = "./img_action - コピー/speaker bluetooth/Anker/717PDFGSp1L._AC_SL1500_.jpg" alt = "3rd image">
                <img src = "./img_action - コピー/speaker bluetooth/Anker/71wH85Tr-UL._AC_SL1500_.jpg" alt = "4th image">
              </div>
            </div>
            </div>
            <!-- images -->
            <div class = "img-select">
              <div class = "img-item">
                <a href = "#" data-id = "1">
                  <img src = "./img_action - コピー/speaker bluetooth/Anker/71yGUOQxXBL._AC_SL1500_.jpg" alt = "Main image" style="padding-top: 20px;">
                </a>
              </div>
              <div class = "img-item">
                <a href = "#" data-id = "2">
                  <img src = "./img_action - コピー/speaker bluetooth/Anker/71-kARbJ6qL._AC_SL1500_.jpg" alt = "2nd image" style="padding-top: 20px;">
                </a>
              </div>
              <div class = "img-item">
                <a href = "#" data-id = "3">
                  <img src = "./img_action - コピー/speaker bluetooth/Anker/717PDFGSp1L._AC_SL1500_.jpg" alt = "3rd image" style="padding-top: 20px;">
                </a>
              </div>
              <div class = "img-item">
                <a href = "#" data-id = "4">
                  <img src = "./img_action - コピー/speaker bluetooth/Anker/71wH85Tr-UL._AC_SL1500_.jpg" alt = "4th image" style="padding-top: 20px;">
                </a>
              </div>
            </div>
          </div>

          <!-- card right(product content) -->
          <div class = "product-content">
            <h2 class = "product-title"><?php echo $row['product_name']; ?></h2>
            

          <!-- rating   -->
            <div class = "product-rating">
              <i class = "fas fa-star"></i>
              <i class = "fas fa-star"></i>
              <i class = "fas fa-star"></i>
              <i class = "fas fa-star"></i>
              <i class = "fas fa-star-half-alt"></i>
              <span>4.7(21)</span>
            </div>
          
          <!-- price -->
            <div class = "product-price">
              <!-- <p class = "last-price"><span>￥2,000</span></p> -->
              <p class = "new-price"> <span><?php $row['price']; ?></span></p>
            </div>


          <!-- 商品内容 -->
            <div class = "product-detail">
              <h2>商品について: </h2>
              <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo eveniet veniam tempora fuga tenetur placeat sapiente architecto illum soluta consequuntur, aspernatur quidem at sequi ipsa!</p> -->
              <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, perferendis eius. Dignissimos, labore suscipit. Unde.</p> -->
              <p><?php $row['product_describe']; ?></p>
              <ul>
                <li>カーラー: <span>Black</span></li>
                <li><span></span></li>
                <li>タイプ  :<span>ワイヤレススピーカー</span></li>
                <li><span></span></li>
                <li><span>在庫有り</span></li>
              </ul>
            </div>
            
          <!-- カート入れるとか -->
            <div class = "purchase-info">
              <input type = "number" min = "0" value = "1">
              <button type = "button" class = "btn">
                カート <i class = "fas fa-shopping-cart"></i>
              </button>
              <button type = "button" class = "btn">比べる</button>
            </div>
          
          <!-- social link -->
            <div class = "social-links">
              <p></p>
              <a href = "#">
                <i class = "fab fa-facebook-f"></i>
              </a>
              <a href = "#">
                <i class = "fab fa-twitter"></i>
              </a>
              <a href = "#">
                <i class = "fab fa-instagram"></i>
              </a>
              <a href = "#">
                <i class = "fab fa-whatsapp"></i>
              </a>
              <a href = "#">
                <i class = "fab fa-pinterest"></i>
              </a>
            </div>
          </div>
        <?php } ?>
        </div>
      </div>

      <script src="https://kit.fontawesome.com/28d97b5ec6.js" crossorigin="anonymous"></script>
    <script src="js/productdes.js"></script>
</body>
</html>
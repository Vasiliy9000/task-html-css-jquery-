<!DOCTYPE html>
<html lang="en">
   <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Центр авто</title>
   <link rel="stylesheet" href="style.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
   </head>

   <body>
      <div class="wrapper">
         <div class="headline">
            <p>Банки партнеры</p>
         </div>
         <div class="carousel right">
            <div class="slide"></div>
            <div class="wrap">
               <ul>
                  <li><img src="https://webdevtrick.com/wp-content/uploads/sunset-background.jpg"/></li>
                  <li><img src="https://webdevtrick.com/wp-content/uploads/coding.jpg"/></li>
                  <li><img src="https://webdevtrick.com/wp-content/uploads/1st.jpg"/></li>
                  <li><img src="https://webdevtrick.com/wp-content/uploads/login-page-image.jpg"/></li>
                  <li><img src="https://webdevtrick.com/wp-content/uploads/1.jpg"/></li>
                  <li><img src="https://webdevtrick.com/wp-content/uploads/b47sample2.jpg"/></li>
                  <li><img src="https://webdevtrick.com/wp-content/uploads/image-slider1.jpg"/></li>
                  <li><img src="https://webdevtrick.com/wp-content/uploads/black-background.jpg"/></li>
                  <li><img src="https://webdevtrick.com/wp-content/uploads/sunset-background.jpg"/></li>
                  <li><img src="https://webdevtrick.com/wp-content/uploads/coding.jpg"/></li>
                  <li><img src="https://webdevtrick.com/wp-content/uploads/1st.jpg"/></li>
                  <li><img src="https://webdevtrick.com/wp-content/uploads/login-page-image.jpg"/></li>
               </ul>
            </div>
         </div>
         <div>
            <img class="fotoGirl" src="https://img4.goodfon.ru/original/1366x768/5/d7/telephone-operator-woman-microphones.jpg"/></li> 
            <div id="openModal" class="modal">
               <div class="modal-dialog">
                  <div class="modal-content">
                     <div class="modal-header">
                        <a href="#close" title="Close" class="close">×</a>
                     </div>
                  <div class="modal-body">    
                     <form method="POST" action="obr.php" class="buy">
                        <input name="text" type="text" placeholder = "Имя">  <br> 
                        <input name="tel" type="tel" placeholder = "Телефон">  <br> 
                        <input name="email" type="email" placeholder = "Email">  <br> 
                        <input name="product" type="text" placeholder = "Название товара">  <br>
                        <input type="submit">
                     </form>
                  </div>
               </div>
            </div>
         </div>
         <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
         <script src="function.js"></script>
      </div>
   </body>
</html>
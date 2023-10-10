
<!DOCTYPE html>
<html>
<head>
    <!--para ma connect and style css-->
    <link rel="stylesheet" href="styleStore.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit&family=Permanent+Marker&family=Sofia+Sans+Condensed:wght@300&display=swap" rel="stylesheet">

</head>
<body>
<!--/////////////FRAMES OR BOX STYLE AND LOGO-//////////----->
<section>
<div class="box1">
         <div class="logoname">
        <h1>JOBILLEE</h1>
</div>
    <a href="rey.com"><img src="Images\logo.png" href="google.com" alt="jobillee" width="50" height="55"></a>
    <div class="menubar">
<!-------MENU BAR-------->
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="store.php">Store</a></li>
    <li><a href="nne">Developer</a></li>
  </ul>
</div>
<div>
   <div class="claimreward">
    <a href="Images/f.png"><button type="claim">Voucher</button></a>
</div>
<div class="jweapon">
        <p class="weaponj">POSil ni</p>
</div>
</section>
<!--//////////CONTAINER STORE SELECTION//////////////////////////--->
<section>
<div>
  <h1 class="Storename" >Store<img src="icons/store-3-fill (2).png"></h1>
</div>
</section>
<section class="section2">
  <div class="storesel">
</div>
</section>
<!--//////////////////////////////////////////////////////////////--->












<!--a///////////////ITEM 1////////////////////////////-->
<section class="ITEMS1">
<div class="item1">
  <div class="itemborder1">
  <img class="awm" src="items/kutsilyo.png" height="120" width="150">
<div>
  <div class="itemname">
    <p><span class="itemnameandprice">AWP / Factory New</span><br><span class="itemprice">₱10.000</span></p>
  </div>
    <form action="addToCart.php" method="post">
     <input type="hidden" name="product" value="AWP">
     <input type="number" name="quantity" class="addtocard1" width="300" placeholder="Quantity">
     <a href="index.php"><button type="submit" class ="btn" value="Add to Cart">ADD CART</button></a>
     </form>
</div>
<div>
    <img class="effectsfireblue" src="effects/blue_header.webp" height="200" width="1450">
</div>
   </div>
   </div>
<!--////////////////////ITEM 2//////////////////////////////////////////-->
<div class="item1">
  <div class="itemborder1">
  <img class="awm" src="items/karambit1.png" height="120" width="150">
<div>
<div class="itemname">
    <p><span class="itemnameandprice">AWP / Factory New</span><br><span class="itemprice">₱10.000</span></p>
  </div>
     <form action="addToCart.php" method="post">
    <input type="hidden" name="product" value="Product 2">
     <input type="number" name="quantity" class="addtocard1" width="300" placeholder="Quantity">
     <a href="store.php"><button type="submit" class ="btn" value="ADD CART">ADD CART</button></a>
     </form>
</div>
</div>
</div>

<!--////////////////////ITEM 3 //////////////////////////////////////////-->
<div class="item1">
  <div class="itemborder1">
  <img class="awm" src="items/butterfly1.png" height="120" width="150">
<div>
<div class="itemname">
    <p><span class="itemnameandprice">AWP / Factory New</span><br><span class="itemprice">₱10.000</span></p>
</div>
    <form action="addToCart.php" method="post">
     <input type="hidden" name="product" value="Product 3">
     <input type="number" name="quantity" class="addtocard1" width="300" placeholder="Quantity">
     <a href="store.php"><button type="submit" class ="btn" value="Add to Cart">ADD CART</button></a>
     </form>
</div>
</div>
</div>
<!--////////////////////ITEM 4//////////////////////////////////////////-->
<div class="item1">
  <div class="itemborder1">
  <img class="awm" src="items/usp1.png" height="120" width="150">
<div>
  <div class="itemname">
    <p><span class="itemnameandprice">AWP / Factory New</span><br><span class="itemprice">₱10.000</span></p>
  </div>
    <form action="addToCart.php" method="post">
     <input type="hidden" name="product" value="Product 4">
     <input type="number" name="quantity" class="addtocard1" width="300" placeholder="Quantity">
     <a href="store.php"><button type="submit" class ="btn" value="Add to Cart">ADD CART</button></a>
    </form>
  </div>
</div>
</div>
</section>
<!--//////////////////SECTION ITEMS 2______ITEMS 1/////////////////////////////////////--->
<section class="ITEMS2">
<div class="item1">
  <div class="itemborder1">
  <img class="awm" src="items/M4A41.png" height="120" width="150">
<div>
     <input type="number" class="addtocard1" width="300" placeholder="Quantity">
</div>
</div>
</div>
<!--////////////////////ITEM 2//////////////////////////////////////////-->
<div class="item1">
  <div class="itemborder1">
  <img class="awm" src="items/awm2.png" height="120" width="150">
<div>
     <input type="number" class="addtocard1" width="300" placeholder="Quantity">
</div>
</div>
</div>
<!--////////////////////ITEM 3//////////////////////////////////////////-->
<div class="item1">
  <div class="itemborder1">
  <img class="awm" src="items/ak1.png" height="120" width="150">
<div>
      <input type="number" class="addtocard1" width="300" placeholder="Quantity">
</div>
</div>
</div>
<!--////////////////////ITEM 4//////////////////////////////////////////-->
<div class="item1">
  <div class="itemborder1">
  <img class="awm" src="items/glove.png" height="120" width="150">
<div>
    <input type="number" class="addtocard1" width="300" placeholder="Quantity">
</div>
</div>
</div>
<div>
</div>
</form>
<!--////////////////////LOCK//////////////////////////////////////////-->

<div class="TRADE_URL1">
  <p>Trade URL :</p>
  <input type="text" name="TRADE_URL" class="TRADE_URL" placeholder="  Ex. https://steamcommunity.com/tradeoffer/new/?partner=                                              REQUIRED" required>
  <div class="viewcart">
      <a href="cart.php"><img src="icons/shopping-cart-2-fill.png">View Cart</a>
  </div>
</div>
</body>
</html>
</form>

<?php
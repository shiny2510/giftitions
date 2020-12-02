<?php

include_once "lib/php/functions.php";
include_once "parts/templates.php";
include_once "data/api.php";


setDefault('s','');
setDefault('t','products_all');
setDefault('orderby_direction','DESC');
setDefault('orderby','date_create');
setDefault('limit','12');

// function makeProductList($r,$o) {
// return $r.<<<HTML
// <div class="col-xs-12 col-md-4">
//    <a href="product_item.php?id=$o->id" class="product-item">
//       <figure>
//          <div class="product-image">
//             <img src="img/store/$o->image_main" alt="">
//          </div>
//          <figcaption class="product-description">
//             <div class="product-price">&dollar;$o->product_price</div>
//             <div class="product-name">$o->product_name</div>
//          </figcaption>
//       </figure>
//    </a>
// </div>
// HTML;
// }
function makeSortOptions() {
   $options = [
      ["date_create","DESC","Latest Products"],
      ["date_create","ASC","Oldest Products"],
      ["price","DESC","Most Expensive"],
      ["price","ASC","Least Expensive"]
   ];
   foreach($options as [$orderby,$direction,$title]) {
      echo "
      <option data-orderby='$orderby' data-direction='$direction'
      ".($_GET['orderby']==$orderby && $_GET['orderby_direction']==$direction ? "selected" : "").">
      $title
      </option>
      ";
   }
}

function makeHiddenValues($arr1,$arr2) {
   foreach(array_merge($arr1,$arr2) as $k=>$v) {
      echo "<input type='hidden' name='$k' value='$v'>\n";
   }
}

$result = makeStatement($_GET['t']);
$products = isset($result['error']) ? [] : $result;

?>

<!DOCTYPE html>
<html lang="en">
<head>
   
   <title>Product List</title>
   <?php include "parts/meta.php" ?>

</head>
<body>
   
   <div class="position-fixed">
   <?php include "parts/stickyhead.php" ?>
   <?php include "parts/mainnavbar.php" ?>
   </div>


   <div class="container">
      
         <h2>Product List</h2>

      <form action="product_list.php" method="get" class="hotdog stack">

         <input type="search" name="s" placeholder="Search for a product"
         value="<?= @$_GET['s'] ?>">

         <?
         makeHiddenValues([
            "orderby"=>$_GET['orderby'],
            "orderby_direction"=>$_GET['orderby_direction'],
            "limit"=>$_GET['limit'],
            "t"=>"search"
         ],[]);
         ?>

         <button type="submit">Search</button>
      </form>

      <div class="display-flex" style="margin:1em 0">
         <div class="flex-none display-flex">
            <form action="product_list.php" method="get">
               <?
               makeHiddenValues($_GET,[
                  "category"=>"fruit",
                  "t"=>"products_by_category"
               ]);
               ?>

               <input type="submit" value="Fruit" class="form-button">
            </form>
            <form action="product_list.php" method="get">
               <?
               makeHiddenValues($_GET,[
                  "category"=>"home decor",
                  "t"=>"products_by_category"
               ]);
               ?>

               <input type="submit" value="Vegetable" class="form-button">
            </form>
         </div>
         <div class="flex-stretch"></div>
         <div class="flex-none">
            
            <form action="product_list.php" method="get">

               <?
               makeHiddenValues($_GET,[]);
               ?>
               <div class="form-select">
                  <select onchange="checkSort(this)">
                     <?=makeSortOptions()?>
                  </select>
               </div>
            </form>
         </div>
      </div>


      <h2>Product List</h2>

      <div class="grid gap">
        
         <?php

         echo array_reduce(
            $products,
            'makeProductList'
         );

         ?>
      </div>
   </div>

</body>
</html>
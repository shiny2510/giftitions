<?php

function makeProductList($r,$o) {
return $r.<<<HTML
<div class="col-xs-12 col-md-4">
   <a href="product_item.php?id=$o->id" class="product-item">
      <figure>
         <div class="product-image">
            <img src="./img/store/$o->image_main" alt="">
         </div>
         <figcaption class="product-description">
            <div class="product-price">&dollar;$o->product_price</div>
            <div class="product-title">$o->product_name</div>
         </figcaption>
      </figure>
   </a>
</div>
HTML;
}



function makeCartList($r,$o) {
return $r.<<<HTML
<div class="display-flex">
   <div class="flex-none image-thumbs">
      <img src="./img/store/$o->image_main">
   </div>
   <div class="flex-stretch">
      <strong>$o->product_name</strong>
      <div>Delete</div>
   </div>
   <div class="flex-none">
      &dollar;$o->product_price
   </div>
</div>
HTML;
}

<?php

@include_once "../lib/php/functions.php";

function getRequires($props) {
   foreach($props as $prop) {
      if(!isset($_GET[$prop])) return false;
   }
   return true;
}


function makeStatement($type) {

   switch($type) {
      case "products_all":
         return MYSQLIQuery("SELECT *
            FROM `products`
            ORDER BY {$_GET['orderby']} {$_GET['orderby_direction']}
            LIMIT {$_GET['limit']}");
         break;


      case "product_by_id":
         if(!getRequires(['id'])) return
            ["error"=>"Missing Properties"];

         return MYSQLIQuery("SELECT *
            FROM `products`
            WHERE `id` = ".$_GET['id']);
         break;


      case "products_by_category":
         if(!getRequires(['category'])) return
            ["error"=>"Missing Properties"];

         return MYSQLIQuery("SELECT *
            FROM `products`
            WHERE `category` = '{$_GET['category']}'
            
            ORDER BY {$_GET['orderby']} {$_GET['orderby_direction']}
            LIMIT {$_GET['limit']}
            ");
         break;


      case "price_above":
         if(!getRequires(['price'])) return
            ["error"=>"Missing Properties"];

         return MYSQLIQuery("SELECT *
            FROM `products`
            WHERE `product_price` > '{$_GET['product_price']}'
            ORDER BY `product_price` DESC
            LIMIT {$_GET['limit']}
            ");
         break;

      case "price_below":
         if(!getRequires(['price'])) return
            ["error"=>"Missing Properties"];

         return MYSQLIQuery("SELECT *
            FROM `products`
            WHERE `product_price` < '{$_GET['product_price']}'
            ORDER BY `product_price` ASC
            LIMIT {$_GET['limit']}
            ");
         break;






      case "search":
         if(!getRequires(['s'])) return
            ["error"=>"Missing Properties"];

         return MYSQLIQuery("SELECT *
            FROM `products`
            WHERE `product_name` LIKE '%{$_GET['s']}%'
            ORDER BY {$_GET['orderby']} {$_GET['orderby_direction']}
            LIMIT {$_GET['limit']}
            ");
         break;




      default: return ["error"=>"No Matched Type"];
   }
}


// if(isset($_GET['t'])) {
//    echo json_encode(
//       makeStatement($_GET['t']),
//       JSON_UNESCAPED_UNICODE |
//       JSON_NUMERIC_CHECK
//    );
// }

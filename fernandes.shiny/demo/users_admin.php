<?php

include "../lib/php/functions.php";

$users = file_get_json("users.json");






function showUserPage($user) {

$classes = implode(", ", $user->classes);



echo <<<HTML

<nav class="nav crumbs">
   <ul>
      <li><a href="{$_SERVER['PHP_SELF']}">back</a></li>
      <li><a href="{$_SERVER['PHP_SELF']}">edit</a></li>
   </ul>
</nav>
<div>
   <h2>$user->name</h2>
   <div>
      <strong>Type</strong>
      <span>$user->type</span>
   </div>
   <div>
      <strong>Email</strong>
      <span>$user->email</span>
   </div>
   <div>
      <strong>Classes</strong>
      <span>$classes</span>
   </div>
</div>


<div>		
	 <form method="post" action="<?php echo {$_SERVER['PHP_SELF']};?>">	
	 		<input type="text" placeholder="$user->name" class="form-input">
            <select  name="user_type" class="form-input" placeholder= "Select Profession">
				  <option selected>Select Profession</option>
				  <option value="teacher">Teacher</option>
				  <option value="singer">Singer</option>
				  <option value="actor">Actor</option>
				  <option value="who knows">Who Knows</option>
				  <option value="chef">Chef</option>
				</select>
            <input type="email" placeholder="$user->email" class="form-input">
            <input type="array" placeholder="$classes" class="form-input">
        	<button class="form-button" type="submit" value="save">SUBMIT</button>
     </form>

</div>

HTML;
}



?><!DOCTYPE html>
<html lang="en">
<head>
   <title>User Administrator</title>

   <?php include "../parts/meta.php"; ?>
</head>
<body>

   <header class="navbar">
      <div class="container display-flex">
         <div class="flex-none">
            <h1>Users Admin</h1>
         </div>
         <div class="flex-stretch"></div>
         <!-- nav.nav.flex-none>ul>li>a[href=#]>{List} -->
         <nav class="nav flex-none">
            <ul>
               <li><a href="<?= $_SERVER['PHP_SELF'] ?>">List</a></li>
            </ul>
         </nav>
      </div>
   </header>

   <div class="container">
      <div class="card soft">

         <?php


         if(isset($_GET['id'])) {

            showUserPage($users[$_GET['id']]);

         } else {

         ?>

         <h2>User List</h2>

         <ul>
         <?php

         for($i=0; $i<count($users); $i++) {
            echo "<li>
            <a href='{$_SERVER['PHP_SELF']}?id=$i'>{$users[$i]->name}</a>
            </li>";
         }

         ?>
         </ul>

         <?php } ?>
      </div>
   </div>
   
</body>
</html>
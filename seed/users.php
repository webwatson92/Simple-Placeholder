<?php
    require '../config/database.php';
    require '../includes/functions.php';
    require '../vendor/autoload.php';


   $faker = Faker\Factory::create();

   for ($i=1; $i <=150 ; $i++) { 
   	  $query = $db->prepare('INSERT INTO users(name, pseudo, email, password)
   	                        VALUES(:name, :pseudo, :email, :password)
   	                        ');
   	  $query->execute([
   	  	            'name' =>$faker->unique()->name,
   	  	            'pseudo' => $faker->unique()->userName,
   	  	            'email' =>$faker->unique()->email,
   	  	            'password' => password_hash('123456', PASSWORD_BCRYPT)
   	  	               ]);
   }
  echo "users added !!!!!!";
 ?>
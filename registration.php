<!DOCTYPE HTML>
<html lang="ru">
 <head>
	<meta  charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
	
	<link rel="stylesheet" href="style.css" type="text/css" media="all" />
	<link rel="shortcut icon" type="image/x-icon" href="img/1.jpg" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<title>Салон красоты</title>
 </head>
 <body>
	<?php require "home.php"?>
<section class="ftco-section">
    <div class="container">
        
        <div class="before_flex_basic">
            
            
                <div class="col_flex flex_basic aside_r_fix_bottom_start servstart">
                    <div class="min_w_200 bg_wh b_rad5 big_shadow">
                        
                        <div class="aside_r_banner_after">
						
						<h1>Форма регистрации<h1><br>
						<div class="lay">
						<form action="signup.php" method="post">
						<input type="text" class="form-control" name="name" id="name" placeholder="Введите имя"><br>
						<input type="text" class="form-control" name="login" id="login" placeholder="Введите логин"><br>
						<input type="password" class="form-control" name="pass" id="pass" placeholder="Введите пароль"><br>
						
						<button class="btn btn-success" type="submit">Зарегистрироваться</button><br><br>
						
						
						
						
						
							
							
						</div
						</form>
						<?php
						$link = mysqli_connect('std-mysql','std_1052_users','vlada123', 'std_1052_users');

						if ($link == false){
							print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
						}
						else {
							print("Соединение установлено успешно");
						}
						?>						
												
						
						
						
						</div>
                    </div>
                </div>                
            </div>  
        </div>  
</section>		
	<?php require "end.php"?>
 </body>
<?php
 require 'function.php'; //import file function.php

 //Cek Login (terdaftar atau tidak)
    if(isset($_POST['login'])){
        $user= $_POST['name'];
        $password = $_POST['password'];

        // Mencocokan dengan database (ada atau tidak)
        $cekdatabase = mysqli_query($conn, "SELECT * FROM akun WHERE username = '$user' AND passwordakun = '$password'"); 
        //Hitung jumlah data
        $hitung = mysqli_num_rows($cekdatabase);

        if($hitung>0){
            echo 'data ada';
        $_SESSION['log'] = 'True';
        header('location:indexadmin.php');
        }else{
            echo 'data tidak ada';
        header('location:login.php');
        };
    };

    if(!isset($_SESSION['log'])){

    }else{
        header('location:index.php');
    }
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Login</title>
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }
            body{
                min-height: 100vh;
                width: 100%;
                background: #67248e;
                font-family: sans-serif;
            }
            .container{
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                max-width:400px;
                width: 100%;
                background: #fff;
                border-radius: 7px;
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
            }
            .container form{
                padding: 2rem;
            }
            .form header{
                margin-top: 1.7rem;
                font-size: 2rem;
                font-weight: 500;
                text-align: center;
                margin-bottom: 0 15px;
            }
            .form input{
                height: 60px;
                width: 100%;
                padding: 0 15px;
                font-size: 17px;
                margin-bottom: 1.3rem;
                border: 1px solid #ddd;
                border-radius: 6px;
                outline: none;
            }
            .form input:focus{
                box-shadow: 0 1px rgba(0, 0, 0, 0.2);
            }
            .form a{
                font-size: 16px;
                color: bisque;
                text-decoration: none;
            }
            .form a:hover{
                text-decoration: underline;
            }
            .form input.button{
                color: #fff;
                background: #67248e;
                font-size: 1.2rem;
                font-weight: 500;
                letter-spacing: 1px;
                margin-top: 1.7rem;
                cursor: pointer;
                transition: 0.4s;
            }
            button{

                color: #fff;
                background: #67248e;
                font-size: 1.2rem;
                font-weight: 500;
                letter-spacing: 1px;
                margin-top: 1.7rem;
                cursor: pointer;
                transition: 0.4s;
                
                height: 60px;
                width: 100%;
                padding: 0 15px;
                font-size: 17px;
                margin-bottom: 1.3rem;
                border: 1px solid #ddd;
                border-radius: 6px;
                outline: none;
                
            }
            .form input.button:hover{
                background: #8f39da;
            }
        </style>
    </head>
    <body>
        <div class ="container">
        <div class="login form">                   
             <header>Login</header>
             <form method="post">
               
                    <label for="inputEmail">Nama Akun</label>
                    <input class="form-control" name="name" id="inputUsername" type="text" placeholder="Masukan Nama Akun" />
               
                
                    <label for="inputPassword">Password</label>
                    <input class="form-control" name="password" id="inputPassword" type="password" placeholder="Masukan Password" />
                
                
                    <button class="btn"  name="login">Login</button>
                
            </form>
        </div> 
        </div>    
    </body>
</html>

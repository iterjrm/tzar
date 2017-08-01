<?php
    ob_start ( ) ;
    session_start ( ) ;
    $login_message = "" ;
    if ( require 'connect.php' ) {
        if ( isset ( $_SESSION [ 'tid' ] ) === true ){
            $login_message = "Seems You're already logged in " ;
            header('Location: profile/index.php');  
        } 
        if ( ( isset ( $_POST [ 'tid' ] )) && ( isset ( $_POST [ 'password' ] )) && !( isset ( $_SESSION [ 'tid' ] )) ) {
            $tid = strtoupper($_POST [ 'tid' ]) ;
            $password = $_POST [ 'password' ] ;
           
            if ( !( empty ( $tid ) ) && !( empty ( $password ) )   ) {
                $checkuserlogin = $conn -> prepare ( 'SELECT * FROM kart.treg WHERE tid = ? ;' ) ;
                $checkuserlogin -> execute ( array ( $tid) ) ;
                $loginarray = $checkuserlogin -> fetch ( ) ;
                    if ( $password == $loginarray [ 'password' ] ) {
                        if ( ( $_SESSION [ 'tid' ] = $loginarray [ 'tid' ] ) && ( $_SESSION [ 'tname' ] = $loginarray [ 'tname' ] ) && ( $_SESSION [ 'email' ] = $loginarray [ 'email' ] ) ) {
                            $login_message = "Logging You in..." ;
                            if($_SESSION [ 'tid' ] == "jrm" || $_SESSION [ 'tid' ] == "ajit")
                        {
                             header ( "Location: profile/jrmview.php" ) ;
                        }
                        else{header ( "Location: profile/index.php" ) ;}

                       
                            
                        }

                        else $login_message = "Couldn't log You in" ;
                    }

                    elseif (( $_SESSION [ 'tid' ] = $loginarray [ 'tid' ] ) && $password != $loginarray [ 'password' ]) {
                    	$login_message = "Invalid Password" ;
                    	# code...
                    }
                    else {
                        $login_message = "Either this Account Isn't Registered With Us or the Registration Has Been Disabled Due To Non Payment<br />" ;
                    }
            }
            else $login_message = "Oops! Couldn't log you in. Invalid credentials. :(" ;
        }
    }
    else $login_message = "Sorry! Internal error occurred" ;
?>




<!DOCTYPE html>
<html>
<head>

<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<title></title>
</head>

<style type="text/css">
	
	body {
    background: url('http://www.atvchampionship.com/wp-content/uploads/2017/06/Day-Endurance-Race-line-up.jpg') no-repeat fixed center center;
    background-size: cover;
    font-family: Montserrat;
}

.logo {
    width: 213px;
    height: 80px;
    background: url('https://www.atvchampionship.com/wp-content/uploads/2017/06/Logo-final-final-max-MEGAATV.jpg?w=1080&ssl=1') no-repeat;
    margin: 30px auto;
}

.login-block {
    width: 320px;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    border-top: 5px solid #ff656c;
    margin: 0 auto;
}

.login-block h1 {
    text-align: center;
    color: #000;
    font-size: 18px;
    text-transform: uppercase;
    margin-top: 0;
    margin-bottom: 20px;
}

.login-block input {
    width: 100%;
    height: 42px;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #ccc;
    margin-bottom: 20px;
    font-size: 14px;
    font-family: Montserrat;
    padding: 0 20px 0 50px;
    outline: none;
}

.login-block input#username {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#username:focus {
    background: #fff url('http://i.imgur.com/u0XmBmv.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input#password {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px top no-repeat;
    background-size: 16px 80px;
}

.login-block input#password:focus {
    background: #fff url('http://i.imgur.com/Qf83FTt.png') 20px bottom no-repeat;
    background-size: 16px 80px;
}

.login-block input:active, .login-block input:focus {
    border: 1px solid #ff656c;
}

.login-block button {
    width: 100%;
    height: 40px;
    background: #ff656c;
    box-sizing: border-box;
    border-radius: 5px;
    border: 1px solid #e15960;
    color: #fff;
    font-weight: bold;
    text-transform: uppercase;
    font-size: 14px;
    font-family: Montserrat;
    outline: none;
    cursor: pointer;
}

.login-block button:hover {
    background: #ff7b81;
}

</style>
<body>

<div class="logo"></div>
<div class="login-block">

    <h1>Login</h1>
    <form id="login-form" class="form-validate" name="login-form" method="post" action="">
    <input type="text" name="tid" value="" placeholder="Team ID or E-mail" id="username" />
    <input type="password" name="password" placeholder="Password" id="password" />
    <button type="submit">Login</button></form>
    <br>
    <a href="/register"><button >Register</button>


  	
   <?php
                if ( ( isset ( $login_message ) === true ) && ( empty ( $login_message ) === false ) ) :
            ?>
            <strong><?php echo $login_message ; echo $loop; ?></strong>
            <?php
                endif ;
            ?>
</div>
</body>
</html>






<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

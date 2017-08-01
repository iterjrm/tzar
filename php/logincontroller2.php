<?php
    ob_start ( ) ;
    session_start ( ) ;
    $login_message = "" ;
    if ( require '../php/connect.php' ) {
        if ( isset ( $_SESSION [ 'email' ] ) === true ){
            $login_message = "Seems You're already logged in " ;
            header('Location: profile/index.php');  
        } 
        if ( ( isset ( $_POST [ 'email' ] )) && ( isset ( $_POST [ 'password' ] )) && !( isset ( $_SESSION [ 'email' ] )) ) {
            $email =  $_POST [ 'email' ];
            $password = $_POST [ 'password' ] ;
           
            if ( !( empty ( $email ) ) && !( empty ( $password ) )   ) {
                $checkuserlogin = $conn -> prepare ( 'SELECT * FROM trainuserprof WHERE email = ? ;' ) ;
                $checkuserlogin -> execute ( array ( $email) ) ;
                $loginarray = $checkuserlogin -> fetch ( ) ;
                    if ( $password == $loginarray [ 'password' ] ) {
                        if ( ( $_SESSION [ 'email' ] = $loginarray [ 'email' ] ) && ( $_SESSION [ 'fname' ] = $loginarray [ 'fname' ] ) && ( $_SESSION [ 'email' ] = $loginarray [ 'email' ] ) ) {
                            $login_message = "Logging You in..." ;
                            
                            header ( "Location: ../profile/index" ) ;

                       
                            
                        }

                        else $login_message = "Couldn't log You in" ;
                    }

                    elseif (( $_SESSION [ 'email' ] = $loginarray [ 'email' ] ) && $password != $loginarray [ 'password' ]) {
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




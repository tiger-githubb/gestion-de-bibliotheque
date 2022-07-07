<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login Form</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body>

<?php
 $emailmsg="";
 $pasdmsg="";
 $msg="";

 $ademailmsg="";
 $adpasdmsg="";


 if(!empty($_REQUEST['ademailmsg'])){
    $ademailmsg=$_REQUEST['ademailmsg'];
 }

 if(!empty($_REQUEST['adpasdmsg'])){
    $adpasdmsg=$_REQUEST['adpasdmsg'];
 }

 if(!empty($_REQUEST['emailmsg'])){
    $emailmsg=$_REQUEST['emailmsg'];
 }

 if(!empty($_REQUEST['pasdmsg'])){
  $pasdmsg=$_REQUEST['pasdmsg'];
}

if(!empty($_REQUEST['msg'])){
    $msg=$_REQUEST['msg'];
 }

 ?>



<div class="container login-container">
<div class="row"><h4><?php echo $msg?></h4></div>
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>Connexion des étudiants et prof </h3>
                    <form action="login_server_page.php" method="get">
                        <div class="form-group">
                            <input type="email" class="form-control" name="login_email" placeholder="Votre e-mail *" value="" />
                        </div>
                        <Label style="color:red">*<?php echo $emailmsg?></label>
                        <div class="form-group">
                            <input type="password" class="form-control" name="login_pasword"  placeholder="Votre mot de passe *" value="" />
                        </div>
                        <Label style="color:red">*<?php echo $pasdmsg?></label>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Connexion" />
                        </div>
                    </form>
                </div>
                <div class="col-md-6 login-form-2">
                    <h3>Admin Connexion</h3>
                    <form action="loginadmin_server_page.php" method="get">
                        <div class="form-group">
                            <input type="email " class="form-control" name="login_email" placeholder="Votre e-mail *" value="" />
                        </div>
                        <Label style="color:red">*<?php echo $ademailmsg?></label>
                        <div class="form-group">
                            <input type="password" class="form-control" name="login_pasword"  placeholder="Votre mot de passe *" value="" />
                        </div>
                        <Label style="color:red">*<?php echo $adpasdmsg?></label>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Connexion" />
                        </div>
                        <div class="form-group">

                            <a href="#" class="ForgetPwd" value="Login">Mot de passe oublié?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script src="" async defer></script>
    </body>
</html>
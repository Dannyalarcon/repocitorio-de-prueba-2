<?php


    if(!empty($_POST)){
        if (empty($_POST['usuario']) || empty($_POST['clave'])){
            $alert = "Ingrese su usuario y su clave";
        }else{
            require_once "conexion.php";

            $user = mysqli_real_escape_string($conexion,$_POST['usuario']);
            $pass =md5(mysqli_real_escape_string($conexion,$_POST['clave']));

            $query = mysqli_query($conexion,"SELECT * FROM usuario where usuario = '$user' and clave = '$pass'");
            mysqli_close($conexion);
            $result = mysqli_num_rows($query);
            
            if($result > 0){

                $data = mysqli_fetch_array($query);
                
                $_SESSION['active'] = true;
                $_SESSION['idusuario'] = $data['idusuario'];
            
                $_SESSION['user'] = $data['usuario'];

                $_SESSION['pass'] = $data['clave'];

                header('location: entrada.php');
            }else{
                //echo "no manda nada";
                $alert = "El usuario o la clave son incorrectos";
                session_destroy();
            }

        }
    }


?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="icon" href="logo.png" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <title>Biblioteca</title>
    </head>
    <style>
        body{
            /*crea una gradiente de dos colores de color en pantalla completa*/
            background: #1E1E1E ;
            height: 100vh;
            background-repeat: no-repeat;
            background-attachment: fixed;

        }
        .card-container.card {
            /*ajusta la tarjeta mas pequeña con el contenedor*/
            max-width: 350px;
            padding: 40px 40px;
            border-radius: 15px;
        }
        .card {
            background-color: rgba(255, 255, 255, 0.17);
            padding: 20px 25px 30px;
            margin: 0 auto 25px;
            margin-top: 50px;/*<-ajusta la tarjeta un poco abajo*/
            /*parte de abajo sirve para la sombra de la tarjeta*/
            -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        }
        .profile-img-card {
            /*ajusta la imagen(logo) que esta dentro de la tarjeta*/
            width: 250px;
            height: 250px;
            margin: 0 auto ;
            display: block;

        }
        /*
         * Form styles
         */
        .form-signin input,
        .form-signin input,
        .form-signin input{
            margin-bottom: 10px;
        }
        .btn.btn-signin {
            background-color: #ab47bc;
            padding: 0px;
            font-weight: 700;
            font-size: 14px;
            height: 36px;
            border-radius: 3px;
            border: none;
        }
        .btn.btn-signin:hover,
        .btn.btn-signin:active,
        .btn.btn-signin:focus {
            background-color: #9D34FF;
        }
h3{
    text-align: center;
    font-size: 50px;
    color: white;
}
    </style>
    <body>
        <div class="container">
            <div class="card card-container">
                <img id="profile-img" class="profile-img-card" src="logo.png" />
                <h3>BIBLIOTECA</h3>
                <form class="form-signin" action="" method="post">
                    
                    <span id="reauth-email" class="reauth-email"></span>
                    <input type="text" name="usuario" class="form-control" placeholder="Usuario">
                    <input type="password" name="pass" class="form-control" placeholder="Contraseña">
                    <div class="alert"><?php echo isset($alert)? $alert : '';  ?></div>

                    <div>
                    <input type="submit" name="INGRESAR" value="INGRESAR" class="btn btn-primary btn-block">

                    </div>
                </form>
            </div>
        </div>
    </body>
</html>

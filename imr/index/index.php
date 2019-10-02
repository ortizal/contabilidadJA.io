<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.css">
    <title>Inicio</title>
</head>
<body>
    <header> <h1>BIENVENIDO</h1> 
    <nav><h2>CASH - JAO - BROTHERS</h2></nav>
    </header>
    <section>
    <main class=login-box>
        <form action="../Cash-money/php-or/imr/into/int_insert.php" method="POST">
            <img src="../../imagenes/logotipo.jpg" class="avatar" alt="Imagen logo">
            <h3> INICIO DE SESION</h3>
            <label> USUARIO <input type="text" name="txt_usuario" id="usname"  placeholder="USUARIO"></label>
            <label> CONTRASEÑA <input type="password" name="txt_pasword" id="pasword" placeholder="CONTRASEÑA">
            <label><button type="submit" onclick="singin()" class="btn"> Iniciar </button></label>                     
        </form>
     <br>
     <label><button type="submit" onclick="registrarse()" class="btn"> Registrarse </button></label>
    </main>  
    </section>
    <footer> 
    &copy;2019 &bull; Brothers &bull; JAO &bull; CASH &bull; <span id="currentdate"></span>
    </footer>
    <script src="index.js"> </script>    
</body>
</html>
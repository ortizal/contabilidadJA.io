<?php
    include ('../../conexion/conexion.php');
    $usuario = $_POST['txt_usuario'];
    $pasword = $_POST['txt_pasword'];
    $res= "SELECT * from usuarios where usr_usuario ='.$usuario.' and usr_pasword ='.$pasword.'";
    $resultado = mysqli_query($conexion, $res);
    $array= mysqli_fetch_array($resultado) ;

    if($array['usr_usuario'] = $usuario ){
        if  ($array['usr_pasword'] = $pasword){                    
           header("Location: ../menu/menu.php");
        }elseif($array['usr_pasword'] != $pasword){
           header("Location: index.php");          
    }   
     } else {
            header("Location: index.php");        
         }
?>
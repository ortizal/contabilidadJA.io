<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width-divice-width, initial-scale=1">
        <title>Diarios</title>
        <meta name= "description">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="../../imr/menu/menu.css">
        <link rel="stylesheet" href="diarios.css">
        <link href="https://fonts.googleapis.com/css?family=Gugi|Quattrocento" rel="stylesheet">
    </head>
    <body>
        <nav >
            <ul class="menu">
                <li><a href="">CONTABILIDAD</a>
                <ul>
                    <li><a href="../plan_de_cuentas/plan_de_cuentas.php">PLAN DE CUENTAS</a></li>
                    <li><a href="diarios.php">DIARIOS</a></li>
                    <li><a href="../egresos/egresos.php">EGRESOS</a></li>
                    <li><a href="../notas_de_creditos/notas_de_credito.php">NOTAS DE CRÉDITOS</a></li>
                    <li><a href="../notas_debito/notas_debitos.php">NOTAS DE DÉBITOS</a></li>
                    <li><a href="../rol_de_pagos/rol_de_pagos.php">ROL DE PAGOS</a></li>
                    <li><a href="../depreciaciones/depreciaciones.php">DEPRECIACIONES</a></li>
                </ul></li>
                <li><a href="">COMPRAS</a>
                <ul>
                   <li><a href="../../compras/compras/compras.php">COMPRAS</a></li>
                   <li><a href="../../compras/proveedores/proveedores.php">PROVEEDORES</a></li>
                   <li><a href="../../compras/cuentas_a_pagar/cuentas_a_pagar.php">CUENTAS A PAGAR</a></li>
                   <li><a href="../../compras/retenciones/retenciones.php">RETENCIONES</a></li>
                   <li><a href="../../compras/formas_de_pagos/formas_de_pagos.php">FORMAS DE PAGO</a></li>
                   <li><a href="../../compras/facturacion_electronica/facturacion_electronica.php">FACTURACION ELECTRONICA</a></li>
                </ul></li>
                <li><a href="">VENTAS</a>
                <ul>
                   <li><a href="../../ventas/ventas/ventas.php">VENTAS</a></li>
                   <li><a href="../../ventas/clientes/clientes.php">CLIENTES</a></li>
                   <li><a href="../../ventas/cuentas_por_cobrar/cuentas_por_cobrar.php">CUENTAS POR COBRAR</a></li>
                   <li><a href="../../ventas/retenciones/retenciones.php">RETENCIONES</a></li>
                   <li><a href="../../ventas/facturacion_electronica/facturacion_electronica.php">FACTURACION ELECTRONICA</a></li>
               </ul></li>
                <li><a href="">INVENTARIOS</a>
                <ul>
                   <li><a href="../../inventarios/productos/productos.php">PRODUCTOS</a></li>
                   <li><a href="../../inventarios/kardex/kardex.php">KARDEX</a></li>
               </ul></li>
                <li><a href="../../reportes/reportes/reportes.php">REPORTES</a></li>
                <li><a href="">BANCOS</a>
                <ul>
                   <li><a href="../../bancos/crear_banco/crear_banco.php">CREAR BANCO</a></li>
                   <li><a href="../../bancos/conciliacion_bancaria/conciliacion_bancaria.php">CONCILIACION BANCARIA</a></li>
                   <li><a href="../../bancos/tarjetas_de_creditos/tarjetas_de_creditos.php">TARJETAS DE CRÉDITOS</a></li>
                   <li><a href="../../bancos/libro_bancos/libro_bancos.php">LIBRO BANCOS</a></li>
               </ul></li>
                <li><a href="../../estados_financieros/estados_financieros/estados_financieros.php">ESTADOS FINANCIEROS</a>
                <li><a href="../../parametros/parametros/parametros.php">PARÁMETROS</a></li>
                <li><a href="../../nomina/nomina/nomina.php">NÓMINA</a></li>
                <li><a href="../../impuestos/impuestos/impuestos.php">IMPUESTOS</a></li>
                <li><a href="../../activos_fijos/activos_fijos/activos_fijos.php">ACTIVOS FIJOS</a></li>
            </ul></li>
        </nav> 
        <a href="../../imr/menu/menu.php"><img src="../../imagenes/menu.jpg" width="70" height="70" alt=""id="menuIcono"></a>
        <section>     
         <form action="diarios_insertar.php" method="POST">
         <fieldset id ="tablaingreso"> 
          <legend>Ingreso de Datos</legend>
           <table>
              <tr>
                <td>Numero diario:
                  <input type="text" name="txt_numDiario" disabled placeholder="AUTOMATICO">
                  Fecha:
                  <input type="date" name="txt_fecha" placeholder="AAAA-MM-DD">
                </td>
              </tr>
              <tr>
                <td>Concepto :
                 <input type="text" name="txt_concepto" size="60px"> 
                </td>
              </tr>
              <tr>
                <td>Modulo :
                  <input type="radio" name="txt_modulo" checked value ="debe"/>Debe <input type="text" name="txt_debe">
                  <input type="radio" name="txt_modulo"value ="haber"/>Haber <input type="text" name="txt_haber">
                </td>
              </tr>
              <tr>
                <td>Referencia:
                   <input type="text" name="txt_referencia">
                </td>
              </tr>
              <tr>
                <td> Cuenta:
                  <input type="text" name="txt_cuenta">
                  <button type="submit">Agregar</button>
                </td>
              </tr>
           </table>
         </fieldset>
         <fieldset id="tabladatos">
          <legend>Datos para visualizar</legend>
          <table id="datos">
            <tbody>
             <tr>
              <th>Modulo</th>
              <th>Cuenta</th>
              <th>Referencia</th>
              <th>Concepto</th>
              <th>Debe</th>
              <th>Haber</th>
              <th colspan ="2" text-align="center"> Operaciones</th>
             </tr>  
             <?php 
             include ("../../conexion/conexion.php");
             $query= "SELECT * FROM diarios";
             $resultado = $conexion->query($query);
             while($row=$resultado->fetch_assoc()){
              ?>
              <tr>
              <td><?php echo $row['drs_modulo']?></td>
              <td><?php echo $row['drs_cuenta']?></td>
              <td><?php echo $row['drs_referencia']?></td>
              <td><?php echo $row['drs_concepto']?></td>
              <td><?php echo $row['drs_debe']?></td>
              <td><?php echo $row['drs_haber']?></td>
              <td text-align="center"><a href="diarios_modificar.php?id=<?php echo $row['drs_id']?>"><img src="../../imagenes/editar.png"  width="15" height="15"alt=""></a></td>
              <td text-align="center"><a href="diarios_eliminar.php?id=<?php echo $row['drs_id']?>"><img src="../../imagenes/borrar.png"  width="15" height="15"alt=""></a></td>
              </tr>
              <?php   
            }
              ?>                                  

            </tbody>
          </table>
          <table id="tablaTotal">
                  <?php 
                    $consulta='SELECT sum(drs_debe) as suma from diarios';
                    $sumadebe = $conexion->query($consulta);
                    $row=$sumadebe->fetch_assoc() 
                    ?>
                    <td>Total</td>
                    <td><?php echo $row?></td>
                    <td>Suma de haber</td>
                    <td>Diferencia</td>
                    <td>Debe-Haber</td>
                </table>
         </fieldset>
         </form>
        </section>
       <footer id="footer">
         &copy;2019 &bull; Brothers &bull; JAO &bull; CASH &bull; <span id="currentdate"></span>
       </footer>
        <script src="../../imr/menu/menu.js"> </script>
    </body>
</html>
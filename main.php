<!DOCTYPE html>
<html>  
<head>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<?PHP
  extract($_REQUEST);
?>
    </head>  

  <body>
        
        <nav class="navbar navbar-expand-lg navbar-dark"  style="background-color:#607D8B;">
        <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
 
  </button>
      <img src="imagenes/logo.png" alt="">
      <?PHP
        $conexion = mysqli_connect ("localhost", "root", "")
         or die ("No se puede conectar con el servidor");

   // Seleccionar base de datos
      mysqli_select_db ( $conexion, "primerparcial_2019")
         or die ("No se puede seleccionar la base de datos");

   // Enviar consulta
      $instruccion = "select * from menu";
      $consulta = mysqli_query ( $conexion, $instruccion)
      or die ("Fallo en la consulta");
      $nfilas = mysqli_num_rows ($consulta);
      if($nfilas>0){
   
        for($i=0; $i<$nfilas; $i++){
          
          $resultado = mysqli_fetch_array ($consulta);

            
             //print($resultado['label']);
             print('<a class="nav-link" href="'.$resultado['link'].'">'.$resultado['label'].'</a>');

             
        }
      
               
      
    }
        mysqli_close ($conexion);

?>

    </div>
  </nav>
 </body>
</html>
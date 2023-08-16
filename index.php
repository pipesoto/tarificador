<?php 

	$conexion=mysqli_connect('34.176.13.110','admin','admin1248!','bxp');

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarificador</title>
    <link rel="stylesheet" href="./css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
</head>

<body>
  <div class="navegador">
    <nav class="navbar navbar-dark bg-primary">
        <div class="container">
          <a class="navbar-brand" href="#">
            <img src="./img/ZED4.png" alt="logo">
          </a>
             <div class="saldo">
              <input type="text" class="form-control" placeholder="Saldo: $ 340.000">
             </div>
            <div class="botonSolictar">
            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Solicitar Créditos
            </button>
            </div>
            
        </div>
        
      </nav>
    </div>
      
      <div class="tarificador">
        <div class="encabezado">
            <i class="uil uil-tachometer-fast-alt"></i>
            <span class="text">Tarificador</span>
        </div>
        
<div class="boxes">
  <?php 
		$sql="select total from tarificador  where fecha_llamadas > CURRENT_DATE order by fecha_llamadas desc limit 1";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>
	
<div class="box box1">
    <span class="text">Depredador</span>
    <span class="number">$ <?php echo $mostrar['total'] ?></span>
</div>
<div class="box box2">
    <span class="text">Transferencia</span>
    <span class="number">$ 100.000</span>
</div>


<div class="box box3">
    <span class="text">Total</span>
    <span class="number">$ 240.000</span>
</div>
</div>
<?php 
	}
	 ?>
</div>
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog .modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Solicitud de créditos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Para solicitar créditos debes seguir los siguientes pasos </p>
        <ol>
          <li>Realizar Transferencia a empresa Zed</li>
          <ul>
            <li><strong> Numero de Rutt:</strong> 77.327.308-1</li>
            <li><strong> Numero de cuenta:</strong></li>
            <li><strong>Correo electrónico:</strong></li>
            <li><strong>Numero de cuenta:</strong></li>
        </ul>
          <li>Luego indicar en transferencia el asunto: Creditos + cantidad</li>
          <li>Verificaremos depósito y activación de créditos.</li>
        </ol>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <!-- <button type="button" class="btn btn-warning"  role="link" onclick="window.location='./contacto.html'">Llenar Formulario</button> -->
      </div>
    </div>
  </div>
</div>
<script src="./js/modal.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> 
</body>
</html>
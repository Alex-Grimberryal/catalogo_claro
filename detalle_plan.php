<?php require_once "templates/head.php";
require_once "controller/bd.php";

if (isset($_GET['codigo'])) {
  $codigo = $_GET['codigo'];
} else {
  echo "valor incorrecto";
}
$sql = "SELECT * fROM planes_movil where cod_promo =$codigo";
$resultado = $con->query($sql);
$resultado = $resultado->fetchAll(PDO::FETCH_ASSOC);
foreach ($resultado as $img) {
  echo "<img src='public/img/" . $img['img_prom'] . "' alt='' class='responsive-image'>";
}
?>
<div class="d-flex align-items-center justify-content-around btns" style="height: 50vh; background-color: #DA291C; ">
  <div class="col-md-6">
    <a href="index.php" class="btn btn-secondary btn-lg btn-block">Inicio</a>
  </div>
  <a href="https://api.whatsapp.com/send/?phone=51902430825&amp;text=%C2%A1Hola%20TiendaBot!%20Deseo%20adquirir%20mi%20Chip%20Postpago%20y%20Portar%20a%20Claro" target="_blank"  class="btn btn-secondary btn-lg btn-block justify-content-center">
    <i class="fab fa-whatsapp mr-2"></i>
    Contactar
  </a>
  <div class="col-md-6">
    <a href="moviles.php" class="btn btn-secondary btn-lg btn-block">Volver</a>
  </div>
  
</div>
 <?php require_once "templates/footer.php"; ?>
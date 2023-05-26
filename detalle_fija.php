<?php require_once "templates/head.php";
require_once "controller/bd.php";

if (isset($_GET['codigo'])) {
  $codigo = $_GET['codigo'];
} else {
  echo "valor incorrecto";
}
$sql = "SELECT * fROM planes_fija where cod_promofija =$codigo";
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
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Seleccione el plan del que requiera información</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul class="list-group">
            <?php 
              $sql = "SELECT * fROM planes_fija ";
              $resultado = $con->query($sql);
              $resultado = $resultado->fetchAll(PDO::FETCH_ASSOC);
              foreach ($resultado as $plan) {
                echo "<li class='list-group-item'>";
                echo "<input class='form-check-input me-1' type='radio' name='listGroupRadio' value='primeraRadio' id='primerRadio' checked>";
                echo "<label class='form-check-label' for='primerRadio'>" . $plan['nombre_prom'] . "</label>";
                echo "</li>";
              }
            ?>
            
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary" onclick="enviar()">Enviar</button>
        </div>
      </div>
    </div>
  </div>
  <a href="https://api.whatsapp.com/send/?phone=51902430825&amp;text=%C2%A1Hola%20TiendaBot!%20Deseo%20adquirir%20mi%20Chip%20Postpago%20y%20Portar%20a%20Claro" target="_blank" class="btn btn-secondary btn-lg btn-block justify-content-center">
    <i class="fab fa-whatsapp mr-2"></i>
    Contactar
  </a>
  <div class="col-md-6">
    <a href="fijas.php" class="btn btn-secondary btn-lg btn-block">Volver</a>
  </div>

</div>
<?php require_once "templates/footer.php"; ?>
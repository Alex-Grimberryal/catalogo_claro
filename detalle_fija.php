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
<div class="d-flex align-items-center justify-content-around btns" style="height: 26vh; background-color: #DA291C; ">
  <div class="col-md-6">
    <a href="index.php" class="btn btn-secondary btn-lg btn-block">Inicio</a>
  </div>
  <!-- Button trigger modal -->
  <div class="col-md-6">
    <button type="button" class="btn btn-secondary btn-lg btn-block" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Selecciona tu mejor opcion</button>
  </div>
  <!-- Modal principal -->
  <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Sleccione la modalidad de su preferencia</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Tenemos las mejores ofertas para ti!!!
          <?php
          if ($codigo == 1) {
            $codigo = 1;
            $sql = "SELECT * fROM planes1play WHERE cod_promofija =$codigo";
            $resultado = $con->query($sql);
            $resultado = $resultado->fetchAll(PDO::FETCH_ASSOC);
            echo "<div class='modal-body'>";
            echo " <h2>Planes 1play</h2>";

            echo "<ul class='list-group'>";
            foreach ($resultado as $plan) {
              echo "<li class='list-group-item'>" . $plan['nombrePlan'] . "<a style='margin-left:50px;' class='btn btn-secondary btn-lg btn-block justify-content-end' href='https://api.whatsapp.com/send/?phone=51902430825&amp;text=%C2%A1Hola%20TiendaClaro%21%20Deseo%20m%C3%A1s%20informaci%C3%B3n%20sobre%20el%20" . $plan['nombrePlan'] . "' target='_blank'><i class='fab fa-whatsapp mr-2'></i>Contactar</a></label>";
            }
            echo "</ul>";
            echo  "</div>";
          }
          if ($codigo == 2) {
            echo    '<div class="card">';
            echo    '    <div class="d-flex justify-content-evenly">';
            echo    '        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">2Play</button>';
            echo    '        <button class="btn btn-primary" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal">2Play Avanzado</button>';
            echo    '        <button class="btn btn-primary" data-bs-target="#exampleModalToggle4" data-bs-toggle="modal">2Play Superior</button>';
            echo    '    </div>';
            echo    '</div>';
          }
          if ($codigo == 3) {
            echo    '<div class="card">';
            echo    '    <div class="d-flex justify-content-evenly">';
            echo    '        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">3Play Avanzado</button>';
            echo    '        <button class="btn btn-primary" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal">3Play Superior</button>';
            echo    '    </div>';
            echo    '</div>';
          }
          ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- 1er modal secundario -->
  <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Modal 2</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <?php
          if ($codigo == 2) {
            $codigo = 2;
            $sql = "SELECT * fROM planes1play WHERE tipo_plan = 'planes2playsimple'";
            $resultado = $con->query($sql);
            $resultado = $resultado->fetchAll(PDO::FETCH_ASSOC);
            echo "<div class='modal-body'>";
            echo    "<h2>Planes 2play</h2>";
            echo        "<ul class='list-group'>";
            foreach ($resultado as $plan) {
              echo            "<li class='list-group-item'>" . $plan['nombrePlan'] . "<a style='margin-left:50px;' class='btn btn-secondary btn-lg btn-block justify-content-end' href='https://api.whatsapp.com/send/?phone=51902430825&amp;text=%C2%A1Hola%20TiendaClaro%21%20Deseo%20m%C3%A1s%20informaci%C3%B3n%20sobre%20el%20" . $plan['nombrePlan'] . "' target='_blank'><i class='fab fa-whatsapp mr-2'></i>Contactar</a></label>";
            }
            echo        "</ul>";
            echo  "</div>";
          }
          if ($codigo == 3) {
            $codigo = 3;
            $sql = "SELECT * fROM planes1play WHERE tipo_plan = 'planes3playavanzado'";
            $resultado = $con->query($sql);
            $resultado = $resultado->fetchAll(PDO::FETCH_ASSOC);
            echo "<div class='modal-body'>";
            echo    "<h2>Planes 3play Avanzado</h2>";
            echo        "<ul class='list-group'>";
            foreach ($resultado as $plan) {
              echo            "<li class='list-group-item'>" . $plan['nombrePlan'] . "<a style='margin-left:50px;' class='btn btn-secondary btn-lg btn-block justify-content-end' href='https://api.whatsapp.com/send/?phone=51902430825&amp;text=%C2%A1Hola%20TiendaClaro%21%20Deseo%20m%C3%A1s%20informaci%C3%B3n%20sobre%20el%20" . $plan['nombrePlan'] . "' target='_blank'><i class='fab fa-whatsapp mr-2'></i>Contactar</a></label>";
            }
            echo        "</ul>";
            echo  "</div>";
          }
          ?>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
        </div>
      </div>
    </div>
  </div>

  <!-- 2do modal secundario -->
  <div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel3" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalToggleLabel3">Modal 3</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <?php
          if ($codigo == 2) {
            $sql = "SELECT * fROM planes1play WHERE tipo_plan = 'planes2playavanzado'";
            $resultado = $con->query($sql);
            $resultado = $resultado->fetchAll(PDO::FETCH_ASSOC);
            echo "<div class='modal-body'>";
            echo    "<h2>Planes 2play Avanzado</h2>";
            echo        "<ul class='list-group'>";
            foreach ($resultado as $plan) {
              echo            "<li class='list-group-item'>" . $plan['nombrePlan'] . "<a style='margin-left:50px;' class='btn btn-secondary btn-lg btn-block justify-content-end' href='https://api.whatsapp.com/send/?phone=51902430825&amp;text=%C2%A1Hola%20TiendaClaro%21%20Deseo%20m%C3%A1s%20informaci%C3%B3n%20sobre%20el%20" . $plan['nombrePlan'] . "' target='_blank'><i class='fab fa-whatsapp mr-2'></i>Contactar</a></label>";
            }
            echo        "</ul>";
            echo  "</div>";
          }
          if ($codigo == 3) {
            $sql = "SELECT * fROM planes1play WHERE tipo_plan = 'planes3playsuperior'";
            $resultado = $con->query($sql);
            $resultado = $resultado->fetchAll(PDO::FETCH_ASSOC);
            echo "<div class='modal-body'>";
            echo " <h2>Planes 3play Superior</h2>";
            echo "<ul class='list-group'>";
            foreach ($resultado as $plan) {
              echo "<li class='list-group-item'>" . $plan['nombrePlan'] . "<a style='margin-left:50px;' class='btn btn-secondary btn-lg btn-block justify-content-end' href='https://api.whatsapp.com/send/?phone=51902430825&amp;text=%C2%A1Hola%20TiendaClaro%21%20Deseo%20m%C3%A1s%20informaci%C3%B3n%20sobre%20el%20" . $plan['nombrePlan'] . "' target='_blank'><i class='fab fa-whatsapp mr-2'></i>Contactar</a></label>";
            }
            echo "</ul>";
            echo  "</div>";
          }
          ?>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
        </div>
      </div>
    </div>
  </div>

  <!-- 3er modal secundario -->
  <div class="modal fade" id="exampleModalToggle4" aria-hidden="true" aria-labelledby="exampleModalToggleLabel4" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalToggleLabel4">Modal 4</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <?php
          if ($codigo == 2) {
            $sql = "SELECT * fROM planes1play WHERE tipo_plan = 'planes2playsuperior'";
            $resultado = $con->query($sql);
            $resultado = $resultado->fetchAll(PDO::FETCH_ASSOC);
            echo "<div class='modal-body'>";
            echo    "<h2>Planes 2play Superior</h2>";
            echo        "<ul class='list-group'>";
            foreach ($resultado as $plan) {
              echo            "<li class='list-group-item'>" . $plan['nombrePlan'] . "<a style='margin-left:50px;' class='btn btn-secondary btn-lg btn-block justify-content-end' href='https://api.whatsapp.com/send/?phone=51902430825&amp;text=%C2%A1Hola%20TiendaClaro%21%20Deseo%20m%C3%A1s%20informaci%C3%B3n%20sobre%20el%20" . $plan['nombrePlan'] . "' target='_blank'><i class='fab fa-whatsapp mr-2'></i>Contactar</a></label>";
            }
            echo        "</ul>";
            echo "</div>";
          }
          ?>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <a href="fijas.php" class="btn btn-secondary btn-lg btn-block">Volver</a>
  </div>

</div>
<?php require_once "templates/footer.php"; ?>
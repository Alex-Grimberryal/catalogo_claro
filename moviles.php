<?php require_once "templates/head.php";
require_once "controller/bd.php"; ?>
<div class="container containerm">
    <div class="planes">
        <h2>PLANES MAX PLAY</h2>
    </div>
    <div class="list-group">
        <?php $consulta = "SELECT * FROM planes_movil where tipo_plan = 'Planes Max'";
        $resultado = $con->query($consulta);
        $datos = $resultado->fetchAll(PDO::FETCH_ASSOC);
        foreach ($datos as $planes) {
            echo "<a href='detalle_plan.php?codigo=".$planes['cod_promo']."' class='list-group-item list-group-item-action'>" . $planes['nombre_prom'] . "</a>";
        } ?>

    </div>



    <div class="planes">
        <h2>PLANES MAX ILIMITADOS</h2>
    </div>
    <div class="list-group">
        <?php $sql = "SELECT * FROM planes_movil where tipo_plan = 'PLANES MAX ILIMITADOS'";
        $resultado = $con->query($sql);
        $resultado = $resultado->fetchAll(PDO::FETCH_ASSOC);
        foreach ($resultado as $planes) {
            echo "<a href='detalle_plan.php?codigo=".$planes['cod_promo']."' class='list-group-item list-group-item-action'>" . $planes['nombre_prom'] . "</a>";
        } ?>
    </div>

    <div class="planes">
        <h2>PLANES MAX PLAY</h2>

    </div>
    <div class="list-group" style="padding-bottom: 50px;">
        <?php $sql = "SELECT * FROM planes_movil where tipo_plan = 'PLANES MAX PLAY'";
        $resultado = $con->query($sql);
        $resultado = $resultado->fetchAll(PDO::FETCH_ASSOC);
        foreach ($resultado as $planes) {
            echo "<a href='detalle_plan.php?codigo=".$planes['cod_promo']."' class='list-group-item list-group-item-action'>" . $planes['nombre_prom'] . "</a>";
        } ?>
    </div>


</div>
<?php require_once "templates/footer.php"; ?>
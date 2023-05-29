<?php require_once "templates/head.php";
require_once "controller/bd.php"; ?>
<div class="container containerf">
    <div class="planes">
        <h2>Internet Hogar</h2>
        <hr>
        <p>Ingresa a cualquiera de nuestros planes y escoge lo mejor para ti</p>
    </div>
    <div class="list-group">
        <?php $consulta = "SELECT * FROM planes_fija where tipo_plan = 'Planes Play'";
        $resultado = $con->query($consulta);
        $datos = $resultado->fetchAll(PDO::FETCH_ASSOC);
        foreach ($datos as $planes) {
            echo "<a href='detalle_fija.php?codigo=".$planes['cod_promofija']."' class='list-group-item list-group-item-action'>" . $planes['nombre_prom'] . "</a>";
        } ?>

    </div>

</div>
<?php require_once "templates/footer.php"; ?>
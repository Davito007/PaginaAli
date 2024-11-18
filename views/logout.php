<?php
    require_once("../config/conexion.php");
    session_destroy();
    header("Location:".Conectar::class."index.php");
    exit();

?>
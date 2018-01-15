<?php
session_start();

if (session_destroy()) {
    //echo "Sessão destruída";
    header("Location:../index.php");
}
else {
    echo "Não foi possível destruir a sessão";
}
?>

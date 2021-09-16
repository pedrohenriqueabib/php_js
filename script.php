<?php
    $nome = file_get_contents('php://input');
    $nome = (array)json_decode($nome);

    echo json_encode($nome['nome']);
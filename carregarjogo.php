<?php
session_start();

require "jogo.class.php";
$g = new Game();

$jogo = $_GET['jogo'];

echo json_encode($g->carregarJogo($jogo));
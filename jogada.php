<?php
require "jogo.class.php";
$g = new Game();

$hora = date('Y-m-d H:i:s');

if($_GET['waiting']== 'true'){  
    set_time_limit(60);
    $jogo = $_GET['jogo'];
    while(true) {
        session_write_close();
        $jogadaNova = $g->arrayNovaJogada($jogo, $hora);
        if(count($jogadaNova) > 0){
            echo json_encode($jogadaNova);
            break;
        } else {
            sleep(2);
        }
   }


}else {
    $jogo = $_GET['jogo'];
    $numero = $_GET['number'];
    $player = $_GET['player'];
    $gameOver = $_GET['gameOver'];

    $g->novaJogada($jogo, $numero, $player, $gameOver);

}


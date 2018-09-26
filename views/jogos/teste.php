<h1> Cidades </h1>

<div class= 'cidades'>

<ul>

<?php 
    foreach ($jogos as $jogo){
        echo "<li>". $jogo->pontos_time_a ."  " . $jogo->pontos_time_b . "</li>";

    }
    ?>
    </ul>
    </div>
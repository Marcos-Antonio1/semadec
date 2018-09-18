<h1> Esportes </h1>

<div class= 'Esportes'>

<ul>

<?php 
    foreach ($esporte as $esportes){
        echo "<li>". $esportes->nome ."  " . $esportes->categoria . "</li>";

    }
    ?>
    </ul>
    </div>
<?php 

    spl_autoload_register(function ($class_name) {
        include $class_name.'.php';
    });
   
    $elang = new Elang;
    $harimau = new Harimau;

    $elang->setNama('Elang Jawa');
    $elang->getInfoHewan();
    

    $harimau->setNama('Harimau Bengala');
    $harimau->getInfoHewan();

    echo '<br>----------------------------------<br>';
    $elang->Serang($harimau);
    $harimau->Diserang($elang); 
    echo "<br>";    
    $harimau->getInfoHewan();
    echo '<br>';

    echo '----------------------------------<br>';
    $harimau->Serang($elang);
    $elang->Diserang($harimau); 
    echo "<br>";    
    $elang->getInfoHewan();
    echo '<br>';
?>
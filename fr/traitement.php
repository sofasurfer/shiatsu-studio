<?php
$LANGUAGE = 'fr_FR';
include '../tpl/header.php';
?>
<body class="behandlung">
<div class="outer">
    <div class="header">
        <div class="menu">
            <div class="nav">
                <ul>
                    <li><a class="active" href="traitement.php">Traitement</a></li>
                    <li><a href="portrait.php">Portrait</a></li>
                    <li><a href="studio.php">Studio</a></li>
                </ul>
            </div>
            <div class="logo"><a href="/"><h1>Shiatsu Studio</h1></a></div>
            <div>
                <ul id="langswitch">
                    <li><a href="/behandlung.php">De</a></li>
                    <li><a href="/fr/traitement.php" class="active">Fr</a></li>
                </ul>               
            </div>
        </div>
    </div>
    <div class="content">
        <p>Le shiatsu nous permet de préserver et de rétablir la santé en harmonisant le principal système de communication du corps – le système énergétique. Le shiatsu convient aux personnes de tout âge et peut être utilisé de manière variée et individuelle. En tant que prévention, pour favoriser le bien-être, pour soutenir la perception de soi et en cas de troubles, d'accident ou de maladie.</p>

        <p>Pour en savoir plus: <a target="_blank" href="https://www.kientalerhof.ch/koerpertherapie/shiatsu">www.kientalerhof.ch</a></p>


    </div>

    <div class="image">
        <figure>
            <img src="../images/behandlung_3.jpg" />
        </figure>
    </div>

    <?php
    include '../tpl/footer_fr.php';
    ?>

</div>


<?php

include '../tpl/footer.php';

?>
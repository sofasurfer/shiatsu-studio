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
                    <li><a href="traitement.php">Traitement</a></li>
                    <li><a href="portrait.php">Portrait</a></li>
                    <li><a href="studio.php">Studio</a></li>
                </ul>
            </div>
            <div class="logo"><a href="/"><h1>Shiatsu Studio</h1></a></div>
            <div>
                <ul id="langswitch">
                    <li><a href="/impressum.php">De</a></li>
                    <li><a href="/fr/empreinte.php" class="active">Fr</a></li>
                </ul> 
            </div>
        </div>
    </div>
    <div class="content privacy">
        <h1>empreinte</h1>

        <h2>propiétaire:</h2>
        <p>Steven Grütter Shiatsu Thérapeute, Biel/Bienne<br/>
        <a href="https://www.shiatsu-studio.ch" target="_blank">https://www.shiatsu-studio.ch</a></p>

        <h2>design:</h2>
        <p>Jeff Rossi, Zürich</p>

        <h2>programmation:</h2>
        <p>SofaSurfer , Biel/Bienne<br/>
        <a href="https://www.sofasurfer.org" target="_blank">https://www.sofasurfer.org</a></p>

        <h2>photos:</h2>
        <p>Joelle Neuenschwander, Biel/Bienne</p>

    </div>

    <?php
    include '../tpl/footer_fr.php';
    ?>

</div>


<?php

include '../tpl/footer.php';

?>
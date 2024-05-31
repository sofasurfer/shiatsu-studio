<?php
$LANGUAGE = 'de_DE';
include 'tpl/header.php';
?>
<body class="privacy">
<div class="outer">
    <div class="header">
        <div class="menu">
            <div class="nav">
                <ul>
                    <li><a href="behandlung.php">Behandlung</a></li>
                    <li><a href="portrait.php">Portrait</a></li>
                    <li><a href="praxis.php">Praxis</a></li>
                </ul>
            </div>
            <div class="logo"><a href="/"><h1>Shiatsu Studio</h1></a></div>
            <div>
                <ul id="langswitch">
                    <li><a href="/impressum.php" class="active" >De</a></li>
                    <li><a href="/fr/empreinte.php">Fr</a></li>
                </ul> 
            </div>
        </div>
    </div>
    <div class="content privacy">
        <h1>impressum</h1>

        <h2>eigentümerin:</h2>
        <p>Steven Grütter Shiatsu Therapeut, Biel/Bienne<br/>
        <a href="https://www.shiatsu-studio.ch" target="_blank">https://www.shiatsu-studio.ch</a></p>

        <h2>design:</h2>
        <p>Jeff Rossi, Zürich</p>

        <h2>programmierung:</h2>
        <p>SofaSurfer , Biel/Bienne<br/>
        <a href="https://www.sofasurfer.org" target="_blank">https://www.sofasurfer.org</a></p>

        <h2>fotos:</h2>
        <p>Joelle Neuenschwander, Biel/Bienne</p>

    </div>

    <?php
    include 'tpl/footer_de.php';
    ?>

</div>

<?php

include 'tpl/footer.php';

?>
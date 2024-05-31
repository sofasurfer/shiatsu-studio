<?php
$LANGUAGE = 'de_DE';
include 'tpl/header.php';
?>
<body class="behandlung">
<div class="outer">
    <div class="header">
        <div class="menu">
            <div class="nav">
                <ul>
                    <li><a class="active" href="behandlung.php">Behandlung</a></li>
                    <li><a href="portrait.php">Portrait</a></li>
                    <li><a href="praxis.php">Praxis</a></li>
                </ul>
            </div>
            <div class="logo"><a href="/"><h1>Shiatsu Studio</h1></a></div>
            <div>
                <ul id="langswitch">
                    <li><a href="/behandlung.php" class="active">De</a></li>
                    <li><a href="/fr/traitement.php">Fr</a></li>
                </ul>               
            </div>
        </div>
    </div>
    <div class="content">
        <p>Mit Hilfe von Shiatsu können wir die Gesundheit erhalten und wiederherstellen, indem wir das wichtigste Kommunikationssystem des Körpers – das Energiesystem – harmonisieren. Shiatsu eignet sich für Menschen jeglichen Alters und kann vielfältig und individuell eingesetzt werden. Als Prävention, zur Förderung des Wohlbefindens, zur Unterstützung der Selbstwahrnehmung, bei Beschwerden, Unfall oder Krankheit.</p>

        <p>Weitere Infos: <a target="_blank" href="https://www.kientalerhof.ch/koerpertherapie/shiatsu">www.kientalerhof.ch</a></p>


    </div>

    <div class="image">
        <figure>
            <img src="images/behandlung_3.jpg" />
        </figure>
    </div>

    <?php
    include 'tpl/footer_de.php';
    ?>

</div>


<?php

include 'tpl/footer.php';

?>
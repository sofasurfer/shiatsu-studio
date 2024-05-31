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
                    <li><a href="behandlung.php">Behandlung</a></li>
                    <li><a href="portrait.php">Portrait</a></li>
                    <li><a class="active" href="praxis.php">Praxis</a></li>
                </ul>
            </div>
            <div class="logo"><a href="/"><h1>Shiatsu Studio</h1></a></div>
            <div>
                <ul id="langswitch">
                    <li><a href="/praxis.php" class="active">De</a></li>
                    <li><a href="/fr/studio.php">Fr</a></li>
                </ul> 
            </div>
        </div>
    </div>
    <div class="content">
        <p>Die Praxis befindet sich im Zentrum von Biel und ist zu Fuss oder mit öffentlichen Verkehrsmitteln gut erreichbar. Um einen Termin zu vereinbaren, können sie mich via email oder telefonisch kontaktieren. Gerne berate ich sie persönlich. Ich spreche Deutsch, Französisch, Italienisch, Englisch.</p>
        <p>Eine Shiatsu-Behandlung dauert rund eine Stunde und kostet 140.- CHF.</p>
        <P>Die Behandlung wird von der komplementären Zusatzversicherung anerkannt.</p>
    </div>

    <div class="image">
        <figure>
            <img src="images/praxis_3.jpg" />
        </figure>
    </div>

    <?php
    include 'tpl/footer_de.php';
    ?>

</div>


<?php

include 'tpl/footer.php';

?>
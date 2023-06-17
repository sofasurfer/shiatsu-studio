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
                    <li><a class="active" href="studio.php">Studio</a></li>
                </ul>
            </div>
            <div class="logo"><a href="/"><h1>Shiatsu Studio</h1></a></div>
            <div>
                <ul id="langswitch">
                    <li><a href="/praxis.php">De</a></li>
                    <li><a href="/fr/studio.php" class="active">Fr</a></li>
                </ul> 
            </div>
        </div>
    </div>
    <div class="content">
        <p>Le cabinet se trouve au centre de Bienne et est facilement accessible à pied ou en transports publics. Pour convenir d'un rendez-vous, vous pouvez me contacter par e-mail ou par téléphone. Je me ferai un plaisir de vous conseiller personnellement. Je parle allemand, français, italien et anglais.</p>
        <p>Un traitement de shiatsu dure environ une heure et coûte 140 CHF.</p>
        <P>Le traitement est reconnu par l'assurance complémentaire.</p>
    </div>

    <div class="image">
        <figure>
            <img src="../images/praxis_3.jpg" />
        </figure>
    </div>

    <div class="footer">
        <p>
            Steven Grütter&nbsp;&nbsp;Thérapeute de Shiatsu<br/>
            <a href="tel:+41774165026" title="077 416 50 26">077 416 50 26</a>&nbsp;&nbsp;<a href="mailto:steven@shiatsu-studio.ch" title="steven@shiatsu-studio.ch">steven@shiatsu-studio.ch</a>&nbsp;
            <a href="https://goo.gl/maps/2AzofeGwhBu" title="Map" target="_blank">Rue du Rüschli 5&nbsp;&nbsp;2502 Biel-Bienne</a> <br/>
        </p>
    </div>        

    <div class="social">
        <a class="s_fb" target="_blank" href="https://www.facebook.com/StevenGruetter/"><img src="../images/Facebook_neu.svg" /></a>
        <a class="s_ig" target="_blank" href="https://www.instagram.com/shiatsustudio/"><img src="../images/Instagram_neu.svg" /></a>
    </div>

</div>


<?php

include '../tpl/footer.php';

?>
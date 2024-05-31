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
                    <li><a class="active" href="portrait.php">Portrait</a></li>
                    <li><a href="praxis.php">Praxis</a></li>
                </ul>
            </div>
            <div class="logo"><a href="/"><h1>Shiatsu Studio</h1></a></div>
            <div>
                <ul id="langswitch">
                    <li><a href="/portrait.php" class="active">De</a></li>
                    <li><a href="/fr/portrait.php">Fr</a></li>
                </ul> 
            </div>
        </div>
    </div>
    <div class="content">
        <p>Ich bin diplomierter Shiatsu Therapeut und Dozent an der Internationalen Shiatsu Schule Kiental. In meiner Praxis biete ich Behandlungen, sowie Beratungen und Kurse an.</p>
        <p>Mein Interesse an der Verbindung von Körper und Energie entdeckte ich bereits in jungen Jahren durch Tai Chi. Nach einer Lehre als Optiker und diverse Berufserfahrungen im Sozialen und kulturellen Bereich absolvierte ich ein mehrjähriges Studium an der Internationalen Shiatsu Schule Kiental. Neben meiner langjährigen Erfahrung als Körpertherapeut entwickle ich mich durch jährliche Fortbildungen, u.a. in osteopathischer Ausrichtung und therapeutischer Diätetik, stetig weiter.</p>
    </div>

    <div class="image portrait">
        <figure>
            <img src="images/portrait_2.jpg" />
        </figure>
    </div>

    <?php
    include 'tpl/footer_de.php';
    ?>
    
</div>

<?php

include 'tpl/footer.php';

?>
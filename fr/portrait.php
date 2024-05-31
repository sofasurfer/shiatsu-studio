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
                    <li><a class="active" href="portrait.php">Portrait</a></li>
                    <li><a href="studio.php">Studio</a></li>
                </ul>
            </div>
            <div class="logo"><a href="/"><h1>Shiatsu Studio</h1></a></div>
            <div>
                <ul id="langswitch">
                    <li><a href="/portrait.php">De</a></li>
                    <li><a href="/fr/portrait.php" class="active">Fr</a></li>
                </ul> 
            </div>
        </div>
    </div>
    <div class="content">
        <p>Je suis thérapeute de shiatsu et enseignant à l'École internationale de shiatsu (ISS Kiental). Dans mon cabinet, je propose des traitements, ainsi que des conseils et des cours.</p>
        <p>J'ai découvert mon intérêt pour le lien entre le corps et l'énergie dès mon plus jeune âge grâce au Tai Chi. Après un apprentissage d'opticien et diverses expériences professionnelles dans le domaine social et culturel, j'ai suivi des études de plusieurs années à l'École internationale de shiatsu de Kiental. En plus de ma longue expérience en tant que thérapeute corporel, je continue à me développer en suivant chaque année des formations continues, notamment dans le domaine de l'ostéopathie et en diététique thérapeutique.</p>
    </div>

    <div class="image portrait">
        <figure>
            <img src="../images/portrait_2.jpg" />
        </figure>
    </div>



    <?php
    include '../tpl/footer_fr.php';
    ?>

</div>

<?php

include '../tpl/footer.php';

?>
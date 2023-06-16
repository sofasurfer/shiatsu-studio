<!DOCTYPE html>
<html lang="<?= $LANGUAGE; ?>">
<head>
<meta charset="UTF-8">
    <title>SHIATSU STUDIO - Steven Grütter</title>
    <?php if ( $LANGUAGE == 'de_DE' ): ?>
        <meta name="description" content="Ich bin eidgenössisch diplomierter Shiatsu Therapeut und Dozent an der Internationalen Shiatsu Schule Kiental. In meiner Praxis biete ich Behandlungen, sowie Beratungen und Kurse an.">
    <?php else: ?>
        <meta name="description" content="Je suis thérapeute de shiatsu titulaire d'un diplôme fédéral et enseignant à l'École internationale de shiatsu (ISS Kiental). Dans mon cabinet, je propose des traitements, ainsi que des conseils et des cours.">
    <?php endif;?>
    <link rel="apple-touch-icon" sizes="120x120" href="/images/apple-touch-icon.png?v=2">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png?v=2">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png?v=2">
    <link rel="manifest" href="/images/site.webmanifest">
    <link rel="mask-icon" href="/images/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- Preventing IE11 to request by default the /browserconfig.xml more than one time -->
    <meta name="msapplication-config" content="none">
    <!-- Disable touch highlighting in IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <!-- Ensure edge compatibility in IE (HTTP header can be set in web server config) -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <!-- Force viewport width and pixel density. Plus, disable shrinking. -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Disable Skype browser-plugin -->
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">

    <link rel='stylesheet' href='../css/style.css?v=8' type='text/css' media='all' />

</head>
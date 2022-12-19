<?php
session_start();
include('./../app/config.php');
include('./../app/autoload.php');
//if($_SERVER['REQUEST_SCHEME'] !== 'https') return header('Location: https://tecbiowebce.com.br/dev/');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="./img/logo.svg" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Psicologia, Psicologia RN, Cognitiva, Psicoloia cognitiva, Estimulação Cognitiva, Estimulacao Cognitiva, Curso Psicologia, Mente humana, Poder da mente, Cerebro mais ativo, atividade do cerebro">
    <meta name="author" content="Força Web">
    <meta name="Description" content="Por meio das atividades e práticas cognitivas realizadas no Cérebro+Ativo, é possível exercitar e promover a ativação cerebral promovendo novas conexões neurais, mais equilíbrio nas relações, resoluções de problemas cotidianos, estimulação das habilidades mentais e melhora da qualidade de vida.">
    <meta name="robots" content="index,follow">
    <meta name="googlebot" content="index">
    <meta name="googlebot-news" content="snippet">
    <link rel="canonical" href="https://cerebromaisativo.com.br/"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="theme-color" content="#332F4A"/>
    <meta name="msapplication-TileColor" content="#FFF"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta name="HandheldFriendly" content="True"/>
    <meta name="MobileOptimized" content="320"/>
    <link rel="profile" href="https://gmpg.org/xfn/11"/>
    <link rel="stylesheet" href="<?= URL ?>/public/css/swiper-bundle.min.css?<?= VER_WEB ?>">
    <link rel="stylesheet" href="<?= URL ?>/public/css/swiper.css?<?= VER_WEB ?>">   
    <link rel="stylesheet" href="<?= URL ?>/public/css/style.css?<?= VER_WEB ?>">
    <link rel="stylesheet" href="<?= URL ?>/public/font/bootstrap-icons.css?<?= VER_WEB ?>">
    <title><?= TITLLE_WEB ?></title>
</head>

<body>
    <?php include '../app/Views/top.php';?>
    <?php $rotas = new Rota(); ?>
    <script src="<?=URL?>/public/js/swiper-bundle.min.js?<?= VER_WEB ?>"></script>
    <script src="<?=URL?>/public/js/swiper.js?<?= VER_WEB ?>"></script>
    <script src="<?=URL?>/public/js/web.js?<?= VER_WEB ?>"></script>
</body>

</html>
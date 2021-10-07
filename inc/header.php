<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>PowerPoint Marketplace</title>
      <meta name="title" content="PowerPoint Marketplace">
      <meta name="description" content="Fertige PowerPoints mit Inhalt für Schule">
      <meta name="keywords" content="power, point, powerpoint, market, marketplace, joel, cool, joel.cool, presentation, vortrag, marktplatz, markt, präsentation, folie, vorlage, slides, schule, englisch, deutsch, german, download, herunterladen, fertig, template">
      <meta name="robots" content="index, follow">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="language" content="German">
      <meta name="author" content="joel.cool">

      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fav.ico" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

      <!-- includes -->
      <?php session_start(); ?>
      <?php include("inc/db.php"); ?>
      <?php include("inc/class.php"); ?>
      <?php include("inc/author.php"); ?>
      <script src="js/script.js"></script> 
      
      <!-- Global site tag (gtag.js) - Google Analytics -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=G-B1RD8R03PQ"></script>
      <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-54JDTEKD66');
      </script>

      <?php

         if (pathinfo($_SERVER['PHP_SELF'])['basename'] != 'ppinfo.php') {
            ?>
         </head>
      <body class="main-layout">
	<div class="header_section">
<?php
}
?>
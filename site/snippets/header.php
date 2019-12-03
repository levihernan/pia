<!DOCTYPE html>
<html lang="en-US" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--
  Document Title
  =============================================
-->
<title><?= $page->headerTitle()->text() ?> | <?= $page->headerTitle2()->text() ?></title>

<!--
Stylesheets
=============================================

-->
<!-- Default stylesheets-->
<link href="assets/lib/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Template specific stylesheets-->
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Volkhov:400i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
<link href="assets/lib/animate.css/animate.css" rel="stylesheet">
<link href="assets/lib/components-font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="assets/lib/et-line-font/et-line-font.css" rel="stylesheet">
<link href="assets/lib/flexslider/flexslider.css" rel="stylesheet">
<link href="assets/lib/owl.carousel/dist/assets/owl.carousel.min.css" rel="stylesheet">
<link href="assets/lib/owl.carousel/dist/assets/owl.theme.default.min.css" rel="stylesheet">
<link href="assets/lib/magnific-popup/dist/magnific-popup.css" rel="stylesheet">
<link href="assets/lib/simple-text-rotator/simpletextrotator.css" rel="stylesheet">
<!-- Main stylesheet and color file-->
<link href="assets/css/style.css" rel="stylesheet">
<link id="color-scheme" href="assets/css/colors/default.css" rel="stylesheet">

<?= css('assets/css/pia.css') ?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-153772891-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-153772891-1');
</script>


</head>

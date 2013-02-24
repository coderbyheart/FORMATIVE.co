<!doctype html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <title>FORMATIVE</title>
    <meta name="description" content="FORMATIVE is a collective of freelancers and self-employed entrepreneurs from the rhein-main area. We believe that there is a better way to do contract work.">
    <meta name="author" content="Markus Tacker | http://coderbyheart.de/">
    <!-- See /humans.txt for more infos -->
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <?php if(isset($_GET['dev'])): ?>
    <link rel="stylesheet" href="./assets/css/styles.css?<?php echo time(); ?>" type="text/css">
    <?php else: ?>
    <link rel="stylesheet" href="./build/css/styles-min.css?<?php echo filemtime('./build/css/styles-min.css'); ?>" type="text/css">
    <?php endif; ?>
    <link href="http://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet" type="text/css">
</head>
<body>
<article>
    <h1>
        <img src="build/img/logo.png" alt="FORMATIVE" >
    </h1>

    <p>a collective of freelancers and self&#8209;employed entrepreneurs from the rhein&#8209;main&nbsp;area</p>

    <p>we believe that there is a better&nbsp;way to do contract&nbsp;work</p>
    <nav>
        <a href="https://twitter.com/FORMATIVEco" rel="me"><i class="icon-twitter"></i> follow us</a>
        <a href="https://groups.google.com/group/formative-discuss" rel="me" class="align-right">join the discussion <i class="icon-comments-alt"></i></a>
        <br>
        <a href="mailto:collective@formative.co"><i class="icon-envelope-alt"></i> contact us</a>
    </nav>
</article>
</body>
</html>

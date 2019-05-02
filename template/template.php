<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php page_title(); ?> | <?php site_name(); ?></title>
    <link href="<?php site_url(); ?>/template/style.css" rel="stylesheet" type="text/css" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?php site_url(); ?>/resources/img/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php site_url(); ?>/resources/img/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php site_url(); ?>/resources/img/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php site_url(); ?>/resources/img/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php site_url(); ?>/resources/img/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php site_url(); ?>/resources/img/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php site_url(); ?>/resources/img/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php site_url(); ?>/resources/img/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php site_url(); ?>/resources/img/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php site_url(); ?>/resources/img/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php site_url(); ?>/resources/img/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php site_url(); ?>/resources/img/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php site_url(); ?>/resources/img/favicon-16x16.png">
	<link rel="manifest" href="<?php site_url(); ?>/resources/img/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php site_url(); ?>/resources/img/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
</head>
<body>
<div class="wrap">

    <header>
        <h1><?php site_name(); ?></h1>
        <nav class="menu">
            <?php nav_menu(); ?>
        </nav>
    </header>

    <article>
        <h2><?php page_title(); ?></h2>
        <?php page_content(); ?>
    </article>

    <footer>
        <small>&copy;<?php echo date('Y'); ?> <?php site_name(); ?>.<br><?php site_version(); ?></small>
    </footer>

</div>
</body>
</html>
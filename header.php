<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php echo site_name(); ?></title>
    
    <meta name="description" content="<?php echo site_description(); ?>">
    
    <link rel="stylesheet" href="<?php echo theme_url('/css/style.css'); ?>">
    <link rel="shortcut icon" href="<?php echo theme_url('img/favicon.png'); ?>">
    
    <script>var base = '<?php echo theme_url(); ?>';</script>
    <script src="<?php echo theme_url('/js/main.js'); ?>"></script>
    
    <!-- Google Fonts -->
    <link href='Google Fonts API' rel='stylesheet' type='text/css'>
    
    <meta name="generator" content="Anchor CMS">
    
    <meta property="og:title" content="<?php echo site_name(); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo e(current_url()); ?>">
    <meta property="og:image" content="<?php echo theme_url('img/og_image.gif'); ?>">
    <meta property="og:site_name" content="<?php echo site_name(); ?>">
    <meta property="og:description" content="<?php echo site_description(); ?>">
    
    <?php if(customised()): ?>
    <!-- Custom CSS -->
    <style><?php echo article_css(); ?></style>
    
    <!--  Custom Javascript -->
    <script><?php echo article_js(); ?></script>
    <?php endif; ?>
  
  </head>

<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage StarBoardAsia
 * @since StarBoardAsia 1.0
 */

?><!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Trang chủ</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo site_url(); ?>/wp-content/themes/starboardasia/assets/img/favicon.png" rel="icon">
  <link href="<?php echo site_url(); ?>/wp-content/themes/starboardasia/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo site_url(); ?>/wp-content/themes/starboardasia/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo site_url(); ?>/wp-content/themes/starboardasia/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo site_url(); ?>/wp-content/themes/starboardasia/assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?php echo site_url(); ?>/wp-content/themes/starboardasia/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?php echo site_url(); ?>/wp-content/themes/starboardasia/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?php echo site_url(); ?>/wp-content/themes/starboardasia/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo site_url(); ?>/wp-content/themes/starboardasia/assets/css/style.css" rel="stylesheet">

</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <!-- <h1 class="logo mr-auto"><a href="index.html">Starboasdrd <span>Asia</span></a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
       <a href="<?php echo home_url(); ?>/" class="logo mr-auto"><img src="<?php echo site_url(); ?>/wp-content/themes/starboardasia/assets/img/logo.png" alt="" class="img-fluid"></a>
        <?php 
        global $post;
        $post_slug = $post->post_name;
        ?> 
      <nav class="main-nav d-none d-lg-block <?php echo 'main-nav-'.pll_current_language();?>">
        <ul>
          <li<?php echo in_array($post_slug, array("vi", "ja", "en")) ? ' class="active"' : '';?>><a href="<?php echo home_url(); ?>/"><?php pll_e('Trang chủ');?></a></li>
          <li<?php echo $post_slug === 'about-us' ? ' class="active"' : '';?>>
            <a class="menu-about" href="<?php echo home_url(); ?>/about-us"><?php pll_e('Về chúng tôi');?></a>
          </li>
          <li><a  class="menu-services" href="<?php echo home_url(); ?>/#services"><?php pll_e('Dịch vụ');?></a></li>
          <li<?php echo in_array($post_slug, array("activities", "team-building", "tourism", "business-japan")) ? ' class="active"' : '';?>>
            <a class="menu-portfolio" href="<?php echo home_url(); ?>/activities"><?php pll_e('Hoạt động');?></a>
          </li>
          <li><a class="menu-recruit" href="<?php echo home_url(); ?>/#recruit"><?php pll_e('Tuyển dụng');?></a></li>
          <li><a class="menu-clients" href="<?php echo home_url(); ?>/#clients"><?php pll_e('Liên hệ');?></a></li>
          <li class="language language-en"><a href="<?php echo site_url(); ?>/en"><img src="<?php echo site_url(); ?>/wp-content/themes/starboardasia/assets/img/en.png" class="language-img" alt=""></a></li>
          <li class="language language-ja"><a href="<?php echo site_url(); ?>/ja"><img src="<?php echo site_url(); ?>/wp-content/themes/starboardasia/assets/img/ja.png" class="language-img" alt=""></a></li>
          <li class="language language-vi"><a href="<?php echo site_url(); ?>/"><img src="<?php echo site_url(); ?>/wp-content/themes/starboardasia/assets/img/vi.png" class="language-img" alt=""></a></li>
        </ul>
      </nav><!-- .main-nav-->

    </div>
  </header><!-- End Header -->
  <main id="main"<?php echo in_array($post_slug, array("vi", "ja", "en")) ? ' class="homepage"' : '';?>>

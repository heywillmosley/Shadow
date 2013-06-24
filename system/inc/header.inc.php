<?php # Prevents direct script access
if(!defined('ROOT_URI')){require'config.inc.php';header('Location:'.SITE_URL);exit;}
/**
 * Shadow
 *
 * An open source application development framework that streamlines
 * responsive e-ecommerce development for php 5.0.0 or newer
 *
 * @package        Shadow
 * @author         Super Amazing
 * @copyright      Copyright (c) 2010 - 2013, Super Amazing
 * @license        
 * @link           http://shadow.livesuperamazing.com
 * @since          Version 0.1.1 s5
 * -----------------------------------------------------------------
 *
 * System Header
 */
 
// --------------------------------------------------------------------------------?>

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> in HTACCESS FILE to Avoid Validation Error -->
        <title><?php echo SITE_NAME; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> <!--320-->
    	<meta name="keywords" content="natural medicine, natural health, homeopathic remedies, homeopathic medicines, homeopathy, no side effects, side effects, no side affects, no contraindications, natural drugs, natural meds, natural cures, natural remedies, safe medicine, nontoxic, non-toxic, not toxic, hypoallergenic, hypo-allergenic, non-allergic, no allergy, dr. king, king bio, bio king, safecare, smart medicine, safe-care, safe medicines, safe homeopathy"/> 
    	<meta name="author" content="<?php echo ADMIN_NAME; ?>">
    
        <!-- Favicons -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo APP_IMG_URL; ?>favicons/favicon-114.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo APP_IMG_URL; ?>favicons/favicon-72.png">
        <link rel="shortcut icon" href="<?php echo APP_IMG_URL; ?>favicons/favicon-16.png">
        <!--[if IE]><link rel="shortcut icon" href="<?php echo APP_IMG_URL; ?>favicons/favicon-16.icon"><![endif]-->
        <!-- or, set /favicon-16.ico for IE10 win -->
        
        <!-- Load Stylesheets -->
        <link rel="stylesheet" href="<?php echo BASE_STYLE_URL; ?>all.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="<?php echo APP_STYLE_URL; ?>all.css" type="text/css" media="screen" />
         
         <?php if( USE_GOOGLE_FONTS ) : ?>
            <!-- Load Google Fonts -->
            <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=<?php echo GOOGLE_FONTS; ?>" type="text/css" media="screen" />
      	<?php endif; ?> 
        
        <?php // Load Scripts; ?>
		<script src="<?php echo BASE_JS_URL; ?>vendor/custom.modernizr.js"></script>
        <script src="<?php echo BASE_JS_URL; ?>vendor/response.js"></script>
    </head>	





<?php if( ENVIRONMENT == 'false' ) : ?>
    <nav class="shadow-nav">
        <ul>
            <li>
                <div class="relative">
                    <div class="left side w20">
                        <div class="shadow-logo plt"><strong>S</strong></div>
                    </div>
                    <div class="ls20">
                        <?php echo FW_NAME; ?>
                    </div>
                </div>
            </li>
            <li class="right">v<?php echo SYS_VER; ?></li>
        </ul>
    </nav>
    <div class="shadow-nav-push"></div>
<?php endif; ?>
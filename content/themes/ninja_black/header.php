<!-- Required for Ninja Black to Work -->
<?php mn_head(); ?>
<?php // Additional Breakpoints
$breakpoints = "0,301,320,401,481,641,961,801,1000,1025,1281";
?>

<body data-responsejs='{ 
    "create": [{ 
        "prop": "width"
      , "prefix": "min-width- r src"
      , "breakpoints": [0, 320, 480, 768, 992, 1382, <?php echo $breakpoints; ?>] 
  }]
}'>

<!-- If you're using Google Analytics. Set up in functions/analyticstracking.php -->
<?php include_once("functions/analyticstracking.php") ?>

	
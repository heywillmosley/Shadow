<?php 
$page_title = "Shop";
// Require the database connection:

# includes header.php
app_header();  
?>
<script>
  document.write('<script src=' +
  ('__proto__' in {} ? '<?php echo BASE_JS_URL; ?>vendor/zepto' : '<?php echo BASEURL; ?>js/vendor/jquery') +
  '.js><\/script>')
</script>
<script src="<?php echo BASE_JS_URL; ?>vendor/foundation/foundation.min.js"></script>
<script src="<?php echo BASE_JS_URL; ?>vendor/response.js"></script>
<script src="<?php echo BASE_JS_URL; ?>vendor/foundation/foundation.dropdown.js"></script>
<script src="<?php echo BASE_JS_URL; ?>vendor/foundation/jquery.offcanvas.js"></script>

<?php 
$bg_num = rand( 1,3 );
if( $bg_num == 1 || $bg_num == 2 )
	$bg = 'hero-dog-hifi.jpg';
else
	$bg = 'hero-cat2-hifi.jpg';
	
?>

<section class="hero relative" style="
	background: url(<?php echo APP_IMG_URL . $bg; ?>) no-repeat center center fixed;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;">
	<!--[if lt IE 9]><!--> 
	<div class="bg-container">
		<img class="ie-bg" src="<?php echo APP_IMG_URL . $bg; ?>" alt="" />
   	</div>
<!--<![endif]-->
	<div class="bg-gradient"></div>
    <img class="plm logo" src="<?php echo APP_IMG_URL; ?>npp-logo-hifi.gif" alt="" />
    <div class="tagline hide">
    	<?php echo TAGLINE; ?>
    </div><!-- end tagline -->
    <div class="content">
        <div class="headline">Simple.<br/>Safe.<br/>Smart.</div>
        <div class="subheadline mbm hide">Taste-free, fast and effective &ndash; what more could a good "pet-parent" want?</div>
        <ul class="button-group">
          <li><a href="#dog" class="dog button">Dog Products</a></li>
          <li><a href="#cat" class="cat button">Cat Products</a></li>
        </ul>
    </div><!-- end content -->
</section><!-- end hero -->
<section class="main">
	<div class="subheadline border bbs llg"><strong>When was the last time your pet enjoyed taking medicine?</strong></div>
    <h5 class="ptm  border bbs llg pbm mxw700 mCenter txtC">Natural Pet Pharmaceuticals offers taste-free, homeopathic medicine that’s easy for you to give, and easy for your pet to take. And it works!</h5>
    <h2 class="txtC pvl hide">Take a look:</h2>
    <div id="dog" class="dog heading">Dog</div>
    	<div class="row">
        	<div class="small-12 large-6 columns">
            	<?php product( 'Allergies', 
							   '<li>&bull; Itching Skin & Ears</li>
							   		 <li>&bull; Sneezing & Congestion</li>
									 <li>&bull; Runny Nose & Eyes</li>', 
							   "For relief of allergy symptoms affecting the mucous membranes and skin: red, itchy eyes, ears, and nose, restlessness, sneezing, congestion, itchy skin, scratching or excessive licking, allergic or fleabite dermatitis.",
							    '19 Ingredients', 
								APP_IMG_URL . 'DOG_Allergies-150.jpg',
								'19.99',
								'http://www.kingbio.com/store/catalog/Allergies-Dog-p-16410.html' ); ?>
           	</div><!-- end small-12 large-6 columns -->
            <div class="small-12 large-6 columns">
            	<?php product( 'Anxiety & Stress', 
							   '<li>&bull; Loud Noises<li>
							    	<li>&bull; Travel & Separation Anxiety</li>
							   		<li>&bull; Destructive Behaviors</li>', 
							   "A natural aid for stress-related symptoms: anxiety, restlessness, separation anxiety, panting, drooling, whining, fear of loud noises, aggression, cowering, hyperexcitability, listlessness, trembling, and stress-licking.",
							    '24 Ingredients', 
								APP_IMG_URL . 'DOG_Anxiety-&amp;-Stress-150.jpg',
								'19.99',
								'http://www.kingbio.com/store/product.php?productid=16411&amp;cat=0&amp;page=2' ); ?>
           	</div><!-- end small-12 large-6 columns -->
      	</div><!-- end row -->
        <div class="row">
            <div class="small-12 large-6 columns">
            	<?php product( 'Appetite & Weight', 
							   '<li>&bull; Overeating</li>
							   		<li>&bull; Overweight</li>
									<li>&bull; Sluggish</li>', 
							   "A natural aid for: excessive appetite, stress-eating, tiredness, indigestion, irritability, sluggishness.",
							    '16 Ingredients', 
								APP_IMG_URL . 'DOG_Appetite-&amp;-Weight-150.jpg',
								'19.99',
								'http://www.kingbio.com/store/product.php?productid=16412&amp;cat=0&amp;page=1' ); ?>
           	</div><!-- end small-12 large-6 columns -->
            <div class="small-12 large-6 columns">
            	<?php product( 'Digestive Upsets', 
							   '<li>&bull; Indigestion & Vomiting</li>
							   		<li>&bull; Constipation or Diarrhea</li>
									<li>&bull; Foul Gas & Stools<li>', 
							   "For relief of: constipation or diarrhea, foul gas and stools, indigestion, doggie farts.",
							    '29 Ingredients', 
								APP_IMG_URL . 'DOG_Digestive-Upset-150.jpg',
								'19.99',
								'http://www.kingbio.com/store/product.php?productid=16413&amp;cat=0&amp;page=1' ); ?>
           	</div><!-- end small-12 large-6 columns -->
        </div><!-- end row -->
        <div class="row">
            <div class="small-12 large-6 columns">
            	<?php product( 'Muscle, Joint & Arthritis', 
							   '<li>&bull; Stiffness & Swelling</li>
							   		<li>&bull; Injuries & Inflammations</li>
									<li>&bull; Impaired Mobility</li>', 
							   "For symptomatic relief of: hip, joint and back pain, inflammation, stiffness and swelling associated with injuries or arthritis pain, lameness, difficulty rising or climbing stairs, limping or hold foot up, weak hind legs.",
							    '24 Ingredients', 
								APP_IMG_URL . 'DOG_Muscle-Joint-&amp;-Arthritis-150.jpg',
								'19.99',
								'http://www.kingbio.com/store/product.php?productid=16414&amp;cat=0&amp;page=1' ); ?>
           	</div><!-- end small-12 large-6 columns -->
            <div class="small-12 large-6 columns">
            	<?php product( 'Skin & Itch', 
							   '<li>&bull; Hot Spots & Gnawing</li>
							   		<li>&bull; Dermatitis & Scratching<li>
									<li>&bull; Excessive Licking</li>', 
							   "For symptomatic relief of:  irritated, red, burning, itchy, dry, rough, scaly, chapped or cracked skin, rashes, fleabite dermatitis, hot spots, excessive gnawing or licking, skin eruptions, hair loss, generally unhealthy skin.",
							    '22 Ingredients', 
								APP_IMG_URL . 'DOG_Skin-&amp;-Itch-150.jpg',
								'19.99',
								'http://www.kingbio.com/store/product.php?productid=16415&amp;cat=0&amp;page=1' ); ?>
           	</div><!-- end small-12 large-6 columns -->
        </div><!-- end row -->
        <div class="row">
        <div class="small-12 large-6 columns">
            <?php product( 'Teeth & Gums', 
                           '<li>&bull; Bad Breath</li>
						   		<li>&bull; Tartar & Tooth Decay<li>
								<li>&bull; Unhealthy Gums</li>', 
                           "For relief of oral health symptoms: bad breath, tartar, tooth decay, unhealthy, receding, spongy or bleeding gums.",
                            '21 Ingredients', 
                            APP_IMG_URL . 'DOG_Teeth-&amp;-Gums-150.jpg',
                            '19.99',
                            'http://www.kingbio.com/store/product.php?productid=16416&amp;cat=0&amp;page=1' ); ?>
        </div><!-- end small-12 large-6 columns -->
        <div class="small-12 large-6 columns">
        
        </div><!-- end small-12 large-6 columns -->
    </div><!-- end row -->
   	<div id="cat" class="cat heading">Cat</div>  
    <div class="row">
        <div class="small-12 large-6 columns">
            <?php product( 'Anxiety & Stress', 
                           '<li>&bull; Loud Noises</li>
						   		<li>&bull; Cowering & Hiding</li>
								<li>&bull; Travel Anxiety<li>', 
                           "For relief of: anxiety, restlessness with pacing and panting, nervousness, fear of loud noises, aggression, hyperexcitability,  loss of appetite, listlessness, fearfulness, easily startled, stress-licking, neurotic behaviors.",
                            '24 Ingredients', 
                            APP_IMG_URL . 'CAT_Anxiety-&amp;-Stress-150.jpg',
                            '19.99',
                            'http://www.kingbio.com/store/product.php?productid=16417&amp;cat=0&amp;page=2' ); ?>
        </div><!-- end small-12 large-6 columns -->
        <div class="small-12 large-6 columns">
            <?php product( 'Skin & Itch', 
                           '<li>&bull; Excessive Licking</li>
						   		<li>&bull; Dermatitis & Scratching</li>
								<li>&bull; Hair Loss</li>', 
                           "For relief of:  irritated, red, burning, itchy, dry, rough, scaly, chapped or cracked skin, rashes, fleabite dermatitis, hot spots, excessive gnawing or licking, skin eruptions, hair loss, generally unhealthy skin.",
                            '23 Ingredients', 
                            APP_IMG_URL . 'CAT_Skin-&amp;-Itch-150.jpg',
                            '19.99',
                            'http://www.kingbio.com/store/product.php?productid=16418&amp;cat=0&amp;page=1' ); ?>
        </div><!-- end small-12 large-6 columns -->
    </div><!-- end row -->
    <div class="row">
        <div class="small-12 large-6 columns">
           <?php product( 'Teeth & Gums', 
                           '<li>&bull; Bad Breath</li>
						   		<li>&bull; Tartar & Tooth Decay</li>
								<li>&bull; Unhealthy Gums</li>', 
                           "For relief of oral health symptoms: bad breath, tartar, tooth decay, unhealthy, receding, spongy or bleeding gums.",
                            '20 Ingredients', 
                            APP_IMG_URL . 'CAT_Teeth-&amp;-Gums-150.jpg',
                            '19.99',
                            'http://www.kingbio.com/store/product.php?productid=16419&amp;cat=0&amp;page=1' ); ?>
        </div><!-- end small-12 large-6 columns -->
        <div class="small-12 large-6 columns">
            <?php product( 'Urinary Tract Irritations', 
                           '<li>&bull; Straining to Urinate</li>
						   		<li>&bull; Frequent Urination<li>
								<li>&bull; Dribbling<li>', 
                           "For relief from symptoms associated with urinary tract irritations or infections: frequent urination, dribbling, painful urination, straining to urinate, and incontinence.",
                            '22 Ingredients', 
                            APP_IMG_URL . 'CAT_URInary-Tract-Irritations-150.jpg',
                            '19.99',
                            'http://www.kingbio.com/store/product.php?productid=16420&amp;cat=0&amp;page=1' ); ?>
        </div><!-- end small-12 large-6 columns -->
    </div><!-- end row -->
</section>

<?php 
# includes footer.php
app_footer();


<?php // Launch Functions @since superamazing 1.1.4

// Launch Hero @since superamazing 1.1.4
function launch_hero($type) { 
$site_name = "Super Amazing";
$headline = $site_name . " " . "is Coming";
$signup_copy = "Enter your email to get notified when " . $site_name . " is ready and for a chance to win $100 and early access.";
$btn_copy = "Submit";
$playlist_name = "Summer Start";
$playlist_cost = "$8";
$playlist_author = "William Clyde Mosley, III";
$playlist_ttd = "<ul class=\"unstyled\">
					<li>$0 Swimming at sunset</li>
					<li>$5 Roasting marshmallows with friends over campfire</li>
					<li>$3 Enjoy a good drink</li>
					<li>$0 Beach dance party</li>
				</ul><!-- end unstyled border bbs lllg -->";

?>

	<?php if ($type == "891+") : ?>
    	<header id="hero" class="hifi">
            <div class="col1">
                <h1 class="pbm"><?php echo $headline; ?></h1>
                <div class="chart">
                    <div class="bar bar-large bar-fair w50p"></div>
                </div><!-- end chart -->
                <h5 class="pbs"><?php echo $signup_copy; ?></h5>
                <div class="input-append">
                	<?php $email = "";
					if (isset($_POST["email"])) $email = sanitizeString($_POST["email"]);
					// ?>
                    <form method="post" action="<?php echo site_url(); ?>" class="form-inline pbt man">
                      <input type="text" name="email" class="input-large border-radius-none fs18" placeholder="Email">
                      <button type="submit" class="btn btn-join border-radius-none"><?php echo $btn_copy; ?></button>
                    </form>
                </div><!-- end input-append -->
            </div><!-- end col1 -->
            <aside class="col2">
                <div class="relative tablet disable selection">
                    <img class="tablet" src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/tablet-hifi.png" />
                    <div class="tablet-contents">
                        <div class="small panel">
                            <h5><?php echo $playlist_cost . " " . $playlist_name; ?> <span class="caption">Playlist</span></h5>
                            <div class="caption">Created by <a href="#"><?php echo $playlist_author; ?></a></div>
                        </div><!-- end small panel -->
                        <img class="playlist" src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/beach-playlist-hifi.jpg" />
                        <div class="panel">
                            <?php echo $playlist_ttd; ?>
                            <div class="btn btn-primary">Do it</div>
                            <div class="btn">Add to Plans</div>
                        </div><!-- end small panel -->
                    </div><!-- end tablet-contents -->
                </div>
            </aside><!-- end col2 --> 
            <aside class="step1">
                <div class="line"></div>
            </aside><!-- end step1 -->
            <aside class="hero-bg">
                <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/hero-bg-hifi.jpg" />
            </aside><!-- end hero-bg -->
        </header><!-- end hero -->
    <?php elseif ($type == "520+") : ?>
    	<header id="hero" class="lofi">
            <div class="col1">
                <h1 class="pbm"><?php echo $headline; ?></h1>
                <div class="chart">
                    <div class="bar bar-large bar-fair w50p"></div>
                </div><!-- end chart -->
                <h5 class="pbs"><?php echo $signup_copy; ?></h5>
                    <form class=" man">
                    	<div class="row">
                      		<input type="text" class="input-large border-radius-none fs18" placeholder="Email">
                      	</div>
                      <button class="btn btn-join border-radius-none clearfix" type="button"><?php echo $btn_copy; ?></button>
                    </form>
            </div><!-- end col1 -->
            <aside class="col2">
                <div class="relative tablet disable selection">
                    <img class="tablet" src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/02/tablet-lofi.png" />
                    <div class="tablet-contents">
                        <div class="small panel">
                            <h5><?php echo $playlist_cost . " " . $playlist_name; ?> <span class="caption">Playlist</span></h5>
                            <div class="caption">Created by <a href="#"><?php echo $playlist_author; ?></a></div>
                        </div><!-- end small panel -->
                        <img class="playlist" src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/02/beach-playlist-lofi1.jpg" />
                        <div class="panel">
                            <?php echo $playlist_ttd; ?>
                            <div class="btn btn-primary btn-small">Do it</div>
                            <div class="btn btn-small">Add to Plans</div>
                        </div><!-- end small panel -->
                    </div><!-- end tablet-contents -->
                </div>
            </aside><!-- end col2 --> 
            <aside class="step1">
                <div class="line"></div>
            </aside><!-- end step1 -->
            <aside class="hero-bg">
                <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/02/hero-bg-lofi.jpg" />
            </aside><!-- end hero-bg -->
        </header><!-- end hero -->
    <?php elseif ($type == "320+") : ?>
    	<h1>Smartphone</h1>
   	<?php elseif ($type == "rs") : ?>
    	<!-- actionbar -->
        <div  
        	data-r321='<?php launch_hero("320+"); ?>'
            data-r521='<?php launch_hero("520+"); ?>'
            data-r892='<?php launch_hero("891+"); ?>'
        > 
            
        </div><!-- end actionbar -->
    <?php else : endif; ?>
		
	<?php return true;
}

// Launch Do Everything @since superamazing 1.1.4
function launch_do_everything($type) { 
$site_name = "Super Amazing";
$headline = "Find Everything to Do";
$sub_headline = "For a few dollars.";
$p1 = "With $site_name, you can tell us what kind of day you want to have and how much you’re willing to spend, and we’ll give you things to do and playlists in your town to fit your budget.";
$p2 = "Maybe you want to have a manly day and your girlfriend want’s to have a girly day, or a group with a lot of opinions; we’ve got that solved too.";
$do_something_adj1 = "Adventrous";
$do_something_adj2 = "Intimate";
$do_something_price = 8;
$do_something_btn_copy = "Search";
$do_something_adj_list = "<ul class=\"adjectives unstyled\">
                    <li>Adventrous</li>
                    <li>Intimate</li>
                    <li>Difficult</li>
                    <li>Silly</li>
                    <li>Simple</li>
                    <li>Amazing</li>
                    <li>Scenic</li>
                    <li>Comedy (related)</li>
                    <li>Educational</li>
                    <li>Off the Beaten Path</li>
                    <li>Scary</li>
                    <li>Laid Back</li>
                    <li>Unusual</li>
                    <li>Dangerous</li>
                    <li>Outdoor (related)</li>
                    <li>Sexy</li>
                    <li>Simple</li>
                    <li>Healthy</li>
                    <li>+300 More</li>
                </ul><!-- end adjectives unstyled -->";

?>

	<?php if ($type == "891+") : ?>
    	<section id="do_everything" class="hifi">
            <aside class="col1">
                <img class="smartphone1 " src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/smartphone-hifi.png" />
                <div class="smartphone1_contents disable selection">
                    <h4 class="txtC ptm pbs">I want to do something</h4>
                    <div class="btn-group btn1">
                      <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                        <?php echo $do_something_adj1; ?>
                        <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <!-- dropdown menu links -->
                      </ul>
                    </div>
                    <h4 class="txtC pvt">&amp;</h4>
                    <div class="btn-group btn2">
                      <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                        <?php echo $do_something_adj2; ?>
                        <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <!-- dropdown menu links -->
                      </ul>
                    </div>
                    <form class="form-inline row">
                        <h4 class=" pvt left mtt plm mlt prs">under</h4>
                        <div class="input-prepend left pts">
                          <span class="add-on h30">$</span>
                          <input value="<?php echo $do_something_price; ?>" class="span2 h30 w35" id="prependedInput" type="text" placeholder="10">
                        </div>
                    </form>
                    <div class="btn btn-primary mtm btn3"><?php echo $do_something_btn_copy; ?></div>
                </div><!-- end smartphone1_contents -->
                <?php echo $do_something_adj_list; ?>
                <aside class="step1">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </aside><!-- end step1 -->
                <img class="smartphone2 rotate270" src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/smartphone-hifi.png" />
                <aside class="smartphone2_contents">
                    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/hike-playlist-hifi.jpg" />
                </aside><!-- end aside -->
                <aside class="step2">
                    <div class="line"></div>
                    <div class="circle"></div>
                </aside><!-- end step1 -->
            </aside><!-- end col1 -->
            <div class="col2">
                <h2><?php echo $headline; ?></h2>
                <h3><?php echo $sub_headline; ?></h3>
                <p class="pbs"><?php echo $p1; ?></p>
                <p><?php echo $p2; ?></p>
            </div><!-- end col2 -->
            <aside class="do_everything-bg">
                <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/hiking-bg-hifi.jpg" />
            </aside><!-- end do_everything-bg -->
        </section><!-- end do_everything -->
    <?php elseif ($type == "520+") : ?>
    	<section id="do_everything" class="lofi">
            <div class="row1">
            	<h2><?php echo $headline; ?></h2>
                <h3><?php echo $sub_headline; ?></h3>
                <p class="pbs"><?php echo $p1; ?></p>
                <p><?php echo $p2; ?></p>
            </div><!-- end row1 -->
            <aside class="row2">
            	<?php echo $do_something_adj_list; ?>
            	<div class="tablet1 left">
                	<img class="device" src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/02/tablet-lofi.png" />
                    <div class="content">
                    	<h4 class="txtC ptm pbs">I want to do something</h4>
                    <div class="btn-group btn1">
                      <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                        <?php echo $do_something_adj1; ?>
                        <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <!-- dropdown menu links -->
                      </ul>
                    </div>
                    <h4 class="txtC pvt">&amp;</h4>
                    <div class="btn-group btn2">
                      <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                        <?php echo $do_something_adj2; ?>
                        <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu">
                        <!-- dropdown menu links -->
                      </ul>
                    </div>
                    <form class="form-inline row">
                        <h4 class=" pvt left mtt plm mlt prs">under</h4>
                        <div class="input-prepend left pts">
                          <span class="add-on h30">$</span>
                          <input value="<?php echo $do_something_price; ?>" class="span2 h30 w35" id="prependedInput" type="text" placeholder="10">
                        </div>
                    </form>
                    <div class="btn btn-primary mtm btn3"><?php echo $do_something_btn_copy; ?></div>
                    </div><!-- end content -->
                </div><!-- end tablet1 -->
            	<div class="tablet2 left">
                	<img class="device" src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/02/tablet-lofi.png" />
                    <div class="content">
                    	<img class="device" src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/02/hike-playlist-lofi.jpg" />
                    </div><!-- end content -->
                </div><!-- end tablet2 -->
            </aside><!-- end row2 -->
            <aside class="do_everything_bg">
            	<img class="device" src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/02/hiking-bg-lofi.jpg" />
            </aside><!-- end do_everything_bg -->
            <aside class="step1">
            	<div class="line1"></div>
                <div class="line2"></div>
                <div class="circle1 circle"></div>
                <div class="circle2 circle"></div>
                <div class="line3"></div>
            </aside><!-- end step1 -->
        </section><!-- end do_everything -->
    <?php elseif ($type == "320+") : ?>
    	<h1>Smartphone</h1>
   	<?php elseif ($type == "rs") : ?>
    	<!-- actionbar -->
        <div  
        	data-r321='<?php launch_do_everything("320+"); ?>'
            data-r521='<?php launch_do_everything("520+"); ?>'
            data-r892='<?php launch_do_everything("891+"); ?>'
        > 
            
        </div><!-- end actionbar -->
    <?php else : endif; ?>
		
	<?php return true;
}

// Launch Playlist @since superamazing 1.1.4
function launch_playlist($type) { 
$site_name = "Super Amazing";
$headline = "Playlist";
$sub_headline = "Experience the perfect mix.";
$p1 = "Playlists are mixtapes for real life; a collections of or things to do mixed to create an unforgetable experience.";
$p2 = "Find a playlist to enjoy and experience it with your friends, share it, and do it all over again. It’s that simple. Become known as the best planner by creating amazing playlist for cheap. Your friends will love hanging out with you.";
$playlist_name = "College Kids";
$playlist_cost = "$25";
$playlist_author = "Mya Erickson";
$playlist_ttd = "<ul class=\"unstyled\">
                        <li>$3 Apples to Apples at Brew & View + Beer</li>
                        <li>$4 Hot Chocolate or coffee at the Double Decker</li>
                        <li>$0 Play free arcade games at The Arcade</li>
                        <li>$1 Catch a Sunday action comedy at the Cinebarre</li>
                        <li>$12 Chicken Finger Plate at Cheddars</li>
                        <li>$5 Go late night dancing with friends at the Arcade</li>
                    </ul><!-- end unstyled border bbs lllg -->";

?>

	<?php if ($type == "891+") : ?>
    	<section id="playlist" class="hifi">
            <div class="col1">
                <div class="content">
                    <h2 class="ilb prm pbm"><?php echo $headline; ?></h2>
                    <h3 class="ilb"><?php echo $sub_headline; ?></h3>
                    <p class="pbs"><?php echo $p1; ?></p>
                    <p><?php echo $p2; ?></p>
                </div><!-- end content -->
                <aside class="profile-photos">
                    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/profile1.jpg" />
                    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/profile2.jpg" />
                    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/profile3.jpg" />
                    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/profile4.jpg" />
                    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/profile5.jpg" />
                    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/profile6.jpg" />
                    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/profile7.jpg" />
                    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/profile8.jpg" />
                    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/profile9.jpg" />
                    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/profile10.jpg" />
                    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/profile11.jpg" />
                    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/profile12.jpg" />
                    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/profile13.jpg" />
                    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/profile14.jpg" />
                    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/profile15.jpg" />
                    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/profile16.jpg" />
                    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/profile17.jpg" />
                    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/profile18.jpg" />
                    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/profile19.jpg" />
                    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/profile20.jpg" />
                    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/profile21.jpg" />
                    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/profile22.jpg" />
                    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/profile23.jpg" />
                    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/profile24.jpg" />
                    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/profile25.jpg" />
                    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/profile26.jpg" />
                    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/profile27.jpg" />
                    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/profile28.jpg" />
                    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/profile29.jpg" />
                    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/profile30.jpg" />
                    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/profile31.jpg" />
                    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/profile32.jpg" />
                </aside><!-- end profile-photos -->
            </div><!-- end col1 -->
            <aside class="col2 disable selection">
                <img class="laptop" src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/laptop-hifi.png" />
                <div class="laptop-contents">
                    <div class="small panel">
                        <h5><?php echo "$playlist_cost $playlist_name"; ?> <span class="caption">Playlist</span></h5>
                        <div class="caption">Created by <a href="#"><?php echo $playlist_author; ?></a></div>
                    </div><!-- end small panel -->
                    <img class="playlist" src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/college-kids-playlist-hifi.jpg" />
                    <div class="panel">
                        <?php echo $playlist_ttd; ?>
                        <div class="btn btn-primary">Do it</div>
                        <div class="btn">Add to Plans</div>
                    </div><!-- end small panel -->
                </div><!-- end laptop-contents -->
            </aside><!-- end col2 -->
            <aside class="step1">
                <div class="line1"></div>
                <div class="circle"></div>
                <div class="line2"></div>
            </aside><!-- end step1 -->
            <aside class="playlist-bg">
                <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/02/college-kids-hifi.jpg" />
            </aside><!-- end do_everything-bg -->
        </section><!-- end playlist -->
    <?php elseif ($type == "520+") : ?>
    	<section id="playlist" class="lofi">
            <div class="row1">
            	<h2><?php echo $headline; ?></h2>
                <h3><?php echo $sub_headline; ?></h3>
                <p class="pbs"><?php echo $p1; ?></p>
                <p><?php echo $p2; ?></p>
            </div><!-- end row1 -->
            <aside class="row2">
            	<div class="tablet">
                	<img class="device rotate270" src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/02/tablet-lofi.png" />
                    <div class="content">
                    	<div class="small panel">
                            <h5><?php echo "$playlist_cost $playlist_name"; ?> <span class="caption">Playlist</span></h5>
                            <div class="caption">Created by <a href="#"><?php echo $playlist_author; ?></a></div>
                        </div><!-- end small panel -->
                        <img class="playlist" src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/college-kids-playlist-hifi.jpg" />
                        <div class="panel">
                            <?php echo $playlist_ttd; ?>
                            <div class="btn btn-primary">Do it</div>
                            <div class="btn">Add to Plans</div>
                        </div><!-- end small panel -->
                    </div>
                </div><!-- end tablet -->
            </aside><!-- end row2 -->
            <aside class="playlist_bg">
            	<img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/02/college-kids-lofi.jpg" />
            </aside><!-- end playlist -->
            <aside class="step1">
            	
            </aside><!-- end step1 -->
        </section><!-- end playlist -->
    <?php elseif ($type == "320+") : ?>
    	<h1>Smartphone</h1>
   	<?php elseif ($type == "rs") : ?>
    	<!-- actionbar -->
        <div  
        	data-r321='<?php launch_playlist("320+"); ?>'
            data-r521='<?php launch_playlist("520+"); ?>'
            data-r892='<?php launch_playlist("891+"); ?>'
        > 
            
        </div><!-- end actionbar -->
    <?php else : endif; ?>
		
	<?php return true;
}

// Launch Hangout @since superamazing 1.1.4
function launch_hangout($type) { 
$site_name = "Super Amazing";
$headline = "Hangout";
$sub_headline = "We’re not talking Google Chat with a bunch of people.";
$p1 = "We’ve all been bored with nothing to do, and called friends that usually are at work or unavailable to hangout when you are. That just changed.";
$p2 = "Now you can see which friends are available to hangout right now, or later, and make plans with them on the fly.";
$hangout1_name = "Lance Gilmore";
$hangout1_sex = "Him";
$hangout1_phone_number = "1+828.2814934";
$hangout1_location = "Biltmore Estate";
$hangout1_location_time = "8:46pm";
$hangout1_status = "is free to hangout till 3pm";
$hangout1_likes = "<ul class=\"unstyled\">
						<li class=\"caption\">Loves to <a href=\"#\">Volunteer at The Humane Society</a></li>
						<li class=\"caption\">Loves to <a href=\"#\">Golf</a></li>
						<li class=\"caption\">Likes to <a href=\"#\">Watch Boxing</a></li>
					</ul><!-- end unstyled -->";
$hangout2_name = "Amber Fair";
$hangout2_sex = "Her";
$hangout2_phone_number = "1+828.252.3864";
$hangout2_location = "Cracker Barrel";
$hangout2_location_time = "5:06pm, yesterday";
$hangout2_status = "is currently free to hangout.";
$hangout2_likes = "<ul class=\"unstyled\">
						<li class=\"caption\">Likes <a href=\"#\">The Notebook</a></li>
						<li class=\"caption\">Loves <a href=\"#\">Sushi</a></li>
						<li class=\"caption\">Likes <a href=\"#\">Sunny Point Cafe</a></li>
					</ul><!-- end unstyled -->";
$hangout3_name = "Victoria Black";
$hangout3_sex = "Her";
$hangout3_phone_number = "1+828.337.6677";
$hangout3_location = "Doc Cheys";
$hangout3_location_time = "8:00pm, yesterday";
$hangout3_status = "is currently free to hangout.";
$hangout3_likes = "<ul class=\"unstyled\">
						<li class=\"caption\">Loves <a href=\"#\">Shopping for Clothes</a></li>
						<li class=\"caption\">Loves <a href=\"#\">Children</a></li>
						<li class=\"caption\">Likes <a href=\"#\">Watching Catfish: The TV Show</a></li>
					</ul><!-- end unstyled -->";
$hangout4_name = "Charles Davidson";
$hangout4_sex = "Him";
$hangout4_phone_number = "1+828.335.7070";
$hangout4_location = "Home";
$hangout4_location_time = "9:35am";
$hangout4_status = "is currently free to hangout.";
$hangout4_likes = "<ul class=\"unstyled\">
						<li class=\"caption\">Likes to<a href=\"#\"> Golf</a></li>
						<li class=\"caption\">Likes <a href=\"#\">Flat Tire Beer</a></li>
						<li class=\"caption\">Loves <a href=\"#\">Fishing</a></li>
					</ul><!-- end unstyled -->";

?>

	<?php if ($type == "891+") : ?>
    	<section id="hangout" class="hifi">
            <div class="col1">
                <div class="content">
                    <h2 class="pbm"><?php echo $headline; ?></h2>
                    <h3><?php echo $sub_headline; ?></h3>
                    <p class="pbs"><?php echo $p1; ?></p>
                    <p><?php echo $p2; ?></p>
                </div><!-- end content -->
                <aside class="laptop">
                    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/laptop-hifi.png" />
                    <div class="laptop-content">
                        <div class="panel relative">
                            <div class="media border pvs bbs lllg">
                                <div class="pull-right">
                                    <div class="btn-group pbs">
                                    <button class="btn-small btn-primary btn">Make Plans with <?php echo $hangout1_sex; ?></button>
                                    <button class="btn-small btn-primary btn dropdown-toggle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                        <li><a tabindex="-1" href="#">Make plans around boxing...</a></li>
                                        <li><a tabindex="-1" href="#">Make plans around working out...</a></li>
                                        <li><a tabindex="-1" href="#">Make plans around video games...</a></li>
                                        <li class="divider"></li>
                                        <li><a tabindex="-1" href="#">Chat with him...</a></li>
                                        <li><a tabindex="-1" href="#">Message him...</a></li>
                                    </ul>
                                </div>
                                <div class="caption pbt"><?php echo $hangout1_phone_number; ?></div>
                                <div class="caption w130">At <a href="#"><?php echo $hangout1_location; ?></a>, <?php echo $hangout1_location_time; ?></div>
                                </div><!-- end push-right -->
                                <div class="media-body">
                                    <p class="pbt"><a href="#"><?php echo $hangout1_name; ?></a> <?php echo $hangout1_status; ?></p>
                                    <?php echo $hangout1_likes; ?>
                                </div><!-- end media-body -->
                            </div><!-- end media -->
                            <div class="media border pvs bbs lllg">
                                <div class="pull-right">
                                    <div class="btn-group pbs">
                                    <button class="btn-small btn-primary btn">Make Plans with <?php echo $hangout2_sex; ?></button>
                                    <button class="btn-small btn-primary btn dropdown-toggle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                        <li><a tabindex="-1" href="#">Make plans around boxing...</a></li>
                                        <li><a tabindex="-1" href="#">Make plans around working out...</a></li>
                                        <li><a tabindex="-1" href="#">Make plans around video games...</a></li>
                                        <li class="divider"></li>
                                        <li><a tabindex="-1" href="#">Chat with him...</a></li>
                                        <li><a tabindex="-1" href="#">Message him...</a></li>
                                    </ul>
                                </div>
                                <div class="caption pbt"><?php echo $hangout2_phone_number; ?></div>
                                <div class="caption w130">At <a href="#"><?php echo $hangout2_location; ?></a>, <?php echo $hangout2_location_time; ?></div>
                                </div><!-- end push-right -->
                                <div class="media-body">
                                    <p class="pbt"><a href="#"><?php echo $hangout2_name; ?></a> <?php echo $hangout2_status; ?></p>
                                    <?php echo $hangout2_likes; ?>
                                </div><!-- end media-body -->
                            </div><!-- end media -->
                            <div class="media border pvs bbs lllg">
                                <div class="pull-right">
                                    <div class="btn-group pbs">
                                    <button class="btn-small btn-primary btn">Make Plans with <?php echo $hangout3_sex; ?></button>
                                    <button class="btn-small btn-primary btn dropdown-toggle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                        <li><a tabindex="-1" href="#">Make plans around boxing...</a></li>
                                        <li><a tabindex="-1" href="#">Make plans around working out...</a></li>
                                        <li><a tabindex="-1" href="#">Make plans around video games...</a></li>
                                        <li class="divider"></li>
                                        <li><a tabindex="-1" href="#">Chat with him...</a></li>
                                        <li><a tabindex="-1" href="#">Message him...</a></li>
                                    </ul>
                                </div>
                                <div class="caption pbt"><?php echo $hangout3_phone_number; ?></div>
                                <div class="caption w130">At <a href="#"><?php echo $hangout3_location; ?></a>, <?php echo $hangout3_location_time; ?></div>
                                </div><!-- end push-right -->
                                <div class="media-body">
                                    <p class="pbt"><a href="#"><?php echo $hangout3_name; ?></a> <?php echo $hangout3_status; ?></p>
                                    <?php echo $hangout3_likes; ?>
                                </div><!-- end media-body -->
                            </div><!-- end media -->
                        </div><!-- end panel -->
                    </div><!-- end laptop-content --> 
                </aside><!-- end smartphone -->
            </div><!-- end col1 -->
            <div class="col2">
                <aside class="smartphone">
                    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/smartphone-hifi.png" />
                    <div class="smartphone-content">
                        <div class="panel relative">
                            <div class="media">
                                <div class="media-body">
                                    <p class="pbt"><a href="#"><?php echo $hangout4_name; ?></a> is currently free to hangout.</p>
                                    <?php echo $hangout4_likes; ?>
                                    <div class="btn-group pbs">
                                    <button class="btn-small btn-primary btn">Make Plans with <?php echo $hangout4_sex; ?></button>
                                    <button class="btn-small btn-primary btn dropdown-toggle" data-toggle="dropdown">
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                        <li><a tabindex="-1" href="#">Make plans around boxing...</a></li>
                                        <li><a tabindex="-1" href="#">Make plans around working out...</a></li>
                                        <li><a tabindex="-1" href="#">Make plans around video games...</a></li>
                                        <li class="divider"></li>
                                        <li><a tabindex="-1" href="#">Chat with him...</a></li>
                                        <li><a tabindex="-1" href="#">Message him...</a></li>
                                    </ul>
                                </div>
                                <div class="caption pbt"><?php echo $hangout4_phone_number; ?></div>
                                <div class="caption">At <?php echo $hangout4_location; ?>, <?php echo $hangout4_location_time; ?></div>
                                </div><!-- end media-body -->
                            </div><!-- end media -->
                        </div><!-- end panel -->
                    </div><!-- end laptop-content --> 
                </aside><!-- end smartphone -->
            </div><!-- end col2 -->
            <aside class="step1">
                <div class="line">
                <div class="circle">
            </aside><!-- end step1 -->
            <aside class="hangout-bg">
                <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/hangout-bg-hifi.jpg" />
            </aside><!-- end do_everything-bg -->
        </section><!-- end hangout -->
    <?php elseif ($type == "520+") : ?>
    	<h1>Tablet</h1>
    <?php elseif ($type == "320+") : ?>
    	<h1>Smartphone</h1>
   	<?php elseif ($type == "rs") : ?>
    	<!-- actionbar -->
        <div  
        	data-r321='<?php launch_hangout("320+"); ?>'
            data-r521='<?php launch_hangout("520+"); ?>'
            data-r892='<?php launch_hangout("891+"); ?>'
        > 
            
        </div><!-- end actionbar -->
    <?php else : endif; ?>
		
	<?php return true;
}

// Launch Planmaker @since superamazing 1.1.4
function launch_planmaker($type) { 
$site_name = "Super Amazing";
$headline = "Plan Maker";
$sub_headline = "Plan life&rsquo;s moments in a snap.";
$p1 = "Birthday parties, anniversaries, parties, girl&rsquo;s night out &mdash; you name it. $site_name makes planning special occasions and staying within your budget a breeze.";
$p2 = "$site_name let’s you know what your connections love to do and suggests things to do and playlists based on what they like to do. Invite your connections and bask in the plan maker glory.";
$hangout1_name = "Aki Zhào";
$hangout1_sex = "female";
$hangout1_age = 5;
$hangout1_likes = "<ul class=\"unstyled\">
						<li class=\"caption\">Loves <a href=\"#\">Spongebob</a></li>
						<li class=\"caption\">Likes <a href=\"#\">Playgrounds</a></li>
						<li class=\"caption\">Loves to <a href=\"#\">Cereal</a></li>
					</ul><!-- end unstyled -->";
$hangout2_name = "Haru Zhào";
$hangout2_sex = "male";
$hangout2_age = 8;
$hangout2_likes = "<ul class=\"unstyled\">
						<li class=\"caption\">Loves <a href=\"#\">Parks</a></li>
						<li class=\"caption\">Likes <a href=\"#\">Pokemon</a></li>
						<li class=\"caption\">Loves to <a href=\"#\">Jumping on Trampolines</a></li>
					</ul><!-- end unstyled -->";
$years_to_join = 13 - $hangout1_age;
$search_keyword1 = "Parks";
$search_keyword2 = "Spongebob";
$search_ttd_count = 52;
$search_playlist_count = 3;
$location1_name = "Carrier Park";
$location1_categories = "Park";
$location1_address = "Carreir Park, Asheville, NC";
$location1_hours = "8:00am - Sunset";
$location1_rating = 86;
$location1_rating_count = 250;
$location1_grade = "B";
$location1_love_count = 63;
$location1_like_count = 155;
$location1_dislike_count = 22;
$location1_hate_count = 10;
$location1_people_been_here = 570;
$location1_ttd1 = "Play on the <a href=\"#\">Playground</a>";
$location1_ttd1_rating = 92;
$location1_ttd1_grade = "A";
$location1_ttd1_author = "Laurah Cruz";
$location1_ttd2 = "<a href=\"#\">Play Basketball</a>";
$location1_ttd2_rating = 78;
$location1_ttd2_grade = "C";
$location1_ttd2_author = "Rodney Smith";


?>

	<?php if ($type == "891+") : ?>
    	<section id="planmaker" class="hifi">
            <div class="row1">
                <div class="content">
                    <h2 class="pbm"><?php echo $headline; ?></h2>
                    <h3><?php echo $sub_headline; ?></h3>
                    <p class="pbs"><?php echo $p1; ?></p>
                    <p><?php echo $p2; ?></p>
                </div><!-- end content -->
            </div><!-- end row1 -->
            <figure class="row2 man">
                <aside class="tablet1 disable selection">
                    <img class="tablet" src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/tablet-hifi.png" />
                    <div class="tablet-contents">
                        <div class="panel relative">
                            <div class="media border bbs llllg mbs">
                                <div class="media-body">
                                    <div class="alert alert-info fs11 mbs">
                                        <span class="strong"><?php echo $hangout1_name; ?></span> isn&rsquo;t on <?php echo $site_name; ?>. Invite <?php if($hangout1_sex == "female"){echo "her";} else { echo "him"; } ?> when <?php if($hangout1_sex == "female"){echo "she";} else { echo "he"; } ?> turns <?php echo $hangout1_age; ?> in <?php echo $years_to_join; ?> years.
                                    </div><!-- rnf alert -->
                                    <p class="pbt"><?php echo $hangout1_name; ?> <span class="caption"><?php if($hangout1_sex == "female"){echo "Daughter";} else { echo "Son"; } ?> ( age <?php echo $hangout1_age; ?> )</span></p>
                                    <?php echo $hangout1_likes; ?>
                                    <div class="btn-group pbs">
                                        <button class="btn-small btn-primary btn">Make Plans for <?php if($hangout1_sex == "female"){echo "Her";} else { echo "Him"; } ?></button>
                                        <button class="btn-small btn-primary btn dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                            <li><a tabindex="-1" href="#">Make plans around boxing...</a></li>
                                            <li><a tabindex="-1" href="#">Make plans around working out...</a></li>
                                            <li><a tabindex="-1" href="#">Make plans around video games...</a></li>
                                            <li class="divider"></li>
                                            <li><a tabindex="-1" href="#">Chat with him...</a></li>
                                            <li><a tabindex="-1" href="#">Message him...</a></li>
                                        </ul>
                                    </div><!-- end btn-group -->
                                </div><!-- end media-body -->
                            </div><!-- end media -->
                            <div class="media border bbs llllg mbs">
                                <div class="media-body">
                                    <div class="alert alert-info fs11 mbs">
                                        <span class="strong"><?php echo $hangout2_name; ?></span> isn&rsquo;t on <?php echo $site_name; ?>. Invite <?php if($hangout2_sex == "female"){echo "her";} else { echo "him"; } ?> when <?php if($hangout2_sex == "female"){echo "she";} else { echo "he"; } ?> turns <?php echo $hangout2_age; ?> in <?php echo $years_to_join; ?> years.
                                    </div><!-- rnf alert -->
                                    <p class="pbt"><?php echo $hangout2_name; ?> <span class="caption"><?php if($hangout2_sex == "female"){echo "Daughter";} else { echo "Son"; } ?> ( age <?php echo $hangout2_age; ?> )</span></p>
                                    <?php echo $hangout2_likes; ?>
                                    <div class="btn-group pbs">
                                        <button class="btn-small btn-primary btn">Make Plans for <?php if($hangout2_sex == "female"){echo "Her";} else { echo "Him"; } ?></button>
                                        <button class="btn-small btn-primary btn dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                                            <li><a tabindex="-1" href="#">Make plans around boxing...</a></li>
                                            <li><a tabindex="-1" href="#">Make plans around working out...</a></li>
                                            <li><a tabindex="-1" href="#">Make plans around video games...</a></li>
                                            <li class="divider"></li>
                                            <li><a tabindex="-1" href="#">Chat with him...</a></li>
                                            <li><a tabindex="-1" href="#">Message him...</a></li>
                                        </ul>
                                    </div><!-- end btn-group -->
                                </div><!-- end media-body -->
                            </div><!-- end media -->
                        </div><!-- end panel -->
                    </div><!-- end tablet-contents -->
                </aside><!-- end tablet1 -->
                <aside class="tablet2 disable selection">
                    <img class="rotate270 tablet" src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/tablet-hifi.png" />
                    <div class="tablet-contents">
                        <div class="small panel">
                            <p class="pbt border bbs llllg mbs"><span class="strong"><?php echo $search_ttd_count; ?> Things to do</span> and <span class="strong"><?php echo $search_playlist_count; ?> playlist</span> related to <span class="strong"><?php echo $search_keyword1; ?></span> and <span class="strong"><?php echo $search_keyword2; ?></span></p>
                            <div class="media">
                                <div class="pull-left w100">
                                    <img class="pbt" src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/2427951753_e0372c034a_b-100x100.jpg" />
                                    <div class="media clearfix">
                                                <div class="pull-left">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2012/11/mapLight-10x10.png" />
                                                </div><!-- end pull-left -->
                                                <div class="media-body fs10 gryd pt2">
                                                    <?php echo $location1_address; ?>
                                                </div><!-- end media-body -->
                                            </div><!-- end media -->
                                            <div class="media clearfix">
                                                <div class="pull-left">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2012/11/clockLight-10x10.png" />
                                                </div><!-- end pull-left -->
                                                <div class="media-body fs10 gryd pt2">
                                                    <?php echo $location1_hours; ?>
                                                </div><!-- end media-body -->
                                            </div><!-- end media -->
                                </div><!-- end pull-left -->
                                <div class="media-body">
                                    <div class="media man">
                                        <div class="pull-right w100">
                                            <div class="clearfix border bbs lllg">
                                                <div class="media">
                                                    <div class="pull-left">
                                                        <div class="rating rating-small left">
                                                            <?php echo $location1_rating; ?> <span class="rating-b"><?php echo $location1_grade; ?></span>
                                                        </div><!-- end rating -->
                                                    </div><!-- end pull-left -->
                                                    <div class="media-body fs10">
                                                        <strong><?php echo $location1_rating_count; ?></strong> ratings
                                                    </div><!-- end media-body -->
                                                </div><!-- end media -->
                                            </div>
                                            <div class="graph graph-bar media man">
                                                <div class="y-axis pull-left">
                                                    <div class="row row-small">
                                                        <div class="media">
                                                            <div class="pull-left mrt">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2012/11/heartLight-10x10.png" />
                                                            </div><!-- end pull-left -->
                                                            <div class="media-body fs10">
                                                                <?php echo $location1_love_count; ?>
                                                            </div><!-- end media-body -->
                                                        </div><!-- end media -->
                                                    </div><!-- end row row-small -->
                                                    <div class="row row-small">
                                                        <div class="media">
                                                            <div class="pull-left mrt">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2012/11/thumbsUpLight-10x10.png" />
                                                            </div><!-- end pull-left -->
                                                            <div class="media-body fs10">
                                                                <?php echo $location1_like_count; ?>
                                                            </div><!-- end media-body -->
                                                        </div><!-- end media -->
                                                    </div><!-- end row row-small -->
                                                    <div class="row row-small">
                                                        <div class="media">
                                                            <div class="pull-left mrt">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2012/11/thumbsDownLight-10x10.png" />
                                                            </div><!-- end pull-left -->
                                                            <div class="media-body fs10">
                                                                <?php echo $location1_dislike_count; ?>
                                                            </div><!-- end media-body -->
                                                        </div><!-- end media -->
                                                    </div><!-- end row row-small -->
                                                    <div class="row row-small">
                                                        <div class="media">
                                                            <div class="pull-left mrt">
                                                                <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2012/11/xmarkLight-10x10.png" />
                                                            </div><!-- end pull-left -->
                                                            <div class="media-body fs10">
                                                                <?php echo $location1_hate_count; ?>
                                                            </div><!-- end media-body -->
                                                        </div><!-- end media -->
                                                    </div><!-- end row row-small -->
                                                </div><!-- end y-axis -->
                                                <div class="chart media-body">
                                                    <div class="bar bar-small bar-love w25p"></div>
                                                    <div class="bar bar-small bar-like w62p"></div>
                                                    <div class="bar bar-small bar-dislike w9p"></div>
                                                    <div class="bar bar-small bar-hate w4p"></div>
                                                </div><!-- end chart -->
                                            </div><!-- end graph -->
                                            <div class="media clearfix">
                                        <div class="pull-left">
                                            <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2012/11/markerLight-10x10.png" />
                                        </div><!-- end pull-left -->
                                        <div class="media-body fs10 gryd pt2">
                                            <?php echo $location1_people_been_here; ?>
                                        </div><!-- end media-body -->
                                    </div><!-- end media -->
                                        </div><!-- end pull-right -->
                                        <div class="media-body">
                                            <h6 class="pbxt strong"><a href="#"><?php echo $location1_name; ?></a></h6>
                                            <div class="fs11  pbt">
                                                <?php echo $location1_categories; ?>
                                            </div><!-- fs11 -->
                                            <div class="caption">
                                            <strong class="fs11">Things to do:</strong>
                                            <form>
                                                <label class="checkbox border bbs llllg">
                                                    <input type="checkbox" class="fs12">
                                                    <div class="fs12">
                                                        <?php echo $location1_ttd1; ?>
                                                        <div class="mtn5">
                                                            <span class="rating rating-mini">
                                                                <?php echo $location1_ttd1_rating; ?> <span class="rating-a"><?php echo $location1_ttd1_grade; ?></span>
                                                            </span><!-- end rating -->
                                                            <a href="#" class="fs10">Rate</a>
                                                            <span class="caption fs10">| Suggestion from <a href="#"><?php echo $location1_ttd1_author; ?></a></span>
                                                        </div><!-- end mtn5 -->
                                                    </div><!-- end fs12 -->
                                                </label>
                                                <label class="checkbox border bbs llllg">
                                                    <input type="checkbox" class="fs12">
                                                    <div class="fs12">
                                                        <?php echo $location1_ttd2; ?>
                                                        <div class="mtn5">
                                                            <span class="rating rating-mini">
                                                                <?php echo $location1_ttd2_rating; ?> <span class="rating-c"><?php echo $location1_ttd2_grade; ?></span>
                                                            </span><!-- end rating -->
                                                            <a href="#" class="fs10">Rate</a>
                                                            <span class="caption fs10">| Suggestion from <a href="#"><?php echo $location1_ttd2_author; ?></a></span>
                                                        </div><!-- end mtn5 -->
                                                    </div><!-- end fs12 -->
                                                </label>
                                                    
                                                
                                            </form>
                                        </div><!-- end media-body -->
                                    </div><!-- end media -->
                                </div><!-- end media-body -->
                            </div><!-- end media -->
                        </div><!-- end small panel -->
                    </div><!-- end tablet-contents -->
                </aside><!-- end tablet2 -->
                <aside class="step1">
                    <div class="line1"></div>
                    <div class="circle"></div>
                    <div class="line2"></div>
                </aside><!-- end step1 -->
            </figure><!-- end row2 -->
            <aside class="planmaker-bg">
                <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/kids-playing-hifi.jpg" />
            </aside><!-- end do_everything-bg -->
        </section><!-- end planmaker -->
    <?php elseif ($type == "520+") : ?>
    	<h1>Tablet</h1>
    <?php elseif ($type == "320+") : ?>
    	<h1>Smartphone</h1>
   	<?php elseif ($type == "rs") : ?>
    	<!-- actionbar -->
        <div  
        	data-r321='<?php launch_planmaker("320+"); ?>'
            data-r521='<?php launch_planmaker("520+"); ?>'
            data-r892='<?php launch_planmaker("891+"); ?>'
        > 
            
        </div><!-- end actionbar -->
    <?php else : endif; ?>
		
	<?php return true;
}

// Launch Planmaker @since superamazing 1.1.4
function launch_dating($type) { 
$site_name = "Super Amazing";
$headline = "Dating Without Blind Dating";
$sub_headline = "Our dating process ensures you’re not left surprised.";
$p1 = "Dating online is a guessing game. More than not, the person you’re looking at online isn’t anything like the one in real life. $site_name dating process has fixed this.";
$p2 = "Find your match and message them. If things are going well, have your first video date. This insures the person is who they say they are. Plan your first date with Plan Maker and enjoy dating without the surprise.";
$match1_name = "Sarah Thomson";
$match1_hangout_status = "Currently free to hangout";
$match1_personality_type = "ISFP - Quiet, serious, sensitive and kind. Do not like conflict, and not likely to do things which may generate conflict. Loyal and faithful. Extremely well-developed senses, and aesthetic appreciation for beauty. Not interested in leading or controlling others. Flexible and open-minded. Likely to be original and creative. Enjoy the present moment.";
$match1_what_others_say = "Clever, reader, thoughtful, pretty, loving, creative";
$match1_stat_friend = "73%";
$match1_stat_match = "98%";
$match1_word1 = "Playful";
$match1_word2 = "Intelligent";
$match1_word3 = "an Animal Lover";
$match2_name = "David Romano";
$match2_hangout_status = "Will be free at 7pm";
$match2_personality_type = "INTP - Logical, original, creative thinkers. Can become very excited about theories and ideas. Exceptionally capable and driven to turn theories into clear understandings. Highly value knowledge, competence and logic. Quiet and reserved, hard to get to know well. Individualistic, having no interest in leading or following others.";
$match2_what_others_say = "loud, awesome, adventrous, lover, social, lively, musician";
$match2_stat_friend = "85%";
$match2_stat_match = "94%";
$match2_word1 = "Outgoing";
$match2_word2 = "Smooth";
$match2_word3 = "Business Man";


?>

	<?php if ($type == "891+") : ?>
    	<section id="dating" class="hifi">
        	<div class="row1">
            	<h2 class="pbm"><?php echo $headline; ?></h2>
                <h3><?php echo $sub_headline; ?></h3>
                <p class="pbs"><?php echo $p1; ?></p>
                <p><?php echo $p2; ?></p>
            </div><!-- end row1 -->
            <aside class="row2">
            	<div class="laptop">
                	<img class="device" src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/laptop-hifi.png" />
                    <div class="content">
                		<div class="small panel">
                        	<div class="media">
                            	<div class="pull-left">
                                	<img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/02/dating-profile-girl-hifi.jpg" />
                                </div><!-- end pull-left -->
                                <div class="media-body">
                                	<div class="clearfix pbt border bbs lllg">
                                		<strong><?php echo $match1_name; ?></strong>
                                        <span class="caption"><?php echo $match1_hangout_status; ?></span>
                                        <a href="#" class="right btn-mini btn-primary fs9 pa2">Interested</a>
                                  	</div><!-- end clearfix -->
                                    <div class="clearfix pbt border bbs lllg pvt media">
                                    	<div class="pull-left mrxt">
                                        	<img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2012/11/atomLight-10x10.png" />
                                        </div><!-- end pull-left -->
                                        <div class="media-body">
                                        	<div class="caption ellipsis"><?php echo $match1_personality_type; ?></div>
                                        </div><!-- end media-body -->
                                  	</div><!-- end media -->
                                    <div class="clearfix pbt border bbs lllg pvt media">
                                    	<div class="pull-left mrxt">
                                        	<img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2012/11/familyLight-10x10.png" />
                                        </div><!-- end pull-left -->
                                        <div class="media-body">
                                        	<div class="caption ellipsis"><?php echo $match1_what_others_say; ?></div>
                                        </div><!-- end media-body -->
                                  	</div><!-- end media -->
                                    <div class="clearfix pbt border bbs lllg pvt media">
                                    	<div class="pull-left mrxt">
                                        	<img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2012/11/flaskLight-10x10.png" />
                                        </div><!-- end pull-left -->
                                        <div class="media-body">
                                        	<div class="caption ellipsis">94% Match, 80% Friend - Try talking to Sarah about Puppies, Cotton Candy, and The Hangover (movie)</div>
                                        </div><!-- end media-body -->
                                  	</div><!-- end media -->
                                    <div class="clearfix">
                                    	I&rsquo;m <h5 class="inline"><?php echo $match1_word1; ?></h5>, <h5 class="inline"><?php echo $match1_word2; ?></h5>, &amp; <h5 class="inline"><?php echo $match1_word3; ?></h5>
                                    </div><!-- end clearfix -->
                                </div><!-- end media-body -->
                            </div><!-- end media -->
                        </div><!-- end panel -->
                	</div><!-- end content -->
                </div><!-- end laptop -->
                <div class="tablet">
                	<img class="device" src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/tablet-hifi.png" />
                    <div class="content">
                		<div class="small panel">
                        	<div class="media">
                            	<div class="pull-left">
                                	<img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/02/dating-profile-guy-hifi.jpg" />
                                </div><!-- end pull-left -->
                                <div class="media-body">
                                	<div class="clearfix pbt">
                                		<strong><?php echo $match2_name; ?></strong>
                                        <span class="caption"><?php echo $match2_hangout_status; ?></span>  
                                  	</div><!-- end clearfix -->
                                    <div class="clearfix border bbs lllg pbt">
                                    	<a href="#" class="btn-mini btn-primary fs9 pa2">Interested</a>
                                    </div><!-- end clearfix -->
                                    <div class="clearfix pbt border bbs lllg pvt media">
                                    	<div class="pull-left mrxt">
                                        	<img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2012/11/atomLight-10x10.png" />
                                        </div><!-- end pull-left -->
                                        <div class="media-body">
                                        	<div class="caption ellipsis"><?php echo $match2_personality_type; ?></div>
                                        </div><!-- end media-body -->
                                  	</div><!-- end media -->
                                    <div class="clearfix pbt border bbs lllg pvt media">
                                    	<div class="pull-left mrxt">
                                        	<img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2012/11/familyLight-10x10.png" />
                                        </div><!-- end pull-left -->
                                        <div class="media-body">
                                        	<div class="caption ellipsis"><?php echo $match2_what_others_say; ?></div>
                                        </div><!-- end media-body -->
                                  	</div><!-- end media -->
                                    <div class="clearfix pbt border bbs lllg pvt media">
                                    	<div class="pull-left mrxt">
                                        	<img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2012/11/flaskLight-10x10.png" />
                                        </div><!-- end pull-left -->
                                        <div class="media-body">
                                        	<div class="caption ellipsis">94% Match, 80% Friend - Try talking to Sarah about Puppies, Cotton Candy, and The Hangover (movie)</div>
                                        </div><!-- end media-body -->
                                  	</div><!-- end media -->
                                    <div class="clearfix">
                                    	I&rsquo;m <h5 class="inline"><?php echo $match2_word1; ?></h5>, <h5 class="inline"><?php echo $match2_word2; ?></h5>, &amp; <h5 class="inline"><?php echo $match2_word3; ?></h5>
                                    </div><!-- end clearfix -->
                                </div><!-- end media-body -->
                            </div><!-- end media -->
                        </div><!-- end panel -->
                	</div><!-- end content -->
                </div><!-- end tablet -->
                <div class="smartphone1">
                	<img class="device" src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/smartphone-hifi.png" />
                    <div class="content">
                		<div class="small panel pa2 man">
                        	<div class="media pbt man">
                            	<div class="pull-left mr2">
                                	<img class="w15" src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/02/dating-guy-profile-thumb.jpg" />
                                </div><!-- end pull-left -->
                                <div class="media-body fs8">
                                	I love that movie! I couldn&rsquo;t stop laughing. Especially where they find out they&rsquo;ve been roofied.
                                </div><!-- end media-body -->
                            </div><!-- end media -->
                            <div class="media pbt man">
                            	<div class="pull-left mr2">
                                	<img class="w15" src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/02/dating-girl-profile-thumb.jpg" />
                                </div><!-- end pull-left -->
                                <div class="media-body fs8">
                                	LMAO! Yeah, it&rsquo;s always good to have a good laugh after such long days at the vet. I literally work like 50 hours a week.
                                </div><!-- end media-body -->
                            </div><!-- end media -->
                        </div><!-- end small panel -->
                	</div><!-- end content -->
                </div><!-- end smartphone1 -->
                <div class="smartphone2">
                	<img class="device" src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/smartphone-hifi.png" />
                    <div class="content">
                		<div class="small panel pa2 man">
                        	<div class="media pbt man clearfix">
                            	<div class="pull-left mr2">
                                	<img class="w15" src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/02/dating-girl-profile-thumb.jpg" />
                                </div><!-- end pull-left -->
                                <div class="media-body fs8">
                                	You&rsquo;re so funny!
                                </div><!-- end media-body -->
                            </div><!-- end media -->
                        	<div class="media pbt man">
                            	<div class="pull-left mr2">
                                	<img class="w15" src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/02/dating-guy-profile-thumb.jpg" />
                                </div><!-- end pull-left -->
                                <div class="media-body fs8">
                                	You&rsre the whole package. Absolutely beautiful, stunning, smart, and sexy. I&rsquo;d love to have our first video date <3?
                                </div><!-- end media-body -->
                            </div><!-- end media -->
                            <div class="media pbt man">
                            	<div class="pull-left mr2">
                                	<img class="w15" src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/02/dating-girl-profile-thumb.jpg" />
                                </div><!-- end pull-left -->
                                <div class="media-body fs8">
                                	Yes! Tonight 7pm! Here.
                                </div><!-- end media-body -->
                            </div><!-- end media -->
                        </div><!-- end small panel -->
                	</div><!-- end content -->
                </div><!-- end smartphone2 -->
                <div class="smartphone3">
                	<img class="device" src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/smartphone-hifi.png" />
                    <div class="content">
                		<img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/02/video-date-girl-hifi.jpg" />
                	</div><!-- end content -->
                </div><!-- end smartphone3 -->
                <div class="smartphone4">
                	<img class="device" src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/smartphone-hifi.png" />
                    <div class="content">
                		<img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/02/video-date-guy-hifi.jpg" />
                	</div><!-- end content -->
                </div><!-- end smartphone4 -->
            </aside><!-- end row2 -->
            <aside class="step1">
            	<div class="line1"></div>
                <div class="circle circle1"></div>
                <div class="circle circle2"></div>
                <div class="circle circle3"></div>
                <div class="circle circle4"></div>
                <div class="line2"></div>
            </aside><!-- end step1 -->
    		<aside class="dating-bg">
                <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/02/dating-bg-hifi.jpg" />
            </aside><!-- end do_everything-bg -->
   	 	</section><!-- end dating -->
    <?php elseif ($type == "520+") : ?>
    	<h1>Tablet</h1>
    <?php elseif ($type == "320+") : ?>
    	<h1>Smartphone</h1>
   	<?php elseif ($type == "rs") : ?>
    	<!-- actionbar -->
        <div  
        	data-r321='<?php launch_dating("320+"); ?>'
            data-r521='<?php launch_dating("520+"); ?>'
            data-r892='<?php launch_dating("891+"); ?>'
        > 
            
        </div><!-- end actionbar -->
    <?php else : endif; ?>
		
	<?php return true;
}

// Launch Relationships @since superamazing 1.1.4
function launch_relationships($type) { 
$site_name = "Super Amazing";
$headline = "Improve all of your relationships";
$sub_headline = "Give everyone the time they deserve.";
$p1 = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla feugiat libero in lacus aliquet vestibulum. Fusce venenatis sapien et leo interdum dapibus. Praesent enim nunc, venenatis eu eleifend eu, mattis in mi. Nullam turpis orci, consectetur ac tincidunt sit amet, rutrum sed massa. Nunc felis eros, faucibus a accumsan a";
$p2 = "";
$catch_up_name = "Michael Smith";
$catch_up_time_lapse = "2 weeks";
$catch_up_sex = "male";
$event = "Vow Renewal Ceremony";
$event_time_till = "3 weeks";
$event_date = "5:00pm, July 8th, 2013";

?>

	<?php if ($type == "891+") : ?>
    	<section id="relationships" class="hifi">
            <section class="row1">
                <div class="col1">
                    <img class="smartphone1 rotate270" src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/smartphone-hifi.png" />
                    <aside class="smartphone1_contents disable selection">
                        <div class="panel">
                            <p class="fs12 pbt">You haven&rsquo;t spent time with <a class="strong" href="#"><?php echo $catch_up_name; ?></a> in <strong><?php echo $catch_up_time_lapse; ?></strong>.</p>
                            <div class="media clearfix">
                                <div class="pull-left mrt">
                                    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/3364082436_66ccc512df_z-50x50.jpg
    " />
                                </div><!-- end pull-left -->
                                <div class="media-body">
                                    <p class="fs12 pbs"><?php if($hangout2_sex == "female"){echo "She";} else { echo "He"; } ?>&rsquo;s planning his <a class="strong" href="#"><?php echo $event; ?></a> <strong><?php echo $event_time_till; ?></strong>. Request an invitation?</p>
                                    <a href="#" class="btn btn-small btn-primary">Yes</a>
                                    <a href="#" class="btn btn-small">No</a>
                                    <a href="#" class="btn btn-small">Make Other Plans</a>
                                </div><!-- end media-body -->
                            </div><!-- end media clearfix -->
                        </div><!-- end panel -->
                    </aside><!-- end aside -->
                    <img class="smartphone2 rotate270" src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/smartphone-hifi.png" />
                    <aside class="smartphone2_contents disable selection">
                        <div class="panel">
                            <div class="media clearfix">
                                <div class="pull-right mls">
                                    <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/3364082436_66ccc512df_z-50x50.jpg
    " />
                                </div><!-- end pull-left -->
                                <div class="media-body">
                                    <p class="fs12 pbt"><a class="strong" href="#"><?php echo $catch_up_name; ?></a> invited you to <strong><?php echo $event; ?></strong>.</p>
                                    <div class="caption clearfix pbt"><?php echo $event_date; ?></div>
                                    <a href="#" class="btn btn-small btn-primary">Join</a>
                                    <a href="#" class="btn btn-small">Maybe</a>
                                    <a href="#" class="btn btn-small">Decline</a>
                                </div><!-- end media-body -->
                            </div><!-- end media clearfix -->
                        </div><!-- end panel -->
                    </aside><!-- end aside -->
                </div><!-- end col1 -->
                <div class="col2">
                    <div class="content">
                        <h2 class="pbm"><?php echo $headline; ?></h2>
                        <h3><?php echo $sub_headline; ?></h3>
                        <p><?php echo $p1; ?></p>
                    </div><!-- end content -->
                    <aside class="relation-health">
                        <div class="clearfix border bbs lllg">
                                    <div class="rating rating left">
                                        <span class="txt_wht">36</span> <span class="rating-d">D</span>
                                    </div><!-- end rating -->
                                </div>
                                <div class="graph graph-bar media man">
                                    <div class="y-axis pull-left">
                                        <div class="row txt_wht strong">
                                             You
                                        </div><!-- end row row-small -->
                                        <div class="row txt_wht strong">
                                            Partner
                                        </div><!-- end row row-small -->
                                        <div class="row txt_wht strong">
                                            Family
                                        </div><!-- end row row-small -->
                                        <div class="row txt_wht strong">
                                            Best Friends
                                        </div><!-- end row row-small -->
                                        <div class="row txt_wht strong">
                                            Connections
                                        </div><!-- end row row-small -->
                                        <div class="row txt_wht strong">
                                            New Friends
                                        </div><!-- end row row-small -->
                                    </div><!-- end y-axis -->
                                    <div class="chart media-body">
                                        <div class="media">
                                            <div class="pull-right y-axis">
                                                <div class="row txt_wht">
                                                     <strong>50%</strong> - Fair
                                                </div><!-- end row row-small -->
                                                <div class="row txt_wht">
                                                    <strong>70%</strong> - Healthy
                                                </div><!-- end row row-small -->
                                                <div class="row txt_wht">
                                                    <strong>25%</strong> - Uhhealthy
                                                </div><!-- end row row-small -->
                                                <div class="row txt_wht">
                                                    <strong>30%</strong> - Unhealthy
                                                </div><!-- end row row-small -->
                                                <div class="row txt_wht">
                                                    <strong>10%</strong> - Critical
                                                </div><!-- end row row-small -->
                                                <div class="row txt_wht">
                                                    <strong>30%</strong> - Unhealthy
                                                </div><!-- end row row-small -->
                                            </div><!-- end pull-right -->
                                            <div class="media-body">
                                                <div class="bar bar-fair w50p"></div>
                                                <div class="bar bar-healthy w70p"></div>
                                                <div class="bar bar-unhealthy w25p"></div>
                                                <div class="bar bar-unhealthy w30p"></div>
                                                <div class="bar bar-critical w10p"></div>
                                                <div class="bar bar-unhealthy w30p"></div>
                                            </div><!-- end media-body -->
                                        </div><!-- end media -->
                                    </div><!-- end chart -->
                                </div><!-- end graph -->
                    </aside><!-- end relation-health -->
                </div><!-- end col2 -->
            </section><!-- end row1 -->
            <section class="row2">
                <h2 class="txtC">The New Social Network</h2>
                <h5 class="pbs txtC">Enter your email to get notified when <?php site_info("name"); ?> is ready and for a chance to win $100 and early access.</h5>
                <div class="input-append">
                    <form class="form-inline pbt man">
                      <input type="text" class="input-large border-radius-none fs18" placeholder="Email">
                      <button class="btn btn-join border-radius-none" type="button">Submit</button>
                    </form>
                </div><!-- end input-append -->
            </section><!-- end row3 -->
            <aside class="step1">
                <div class="line1"></div>
                <div class="circle circle1"></div>
                <div class="line2"></div>
                <div class="circle circle2"></div>
                <div class="line3"></div>
            </aside><!-- end step1 -->
            <aside class="relationships-bg">
                <img src="<?php echo get_template_directory_uri(); ?>/../../uploads/2013/01/wedding-hifi.jpg" />
            </aside><!-- end do_everything-bg -->
        </section><!-- end relationships -->
    <?php elseif ($type == "520+") : ?>
    	<h1>Tablet</h1>
    <?php elseif ($type == "320+") : ?>
    	<h1>Smartphone</h1>
   	<?php elseif ($type == "rs") : ?>
    	<!-- actionbar -->
        <div  
        	data-r321='<?php launch_relationships("320+"); ?>'
            data-r521='<?php launch_relationships("520+"); ?>'
            data-r892='<?php launch_relationships("891+"); ?>'
        > 
            
        </div><!-- end actionbar -->
    <?php else : endif; ?>
		
	<?php return true;
}
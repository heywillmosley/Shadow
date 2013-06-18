<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package _s
 * @since _s 1.0
 */

get_header(); ?>
<div class="primary panel">
	Create child theme with index.php to overwrite this page.
</div><!-- end primary panel -->
<div class="leftCol disabled">
    <ul class="four side-nav toc">
    	<li class="head">Contents</li>
     	<a href="#"><li class="active">Welcome</li></a>
      	<a href="#"><li>The Grid</li></a>
      	<a href="#"><li>Link 3</li></a>
      	<a href="#"><li>Link 4</li></a>
    </ul>
</div><!-- end leftCol -->
<div class="row">
    <div class="twelve columns">
  		<div class="main lc">
        	<div class="panel bn">
        		<h1 class="pbs">Welcome to <?php shadowName(); ?></h1>
                <h4 class="pbs">Wordpress development streamlined, responsive and futureproof.</h4>
          	</div><!-- end panel bn -->
            <div class="panel bn clearfix disabled">
            	<a href="#" class="large primary button left mrs mtn">Download <?php shadowName(); ?> 0.1 Alpha</a>
                <a href="#" class="secondary button left mts">Clone on Github</a>
            </div><!-- end panel -->
            <div class="panel bn">
            	<h3 class="pbs">What is <?php shadowName(); ?>?</h3>
                <p class="pbs"><?php shadowName(); ?> is a hybrid of everything <em>sexy</em> in web development.</p>
                <p class="pbs"><em>Really?</em></p>
                <p class="pbs"><?php shadowName(); ?> combines the revision control of <a href="http://github" target="_blank">Github</a>, <a href="http://markjaquith.wordpress.com" target="_blank">Mark Jaquith</a>'s <a href="http://markjanquith.wordpress.ocom/2012/05/26/wordpress-skeleton" target="_blank">Wordpress Skeleton</a> setup with local-config.php for streamline production to live database configuration, <a href="http://wordpress.org" target="_blank">Wordpress's</a> most <a href="https://github.com/wordpress/wordpress" target="_blank">current version</a> of Wordpress, <?php shadowName(); ?>'s <a href="#" class="disabled link">master_ninja</a> parent theme built off of, 1,000 hour head start, <a href="http://themeshaper.com/2012/02/13/introducing-the-underscores-theme/" target="_blank">_s</a>  theme by, <a href="http://themeshaper.com" target="_blank">Theme Shaper</a> for <a href="http://www.html5rocks.com/en/" target="_blank">HTML5</a> readiness (and other goodness); with <a href="foundation.zurb.com" target="_blank">Foundation's</a> most advance responsive front-end framework in the world, <a href="#" class="disabled link">master.css</a> for more streamlined functionality like <a href="#" class="disabled link">hide</a>, <a href="#" class="disabled link">show</a>, <a href="#" class="disabled link">disabled</a>, <a href="#" class="disabled link">left</a> and <a href="#" class="disabled link">right</a>. (Plus tons more)</p> 
                <p class="pbm">Developers can then build <a href="http://codex.wordpress/Child_Themes">child themes</a> with all of this functionality without having to worry about their theme breaking when upgrades are neccessary.
                <h3 class="pbs">Why <?php shadowName(); ?>?</h3>
                <p class="pbm"><strong>Save money, save hours</strong>. <?php shadowName(); ?> was built to help wordpress theme developers streamline their development process and save development hours on client projects. Resulting in saved time a more revenue.</p>
                <h3 class="pbs">Get Started</h3>
                <p class="pbs"><strong>Save money, save hours</strong>. <?php shadowName(); ?> was built to help wordpress theme developers streamline their development process and save development hours on client projects. Resulting in saved time a more revenue.</p>
            </div>
       	</div><!-- end panel bn -->
	</div><!-- end twelve columns -->
</div><!-- end row -->
<?php get_footer(); ?>
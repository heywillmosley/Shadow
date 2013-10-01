<?php defined('INDEX') or die() and exit(); // Prevents direct script access
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
 * Class
 */
 
// --------------------------------------------------------------------------------

/**
 * Class description
 * @since 0.1.1 s7
 * @author William Mosley, III <will@livesuperamazing.com>
 * 0 Arguments
 * 0 Methods
 */
class Time
{
	# Get Days in Month @since 0.1.1 s5
	function get_days_in_month($month, $year)
	{
	   return $month == 2 ? ($year % 4 ? 28 : ($year % 100 ? 29 : ($year %400 ? 28 : 29))) : (($month - 1) % 7 % 2 ? 30 : 31);
	}
	
	# Is Leap Year @since 0.1.1 s5
	function is_leap_year($year)
	{
		return ((($year % 4) == 0) && ((($year % 100) != 0) || (($year %400) == 0)));
	}
	
	# Get Age @since 0.1.1 s5
	function getAge($birthday){
		
		list($year,$month,$day) = explode("-",$birthday);
		$year_diff  = date("Y") - $year;
		$month_diff = date("m") - $month;
		$day_diff   = date("d") - $day;
		if ($day_diff < 0 || $month_diff < 0)
		  $year_diff--;
		return $year_diff;      
	}
	
} // end ClassName
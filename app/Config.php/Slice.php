<?php namespace Config;
use CodeIgniter\Config\BaseConfig;

class Slice extends BaseConfig
{
	public $slice_ext = '.slice.php';

	/*
	|--------------------------------------------------------------------------
	| Cache Expiration Time
	|--------------------------------------------------------------------------
	|
	| Set the amount of time to keep the file in cache
	|
	*/
	public $cache_time = 3600;

	/*
	|--------------------------------------------------------------------------
	| Enable/Disable Autoload
	|--------------------------------------------------------------------------
	|
	| Set to TRUE to autoload CodeIgniter Libraries and Helpers
	|
	*/
	public $enable_autoload = true;

	/*
	|--------------------------------------------------------------------------
	| Resources to Autoload
	|--------------------------------------------------------------------------
	|
	| List of Libraries and Helpers to autoload with Slice-Library.
	|
	| WARNING: To autoload this resources you must set 'enable_autoload'
	| variable to TRUE.
	|
	*/
	public $libraries = array();
	public $helpers = array();
	public $language = 'en';

	/*
	|--------------------------------------------------------------------------
	| Load Slice Helper
	|--------------------------------------------------------------------------
	|
	| Set to TRUE and Slice helper file will be loaded in the initialization.
	| Make sure you have the proper file at application/helper/slice_helper.php
	|
	*/
	public $enable_helper = TRUE;

	public $cfg = [
		'slice_ext'			=> '.slice.php',
		'cache_time'		=> 3600,
		'enable_autoload'	=> true,
		'libraries'			=> array(),
		'helpers'			=> array(),
		'enable_helper'		=> TRUE,
	];
}

<?php 
class Input
{
	/**
	 * Check if a given value was passed in the request
	 *
	 * @param string $key index to look for in request
	 * @return boolean whether value exists in $_POST or $_GET
	 */
	public static function has($key)
	{
		if (isset($_REQUEST[$key])) {
			return true;
		} else {
			return false;
		}
	}
	public static function isPost()
	{
		return $_POST;
	}
	public static function getString($key)
	{
		if (!is_string($key))
		{
			throw new exception ('This field requires a string input');
		}
		return self::get($key);
	}
	public static function getNumber($key)
	{
		if (!is_string($key))
		{
			throw new exception ('This field requires numeric input');
		}
		return self::get($key);
	}
	/**
	 * Get a requested value from either $_POST or $_GET
	 *
	 * @param string $key index to look for in index
	 * @param mixed $default default value to return if key not found
	 * @return mixed value passed in request
	 */
	public static function get($key, $default = null)
	{
		//checks for the value of $key and requests that value returning null if none.
		return self::has($key) ? $_REQUEST[$key] : $default;
	}


	///////////////////////////////////////////////////////////////////////////
	//                      DO NOT EDIT ANYTHING BELOW!!                     //
	// The Input class should not ever be instantiated, so we prevent the    //
	// constructor method from being called. We will be covering private     //
	// later in the curriculum.                                              //
	///////////////////////////////////////////////////////////////////////////
	private function __construct() {}
}
<?php
class Log {
	public $filename;
	public $handle;
	public $date;
	public function __construct($prefix = 'log')
	{	
		$this->filename = $prefix . '-' . date('Y-m-d') . '.log';
		$this->handle = fopen($this->filename, 'a');
		$this->date = date('Y-m-d H:i:s');
		
	}
	public function logMessage($logLevel, $message) 
	{
		fwrite($this->handle, $this->date . ' [{$logLevel}] ' . $message);
	}
	public function logInfo($message)
	{
		$this->logMessage("info ", $message) . "\n";
	}
	public function logError($message)
	{
		$this->logMessage("error ", $message) . "\n";
	}
	public function __destruct() {
		echo "all done" . "\n";
		fclose($this->handle);
	}
}

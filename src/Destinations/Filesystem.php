<?php

namespace Logger\Destinations;

use Logger\Destinations\DestinationInterface;

$file = 'blacklight.log';

$data = "This is just a Test";

class Filesystem implements DestinationInterface {
	public function __construct($file) {
	   	// Save data to a file, appending it to a newline. Create the file if it doesn't exist.
	   	// Note: $data is a string — it's already been run through your Formatter->format function

	   	this->$file = $file;

	   	this->$data = $data;

	   	file_put_contents($this->file, $data . "\n", FILE_APPEND); 	
	}
}

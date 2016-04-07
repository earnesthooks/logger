<?php

use Logger/Destinations/DestinationInterface;

$file = 'blacklight.txt';

$data = "This is just a Test\n\r";

class Filesystem implements DestinationInterface {
	public function __construct($file) {
	   	// Save data to a file, appending it to a newline. Create the file if it doesn't exist.
	   	// Note: $data is a string — it's already been run through your Formatter->format function

	   	this->$file = $file;

	   	file_put_contents($this->file, $data . "\n", FILE_APPEND); 	
	}
}

<?php

namespace Logger\Destinations;

class Filesystem implements DestinationInterface {

	private $file;

	private $data;
	
	public function __construct($file, array $data) {
	   	// Save data to a file, appending it to a newline. Create the file if it doesn't exist.
	   	// Note: $data is a string — it's already been run through your Formatter->format function

	   	$this->file = $file;

	   	$this->data = $data;

	   	file_put_contents($file, $data . "\n", FILE_APPEND);
	}

}

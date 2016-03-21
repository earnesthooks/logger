<?php

$file = 'blacklight.txt';

$data = "This is just a Test\n\r";

function save($data) {
   	// Save data to a file, appending it to a newline. Create the file if it doesn't exist.
   	// Note: $data is a string — it's already been run through your Formatter->format function

   	$data = "This is just a Test\n\r";

   	$file = 'blacklight.txt';

	file_put_contents ($file, $data);
}

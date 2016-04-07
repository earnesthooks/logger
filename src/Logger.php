<?php

require_once __DIR__.'/vendor/autoload.php'; //Autoload files with Composer

namespace Logger;

use Logger\Destinations\DestinationInterface;
use Logger\Formatters\FormatterInterface;

// Create a logger and pass it the destination and formatter you want to use.
// Note the Filesystem needs to have a __construct__ function that takes the 
// path to the log file you want. You'll need to implement that in 
// src/Logger/Destinations/Filesystem.php

class Logger {

	private $destination;

	private $formatter;

	public function __construct(DestinationInterface $destination, FormatterInterface $formatter) {
		$this->destination = $destination;
		$this->formatter = $formatter;
	}
	public function log(array $data) {
		$this->destination->save($this->formatter->format($data));
	}
}

$logger = new Logger(new Filesystem(__DIR__ . '/logs/blacklight.log'), new JSON);

// Now Log something
$logger->log([
    'name' => 'Earnest',
    'worked' => 'yes'
]);
​
echo 'Done!';
​
// You should see this in your log file blacklight.log
// {"name": "Earnest", "worked": "yes"}
​
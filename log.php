<?php

require_once _DIR_ . '/../vendor/autoload.php'; //Autoload files with Composer

use Logger\Destinations\Filesystem;
use Logger\Destinations\Email;
use Logger\Destinations\Webhook;

use Logger\Formatters\XMLFormatter;
use Logger\Formatters\CSVFormatter;
use Logger\Formatters\JSONFormatter;
use Logger\Formatters\SprintfFormatter;

// Destinations
// Filesystem (with path)
// Email (subject and to)
// Webhook (specify URL)
// MySQL

// Formatters:
// XML, CSV, JSON, Sprintf -> getExtension() .xml, .csv, .json, .log

// Timestamp
// Status code of response
// Request URI
// User Agent



$logger = new Logger(new Filesystem(__DIR__ . '/logs/blacklight.log'), new JSONFormatter);

$logger->log([
	'timestamp' => new \DateTime, 
	'status' => 200, 
	'uri' => $_SERVER['REQUEST_URI'], 
	'user_agent' => '..'
]);

interface FormatterInterface {
	public function format(array $data);
}

interface DestinationInterface {
	public function save($data);
}

abstract class DestinationAbstract {
	public function save($data) {
		if (!is_string($data)) {
			throw new \Exception('Only strings are allowed');
		}
	}
}

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
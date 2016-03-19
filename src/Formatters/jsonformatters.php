<?php

namespace Logger\JSONFormatter;

/*interface FormatterInterface {
	public function format(array $data);
}

abstract class FormatterAbstract {
	public function save($data) {
		if (!is_string($data)) {
			throw new \Exception('Only strings are allowed');
		}
	}
}*/

class logger{

public function __construct(){
    echo 'hi';
  }

}

$object = new logger();

var_dump($object);
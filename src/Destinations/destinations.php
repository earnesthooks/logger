<?php

namespace Logger\Destinations;

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
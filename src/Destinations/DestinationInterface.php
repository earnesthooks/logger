<?php

namespace Logger\Destinations;

interface DestinationInterface {
	public function save(array $data);
}
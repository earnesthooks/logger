<?php

namespace Logger\Destinations;

interface DestinationInterface {
	public function save($data);
}
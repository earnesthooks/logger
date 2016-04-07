<?php

namespace Logger;

use Logger\Formatters\FormatterInterface;

function(array $data) {
   return json_encode($data);
}
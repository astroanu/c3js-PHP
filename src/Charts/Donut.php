<?php namespace Astroanu\C3jsPHP\Charts;

class Donut implements \JsonSerializable {

	private $data = [];

	public function JsonSerialize()
    {
        return $this->data;
    }
}
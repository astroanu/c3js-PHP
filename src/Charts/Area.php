<?php namespace Astroanu\C3jsPHP\Charts;

class Area implements \JsonSerializable {

	private $data = [];

	public function JsonSerialize()
    {
        return $this->data;
    }
}
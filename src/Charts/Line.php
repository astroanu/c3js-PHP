<?php namespace Astroanu\C3jsPHP\Charts;

class Line implements \JsonSerializable {

	private $data = [];

	public function JsonSerialize()
    {
        return $this->data;
    }
}
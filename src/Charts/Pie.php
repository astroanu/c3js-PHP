<?php namespace Astroanu\C3jsPHP\Charts;

class Pie implements \JsonSerializable {

	private $data = [];

	public function JsonSerialize()
    {
        return $this->data;
    }
}
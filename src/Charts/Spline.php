<?php namespace Astroanu\C3jsPHP\Charts;

class Spline implements \JsonSerializable {

	private $data = [];

	public function JsonSerialize()
    {
        return $this->data;
    }
}
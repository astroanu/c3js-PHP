<?php namespace Astroanu\C3jsPHP\Charts;

class Bar implements \JsonSerializable {

	private $data = [];

	public function JsonSerialize()
    {
        return $this->data;
    }
}
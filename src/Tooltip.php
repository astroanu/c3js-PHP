<?php namespace Astroanu\C3jsPHP;

class Tooltip implements \JsonSerializable {

	private $data = [];

	public function JsonSerialize()
    {
        return $this->data;
    }
}
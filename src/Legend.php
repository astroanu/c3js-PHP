<?php namespace Astroanu\C3jsPHP;

class Legend implements \JsonSerializable {

	private $data = [];

	public function JsonSerialize()
    {
        return $this->data;
    }
}
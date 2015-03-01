<?php namespace Astroanu\C3jsPHP\Charts;

class Area implements \JsonSerializable {

	private $data = [];

	public function setZerobased($zerobased)
	{
		$this->data['zerobased'] = $zerobased;
	}

	public function JsonSerialize()
    {
        return $this->data;
    }
}
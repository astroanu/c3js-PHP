<?php namespace Astroanu\C3jsPHP\Charts;

class Donut implements \JsonSerializable {

	private $data = [];

	public function setTitle($title)
	{
		$this->data['title'] = $title;
	}

	public function setWidth($width)
	{
		$this->data['width'] = $width;
	}

	public function setExpand($expand)
	{
		$this->data['expand'] = $expand;
	}

	public function setLabeltThreshold($threshold)
	{
		if (!isset($this->data['label'])) {
			$this->data['label'] = [];
		}
		
		$this->data['label']['threshold'] = $threshold;
	}	

	public function setLabelVisibility($visibility)
	{
		if (!isset($this->data['label'])) {
			$this->data['label'] = [];
		}

		$this->data['label']['show'] = $visibility;
	}

	public function JsonSerialize()
    {
        return $this->data;
    }
}
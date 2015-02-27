<?php namespace Astroanu\C3jsPHP\Charts;

class Gauge implements \JsonSerializable {

	const TYPE_TIMESERIES = 'timeseries';
	const TYPE_CATEGORY = 'category';
	const TYPE_INDEXED = 'indexed';

	private $data = [];

	public function setWidth($width)
	{
		$this->data['width'] = $width;
	}

	public function setUnits($units)
	{
		$this->data['units'] = $units;
	}

	public function setMin($min)
	{
		$this->data['min'] = $min;
	}

	public function setExpand($expand)
	{
		$this->data['expand'] = $expand;
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
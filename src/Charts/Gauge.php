<?php namespace Astroanu\C3jsPHP\Charts;

class Gauge implements \JsonSerializable {

	const TYPE_TIMESERIES = 'timeseries';
	const TYPE_CATEGORY = 'category';
	const TYPE_INDEXED = 'indexed';

	private $data = [];

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
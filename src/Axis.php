<?php namespace Astroanu\C3jsPHP;

class Axis implements \JsonSerializable {

	const TYPE_TIMESERIES = 'timeseries';
	const TYPE_CATEGORY = 'category';
	const TYPE_INDEXED = 'indexed';

	private $data = [];

	public function setXType($type)
	{
		if (!isset($this->data['x'])) {
			$this->data['x'] = [];
		}

		$this->data['x']['type'] = $type;
	}

	public function JsonSerialize()
    {
        return $this->data;
    }
}
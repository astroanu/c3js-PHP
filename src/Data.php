<?php namespace Astroanu\C3jsPHP;

class Data implements \JsonSerializable {

	const TYPE_LINE = 'line';
	const TYPE_SPLINE = 'spline';
	const TYPE_STEP = 'step';
	const TYPE_AREA = 'area';
	const TYPE_AREA_SPLINE = 'area-spline';
	const TYPE_AREA_STEP = 'area-step';
	const TYPE_BAR = 'bar';
	const TYPE_SCATTER = 'scatter';
	const TYPE_PIE = 'pie';
	const TYPE_DONUT = 'donut';
	const TYPE_GAUGE = 'gauge';

	private $data = [];

	public function setKeysX($field)
	{
		if (!isset($this->data['keys'])) {
			$this->data['keys'] = [];
		}

		$this->data['keys']['x'] = $field;
	}

	public function setKeysValue($fields)
	{
		if (!isset($this->data['keys'])) {
			$this->data['keys'] = [];
		}

		$this->data['keys']['value'] = $fields;
	}

	public function setType($type, $options = null)
	{
		$this->data['type'] = $type;
	}

	public function setNames($names)
	{
		$this->data['names'] = $names;
	}

	public function setXFormat($format)
	{
		$this->data['xFormat'] = $format;
	}

	public function setX($x)
	{
		$this->data['x'] = $x;
	}

	public function setColumns($data)
	{
		$this->data['columns'] = $data;
	}

	public function setRows($data)
	{
		$this->data['rows'] = $data;
	}

	public function setJson($data)
	{
		$this->data['json'] = $data;
	}

	public function setUrl($url)
	{
		$this->data['url'] = $url;
	}

	public function JsonSerialize()
    {
        return $this->data;
    }
}
<?php namespace Astroanu\C3jsPHP;

class Axis implements \JsonSerializable {

	const TYPE_TIMESERIES = 'timeseries';
	const TYPE_CATEGORY = 'category';
	const TYPE_INDEXED = 'indexed';

	private $data = [];

	public function setXTickCullingMax($max)
	{
		if (!isset($this->data['x'])) {
			$this->data['x'] = [];
		}

		if (!isset($this->data['x']['tick'])) {
			$this->data['x']['tick'] = [];
		}

		if (!isset($this->data['x']['tick']['culling'])) {
			$this->data['x']['tick']['culling'] = [];
		}

		$this->data['x']['tick']['culling']['max'] = $max;
	}

	public function setXTickCulling($culling)
	{
		if (!isset($this->data['x'])) {
			$this->data['x'] = [];
		}

		if (!isset($this->data['x']['tick'])) {
			$this->data['x']['tick'] = [];
		}

		$this->data['x']['tick']['culling'] = $culling;
	}

	public function setXTickCentered($centered)
	{
		if (!isset($this->data['x'])) {
			$this->data['x'] = [];
		}

		if (!isset($this->data['x']['tick'])) {
			$this->data['x']['tick'] = [];
		}

		$this->data['x']['tick']['centered'] = $centered;
	}

	public function setXCategories($categories)
	{
		if (!isset($this->data['x'])) {
			$this->data['x'] = [];
		}

		$this->data['x']['categories'] = $categories;
	}

	public function setXLocaltime($localtime)
	{
		if (!isset($this->data['x'])) {
			$this->data['x'] = [];
		}

		$this->data['x']['localtime'] = $localtime;
	}

	public function setXType($type)
	{
		if (!isset($this->data['x'])) {
			$this->data['x'] = [];
		}

		$this->data['x']['type'] = $type;
	}

	public function setXVisibility($visibility)
	{
		if (!isset($this->data['x'])) {
			$this->data['x'] = [];
		}

		$this->data['x']['show'] = $visibility;
	}

	public function setRotated($rotated)
	{
		$this->data['rotated'] = $rotated;
	}

	public function JsonSerialize()
    {
        return $this->data;
    }
}
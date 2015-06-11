<?php namespace Astroanu\C3jsPHP;

class Axis implements \JsonSerializable {

	const TYPE_TIMESERIES = 'timeseries';
	const TYPE_CATEGORY = 'category';
	const TYPE_INDEXED = 'indexed';

	private $data = [];

	public function setYLabelPosition($const)
	{
		if (!isset($this->data['y'])) {
			$this->data['y'] = [];
		}		

		if (!isset($this->data['y']['label'])) {
			$this->data['y']['label'] = [];
		}
		$this->data['y']['label']['position'] = $const;
	}

	public function setYLabelText($text)
	{
		if (!isset($this->data['y'])) {
			$this->data['y'] = [];
		}		

		if (!isset($this->data['y']['label'])) {
			$this->data['y']['label'] = [];
		}
		$this->data['y']['label']['text'] = $text;
	}

	public function setXLabelPosition($const)
	{
		if (!isset($this->data['x'])) {
			$this->data['x'] = [];
		}		

		if (!isset($this->data['x']['label'])) {
			$this->data['x']['label'] = [];
		}
		$this->data['x']['label']['position'] = $const;
	}

	public function setXLabelText($text)
	{
		if (!isset($this->data['x'])) {
			$this->data['x'] = [];
		}		

		if (!isset($this->data['x']['label'])) {
			$this->data['x']['label'] = [];
		}
		$this->data['x']['label']['text'] = $text;
	}

	public function setXMin($min)
	{
		if (!isset($this->data['x'])) {
			$this->data['x'] = [];
		}

		$this->data['x']['min'] = $min;
	}	

	public function setYMin($min)
	{
		if (!isset($this->data['y'])) {
			$this->data['y'] = [];
		}

		$this->data['y']['min'] = $min;
	}

	public function setXMax($max)
	{
		if (!isset($this->data['x'])) {
			$this->data['x'] = [];
		}

		$this->data['x']['max'] = $max;
	}

	public function setYMax($max)
	{
		if (!isset($this->data['y'])) {
			$this->data['y'] = [];
		}

		$this->data['y']['max'] = $max;
	}

	public function setXTickCount($count)
	{
		if (!isset($this->data['x'])) {
			$this->data['x'] = [];
		}

		if (!isset($this->data['x']['tick'])) {
			$this->data['x']['tick'] = [];
		}

		$this->data['x']['tick']['count'] = $count;
	}

	public function setYTickCount($count)
	{
		if (!isset($this->data['y'])) {
			$this->data['y'] = [];
		}

		if (!isset($this->data['y']['tick'])) {
			$this->data['y']['tick'] = [];
		}

		$this->data['y']['tick']['count'] = $count;
	}

	public function setXTickFit($fit)
	{
		if (!isset($this->data['x'])) {
			$this->data['x'] = [];
		}

		if (!isset($this->data['x']['tick'])) {
			$this->data['x']['tick'] = [];
		}

		$this->data['x']['tick']['fit'] = $fit;
	}
	
	public function setYTickFit($fit)
	{
		if (!isset($this->data['y'])) {
			$this->data['y'] = [];
		}

		if (!isset($this->data['y']['tick'])) {
			$this->data['y']['tick'] = [];
		}

		$this->data['y']['tick']['fit'] = $fit;
	}
	
	public function setYTickValues($values)
	{
		if (!isset($this->data['y'])) {
			$this->data['y'] = [];
		}

		if (!isset($this->data['y']['tick'])) {
			$this->data['y']['tick'] = [];
		}

		$this->data['y']['tick']['values'] = $values;
	}

	public function setXTickValues($values)
	{
		if (!isset($this->data['x'])) {
			$this->data['x'] = [];
		}

		if (!isset($this->data['x']['tick'])) {
			$this->data['x']['tick'] = [];
		}

		$this->data['x']['tick']['values'] = $values;
	}

	public function setYTickFormat($format)
	{
		if (!isset($this->data['y'])) {
			$this->data['y'] = [];
		}

		if (!isset($this->data['y']['tick'])) {
			$this->data['y']['tick'] = [];
		}

		$this->data['y']['tick']['format'] = $format;
	}

	public function setXTickFormat($format)
	{
		if (!isset($this->data['x'])) {
			$this->data['x'] = [];
		}

		if (!isset($this->data['x']['tick'])) {
			$this->data['x']['tick'] = [];
		}

		$this->data['x']['tick']['format'] = $format;
	}

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

	public function setYVisibility($visibility)
	{
		if (!isset($this->data['y'])) {
			$this->data['y'] = [];
		}

		$this->data['y']['show'] = $visibility;
	}

	public function setYTickRotate($angle)
	{
		if (!isset($this->data['y'])) {
			$this->data['y'] = [];
		}

		if (!isset($this->data['y']['tick'])) {
			$this->data['y']['tick'] = [];
		}

		$this->data['y']['tick']['rotate'] = $angle;
	}

	public function setXTickRotate($angle)
	{
		if (!isset($this->data['x'])) {
			$this->data['x'] = [];
		}

		if (!isset($this->data['x']['tick'])) {
			$this->data['x']['tick'] = [];
		}

		$this->data['x']['tick']['rotate'] = $angle;
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
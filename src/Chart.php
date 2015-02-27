<?php namespace Astroanu\C3jsPHP;

class Chart {

	private $options = [];

	public function bindTo($selector)
	{
		$this->options['bindto'] = $selector;
	}

	public function setGauge(Gauge $gauge)
	{
		$this->options['gauge'] = $gauge;
	}	

	public function setGrid(Grid $grid)
	{
		$this->options['grid'] = $grid;
	}

	public function setData(Data $data)
	{
		$this->options['data'] = $data;
	}	

	public function setAxis(Axis $axis)
	{
		$this->options['axis'] = $axis;
	}

	public function render($var = 'chart')
	{
		echo 'var ' . $var . ' = c3.generate(' . json_encode($this->options) . ');';
	}
}
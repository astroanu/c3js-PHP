<?php namespace Astroanu\C3jsPHP;

class Chart {

	private $options = [];

	public function setGauge(Charts\Gauge $gauge)
	{
		$this->options['gauge'] = $gauge;
	}	

	public function setDonut(Charts\Donut $donut)
	{
		$this->options['donut'] = $donut;
	}	
	
	public function setPie(Charts\Pie $pie)
	{
		$this->options['pie'] = $pie;
	}	
	
	public function setBar(Charts\Bar $bar)
	{
		$this->options['bar'] = $bar;
	}	

	public function setArea(Charts\Area $area)
	{
		$this->options['area'] = $area;
	}	

	public function setLine(Charts\Line $line)
	{
		$this->options['line'] = $line;
	}	

	public function setPoint(Point $point)
	{
		$this->options['point'] = $point;
	}

	public function bindTo($selector)
	{
		$this->options['bindto'] = $selector;
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
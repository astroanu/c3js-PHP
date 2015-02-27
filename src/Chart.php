<?php namespace Astroanu\C3jsPHP;

class Chart {

	private $options = [];

    /**
     * Attach a Gauge object to the Chart
     *
     * @param Charts\Gauge $gauge
     *
     * @return Chart
     */
	public function setGauge(Charts\Gauge $gauge)
	{
		$this->options['gauge'] = $gauge;
		return $this;
	}	

	public function setDonut(Charts\Donut $donut)
	{
		$this->options['donut'] = $donut;
		return $this;
	}	
	
	public function setPie(Charts\Pie $pie)
	{
		$this->options['pie'] = $pie;
		return $this;
	}	
	
	public function setBar(Charts\Bar $bar)
	{
		$this->options['bar'] = $bar;
		return $this;
	}	

	public function setArea(Charts\Area $area)
	{
		$this->options['area'] = $area;
		return $this;
	}	

	public function setLine(Charts\Line $line)
	{
		$this->options['line'] = $line;
		return $this;
	}	

	public function setPoint(Point $point)
	{
		$this->options['point'] = $point;
		return $this;
	}

	public function bindTo($selector)
	{
		$this->options['bindto'] = $selector;
		return $this;
	}

	public function setGrid(Grid $grid)
	{
		$this->options['grid'] = $grid;
		return $this;
	}

	public function setData(Data $data)
	{
		$this->options['data'] = $data;
		return $this;
	}	

	public function setAxis(Axis $axis)
	{
		$this->options['axis'] = $axis;
		return $this;
	}

	public function render($var = 'chart')
	{
		echo 'var ' . $var . ' = c3.generate(' . json_encode($this->options) . ');';
	}
}
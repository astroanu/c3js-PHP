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

    /**
     * Attach a Donut object to the Chart
     *
     * @param Charts\Donut $gauge
     *
     * @return Chart
     */
    public function setDonut(Charts\Donut $donut)
	{
		$this->options['donut'] = $donut;
		return $this;
	}	

    /**
     * Attach a Pie object to the Chart
     *
     * @param Charts\Pie $gauge
     *
     * @return Chart
     */	
	public function setPie(Charts\Pie $pie)
	{
		$this->options['pie'] = $pie;
		return $this;
	}	

    /**
     * Attach a Bar object to the Chart
     *
     * @param Charts\Bar $gauge
     *
     * @return Chart
     */		
	public function setBar(Charts\Bar $bar)
	{
		$this->options['bar'] = $bar;
		return $this;
	}	

    /**
     * Attach a Area object to the Chart
     *
     * @param Charts\Area $gauge
     *
     * @return Chart
     */	
	public function setArea(Charts\Area $area)
	{
		$this->options['area'] = $area;
		return $this;
	}	

    /**
     * Attach a Line object to the Chart
     *
     * @param Charts\Line $gauge
     *
     * @return Chart
     */	
	public function setLine(Charts\Line $line)
	{
		$this->options['line'] = $line;
		return $this;
	}	

    /**
     * Attach a Point object to the Chart
     *
     * @param Charts\Point $gauge
     *
     * @return Chart
     */	
	public function setPoint(Point $point)
	{
		$this->options['point'] = $point;
		return $this;
	}

    /**
     * HTML element selector to bind to
     *
     * @param String $gauge
     *
     * @return Chart
     */	
	public function bindTo($selector)
	{
		$this->options['bindto'] = $selector;
		return $this;
	}

    /**
     * Attach a Grid object to the Chart
     *
     * @param Charts\Grid $gauge
     *
     * @return Chart
     */	
	public function setGrid(Grid $grid)
	{
		$this->options['grid'] = $grid;
		return $this;
	}

    /**
     * Attach a Data object to the Chart
     *
     * @param Charts\Data $gauge
     *
     * @return Chart
     */	
	public function setData(Data $data)
	{
		$this->options['data'] = $data;
		return $this;
	}	

    /**
     * Attach a Axis object to the Chart
     *
     * @param Charts\Axis $gauge
     *
     * @return Chart
     */
	public function setAxis(Axis $axis)
	{
		$this->options['axis'] = $axis;
		return $this;
	}

    /**
     * Renders the javascript on to te html document
     *
     * @param String $var (optional) Returning javascript variable name
     * @param Boolean $pretty (optional) Render prettyfied javascript 
     *
     * @return Chart
     */
	public function render($var = 'chart', $pretty = false)
	{
		echo 'var ' . $var . ' = c3.generate(';

		if ($pretty) {
			echo json_encode($this->options, JSON_PRETTY_PRINT | JSON_NUMERIC_CHECK);	
		} else {
			echo json_encode($this->options, JSON_NUMERIC_CHECK);
		}

		echo ');';
	}
}
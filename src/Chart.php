<?php namespace Astroanu\C3jsPHP;

class Chart {

    private $options = [];

    public function setOnInit(Callback $callback)
    {
        $this->oninit = $callback;
        return $this;
    }

    public function setPaddingTop($padding)
    {
        if (!isset($this->data['padding'])) {
            $this->data['padding'] = [];
        }

        $this->options['padding']['top'] = $visibility;
        return $this;
    }
    
    public function setPaddingRight($padding)
    {
        if (!isset($this->data['padding'])) {
            $this->data['padding'] = [];
        }

        $this->options['padding']['right'] = $visibility;
        return $this;
    }
    
    public function setPaddingBottom($padding)
    {
        if (!isset($this->data['padding'])) {
            $this->data['padding'] = [];
        }

        $this->options['padding']['bottom'] = $visibility;
        return $this;
    }
    
    public function setPaddingLeft($padding)
    {
        if (!isset($this->data['padding'])) {
            $this->data['padding'] = [];
        }

        $this->options['padding']['left'] = $visibility;
        return $this;
    }
    
    public function setSubChartVisibility($visibility)
    {
        if (!isset($this->data['subchart'])) {
            $this->data['subchart'] = [];
        }

        $this->options['subchart']['show'] = $visibility;
        return $this;
    }

    /**
    * Set custom color pattern
    *
    * @param array $pattern
    *
    * @return Chart
    *
    */
    public function setColorPattern($pattern)
    {
        if (!isset($this->data['color'])) {
            $this->data['color'] = [];
        }

        $this->options['color']['pattern'] = $pattern;
        return $this;
    }

    /**
    * Set height of the chart
    *
    * @param integer $height
    *
    * @return Chart
    *
    */
    public function setSizeHeight($height)
    {
        if (!isset($this->data['size'])) {
            $this->data['size'] = [];
        }

        $this->options['size']['height'] = $height;
        return $this;
    }

    /**
    * Set width of the chart
    *
    * @param integer $width
    *
    * @return Chart
    *
    */
    public function setSizeWidth($width)
    {
        if (!isset($this->data['size'])) {
            $this->data['size'] = [];
        }

        $this->options['size']['width'] = $width;
        return $this;
    }

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
     * @param Charts\Donut $donut
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
     * @param Charts\Pie $pie
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
     * @param Charts\Bar $bar
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
     * @param Charts\Area $area
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
     * @param Charts\Line $line
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
     * @param Charts\Point $point
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
     * @param String $selector
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
     * @param Charts\Grid $grid
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
     * @param Charts\Data $data
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
     * @param Charts\Axis $axis
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
			$body =  json_encode($this->options, JSON_PRETTY_PRINT | JSON_NUMERIC_CHECK);	
		} else {
			$body =  json_encode($this->options, JSON_NUMERIC_CHECK);
		}

        $body = str_replace('"function', 'function', $body);
        $body = str_replace('}"', '}', $body);

        echo $body;
        
		echo ');';
	}
}
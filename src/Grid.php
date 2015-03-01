<?php namespace Astroanu\C3jsPHP;

class Grid implements \JsonSerializable {

	private $data = [];

    /**
    * Set additional grid lines along x
    *
    * @param array $lines
    *
    * @return Grid
    *
    */
	public function setXLines($lines)
	{
		if (!isset($this->data['x'])) {
			$this->data['x'] = [];
		}

		$this->data['x']['lines'] = $lines;
	}

    /**
    * Set additional grid lines along y 
    *
    * @param array $lines
    *
    * @return Grid
    *
    */
	public function setYLines($lines)
	{
		if (!isset($this->data['y'])) {
			$this->data['y'] = [];
		}

		$this->data['y']['lines'] = $lines;
	}

    /**
    * Set visibility of grid liness along y axis
    *
    * @param boolean $visibility
    *
    * @return Grid
    *
    */
	public function setYVisibility($visibility)
	{
		if (!isset($this->data['y'])) {
			$this->data['y'] = [];
		}

		$this->data['y']['show'] = $visibility;
	}


    /**
    * Set visibility of grid liness along x axis
    *
    * @param boolean $visibility
    *
    * @return Grid
    *
    */
    public function setXVisibility($visibility)
	{
		if (!isset($this->data['x'])) {
			$this->data['x'] = [];
		}

		$this->data['x']['show'] = $visibility;
	}

	public function JsonSerialize()
    {
        return $this->data;
    }
}
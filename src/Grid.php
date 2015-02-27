<?php namespace Astroanu\C3jsPHP;

class Grid implements \JsonSerializable {

	private $data = [];

	public function setYVisibility($visibility)
	{
		if (!isset($this->data['y'])) {
			$this->data['y'] = [];
		}

		$this->data['y']['show'] = $visibility;
	}

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
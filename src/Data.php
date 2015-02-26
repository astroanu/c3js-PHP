<?php namespace Astroanu\C3jsPHP;

class Data implements \JsonSerializable {

	private $data = [];

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
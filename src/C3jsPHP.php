<?php namespace Astroanu\C3jsPHP;

class Chart {

	private $options = [];

	public function bindTo($selector)
	{
		$this->options['bindto'] = $selector;
	}

	public function setData(Data $data)
	{
		$this->options['data'] = $data;
	}

	public function render($var = 'chart')
	{
		echo 'var ' . $var . ' = c3.generate(' . json_encode($this->options) . ');';
	}
}
<?php namespace Astroanu\C3jsPHP;

class Callback implements \JsonSerializable{

	private $script;

	public function __construct($script)
	{
		$this->script = $script;
	}

	public function getScript()
    {
        return $this->script;
    }

    public function setScript($script)
    {
        $this->script = $script;
    }

    public function JsonSerialize()
    {
    	return $this->script;
    }
}
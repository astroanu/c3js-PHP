<?php namespace Astroanu\C3jsPHP;

class Callback {

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

    public function __toString()
    {
    	return $this->script;
    }
}
<?php

namespace Astroanu\C3jsPHP\Charts;

class Bar implements \JsonSerializable
{
    private $data = [];

    public function setZerobased($zerobased)
    {
        $this->data['zerobased'] = $zerobased;
    }

    public function setWidthRatio($ratio)
    {
        $this->data['ratio'] = $ratio;
    }

    public function setWidth($width)
    {
        $this->data['width'] = $width;
    }

    public function JsonSerialize()
    {
        return $this->data;
    }
}

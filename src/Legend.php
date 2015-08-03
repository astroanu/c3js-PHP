<?php

namespace Astroanu\C3jsPHP;

class Legend implements \JsonSerializable
{
    private $data = [];

    public function setPosition($position)
    {
        $this->data['position'] = $position;
    }

    public function setVisibility($visibility)
    {
        $this->data['show'] = $visibility;
    }

    public function JsonSerialize()
    {
        return $this->data;
    }
}

<?php

namespace Astroanu\C3jsPHP;

class Region implements \JsonSerializable
{
    private $data = [];

    public function JsonSerialize()
    {
        return $this->data;
    }
}

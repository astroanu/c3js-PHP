<?php

namespace Astroanu\C3jsPHP;

class Point implements \JsonSerializable
{
    private $data = [];

    public function JsonSerialize()
    {
        return $this->data;
    }
}

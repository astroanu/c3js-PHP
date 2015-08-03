<?php

namespace Astroanu\C3jsPHP\Charts;

class Pie implements \JsonSerializable
{
    private $data = [];

    public function setExpand($expand)
    {
        $this->data['expand'] = $expand;
    }

    public function setLabeltThreshold($threshold)
    {
        if (!isset($this->data['label'])) {
            $this->data['label'] = [];
        }

        $this->data['label']['threshold'] = $threshold;
    }

    public function setLabelVisibility($visibility)
    {
        if (!isset($this->data['label'])) {
            $this->data['label'] = [];
        }

        $this->data['label']['show'] = $visibility;
    }

    public function JsonSerialize()
    {
        return $this->data;
    }
}

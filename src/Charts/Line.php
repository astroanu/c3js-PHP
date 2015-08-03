<?php

namespace Astroanu\C3jsPHP\Charts;

class Line implements \JsonSerializable
{
    const STEP_TYPE_STEP = 'step';
    const STEP_TYPE_STEP_BEFORE = 'step-before';
    const STEP_TYPE_STEP_AFTER = 'step-after';

    private $data = [];

    public function setStepType($type)
    {
        if (!isset($this->data['step'])) {
            $this->data['step'] = [];
        }

        $this->data['step']['type'] = $type;
    }

    public function setConnectNull($connect)
    {
        $this->data['connectNull'] = $connect;
    }

    public function JsonSerialize()
    {
        return $this->data;
    }
}

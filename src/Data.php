<?php

namespace Astroanu\C3jsPHP;

class Data implements \JsonSerializable
{
    const TYPE_LINE = 'line';
    const TYPE_SPLINE = 'spline';
    const TYPE_STEP = 'step';
    const TYPE_AREA = 'area';
    const TYPE_AREA_SPLINE = 'area-spline';
    const TYPE_AREA_STEP = 'area-step';
    const TYPE_BAR = 'bar';
    const TYPE_SCATTER = 'scatter';
    const TYPE_PIE = 'pie';
    const TYPE_DONUT = 'donut';
    const TYPE_GAUGE = 'gauge';

    private $data = [];

    public function setGroups($groups)
    {
        $this->data['groups'] = $groups;

        return $this;
    }

    /**
     * Set keys for x axis when axis x is on category type.
     *
     * @param string $field
     *
     * @return Data
     */
    public function setKeysX($field)
    {
        if (!isset($this->data['keys'])) {
            $this->data['keys'] = [];
        }

        $this->data['keys']['x'] = $field;

        return $this;
    }

    /**
     * Set which json object keys correspond to which data.
     *
     * @param array $fields
     *
     * @return Data
     */
    public function setKeysValue($fields)
    {
        if (!isset($this->data['keys'])) {
            $this->data['keys'] = [];
        }

        $this->data['keys']['value'] = $field;

        return $this;
    }

    /**
     * Set chart type.
     *
     * @param TYPE_LINE|TYPE_SPLINE|TYPE_STEP|TYPE_AREA|TYPE_AREA_SPLINE|TYPE_AREA_STEP|TYPE_BAR|TYPE_SCATTER|TYPE_PIE|TYPE_DONUT|TYPE_GAUGE $type
     *
     * @return Data
     */
    public function setType($type)
    {
        $this->data['type'] = $type;

        return $this;
    }

    public function setTypes($types)
    {
        $this->data['types'] = $types;

        return $this;
    }

    /**
     * Set custom data name.
     *
     * @param array $names
     *
     * @return Data
     */
    public function setNames($names)
    {
        $this->data['names'] = $names;

        return $this;
    }

    /**
     * Set format to parse x.
     *
     * @param string $format
     *
     * @return Data
     */
    public function setXFormat($format)
    {
        $this->data['xFormat'] = $format;

        return $this;
    }

    /**
     * Set key of x values in data.
     *
     * @param string $x
     *
     * @return Data
     */
    public function setX($x)
    {
        $this->data['x'] = $x;

        return $this;
    }

    /**
     * Set chart data as columns.
     *
     * @param array $data
     *
     * @return Data
     */
    public function setColumns($data)
    {
        $this->data['columns'] = $data;

        return $this;
    }

    /**
     * Set chart data as rows.
     *
     * @param array $data
     *
     * @return Data
     */
    public function setRows($data)
    {
        $this->data['rows'] = $data;

        return $this;
    }

    /**
     * Set chart data from json.
     *
     * @param array $data
     *
     * @return Data
     */
    public function setJson($data)
    {
        $this->data['json'] = $data;

        return $this;
    }

    /**
     * Set chart data from a json or csv file.
     *
     * @param string $url
     *
     * @return Data
     */
    public function setUrl($url)
    {
        $this->data['url'] = $url;

        return $this;
    }

    public function JsonSerialize()
    {
        return $this->data;
    }
}

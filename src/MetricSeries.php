<?php
/**
 * Created by PhpStorm.
 * User: tom
 * Date: 2/28/15
 * Time: 3:05 PM
 */
namespace TomVerran\Stats;

class MetricSeries
{
    private $name;
    private $values;

    public function __construct( $name, $values )
    {
        $this->name = $name;
        $this->values = $values;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getValues()
    {
        return $this->values;
    }
} 
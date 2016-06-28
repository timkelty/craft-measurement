<?php
/**
 * @author    Tim Kelty
 * @copyright Copyright (c) 2016 Tim Kelty
 * @link      http://fusionary.com/
 * @package   Measurement
 * @since     1.0.0
 */

namespace Craft;

class MeasurementVariable
{
    /**
     * Whatever you want to output to a Twig tempate can go into a Variable method. You can have as many variable
     * functions as you want.  From any Twig template, call it like this:
     *
     *     {{ craft.measurement.exampleVariable }}
     *
     * Or, if your variable requires input from Twig:
     *
     *     {{ craft.measurement.exampleVariable(twigValue) }}
     */
    public function exampleVariable($optional = null)
    {
        return "And away we go to the Twig template...";
    }
}

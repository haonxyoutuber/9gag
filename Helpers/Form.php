<?php
/**
 * Created by PhpStorm.
 * User: haonx
 * Date: 7/12/2017
 * Time: 12:14 AM
 */

namespace Helpers;


class Form
{
    private $children = [];

    public function __construct($children)
    {
        $this->setChildren($children);
    }

    function __toString()
    {
        $html = '<form>';
        foreach ($this->children as $child){
            $html .= $child;
        }
        $html.= '</form>';

        return $html;
    }

    public function setChildren($children)
    {
        $this->children = $children;
    }

}
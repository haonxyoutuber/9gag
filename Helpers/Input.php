<?php
/**
 * Created by PhpStorm.
 * User: haonx
 * Date: 7/12/2017
 * Time: 12:05 AM
 */

namespace Helpers;


class Input
{
    private $title;
    private $placeholder;

    public function __construct($title)
    {
        $this->setTitle($title);
        $this->setPlaceholder($title);
    }

    function __toString()
    {
        $placeholder = $this->getPlaceholder();
        return "<input placeholder='$placeholder'>";
    }

    /**
     * @param mixed $title
     * @return Input
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $placeholder
     * @return Input
     */
    public function setPlaceholder($placeholder)
    {
        $this->placeholder = $placeholder;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlaceholder()
    {
        return $this->placeholder;
    }

}
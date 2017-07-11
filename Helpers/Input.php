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
    private $name;

    public function __construct($title)
    {
        $this->setTitle($title);
        $this->setPlaceholder($title);
        $this->setName(camel_case($title));
    }

    function __toString()
    {
        $placeholder = $this->getPlaceholder();
        $name = $this->getName();
        return "<input placeholder='$placeholder' name='$name'>";
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

    /**
     * @param mixed $name
     * @return Input
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

}
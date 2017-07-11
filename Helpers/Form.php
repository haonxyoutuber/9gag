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
    private $actionUrl;

    public function __construct($children)
    {
        $this->setChildren($children);
    }

    function __toString()
    {
        $actionUrl = $this->getActionUrl();
        $html = "<form method='post' action='$actionUrl'>";
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

    /**
     * @param mixed $actionUrl
     * @return Form
     */
    public function setActionUrl($actionUrl)
    {
        $this->actionUrl = $actionUrl;
        return $this;
    }

    public function toRoute($routeName, $params = [])
    {
        $paramsString = http_build_query($params);
        $actionUrl = '?route=' . $routeName . '&' . $paramsString;
        $this->setActionUrl($actionUrl);
    }

    /**
     * @return mixed
     */
    public function getActionUrl()
    {
        if(is_null($this->actionUrl)){
            $defaultRoute = 'default';
            return '?route='. $defaultRoute;
        }

        return $this->actionUrl;
    }

}
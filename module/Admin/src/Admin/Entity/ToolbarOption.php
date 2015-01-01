<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ToolbarOption
 *
 * @author augusto
 */
namespace Admin\Entity;

class ToolbarOption 
{
    /**
     *
     * @var int
     */
    private $id;
    
    /**
     *
     * @var String
     */
    private $title;
    
    /**
     *
     * @var String
     */
    private $action;
    
    /**
     *
     * @var String
     */
    private $cssIconClass;
    
    /**
     *
     * @var boolean
     */
    private $isJQGridAction;
    
    /**
     *
     * @var boolean
     */
    private $enabled;
    
    public function __construct($id, $title, $action, $cssIconClass, $isJQGridAction = false, $enabled = true)
    {
        $this->id = $id;
        $this->title = $title;
        $this->action = $action;
        $this->cssIconClass = $cssIconClass;
        $this->isJQGridAction = $isJQGridAction;
        $this->enabled = $enabled;
    }
    
    public function getId() 
    {
        return $this->id;
    }

    public function setId($id) 
    {
        $this->id = $id;
    }

    public function getTitle() 
    {
        return $this->title;
    }

    public function setTitle($title) 
    {
        $this->title = $title;
    }

    public function getAction() 
    {
        return $this->action;
    }

    public function setAction($action) 
    {
        $this->action = $action;
    }

    public function getCssIconClass() 
    {
        return $this->cssIconClass;
    }

    public function setCssIconClass($cssIconClass) 
    {
        $this->cssIconClass = $cssIconClass;
    }
    
    public function getIsJQGridAction() 
    {
        return $this->isJQGridAction;
    }

    public function setIsJQGridAction($isJQGridAction) 
    {
        $this->isJQGridAction = $isJQGridAction;
    }

    public function getEnabled() 
    {
        return $this->enabled;
    }

    public function setEnabled($enabled) 
    {
        $this->enabled = $enabled;
    }
}

?>
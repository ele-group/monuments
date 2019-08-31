<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 
use php\gui\event\UXEvent; 

class Map extends AbstractForm
{
    /**
     * @event image_turtle.mouseDown-Left 
     */
    function doImage_turtleMouseDownLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event image_dragon.mouseDown-Left 
     */
    function doImage_dragonMouseDownLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event image_frog.mouseDown-Left 
     */
    function doImage_frogMouseDownLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event image_hippo.mouseDown-Left 
     */
    function doImage_hippoMouseDownLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event image_elephants.mouseDown-Left 
     */
    function doImage_elephantsMouseDownLeft(UXMouseEvent $event = null)
    {    
        
    }


    /**
     * @event image_turtle.mouseEnter 
     */
    function doImage_turtleMouseEnter(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event image_turtle.mouseExit 
     */
    function doImage_turtleMouseExit(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event image_dragon.mouseEnter 
     */
    function doImage_dragonMouseEnter(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event image_dragon.mouseExit 
     */
    function doImage_dragonMouseExit(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event image_frog.mouseEnter 
     */
    function doImage_frogMouseEnter(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event image_frog.mouseExit 
     */
    function doImage_frogMouseExit(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event image_hippo.mouseEnter 
     */
    function doImage_hippoMouseEnter(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event image_hippo.mouseExit 
     */
    function doImage_hippoMouseExit(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event image_elephants.mouseEnter 
     */
    function doImage_elephantsMouseEnter(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event image_elephants.mouseExit 
     */
    function doImage_elephantsMouseExit(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event button_back.mouseDown-Left 
     */
    function doButton_backMouseDownLeft(UXMouseEvent $e = null)
    {    
        $this->originForm('Screen')->reflection->phys->loadScene('Menu');
    }

    /**
     * @event construct 
     */
    function doConstruct(UXEvent $e = null)
    {    
        
    }
}
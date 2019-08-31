<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 
use php\gui\event\UXKeyEvent; 

class Screen extends AbstractForm
{
    /**
     * @event panel_control.mouseEnter 
     */
    function doPanel_controlMouseEnter(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event panel_control.mouseExit 
     */
    function doPanel_controlMouseExit(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event circle_close.mouseDown-Left 
     */
    function doCircle_closeMouseDownLeft(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event circle_menu.mouseDown-Left 
     */
    function doCircle_menuMouseDownLeft(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event keyDown-Esc 
     */
    function doKeyDownEsc(UXKeyEvent $e = null)
    {    
        
    }
}
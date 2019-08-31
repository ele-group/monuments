<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\game\event\UXCollisionEvent; 
use php\gui\event\UXEvent; 
use php\gui\event\UXMouseEvent; 
use php\gui\event\UXKeyEvent; 

class LevelThreeB extends AbstractForm
{
    /**
     * @event dagger.collision-Unit 
     */
    function doDaggerCollisionrect3(UXCollisionEvent $event = null)
    {    
        
    }

    /**
     * @event appleBonus_1.destroy 
     */
    function doAppleBonus_1Destroy(UXEvent $event = null)
    {    
        
    }

    /**
     * @event sound.mouseDown-Left 
     */
    function doSoundMouseDownLeft(UXMouseEvent $event = null)
    {    
        
    }

    /**
     * @event object_player.collision-spike_1 
     */
    function doObject_playerCollisionobject4(UXCollisionEvent $e = null)
    {    
        
    }

    /**
     * @event object_player.collision-spike_2 
     */
    function doObject_playerCollisionspike_2(UXCollisionEvent $e = null)
    {    
        
    }

    /**
     * @event object_player.collision-question 
     */
    function doObject_playerCollisionimage5(UXCollisionEvent $e = null)
    {    
        
    }

    /**
     * @event object_player.collision-spike_3 
     */
    function doObject_playerCollisionspike_3(UXCollisionEvent $e = null)
    {    
        
    }

    /**
     * @event object_player.collision-spikes 
     */
    function doObject_playerCollisionspikes(UXCollisionEvent $e = null)
    {    
        
    }

    /**
     * @event object_player.collision-dragon 
     */
    function doObject_playerCollisiondragon(UXCollisionEvent $e = null)
    {    
        
    }

    /**
     * @event object_player.collision-dagger 
     */
    function doObject_playerCollisiondagger(UXCollisionEvent $e = null)
    {    
        
    }

    /**
     * @event object_player.globalKeyDown-Left 
     */
    function doObject_playerGlobalKeyDownLeft(UXKeyEvent $e = null)
    {    
        
    }
    
    /**
     * @event object_player.globalKeyDown-Right 
     */
    function doObject_playerGlobalKeyDownRight(UXKeyEvent $e = null)
    {    
        
    }
    
    /**
     * @event object_player.globalKeyUp-Left 
     */
    function doObject_playerGlobalKeyUpLeft(UXKeyEvent $e = null)
    {    
        
    }
    
    /**
     * @event object_player.globalKeyUp-Right 
     */
    function doObject_playerGlobalKeyUpRight(UXKeyEvent $e = null)
    {    
        
    }
}
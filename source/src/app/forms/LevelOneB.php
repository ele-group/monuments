<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXKeyEvent; 
use php\game\event\UXCollisionEvent; 
use php\gui\event\UXMouseEvent; 
use php\gui\event\UXEvent; 

class LevelOneB extends AbstractForm
{
    /**
     * @event object_player.collision-spike_2 
     */
    function doObject_playerCollisionSpikes(UXCollisionEvent $e = null)
    {    
        
    }

    /**
     * @event object_player.collision-spikes 
     */
    function doObject_playerCollisionimage(UXCollisionEvent $e = null)
    {    
        
    }

    /**
     * @event object_player.collision-spike_1 
     */
    function doObject_playerCollisionimage3(UXCollisionEvent $e = null)
    {    
        
    }

    /**
     * @event object_player.collision-spike_3 
     */
    function doObject_playerCollisionimageAlt(UXCollisionEvent $e = null)
    {    
        
    }

    /**
     * @event object_player.collision-question_2 
     */
    function doObject_playerCollisionimage7(UXCollisionEvent $e = null)
    {    
        
    }

    /**
     * @event object_player.collision-question_1 
     */
    function doObject_playerCollisionimage6(UXCollisionEvent $e = null)
    {    
        
    }

    /**
     * @event object_player.collision-chest 
     */
    function doObject_playerCollisionimage12(UXCollisionEvent $e = null)
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

    /**
     * @event appleBonus_2.destroy 
     */
    function doAppleBonus_2Destroy(UXEvent $e = null)
    {    
        
    }

    /**
     * @event sound.mouseDown-Left 
     */
    function doSoundMouseDownLeft(UXMouseEvent $e = null)
    {    
        
    }
}
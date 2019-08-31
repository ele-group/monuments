<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\game\event\UXCollisionEvent; 
use php\gui\event\UXEvent; 
use php\gui\event\UXMouseEvent; 
use php\gui\event\UXKeyEvent; 

class LevelFourB extends AbstractForm
{
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
     * @event object_player.collision-spike_1 
     */
    function doObject_playerCollisionspike_1(UXCollisionEvent $e = null)
    {    
        
    }

    /**
     * @event object_player.collision-spike_2 
     */
    function doObject_playerCollisionspike_2(UXCollisionEvent $e = null)
    {    
        
    }

    /**
     * @event object_player.collision-spikes_1 
     */
    function doObject_playerCollisionspikes_1(UXCollisionEvent $e = null)
    {    
        
    }

    /**
     * @event object_player.collision-spikes_2 
     */
    function doObject_playerCollisionspikes_2(UXCollisionEvent $e = null)
    {    
        
    }

    /**
     * @event object_player.collision-spike_3 
     */
    function doObject_playerCollisionspike_3(UXCollisionEvent $e = null)
    {    
        
    }

    /**
     * @event object_player.collision-spike_4 
     */
    function doObject_playerCollisionspike_4(UXCollisionEvent $e = null)
    {    
        
    }

    /**
     * @event object_player.collision-fire 
     */
    function doObject_playerCollisionfire(UXCollisionEvent $e = null)
    {    
        
    }

    /**
     * @event object_player.collision-question 
     */
    function doObject_playerCollisionquestion(UXCollisionEvent $e = null)
    {    
        
    }

    /**
     * @event object_player.collision-frog 
     */
    function doObject_playerCollisionfrog(UXCollisionEvent $e = null)
    {    
        
    }

    /**
     * @event appleBonus_1.destroy 
     */
    function doAppleBonus_1Destroy(UXEvent $e = null)
    {    
        
    }
}
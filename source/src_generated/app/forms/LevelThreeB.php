<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\game\event\UXCollisionEvent; 
use php\gui\event\UXEvent; 
use php\gui\event\UXMouseEvent; 
use php\gui\event\UXKeyEvent; 
use game\Jumping; 
use action\Animation; 
use action\Media; 

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
$e = $event ?: $e; // legacy code from 16 rc-2

		Animation::fadeTo($this->label_eat, 500, 1.0, function () use ($e, $event) {
		});

        
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
$e = $event ?: $e; // legacy code from 16 rc-2

		Jumping::toStart($e->sender);

        
    }

    /**
     * @event object_player.collision-spike_2 
     */
    function doObject_playerCollisionspike_2(UXCollisionEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Jumping::toStart($e->sender);

        
    }

    /**
     * @event object_player.collision-question 
     */
    function doObject_playerCollisionimage5(UXCollisionEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Animation::fadeIn($this->appleBonus_1, 500, function () use ($e, $event) {
		});

        
    }

    /**
     * @event object_player.collision-spike_3 
     */
    function doObject_playerCollisionspike_3(UXCollisionEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Jumping::toStart($e->sender);

        
    }

    /**
     * @event object_player.collision-spikes 
     */
    function doObject_playerCollisionspikes(UXCollisionEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Jumping::toStart($e->sender);

        
    }

    /**
     * @event object_player.collision-dragon 
     */
    function doObject_playerCollisiondragon(UXCollisionEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$e->sender->free();
		$lvl3 = 'true';;
		$this->ini->set('lvl3',$lvl3,'monuments');;
		$this->originForm('Dragon')->phys->loadScene('Turtle');

        
    }

    /**
     * @event object_player.collision-dagger 
     */
    function doObject_playerCollisiondagger(UXCollisionEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Jumping::toStart($e->sender);

        
    }

    /**
     * @event object_player.globalKeyDown-Left 
     */
    function doObject_playerGlobalKeyDownLeft(UXKeyEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$e->sender->sprite->currentAnimation = 'GoesAgo';

        
    }
    
    /**
     * @event object_player.globalKeyDown-Right 
     */
    function doObject_playerGlobalKeyDownRight(UXKeyEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$e->sender->sprite->currentAnimation = 'Goes';

        
    }
    
    /**
     * @event object_player.globalKeyUp-Left 
     */
    function doObject_playerGlobalKeyUpLeft(UXKeyEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$e->sender->sprite->currentAnimation = 'DefaultAgo';

        
    }
    
    /**
     * @event object_player.globalKeyUp-Right 
     */
    function doObject_playerGlobalKeyUpRight(UXKeyEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$e->sender->sprite->currentAnimation = 'Default';

        
    }
}

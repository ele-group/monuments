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

class LevelFiveB extends AbstractForm
{

    /**
     * @event object_player.collision-spikes_1 
     */
    function doObject_playerCollisionimage11(UXCollisionEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Jumping::toStart($e->sender);

        
    }

    /**
     * @event object_player.collision-spikes_2 
     */
    function doObject_playerCollisionimage13(UXCollisionEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Jumping::toStart($e->sender);

        
    }

    /**
     * @event object_player.collision-spikes_3 
     */
    function doObject_playerCollisionimage16(UXCollisionEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Jumping::toStart($e->sender);

        
    }

    /**
     * @event object_player.collision-spike_1 
     */
    function doObject_playerCollisionimage3(UXCollisionEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Jumping::toStart($e->sender);

        
    }

    /**
     * @event object_player.collision-spike_2 
     */
    function doObject_playerCollisionimage15(UXCollisionEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Jumping::toStart($e->sender);

        
    }

    /**
     * @event object_player.collision-fire 
     */
    function doObject_playerCollisionobjectAlt(UXCollisionEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Jumping::toStart($e->sender);

        
    }

    /**
     * @event object_player.collision-question_1 
     */
    function doObject_playerCollisionimage8(UXCollisionEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Animation::fadeIn($this->appleBonus_1, 500, function () use ($e, $event) {
		});

        
    }

    /**
     * @event object_player.collision-question_2 
     */
    function doObject_playerCollisionimage9(UXCollisionEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Animation::fadeIn($this->appleBonus_2, 500, function () use ($e, $event) {
		});

        
    }

    /**
     * @event object_player.collision-hippo 
     */
    function doObject_playerCollisionimage17(UXCollisionEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$e->sender->free();
		$lvl5 = 'true';;
		$this->ini->set('lvl5',$lvl5,'monuments');;
		$this->originForm('Screen')->reflection->phys->loadScene('Hippo');

        
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

    /**
     * @event appleBonus_2.destroy 
     */
    function doAppleBonus_2Destroy(UXEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Animation::fadeTo($this->label_eat, 500, 1.0, function () use ($e, $event) {
		});

        
    }

    /**
     * @event sound.mouseDown-Left 
     */
    function doSoundMouseDownLeft(UXMouseEvent $e = null)
    {    
        
    }
}

<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 
use php\game\event\UXCollisionEvent; 
use php\gui\event\UXEvent; 
use php\gui\event\UXKeyEvent; 
use action\Animation; 
use game\Jumping; 
use action\Media; 

class LevelSixB extends AbstractForm
{

    /**
     * @event appleRed_3.destroy 
     */
    function doAppleRed_3Destroy(UXEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Animation::fadeTo($this->label_eat, 500, 1.0, function () use ($e, $event) {
		});

        
    }

    /**
     * @event object_player.collision-spike_3 
     */
    function doObject_playerCollisionimage10(UXCollisionEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Jumping::toStart($e->sender);

        
    }

    /**
     * @event object_player.collision-spike_4 
     */
    function doObject_playerCollisionimage11(UXCollisionEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Jumping::toStart($e->sender);

        
    }

    /**
     * @event object_player.collision-spike_1 
     */
    function doObject_playerCollisionimage6(UXCollisionEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Jumping::toStart($e->sender);

        
    }

    /**
     * @event object_player.collision-spike_2 
     */
    function doObject_playerCollisionimage7(UXCollisionEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Jumping::toStart($e->sender);

        
    }

    /**
     * @event object_player.collision-question_1 
     */
    function doObject_playerCollisionimage(UXCollisionEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Animation::fadeIn($this->mushroom_1, 500, function () use ($e, $event) {
		});

        
    }

    /**
     * @event object_player.collision-question_2 
     */
    function doObject_playerCollisionimage3(UXCollisionEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Animation::fadeIn($this->mushroom_2, 500, function () use ($e, $event) {
		});

        
    }

    /**
     * @event object_player.collision-elephant 
     */
    function doObject_playerCollisionimage12(UXCollisionEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$e->sender->free();
		$lvl6 = 'true';;
		$this->ini->set('lvl6',$lvl6,'monuments');;
		$this->originForm('Screen')->reflection->phys->loadScene('Elephant');

        
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
     * @event sound.mouseDown-Left 
     */
    function doSoundMouseDownLeft(UXMouseEvent $e = null)
    {    
        
    }
}

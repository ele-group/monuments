<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXKeyEvent; 
use php\game\event\UXCollisionEvent; 
use php\gui\event\UXMouseEvent; 
use php\gui\event\UXEvent; 
use action\Element; 
use action\Animation; 
use action\Media; 
use game\Jumping; 

class LevelOneB extends AbstractForm
{
    /**
     * @event object_player.collision-spike_2 
     */
    function doObject_playerCollisionSpikes(UXCollisionEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Jumping::toStart($e->sender);

        
    }

    /**
     * @event object_player.collision-spikes 
     */
    function doObject_playerCollisionimage(UXCollisionEvent $e = null)
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
     * @event object_player.collision-spike_3 
     */
    function doObject_playerCollisionimageAlt(UXCollisionEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Jumping::toStart($e->sender);

        
    }

    /**
     * @event object_player.collision-question_2 
     */
    function doObject_playerCollisionimage7(UXCollisionEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Animation::fadeTo($this->appleBonus_2, 500, 1.0, function () use ($e, $event) {
		});

        
    }

    /**
     * @event object_player.collision-question_1 
     */
    function doObject_playerCollisionimage6(UXCollisionEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Animation::fadeTo($this->appleBonus_1, 500, 1.0, function () use ($e, $event) {
		});

        
    }

    /**
     * @event object_player.collision-chest 
     */
    function doObject_playerCollisionimage12(UXCollisionEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$e->sender->free();
		$lvl1 = 'true';;
		$this->ini->set('lvl1',$lvl1,'monuments');;
		$this->originForm('Screen')->reflection->phys->loadScene('Map');

        
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

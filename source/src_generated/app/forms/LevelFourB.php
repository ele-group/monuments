<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\game\event\UXCollisionEvent; 
use php\gui\event\UXEvent; 
use php\gui\event\UXMouseEvent; 
use php\gui\event\UXKeyEvent; 
use action\Animation; 
use game\Jumping; 
use action\Media; 

class LevelFourB extends AbstractForm
{
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
     * @event object_player.collision-spike_1 
     */
    function doObject_playerCollisionspike_1(UXCollisionEvent $e = null)
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
     * @event object_player.collision-spikes_1 
     */
    function doObject_playerCollisionspikes_1(UXCollisionEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Jumping::toStart($e->sender);

        
    }

    /**
     * @event object_player.collision-spikes_2 
     */
    function doObject_playerCollisionspikes_2(UXCollisionEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Jumping::toStart($e->sender);

        
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
     * @event object_player.collision-spike_4 
     */
    function doObject_playerCollisionspike_4(UXCollisionEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Jumping::toStart($e->sender);

        
    }

    /**
     * @event object_player.collision-fire 
     */
    function doObject_playerCollisionfire(UXCollisionEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Jumping::toStart($e->sender);

        
    }

    /**
     * @event object_player.collision-question 
     */
    function doObject_playerCollisionquestion(UXCollisionEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Animation::fadeIn($this->appleBonus_1, 500, function () use ($e, $event) {
		});

        
    }

    /**
     * @event object_player.collision-frog 
     */
    function doObject_playerCollisionfrog(UXCollisionEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$e->sender->free();
		$lvl4 = 'true';;
		$this->ini->set('lvl4',$lvl4,'monuments');;
		$this->originForm('Screen')->reflection->phys->loadScene('Frog');

        
    }

    /**
     * @event appleBonus_1.destroy 
     */
    function doAppleBonus_1Destroy(UXEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Animation::fadeTo($this->label_eat, 500, 1.0, function () use ($e, $event) {
		});

        
    }
}

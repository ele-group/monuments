<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 
use php\gui\event\UXEvent; 
use action\Animation; 
use php\lib\Str; 
use php\util\Regex; 

class Map extends AbstractForm
{
    /**
     * @event image_turtle.mouseDown-Left 
     */
    function doImage_turtleMouseDownLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->originForm('Screen')->reflection->phys->loadScene('LevelTwo');

        
    }

    /**
     * @event image_dragon.mouseDown-Left 
     */
    function doImage_dragonMouseDownLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->originForm('Screen')->reflection->phys->loadScene('LevelThree');

        
    }

    /**
     * @event image_frog.mouseDown-Left 
     */
    function doImage_frogMouseDownLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->originForm('Screen')->reflection->phys->loadScene('LevelFour');

        
    }

    /**
     * @event image_hippo.mouseDown-Left 
     */
    function doImage_hippoMouseDownLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->originForm('Screen')->reflection->phys->loadScene('LevelFive');

        
    }

    /**
     * @event image_elephants.mouseDown-Left 
     */
    function doImage_elephantsMouseDownLeft(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->originForm('Screen')->reflection->phys->loadScene('LevelSix');

        
    }


    /**
     * @event image_turtle.mouseEnter 
     */
    function doImage_turtleMouseEnter(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Animation::fadeTo($e->sender, 250, 0.5, function () use ($e, $event) {
		});

        
    }

    /**
     * @event image_turtle.mouseExit 
     */
    function doImage_turtleMouseExit(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Animation::fadeTo($e->sender, 250, 1.0, function () use ($e, $event) {
		});

        
    }

    /**
     * @event image_dragon.mouseEnter 
     */
    function doImage_dragonMouseEnter(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Animation::fadeTo($e->sender, 250, 0.5, function () use ($e, $event) {
		});

        
    }

    /**
     * @event image_dragon.mouseExit 
     */
    function doImage_dragonMouseExit(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Animation::fadeTo($e->sender, 250, 1.0, function () use ($e, $event) {
		});

        
    }

    /**
     * @event image_frog.mouseEnter 
     */
    function doImage_frogMouseEnter(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Animation::fadeTo($e->sender, 250, 0.5, function () use ($e, $event) {
		});

        
    }

    /**
     * @event image_frog.mouseExit 
     */
    function doImage_frogMouseExit(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Animation::fadeTo($e->sender, 250, 1.0, function () use ($e, $event) {
		});

        
    }

    /**
     * @event image_hippo.mouseEnter 
     */
    function doImage_hippoMouseEnter(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Animation::fadeTo($e->sender, 250, 0.5, function () use ($e, $event) {
		});

        
    }

    /**
     * @event image_hippo.mouseExit 
     */
    function doImage_hippoMouseExit(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Animation::fadeTo($e->sender, 250, 1.0, function () use ($e, $event) {
		});

        
    }

    /**
     * @event image_elephants.mouseEnter 
     */
    function doImage_elephantsMouseEnter(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Animation::fadeTo($e->sender, 250, 0.5, function () use ($e, $event) {
		});

        
    }

    /**
     * @event image_elephants.mouseExit 
     */
    function doImage_elephantsMouseExit(UXMouseEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Animation::fadeTo($e->sender, 250, 1.0, function () use ($e, $event) {
		});

        
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
$e = $event ?: $e; // legacy code from 16 rc-2

		$GLOBALS['lvl2'] = $this->ini->get('lvl2','monuments');
		$GLOBALS['lvl3'] = $this->ini->get('lvl3','monuments');
		$GLOBALS['lvl4'] = $this->ini->get('lvl4','monuments');
		$GLOBALS['lvl5'] = $this->ini->get('lvl5','monuments');
		$GLOBALS['lvl6'] = $this->ini->get('lvl6','monuments');

		if ($GLOBALS['lvl2'] == 'true')
		{
			Animation::fadeIn($this->turtle_ok, 100, function () use ($e, $event) {
				
});	}
		if ($GLOBALS['lvl3'] == 'true')
		{
			Animation::fadeIn($this->dragon_ok, 100, function () use ($e, $event) {
				
});	}
		if ($GLOBALS['lvl4'] == 'true')
		{
			Animation::fadeIn($this->frog_ok, 100, function () use ($e, $event) {
				
});	}
		if ($GLOBALS['lvl5'] == 'true')
		{
			Animation::fadeIn($this->hippo_ok, 100, function () use ($e, $event) {
				
});	}
		if ($GLOBALS['lvl6'] == 'true')
		{
			Animation::fadeIn($this->elephants_ok, 100, function () use ($e, $event) {
				
});	}
        
    }
}

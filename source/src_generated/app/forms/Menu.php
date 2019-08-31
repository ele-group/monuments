<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 
use php\gui\event\UXEvent; 
use php\lib\Str; 
use php\util\Regex; 
use php\gui\UXDialog; 
use action\Animation; 

class Menu extends AbstractForm
{
    /**
     * @event button_exit.mouseDown-Left 
     */
    function doButton_exitMouseDownLeft(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->shutdown();

        
    }

    /**
     * @event button_game.mouseDown-Left 
     */
    function doButton_gameMouseDownLeft(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2


		if ($GLOBALS['lvl6'] != 'true')
		{
			$this->originForm('Screen')->reflection->phys->loadScene('LevelSix');
		}
		if ($GLOBALS['lvl5'] != 'true')
		{
			$this->originForm('Screen')->reflection->phys->loadScene('LevelFive');
		}
		if ($GLOBALS['lvl4'] != 'true')
		{
			$this->originForm('Screen')->reflection->phys->loadScene('LevelFour');
		}
		if ($GLOBALS['lvl3'] != 'true')
		{
			$this->originForm('Screen')->reflection->phys->loadScene('LevelThree');
		}
		if ($GLOBALS['lvl2'] != 'true')
		{
			$this->originForm('Screen')->reflection->phys->loadScene('LevelTwo');
		}
		if ($GLOBALS['lvl1'] != 'true')
		{
			$this->originForm('Screen')->reflection->phys->loadScene('LevelOne');
		}
        
    }

    /**
     * @event button_map.mouseDown-Left 
     */
    function doButton_mapMouseDownLeft(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2


		if ($GLOBALS['lvl1'] == 'true')
			$this->originForm('Screen')->reflection->phys->loadScene('Map');

		else
			UXDialog::show('Упс! Вы ещё не нашли карту!', 'ERROR');

        
    }

    /**
     * @event button_map.mouseEnter 
     */
    function doButton_mapMouseEnter(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2


		if ($GLOBALS['lvl1'] != 'true')
			$this->image_lock->pulseAnim->enable();

        
    }

    /**
     * @event button_map.mouseExit 
     */
    function doButton_mapMouseExit(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2


		if ($GLOBALS['lvl1'] != 'true')
			$this->image_lock->pulseAnim->disable();

        
    }

    /**
     * @event construct 
     */
    function doConstruct(UXEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$GLOBALS['lvl1'] = $this->ini->get('lvl1','monuments');
		$GLOBALS['lvl2'] = $this->ini->get('lvl2','monuments');
		$GLOBALS['lvl3'] = $this->ini->get('lvl3','monuments');
		$GLOBALS['lvl4'] = $this->ini->get('lvl4','monuments');
		$GLOBALS['lvl5'] = $this->ini->get('lvl5','monuments');
		$GLOBALS['lvl6'] = $this->ini->get('lvl6','monuments');

		if ($GLOBALS['lvl1'] == 'true')
		{
			Animation::fadeOut($this->image_lock, 500, function () use ($e, $event) {
				
});	}
		if ($GLOBALS['lvl1'] == 'true')

			if ($GLOBALS['lvl2'] == 'true')

				if ($GLOBALS['lvl3'] == 'true')

					if ($GLOBALS['lvl4'] == 'true')

						if ($GLOBALS['lvl5'] == 'true')

							if ($GLOBALS['lvl6'] == 'true')
								$this->originForm('Screen')->reflection->phys->loadScene('Finish');

        
    }

    /**
     * @event image_lock.mouseDown-Left 
     */
    function doImage_lockMouseDownLeft(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2


		if ($GLOBALS['lvl1'] == 'true')
			$this->originForm('Screen')->reflection->phys->loadScene('Map');

		else
			UXDialog::show('Упс! Вы ещё не нашли карту!', 'ERROR');

        
    }
}

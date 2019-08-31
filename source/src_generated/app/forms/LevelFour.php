<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXKeyEvent; 

class LevelFour extends AbstractForm
{
    /**
     * @event keyDown-Esc 
     */
    function doKeyDownEsc(UXKeyEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->loadForm('Map');

        
    }
}

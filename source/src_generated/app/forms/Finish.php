<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXMouseEvent; 

class Finish extends AbstractForm
{

    /**
     * @event button_map.mouseDown-Left 
     */
    function doButton_mapMouseDownLeft(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->originForm('Screen')->reflection->phys->loadScene('Map');

        
    }


}

<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXEvent; 

class Download extends AbstractForm
{
    /**
     * @event progress_indicator.destroy 
     */
    function doProgress_indicatorDestroy(UXEvent $e = null)
    {
        $e = $event ?: $e;
        $this->originForm('Screen')->reflection->phys->loadScene('Menu');
    }
}
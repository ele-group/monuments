<?php
namespace app\modules;

use php\gui\framework\AbstractModule;
use php\gui\framework\ScriptEvent; 
use action\Media; 


class MainModule extends AbstractModule
{

    /**
     * @event player.play 
     */
    function doPlayerPlay(ScriptEvent $event = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Media::open('res://.data/audio/Staryj_dobryj_Mario_-_muzyka_iz_mario_(xMusic.me).mp3', true, $this->mediaView);

        
    }

}

<?php
namespace App\Module;

use App\Controller\Page\Guide\Guide;
use Hamtaro\Module\Router as HamtaroRooterModule;

/**
 * @author Phil'dy Jocelyn Belcou <pj.belcou@gmail.com>
 */
class Router extends HamtaroRooterModule
{
    /**
     * @inheritDoc
     * @see HamtaroRooterModule::getDefaultCtrlNamespace()
     */
    public function getDefaultCtrlNamespace()
    {
        return Guide::class;
    }
}
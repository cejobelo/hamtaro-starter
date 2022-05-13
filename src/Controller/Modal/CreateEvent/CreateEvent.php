<?php
namespace App\Controller\Modal\CreateEvent;

use Hamtaro\Controller\Modal\AbstractModal;

/**
 * @author Phil'dy Jocelyn Belcou <pj.belcou@gmail.com>
 */
class CreateEvent extends AbstractModal
{
    /**
     * Returns the modal title.
     *
     * @return string
     */
    public function getTitle()
    {
        return 'Create a javascript event';
    }
}
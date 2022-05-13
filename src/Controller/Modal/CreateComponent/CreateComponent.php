<?php
namespace App\Controller\Modal\CreateComponent;

use Hamtaro\Controller\Modal\AbstractModal;

/**
 * @author Phil'dy Jocelyn Belcou <pj.belcou@gmail.com>
 */
class CreateComponent extends AbstractModal
{
    /**
     * Returns the modal title.
     *
     * @return string
     */
    public function getTitle()
    {
        return 'Create a component';
    }
}
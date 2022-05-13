<?php
namespace App\Controller\Modal\CreateModal;

use Hamtaro\Controller\Modal\AbstractModal;

/**
 * @author Phil'dy Jocelyn Belcou <pj.belcou@gmail.com>
 */
class CreateModal extends AbstractModal
{
    /**
     * Returns the modal title.
     *
     * @return string
     */
    public function getTitle()
    {
        return 'Create a modal';
    }
}
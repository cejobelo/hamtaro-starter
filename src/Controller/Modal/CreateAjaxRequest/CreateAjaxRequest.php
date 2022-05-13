<?php
namespace App\Controller\Modal\CreateAjaxRequest;

use Hamtaro\Controller\Modal\AbstractModal;

/**
 * @author Phil'dy Jocelyn Belcou <pj.belcou@gmail.com>
 */
class CreateAjaxRequest extends AbstractModal
{
    /**
     * Returns the modal title.
     *
     * @return string
     */
    public function getTitle()
    {
        return 'Create an ajax request';
    }
}
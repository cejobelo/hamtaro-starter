<?php
namespace App\Controller\Modal\CreateForm;

use Hamtaro\Controller\Modal\AbstractModal;

/**
 * @author Phil'dy Jocelyn Belcou <pj.belcou@gmail.com>
 */
class CreateForm extends AbstractModal
{
    /**
     * Returns the modal title.
     *
     * @return string
     */
    public function getTitle()
    {
        return 'Create a form';
    }
}
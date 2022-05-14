<?php
namespace App\Controller\Form\CreateModal;

use Exception;
use Hamtaro\Controller\Form\AbstractForm;
use Hamtaro\Controller\InputConfig;

/**
 * @author Phil'dy Jocelyn Belcou <pj.belcou@gmail.com>
 */
class CreateModal extends AbstractForm
{
    /**
     * @inheritDoc
     * @see AbstractForm::InputConfigs()
     */
    public function InputConfigs()
    {
        return [
            new InputConfig('ctrl_controller', 'string', true),
        ];
    }

    /**
     * @inheritDoc
     * @throws Exception
     * @see AbstractForm::executeAndGetResponse()
     */
    public function executeAndGetResponse()
    {
        $this->Core->Workflow()->createController(
            $this->aInputs['ctrl_controller'],
            \Hamtaro\Command\CreateModal::getSrcTarget(),
            \Hamtaro\Command\CreateModal::getTemplates()
        );

        return $this->Core->Response()->getSuccess("Your modal has been created");
    }
}
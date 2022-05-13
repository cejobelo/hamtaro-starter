<?php
namespace App\Controller\Form\CreateEvent;

use Exception;
use Hamtaro\Controller\Form\AbstractForm;
use Hamtaro\Controller\RequestParamConfig;

/**
 * @author Phil'dy Jocelyn Belcou <pj.belcou@gmail.com>
 */
class CreateEvent extends AbstractForm
{
    /**
     * @inheritDoc
     * @see AbstractForm::InputConfigs()
     */
    public function InputConfigs()
    {
        return [
            new RequestParamConfig('ctrl_controller', 'string', true),
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
            \Hamtaro\Command\CreateEvent::getSrcTarget(),
            \Hamtaro\Command\CreateEvent::getTemplates()
        );

        return $this->Core->Response()->getSuccess("Your event has been created");
    }
}
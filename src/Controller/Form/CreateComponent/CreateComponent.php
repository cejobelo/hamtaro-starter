<?php
namespace App\Controller\Form\CreateComponent;

use Hamtaro\Controller\Form\AbstractForm;
use Hamtaro\Controller\RequestParamConfig;

/**
 * @author Phil'dy Jocelyn Belcou <pj.belcou@gmail.com>
 */
class CreateComponent extends AbstractForm
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
     * @see AbstractForm::executeAndGetResponse()
     */
    public function executeAndGetResponse()
    {
        $this->Core->Workflow()->createController(
            $this->aInputs['ctrl_controller'],
            \Hamtaro\Command\CreateComponent::getSrcFolder(),
            \Hamtaro\Command\CreateComponent::getTemplates()
        );

        return $this->Core->Response()->getSuccess("Your component has been created");
    }
}
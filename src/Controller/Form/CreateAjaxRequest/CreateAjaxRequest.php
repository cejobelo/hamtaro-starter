<?php
namespace App\Controller\Form\CreateAjaxRequest;

use Hamtaro\Controller\Form\AbstractForm;
use Hamtaro\Controller\RequestParamConfig;

/**
 * @author Phil'dy Jocelyn Belcou <pj.belcou@gmail.com>
 */
class CreateAjaxRequest extends AbstractForm
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
            \Hamtaro\Command\CreateAjaxRequest::getSrcFolder(),
            \Hamtaro\Command\CreateAjaxRequest::getTemplates()
        );

        return $this->Core->Response()->getSuccess("Your ajax request has been created");
    }
}
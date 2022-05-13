<?php
namespace App\Controller\Form\CreatePage;

use Exception;
use Hamtaro\Controller\Form\AbstractForm;
use Hamtaro\Controller\RequestParamConfig;

/**
 * @author Phil'dy Jocelyn Belcou <pj.belcou@gmail.com>
 */
class CreatePage extends AbstractForm
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
            \Hamtaro\Command\CreatePage::getSrcTarget(),
            \Hamtaro\Command\CreatePage::getTemplates()
        );

        return $this->Core->Response()->getSuccess("Your page has been created");
    }
}
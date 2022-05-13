<?php
namespace App\Controller\Page\Guide;

use Hamtaro\Controller\Page\AbstractPage;
use Hamtaro\Controller\Page\Url;
use Michelf\Markdown;

/**
 * @author Phil'dy Jocelyn Belcou <pj.belcou@gmail.com>
 */
class Guide extends AbstractPage
{
    /**
     * @inheritDoc
     * @see AbstractPage::Urls()
     */
    public function Urls()
    {
        return [
            new Url('/readme'),
        ];
    }

    /**
     * @inheritDoc
     * @see AbstractPage::beforeRendering()
     */
    public function beforeRendering()
    {
        $this->Core->Head()->setTitle("Guide page");

        $this->aParams['readme'] = Markdown::defaultTransform(file_get_contents("{$this->Core->Config()->getBasepath()}/README.md"));
    }
}
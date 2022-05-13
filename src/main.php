<?php

return [
    'author' => "Phil'dy Jocelyn Belcou",
    'email' => 'pj.belcou@gmail.com',
    'controllers' => [
        # Custom components
        App\Controller\Component\Header\Header::class,
        # Form
        App\Controller\Form\CreateAjaxRequest\CreateAjaxRequest::class,
        App\Controller\Form\CreateEvent\CreateEvent::class,
        App\Controller\Form\CreateComponent\CreateComponent::class,
        App\Controller\Form\CreateForm\CreateForm::class,
        App\Controller\Form\CreateModal\CreateModal::class,
        App\Controller\Form\CreatePage\CreatePage::class,
        # Modals
        App\Controller\Modal\CreateAjaxRequest\CreateAjaxRequest::class,
        App\Controller\Modal\CreateEvent\CreateEvent::class,
        App\Controller\Modal\CreateComponent\CreateComponent::class,
        App\Controller\Modal\CreateForm\CreateForm::class,
        App\Controller\Modal\CreateModal\CreateModal::class,
        App\Controller\Modal\CreatePage\CreatePage::class,
        # Pages
        Hamtaro\Controller\Page\Error\Error::class,
        App\Controller\Page\Guide\Guide::class,
    ],
];
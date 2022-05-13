# Hamtaro framework

- [About](#about)
- [Technologies](#technologies)
- [Commands](#commands)
- [Components](#components)
- [Front-end development](#front-end-development)
- [Getting Started](#getting-started)

## About

Hamtaro is the new web framework for front-end / back-end development.
<br>Create your modern and stable web application in a strict, simplified and organized environment.

## Technologies

[Php](https://www.php.net) | [Javascript](https://developer.mozilla.org/en/docs/Web/JavaScript)
| [Composer](https://getcomposer.org) | [Npm](https://www.npmjs.com) | [Node.js](https://nodejs.org)
| [Webpack](https://webpack.js.org) | [Babel](https://babeljs.io) | [Sass](https://sass-lang.com)
| [Twig](https://twig.symfony.com) | [Bootstrap](https://getbootstrap.com) | [jQuery](https://jquery.com)
| [Json](https://www.json.org/json-en.html)

## Commands

Using [composer scripts](https://getcomposer.org/doc/articles/scripts.md), improve your workflow and save considerable
time during development.

```shell
{
    "scripts": {
        "ajax": "Hamtaro\\Command\\CreateAjaxRequest::run",
        "component": "Hamtaro\\Command\\CreateComponent::run",
        "form": "Hamtaro\\Command\\CreateForm::run",
        "modal": "Hamtaro\\Command\\CreateModal::run",
        "page": "Hamtaro\\Command\\CreatePage::run",
        "event": "Hamtaro\\Command\\CreateEvent::run"
    }
}
```

For example, `composer run form Login` create your form component to *src/Controller/Form/Login*.

## Components

***Component*** means graphic item inside your Hamtaro application.

A component is composed of 4 files :

- ***FooComponent.js -*** Front-end class of your component extending [AbstractComponent](https://github.com/cejobelo/hamtaro.js/blob/b30518b6b42796a8d53465fd5bb4e4f28bca1acb/src/Abstract/AbstractComponent.js) | [AbstractForm](https://github.com/cejobelo/hamtaro.js/blob/b30518b6b42796a8d53465fd5bb4e4f28bca1acb/src/Abstract/AbstractForm.js) | [AbstractModal](https://github.com/cejobelo/hamtaro.js/blob/b30518b6b42796a8d53465fd5bb4e4f28bca1acb/src/Abstract/AbstractModal.js) | [AbstractPage](https://github.com/cejobelo/hamtaro.js/blob/b30518b6b42796a8d53465fd5bb4e4f28bca1acb/src/Abstract/AbstractPage.js)

- ***FooComponent.php -*** Back-end class of your component extending [AbstractComponent](https://github.com/cejobelo/hamtaro/blob/fabe1b632ada57adf5440f18f437db7806fd6b70/src/Controller/Component/AbstractComponent.php) | [AbstractForm](https://github.com/cejobelo/hamtaro/blob/fabe1b632ada57adf5440f18f437db7806fd6b70/src/Controller/Form/AbstractForm.php) | [AbstractModal](https://github.com/cejobelo/hamtaro/blob/fabe1b632ada57adf5440f18f437db7806fd6b70/src/Controller/Modal/AbstractModal.php) | [AbstractPage](https://github.com/cejobelo/hamtaro/blob/fabe1b632ada57adf5440f18f437db7806fd6b70/src/Controller/Page/AbstractPage.php).

- ***FooComponent.sass -*** Stylesheet of your component

- ***FooComponent.twig -*** Html of your component. [Pug support](https://phug-lang.com) is coming.

Hamtaro identifies your components in the DOM with these types of selectors :

- `.hamtaro-component[data-ctrl="Header"]`
- `.hamtaro-form[data-ctrl="Identification/Reset"]`
- `.hamtaro-modal[data-ctrl="Newsletter"]`
- `.hamtaro-page[data-ctrl="About"]`

## Front-end development

Use [hamtaro.js](https://www.npmjs.com/package/hamtaro.js) for your front-end development.

The [webpack configuration](https://github.com/cejobelo/hamtaro.js/blob/b30518b6b42796a8d53465fd5bb4e4f28bca1acb/webpack.js) supporting the following assets :
`.js`|`.sass`|`.scss`|`.css`

- `npm run assets` Build your assets ***public/main.min.js*** and ***public/main.min.css***.

- `npm run assets:dev` Your assets are monitored and built dynamically, just write bars and reload your browser to see the changes.

Create your own Webpack configuration if you want to go further.

## Getting started

Your work environment is already ready.

```shell
composer create-project cejobelo/hamtaro-starter my_project && cd my_project && composer install && npm install
```

Enjoy. 🐹
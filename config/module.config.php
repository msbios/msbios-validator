<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Validator;

return [

    'service_manager' => [
        'factories' => [
            Module::class =>
                Factory\ModuleFactory::class
        ]
    ],

    'validators' => [
        'factories' => [
            GoogleReCaptcha::class => ''
        ]
    ],

    Module::class => [
        GoogleReCaptcha::class => [

            /**
             * Url
             *
             * Expects: string
             * Default: 'https://www.google.com/recaptcha/api/siteverify'
             */
            'url' => 'https://www.google.com/recaptcha/api/siteverify',

            /**
             * Secret
             *
             * Expects: string
             * Default: ''
             */
            'secret' => ''
        ]
    ]
];

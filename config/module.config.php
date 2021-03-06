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
            GoogleReCaptcha::class =>
                Factory\GoogleReCaptchaFactory::class
        ]
    ],

    Module::class => [
        GoogleReCaptcha::class => [
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

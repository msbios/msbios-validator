<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBios\Validator;

use Zend\Validator\AbstractValidator;
use Zend\Validator\Exception;

/**
 * Class GoogleReCaptcha
 * @package MSBios\Validator
 */
class GoogleReCaptcha extends AbstractValidator
{

    /** @const CAPTCHA_IS_INVALID */
    const CAPTCHA_IS_INVALID = 'captchaIsInvalid';

    /**
     * Validation failure message template definitions
     *
     * @var array
     */
    protected $messageTemplates = [
        self::CAPTCHA_IS_INVALID => "Captcha is invalid"
    ];

    /**
     * Options for the between validator
     *
     * @var array
     */
    protected $options = [
        'secret' => null,
    ];

    /**
     * @param $secret
     */
    public function setSecret($secret)
    {
        $this->options['secret'] = $secret;
    }

    /**
     * @return mixed
     */
    public function getSecret()
    {
        return $this->options['secret'];
    }

    /**
     * Returns true if and only if $value meets the validation requirements
     *
     * If $value fails validation, then this method returns false, and
     * getMessages() will return an array of messages that explain why the
     * validation failed.
     *
     * @param  mixed $value
     * @return bool
     * @throws Exception\RuntimeException If validation of $value is impossible
     */
    public function isValid($value)
    {
        if (empty($value)) {
            return false;
        }

        /** @var array $params */
        $params = [
            'secret' => $this->getSecret(),
            'response' => $value,
        ];

        /** @var $ch */
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        /** @var array $result */
        $result = json_decode(curl_exec($ch), true);
        curl_close($ch);

        if (empty($result['success']) || !$result['success']) {
            $this->error(self::CAPTCHA_IS_INVALID);
            return false;
        }

        return true;
    }
}
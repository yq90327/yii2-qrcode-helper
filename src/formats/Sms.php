<?php
/**
 * @copyright Copyright (c) 2013-15 2amigOS! Consulting Group LLC
 * @link http://2amigos.us
 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
namespace dosamigos\qrcode\formats;

use yii\base\InvalidConfigException;
use yii\validators\EmailValidator;

/**
 * Class Sms formats a string to properly create a Sms QrCode
 *
 * @author Antonio Ramirez <amigo.cobos@gmail.com>
 * @link http://www.ramirezcobos.com/
 * @link http://www.2amigos.us/
 * @package dosamigos\qrcode\formats
 */
class Sms extends FormatAbstract
{

    /**
     * @var string the phone
     */
    public $phone;
    /**
     * @var string the message
     */
    public $msg;

    /**
     * @return string
     */
    public function getText()
    {
        $data = [];
        $data[] = "SMSTO";
        $data[] = $this->phone;
        $data[] = $this->msg;

        return implode(":", array_filter($data));
    }
}
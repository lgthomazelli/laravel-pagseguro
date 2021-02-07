<?php

namespace laravel\pagseguro\Payment\Method\Pix;

use laravel\pagseguro\Payment\Method\MethodAbstract;

/**
 * Payment Method Pix Object
 *
 * @category   Payment
 * @package    Laravel\PagSeguro\Payment
 *
 * @author     Isaque de Souza <isaquesb@gmail.com>
 * @since      2015-12-10
 *
 * @copyright  Laravel\PagSeguro
 */
class Pix extends MethodAbstract implements PixInterface
{

    /**
     * @var int
     */
    protected $type = self::TYPE_PIX;

    /**
     * @var string
     */
    protected $typeName = 'PIX';

    /**
     * @var array
     */
    protected $names = [
        self::PIX => 'PIX',
    ];
}

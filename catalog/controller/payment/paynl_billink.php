<?php
$dir = dirname(dirname(dirname(dirname(__FILE__))));
$autoload = $dir.'/Pay/Autoload.php';

require_once $autoload;
class ControllerPaymentPaynlbillink extends Pay_Controller_Payment {
    protected $_paymentOptionId = 1672;
    protected $_paymentMethodName = 'paynl_billink';
    
    
}

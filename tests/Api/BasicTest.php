<?php

include_once 'BaseApiTestCase.php';

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BasicTest extends BaseApiTestCase
{

    public function testPhoneNumber()
    {
        $phoneNumberModel = phone_model_from("+6590123456", "SG");
        print_r($phoneNumberModel->toArray());

        // is valid number
        $this->assertTrue($phoneNumberModel->isValid());

        // is valid mobile number
        $this->assertTrue($phoneNumberModel->isMobileNumber());
    }

}

<?php

use \Mockery as m;

class AwareModelTest extends PHPUnit_Framework_TestCase
{
    function tearDown()
    {
        m::close();
    }

    function testgetErrorsMethod()
    {
        $model = m::mock('\Awareness\Aware[]');
        $this->assertInstanceOf('\Illuminate\Support\MessageBag', $model->getErrors());
    }

    function testgetValidationMethod()
    {
        $model = m::mock('\Awareness\Aware[]');
        $this->assertInstanceOf('\Illuminate\Support\Facades\Validator', $model->getValidator());
    }
}

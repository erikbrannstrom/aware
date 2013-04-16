<?php

use \Mockery as m;

class AwareModelTest extends PHPUnit_Framework_TestCase
{
    function tearDown()
    {
        m::close();
    }

    function testGetErrorsMethod()
    {
        $model = m::mock('\Awareness\Aware\Model[]');
        $this->assertInstanceOf('\Illuminate\Support\MessageBag', $model->getErrors());
    }

    function testGetValidationMethod()
    {
        $model = m::mock('\Awareness\Aware\Model[]');
        $this->assertInstanceOf('\Illuminate\Support\Facades\Validator', $model->getValidator());
    }
}

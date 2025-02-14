<?php

namespace App\Services;

class TestService {

    public $requireClass;
    public static int $value = 0;
    public function __construct(RequireClass $requireClass) {
        $this->requireClass = $requireClass;
        $this::$value+= 1;
        echo $this::$value;
    }
    public function InstanceFunc(){
        echo "TestService InstanceFunc has been called";
    }
    public static function StaticFunc(){
        echo "TestService StaticFunc has been called";
        return "ABCD";

    }
}
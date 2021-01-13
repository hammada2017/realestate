<?php
namespace api\components;

use Yii;
use yii\base\Component;
use Ramsey\Uuid\Uuid;

class MyComponent extends Component{

    public function genUid(){
        try {

            // Generate a version 1 (time-based) UUID object
            $uuid = Uuid::uuid1();
            $id = $uuid->toString(); // i.e. e4eaaaf2-d142-11e1-b3e4-080027620cdd
            return $id;
            
        } catch (UnsatisfiedDependencyException $e) {

            // Some dependency was not met. Either the method cannot be called on a
            // 32-bit system, or it can, but it relies on Moontoast\Math to be present.
            echo 'Caught exception: ' . $e->getMessage() . "\n";

        }
    }

}

?>
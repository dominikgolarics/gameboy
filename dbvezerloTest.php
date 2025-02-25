<?php
    require_once 'dbvezerlo.php';

    class DBVezerloManualTest{
        public function RunTest(){
            echo "Teszt indítása... \n";
            $db = new DBVezerlo();
            if($this->TestConnection($db)){
                echo "Sikeres kapcsolódás";
            } 
            else{
                echo "Sikeretlen kapcsolódás";
            }


        }

        private function TestConnection($db){
            $reflection = new ReflectionClass($db);
            $property = $reflection->getProperty('conn');
            $property->setAccessible(true);
            return !is_null($property->getValue($db));
        }
    }

    $test = new DBVezerloManualTest();
    $test->runTest();
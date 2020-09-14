<?php
    abstract class smartPhone{
        public $touch_screen;
        public $physical_button;
        public $camera;
        public function setData($touch_screen = null, $physical_button = null, $camera = null){
            $this->touch_screen=$touch_screen;
            $this->physical_button=$physical_button;
            $this->camera=$camera;
        }
    }
    class Iphone extends smartphone{
        public function __construct($screen,$button,$camera){
            $this->setData($screen,$button,$camera);
        }
        public function outputData(){
            echo "Screen: " . $this->touch_screen;
            echo "\n";
            echo "Physical Button: " . $this->physical_button;
            echo "\n";
            echo "Camera: " . $this->camera;
            echo "\n";
        }
    }
    class Samsung extends smartphone{
        public function __construct($screen,$button,$camera){
            $this->setData($screen,$button,$camera);
        }
        public function outputData(){
            echo "Screen: " . $this->touch_screen;
            echo "\n";
            echo "Physical Button: " . $this->physical_button;
            echo "\n";
            echo "Camera: " . $this->camera;
            echo "\n";
        }
    }
    $iPhone11promax = new iPhone("6,5 inch",0,"12 Megapixel");
    $GalaxyNote10 = new samsung("6,3 inch",0,"16 megapixel");
    echo "--------------Iphone-------------\n";
    $iPhone11promax->outputData();
    echo "--------------Samsung-------------\n";
    $GalaxyNote10->outputData();
?>
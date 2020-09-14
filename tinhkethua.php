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
        public $touchID = "No";
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
            echo "TouchID: " . $this->touchID;
            echo "\n";
        }
    }
    $iPhone11promax = new iPhone("6,5 inch",0,"12 Megapixel");
    $iPhone11promax->outputData();
?>
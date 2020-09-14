<?php
    abstract class smartphone{
        public $touch_screen;
        public $physical_button;
        public $camera;
        protected $os;
        private $account;

        public function setData($touch_screen = null, $physical_button = null,
         $camera = null,$os = null, $accout = null){
             $this->touch_screen = $touch_screen;
             $this->physical_button = $physical_button;
             $this->camera = $camera;
             $this->os= $os;
             $this->accout = $account;
         }
    }
    class iPhone extends smartphone{
        public function __construct($screen, $button, $camera, $os, $accout){
            $this->setData($screen, $button, $camera, $os, $account);
        }
        public function outputData(){
            echo "Screen: " . $this->touch_screen;
            echo "\n";
            echo "Physical Button: " . $this->physical_button;
            echo "\n";
            echo "Camera: " . $this->camera;
            echo "\n";
            echo "Operating system: " . $this->os;
            echo "\n";
            echo "Accout: " . $this->account;
        }
    }
$iPhone11promax = new iPhone("6,5 inch",0,"12 Megapixel","13,7","linh@iclound.com");
$iPhone11promax->outputData();
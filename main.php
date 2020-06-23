<?php
  class Tasks {
    private $data;
    
    public function __construct($file){
      $this->processFile($file);
    }
    
    private function processFile($file){
      $contents = file_get_contents($file);
     
      $array = json_decode($contents,true);
      $this->data = $array;
    }

    public function getData(){
      return $this->data;
    }
    
  }

  $task = new Tasks("data.json");
  $randItem = array_rand($task->getData()["challenges"]);
  echo json_encode($task->getData()["challenges"][$randItem]);
?>
<?php

  /**
   *
   */
  class Remember
  {
    private $oop;
    public function function_construct()
    {
      echo "I remember";
    }

    public function getOop()
    {
      return $this -> oop;
    }

    public function serOop($param)
    {
      $this -> oop = $param;
    }

  }


?>

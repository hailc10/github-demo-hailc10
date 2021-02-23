<?php
  
  class sach{
      private $MASACH;
      private $TUADE;
      private $GIA;
      private $NAMXB;
      private $TRANGTHAI;

      public function sach($MASACH,$TUADE,$NAMXB,$TRANGTHAI){
          $this->MASACH = $MASACH;
          $this->TUADE = $TUADE;
          $this->NAMXB= $NAMXB;
          $this->TRANGTHAI= $TRANGTHAI;
      }
      
      public function getMa(){
          return $this->MASACH;
      }
      public function getTen(){
        return $this->TUADE;
    }
    public function getNamxb(){
        return $this->NAMXB;
    }
    public function getTrangthai(){
      return $this->TRANGTHAI;
  }

  }

?>
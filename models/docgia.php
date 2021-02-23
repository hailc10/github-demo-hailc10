<?php
  
  class docgia{
      private $madocgia;
      private $tendocgia;
      private $sdt;

      public function docgia($madocgia,$tendocgia,$sdt){
          $this->madocgia = $madocgia;
          $this->tendocgia = $tendocgia;
          $this->sdt= $sdt;
      }
      
      public function getMa(){
          return $this->madocgia;
      }
      public function getTen(){
        return $this->tendocgia;
      }
      public function getSDT(){
        return $this->sdt;
      }

  }

?>
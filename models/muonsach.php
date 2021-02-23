<?php
  
  class muonsach{

      private $MADOCGIA;
      private $MASACH;
      private $NGAYMUON;
      private $NGAYTRA;

      public function muonsach($MADOCGIA,$MASACH,$NGAYMUON,$NGAYTRA){
          $this->MADOCGIA = $MADOCGIA;
          $this->MASACH = $MASACH;
          $this->NGAYMUON= $NGAYMUON;
          $this->NGAYTRA= $NGAYTRA;
      }
      
      public function getMa(){
          return $this->MADOCGIA;
      }
      public function getTen(){
        return $this->MASACH;
    }
    public function getNgaymuon(){
        return $this->NGAYMUON;
    }

    public function getNgaytra(){
      return $this->NGAYTRA;
  }

  }

?>
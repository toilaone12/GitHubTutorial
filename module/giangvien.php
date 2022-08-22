<?php
    class GiangVien{
        public $id;
        public $anhgv;
        public $magv;
        public $tengv;
        public $tuoi;
        public $sdt;
        public $email;
        public $diachi;
        public $malop;
        public $manganh;
        public $makhoa;
        
        function __construct($id,$anhgv,$magv,$tengv,$tuoi,$sdt,$email,$diachi,$malop,$manganh,$makhoa)
        {
            $this->id = $id;
            $this->anhgv = $anhgv;
            $this->magv = $magv;
            $this->tengv = $tengv;
            $this->tuoi = $tuoi;
            $this->sdt = $sdt;
            $this->email = $email;
            $this->diachi = $diachi;
            $this->malop = $malop;
            $this->manganh = $manganh;
            $this->makhoa = $makhoa;
        }
    }
?>
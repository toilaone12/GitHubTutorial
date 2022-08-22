<?php
    class Student{
        public $id;
        public $masv;
        public $anhsv;
        public $tensv;
        public $tuoi;
        public $sdt;
        public $email;
        public $diachi;
        public $malop;
        public $manganh;
        public $makhoahoc;
        public $madiem;

        function __construct($id,$masv,$anhsv,$tensv,$tuoi,$sdt,$email,$diachi,$malop,$manganh,$makhoahoc,$madiem)
        {
            $this->id = $id;
            $this->masv = $masv;
            $this->anhsv = $anhsv;
            $this->tensv = $tensv;
            $this->tuoi = $tuoi;
            $this->sdt = $sdt;
            $this->email = $email;
            $this->diachi = $diachi;
            $this->malop = $malop;
            $this->manganh = $manganh;
            $this->makhoahoc = $makhoahoc;
            $this->madiem = $madiem;
        }
    }
?>
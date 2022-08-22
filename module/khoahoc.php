<?php
    class KhoaHoc{
        public $id;
        public $tenkhoahoc;
        public $nienkhoa;

        function __construct($id,$tenkhoahoc,$nienkhoa)
        {
            $this->id = $id;
            $this->tenkhoahoc = $tenkhoahoc;
            $this->nienkhoa = $nienkhoa;
        }
    }
?>
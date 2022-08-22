<?php
    class User{
        public $id;
        public $tk;
        public $mk;
        public $quyen;

        function __construct($id,$tk,$mk,$quyen)
        {
            $this->id = $id;
            $this->tk = $tk;
            $this->mk = $mk;
            $this->quyen = $quyen;
        }
    }
?>
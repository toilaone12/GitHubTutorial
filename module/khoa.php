<?php
    class Khoa{
        public $id;
        public $tenkhoa;

        function __construct($id,$tenkhoa)
        {
            $this->id = $id;
            $this->tenkhoa = $tenkhoa;
        }
    }
?>
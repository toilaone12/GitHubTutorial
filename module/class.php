<?php
    class Classes{
        public $id;
        public $malop;
        public $tenlop;
        public $siso;
        public $manganh;
        public $makhoahoc;

        function __construct($id,$malop,$tenlop,$siso,$manganh,$makhoahoc)
        {
            $this->id = $id;
            $this->malop = $malop;
            $this->tenlop = $tenlop;
            $this->siso = $siso;
            $this->manganh = $manganh;
            $this->makhoahoc = $makhoahoc;
        }
    }
?>
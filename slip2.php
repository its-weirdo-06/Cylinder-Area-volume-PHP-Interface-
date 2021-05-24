<?php
    define("PI",3.14);
    $r;
    $h;
    $aoc;
    interface i1
    {
        public function area($x,$y);
        public function volume($x,$y);
    }
    class cylinder implements i1
    {
        public function area ($x,$y)
        {
            $GLOBALS['r']=$x;
            $GLOBALS['h']=$y;
            $GLOBALS['aoc']=2*PI*$GLOBALS['r']*$GLOBALS['h'];
            echo "Area of Cylinder : ".$GLOBALS['aoc']."<br>";
        }
        public function volume($x,$y)
        {
            $GLOBALS['r']=$x;
            $GLOBALS['h']=$y;
            $GLOBALS['aoc']=PI*($GLOBALS['r']*$GLOBALS['r'])*$GLOBALS['h'];
            echo "Volume of Cylinder : ".$GLOBALS['aoc'];
        }
    }
    $obj=new cylinder();
    $obj->area(5,8);
    $obj->volume(4,9);
?>
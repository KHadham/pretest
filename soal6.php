<?php
function converterdectobin($desmall){
    bcscale(0);
    $binary = '';
    do{
        $binary = bcmod($desmall,'2') . $binary;
        $desmall = bcdiv($desmall,'2');
    } while (bccomp($desmall,'0'));

    return($binary);
}
echo converterdectobin('23');

<?php
function anakmie( $duitbocah)
{
	$totalmie =0;
	$mienya = 0;
	while (2500 <= $duitbocah) {
		$duitbocah = $duitbocah - 2500;
        $mienya++;
        
		if ($mienya!= 4) {
			$totalmie++;
            }
        else{
			$totalmie = $totalmie+2;
			$mienya= 0;
		    }
	}
	echo $totalmie;
}
anakmie(50000);

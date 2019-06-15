<?php
function triangle($alas_roban)
{
	if ($alas_roban <= 0 || $alas_roban >= 10) {
		echo "data invalid ";
    }
    else{
        for ($i=1; $i <=100 ; $i++) { 
			$tinggi = 0;

			for ($x=1; $x <= $i ; $x++) { 
				if ($i % $x == 0) {
					$tinggi++;
				}
			}
			if ($tinggi== 2) {
				$bil[] = $i;
			}
		}

		for ($i=0; $i <$alas_roban ; $i++) {

			for ($x=0; $x <=$i ; $x++) { 
				echo $bil[$x];
			} 
			echo "<br>";

		}

	}
}

triangle(7);
?>

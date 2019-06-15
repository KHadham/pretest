    <?php
    function randomtree($year,$firstlength){
        for ($i=0; $i < $year ; $i++) {
            $firstlength = ($firstlength* 2)+1;
        }
        return $firstlength;
    }
    echo randomtree(2,3);

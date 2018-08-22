<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Рас рас это хардбасс</title>
    </head>
<body>
    <?php
    $array = ['A' => [2,3], 'B' => [6,7], 'C' => [10,5]];
    $kn = 1.5;
    function mk3($arr, $atom) {
        $X1 = $arr['A'][0];
        $X2 = $arr['B'][0];
        $X3 = $arr['C'][0];
        $Y1 = $arr['A'][1];
        $Y2 = $arr['B'][1];
        $Y3 = $arr['C'][1];
        $AB = sqrt(($X2 - $X1) ** 2 + ($Y2 - $Y1) ** 2);
        $BC = sqrt(($X3 - $X2) ** 2 + ($Y3 - $Y2) ** 2);
        $k1 = $atom/$AB;
        $k2 = $atom/$BC;
        $arr['a1'] = [$X1, $Y1 - $atom];
         //$arr['a2'] = [$arr['A'][0] + ($arr['B'][0] - $arr['A'][0]) * $k1, $arr['A'][1] + ($arr['B'][1] - $arr['A'][1]) * $k1];
            function mk4($arr1, $x1, $y1, $x2, $y2, $k, $n) {
                $arr1[$n] = [$x1 + ($x2 - $x1) * $k, $y1 + ($y2 - $y1) * $k];
                //print_r($arr1);
               return array ($arr1);
            }
            $p = mk4($arr, $X1, $Y1, $X2, $Y2, $k1, 'a2');
            $l = mk4($p, $X2, $Y2, $X1, $Y1, $k1, 'b1');
            $k = mk4($l, $X2, $Y2, $X3, $Y3, $k2, 'b2');
            $j = mk4($k, $X3, $Y3, $X2, $Y2, $k2, 'c1');
        $j['c2'] = [$X3, $Y3 + $atom];
        //print_r($arr);
        return $j;
    }
    print_r (mk3($array,$kn));
    //mk3($array,$kn);


    ?>

</body>
</html>

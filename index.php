    <?php
    $array = ['A' => [2,3], 'B' => [6,7], 'C' => [10,5]];
    $k = 1.5;
    function mk3($arr, $kn)
    {
        $X1 = $arr['A'][0];
        $X2 = $arr['B'][0];
        $X3 = $arr['C'][0];
        $Y1 = $arr['A'][1];
        $Y2 = $arr['B'][1];
        $Y3 = $arr['C'][1];
        $AB = sqrt(($X2 - $X1) ** 2 + ($Y2 - $Y1) ** 2);
        $BC = sqrt(($X3 - $X2) ** 2 + ($Y3 - $Y2) ** 2);
        $k1 = $kn/$AB;
        $k2 = $kn/$BC;
        $arr['a1'] = [$X1, $Y1 - $kn];
        $arr['a2'] = [$X1 + ($X2 - $X1) * $k1, $Y1 + ($Y2 - $Y1) * $k1];
        $arr['b1'] = [$X2 + ($X1 - $X2) * $k1, $Y2 + ($Y1 - $Y2) * $k1];
        $arr['b2'] = [$X2 + ($X3 - $X2) * $k2, $Y2 + ($Y3 - $Y2) * $k2];
        $arr['c1'] = [$X3 + ($X2 - $X3) * $k2, $Y3 + ($Y2 - $Y3) * $k2];
        $arr['c2'] = [$X3, $Y3 + $kn];
        return $arr;
    }
    print_r(mk3($array,$k));
    ?>

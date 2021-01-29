<?php
/* 算術演算子で計算する
    Date : 2020/12/08
    Author : Y.Takei */
    mb_internal_encoding("UTF-8");      /* 2021/01/30 N.Hoshii ADD */
    $a=4;   /*変数aに4を代入*/
    $b=5;   /*変数bに5を代入*/
    $c=$a+$b;   /*変数cに$a+$bを代入*/
    echo($a. "+".$b."=".$c);
?>
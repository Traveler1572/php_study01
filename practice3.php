<?php
/* 1から50までの数字の偶数を縦に表示させる
    Date : 2020/12/08
    Author : Y.Takei */
    mb_internal_encoding("UTF-8");      /* 2021/01/30 N.Hoshii ADD */
    for($a=1; $a<=50; $a++){
        if($a%2 != 0)       /*変数aを2で割った余りが0と等しくない*/
        continue;           /*if条件がTRUEならforに戻る*/
        echo($a."<br>");
    }
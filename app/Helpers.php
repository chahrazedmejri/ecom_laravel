<?php
function getprix($prixInDecimals)
{
    $prix=(floatval($prixInDecimals)) ;
    return number_format($prix,3,',','').'DT';

}
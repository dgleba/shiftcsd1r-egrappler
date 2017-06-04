<?php
class tables_sf_superv1
{
    function __sql__()
    {
        return "SELECT * 
      FROM `sf_superv1` 
      order by createdtime desc";
    }  
}

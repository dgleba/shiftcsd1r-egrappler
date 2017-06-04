<?php
class tables_sf_c1_cmpt_superv
{
    function __sql__()
    {
        return "SELECT * 
      FROM `sf_c1_cmpt_superv` 
      order by createdtime desc";
    }  
}

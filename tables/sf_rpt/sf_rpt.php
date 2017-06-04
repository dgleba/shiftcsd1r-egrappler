<?php
class tables_sf_rpt
{
    
    function __sql__()
    {
        return "SELECT * 
      FROM `sf_rpt` 
      order by createdtime desc";
    }
    
}

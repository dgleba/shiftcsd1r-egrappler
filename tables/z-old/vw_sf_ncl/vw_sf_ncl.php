<?php
class tables_vw_sf_ncl
{
    function __sql__()
    {
        return "SELECT * 
      FROM `sf_ncl` 
      order by createdtime desc";
    }
    
    
}

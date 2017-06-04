<?php
class tables_sf_test
{
    function __sql__()
    {
        return "SELECT * 
      FROM `sf_test` 
      order by updatedtime desc";
    }
         
}

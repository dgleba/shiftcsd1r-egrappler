<?php
class tables_sf_csd1_sinter
{
    
    function __sql__()
    {
        return "SELECT * 
      FROM `sf_csd1_sinter` 
      order by createdtime desc";
    }
    
    //Restrict Non-admin users to read only on the Users table
    /************************************************************\
    *
    \************************************************************/
    
    function getPermissions(){
        $auth =& Dataface_AuthenticationTool::getInstance();
        $user =& $auth->getLoggedInUser();
        if ( $user and  $user->val('Role') != 'ADMIN' ){
            return Dataface_PermissionsTool::READ_ONLY();
        }
    }
    
}


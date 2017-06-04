<?php
/**
	* A delegate class for the entire application to handle custom handling of
	* some functions such as permissions and preferences.
	*/
class conf_ApplicationDelegate {
	/**
		* Returns permissions array.  This method is called every time an action is
		* performed to make sure that the user has permission to perform the action.
		* @param record A Dataface_Record object (may be null) against which we check
		*               permissions.
		* @see Dataface_PermissionsTool
		* @see Dataface_AuthenticationTool
		*/
	function getPermissions(&$record){
		$auth =& Dataface_AuthenticationTool::getInstance();
		$user =& $auth->getLoggedInUser();
		if ( !isset($user) ) return Dataface_PermissionsTool::NO_ACCESS();
		// if the user is null then nobody is logged in... no access.
		// This will force a login prompt.
		$role = $user->val('Role');
		return Dataface_PermissionsTool::getRolePermissions($role);
		// Returns all of the permissions for the user's current role.
	}
	
	/* set default list view sort. this works with 1.3.2  but not with 1.5x . use stanza in index.php 2012-06-21
	function beforeHandleRequest(){
		$app = Dataface_Application::getInstance(); 
		$query =& $app->getQuery();
		if ( !$_POST and $query['-table'] == 'swi_log' and !@$query['-sort'] ){
			$query['-sort'] = 'Number desc';
		}
	}
	*/
	
	public function beforeHandleRequest(){
    Dataface_Application::getInstance()
        ->addHeadContent(
            sprintf('<link rel="stylesheet" type="text/css" href="%s"/>',
                htmlspecialchars(DATAFACE_SITE_URL.'/style-xf1.css')
            )
        );

  }

      
     function block__after_login_form() {
        //block__before_fineprint()   block__after_left_column()
        echo "<span style='font-family: Arial, sans-serif; font-size: 13px; line-height: 27px; background-color: rgb(255, 255, 255);'>&nbsp;&nbsp;&nbsp;&nbsp;<strong>Username: &nbsp;</strong>a &nbsp; &nbsp;&nbsp;<strong>Password:</strong>&nbsp; &nbsp;there is no password</span>";
    }
   


   function block__custom_javascripts(){
        // Dataface_JavascriptTool::getInstance()->import('submithandler1.js');

        echo '<script src="js/handler-save1.js" type="text/javascript" language="javascript"></script>';
        echo '<script src="js/handler-savesuccesshide.js" type="text/javascript" language="javascript"></script>';

        echo '<script src="js/handler-c1_cmpt_send_email.js" type="text/javascript" language="javascript"></script>';
        echo '<script src="js/handler-csd1_sinter_send_email.js" type="text/javascript" language="javascript"></script>';
        echo '<script src="js/handler-ncl_send_email.js" type="text/javascript" language="javascript"></script>';
        echo '<script src="js/handler-rpt_cnc_send_email.js" type="text/javascript" language="javascript"></script>';
        echo '<script src="js/handler-c1_cmpt_superv_send_email.js" type="text/javascript" language="javascript"></script>';

        echo '<script src="js/handler-send_email_test.js" type="text/javascript" language="javascript"></script>';
   }

}




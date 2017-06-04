<?php
class tables_sf_csd1_cmpt
{
    
    function __sql__()
    {
        return "SELECT * 
      FROM `sf_csd1_cmpt` 
      order by createdtime desc";
    }
    
    
    /**
     * Trigger that is called after a record is inserted.
     * @param $record Dataface_Record object that has just been inserted.
     function afterInsert(&$record){
     */
    
    function after_action_new($params = array())
    {
        $record =& $params['record'];
        
        $to1      = 'dgleba@stackpole.com';
        $subject1 = 'CSD1-Compact Shift Report Record Submitted';
        
        $headers1 = "From: " . "rpt1" . "\r\n";
        //$headers1 .= "cc: ". "x1954@gmail.com" . "\r\n";
        $headers1 .= "bcc: " . "dgleba@gmail.com, " . "\r\n";
        $headers1 .= "Reply-To: " . "Do-not@reply" . "\r\n";
        $headers1 .= "MIME-Version: 1.0\r\n";
        $headers1 .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
        
        $message1 = '<html><body>';
        $message1 .= '<table rules="all" border="1" style="border: 1px solid #211D57;" cellpadding="5">';

        $rrecord = df_get_record('sf_csd1_cmpt', array(
            'sfid' => $record->val('sfid')
        ));
        
        // grey color - standard = #eee;
        $message1 .= "<tr style='background: #FEE5DF;'><td>Date reported: </td><td>" . $rrecord->strval('sfdate') . "</td></tr>";
        $message1 .= "<tr style='background: #FEE5DF;'><td>Shift reported: </td><td>" . $rrecord->strval('sfshift') . "</td></tr>";
        $message1 .= "<tr style='background: #FEE5DF;'><td>Reported by: </td><td>" . $rrecord->strval('reportedby') . "</td></tr>";
        
        $message1 .= "<tr style='background: #FEE5DF;'><td>press_240: </td><td>" . $rrecord->strval('press_240') . "</td></tr>";
        $message1 .= "<tr style='background: #FEE5DF;'><td>press_241: </td><td>" . $rrecord->strval('press_241') . "</td></tr>";
        $message1 .= "<tr style='background: #FEE5DF;'><td>press_236: </td><td>" . $rrecord->strval('press_236') . "</td></tr>";
        $message1 .= "<tr style='background: #FEE5DF;'><td>press_245: </td><td>" . $rrecord->strval('press_245') . "</td></tr>";
        $message1 .= "<tr style='background: #FEE5DF;'><td>press_242: </td><td>" . $rrecord->strval('press_242') . "</td></tr>";
        $message1 .= "<tr style='background: #FEE5DF;'><td>press_261: </td><td>" . $rrecord->strval('press_261') . "</td></tr>";
        $message1 .= "<tr style='background: #FEE5DF;'><td>press_230: </td><td>" . $rrecord->strval('press_230') . "</td></tr>";
        $message1 .= "<tr style='background: #FEE5DF;'><td>press_231: </td><td>" . $rrecord->strval('press_231') . "</td></tr>";
        $message1 .= "<tr style='background: #FEE5DF;'><td>press_238: </td><td>" . $rrecord->strval('press_238') . "</td></tr>";
        $message1 .= "<tr style='background: #FEE5DF;'><td>press_227: </td><td>" . $rrecord->strval('press_227') . "</td></tr>";
        $message1 .= "<tr style='background: #FEE5DF;'><td>press_244: </td><td>" . $rrecord->strval('press_244') . "</td></tr>";
        $message1 .= "<tr style='background: #FEE5DF;'><td>press_243: </td><td>" . $rrecord->strval('press_243') . "</td></tr>";
        $message1 .= "<tr style='background: #FEE5DF;'><td>press_237: </td><td>" . $rrecord->strval('press_237') . "</td></tr>";
        $message1 .= "<tr style='background: #FEE5DF;'><td>miscellaneous: </td><td>" . $rrecord->strval('miscellaneous') . "</td></tr>";

        $message1 .= "<tr style='background: #FEE5DF;'><td>createdtime: </td><td>" . $rrecord->strval('createdtime') . "</td></tr>";
        $message1 .= "<tr style='background: #FEE5DF;'><td>updatedtime: </td><td>" . $rrecord->strval('updatedtime') . "</td></tr>";
        $message1 .= "<tr style='background: #FEE5DF;'><td>id-number: </td><td>" . $rrecord->strval('sfid') . "</td></tr>";
        
        $message1 .= "</table>";
        $message1 .= "</body></html>";

        // replace \r and \n with html br tags to preserve new lines in the html email...
        $body1 = isset($message1) ? preg_replace('#(\\r\\n|\\n|\\r)#', '<br/>', $message1) : false;

        if (mail($to1, $subject1, $body1, $headers1)) {
            echo '<br><br><h1><span style="background-color:#00ff00;">Your email has been sent.</span></h1><br>';
        } else {
            echo '<br><br /><h1><span style="background-color:#ff0000;">There was a problem sending the email.</span></h1><br />';
        }
        echo '<br /><br /><br /><span style="font-size:16px;">Press the BACK button in your browser to go back.</span><br />';
        

    }
}

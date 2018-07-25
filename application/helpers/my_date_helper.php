<?php
date_default_timezone_set('Europe/London');
/*  
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 * @author Ahsan Jarral 
 */

/**
 * display now with a given format
 */
/**
 * return date format as dd-mm-yy
 */
function reformatDate($date, $format = "d-m-Y", $showTimestamp = false){
    
    if(empty($date)):
        return false;
    endif;
    
    $date = str_replace('/', '-', $date);
    
    // test if a date object can be created from this date
    $date_test = date_create($date);
   // var_dump($date_test);
    if($date_test === false):
        return '';
    endif;
    
    $date_temp = date_format(date_create($date),'d-m-Y');
    
     
     if(empty($date_temp) || ($date_temp == "-0001-11-30" ) || ($date_temp == "30-11--0001")):
         return "";
     endif;
     
    if($showTimestamp === false):
        return date_format(date_create($date),"$format");
    endif;
      
   
    return date_format(date_create($date),"$format H:i:s");       
}

?>


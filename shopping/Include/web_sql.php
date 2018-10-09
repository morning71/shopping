<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

   // 防sql入注

if (isset($_GET)){$GetArray=$_GET;}else{$GetArray='';} //get
if (isset($_COOKIE)){$CookArray=$_COOKIE;}else{$CookArray='';} //cookie
 
foreach ($GetArray as $value){//get
    
    verify_str($value);
  
}

foreach ($CookArray as $value){ //cookie
    
    verify_str($value);
  
}

function inject_check_sql($sql_str) { 
    
     return preg_match('/select|insert|=|<|update|\'|\/\*|\*|union|into|load_file|outfile/i',$sql_str);
    
} 
function verify_str($str) { 
 
   if(inject_check_sql($str)) {
       
        exit('Sorry,You do this is wrong! (.-.)');
        
    } 
 
    return $str; 
} 
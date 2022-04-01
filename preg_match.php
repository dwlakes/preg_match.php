<?php
//Author: David lakes 
//Date: April 1, 2022
//Purpose: Finds to see if something is a domain or not. 
    $domains = "Site: <b>https://facebook.c</b> <br> Site:</b> <b> https://twitter.com</b> <br> Site: </b> <b> http://www.sdev253.net/home.html </b>";
    preg_match_all ("/https?:\/\/([a-zA-Z0-9.-])+(\.[a-zA-Z]{2,3})/i", $domains, $domain_array);
    
    #print $domain_array[0][0]." <br> ".$domain_array[0][1]."\n";
    
    //searches through each domain written
    foreach($domain_array[0] as $element){
        echo "domain name: " . preg_replace("/https?:\/\//", "", $element);
        echo "<br>";
    }
  
?>
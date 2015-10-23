<?php
echo date('Y-m-d H:i:s',1445502846876/1000);
echo '<br/>';
echo $_SERVER['SERVER_NAME'];
echo '<br/>';
var_dump( get_html_translation_table(HTML_ENTITIES));
$fp = fsockopen("www.smaryun.com", 80, &$errno, &$errstr, 10);  
if(!$fp) {  
        echo "$errstr ($errno)<br>\n";  
} else {  
        fputs($fp,"GET / HTTP/1.0\nHost: www.smaryun.com\n\n");  
        while(!feof($fp)) {  
                echo fgets($fp,128);  
        }  
        fclose($fp);  
}  
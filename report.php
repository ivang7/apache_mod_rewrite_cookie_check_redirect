<?php

    print("<a href=/>go to main</a>");
    print("<h1>Report Content</h1>");
    
    print("<pre>Cookie:\r\n");
    print_r($_COOKIE);
    
    print("\r\nRequest params: \r\n");
    print_r($_REQUEST);
    
    print("\r\nAll data params: \r\n");
    print_r ($_SERVER);
    print("</pre>");
?>
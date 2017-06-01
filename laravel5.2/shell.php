<?php
    echo '<pre>';

    // echo `ipconfig`;    
    // `` 反引号 执行本机的命令 
    echo 'Test...........';
    echo `pwd`;
    // echo `cd /var/www/html/lava`;
    echo `ls`;
    echo `php artisan key:generate`;

    echo '</pre>';
?>
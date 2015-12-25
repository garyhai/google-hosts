<?php
/*
 * 目录递归
 */
function build($directory)
{
    $hosts='hosts';
    //清空文件
    file_put_contents($hosts,'');
    $mydir = dir($directory);
    while($file = $mydir->read())
    {
        $filename=$directory.'/'.$file;
        if(is_file($filename)){
            echo $file;
            echo '---';
            $content= file_get_contents($filename)."\n\r";
            echo file_put_contents($hosts, $content, FILE_APPEND);
            echo '<br />';
        }
    }
    $mydir->close();
}

//开始运行
build("./src");

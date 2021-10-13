
<?php

$filename=$_REQUEST["filename"];

if (isset($filename)) {


    // ファイルを保存する
    if (unlink("./files/".basename($filename))){
        echo json_encode(["result"=>"error"]);
    }else{
        echo json_encode(["result"=>"ok"]);
    }
}

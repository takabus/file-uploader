<?php

// ファイルリストを取得して、配列に格納する
$files=glob("./files/*");

$files=array_reverse($files);

// JSONに変換して、レスポンスとして返す
echo json_encode(["files"=>$files]);
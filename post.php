
<?php
if (isset($_FILES['file'])) {

    // 保存されるファイル名をつくっておく
    $datetime = new DateTime();
    $filename =  './files/' . $datetime->format('Ymd_His_') . $_FILES['file']['name'];

    // 一時ファイル名を取得
    $tmpname = $_FILES['file']['tmp_name'];

    // ファイルを保存する
    if (is_uploaded_file($tmpname)) {

        if (move_uploaded_file($tmpname, $filename)) {
            echo json_encode(["result"=>"ok","filename"=>$filename]);
        } else {
            echo json_encode(["result"=>"error"]);
        }
    } else {
        echo json_encode(["result"=>"error","msg"=>"アップロードファイルではありません"]);
    }
}

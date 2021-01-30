<?php
$data = [
    "name"=>"大泉",
    "gender"=>"男性",
    "age"=>46
];

print($data["name"]);
print($data["gender"]);
print($data["age"]);

#データを追加
$data["address"]="東京";

var_dump($data);



print($data["address"]);

#データ更新
$data["gender"] ="女性";



print($data["gender"]);



#配列を代入
#var_dumpは内容表示
$data["children"] = ["太郎","次郎","三郎"];
var_dump($data["children"]);
?>





<?php
    //PDO - PHP Data Object
    $serverName="MSI";
    $connectionInfo =  ["Database"=>"NNHP" ];
    $conn=sqlsrv_connect($serverName, $connectionInfo);
    if ($conn==false){
        echo "Không kết nối được cơ sở dữ liệu";
    }
?>
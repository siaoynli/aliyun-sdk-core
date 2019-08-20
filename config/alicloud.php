<?php
return [
    "access_key_id" => env("ACCESS_KEY_ID"),
    "access_key_secret" => env("ACCESS_KEY_SECRET"),
    "region_id" => env("REGION_ID"),
    "oss_bucket" => env("OSS_BUCKET", null),
    "oss_location" => env("OSS_LOCATION"),
    "pipeline_id" => env("PIPELINE_ID", null),
    "snapshot" => [
        "time" => 1000, //起始秒数
        "interval" => 10,
        "num" => 12,
        "height" => 360,
    ]

];

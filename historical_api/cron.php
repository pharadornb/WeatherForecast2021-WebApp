<?php
    include_once('function.php');
    $con_db = new DB_con();

    //date-time
    $xml = simplexml_load_file("https://www.tmd.go.th/xml/region_daily_forecast.php?RegionID=0");
    $pubDate = explode(" ", $xml->channel->item->pubDate);
    $update = date("Y-m-d H:i:s",strtotime($pubDate[1] . $pubDate[2] . $pubDate[3] . $pubDate[4]));

    /* 1_North */
    $description_6 = "  ";
    $description_5 = "  ";
    $description_4 = "  ";
    $description_3 = "  ";
    $xml = simplexml_load_file("https://www.tmd.go.th/xml/region_daily_forecast.php?RegionID=1");
    $region = $xml->channel->item->guid;
    $description = explode("<br />", $xml->channel->item->description);
    $content = preg_replace("/<img[^>]+\>/i", "", $description[1]);

    //province
    if($description[3] != "  "){
        $desc = explode(" ", $description[3]);
        $description_3 = $desc[0] . $desc[1] . " " .$desc[3] . " " . $desc[5];
    }
    if($description[4] != "  "){
        $desc = explode(" ", $description[4]);
        $description_4 = $desc[0] . $desc[1] . " " .$desc[3] . " " . $desc[5];
    }
    if($description[5] != "  "){
        $desc = explode(" ", $description[5]);
        $description_5 = $desc[0] . $desc[1] . " " .$desc[3] . " " . $desc[5];
    }
    if($description[6] != "  "){
        $desc = explode(" ", $description[6]);
        $description_6 = $desc[0] . $desc[1] . " " .$desc[3] . " " . $desc[5];
    }

    //MySQL
    $sql = $con_db->insert($update, $region, $content, $description_3, $description_4, $description_5, $description_6);


    /* 2_North East */
    $description_6 = "  ";
    $description_5 = "  ";
    $description_4 = "  ";
    $description_3 = "  ";
    $xml = simplexml_load_file("https://www.tmd.go.th/xml/region_daily_forecast.php?RegionID=2");
    $region = $xml->channel->item->guid;
    $description = explode("<br />", $xml->channel->item->description);
    $content = preg_replace("/<img[^>]+\>/i", "", $description[1]);

    //province
    if($description[3] != "  "){
        $desc = explode(" ", $description[3]);
        $description_3 = $desc[0] . $desc[1] . " " .$desc[3] . " " . $desc[5];
    }
    if($description[4] != "  "){
        $desc = explode(" ", $description[4]);
        $description_4 = $desc[0] . $desc[1] . " " .$desc[3] . " " . $desc[5];
    }
    if($description[5] != "  "){
        $desc = explode(" ", $description[5]);
        $description_5 = $desc[0] . $desc[1] . " " .$desc[3] . " " . $desc[5];
    }
    if($description[6] != "  "){
        $desc = explode(" ", $description[6]);
        $description_6 = $desc[0] . $desc[1] . " " .$desc[3] . " " . $desc[5];
    }

    //MySQL
    $sql = $con_db->insert($update, $region, $content, $description_3, $description_4, $description_5, $description_6);
    

    /* 3_Center */
    $description_6 = "  ";
    $description_5 = "  ";
    $description_4 = "  ";
    $description_3 = "  ";
    $xml = simplexml_load_file("https://www.tmd.go.th/xml/region_daily_forecast.php?RegionID=3");
    $region = $xml->channel->item->guid;
    $description = explode("<br />", $xml->channel->item->description);
    $content = preg_replace("/<img[^>]+\>/i", "", $description[1]);

    //province
    if($description[3] != "  "){
        $desc = explode(" ", $description[3]);
        $description_3 = $desc[0] . $desc[1] . " " .$desc[3] . " " . $desc[5];
    }
    if($description[4] != "  "){
        $desc = explode(" ", $description[4]);
        $description_4 = $desc[0] . $desc[1] . " " .$desc[3] . " " . $desc[5];
    }
    if($description[5] != "  "){
        $desc = explode(" ", $description[5]);
        $description_5 = $desc[0] . $desc[1] . " " .$desc[3] . " " . $desc[5];
    }
    if($description[6] != "  "){
        $desc = explode(" ", $description[6]);
        $description_6 = $desc[0] . $desc[1] . " " .$desc[3] . " " . $desc[5];
    }

    //MySQL
    $sql = $con_db->insert($update, $region, $content, $description_3, $description_4, $description_5, $description_6);



    /* 4_East */
    $description_6 = "  ";
    $description_5 = "  ";
    $description_4 = "  ";
    $description_3 = "  ";
    $xml = simplexml_load_file("https://www.tmd.go.th/xml/region_daily_forecast.php?RegionID=4");
    $region = $xml->channel->item->guid;
    $description = explode("<br />", $xml->channel->item->description);
    $content = preg_replace("/<img[^>]+\>/i", "", $description[1]);

    //province
    if($description[3] != "  "){
        $desc = explode(" ", $description[3]);
        $description_3 = $desc[0] . $desc[1] . " " .$desc[3] . " " . $desc[5];
    }
    if($description[4] != "  "){
        $desc = explode(" ", $description[4]);
        $description_4 = $desc[0] . $desc[1] . " " .$desc[3] . " " . $desc[5];
    }
    if($description[5] != "  "){
        $desc = explode(" ", $description[5]);
        $description_5 = $desc[0] . $desc[1] . " " .$desc[3] . " " . $desc[5];
    }
    if($description[6] != "  "){
        $desc = explode(" ", $description[6]);
        $description_6 = $desc[0] . $desc[1] . " " .$desc[3] . " " . $desc[5];
    }

    //MySQL
    $sql = $con_db->insert($update, $region, $content, $description_3, $description_4, $description_5, $description_6);


    /* 5_South Thai */
    $description_6 = "  ";
    $description_5 = "  ";
    $description_4 = "  ";
    $description_3 = "  ";
    $xml = simplexml_load_file("https://www.tmd.go.th/xml/region_daily_forecast.php?RegionID=5");
    $region = $xml->channel->item->guid;
    $description = explode("<br />", $xml->channel->item->description);
    $content = preg_replace("/<img[^>]+\>/i", "", $description[1]);

    //province
    if($description[3] != "  "){
        $desc = explode(" ", $description[3]);
        $description_3 = $desc[0] . $desc[1] . " " .$desc[3] . " " . $desc[5];
    }
    if($description[4] != "  "){
        $desc = explode(" ", $description[4]);
        $description_4 = $desc[0] . $desc[1] . " " .$desc[3] . " " . $desc[5];
    }
    if($description[5] != "  "){
        $desc = explode(" ", $description[5]);
        $description_5 = $desc[0] . $desc[1] . " " .$desc[3] . " " . $desc[5];
    }
    if($description[6] != "  "){
        $desc = explode(" ", $description[6]);
        $description_6 = $desc[0] . $desc[1] . " " .$desc[3] . " " . $desc[5];
    }

    //MySQL
    $sql = $con_db->insert($update, $region, $content, $description_3, $description_4, $description_5, $description_6);


    /* 6_South Andaman */
    $description_6 = "  ";
    $description_5 = "  ";
    $description_4 = "  ";
    $description_3 = "  ";
    $xml = simplexml_load_file("https://www.tmd.go.th/xml/region_daily_forecast.php?RegionID=6");
    $region = $xml->channel->item->guid;
    $description = explode("<br />", $xml->channel->item->description);
    $content = preg_replace("/<img[^>]+\>/i", "", $description[1]);

    //province
    if($description[3] != "  "){
        $desc = explode(" ", $description[3]);
        $description_3 = $desc[0] . $desc[1] . " " .$desc[3] . " " . $desc[5];
    }
    if($description[4] != "  "){
        $desc = explode(" ", $description[4]);
        $description_4 = $desc[0] . $desc[1] . " " .$desc[3] . " " . $desc[5];
    }
    if($description[5] != "  "){
        $desc = explode(" ", $description[5]);
        $description_5 = $desc[0] . $desc[1] . " " .$desc[3] . " " . $desc[5];
    }
    if($description[6] != "  "){
        $desc = explode(" ", $description[6]);
        $description_6 = $desc[0] . $desc[1] . " " .$desc[3] . " " . $desc[5];
    }

    //MySQL
    $sql = $con_db->insert($update, $region, $content, $description_3, $description_4, $description_5, $description_6);



    /* 7_Bangkok */
    $description_6 = "  ";
    $description_5 = "  ";
    $description_4 = "  ";
    $description_3 = "  ";
    $xml = simplexml_load_file("https://www.tmd.go.th/xml/region_daily_forecast.php?RegionID=7");
    $region = $xml->channel->item->guid;
    $description = explode("<br />", $xml->channel->item->description);
    $content = preg_replace("/<img[^>]+\>/i", "", $description[1]);

    //province
    if($description[3] != "  "){
        $desc = explode(" ", $description[3]);
        $description_3 = $desc[0] . $desc[1] . " " .$desc[3] . " " . $desc[5];
    }
    if($description[4] != "  "){
        $desc = explode(" ", $description[4]);
        $description_4 = $desc[0] . $desc[1] . " " .$desc[3] . " " . $desc[5];
    }
    if($description[5] != "  "){
        $desc = explode(" ", $description[5]);
        $description_5 = $desc[0] . $desc[1] . " " .$desc[3] . " " . $desc[5];
    }
    if($description[6] != "  "){
        $desc = explode(" ", $description[6]);
        $description_6 = $desc[0] . $desc[1] . " " .$desc[3] . " " . $desc[5];
    }

    //MySQL
    $sql = $con_db->insert($update, $region, $content, $description_3, $description_4, $description_5, $description_6);
?>

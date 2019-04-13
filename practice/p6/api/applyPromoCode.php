<?php
    $codes = array();
    $code = array();
    
    $code["code"] = "getFifty";
    $code["discount"] = 50;
    $code["valid"] = true;
    array_push($codes, $code);
    
    $code["code"] = "halfPrice";
    $code["discount"] = 50;
    $code["valid"] = true;
    array_push($codes, $code);
    
    $code["code"] = "sand30";
    $code["discount"] = 30;
    $code["valid"] = true;
    array_push($codes, $code);
    
    $code["code"] = "spring30";
    $code["discount"] = 30;
    $code["valid"] = true;
    array_push($codes, $code);
    
    $code["code"] = "beach";
    $code["discount"] = 20;
    $code["valid"] = true;
    array_push($codes, $code);
    
    $code["code"] = "sunny";
    $code["discount"] = 20;
    $code["valid"] = true;
    array_push($codes, $code);
    $valid = -1;
    for($i = 0; $i < 6; $i++){
        if($codes[$i]["code"] === $_GET["code"]){
            $valid = $i;
            break;
        }
    }
    
    if ($valid == -1) {
        $code["valid"] = false;
        $code["code"] = null;
        $code["discount"] = null;
        echo json_encode($code);
    } else {
        echo json_encode($codes[$valid]);
    }
?>
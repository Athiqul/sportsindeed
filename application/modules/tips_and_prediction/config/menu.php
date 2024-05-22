<?php

// module name
$HmvcMenu["tips_and_prediction"] = array(
  
    "icon"           => " <i class='typcn typcn-film mr-2'></i>", 
     
    "create_tips_prediction" => array(
        "controller" => "TipsPrediction",
        "method"     => "create_Tips_prediction",
        "permission" => "create"
    ),

    "tips_prediction_list" => array(
        "controller" => "TipsPrediction",
        "method"     => "tips_prediction_list",
        "permission" => "read"
    ),

    // "edit_tips_prediction" => array(
    //     "controller" => "Podcust_controller",
    //     "method"     => "edit_tips_prediction",
    //     "permission" => "create"
    // ),

    // "update_tips_prediction" => array(
    //     "controller" => "Podcust_controller",
    //     "method"     => "update_tips_prediction",
    //     "permission" => "create"
    // ),

    // "delete_tips_and_prediction" => array(
    //     "controller" => "Podcust_controller",
    //     "method"     => "delete_tips_and_prediction",
    //     "permission" => "create"
    // ),
 
);
   

 
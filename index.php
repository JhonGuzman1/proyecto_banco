<?php 
    require_once("Config/config.php");
    require_once("Helpers/Helpers.php");
    $url = !empty($_GET['url']) ? $_GET['url'] : 'Home/Home';

    $array_Url = explode('/',$url);

    $controller = $array_Url[0];
    $method = $array_Url[0];
    $params = "";

    if(!empty($array_Url[1]))
    {
        if($array_Url[1]!=""){
            $method = $array_Url[1];
        }
    }
    if(!empty($array_Url[2]))
    {
        if($array_Url[2] != ""){
            for ( $i = 2; $i<count($array_Url); $i++)
            {
                $params .=$array_Url[$i].',';
            }
            $params = trim($params,',');
        }
    }
    //Autoload
    require_once("Libraries/Core/Autoload.php");
    
    //Load
    require_once("Libraries/Core/Load.php");

?>
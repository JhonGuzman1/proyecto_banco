<?php 

    function base_url()
    {
        return BASE_URL;
    }

    /*Formatea los parametros que se envian a la vista
    Mas que todo sirve para depurar
    */
    function dep($data){
        $format = print_r('<pre>');
        $format .= print_r($data);
        $format .= print_r('</prev>');
        return $format;
    }
    /*
    Carga todos los Js
    */
    function media (){
        return BASE_URL."/Assets";
    }
    function getModal(string $nombre,$data){
        $view_modal = "Views/Modals/{$nombre}.php";
        require_once $view_modal;
    }
    function headerAdmin($data =""){
        $view_heaeder  ="Views/Components/header.php";
        require_once($view_heaeder);
    }
    function footerAdmin($data =""){
        $view_footer = "Views/Components/footer.php";
        require_once($view_footer);
    }
?>
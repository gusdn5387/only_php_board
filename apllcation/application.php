<?php
    Class Application {
        function __construct() {
            $ctr = $this->getParam()->type."Controller";
            new $ctr();
        }

        function getParam() {
            if(isset($_GET['param'])) $get = explode("/", $_GET['param']);
            $param['type'] = isset($get[0]) && $get[0] != "" ? $get[0] : "main";
			$param['page'] = isset($get[1]) && $get[1] != "" ? $get[1] : NULL;
			$param['idx'] = isset($get[2]) && $get[2] != "" ? $get[2] : NULL;
			$param['page_num'] = isset($get[2]) && $get[2] != "" ? $get[2] : "1";
			return (object)$param;
        }
    }
?>
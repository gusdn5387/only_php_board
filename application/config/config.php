<?php
    session_start();

    function alert($msg) {
        echo "<script>alert('{$msg}');</script>";
    }

    function move($url = false) {
        echo "<script>";
            echo $url ? "location.href='{$url}'" : "history.back();";
        echo "</script>";
        exit;
    }

    function access($bool, $msg, $url = false) {
        if($bool) {
            alert($msg);
            move($url);
        }
    }

    function logoinChk() {
        access(!isset($_SESSION['member']),"회원만 접근 가능합니다.");
    }

    function memberChk() {
        access(isset($_SESSION['member']),"이미 로그인 하셨습니다.");
    }

    function file_upload($file) {
        $name = $file['name'];
        $tmp_name = $file['tmp_name'];
        access($tmp_name == "", "파일이 업로드 되지 않았습니다.");
        $change_name = time().rand(0,99999);
        if(move_uploaded_file($tmp_name, _DATA.$change_name)) return $change_name; 
    }

    function get_size($size) {
        $size /= 1024*1024;
        if($size > 1) {
            $size = number_format($size)."MB";
        } else {
            $size = substr(($size*1024), 0.5)."KB";
        } return $size;
    }

    function __autoload($className) {
        $className = strtolower($className);
        $className2 = preg_replace("/(model!application)(.*)/","$1",$className);
        switch($className2) {
            case 'model': $dir = _MODEL; break;
			case 'application': $dir = _APP; break;
			default: $dir = _CTR; break;
        }
        $dire = str_replace('\\','/',$dir); 
        require_once("{$dire}{$className}.php");
    }
?>
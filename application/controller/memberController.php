<?php
    Class memberController extends Controller {
        function join() {
            memberChk();
            if(!isset($_POST['action'])) $this->model->process();
        }

        function login() {
            memberChk();
            if(isset($_POST['action'])) {
                $a = $this->model->login();
                access($a == "","아이디 또는 비밀번호가 일치하지 않습니다.");
                $_SESSION['member'] = $a;
                alert("로그인 성공");
                move('/');
            }
        }

        function logout() {
            loginChk();
            access(session_destroy(), "로그아웃 성공", "/");
        }

        function mypage() {
            loginChk();
            if(isset($_POST['idx'])) {
                $this->model->memberDelete();
                session_destroy();
                alert("회원 탈퇴가 완료되었습니다.");
                move('/');
            }
        }
    }
?>
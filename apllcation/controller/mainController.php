<?php
    Class mainController extends Controller {
        function basic() {
            $this->list=$this->model->getList();
        }
    }
?>
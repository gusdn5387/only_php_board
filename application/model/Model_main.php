<?php
    Class Model_main extends Model {
        function getList() {
            return $this->fetchAll("SELECT * FROM board order by date desc");
        }
    }
?>
<?php
    Class Model {
        protected $db;
        protected $param;
        protected $sql;

        function __construct() {
            $this->param = Application::getParam();
            $this->db = new PDO("mysql:host->localhost;dbname=only_php_board;charset=utf8;","root","1234567");
            $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
        }

        protected function query($sql = false) {
            if($sql) $this->sql = $sql;
            $res = $this->db->query($this->sql);
            if(!res) {
                echo $this->sql;
                echo "<pre>";
                print_r($this->db->errorInfo());
                echo "</pre>";
            } else {
                return $res;
            }
        }

        protected function fetch($sql = false) {
            if($sql) $this->sql = $sql;
            return $this->query()->fetch();
        }

        protected function fetchAll($sql = false){
			if ($sql) $this->sql = $sql;
			return $this->query()->fetchAll();
		}
 
		protected function cnt($sql = false){
			if ($sql) $this->sql = $sql;
			return $this->query()->rowCount();
        }
        
        protected function get_column($arr, $cancel) {
            $cancel = explode("/",$cancel);
            $column = "";
            foreach($arr as $key => $val) {
                if(!in_array($key, $cancel)) {
                    $column .= ", {$key}='{$val}'";
                }
            }
            return substr($column, 2);
        }

        protected function get_query($column) {
            switch ($this->action) {
                case 'insert':
					$sql = "INSERT INTO {$this->table} SET ";
				break;
				case 'update':
					$sql = "UPDATE {$this->table} SET ";
				break;
				case 'delete':
					$sql = "DELETE FROM {$this->table} ";
				break;
            }
            $sql .= $column;
            return $this->query($sql);
        }
    }
?>
    <?php
    Class boardController extends Controller {
        function write() {
            loginChk();
            if(isset($_POST['action'])) $this->model->process();
        }

        function view() {
            $this->view = $this->model->getView();
            $this->prev = $this->model->prev();
            $this->next = $this->model->next();
            access($this->view == "","존재하지 않는 페이지 입니다.");
        }

        function update() {
            loginChk();
            $this->view();
            $this->write();
            access($this->view->midx != $_SESSION['member']->idx,"작성자만 수정 가능합니다.");
        }

        function down() {
            $data = $this->model->getView();
            header("Pragma: public");
			header("Expires: 0");
			header("Content-Type: application/octet-stream");
			header("Content-Disposition: attachment; filename=\"{$data->file_name}\"");
			header("Content-Transfer-Encoding: binary");
            header("Content-Length: {$data->file_size}");
            ob_clean();
            flush();
            readfile(_DATA.$data->change_name);
            exit;
        }

        function delete() {
            loginChk();
            $this->model->delete();
            alert("삭제되었습니다.");
            move("/");
        }
    }
?>
<?php
 header("content-type;text/html;charset=utf8");
	class MemberAction extends Common {
		function index(){
			$members = D("users");
			//P($members);
			$professor = $members->where(array("ranks"=>'教授'))->select();
			//P($professor);
			$assPro = $members->where(array("ranks"=>'副教授'))->select();
			//P($assPro);
			$teacher = $members->where(array("ranks"=>'讲师'))->select();
			$student = $members->where(array("ranks"=>'研究生'))->select();

			$this->assign("professor",$professor);
			$this->assign("assPro",$assPro);
			$this->assign("teacher",$teacher);
			$this->assign("student",$student);


			$this->display();
		}

	}
	

?>
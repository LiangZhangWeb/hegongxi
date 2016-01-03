<?php
	class AchievementsAction extends Common {
		function index(){
			$dynamics = D("paper")->select();
			//P($dynamics);
			if(!$dynamics){
					$this->error("该栏目不存在或已经被关闭!", 3, "index/index");
			}
			$page = new Page(D("paper")->total(),5);
			$this->assign("achievements", $dynamics); 
			$this->assign("fpage",$page->fpage());
			$this->display();
		}

		function detail(){
			$dynamic=D("paper");
			//P($dynamic);
			$current=$dynamic->where(array("id"=>$_GET["pid"], "display"=>1))->find();
			if(!$current){
					$this->error("该栏目不存在或已经被关闭!", 3, "index/index");
			}
			$this->assign("current", $current); 
			$this->display("detail");
		}

	
	}
	

?>
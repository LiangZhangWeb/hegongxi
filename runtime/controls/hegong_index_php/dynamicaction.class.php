<?php
	class DynamicAction extends Common {
		function index(){
			$dynamics = D("dynamic")->select();
			//P($dynamics);
			if(!$dynamics){
					$this->error("该栏目不存在或已经被关闭!", 3, "index/index");
			}
			$page = new Page(D("dynamic")->total(),5);
			$this->assign("dynamics", $dynamics); 
			$this->assign("fpage",$page->fpage());
			$this->display();
		}

		function detail(){
			$dynamic=D("dynamic");
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
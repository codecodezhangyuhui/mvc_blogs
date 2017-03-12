<?php
	class route{
		private static $module;//模块
		private static $file;//文件名
		private static $action;//方法名
		function init(){
			$this->getInfo();
		}
		function getInfo(){
			self::$module=isset($_REQUEST["m"]) && !empty($_REQUEST["m"])?$_REQUEST["m"]:"index";
			self::$file=isset($_REQUEST["f"]) && !empty($_REQUEST["f"])?$_REQUEST["f"]:"index";
			self::$action=isset($_REQUEST["a"]) && !empty($_REQUEST["a"])?$_REQUEST["a"]:"init";
			$file=ROOT_URL."/module/".self::$module."/".self::$file.".class.php";
			if(is_file($file)){
				include $file;
				if(class_exists(self::$file)){
					$obj=new self::$file();
					if(method_exists($obj,self::$action)){
						$method=self::$action;
						$obj->$method();
					}else{
						echo self::$action."方法不存在";
					}
				}else{
					echo self::$file."类不存在";
				}
			}else{
				echo $file."文件找不到";
			}
		}
	}
?>
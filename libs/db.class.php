<?php
	class db{
		public $hostname="localhost";//主机地址
		public $dbname="mvc";//数据库名
		private $username="root";//用户名
		private $password="";//密码
		public $tablename;//表名
		private $connect;
		public $fileds;
		function __construct($tablename=""){
			if($tablename==""){
				echo "表名不能为空";
				exit();
			}
			$this->tablename=$tablename;
			$this->config();
		}
		public function config(){
			$this->connect=new mysqli($this->hostname,$this->username,$this->password,$this->dbname);
			if(mysqli_connect_errno($this->connect)){
				echo "连接 MySQL 出错";
				exit();
			}
			$this->connect->query("set names utf8");
			$this->fileds["filed"]="*";
			$this->fileds["where"]=$this->fileds["order"]=$this->fileds["limit"]="";
		}
		// 查询语句
		public function select($opt=""){
			if(empty($opt)){
				$sql="select ".$this->fileds["filed"]." from ".$this->tablename." ".$this->fileds["where"]." ".$this->fileds["order"]." ".$this->fileds["limit"];
			}else if(strpos($opt,"elect")){
				$sql=$opt;
			}else{
				$sql="select ".$opt." from ".$this->tablename." ".$this->fileds["where"]." ".$this->fileds["order"]." ".$this->fileds["limit"];
				
			}
			$result=$this->connect->query($sql);
			$array=array();
			while($row=$result->fetch_assoc()){
				$array[]=$row;
			}
			return $array;
		}
		//删除语句
		public function delete($opt=""){
			if(empty($opt)){
				$sql="delete from ".$this->tablename." ".$this->fileds["where"];
			}else if(strpos($opt,"elete")){
				$sql=$opt;
			}else{
				$sql=$sql="delete from ".$this->tablename." where ".$opt;
			}
    		$this->connect->query($sql);
    		return $this->connect->affected_rows;
   	 	}
		//修改语句
		public function update($opt=""){
			if(empty($opt)){
				$sql="update ".$this->tablename." set ".$this->fileds["filed"]." ".$this->fileds["where"];
				
			}else if(strpos($opt,"pdate")){
				$sql=$opt;
			}else{
				$sql="update ".$this->tablename." set ".$opt." ".$this->fileds["where"];
			}
			$this->connect->query($sql);
			return $this->connect->affected_rows;
		}
		//添加语句
		public function insert($opt=""){
			if(strpos($opt,";")){
				$this->filed($opt,"insert");
				$sql=$this->fileds["filed"];
			}else if(!empty($opt)){
				$this->filed($opt,"insert");
				$sql=$this->fileds["filed"];
			}else{
				$sql=$opt;
			}
			$this->connect->query($sql);
			return $this->connect->affected_rows;
		}
		public function filed($opt="",$type=""){ //$opt 查询的字段 ,默认为*
			$keys="";
			$values="";
			if(empty($opt)){
				$sql="*";
			}else if(strpos($opt,";")&&$type=="insert"){
				$arr=explode(";",$opt);
				foreach($arr as $k=>$v){
					$newarr=explode("=",$v);
					$keys.=$newarr[0].",";
					$values.=$newarr[1].",";
				}
				$keys=substr($keys,0,-1);
				$values=substr($values,0,-1);
				$opt="(".$keys.") values (".$values.")";
				$sql="insert into ".$this->tablename." ".$opt;
				
			}else if($type=="insert"){
				$arr=explode("=",$opt);
				$keys.=$arr[0].",";
				$values.=$arr[1].",";
				$keys=substr($keys,0,-1);
				$values=substr($values,0,-1);
				$opt="(".$keys.") values (".$values.")";
				$sql="insert into ".$this->tablename." ".$opt;
			}else{
				$sql=$opt;
			}
			$this->fileds["filed"]=$sql;
			return $this;
		}
		public function where($opt=""){ // $opt 查询条件
        	$sql=empty($opt)?"":" where ".$opt;
        	$this->fileds["where"]=$sql;
        	return $this;
    	}
    	public function order($opt=""){// $opt 排序条件  排序方法  asc || desc
    		$sql=empty($opt)?"":" order by ".$opt;
    		$this->fileds["order"]=$sql;
    		return $this;
    	}
    	public function limit($opt=""){
    		$sql=empty($opt)?"":" limit ".$opt;
    		$this->fileds["limit"]=$sql;
    		return $this;
    	}
	}
//	$db=new db("user","user");
//	var_dump($result=$db->where("id=17")->delete());
//	echo $result;
//	var_dump($db->select());
?>
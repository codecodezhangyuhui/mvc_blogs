<?php
	function P($param){
	    return $_POST[$param];
	}
	function G($param){
	    return $_GET[$param];
	}
	class zyh{
	    function  zyh(){
	        $this->str="";
	    }
	    //树
	    function tree($pid,$flag,$db,$table,$id=null){
	        $flag=$flag+1;
	        $result=$db->query("select * from $table where pid=".$pid);
	        while($row=$result->fetch_assoc()) {
	            $cid = $row["cid"];
	            $cname = $row["cname"];
	            $str = str_repeat("··", $flag);
	            if($cid==$id){
	            	$this->str.="<option value='$cid' selected>
	            				{$str}{$cname}
	            			</option>";
	            }else{
	            	$this->str.="<option value='$cid'>
	            				{$str}{$cname}
	            			</option>";
	            }
	            $this->tree($row["cid"], $flag, $db, $table,$id);
	        }
	    }
	    
	    //表
	    function table($pid,$flag,$db,$table){
	        $flag=$flag+1;
	        $result=$db->query("select * from $table where pid=".$pid);
	        while($row=$result->fetch_assoc()){
	            $cid=$row["cid"];
	            $cname=$row["cname"];
	            $pid=$row["pid"];
	            $str=str_repeat("··",$flag);
	            $this->str.="<tr>
		            	<td>$cid</td>
		            	<td class='cname'>{$str}{$cname}</td>
		            	<td>$pid</td>
						<td>
							<a href='index.php?m=admin&f=addClassIfy&a=delClassIfy&id=$cid'>删除</a>
							<a href='index.php?m=admin&f=addClassIfy&a=editClassIfy&id=$cid'>编辑</a>
						</td>
					</tr>";
	            $this->table($row["cid"],$flag,$db,$table);
	        }
	    }  
	}
?>
<?php
	class code{
		private $letter="abcdefghigklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ3456789";
		private $letterNum=4;
		public $fontSize=array("min"=>15,"max"=>25);
		public $fontFamily="Arimo.ttf";
		public $width=140;
		public $height=60;
		public $lineNum=8;
		public $imgType="png";
		public $img;
		public $pixNum=100;
		public $resultLetter;
		private function getColor(){
			$arr[0]=mt_rand(0,128);
			$arr[1]=mt_rand(0,128);
			$arr[2]=mt_rand(0,128);
			return $arr;
		}
		private function getFont(){
			$length=strlen($this->letter)-1;//获取字符串的长度
			$letter="";
			for($i=0;$i<$this->letterNum;$i++){
				$num=mt_rand(0,$length);//字符串截取开始位置
				$getLetter=$this->letter[$num];
			}		
			return $getLetter;
		}
		private function getFontColor(){
			$arr[0]=mt_rand(129,256);
			$arr[1]=mt_rand(129,256);
			$arr[2]=mt_rand(129,256);
			return $arr;
		}
		
		private function getLine(){
			$linearr[0]=mt_rand(0,$this->width);
			$linearr[1]=mt_rand(0,$this->height);
			$linearr[2]=mt_rand(0,$this->width);
			$linearr[3]=mt_rand(0,$this->height);
			return $linearr;
		}
		private function create(){
			$this->img=imagecreatetruecolor($this->width,$this->height);
			$colorArr=$this->getColor();
			$bgcolor=imagecolorallocate($this->img,$colorArr[0],$colorArr[1],$colorArr[2]);
			imagefill($this->img,0,0,$bgcolor);
		}
		private function createText(){
			for($i=0;$i<$this->letterNum;$i++){
				$this->resultLetter.=$f=strtolower($this->getFont());
				$this->color=$colorarr=$this->getFontColor();
				$fontsize=mt_rand($this->fontSize["min"],$this->fontSize["max"]);
				$angle=mt_rand(-15,15);
				$font=imagettfbbox($fontsize,$angle,$this->fontFamily,$f);
				$fontcolor=imagecolorallocate($this->img,$colorarr[0], $colorarr[1], $colorarr[2]);
				$x=$this->width/$this->letterNum;
				$w=($x+4)*$i;
				$h=($font[1]-$font[5])+mt_rand(5,10);
				imagettftext($this->img,$fontsize,$angle,$w,$h,$fontcolor,$this->fontFamily,$f);
			}
		}
		private function createLine(){
			for($i=0;$i<$this->lineNum;$i++){
				$linearr=$this->getLine();
				$colorarr=$this->getFontColor();
				$color=imagecolorallocate($this->img,$colorarr[0], $colorarr[1], $colorarr[2]);
				imageline($this->img,$linearr[0],$linearr[1],$linearr[2],$linearr[3],$color);
			}
		}
		private function createpix(){
			for($i=0;$i<$this->pixNum;$i++){
				$x=mt_rand(0,$this->width);
				$y=mt_rand(0,$this->height);
				$colorarr=$this->getFontColor();
				$fontcolor=imagecolorallocate($this->img,$colorarr[0], $colorarr[1], $colorarr[2]);
				imagesetpixel($this->img,$x,$y,$fontcolor);
			}
		}
		
		public function output(){
			header("content-type:image/".$this->imgType);
			$out="image".$this->imgType;
			$this->create();
			$this->createText();
			$this->createLine();
			$this->createpix();
			$out($this->img);
			$this->resultLetter;
			imagedestroy($this->img);//销毁图像
		}
	}
//	$code=new code();
//	$code->output();
?>
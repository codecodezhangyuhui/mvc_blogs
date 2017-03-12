<?php
//	header("content-type:image/png");
//	$img=imagecreatetruecolor(200,80);
//	$bgcolor=imagecolorallocate($img,255,0,0);
//	imagefill($img,0,0,$bgcolor);
//	$white = imagecolorallocate($img, 255, 255, 255);
//	
//	
//	$font=imagettfbbox(20,0,"libs/Arimo.ttf","asdfghj");
//	$w=$font[2]-$font[0];
//	$h=$font[3]-$font[5];
//	imagettftext($img,20,0,(200-$w)/2,(80-$h),$white,"libs/Arimo.ttf","asdfghj");
//	
//
//		
//	
//	
//	
//	
//	
////	var_dump($font);
//	imagepng($img);
//	for($i=0;$i<5;$i++){
//		echo "11<p>";
////	}
//	$letter="abcdefghigklmnopqrstuvwxyzABCDEFGHIGKLMNOPQRSTUVWXYZ3456789";
//	$length=strlen($letter)-1;//获取字符串的长度
//	$num=rand(0,$length);//字符串截取开始位置
//	$letterarr="";
//	for($i=0;$i<4;$i++){
//		$num=rand(0,$length);//字符串截取开始位置
//		$letterarr=$letter[$num];
//	}
//	echo $letterarr;
//	echo $letterarr;
//	echo $num;
//	$length=strlen($letter)-1;//获取字符串的长度
//	$start=rand(0,$length);//字符串截取开始位置
//	$data=substr($letter,$start,4);//随机截取字符串，取其中的一部分字符串
//	echo $length;
	
//	array (size=8)
//0 => int -1  x
//1 => int 9   y
//2 => int 40  x
//3 => int 9   y
//4 => int 40  x
//5 => int -23 y
//6 => int -1
//7 => int -23

	class image{
		public $letter="abcdefABCDEF";
		public $letterNum=4;
		private $currentLetter;
		private $lineNum=10;
		private $pixNum=50;
		private $imageType="png";
		private $img;
		private $imgText;
		public $width=200;
		public $height=80;
		private $fontSize=array("min"=>15,"max"=>25);
		public $fontURL="libs/Arimo.ttf";
		private function getColor(){
			$arr[0]=mt_rand(0,128);
			$arr[1]=mt_rand(0,128);
			$arr[2]=mt_rand(0,128);
			return $arr;
		}
		private function getTextColor(){
			$arr[0]=mt_rand(129,255);
			$arr[1]=mt_rand(129,255);
			$arr[2]=mt_rand(129,255);
			return $arr;
		}
		private function getText(){
			for($i=0;$i<$this->letterNum;$i++){
				$this->currentLetter.=$this->letter[mt_rand(0,strlen($this->letter)-1)];
			}
			return $this->currentLetter;
		}
		public function output(){
			header("Content-type:image/".$this->imageType);
			$out="image".$this->imageType;
			$this->creat();
			$this->creatText();
//			$this->creatLine();
			$out($this->img);
		}
		private function creat(){
			$this->img=imagecreatetruecolor($this->width,$this->height);
			$arrColor=$this->getColor();
			$bgcolor=imagecolorallocate($this->img,$arrColor[0],$arrColor[1],$arrColor[2]);
			imagefill($this->img,0,0,$bgcolor);	
		}
		private function creatText(){
//			for($i=0;$i<$this->letterNum;$i++){
//				$arr2color=$this->getTextColor();
//				$currentLetter=$this->getText();
//				$angle=mt_rand(-15,15);
//				$rect=imagettfbbox($this->fontSize,$angle,$this->fontURL,$currentLetter);
//				$textcolor=imagecolorallocate($this->img,$arr2color[0],$arr2color[1],$arr2color[2]);
//				$x=$this->width/$this->letterNum;
//				$y=$rect[1]-$rect[5];
//				$this->imgText=imagettftext($this->img,$this->fontSize(mt_rand($this->fontSize["min"],$this->fontSize["max"])),$angle,(10+$x)+mt_rand(-10,10),$y,$textcolor,$this->fontURL,$currentLetter);
//			}	
			
			
			
			for($i=0;$i<$this->letterNum;$i++){
				$f=$this->getText();
				$colorarr=$this->getTextColor();
				$fontsize=mt_rand($this->fontSize["min"],$this->fontSize["max"]);
				$angle=mt_rand(-15,15);
				$font=imagettfbbox($fontsize,$angle,$this->fontURL,$f);
				$fontcolor=imagecolorallocate($this->img,$colorarr[0], $colorarr[1], $colorarr[2]);
				$x=$this->width/$this->letterNum;
				$w=$x*$i;
				$h=($font[1]-$font[5])+mt_rand(5,10);
				imagettftext($this->img,$fontsize,$angle,$w,$h,$fontcolor,$this->fontURL,$f);
			}
			
			
		}
//		private function creatLine(){
//			for($i=0;$i<$this->lineNum;$i++){
//				$arr=$this->getTextColor();
//				$textcolor=imagecolorallocate($this->img,$arr[0],$arr[1],$arr[2]);
//				$x1=mt_rand(0,$this->width);
//				$x2=mt_rand(0,$this->width);
//				$y1=mt_rand(0,$this->height);
//				$y2=mt_rand(0,$this->height);
//				imageline($this->img,$x1,$y1,$x2,$y2,$textcolor);
//			}
//			for($i=0;$i<$this->pixNum;$i++){
//				$arr=$this->getTextColor();
//				$pixcolor=imagecolorallocate($this->img,$arr[0],$arr[1],$arr[2]);
//				$x1=mt_rand(0,$this->width);
//				$y1=mt_rand(0,$this->height);
//				imagesetpixel($this->img,$x1,$y1,$pixcolor);
//			}
//		}
	}
	$img=new image();
	$img->output();
//http://127.0.0.1/mvc/libs/font/code.class.php
//include "libs/font/code.class.php";
//$code=new code();
//$code->output();


/*
 
 * -webkit-user-select: none;background-position: 0px 0px, 10px 10px;background-size: 20px 20px;background-color: white;background-image:linear-gradient(45deg, #eee 25%, transparent 25%, transparent 75%, #eee 75%, #eee 100%),linear-gradient(45deg, #eee 25%, transparent 25%, transparent 75%, #eee 75%, #eee 100%);
 * */
?>
<?php
//for tom365 only
function tom365($str)
{
	if(strpos($str,"p2p.htm")){
		$dz['a']="http://58.211.7.21:8088/";
		$dz['a2']="http://58.211.7.21:80/";
		$dz['b']="http://58.218.202.216:8088/";
		$dz['b2']="http://58.218.202.216:80/";
		$dz['d']="http://58.211.7.29:8088/";
		$dz['d2']="http://58.211.7.29:80/";
		$dz['e']="http://220.164.140.232:8088/";
		$dz['e2']="http://220.164.140.232:80/";
		$dz['f']="http://220.164.140.233:8088/";
		$dz['f2']="http://220.164.140.233:80/";
		$dz['g']="http://218.63.177.195:8088/";
		$dz['g2']="http://218.63.177.195:80/";
		$dz['h']="http://58.211.7.21:8088/";
		$dz['h2']="http://58.211.7.21:80/";
		$dz['j']="http://58.211.7.21:8088/";
		$dz['j2']="http://58.211.7.21:80/";
		$dz['k']="http://58.211.7.26:8088/";
		$dz['k2']="http://58.211.7.26:80/";
		$dz['l']="http://58.211.7.26:8088/";
		$dz['l2']="http://58.211.7.26:80/";
		$dz['m']="http://58.211.7.29:8088/";
		$dz['m2']="http://58.211.7.29:80/";
		$dz['t']="http://58.218.202.216:8088/";
		$dz['t2']="http://58.218.202.216:80/";
		$dz['u']="http://58.218.198.227:8088/";
		$dz['u2']="http://58.218.198.227:80/";
		$dz['v']="http://v.tom365.com:8088/";
		$dz['v2']="http://58.218.198.227:80/";
		$dz['w']="http://60.172.179.24:8088/";
		$dz['w2']="http://60.172.179.24:80/";
		$dz['x']="http://58.211.79.201:8088/";
		$dz['x2']="http://58.211.79.201:80/";
		$playArray=explode("$$$",$str);
		$k=count($playArray);
		$j=1;
		if($str!=""){
			for($j=0;$j<$k;$j++){
				$playArray2=explode("$$",$playArray[$j]);
				$pstr=$playArray2[0];
				$purlstrarr=explode("#",$playArray2[1]);
				$strtemp="";
				for($jj=0;$jj<count($purlstrarr);$jj++)
				{
					$purlstr=$purlstrarr[$jj];
					$temparr=explode("?",$purlstr);
					$purlstr=str_replace("p2p2.htm?",$dz[$temparr[3].'2'],$purlstr);
					$purlstr=str_replace("p2p.htm?",$dz[$temparr[3]],$purlstr);
					$purlstr=preg_replace("/\?(.*)\?(.*)/is","",$purlstr);
					$strtemp.=$purlstr."#";
					
				}
				$strstr.=rtrim($strtemp,"#")."$$$";
			}
			
		}
	}
	$str=rtrim($strstr,"$$$").'<br>';
	$str=preg_replace("/\?(.*)\?(.*)/is","",$str);
	return $str;
}
?>
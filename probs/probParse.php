<?php
$operFile = $argv[1];
echo $operFile;
$htmlFile = $operFile.'.html';
$fh = fopen($htmlFile,'r');
$data = fread($fh,filesize($htmlFile));

$dom = new DOMDocument();
$dom->loadHTML($data);

$dom->preserveWhiteSpace = false;

$xpath = new DOMXPath($dom);

$fw = fopen($operFile.'.prob','w');

$tags = $xpath->query('//div[@class="problem_content"]');
foreach ($tags as $tag) {
	$foo = (trim($tag->nodeValue));
	echo $foo;
	fwrite($fw,$foo);
}

fclose($fh);
fclose($fw);
# $divs = $dom->getElementsByTagName('div');
#var_dump($divs);
#echo $divs->item(0)->nodeValue;
?>

<?

// 배열의 차집합(arrayA-arrayB)
$result = array_diff($array_A, $array_B);

// 배열의 교집합
$result = array_intersect($array_A, $array_B);

// 외부xml파일 dom 으로 접근
$dom = new DomDocument();
$sxe = simplexml_load_string($xml_str);
$dom_sxe = dom_import_simplexml($sxe);

$dom_sxe = $dom->importNode($dom_sxe, true);
$dom_sxe = $dom->appendChild($dom_sxe);
$dom->saveXML();
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

// php 람다(익명함수) 이용, 배열 각 항목값 수정해서 문자열 만들기
$items = ['a', 'b', 'c', 'd'];
$str = implode(', ', array_map(function ($item) {
  return "'{$item}'";
}, $items));
// 출력: 'a', 'b', 'c', 'd'

// 한글 문자열 인코딩맞춰서 자르기
iconv_substr($str, 0, 4, 'UTF-8'); // 문자열 $str 을 0 위치에서부터 4글자만큼 UTF-8 인코딩에 맞춰 자른다
<?

// 날짜포맷으로 insert
$rawDate = '2021-04-12';
$insertDate = date('Y-m-d H:i:s', strtotime("{$rawDate} 00:00:00"));
$query = "insert into TABLE_NAME (DATE_COLUMN_NAME) values(to_date('".$insertDate."', 'YYYY-MM-DD hh24:mi:ss'))";


// 문자열 치환하고 문자열을 날짜로 검색
$rawDate = '2021/05/31';
$query = "select date_column from TABLE_NAME where to_date(replace(date_column, '/', ''), 'yyyymmdd) between to_date('20210501', 'yyyymmdd') and to_date('20210505', 'yyyymmdd') order by replace(date_column, '/', '') desc";
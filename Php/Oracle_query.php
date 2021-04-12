<?

// 날짜포맷으로 insert
$rawDate = '2021-04-12';
$insertDate = date('Y-m-d H:i:s', strtotime("{$rawDate} 00:00:00"));
$query = "insert into TABLE_NAME (DATE_COLUMN_NAME) values(to_date('".$insertDate."', 'YYYY-MM-DD hh24:mi:ss'))";
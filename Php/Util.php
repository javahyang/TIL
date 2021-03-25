<?php

function getFormatDate($date, $format = 'Y-m-d\TH:i:sO') {
  return date($format, strtotime($date));
}
<?php

function getFormatDate($date, $format = 'Y-m-d\TH:i:sO') {
  return date($format, strtotime($date));
}

function removeLastChar($str) {
  // return substr($str, 0, -1);
  return substr_replace($str, '', -1);
}
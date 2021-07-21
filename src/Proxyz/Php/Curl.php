<?php namespace Proxyz\Php\Curl;
// This file is dynamically generated ... do not edit 

function curl_close($ch) {
  return \Proxyz\callFunction(__FUNCTION__, [$ch]);
}
function curl_copy_handle($ch) {
  return \Proxyz\callFunction(__FUNCTION__, [$ch]);
}
function curl_errno($ch) {
  return \Proxyz\callFunction(__FUNCTION__, [$ch]);
}
function curl_error($ch) {
  return \Proxyz\callFunction(__FUNCTION__, [$ch]);
}
function curl_escape($ch, $str) {
  return \Proxyz\callFunction(__FUNCTION__, [$ch, $str]);
}
function curl_exec($ch) {
  return \Proxyz\callFunction(__FUNCTION__, [$ch]);
}
function curl_file_create($filename, $mimetype=null, $postname=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename, $mimetype, $postname]);
}
function curl_getinfo($ch, $option=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ch, $option]);
}
function curl_init($url=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$url]);
}
function curl_multi_add_handle($mh, $ch) {
  return \Proxyz\callFunction(__FUNCTION__, [$mh, $ch]);
}
function curl_multi_close($mh) {
  return \Proxyz\callFunction(__FUNCTION__, [$mh]);
}
function curl_multi_errno($mh) {
  return \Proxyz\callFunction(__FUNCTION__, [$mh]);
}
function curl_multi_exec($mh, &$still_running=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$mh, &$still_running]);
}
function curl_multi_getcontent($ch) {
  return \Proxyz\callFunction(__FUNCTION__, [$ch]);
}
function curl_multi_info_read($mh, &$msgs_in_queue=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$mh, &$msgs_in_queue]);
}
function curl_multi_init() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function curl_multi_remove_handle($mh, $ch) {
  return \Proxyz\callFunction(__FUNCTION__, [$mh, $ch]);
}
function curl_multi_select($mh, $timeout=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$mh, $timeout]);
}
function curl_multi_setopt($sh, $option, $value) {
  return \Proxyz\callFunction(__FUNCTION__, [$sh, $option, $value]);
}
function curl_multi_strerror($errornum) {
  return \Proxyz\callFunction(__FUNCTION__, [$errornum]);
}
function curl_pause($ch, $bitmask) {
  return \Proxyz\callFunction(__FUNCTION__, [$ch, $bitmask]);
}
function curl_reset($ch) {
  return \Proxyz\callFunction(__FUNCTION__, [$ch]);
}
function curl_setopt($ch, $option, $value) {
  return \Proxyz\callFunction(__FUNCTION__, [$ch, $option, $value]);
}
function curl_setopt_array($ch, $options) {
  return \Proxyz\callFunction(__FUNCTION__, [$ch, $options]);
}
function curl_share_close($sh) {
  return \Proxyz\callFunction(__FUNCTION__, [$sh]);
}
function curl_share_errno($sh) {
  return \Proxyz\callFunction(__FUNCTION__, [$sh]);
}
function curl_share_init() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function curl_share_setopt($sh, $option, $value) {
  return \Proxyz\callFunction(__FUNCTION__, [$sh, $option, $value]);
}
function curl_share_strerror($errornum) {
  return \Proxyz\callFunction(__FUNCTION__, [$errornum]);
}
function curl_strerror($errornum) {
  return \Proxyz\callFunction(__FUNCTION__, [$errornum]);
}
function curl_unescape($ch, $str) {
  return \Proxyz\callFunction(__FUNCTION__, [$ch, $str]);
}
function curl_version($version=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$version]);
}
function methods() {
  return [
    "curl_close",
    "curl_copy_handle",
    "curl_errno",
    "curl_error",
    "curl_escape",
    "curl_exec",
    "curl_file_create",
    "curl_getinfo",
    "curl_init",
    "curl_multi_add_handle",
    "curl_multi_close",
    "curl_multi_errno",
    "curl_multi_exec",
    "curl_multi_getcontent",
    "curl_multi_info_read",
    "curl_multi_init",
    "curl_multi_remove_handle",
    "curl_multi_select",
    "curl_multi_setopt",
    "curl_multi_strerror",
    "curl_pause",
    "curl_reset",
    "curl_setopt",
    "curl_setopt_array",
    "curl_share_close",
    "curl_share_errno",
    "curl_share_init",
    "curl_share_setopt",
    "curl_share_strerror",
    "curl_strerror",
    "curl_unescape",
    "curl_version"
];}

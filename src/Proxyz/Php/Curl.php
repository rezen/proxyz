<?php namespace Proxyz\Php\Curl;
// This file is dynamically generated ... do not edit 

function curl_close($handle) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$handle], 0, $count_));
}
function curl_copy_handle($handle) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$handle], 0, $count_));
}
function curl_errno($handle) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$handle], 0, $count_));
}
function curl_error($handle) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$handle], 0, $count_));
}
function curl_escape($handle, $string) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$handle, $string], 0, $count_));
}
function curl_exec($handle) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$handle], 0, $count_));
}
function curl_file_create($filename, $mime_type=null, $posted_filename=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$filename, $mime_type, $posted_filename], 0, $count_));
}
function curl_getinfo($handle, $option=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$handle, $option], 0, $count_));
}
function curl_init($url=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$url], 0, $count_));
}
function curl_multi_add_handle($multi_handle, $handle) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$multi_handle, $handle], 0, $count_));
}
function curl_multi_close($multi_handle) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$multi_handle], 0, $count_));
}
function curl_multi_errno($multi_handle) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$multi_handle], 0, $count_));
}
function curl_multi_exec($multi_handle, &$still_running) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$multi_handle, &$still_running], 0, $count_));
}
function curl_multi_getcontent($handle) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$handle], 0, $count_));
}
function curl_multi_info_read($multi_handle, &$queued_messages=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$multi_handle, &$queued_messages], 0, $count_));
}
function curl_multi_init() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function curl_multi_remove_handle($multi_handle, $handle) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$multi_handle, $handle], 0, $count_));
}
function curl_multi_select($multi_handle, $timeout=1.0) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$multi_handle, $timeout], 0, $count_));
}
function curl_multi_setopt($multi_handle, $option, $value) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$multi_handle, $option, $value], 0, $count_));
}
function curl_multi_strerror($error_code) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$error_code], 0, $count_));
}
function curl_pause($handle, $flags) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$handle, $flags], 0, $count_));
}
function curl_reset($handle) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$handle], 0, $count_));
}
function curl_setopt($handle, $option, $value) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$handle, $option, $value], 0, $count_));
}
function curl_setopt_array($handle, $options) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$handle, $options], 0, $count_));
}
function curl_share_close($share_handle) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$share_handle], 0, $count_));
}
function curl_share_errno($share_handle) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$share_handle], 0, $count_));
}
function curl_share_init() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function curl_share_setopt($share_handle, $option, $value) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$share_handle, $option, $value], 0, $count_));
}
function curl_share_strerror($error_code) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$error_code], 0, $count_));
}
function curl_strerror($error_code) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$error_code], 0, $count_));
}
function curl_unescape($handle, $string) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$handle, $string], 0, $count_));
}
function curl_version() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
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

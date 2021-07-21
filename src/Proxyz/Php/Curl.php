<?php namespace Proxyz\Php\Curl;
// This file is dynamically generated ... do not edit 

function curl_close($handle) {
  return \Proxyz\callFunction(__FUNCTION__, [$handle]);
}
function curl_copy_handle($handle) {
  return \Proxyz\callFunction(__FUNCTION__, [$handle]);
}
function curl_errno($handle) {
  return \Proxyz\callFunction(__FUNCTION__, [$handle]);
}
function curl_error($handle) {
  return \Proxyz\callFunction(__FUNCTION__, [$handle]);
}
function curl_escape($handle, $string) {
  return \Proxyz\callFunction(__FUNCTION__, [$handle, $string]);
}
function curl_exec($handle) {
  return \Proxyz\callFunction(__FUNCTION__, [$handle]);
}
function curl_file_create() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function curl_getinfo($handle, $option=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$handle, $option]);
}
function curl_init($url=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$url]);
}
function curl_multi_add_handle($multi_handle, $handle) {
  return \Proxyz\callFunction(__FUNCTION__, [$multi_handle, $handle]);
}
function curl_multi_close($multi_handle) {
  return \Proxyz\callFunction(__FUNCTION__, [$multi_handle]);
}
function curl_multi_errno($multi_handle) {
  return \Proxyz\callFunction(__FUNCTION__, [$multi_handle]);
}
function curl_multi_exec($multi_handle, &$still_running) {
  return \Proxyz\callFunction(__FUNCTION__, [$multi_handle, &$still_running]);
}
function curl_multi_getcontent($handle) {
  return \Proxyz\callFunction(__FUNCTION__, [$handle]);
}
function curl_multi_info_read($multi_handle, &$queued_messages=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$multi_handle, &$queued_messages]);
}
function curl_multi_init() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function curl_multi_remove_handle($multi_handle, $handle) {
  return \Proxyz\callFunction(__FUNCTION__, [$multi_handle, $handle]);
}
function curl_multi_select($multi_handle, $timeout=1.0) {
  return \Proxyz\callFunction(__FUNCTION__, [$multi_handle, $timeout]);
}
function curl_multi_setopt($multi_handle, $option, $value) {
  return \Proxyz\callFunction(__FUNCTION__, [$multi_handle, $option, $value]);
}
function curl_multi_strerror($error_code) {
  return \Proxyz\callFunction(__FUNCTION__, [$error_code]);
}
function curl_pause($handle, $flags) {
  return \Proxyz\callFunction(__FUNCTION__, [$handle, $flags]);
}
function curl_reset($handle) {
  return \Proxyz\callFunction(__FUNCTION__, [$handle]);
}
function curl_setopt($handle, $option, $value) {
  return \Proxyz\callFunction(__FUNCTION__, [$handle, $option, $value]);
}
function curl_setopt_array($handle, $options) {
  return \Proxyz\callFunction(__FUNCTION__, [$handle, $options]);
}
function curl_share_close($share_handle) {
  return \Proxyz\callFunction(__FUNCTION__, [$share_handle]);
}
function curl_share_errno($share_handle) {
  return \Proxyz\callFunction(__FUNCTION__, [$share_handle]);
}
function curl_share_init() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function curl_share_setopt($share_handle, $option, $value) {
  return \Proxyz\callFunction(__FUNCTION__, [$share_handle, $option, $value]);
}
function curl_share_strerror($error_code) {
  return \Proxyz\callFunction(__FUNCTION__, [$error_code]);
}
function curl_strerror($error_code) {
  return \Proxyz\callFunction(__FUNCTION__, [$error_code]);
}
function curl_unescape($handle, $string) {
  return \Proxyz\callFunction(__FUNCTION__, [$handle, $string]);
}
function curl_version() {
  return \Proxyz\callFunction(__FUNCTION__, []);
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

<?php namespace Proxyz\Php\Session;
// This file is dynamically generated ... do not edit 

function session_abort() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function session_cache_expire($value=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$value], 0, $count_));
}
function session_cache_limiter($value=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$value], 0, $count_));
}
function session_commit() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function session_create_id($prefix="") {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$prefix], 0, $count_));
}
function session_decode($data) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$data], 0, $count_));
}
function session_destroy() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function session_encode() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function session_gc() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function session_get_cookie_params() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function session_id($id=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$id], 0, $count_));
}
function session_module_name($module=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$module], 0, $count_));
}
function session_name($name=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$name], 0, $count_));
}
function session_regenerate_id($delete_old_session=false) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$delete_old_session], 0, $count_));
}
function session_register_shutdown() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function session_reset() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function session_save_path($path=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$path], 0, $count_));
}
function session_set_cookie_params($lifetime_or_options, $path=null, $domain=null, $secure=null, $httponly=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$lifetime_or_options, $path, $domain, $secure, $httponly], 0, $count_));
}
function session_set_save_handler($open, $close, $read, $write, $destroy, $gc, $create_sid=null, $validate_sid=null, $update_timestamp=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$open, $close, $read, $write, $destroy, $gc, $create_sid, $validate_sid, $update_timestamp], 0, $count_));
}
function session_start($options=[]) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$options], 0, $count_));
}
function session_status() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function session_unset() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function session_write_close() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function methods() {
  return [
    "session_abort",
    "session_cache_expire",
    "session_cache_limiter",
    "session_commit",
    "session_create_id",
    "session_decode",
    "session_destroy",
    "session_encode",
    "session_gc",
    "session_get_cookie_params",
    "session_id",
    "session_module_name",
    "session_name",
    "session_regenerate_id",
    "session_register_shutdown",
    "session_reset",
    "session_save_path",
    "session_set_cookie_params",
    "session_set_save_handler",
    "session_start",
    "session_status",
    "session_unset",
    "session_write_close"
];}

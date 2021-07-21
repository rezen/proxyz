<?php namespace Proxyz\Php\Session;
// This file is dynamically generated ... do not edit 

function session_abort() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function session_cache_expire($new_cache_expire=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$new_cache_expire]);
}
function session_cache_limiter($cache_limiter=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$cache_limiter]);
}
function session_commit() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function session_create_id($prefix=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$prefix]);
}
function session_decode($data) {
  return \Proxyz\callFunction(__FUNCTION__, [$data]);
}
function session_destroy() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function session_encode() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function session_gc() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function session_get_cookie_params() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function session_id($id=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$id]);
}
function session_module_name($module=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$module]);
}
function session_name($name=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$name]);
}
function session_regenerate_id($delete_old_session=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$delete_old_session]);
}
function session_register_shutdown() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function session_reset() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function session_save_path($path=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$path]);
}
function session_set_cookie_params($lifetime_or_options, $path=null, $domain=null, $secure=null, $httponly=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$lifetime_or_options, $path, $domain, $secure, $httponly]);
}
function session_set_save_handler($open, $close=null, $read=null, $write=null, $destroy=null, $gc=null, $create_sid=null, $validate_sid=null, $update_timestamp=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$open, $close, $read, $write, $destroy, $gc, $create_sid, $validate_sid, $update_timestamp]);
}
function session_start($options=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$options]);
}
function session_status() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function session_unset() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function session_write_close() {
  return \Proxyz\callFunction(__FUNCTION__, []);
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

<?php namespace Proxyz\Php\Info;
// This file is dynamically generated ... do not edit 

function assert_options($what, $value=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$what, $value]);
}
function cli_get_process_title() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function cli_set_process_title($title) {
  return \Proxyz\callFunction(__FUNCTION__, [$title]);
}
function dl($extension_filename) {
  return \Proxyz\callFunction(__FUNCTION__, [$extension_filename]);
}
function extension_loaded($extension) {
  return \Proxyz\callFunction(__FUNCTION__, [$extension]);
}
function gc_collect_cycles() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function gc_disable() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function gc_enable() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function gc_enabled() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function gc_mem_caches() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function gc_status() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function get_cfg_var($option) {
  return \Proxyz\callFunction(__FUNCTION__, [$option]);
}
function get_current_user() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function get_defined_constants($categorize=false) {
  return \Proxyz\callFunction(__FUNCTION__, [$categorize]);
}
function get_extension_funcs($extension) {
  return \Proxyz\callFunction(__FUNCTION__, [$extension]);
}
function get_include_path() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function get_included_files() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function get_loaded_extensions($zend_extensions=false) {
  return \Proxyz\callFunction(__FUNCTION__, [$zend_extensions]);
}
function get_magic_quotes_gpc() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function get_magic_quotes_runtime() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function get_required_files() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function get_resources($type=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$type]);
}
function getenv($varname, $local_only=false) {
  return \Proxyz\callFunction(__FUNCTION__, [$varname, $local_only]);
}
function getlastmod() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function getmygid() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function getmyinode() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function getmypid() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function getmyuid() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function getopt($short_options, $long_options=[], &$rest_index=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$short_options, $long_options, &$rest_index]);
}
function getrusage($mode=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$mode]);
}
function ini_alter() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function ini_get($option) {
  return \Proxyz\callFunction(__FUNCTION__, [$option]);
}
function ini_get_all($extension=null, $details=true) {
  return \Proxyz\callFunction(__FUNCTION__, [$extension, $details]);
}
function ini_restore($option) {
  return \Proxyz\callFunction(__FUNCTION__, [$option]);
}
function ini_set($option, $value) {
  return \Proxyz\callFunction(__FUNCTION__, [$option, $value]);
}
function main() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function memory_get_peak_usage($real_usage=false) {
  return \Proxyz\callFunction(__FUNCTION__, [$real_usage]);
}
function memory_get_usage($real_usage=false) {
  return \Proxyz\callFunction(__FUNCTION__, [$real_usage]);
}
function php_ini_loaded_file() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function php_ini_scanned_files() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function php_sapi_name() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function php_uname($mode="a") {
  return \Proxyz\callFunction(__FUNCTION__, [$mode]);
}
function phpcredits($flags=CREDITS_ALL) {
  return \Proxyz\callFunction(__FUNCTION__, [$flags]);
}
function phpinfo($flags=INFO_ALL) {
  return \Proxyz\callFunction(__FUNCTION__, [$flags]);
}
function phpversion($extension=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$extension]);
}
function putenv($assignment) {
  return \Proxyz\callFunction(__FUNCTION__, [$assignment]);
}
function restore_include_path() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function set_include_path($include_path) {
  return \Proxyz\callFunction(__FUNCTION__, [$include_path]);
}
function set_time_limit($seconds) {
  return \Proxyz\callFunction(__FUNCTION__, [$seconds]);
}
function sys_get_temp_dir() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function version_compare($version1, $version2) {
  return \Proxyz\callFunction(__FUNCTION__, [$version1, $version2]);
}
function zend_thread_id() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function zend_version() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function methods() {
  return [
    "assert",
    "assert_options",
    "cli_get_process_title",
    "cli_set_process_title",
    "dl",
    "extension_loaded",
    "gc_collect_cycles",
    "gc_disable",
    "gc_enable",
    "gc_enabled",
    "gc_mem_caches",
    "gc_status",
    "get_cfg_var",
    "get_current_user",
    "get_defined_constants",
    "get_extension_funcs",
    "get_include_path",
    "get_included_files",
    "get_loaded_extensions",
    "get_magic_quotes_gpc",
    "get_magic_quotes_runtime",
    "get_required_files",
    "get_resources",
    "getenv",
    "getlastmod",
    "getmygid",
    "getmyinode",
    "getmypid",
    "getmyuid",
    "getopt",
    "getrusage",
    "ini_alter",
    "ini_get",
    "ini_get_all",
    "ini_restore",
    "ini_set",
    "main",
    "memory_get_peak_usage",
    "memory_get_usage",
    "php_ini_loaded_file",
    "php_ini_scanned_files",
    "php_sapi_name",
    "php_uname",
    "phpcredits",
    "phpinfo",
    "phpversion",
    "putenv",
    "restore_include_path",
    "set_include_path",
    "set_time_limit",
    "sys_get_temp_dir",
    "version_compare",
    "zend_thread_id",
    "zend_version"
];}

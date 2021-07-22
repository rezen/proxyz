<?php namespace Proxyz\Php\Mysqli;
// This file is dynamically generated ... do not edit 

function mysqli_affected_rows($mysql) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql], 0, $count_));
}
function mysqli_autocommit($mysql, $enable) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql, $enable], 0, $count_));
}
function mysqli_begin_transaction($mysql, $flags=0, $name=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql, $flags, $name], 0, $count_));
}
function mysqli_change_user($mysql, $username, $password, $database) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql, $username, $password, $database], 0, $count_));
}
function mysqli_character_set_name($mysql) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql], 0, $count_));
}
function mysqli_close($mysql) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql], 0, $count_));
}
function mysqli_commit($mysql, $flags=0, $name=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql, $flags, $name], 0, $count_));
}
function mysqli_connect($hostname=null, $username=null, $password=null, $database="", $port=null, $socket=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$hostname, $username, $password, $database, $port, $socket], 0, $count_));
}
function mysqli_connect_errno() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function mysqli_connect_error() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function mysqli_debug($options) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$options], 0, $count_));
}
function mysqli_dump_debug_info($mysql) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql], 0, $count_));
}
function mysqli_errno($mysql) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql], 0, $count_));
}
function mysqli_error($mysql) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql], 0, $count_));
}
function mysqli_error_list($mysql) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql], 0, $count_));
}
function mysqli_field_count($mysql) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql], 0, $count_));
}
function mysqli_get_charset($mysql) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql], 0, $count_));
}
function mysqli_get_client_info($mysql=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql], 0, $count_));
}
function mysqli_get_client_version() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function mysqli_get_connection_stats($mysql) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql], 0, $count_));
}
function mysqli_get_host_info($mysql) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql], 0, $count_));
}
function mysqli_get_proto_info($mysql) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql], 0, $count_));
}
function mysqli_get_server_info($mysql) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql], 0, $count_));
}
function mysqli_get_server_version($mysql) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql], 0, $count_));
}
function mysqli_get_warnings($mysql) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql], 0, $count_));
}
function mysqli_info($mysql) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql], 0, $count_));
}
function mysqli_init() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function mysqli_insert_id($mysql) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql], 0, $count_));
}
function mysqli_kill($mysql, $process_id) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql, $process_id], 0, $count_));
}
function mysqli_more_results($mysql) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql], 0, $count_));
}
function mysqli_multi_query($mysql, $query) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql, $query], 0, $count_));
}
function mysqli_next_result($mysql) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql], 0, $count_));
}
function mysqli_options($mysql, $option, $value) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql, $option, $value], 0, $count_));
}
function mysqli_ping($mysql) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql], 0, $count_));
}
function mysqli_poll(&$read, &$error, &$reject, $seconds, $microseconds=0) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([&$read, &$error, &$reject, $seconds, $microseconds], 0, $count_));
}
function mysqli_prepare($mysql, $query) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql, $query], 0, $count_));
}
function mysqli_query($mysql, $query, $result_mode=MYSQLI_STORE_RESULT) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql, $query, $result_mode], 0, $count_));
}
function mysqli_real_connect($host=null, $username=null, $passwd=null, $dbname=null, $port=null, $socket=null, $flags=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$host, $username, $passwd, $dbname, $port, $socket, $flags], 0, $count_));
}
function mysqli_real_escape_string($mysql, $string) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql, $string], 0, $count_));
}
function mysqli_real_query($mysql, $query) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql, $query], 0, $count_));
}
function mysqli_reap_async_query($mysql) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql], 0, $count_));
}
function mysqli_refresh($mysql, $flags) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql, $flags], 0, $count_));
}
function mysqli_release_savepoint($mysql, $name) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql, $name], 0, $count_));
}
function mysqli_rollback($mysql, $flags=0, $name=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql, $flags, $name], 0, $count_));
}
function mysqli_savepoint($mysql, $name) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql, $name], 0, $count_));
}
function mysqli_select_db($mysql, $database) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql, $database], 0, $count_));
}
function mysqli_set_charset($mysql, $charset) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql, $charset], 0, $count_));
}
function mysqli_sqlstate($mysql) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql], 0, $count_));
}
function mysqli_ssl_set($mysql, $key, $certificate, $ca_certificate, $ca_path, $cipher_algos) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql, $key, $certificate, $ca_certificate, $ca_path, $cipher_algos], 0, $count_));
}
function mysqli_stat($mysql) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql], 0, $count_));
}
function mysqli_stmt_init($mysql) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql], 0, $count_));
}
function mysqli_store_result($mysql, $mode=0) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql, $mode], 0, $count_));
}
function mysqli_thread_id($mysql) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql], 0, $count_));
}
function mysqli_thread_safe() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function mysqli_use_result($mysql) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql], 0, $count_));
}
function mysqli_warning_count($mysql) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mysql], 0, $count_));
}
function methods() {
  return [
    "mysqli_affected_rows",
    "mysqli_autocommit",
    "mysqli_begin_transaction",
    "mysqli_change_user",
    "mysqli_character_set_name",
    "mysqli_close",
    "mysqli_commit",
    "mysqli_connect",
    "mysqli_connect_errno",
    "mysqli_connect_error",
    "mysqli_debug",
    "mysqli_dump_debug_info",
    "mysqli_errno",
    "mysqli_error",
    "mysqli_error_list",
    "mysqli_field_count",
    "mysqli_get_charset",
    "mysqli_get_client_info",
    "mysqli_get_client_version",
    "mysqli_get_connection_stats",
    "mysqli_get_host_info",
    "mysqli_get_proto_info",
    "mysqli_get_server_info",
    "mysqli_get_server_version",
    "mysqli_get_warnings",
    "mysqli_info",
    "mysqli_init",
    "mysqli_insert_id",
    "mysqli_kill",
    "mysqli_more_results",
    "mysqli_multi_query",
    "mysqli_next_result",
    "mysqli_options",
    "mysqli_ping",
    "mysqli_poll",
    "mysqli_prepare",
    "mysqli_query",
    "mysqli_real_connect",
    "mysqli_real_escape_string",
    "mysqli_real_query",
    "mysqli_reap_async_query",
    "mysqli_refresh",
    "mysqli_release_savepoint",
    "mysqli_rollback",
    "mysqli_savepoint",
    "mysqli_select_db",
    "mysqli_set_charset",
    "mysqli_sqlstate",
    "mysqli_ssl_set",
    "mysqli_stat",
    "mysqli_stmt_init",
    "mysqli_store_result",
    "mysqli_thread_id",
    "mysqli_thread_safe",
    "mysqli_use_result",
    "mysqli_warning_count"
];}

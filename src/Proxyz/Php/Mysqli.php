<?php namespace Proxyz\Php\Mysqli;
// This file is dynamically generated ... do not edit 

function mysqli_affected_rows($mysql) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql]);
}
function mysqli_autocommit($mysql, $enable) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql, $enable]);
}
function mysqli_begin_transaction($mysql, $flags=0, $name=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql, $flags, $name]);
}
function mysqli_change_user($mysql, $username, $password, $database) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql, $username, $password, $database]);
}
function mysqli_character_set_name($mysql) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql]);
}
function mysqli_close($mysql) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql]);
}
function mysqli_commit($mysql, $flags=0, $name=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql, $flags, $name]);
}
function mysqli_connect($hostname=null, $username=null, $password=null, $database="", $port=null, $socket=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$hostname, $username, $password, $database, $port, $socket]);
}
function mysqli_connect_errno() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function mysqli_connect_error() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function mysqli_debug($options) {
  return \Proxyz\callFunction(__FUNCTION__, [$options]);
}
function mysqli_dump_debug_info($mysql) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql]);
}
function mysqli_errno($mysql) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql]);
}
function mysqli_error($mysql) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql]);
}
function mysqli_error_list($mysql) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql]);
}
function mysqli_field_count($mysql) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql]);
}
function mysqli_get_charset($mysql) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql]);
}
function mysqli_get_client_info($mysql=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql]);
}
function mysqli_get_client_version() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function mysqli_get_connection_stats($mysql) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql]);
}
function mysqli_get_host_info($mysql) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql]);
}
function mysqli_get_proto_info($mysql) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql]);
}
function mysqli_get_server_info($mysql) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql]);
}
function mysqli_get_server_version($mysql) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql]);
}
function mysqli_get_warnings($mysql) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql]);
}
function mysqli_info($mysql) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql]);
}
function mysqli_init() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function mysqli_insert_id($mysql) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql]);
}
function mysqli_kill($mysql, $process_id) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql, $process_id]);
}
function mysqli_more_results($mysql) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql]);
}
function mysqli_multi_query($mysql, $query) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql, $query]);
}
function mysqli_next_result($mysql) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql]);
}
function mysqli_options($mysql, $option, $value) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql, $option, $value]);
}
function mysqli_ping($mysql) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql]);
}
function mysqli_poll(&$read, &$error, &$reject, $seconds, $microseconds=0) {
  return \Proxyz\callFunction(__FUNCTION__, [&$read, &$error, &$reject, $seconds, $microseconds]);
}
function mysqli_prepare($mysql, $query) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql, $query]);
}
function mysqli_query($mysql, $query, $result_mode=MYSQLI_STORE_RESULT) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql, $query, $result_mode]);
}
function mysqli_real_connect($host=null, $username=null, $passwd=null, $dbname=null, $port=null, $socket=null, $flags=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$host, $username, $passwd, $dbname, $port, $socket, $flags]);
}
function mysqli_real_escape_string($mysql, $string) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql, $string]);
}
function mysqli_real_query($mysql, $query) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql, $query]);
}
function mysqli_reap_async_query($mysql) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql]);
}
function mysqli_refresh($mysql, $flags) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql, $flags]);
}
function mysqli_release_savepoint($mysql, $name) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql, $name]);
}
function mysqli_rollback($mysql, $flags=0, $name=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql, $flags, $name]);
}
function mysqli_savepoint($mysql, $name) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql, $name]);
}
function mysqli_select_db($mysql, $database) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql, $database]);
}
function mysqli_set_charset($mysql, $charset) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql, $charset]);
}
function mysqli_sqlstate($mysql) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql]);
}
function mysqli_ssl_set($mysql, $key, $certificate, $ca_certificate, $ca_path, $cipher_algos) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql, $key, $certificate, $ca_certificate, $ca_path, $cipher_algos]);
}
function mysqli_stat($mysql) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql]);
}
function mysqli_stmt_init($mysql) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql]);
}
function mysqli_store_result($mysql, $mode=0) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql, $mode]);
}
function mysqli_thread_id($mysql) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql]);
}
function mysqli_thread_safe() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function mysqli_use_result($mysql) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql]);
}
function mysqli_warning_count($mysql) {
  return \Proxyz\callFunction(__FUNCTION__, [$mysql]);
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

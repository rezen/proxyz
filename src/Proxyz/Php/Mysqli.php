<?php namespace Proxyz\Php\Mysqli;
// This file is dynamically generated ... do not edit 

function mysqli___construct() {
  return \Proxyz\callFunction(__FUNCTION__, func_get_args());
}
function mysqli_affected_rows($link) {
  return \Proxyz\callFunction(__FUNCTION__, [$link]);
}
function mysqli_autocommit($link, $mode) {
  return \Proxyz\callFunction(__FUNCTION__, [$link, $mode]);
}
function mysqli_begin_transaction($link, $flags=null, $name=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$link, $flags, $name]);
}
function mysqli_change_user($link, $user, $password, $database) {
  return \Proxyz\callFunction(__FUNCTION__, [$link, $user, $password, $database]);
}
function mysqli_character_set_name($link) {
  return \Proxyz\callFunction(__FUNCTION__, [$link]);
}
function mysqli_client_info() {
  return \Proxyz\callFunction(__FUNCTION__, func_get_args());
}
function mysqli_client_version() {
  return \Proxyz\callFunction(__FUNCTION__, func_get_args());
}
function mysqli_close($link) {
  return \Proxyz\callFunction(__FUNCTION__, [$link]);
}
function mysqli_commit($link, $flags=null, $name=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$link, $flags, $name]);
}
function mysqli_connect_errno() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function mysqli_connect_error() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function mysqli_debug($debug_options) {
  return \Proxyz\callFunction(__FUNCTION__, [$debug_options]);
}
function mysqli_dump_debug_info($link) {
  return \Proxyz\callFunction(__FUNCTION__, [$link]);
}
function mysqli_errno($link) {
  return \Proxyz\callFunction(__FUNCTION__, [$link]);
}
function mysqli_error($link) {
  return \Proxyz\callFunction(__FUNCTION__, [$link]);
}
function mysqli_error_list($link) {
  return \Proxyz\callFunction(__FUNCTION__, [$link]);
}
function mysqli_field_count($link) {
  return \Proxyz\callFunction(__FUNCTION__, [$link]);
}
function mysqli_get_charset($link) {
  return \Proxyz\callFunction(__FUNCTION__, [$link]);
}
function mysqli_get_connection_stats($link) {
  return \Proxyz\callFunction(__FUNCTION__, [$link]);
}
function mysqli_get_warnings($link) {
  return \Proxyz\callFunction(__FUNCTION__, [$link]);
}
function mysqli_host_info() {
  return \Proxyz\callFunction(__FUNCTION__, func_get_args());
}
function mysqli_info($link) {
  return \Proxyz\callFunction(__FUNCTION__, [$link]);
}
function mysqli_init() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function mysqli_insert_id($link) {
  return \Proxyz\callFunction(__FUNCTION__, [$link]);
}
function mysqli_kill($link, $connection_id) {
  return \Proxyz\callFunction(__FUNCTION__, [$link, $connection_id]);
}
function mysqli_more_results($link) {
  return \Proxyz\callFunction(__FUNCTION__, [$link]);
}
function mysqli_multi_query($link, $query=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$link, $query]);
}
function mysqli_next_result($link) {
  return \Proxyz\callFunction(__FUNCTION__, [$link]);
}
function mysqli_options($link, $option, $value) {
  return \Proxyz\callFunction(__FUNCTION__, [$link, $option, $value]);
}
function mysqli_ping($link) {
  return \Proxyz\callFunction(__FUNCTION__, [$link]);
}
function mysqli_poll(&$read, &$write, &$error, $sec, $usec=null) {
  return \Proxyz\callFunction(__FUNCTION__, [&$read, &$write, &$error, $sec, $usec]);
}
function mysqli_prepare($link, $query) {
  return \Proxyz\callFunction(__FUNCTION__, [$link, $query]);
}
function mysqli_protocol_version() {
  return \Proxyz\callFunction(__FUNCTION__, func_get_args());
}
function mysqli_query($link, $query, $resultmode=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$link, $query, $resultmode]);
}
function mysqli_real_connect($link, $host=null, $user=null, $password=null, $database=null, $port=null, $socket=null, $flags=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$link, $host, $user, $password, $database, $port, $socket, $flags]);
}
function mysqli_real_escape_string($link, $string_to_escape) {
  return \Proxyz\callFunction(__FUNCTION__, [$link, $string_to_escape]);
}
function mysqli_real_query($link, $query=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$link, $query]);
}
function mysqli_reap_async_query($link) {
  return \Proxyz\callFunction(__FUNCTION__, [$link]);
}
function mysqli_refresh($link, $options) {
  return \Proxyz\callFunction(__FUNCTION__, [$link, $options]);
}
function mysqli_release_savepoint($link, $name) {
  return \Proxyz\callFunction(__FUNCTION__, [$link, $name]);
}
function mysqli_rollback($link, $flags=null, $name=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$link, $flags, $name]);
}
function mysqli_savepoint($link, $name) {
  return \Proxyz\callFunction(__FUNCTION__, [$link, $name]);
}
function mysqli_select_db($link, $database) {
  return \Proxyz\callFunction(__FUNCTION__, [$link, $database]);
}
function mysqli_server_info() {
  return \Proxyz\callFunction(__FUNCTION__, func_get_args());
}
function mysqli_server_version() {
  return \Proxyz\callFunction(__FUNCTION__, func_get_args());
}
function mysqli_set_charset($link, $charset) {
  return \Proxyz\callFunction(__FUNCTION__, [$link, $charset]);
}
function mysqli_sqlstate($link) {
  return \Proxyz\callFunction(__FUNCTION__, [$link]);
}
function mysqli_ssl_set($link, $key, $cert, $certificate_authority, $certificate_authority_path, $cipher) {
  return \Proxyz\callFunction(__FUNCTION__, [$link, $key, $cert, $certificate_authority, $certificate_authority_path, $cipher]);
}
function mysqli_stat($link) {
  return \Proxyz\callFunction(__FUNCTION__, [$link]);
}
function mysqli_stmt_init($link) {
  return \Proxyz\callFunction(__FUNCTION__, [$link]);
}
function mysqli_store_result($link, $flags=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$link, $flags]);
}
function mysqli_thread_id($link) {
  return \Proxyz\callFunction(__FUNCTION__, [$link]);
}
function mysqli_thread_safe() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function mysqli_use_result($link) {
  return \Proxyz\callFunction(__FUNCTION__, [$link]);
}
function mysqli_warning_count($link) {
  return \Proxyz\callFunction(__FUNCTION__, [$link]);
}
function methods() {
  return [
    "mysqli___construct",
    "mysqli_affected_rows",
    "mysqli_autocommit",
    "mysqli_begin_transaction",
    "mysqli_change_user",
    "mysqli_character_set_name",
    "mysqli_client_info",
    "mysqli_client_version",
    "mysqli_close",
    "mysqli_commit",
    "mysqli_connect_errno",
    "mysqli_connect_error",
    "mysqli_debug",
    "mysqli_dump_debug_info",
    "mysqli_errno",
    "mysqli_error",
    "mysqli_error_list",
    "mysqli_field_count",
    "mysqli_get_charset",
    "mysqli_get_connection_stats",
    "mysqli_get_warnings",
    "mysqli_host_info",
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
    "mysqli_protocol_version",
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
    "mysqli_server_info",
    "mysqli_server_version",
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

<?php namespace Proxyz\Php\Stream;
// This file is dynamically generated ... do not edit 

function stream_bucket_append($brigade, $bucket) {
  return \Proxyz\callFunction(__FUNCTION__, [$brigade, $bucket]);
}
function stream_bucket_make_writeable($brigade) {
  return \Proxyz\callFunction(__FUNCTION__, [$brigade]);
}
function stream_bucket_new($stream, $buffer) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream, $buffer]);
}
function stream_bucket_prepend($brigade, $bucket) {
  return \Proxyz\callFunction(__FUNCTION__, [$brigade, $bucket]);
}
function stream_context_create($options=null, $params=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$options, $params]);
}
function stream_context_get_default($options=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$options]);
}
function stream_context_get_options($stream_or_context) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream_or_context]);
}
function stream_context_get_params($stream_or_context) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream_or_context]);
}
function stream_context_set_default($options) {
  return \Proxyz\callFunction(__FUNCTION__, [$options]);
}
function stream_context_set_option($stream_or_context, $wrapper, $option, $value) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream_or_context, $wrapper, $option, $value]);
}
function stream_context_set_params($context, $params) {
  return \Proxyz\callFunction(__FUNCTION__, [$context, $params]);
}
function stream_copy_to_stream($source, $dest, $maxlength=-1, $offset=0) {
  return \Proxyz\callFunction(__FUNCTION__, [$source, $dest, $maxlength, $offset]);
}
function stream_filter_append($stream, $filtername, $read_write=null, $params=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream, $filtername, $read_write, $params]);
}
function stream_filter_prepend($stream, $filtername, $read_write=null, $params=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream, $filtername, $read_write, $params]);
}
function stream_filter_register($filter_name, $class) {
  return \Proxyz\callFunction(__FUNCTION__, [$filter_name, $class]);
}
function stream_filter_remove($stream_filter) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream_filter]);
}
function stream_get_contents($handle, $maxlength=-1, $offset=-1) {
  return \Proxyz\callFunction(__FUNCTION__, [$handle, $maxlength, $offset]);
}
function stream_get_filters() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function stream_get_line($handle, $length, $ending="") {
  return \Proxyz\callFunction(__FUNCTION__, [$handle, $length, $ending]);
}
function stream_get_meta_data($stream) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream]);
}
function stream_get_transports() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function stream_get_wrappers() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function stream_is_local($stream) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream]);
}
function stream_isatty($stream) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream]);
}
function stream_notification_callback($notification_code, $severity, $message, $message_code, $bytes_transferred, $bytes_max) {
  return \Proxyz\callFunction(__FUNCTION__, [$notification_code, $severity, $message, $message_code, $bytes_transferred, $bytes_max]);
}
function stream_register_wrapper() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function stream_resolve_include_path($filename) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename]);
}
function stream_select(&$read, &$write, &$except, $tv_sec, $tv_usec=0) {
  return \Proxyz\callFunction(__FUNCTION__, [&$read, &$write, &$except, $tv_sec, $tv_usec]);
}
function stream_set_blocking($stream, $enable) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream, $enable]);
}
function stream_set_chunk_size($stream, $size) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream, $size]);
}
function stream_set_read_buffer($stream, $size) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream, $size]);
}
function stream_set_timeout($stream, $seconds, $microseconds=0) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream, $seconds, $microseconds]);
}
function stream_set_write_buffer($stream, $buffer) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream, $buffer]);
}
function stream_socket_accept($server_socket, $timeout=null, &$peername=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$server_socket, $timeout, &$peername]);
}
function stream_socket_client($remote_socket, &$errno=null, &$errstr=null, $timeout=null, $flags=STREAM_CLIENT_CONNECT, $context=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$remote_socket, &$errno, &$errstr, $timeout, $flags, $context]);
}
function stream_socket_enable_crypto($stream, $enable, $crypto_type=null, $session_stream=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream, $enable, $crypto_type, $session_stream]);
}
function stream_socket_get_name($handle, $want_peer) {
  return \Proxyz\callFunction(__FUNCTION__, [$handle, $want_peer]);
}
function stream_socket_pair($domain, $type, $protocol) {
  return \Proxyz\callFunction(__FUNCTION__, [$domain, $type, $protocol]);
}
function stream_socket_recvfrom($socket, $length, $flags=0, &$address=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$socket, $length, $flags, &$address]);
}
function stream_socket_sendto($socket, $data, $flags=0, $address=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$socket, $data, $flags, $address]);
}
function stream_socket_server($local_socket, &$errno=null, &$errstr=null, $flags=STREAM_SERVER_BIND | STREAM_SERVER_LISTEN, $context=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$local_socket, &$errno, &$errstr, $flags, $context]);
}
function stream_socket_shutdown($stream, $mode) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream, $mode]);
}
function stream_supports_lock($stream) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream]);
}
function stream_wrapper_register($protocol, $class, $flags=0) {
  return \Proxyz\callFunction(__FUNCTION__, [$protocol, $class, $flags]);
}
function stream_wrapper_restore($protocol) {
  return \Proxyz\callFunction(__FUNCTION__, [$protocol]);
}
function stream_wrapper_unregister($protocol) {
  return \Proxyz\callFunction(__FUNCTION__, [$protocol]);
}
function methods() {
  return [
    "stream_bucket_append",
    "stream_bucket_make_writeable",
    "stream_bucket_new",
    "stream_bucket_prepend",
    "stream_context_create",
    "stream_context_get_default",
    "stream_context_get_options",
    "stream_context_get_params",
    "stream_context_set_default",
    "stream_context_set_option",
    "stream_context_set_params",
    "stream_copy_to_stream",
    "stream_filter_append",
    "stream_filter_prepend",
    "stream_filter_register",
    "stream_filter_remove",
    "stream_get_contents",
    "stream_get_filters",
    "stream_get_line",
    "stream_get_meta_data",
    "stream_get_transports",
    "stream_get_wrappers",
    "stream_is_local",
    "stream_isatty",
    "stream_notification_callback",
    "stream_register_wrapper",
    "stream_resolve_include_path",
    "stream_select",
    "stream_set_blocking",
    "stream_set_chunk_size",
    "stream_set_read_buffer",
    "stream_set_timeout",
    "stream_set_write_buffer",
    "stream_socket_accept",
    "stream_socket_client",
    "stream_socket_enable_crypto",
    "stream_socket_get_name",
    "stream_socket_pair",
    "stream_socket_recvfrom",
    "stream_socket_sendto",
    "stream_socket_server",
    "stream_socket_shutdown",
    "stream_supports_lock",
    "stream_wrapper_register",
    "stream_wrapper_restore",
    "stream_wrapper_unregister"
];}

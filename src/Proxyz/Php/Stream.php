<?php namespace Proxyz\Php\Stream;
// This file is dynamically generated ... do not edit 

function stream_bucket_append($brigade, $bucket) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$brigade, $bucket], 0, $count_));
}
function stream_bucket_make_writeable($brigade) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$brigade], 0, $count_));
}
function stream_bucket_new($stream, $buffer) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$stream, $buffer], 0, $count_));
}
function stream_bucket_prepend($brigade, $bucket) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$brigade, $bucket], 0, $count_));
}
function stream_context_create($options=null, $params=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$options, $params], 0, $count_));
}
function stream_context_get_default($options=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$options], 0, $count_));
}
function stream_context_get_options($stream_or_context) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$stream_or_context], 0, $count_));
}
function stream_context_get_params($stream_or_context) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$stream_or_context], 0, $count_));
}
function stream_context_set_default($options) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$options], 0, $count_));
}
function stream_context_set_option($stream_or_context, $wrapper, $option, $value) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$stream_or_context, $wrapper, $option, $value], 0, $count_));
}
function stream_context_set_params($context, $params) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$context, $params], 0, $count_));
}
function stream_copy_to_stream($source, $dest, $maxlength=-1, $offset=0) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$source, $dest, $maxlength, $offset], 0, $count_));
}
function stream_filter_append($stream, $filtername, $read_write=null, $params=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$stream, $filtername, $read_write, $params], 0, $count_));
}
function stream_filter_prepend($stream, $filtername, $read_write=null, $params=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$stream, $filtername, $read_write, $params], 0, $count_));
}
function stream_filter_register($filter_name, $class) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$filter_name, $class], 0, $count_));
}
function stream_filter_remove($stream_filter) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$stream_filter], 0, $count_));
}
function stream_get_contents($handle, $maxlength=-1, $offset=-1) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$handle, $maxlength, $offset], 0, $count_));
}
function stream_get_filters() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function stream_get_line($handle, $length, $ending="") {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$handle, $length, $ending], 0, $count_));
}
function stream_get_meta_data($stream) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$stream], 0, $count_));
}
function stream_get_transports() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function stream_get_wrappers() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function stream_is_local($stream) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$stream], 0, $count_));
}
function stream_isatty($stream) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$stream], 0, $count_));
}
function stream_notification_callback($notification_code, $severity, $message, $message_code, $bytes_transferred, $bytes_max) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$notification_code, $severity, $message, $message_code, $bytes_transferred, $bytes_max], 0, $count_));
}
function stream_register_wrapper() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function stream_resolve_include_path($filename) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$filename], 0, $count_));
}
function stream_select(&$read, &$write, &$except, $tv_sec, $tv_usec=0) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([&$read, &$write, &$except, $tv_sec, $tv_usec], 0, $count_));
}
function stream_set_blocking($stream, $enable) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$stream, $enable], 0, $count_));
}
function stream_set_chunk_size($stream, $size) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$stream, $size], 0, $count_));
}
function stream_set_read_buffer($stream, $size) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$stream, $size], 0, $count_));
}
function stream_set_timeout($stream, $seconds, $microseconds=0) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$stream, $seconds, $microseconds], 0, $count_));
}
function stream_set_write_buffer($stream, $buffer) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$stream, $buffer], 0, $count_));
}
function stream_socket_accept($server_socket, $timeout=null, &$peername=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$server_socket, $timeout, &$peername], 0, $count_));
}
function stream_socket_client($remote_socket, &$errno=null, &$errstr=null, $timeout=null, $flags=STREAM_CLIENT_CONNECT, $context=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$remote_socket, &$errno, &$errstr, $timeout, $flags, $context], 0, $count_));
}
function stream_socket_enable_crypto($stream, $enable, $crypto_type=null, $session_stream=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$stream, $enable, $crypto_type, $session_stream], 0, $count_));
}
function stream_socket_get_name($handle, $want_peer) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$handle, $want_peer], 0, $count_));
}
function stream_socket_pair($domain, $type, $protocol) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$domain, $type, $protocol], 0, $count_));
}
function stream_socket_recvfrom($socket, $length, $flags=0, &$address=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$socket, $length, $flags, &$address], 0, $count_));
}
function stream_socket_sendto($socket, $data, $flags=0, $address=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$socket, $data, $flags, $address], 0, $count_));
}
function stream_socket_server($local_socket, &$errno=null, &$errstr=null, $flags=STREAM_SERVER_BIND | STREAM_SERVER_LISTEN, $context=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$local_socket, &$errno, &$errstr, $flags, $context], 0, $count_));
}
function stream_socket_shutdown($stream, $mode) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$stream, $mode], 0, $count_));
}
function stream_supports_lock($stream) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$stream], 0, $count_));
}
function stream_wrapper_register($protocol, $class, $flags=0) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$protocol, $class, $flags], 0, $count_));
}
function stream_wrapper_restore($protocol) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$protocol], 0, $count_));
}
function stream_wrapper_unregister($protocol) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$protocol], 0, $count_));
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

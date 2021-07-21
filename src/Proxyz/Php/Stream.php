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
function stream_context_set_option($stream_or_context, $wrappername, $optionname=null, $value=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream_or_context, $wrappername, $optionname, $value]);
}
function stream_context_set_params($stream_or_context, $options) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream_or_context, $options]);
}
function stream_copy_to_stream($source, $dest, $maxlen=null, $pos=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$source, $dest, $maxlen, $pos]);
}
function stream_filter_append($stream, $filtername, $read_write=null, $filterparams=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream, $filtername, $read_write, $filterparams]);
}
function stream_filter_prepend($stream, $filtername, $read_write=null, $filterparams=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream, $filtername, $read_write, $filterparams]);
}
function stream_filter_register($filtername, $classname) {
  return \Proxyz\callFunction(__FUNCTION__, [$filtername, $classname]);
}
function stream_filter_remove($stream_filter) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream_filter]);
}
function stream_get_contents($source, $maxlen=null, $offset=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$source, $maxlen, $offset]);
}
function stream_get_filters() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function stream_get_line($stream, $maxlen, $ending=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream, $maxlen, $ending]);
}
function stream_get_meta_data($fp) {
  return \Proxyz\callFunction(__FUNCTION__, [$fp]);
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
function stream_notification_callback() {
  return \Proxyz\callFunction(__FUNCTION__, func_get_args());
}
function stream_register_wrapper($protocol, $classname, $flags=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$protocol, $classname, $flags]);
}
function stream_resolve_include_path($filename) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename]);
}
function stream_select(&$read_streams, &$write_streams, &$except_streams, $tv_sec, $tv_usec=null) {
  return \Proxyz\callFunction(__FUNCTION__, [&$read_streams, &$write_streams, &$except_streams, $tv_sec, $tv_usec]);
}
function stream_set_blocking($socket, $mode) {
  return \Proxyz\callFunction(__FUNCTION__, [$socket, $mode]);
}
function stream_set_chunk_size($fp, $chunk_size) {
  return \Proxyz\callFunction(__FUNCTION__, [$fp, $chunk_size]);
}
function stream_set_read_buffer($fp, $buffer) {
  return \Proxyz\callFunction(__FUNCTION__, [$fp, $buffer]);
}
function stream_set_timeout($stream, $seconds, $microseconds=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream, $seconds, $microseconds]);
}
function stream_set_write_buffer($fp, $buffer) {
  return \Proxyz\callFunction(__FUNCTION__, [$fp, $buffer]);
}
function stream_socket_accept($serverstream, $timeout=null, &$peername=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$serverstream, $timeout, &$peername]);
}
function stream_socket_client($remoteaddress, &$errcode=null, &$errstring=null, $timeout=null, $flags=null, $context=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$remoteaddress, &$errcode, &$errstring, $timeout, $flags, $context]);
}
function stream_socket_enable_crypto($stream, $enable, $cryptokind=null, $sessionstream=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream, $enable, $cryptokind, $sessionstream]);
}
function stream_socket_get_name($stream, $want_peer) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream, $want_peer]);
}
function stream_socket_pair($domain, $type, $protocol) {
  return \Proxyz\callFunction(__FUNCTION__, [$domain, $type, $protocol]);
}
function stream_socket_recvfrom($stream, $amount, $flags=null, &$remote_addr=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream, $amount, $flags, &$remote_addr]);
}
function stream_socket_sendto($stream, $data, $flags=null, $target_addr=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream, $data, $flags, $target_addr]);
}
function stream_socket_server($localaddress, &$errcode=null, &$errstring=null, $flags=null, $context=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$localaddress, &$errcode, &$errstring, $flags, $context]);
}
function stream_socket_shutdown($stream, $how) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream, $how]);
}
function stream_supports_lock($stream) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream]);
}
function stream_wrapper_register($protocol, $classname, $flags=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$protocol, $classname, $flags]);
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

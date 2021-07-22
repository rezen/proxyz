<?php namespace Proxyz\Php\Socket;
// This file is dynamically generated ... do not edit 

function socket_accept($socket) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$socket], 0, $count_));
}
function socket_addrinfo_bind($address) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$address], 0, $count_));
}
function socket_addrinfo_connect($address) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$address], 0, $count_));
}
function socket_addrinfo_explain($address) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$address], 0, $count_));
}
function socket_addrinfo_lookup($host, $service=null, $hints=[]) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$host, $service, $hints], 0, $count_));
}
function socket_bind($socket, $address, $port=0) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$socket, $address, $port], 0, $count_));
}
function socket_clear_error($socket=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$socket], 0, $count_));
}
function socket_close($socket) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$socket], 0, $count_));
}
function socket_cmsg_space($level, $type, $num=0) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$level, $type, $num], 0, $count_));
}
function socket_connect($socket, $address, $port=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$socket, $address, $port], 0, $count_));
}
function socket_create($domain, $type, $protocol) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$domain, $type, $protocol], 0, $count_));
}
function socket_create_listen($port, $backlog=128) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$port, $backlog], 0, $count_));
}
function socket_create_pair($domain, $type, $protocol, &$pair) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$domain, $type, $protocol, &$pair], 0, $count_));
}
function socket_export_stream($socket) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$socket], 0, $count_));
}
function socket_get_option($socket, $level, $option) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$socket, $level, $option], 0, $count_));
}
function socket_getopt() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function socket_getpeername($socket, &$address, &$port=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$socket, &$address, &$port], 0, $count_));
}
function socket_getsockname($socket, &$address, &$port=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$socket, &$address, &$port], 0, $count_));
}
function socket_import_stream($stream) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$stream], 0, $count_));
}
function socket_last_error($socket=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$socket], 0, $count_));
}
function socket_listen($socket, $backlog=0) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$socket, $backlog], 0, $count_));
}
function socket_read($socket, $length, $mode=PHP_BINARY_READ) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$socket, $length, $mode], 0, $count_));
}
function socket_recv($socket, &$data, $length, $flags) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$socket, &$data, $length, $flags], 0, $count_));
}
function socket_recvfrom($socket, &$data, $length, $flags, &$address, &$port=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$socket, &$data, $length, $flags, &$address, &$port], 0, $count_));
}
function socket_recvmsg($socket, &$message, $flags=0) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$socket, &$message, $flags], 0, $count_));
}
function socket_select(&$read, &$write, &$except, $seconds, $microseconds=0) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([&$read, &$write, &$except, $seconds, $microseconds], 0, $count_));
}
function socket_send($socket, $data, $length, $flags) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$socket, $data, $length, $flags], 0, $count_));
}
function socket_sendmsg($socket, $message, $flags=0) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$socket, $message, $flags], 0, $count_));
}
function socket_sendto($socket, $data, $length, $flags, $address, $port=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$socket, $data, $length, $flags, $address, $port], 0, $count_));
}
function socket_set_block($socket) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$socket], 0, $count_));
}
function socket_set_nonblock($socket) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$socket], 0, $count_));
}
function socket_set_option($socket, $level, $option, $value) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$socket, $level, $option, $value], 0, $count_));
}
function socket_setopt() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function socket_shutdown($socket, $mode=2) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$socket, $mode], 0, $count_));
}
function socket_strerror($error_code) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$error_code], 0, $count_));
}
function socket_write($socket, $data, $length=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$socket, $data, $length], 0, $count_));
}
function socket_wsaprotocol_info_export($socket, $process_id) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$socket, $process_id], 0, $count_));
}
function socket_wsaprotocol_info_import($info_id) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$info_id], 0, $count_));
}
function socket_wsaprotocol_info_release($info_id) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$info_id], 0, $count_));
}
function methods() {
  return [
    "socket_accept",
    "socket_addrinfo_bind",
    "socket_addrinfo_connect",
    "socket_addrinfo_explain",
    "socket_addrinfo_lookup",
    "socket_bind",
    "socket_clear_error",
    "socket_close",
    "socket_cmsg_space",
    "socket_connect",
    "socket_create",
    "socket_create_listen",
    "socket_create_pair",
    "socket_export_stream",
    "socket_get_option",
    "socket_getopt",
    "socket_getpeername",
    "socket_getsockname",
    "socket_import_stream",
    "socket_last_error",
    "socket_listen",
    "socket_read",
    "socket_recv",
    "socket_recvfrom",
    "socket_recvmsg",
    "socket_select",
    "socket_send",
    "socket_sendmsg",
    "socket_sendto",
    "socket_set_block",
    "socket_set_nonblock",
    "socket_set_option",
    "socket_setopt",
    "socket_shutdown",
    "socket_strerror",
    "socket_write",
    "socket_wsaprotocol_info_export",
    "socket_wsaprotocol_info_import",
    "socket_wsaprotocol_info_release"
];}

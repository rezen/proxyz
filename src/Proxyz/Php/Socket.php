<?php namespace Proxyz\Php\Socket;
// This file is dynamically generated ... do not edit 

function socket_accept($socket) {
  return \Proxyz\callFunction(__FUNCTION__, [$socket]);
}
function socket_addrinfo_bind($addr) {
  return \Proxyz\callFunction(__FUNCTION__, [$addr]);
}
function socket_addrinfo_connect($addr) {
  return \Proxyz\callFunction(__FUNCTION__, [$addr]);
}
function socket_addrinfo_explain($addr) {
  return \Proxyz\callFunction(__FUNCTION__, [$addr]);
}
function socket_addrinfo_lookup($host, $service=null, $hints=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$host, $service, $hints]);
}
function socket_bind($socket, $addr, $port=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$socket, $addr, $port]);
}
function socket_clear_error($socket=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$socket]);
}
function socket_close($socket) {
  return \Proxyz\callFunction(__FUNCTION__, [$socket]);
}
function socket_cmsg_space($level, $type) {
  return \Proxyz\callFunction(__FUNCTION__, [$level, $type]);
}
function socket_connect($socket, $addr, $port=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$socket, $addr, $port]);
}
function socket_create($domain, $type, $protocol) {
  return \Proxyz\callFunction(__FUNCTION__, [$domain, $type, $protocol]);
}
function socket_create_listen($port, $backlog=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$port, $backlog]);
}
function socket_create_pair($domain, $type, $protocol, &$fd) {
  return \Proxyz\callFunction(__FUNCTION__, [$domain, $type, $protocol, &$fd]);
}
function socket_export_stream($socket) {
  return \Proxyz\callFunction(__FUNCTION__, [$socket]);
}
function socket_get_option($socket, $level, $optname) {
  return \Proxyz\callFunction(__FUNCTION__, [$socket, $level, $optname]);
}
function socket_getopt($socket, $level, $optname) {
  return \Proxyz\callFunction(__FUNCTION__, [$socket, $level, $optname]);
}
function socket_getpeername($socket, &$addr, &$port=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$socket, &$addr, &$port]);
}
function socket_getsockname($socket, &$addr, &$port=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$socket, &$addr, &$port]);
}
function socket_import_stream($stream) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream]);
}
function socket_last_error($socket=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$socket]);
}
function socket_listen($socket, $backlog=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$socket, $backlog]);
}
function socket_read($socket, $length, $type=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$socket, $length, $type]);
}
function socket_recv($socket, &$buf, $len, $flags) {
  return \Proxyz\callFunction(__FUNCTION__, [$socket, &$buf, $len, $flags]);
}
function socket_recvfrom($socket, &$buf, $len, $flags, &$name, &$port=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$socket, &$buf, $len, $flags, &$name, &$port]);
}
function socket_recvmsg($socket, &$msghdr, $flags) {
  return \Proxyz\callFunction(__FUNCTION__, [$socket, &$msghdr, $flags]);
}
function socket_select(&$read_fds, &$write_fds, &$except_fds, $tv_sec, $tv_usec=null) {
  return \Proxyz\callFunction(__FUNCTION__, [&$read_fds, &$write_fds, &$except_fds, $tv_sec, $tv_usec]);
}
function socket_send($socket, $buf, $len, $flags) {
  return \Proxyz\callFunction(__FUNCTION__, [$socket, $buf, $len, $flags]);
}
function socket_sendmsg($socket, $msghdr, $flags) {
  return \Proxyz\callFunction(__FUNCTION__, [$socket, $msghdr, $flags]);
}
function socket_sendto($socket, $buf, $len, $flags, $addr, $port=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$socket, $buf, $len, $flags, $addr, $port]);
}
function socket_set_block($socket) {
  return \Proxyz\callFunction(__FUNCTION__, [$socket]);
}
function socket_set_nonblock($socket) {
  return \Proxyz\callFunction(__FUNCTION__, [$socket]);
}
function socket_set_option($socket, $level, $optname, $optval) {
  return \Proxyz\callFunction(__FUNCTION__, [$socket, $level, $optname, $optval]);
}
function socket_setopt($socket, $level, $optname, $optval) {
  return \Proxyz\callFunction(__FUNCTION__, [$socket, $level, $optname, $optval]);
}
function socket_shutdown($socket, $how=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$socket, $how]);
}
function socket_strerror($errno) {
  return \Proxyz\callFunction(__FUNCTION__, [$errno]);
}
function socket_write($socket, $buf, $length=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$socket, $buf, $length]);
}
function socket_wsaprotocol_info_export() {
  return \Proxyz\callFunction(__FUNCTION__, func_get_args());
}
function socket_wsaprotocol_info_import() {
  return \Proxyz\callFunction(__FUNCTION__, func_get_args());
}
function socket_wsaprotocol_info_release() {
  return \Proxyz\callFunction(__FUNCTION__, func_get_args());
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

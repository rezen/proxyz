<?php namespace Proxyz\Php\Network;
// This file is dynamically generated ... do not edit 

function checkdnsrr($host, $type=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$host, $type]);
}
function closelog() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function dns_check_record($host, $type=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$host, $type]);
}
function dns_get_mx($hostname, &$mxhosts, &$weight=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$hostname, &$mxhosts, &$weight]);
}
function dns_get_record($hostname, $type=null, &$authns=null, &$addtl=null, $raw=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$hostname, $type, &$authns, &$addtl, $raw]);
}
function fsockopen($hostname, $port=null, &$errno=null, &$errstr=null, $timeout=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$hostname, $port, &$errno, &$errstr, $timeout]);
}
function gethostbyaddr($ip_address) {
  return \Proxyz\callFunction(__FUNCTION__, [$ip_address]);
}
function gethostbyname($hostname) {
  return \Proxyz\callFunction(__FUNCTION__, [$hostname]);
}
function gethostbynamel($hostname) {
  return \Proxyz\callFunction(__FUNCTION__, [$hostname]);
}
function gethostname() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function getmxrr($hostname, &$mxhosts, &$weight=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$hostname, &$mxhosts, &$weight]);
}
function getprotobyname($name) {
  return \Proxyz\callFunction(__FUNCTION__, [$name]);
}
function getprotobynumber($proto) {
  return \Proxyz\callFunction(__FUNCTION__, [$proto]);
}
function getservbyname($service, $protocol) {
  return \Proxyz\callFunction(__FUNCTION__, [$service, $protocol]);
}
function getservbyport($port, $protocol) {
  return \Proxyz\callFunction(__FUNCTION__, [$port, $protocol]);
}
function header($header, $replace=null, $http_response_code=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$header, $replace, $http_response_code]);
}
function header_register_callback($callback) {
  return \Proxyz\callFunction(__FUNCTION__, [$callback]);
}
function header_remove($name=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$name]);
}
function headers_list() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function headers_sent(&$file=null, &$line=null) {
  return \Proxyz\callFunction(__FUNCTION__, [&$file, &$line]);
}
function http_response_code($response_code=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$response_code]);
}
function inet_ntop($in_addr) {
  return \Proxyz\callFunction(__FUNCTION__, [$in_addr]);
}
function inet_pton($ip_address) {
  return \Proxyz\callFunction(__FUNCTION__, [$ip_address]);
}
function ip2long($ip_address) {
  return \Proxyz\callFunction(__FUNCTION__, [$ip_address]);
}
function long2ip($proper_address) {
  return \Proxyz\callFunction(__FUNCTION__, [$proper_address]);
}
function openlog($ident, $option, $facility) {
  return \Proxyz\callFunction(__FUNCTION__, [$ident, $option, $facility]);
}
function pfsockopen($hostname, $port=null, &$errno=null, &$errstr=null, $timeout=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$hostname, $port, &$errno, &$errstr, $timeout]);
}
function setcookie($name, $value=null, $expires_or_options=null, $path=null, $domain=null, $secure=null, $httponly=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$name, $value, $expires_or_options, $path, $domain, $secure, $httponly]);
}
function setrawcookie($name, $value=null, $expires_or_options=null, $path=null, $domain=null, $secure=null, $httponly=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$name, $value, $expires_or_options, $path, $domain, $secure, $httponly]);
}
function socket_get_status($fp) {
  return \Proxyz\callFunction(__FUNCTION__, [$fp]);
}
function socket_set_blocking($socket, $mode) {
  return \Proxyz\callFunction(__FUNCTION__, [$socket, $mode]);
}
function socket_set_timeout($stream, $seconds, $microseconds=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream, $seconds, $microseconds]);
}
function syslog($priority, $message) {
  return \Proxyz\callFunction(__FUNCTION__, [$priority, $message]);
}
function methods() {
  return [
    "checkdnsrr",
    "closelog",
    "dns_check_record",
    "dns_get_mx",
    "dns_get_record",
    "fsockopen",
    "gethostbyaddr",
    "gethostbyname",
    "gethostbynamel",
    "gethostname",
    "getmxrr",
    "getprotobyname",
    "getprotobynumber",
    "getservbyname",
    "getservbyport",
    "header",
    "header_register_callback",
    "header_remove",
    "headers_list",
    "headers_sent",
    "http_response_code",
    "inet_ntop",
    "inet_pton",
    "ip2long",
    "long2ip",
    "openlog",
    "pfsockopen",
    "setcookie",
    "setrawcookie",
    "socket_get_status",
    "socket_set_blocking",
    "socket_set_timeout",
    "syslog"
];}

<?php namespace Proxyz\Php\Network;
// This file is dynamically generated ... do not edit 

function checkdnsrr($hostname, $type="MX") {
  return \Proxyz\callFunction(__FUNCTION__, [$hostname, $type]);
}
function closelog() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function dns_check_record() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function dns_get_mx() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function dns_get_record($hostname, $type=null, &$authoritative_name_servers=null, &$additional_records=null, $raw=false) {
  return \Proxyz\callFunction(__FUNCTION__, [$hostname, $type, &$authoritative_name_servers, &$additional_records, $raw]);
}
function fsockopen($hostname, $port=-1, &$error_code=null, &$error_message=null, $timeout=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$hostname, $port, &$error_code, &$error_message, $timeout]);
}
function gethostbyaddr($ip) {
  return \Proxyz\callFunction(__FUNCTION__, [$ip]);
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
function getmxrr($hostname, &$hosts, &$weights=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$hostname, &$hosts, &$weights]);
}
function getprotobyname($protocol) {
  return \Proxyz\callFunction(__FUNCTION__, [$protocol]);
}
function getprotobynumber($protocol) {
  return \Proxyz\callFunction(__FUNCTION__, [$protocol]);
}
function getservbyname($service, $protocol) {
  return \Proxyz\callFunction(__FUNCTION__, [$service, $protocol]);
}
function getservbyport($port, $protocol) {
  return \Proxyz\callFunction(__FUNCTION__, [$port, $protocol]);
}
function header($header, $replace=true, $response_code=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$header, $replace, $response_code]);
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
function headers_sent(&$filename=null, &$line=null) {
  return \Proxyz\callFunction(__FUNCTION__, [&$filename, &$line]);
}
function http_response_code($response_code=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$response_code]);
}
function inet_ntop($ip) {
  return \Proxyz\callFunction(__FUNCTION__, [$ip]);
}
function inet_pton($ip) {
  return \Proxyz\callFunction(__FUNCTION__, [$ip]);
}
function ip2long($ip) {
  return \Proxyz\callFunction(__FUNCTION__, [$ip]);
}
function long2ip($ip) {
  return \Proxyz\callFunction(__FUNCTION__, [$ip]);
}
function openlog($prefix, $flags, $facility) {
  return \Proxyz\callFunction(__FUNCTION__, [$prefix, $flags, $facility]);
}
function pfsockopen($hostname, $port=-1, &$errno=null, &$errstr=null, $timeout=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$hostname, $port, &$errno, &$errstr, $timeout]);
}
function setcookie($name, $value="", $options=[]) {
  return \Proxyz\callFunction(__FUNCTION__, [$name, $value, $options]);
}
function setrawcookie($name, $value=null, $options=[]) {
  return \Proxyz\callFunction(__FUNCTION__, [$name, $value, $options]);
}
function socket_get_status() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function socket_set_blocking() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function socket_set_timeout() {
  return \Proxyz\callFunction(__FUNCTION__, []);
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

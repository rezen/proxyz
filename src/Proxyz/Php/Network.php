<?php namespace Proxyz\Php\Network;
// This file is dynamically generated ... do not edit 

function checkdnsrr($hostname, $type="MX") {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$hostname, $type], 0, $count_));
}
function closelog() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function dns_check_record() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function dns_get_mx() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function dns_get_record($hostname, $type=DNS_ANY, &$authoritative_name_servers=null, &$additional_records=null, $raw=false) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$hostname, $type, &$authoritative_name_servers, &$additional_records, $raw], 0, $count_));
}
function fsockopen($hostname, $port=-1, &$error_code=null, &$error_message=null, $timeout=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$hostname, $port, &$error_code, &$error_message, $timeout], 0, $count_));
}
function gethostbyaddr($ip) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ip], 0, $count_));
}
function gethostbyname($hostname) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$hostname], 0, $count_));
}
function gethostbynamel($hostname) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$hostname], 0, $count_));
}
function gethostname() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function getmxrr($hostname, &$hosts, &$weights=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$hostname, &$hosts, &$weights], 0, $count_));
}
function getprotobyname($protocol) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$protocol], 0, $count_));
}
function getprotobynumber($protocol) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$protocol], 0, $count_));
}
function getservbyname($service, $protocol) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$service, $protocol], 0, $count_));
}
function getservbyport($port, $protocol) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$port, $protocol], 0, $count_));
}
function header($header, $replace=true, $response_code=0) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$header, $replace, $response_code], 0, $count_));
}
function header_register_callback($callback) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$callback], 0, $count_));
}
function header_remove($name=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$name], 0, $count_));
}
function headers_list() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function headers_sent(&$filename=null, &$line=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([&$filename, &$line], 0, $count_));
}
function http_response_code($response_code=0) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$response_code], 0, $count_));
}
function inet_ntop($ip) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ip], 0, $count_));
}
function inet_pton($ip) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ip], 0, $count_));
}
function ip2long($ip) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ip], 0, $count_));
}
function long2ip($ip) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ip], 0, $count_));
}
function openlog($prefix, $flags, $facility) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$prefix, $flags, $facility], 0, $count_));
}
function pfsockopen($hostname, $port=-1, &$errno=null, &$errstr=null, $timeout=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$hostname, $port, &$errno, &$errstr, $timeout], 0, $count_));
}
function setcookie($name, $value="", $options=[]) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$name, $value, $options], 0, $count_));
}
function setrawcookie($name, $value=null, $options=[]) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$name, $value, $options], 0, $count_));
}
function socket_get_status() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function socket_set_blocking() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function socket_set_timeout() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function syslog($priority, $message) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$priority, $message], 0, $count_));
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

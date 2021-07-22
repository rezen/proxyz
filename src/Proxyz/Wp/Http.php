<?php namespace Proxyz\Wp\Http;
// This file is dynamically generated ... do not edit 

function wp_get_http_headers(...$args) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice($args, 0, $count_));
}
function wp_remote_fopen(...$args) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice($args, 0, $count_));
}
function wp_remote_get(...$args) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice($args, 0, $count_));
}
function wp_remote_retrieve_body(...$args) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice($args, 0, $count_));
}
function methods() {
  return [
    "wp_get_http_headers",
    "wp_remote_fopen",
    "wp_remote_get",
    "wp_remote_retrieve_body"
];}

<?php namespace Proxyz\Php\System;
// This file is dynamically generated ... do not edit 

function escapeshellarg($arg) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$arg], 0, $count_));
}
function escapeshellcmd($command) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$command], 0, $count_));
}
function exec($command, &$output=null, &$result_code=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$command, &$output, &$result_code], 0, $count_));
}
function passthru($command, &$return_var=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$command, &$return_var], 0, $count_));
}
function proc_close($process) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$process], 0, $count_));
}
function proc_get_status($process) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$process], 0, $count_));
}
function proc_nice($priority) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$priority], 0, $count_));
}
function proc_open($cmd, $descriptorspec, &$pipes, $cwd=null, $env=null, $other_options=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$cmd, $descriptorspec, &$pipes, $cwd, $env, $other_options], 0, $count_));
}
function proc_terminate($process, $signal=15) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$process, $signal], 0, $count_));
}
function shell_exec($cmd) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$cmd], 0, $count_));
}
function system($command, &$result_code=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$command, &$result_code], 0, $count_));
}
function methods() {
  return [
    "escapeshellarg",
    "escapeshellcmd",
    "exec",
    "passthru",
    "proc_close",
    "proc_get_status",
    "proc_nice",
    "proc_open",
    "proc_terminate",
    "shell_exec",
    "system"
];}

<?php namespace Proxyz\Php\System;
// This file is dynamically generated ... do not edit 

function escapeshellarg($arg) {
  return \Proxyz\callFunction(__FUNCTION__, [$arg]);
}
function escapeshellcmd($command) {
  return \Proxyz\callFunction(__FUNCTION__, [$command]);
}
function exec($command, &$output=null, &$result_code=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$command, &$output, &$result_code]);
}
function passthru($command, &$return_var=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$command, &$return_var]);
}
function proc_close($process) {
  return \Proxyz\callFunction(__FUNCTION__, [$process]);
}
function proc_get_status($process) {
  return \Proxyz\callFunction(__FUNCTION__, [$process]);
}
function proc_nice($priority) {
  return \Proxyz\callFunction(__FUNCTION__, [$priority]);
}
function proc_open($cmd, $descriptorspec, &$pipes, $cwd=null, $env=null, $other_options=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$cmd, $descriptorspec, &$pipes, $cwd, $env, $other_options]);
}
function proc_terminate($process, $signal=15) {
  return \Proxyz\callFunction(__FUNCTION__, [$process, $signal]);
}
function shell_exec($cmd) {
  return \Proxyz\callFunction(__FUNCTION__, [$cmd]);
}
function system($command, &$result_code=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$command, &$result_code]);
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

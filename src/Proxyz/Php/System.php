<?php namespace Proxyz\Php\System;
// This file is dynamically generated ... do not edit 

function escapeshellarg($arg) {
  return \Proxyz\callFunction(__FUNCTION__, [$arg]);
}
function escapeshellcmd($command) {
  return \Proxyz\callFunction(__FUNCTION__, [$command]);
}
function exec($command, &$output=null, &$return_value=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$command, &$output, &$return_value]);
}
function passthru($command, &$return_value=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$command, &$return_value]);
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
function proc_open($command, $descriptorspec, &$pipes, $cwd=null, $env=null, $other_options=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$command, $descriptorspec, &$pipes, $cwd, $env, $other_options]);
}
function proc_terminate($process, $signal=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$process, $signal]);
}
function shell_exec($cmd) {
  return \Proxyz\callFunction(__FUNCTION__, [$cmd]);
}
function system($command, &$return_value=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$command, &$return_value]);
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

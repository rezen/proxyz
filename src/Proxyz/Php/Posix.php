<?php namespace Proxyz\Php\Posix;
// This file is dynamically generated ... do not edit 

function posix_access($filename, $flags=0) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$filename, $flags], 0, $count_));
}
function posix_ctermid() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function posix_errno() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function posix_get_last_error() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function posix_getcwd() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function posix_getegid() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function posix_geteuid() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function posix_getgid() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function posix_getgrgid($group_id) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$group_id], 0, $count_));
}
function posix_getgrnam($name) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$name], 0, $count_));
}
function posix_getgroups() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function posix_getlogin() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function posix_getpgid($process_id) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$process_id], 0, $count_));
}
function posix_getpgrp() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function posix_getpid() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function posix_getppid() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function posix_getpwnam($username) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$username], 0, $count_));
}
function posix_getpwuid($user_id) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$user_id], 0, $count_));
}
function posix_getrlimit() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function posix_getsid($process_id) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$process_id], 0, $count_));
}
function posix_getuid() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function posix_initgroups($username, $group_id) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$username, $group_id], 0, $count_));
}
function posix_isatty($file_descriptor) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$file_descriptor], 0, $count_));
}
function posix_kill($process_id, $signal) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$process_id, $signal], 0, $count_));
}
function posix_mkfifo($filename, $permissions) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$filename, $permissions], 0, $count_));
}
function posix_mknod($filename, $flags, $major=0, $minor=0) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$filename, $flags, $major, $minor], 0, $count_));
}
function posix_setegid($group_id) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$group_id], 0, $count_));
}
function posix_seteuid($user_id) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$user_id], 0, $count_));
}
function posix_setgid($group_id) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$group_id], 0, $count_));
}
function posix_setpgid($process_id, $process_group_id) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$process_id, $process_group_id], 0, $count_));
}
function posix_setrlimit($resource, $soft_limit, $hard_limit) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$resource, $soft_limit, $hard_limit], 0, $count_));
}
function posix_setsid() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function posix_setuid($user_id) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$user_id], 0, $count_));
}
function posix_strerror($error_code) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$error_code], 0, $count_));
}
function posix_times() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function posix_ttyname($file_descriptor) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$file_descriptor], 0, $count_));
}
function posix_uname() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function methods() {
  return [
    "posix_access",
    "posix_ctermid",
    "posix_errno",
    "posix_get_last_error",
    "posix_getcwd",
    "posix_getegid",
    "posix_geteuid",
    "posix_getgid",
    "posix_getgrgid",
    "posix_getgrnam",
    "posix_getgroups",
    "posix_getlogin",
    "posix_getpgid",
    "posix_getpgrp",
    "posix_getpid",
    "posix_getppid",
    "posix_getpwnam",
    "posix_getpwuid",
    "posix_getrlimit",
    "posix_getsid",
    "posix_getuid",
    "posix_initgroups",
    "posix_isatty",
    "posix_kill",
    "posix_mkfifo",
    "posix_mknod",
    "posix_setegid",
    "posix_seteuid",
    "posix_setgid",
    "posix_setpgid",
    "posix_setrlimit",
    "posix_setsid",
    "posix_setuid",
    "posix_strerror",
    "posix_times",
    "posix_ttyname",
    "posix_uname"
];}

<?php namespace Proxyz\Php\Posix;
// This file is dynamically generated ... do not edit 

function posix_access($filename, $flags=0) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename, $flags]);
}
function posix_ctermid() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function posix_errno() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function posix_get_last_error() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function posix_getcwd() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function posix_getegid() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function posix_geteuid() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function posix_getgid() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function posix_getgrgid($group_id) {
  return \Proxyz\callFunction(__FUNCTION__, [$group_id]);
}
function posix_getgrnam($name) {
  return \Proxyz\callFunction(__FUNCTION__, [$name]);
}
function posix_getgroups() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function posix_getlogin() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function posix_getpgid($process_id) {
  return \Proxyz\callFunction(__FUNCTION__, [$process_id]);
}
function posix_getpgrp() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function posix_getpid() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function posix_getppid() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function posix_getpwnam($username) {
  return \Proxyz\callFunction(__FUNCTION__, [$username]);
}
function posix_getpwuid($user_id) {
  return \Proxyz\callFunction(__FUNCTION__, [$user_id]);
}
function posix_getrlimit() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function posix_getsid($process_id) {
  return \Proxyz\callFunction(__FUNCTION__, [$process_id]);
}
function posix_getuid() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function posix_initgroups($username, $group_id) {
  return \Proxyz\callFunction(__FUNCTION__, [$username, $group_id]);
}
function posix_isatty($file_descriptor) {
  return \Proxyz\callFunction(__FUNCTION__, [$file_descriptor]);
}
function posix_kill($process_id, $signal) {
  return \Proxyz\callFunction(__FUNCTION__, [$process_id, $signal]);
}
function posix_mkfifo($filename, $permissions) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename, $permissions]);
}
function posix_mknod($filename, $flags, $major=0, $minor=0) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename, $flags, $major, $minor]);
}
function posix_setegid($group_id) {
  return \Proxyz\callFunction(__FUNCTION__, [$group_id]);
}
function posix_seteuid($user_id) {
  return \Proxyz\callFunction(__FUNCTION__, [$user_id]);
}
function posix_setgid($group_id) {
  return \Proxyz\callFunction(__FUNCTION__, [$group_id]);
}
function posix_setpgid($process_id, $process_group_id) {
  return \Proxyz\callFunction(__FUNCTION__, [$process_id, $process_group_id]);
}
function posix_setrlimit($resource, $soft_limit, $hard_limit) {
  return \Proxyz\callFunction(__FUNCTION__, [$resource, $soft_limit, $hard_limit]);
}
function posix_setsid() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function posix_setuid($user_id) {
  return \Proxyz\callFunction(__FUNCTION__, [$user_id]);
}
function posix_strerror($error_code) {
  return \Proxyz\callFunction(__FUNCTION__, [$error_code]);
}
function posix_times() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function posix_ttyname($file_descriptor) {
  return \Proxyz\callFunction(__FUNCTION__, [$file_descriptor]);
}
function posix_uname() {
  return \Proxyz\callFunction(__FUNCTION__, []);
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

<?php namespace Proxyz\Php\Ftp;
// This file is dynamically generated ... do not edit 

function ftp_alloc($ftp, $size, &$response=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $size, &$response]);
}
function ftp_append($ftp, $remote_filename, $local_filename, $mode=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $remote_filename, $local_filename, $mode]);
}
function ftp_cdup($ftp) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp]);
}
function ftp_chdir($ftp, $directory) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $directory]);
}
function ftp_chmod($ftp, $permissions, $filename) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $permissions, $filename]);
}
function ftp_close($ftp) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp]);
}
function ftp_connect($hostname, $port=21, $timeout=90) {
  return \Proxyz\callFunction(__FUNCTION__, [$hostname, $port, $timeout]);
}
function ftp_delete($ftp, $filename) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $filename]);
}
function ftp_exec($ftp, $command) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $command]);
}
function ftp_fget($ftp, $stream, $remote_filename, $mode=null, $offset=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $stream, $remote_filename, $mode, $offset]);
}
function ftp_fput($ftp, $remote_filename, $stream, $mode=null, $offset=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $remote_filename, $stream, $mode, $offset]);
}
function ftp_get($ftp, $local_filename, $remote_filename, $mode=null, $offset=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $local_filename, $remote_filename, $mode, $offset]);
}
function ftp_get_option($ftp, $option) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $option]);
}
function ftp_login($ftp, $username, $password) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $username, $password]);
}
function ftp_mdtm($ftp, $filename) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $filename]);
}
function ftp_mkdir($ftp, $directory) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $directory]);
}
function ftp_mlsd($ftp, $directory) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $directory]);
}
function ftp_nb_continue($ftp) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp]);
}
function ftp_nb_fget($ftp, $stream, $remote_filename, $mode=null, $offset=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $stream, $remote_filename, $mode, $offset]);
}
function ftp_nb_fput($ftp, $remote_filename, $stream, $mode=null, $offset=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $remote_filename, $stream, $mode, $offset]);
}
function ftp_nb_get($ftp, $local_filename, $remote_filename, $mode=null, $offset=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $local_filename, $remote_filename, $mode, $offset]);
}
function ftp_nb_put($ftp, $remote_filename, $local_filename, $mode=null, $offset=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $remote_filename, $local_filename, $mode, $offset]);
}
function ftp_nlist($ftp, $directory) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $directory]);
}
function ftp_pasv($ftp, $enable) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $enable]);
}
function ftp_put($ftp, $remote_filename, $local_filename, $mode=null, $offset=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $remote_filename, $local_filename, $mode, $offset]);
}
function ftp_pwd($ftp) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp]);
}
function ftp_quit() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function ftp_raw($ftp, $command) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $command]);
}
function ftp_rawlist($ftp, $directory, $recursive=false) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $directory, $recursive]);
}
function ftp_rename($ftp, $from, $to) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $from, $to]);
}
function ftp_rmdir($ftp, $directory) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $directory]);
}
function ftp_set_option($ftp, $option, $value) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $option, $value]);
}
function ftp_site($ftp, $command) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $command]);
}
function ftp_size($ftp, $filename) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $filename]);
}
function ftp_ssl_connect($hostname, $port=21, $timeout=90) {
  return \Proxyz\callFunction(__FUNCTION__, [$hostname, $port, $timeout]);
}
function ftp_systype($ftp) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp]);
}
function methods() {
  return [
    "ftp_alloc",
    "ftp_append",
    "ftp_cdup",
    "ftp_chdir",
    "ftp_chmod",
    "ftp_close",
    "ftp_connect",
    "ftp_delete",
    "ftp_exec",
    "ftp_fget",
    "ftp_fput",
    "ftp_get",
    "ftp_get_option",
    "ftp_login",
    "ftp_mdtm",
    "ftp_mkdir",
    "ftp_mlsd",
    "ftp_nb_continue",
    "ftp_nb_fget",
    "ftp_nb_fput",
    "ftp_nb_get",
    "ftp_nb_put",
    "ftp_nlist",
    "ftp_pasv",
    "ftp_put",
    "ftp_pwd",
    "ftp_quit",
    "ftp_raw",
    "ftp_rawlist",
    "ftp_rename",
    "ftp_rmdir",
    "ftp_set_option",
    "ftp_site",
    "ftp_size",
    "ftp_ssl_connect",
    "ftp_systype"
];}

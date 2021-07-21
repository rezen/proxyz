<?php namespace Proxyz\Php\Ftp;
// This file is dynamically generated ... do not edit 

function ftp_alloc($ftp, $size, &$response=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $size, &$response]);
}
function ftp_append($ftp, $remote_file, $local_file, $mode=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $remote_file, $local_file, $mode]);
}
function ftp_cdup($ftp) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp]);
}
function ftp_chdir($ftp, $directory) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $directory]);
}
function ftp_chmod($ftp, $mode, $filename) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $mode, $filename]);
}
function ftp_close($ftp) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp]);
}
function ftp_connect($host, $port=null, $timeout=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$host, $port, $timeout]);
}
function ftp_delete($ftp, $file) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $file]);
}
function ftp_exec($ftp, $command) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $command]);
}
function ftp_fget($ftp, $fp, $remote_file, $mode=null, $resumepos=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $fp, $remote_file, $mode, $resumepos]);
}
function ftp_fput($ftp, $remote_file, $fp, $mode=null, $startpos=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $remote_file, $fp, $mode, $startpos]);
}
function ftp_get($ftp, $local_file, $remote_file, $mode=null, $resume_pos=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $local_file, $remote_file, $mode, $resume_pos]);
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
function ftp_nb_fget($ftp, $fp, $remote_file, $mode=null, $resumepos=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $fp, $remote_file, $mode, $resumepos]);
}
function ftp_nb_fput($ftp, $remote_file, $fp, $mode=null, $startpos=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $remote_file, $fp, $mode, $startpos]);
}
function ftp_nb_get($ftp, $local_file, $remote_file, $mode=null, $resume_pos=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $local_file, $remote_file, $mode, $resume_pos]);
}
function ftp_nb_put($ftp, $remote_file, $local_file, $mode=null, $startpos=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $remote_file, $local_file, $mode, $startpos]);
}
function ftp_nlist($ftp, $directory) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $directory]);
}
function ftp_pasv($ftp, $pasv) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $pasv]);
}
function ftp_put($ftp, $remote_file, $local_file, $mode=null, $startpos=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $remote_file, $local_file, $mode, $startpos]);
}
function ftp_pwd($ftp) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp]);
}
function ftp_quit($ftp) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp]);
}
function ftp_raw($ftp, $command) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $command]);
}
function ftp_rawlist($ftp, $directory, $recursive=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $directory, $recursive]);
}
function ftp_rename($ftp, $src, $dest) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $src, $dest]);
}
function ftp_rmdir($ftp, $directory) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $directory]);
}
function ftp_set_option($ftp, $option, $value) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $option, $value]);
}
function ftp_site($ftp, $cmd) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $cmd]);
}
function ftp_size($ftp, $filename) {
  return \Proxyz\callFunction(__FUNCTION__, [$ftp, $filename]);
}
function ftp_ssl_connect($host, $port=null, $timeout=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$host, $port, $timeout]);
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

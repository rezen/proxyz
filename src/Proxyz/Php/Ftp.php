<?php namespace Proxyz\Php\Ftp;
// This file is dynamically generated ... do not edit 

function ftp_alloc($ftp, $size, &$response=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ftp, $size, &$response], 0, $count_));
}
function ftp_append($ftp, $remote_filename, $local_filename, $mode=FTP_BINARY) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ftp, $remote_filename, $local_filename, $mode], 0, $count_));
}
function ftp_cdup($ftp) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ftp], 0, $count_));
}
function ftp_chdir($ftp, $directory) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ftp, $directory], 0, $count_));
}
function ftp_chmod($ftp, $permissions, $filename) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ftp, $permissions, $filename], 0, $count_));
}
function ftp_close($ftp) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ftp], 0, $count_));
}
function ftp_connect($hostname, $port=21, $timeout=90) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$hostname, $port, $timeout], 0, $count_));
}
function ftp_delete($ftp, $filename) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ftp, $filename], 0, $count_));
}
function ftp_exec($ftp, $command) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ftp, $command], 0, $count_));
}
function ftp_fget($ftp, $stream, $remote_filename, $mode=FTP_BINARY, $offset=0) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ftp, $stream, $remote_filename, $mode, $offset], 0, $count_));
}
function ftp_fput($ftp, $remote_filename, $stream, $mode=FTP_BINARY, $offset=0) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ftp, $remote_filename, $stream, $mode, $offset], 0, $count_));
}
function ftp_get($ftp, $local_filename, $remote_filename, $mode=FTP_BINARY, $offset=0) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ftp, $local_filename, $remote_filename, $mode, $offset], 0, $count_));
}
function ftp_get_option($ftp, $option) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ftp, $option], 0, $count_));
}
function ftp_login($ftp, $username, $password) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ftp, $username, $password], 0, $count_));
}
function ftp_mdtm($ftp, $filename) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ftp, $filename], 0, $count_));
}
function ftp_mkdir($ftp, $directory) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ftp, $directory], 0, $count_));
}
function ftp_mlsd($ftp, $directory) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ftp, $directory], 0, $count_));
}
function ftp_nb_continue($ftp) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ftp], 0, $count_));
}
function ftp_nb_fget($ftp, $stream, $remote_filename, $mode=FTP_BINARY, $offset=0) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ftp, $stream, $remote_filename, $mode, $offset], 0, $count_));
}
function ftp_nb_fput($ftp, $remote_filename, $stream, $mode=FTP_BINARY, $offset=0) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ftp, $remote_filename, $stream, $mode, $offset], 0, $count_));
}
function ftp_nb_get($ftp, $local_filename, $remote_filename, $mode=FTP_BINARY, $offset=0) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ftp, $local_filename, $remote_filename, $mode, $offset], 0, $count_));
}
function ftp_nb_put($ftp, $remote_filename, $local_filename, $mode=FTP_BINARY, $offset=0) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ftp, $remote_filename, $local_filename, $mode, $offset], 0, $count_));
}
function ftp_nlist($ftp, $directory) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ftp, $directory], 0, $count_));
}
function ftp_pasv($ftp, $enable) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ftp, $enable], 0, $count_));
}
function ftp_put($ftp, $remote_filename, $local_filename, $mode=FTP_BINARY, $offset=0) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ftp, $remote_filename, $local_filename, $mode, $offset], 0, $count_));
}
function ftp_pwd($ftp) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ftp], 0, $count_));
}
function ftp_quit() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function ftp_raw($ftp, $command) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ftp, $command], 0, $count_));
}
function ftp_rawlist($ftp, $directory, $recursive=false) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ftp, $directory, $recursive], 0, $count_));
}
function ftp_rename($ftp, $from, $to) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ftp, $from, $to], 0, $count_));
}
function ftp_rmdir($ftp, $directory) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ftp, $directory], 0, $count_));
}
function ftp_set_option($ftp, $option, $value) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ftp, $option, $value], 0, $count_));
}
function ftp_site($ftp, $command) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ftp, $command], 0, $count_));
}
function ftp_size($ftp, $filename) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ftp, $filename], 0, $count_));
}
function ftp_ssl_connect($hostname, $port=21, $timeout=90) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$hostname, $port, $timeout], 0, $count_));
}
function ftp_systype($ftp) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ftp], 0, $count_));
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

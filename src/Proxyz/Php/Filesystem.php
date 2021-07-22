<?php namespace Proxyz\Php\Filesystem;
// This file is dynamically generated ... do not edit 

function basename($path, $suffix="") {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$path, $suffix], 0, $count_));
}
function chgrp($filename, $group) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$filename, $group], 0, $count_));
}
function chmod($filename, $permissions) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$filename, $permissions], 0, $count_));
}
function chown($filename, $user) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$filename, $user], 0, $count_));
}
function clearstatcache($clear_realpath_cache=false, $filename="") {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$clear_realpath_cache, $filename], 0, $count_));
}
function copy($source, $dest, $context=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$source, $dest, $context], 0, $count_));
}
function delete() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function dirname($path, $levels=1) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$path, $levels], 0, $count_));
}
function disk_free_space($directory) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$directory], 0, $count_));
}
function disk_total_space($directory) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$directory], 0, $count_));
}
function diskfreespace() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function fclose($stream) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$stream], 0, $count_));
}
function feof($stream) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$stream], 0, $count_));
}
function fflush($stream) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$stream], 0, $count_));
}
function fgetc($stream) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$stream], 0, $count_));
}
function fgetcsv($stream, $length=0, $separator=",", $enclosure='"', $escape="\\") {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$stream, $length, $separator, $enclosure, $escape], 0, $count_));
}
function fgets($handle, $length=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$handle, $length], 0, $count_));
}
function fgetss($handle, $length=null, $allowable_tags=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$handle, $length, $allowable_tags], 0, $count_));
}
function file($filename, $flags=0, $context=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$filename, $flags, $context], 0, $count_));
}
function file_exists($filename) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$filename], 0, $count_));
}
function file_get_contents($filename, $use_include_path=false, $context=null, $offset=0, $length=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$filename, $use_include_path, $context, $offset, $length], 0, $count_));
}
function file_put_contents($filename, $data, $flags=0, $context=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$filename, $data, $flags, $context], 0, $count_));
}
function fileatime($filename) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$filename], 0, $count_));
}
function filectime($filename) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$filename], 0, $count_));
}
function filegroup($filename) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$filename], 0, $count_));
}
function fileinode($filename) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$filename], 0, $count_));
}
function filemtime($filename) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$filename], 0, $count_));
}
function fileowner($filename) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$filename], 0, $count_));
}
function fileperms($filename) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$filename], 0, $count_));
}
function filesize($filename) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$filename], 0, $count_));
}
function filetype($filename) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$filename], 0, $count_));
}
function flock($stream, $operation, &$would_block=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$stream, $operation, &$would_block], 0, $count_));
}
function fnmatch($pattern, $filename, $flags=0) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$pattern, $filename, $flags], 0, $count_));
}
function fopen($filename, $mode, $use_include_path=false, $context=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$filename, $mode, $use_include_path, $context], 0, $count_));
}
function fpassthru($stream) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$stream], 0, $count_));
}
function fputcsv($handle, $fields, $separator=",", $enclosure='"', $escape_char="\\") {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$handle, $fields, $separator, $enclosure, $escape_char], 0, $count_));
}
function fputs() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function fread($stream, $length) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$stream, $length], 0, $count_));
}
function fscanf($stream, $format, &...$vars) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$stream, $format, &$vars], 0, $count_));
}
function fseek($stream, $offset, $whence=SEEK_SET) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$stream, $offset, $whence], 0, $count_));
}
function fstat($stream) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$stream], 0, $count_));
}
function ftell($stream) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$stream], 0, $count_));
}
function ftruncate($stream, $size) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$stream, $size], 0, $count_));
}
function fwrite($handle, $string, $length=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$handle, $string, $length], 0, $count_));
}
function glob($pattern, $flags=0) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$pattern, $flags], 0, $count_));
}
function is_dir($filename) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$filename], 0, $count_));
}
function is_executable($filename) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$filename], 0, $count_));
}
function is_file($filename) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$filename], 0, $count_));
}
function is_link($filename) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$filename], 0, $count_));
}
function is_readable($filename) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$filename], 0, $count_));
}
function is_uploaded_file($filename) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$filename], 0, $count_));
}
function is_writable($filename) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$filename], 0, $count_));
}
function is_writeable() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function lchgrp($filename, $group) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$filename, $group], 0, $count_));
}
function lchown($filename, $user) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$filename, $user], 0, $count_));
}
function link($target, $link) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$target, $link], 0, $count_));
}
function linkinfo($path) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$path], 0, $count_));
}
function lstat($filename) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$filename], 0, $count_));
}
function mkdir($directory, $permissions=0777, $recursive=false, $context=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$directory, $permissions, $recursive, $context], 0, $count_));
}
function move_uploaded_file($from, $to) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$from, $to], 0, $count_));
}
function parse_ini_file($filename, $process_sections=false, $scanner_mode=INI_SCANNER_NORMAL) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$filename, $process_sections, $scanner_mode], 0, $count_));
}
function parse_ini_string($ini_string, $process_sections=false, $scanner_mode=INI_SCANNER_NORMAL) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ini_string, $process_sections, $scanner_mode], 0, $count_));
}
function pathinfo($path, $flags=PATHINFO_ALL) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$path, $flags], 0, $count_));
}
function pclose($handle) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$handle], 0, $count_));
}
function popen($command, $mode) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$command, $mode], 0, $count_));
}
function readfile($filename, $use_include_path=false, $context=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$filename, $use_include_path, $context], 0, $count_));
}
function readlink($path) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$path], 0, $count_));
}
function realpath($path) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$path], 0, $count_));
}
function realpath_cache_get() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function realpath_cache_size() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function rename($oldname, $newname, $context=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$oldname, $newname, $context], 0, $count_));
}
function rewind($stream) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$stream], 0, $count_));
}
function rmdir($directory, $context=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$directory, $context], 0, $count_));
}
function set_file_buffer() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function stat($filename) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$filename], 0, $count_));
}
function symlink($target, $link) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$target, $link], 0, $count_));
}
function tempnam($directory, $prefix) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$directory, $prefix], 0, $count_));
}
function tmpfile() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function touch($filename, $time=null, $atime=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$filename, $time, $atime], 0, $count_));
}
function umask($mask=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mask], 0, $count_));
}
function unlink($filename, $context=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$filename, $context], 0, $count_));
}
function methods() {
  return [
    "basename",
    "chgrp",
    "chmod",
    "chown",
    "clearstatcache",
    "copy",
    "delete",
    "dirname",
    "disk_free_space",
    "disk_total_space",
    "diskfreespace",
    "fclose",
    "feof",
    "fflush",
    "fgetc",
    "fgetcsv",
    "fgets",
    "fgetss",
    "file",
    "file_exists",
    "file_get_contents",
    "file_put_contents",
    "fileatime",
    "filectime",
    "filegroup",
    "fileinode",
    "filemtime",
    "fileowner",
    "fileperms",
    "filesize",
    "filetype",
    "flock",
    "fnmatch",
    "fopen",
    "fpassthru",
    "fputcsv",
    "fputs",
    "fread",
    "fscanf",
    "fseek",
    "fstat",
    "ftell",
    "ftruncate",
    "fwrite",
    "glob",
    "is_dir",
    "is_executable",
    "is_file",
    "is_link",
    "is_readable",
    "is_uploaded_file",
    "is_writable",
    "is_writeable",
    "lchgrp",
    "lchown",
    "link",
    "linkinfo",
    "lstat",
    "mkdir",
    "move_uploaded_file",
    "parse_ini_file",
    "parse_ini_string",
    "pathinfo",
    "pclose",
    "popen",
    "readfile",
    "readlink",
    "realpath",
    "realpath_cache_get",
    "realpath_cache_size",
    "rename",
    "rewind",
    "rmdir",
    "set_file_buffer",
    "stat",
    "symlink",
    "tempnam",
    "tmpfile",
    "touch",
    "umask",
    "unlink"
];}

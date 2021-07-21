<?php namespace Proxyz\Php\Filesystem;
// This file is dynamically generated ... do not edit 

function basename($path, $suffix=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$path, $suffix]);
}
function chgrp($filename, $group) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename, $group]);
}
function chmod($filename, $mode) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename, $mode]);
}
function chown($filename, $user) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename, $user]);
}
function clearstatcache($clear_realpath_cache=null, $filename=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$clear_realpath_cache, $filename]);
}
function copy($source_file, $destination_file, $context=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$source_file, $destination_file, $context]);
}
function delete() {
  return \Proxyz\callFunction(__FUNCTION__, func_get_args());
}
function dirname($path, $levels=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$path, $levels]);
}
function disk_free_space($path) {
  return \Proxyz\callFunction(__FUNCTION__, [$path]);
}
function disk_total_space($path) {
  return \Proxyz\callFunction(__FUNCTION__, [$path]);
}
function diskfreespace($path) {
  return \Proxyz\callFunction(__FUNCTION__, [$path]);
}
function fclose($fp) {
  return \Proxyz\callFunction(__FUNCTION__, [$fp]);
}
function feof($fp) {
  return \Proxyz\callFunction(__FUNCTION__, [$fp]);
}
function fflush($fp) {
  return \Proxyz\callFunction(__FUNCTION__, [$fp]);
}
function fgetc($fp) {
  return \Proxyz\callFunction(__FUNCTION__, [$fp]);
}
function fgetcsv($fp, $length=null, $delimiter=null, $enclosure=null, $escape=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$fp, $length, $delimiter, $enclosure, $escape]);
}
function fgets($fp, $length=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$fp, $length]);
}
function fgetss($fp, $length=null, $allowable_tags=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$fp, $length, $allowable_tags]);
}
function file($filename, $flags=null, $context=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename, $flags, $context]);
}
function file_exists($filename) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename]);
}
function file_get_contents($filename, $flags=null, $context=null, $offset=null, $maxlen=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename, $flags, $context, $offset, $maxlen]);
}
function file_put_contents($filename, $data, $flags=null, $context=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename, $data, $flags, $context]);
}
function fileatime($filename) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename]);
}
function filectime($filename) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename]);
}
function filegroup($filename) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename]);
}
function fileinode($filename) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename]);
}
function filemtime($filename) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename]);
}
function fileowner($filename) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename]);
}
function fileperms($filename) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename]);
}
function filesize($filename) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename]);
}
function filetype($filename) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename]);
}
function flock($fp, $operation, &$wouldblock=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$fp, $operation, &$wouldblock]);
}
function fnmatch($pattern, $filename, $flags=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$pattern, $filename, $flags]);
}
function fopen($filename, $mode, $use_include_path=null, $context=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename, $mode, $use_include_path, $context]);
}
function fpassthru($fp) {
  return \Proxyz\callFunction(__FUNCTION__, [$fp]);
}
function fputcsv($fp, $fields, $delimiter=null, $enclosure=null, $escape_char=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$fp, $fields, $delimiter, $enclosure, $escape_char]);
}
function fputs($fp, $str, $length=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$fp, $str, $length]);
}
function fread($fp, $length) {
  return \Proxyz\callFunction(__FUNCTION__, [$fp, $length]);
}
function fscanf($stream, $format, &...$vars) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream, $format, &$vars]);
}
function fseek($fp, $offset, $whence=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$fp, $offset, $whence]);
}
function fstat($fp) {
  return \Proxyz\callFunction(__FUNCTION__, [$fp]);
}
function ftell($fp) {
  return \Proxyz\callFunction(__FUNCTION__, [$fp]);
}
function ftruncate($fp, $size) {
  return \Proxyz\callFunction(__FUNCTION__, [$fp, $size]);
}
function fwrite($fp, $str, $length=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$fp, $str, $length]);
}
function glob($pattern, $flags=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$pattern, $flags]);
}
function is_dir($filename) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename]);
}
function is_executable($filename) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename]);
}
function is_file($filename) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename]);
}
function is_link($filename) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename]);
}
function is_readable($filename) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename]);
}
function is_uploaded_file($path) {
  return \Proxyz\callFunction(__FUNCTION__, [$path]);
}
function is_writable($filename) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename]);
}
function is_writeable($filename) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename]);
}
function lchgrp($filename, $group) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename, $group]);
}
function lchown($filename, $user) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename, $user]);
}
function link($target, $link) {
  return \Proxyz\callFunction(__FUNCTION__, [$target, $link]);
}
function linkinfo($filename) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename]);
}
function lstat($filename) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename]);
}
function mkdir($pathname, $mode=null, $recursive=null, $context=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$pathname, $mode, $recursive, $context]);
}
function move_uploaded_file($path, $new_path) {
  return \Proxyz\callFunction(__FUNCTION__, [$path, $new_path]);
}
function parse_ini_file($filename, $process_sections=null, $scanner_mode=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename, $process_sections, $scanner_mode]);
}
function parse_ini_string($ini_string, $process_sections=null, $scanner_mode=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ini_string, $process_sections, $scanner_mode]);
}
function pathinfo($path, $options=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$path, $options]);
}
function pclose($fp) {
  return \Proxyz\callFunction(__FUNCTION__, [$fp]);
}
function popen($command, $mode) {
  return \Proxyz\callFunction(__FUNCTION__, [$command, $mode]);
}
function readfile($filename, $flags=null, $context=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename, $flags, $context]);
}
function readlink($filename) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename]);
}
function realpath($path) {
  return \Proxyz\callFunction(__FUNCTION__, [$path]);
}
function realpath_cache_get() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function realpath_cache_size() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function rename($old_name, $new_name, $context=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$old_name, $new_name, $context]);
}
function rewind($fp) {
  return \Proxyz\callFunction(__FUNCTION__, [$fp]);
}
function rmdir($dirname, $context=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$dirname, $context]);
}
function set_file_buffer($fp, $buffer) {
  return \Proxyz\callFunction(__FUNCTION__, [$fp, $buffer]);
}
function stat($filename) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename]);
}
function symlink($target, $link) {
  return \Proxyz\callFunction(__FUNCTION__, [$target, $link]);
}
function tempnam($dir, $prefix) {
  return \Proxyz\callFunction(__FUNCTION__, [$dir, $prefix]);
}
function tmpfile() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function touch($filename, $time=null, $atime=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename, $time, $atime]);
}
function umask($mask=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$mask]);
}
function unlink($filename, $context=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename, $context]);
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

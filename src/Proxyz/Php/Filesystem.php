<?php namespace Proxyz\Php\Filesystem;
// This file is dynamically generated ... do not edit 

function basename($path, $suffix="") {
  return \Proxyz\callFunction(__FUNCTION__, [$path, $suffix]);
}
function chgrp($filename, $group) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename, $group]);
}
function chmod($filename, $permissions) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename, $permissions]);
}
function chown($filename, $user) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename, $user]);
}
function clearstatcache($clear_realpath_cache=false, $filename="") {
  return \Proxyz\callFunction(__FUNCTION__, [$clear_realpath_cache, $filename]);
}
function copy($source, $dest, $context=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$source, $dest, $context]);
}
function delete() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function dirname($path, $levels=1) {
  return \Proxyz\callFunction(__FUNCTION__, [$path, $levels]);
}
function disk_free_space($directory) {
  return \Proxyz\callFunction(__FUNCTION__, [$directory]);
}
function disk_total_space($directory) {
  return \Proxyz\callFunction(__FUNCTION__, [$directory]);
}
function diskfreespace() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function fclose($stream) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream]);
}
function feof($stream) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream]);
}
function fflush($stream) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream]);
}
function fgetc($stream) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream]);
}
function fgetcsv($stream, $length=0, $separator=",", $enclosure='"', $escape="\\") {
  return \Proxyz\callFunction(__FUNCTION__, [$stream, $length, $separator, $enclosure, $escape]);
}
function fgets($handle, $length=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$handle, $length]);
}
function fgetss($handle, $length=null, $allowable_tags=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$handle, $length, $allowable_tags]);
}
function file($filename, $flags=0, $context=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename, $flags, $context]);
}
function file_exists($filename) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename]);
}
function file_get_contents($filename, $use_include_path=false, $context=null, $offset=0, $length=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename, $use_include_path, $context, $offset, $length]);
}
function file_put_contents($filename, $data, $flags=0, $context=null) {
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
function flock($stream, $operation, &$would_block=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream, $operation, &$would_block]);
}
function fnmatch($pattern, $filename, $flags=0) {
  return \Proxyz\callFunction(__FUNCTION__, [$pattern, $filename, $flags]);
}
function fopen($filename, $mode, $use_include_path=false, $context=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename, $mode, $use_include_path, $context]);
}
function fpassthru($stream) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream]);
}
function fputcsv($handle, $fields, $separator=",", $enclosure='"', $escape_char="\\") {
  return \Proxyz\callFunction(__FUNCTION__, [$handle, $fields, $separator, $enclosure, $escape_char]);
}
function fputs() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function fread($stream, $length) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream, $length]);
}
function fscanf($stream, $format, &...$vars) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream, $format, &$vars]);
}
function fseek($stream, $offset, $whence=SEEK_SET) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream, $offset, $whence]);
}
function fstat($stream) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream]);
}
function ftell($stream) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream]);
}
function ftruncate($stream, $size) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream, $size]);
}
function fwrite($handle, $string, $length=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$handle, $string, $length]);
}
function glob($pattern, $flags=0) {
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
function is_uploaded_file($filename) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename]);
}
function is_writable($filename) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename]);
}
function is_writeable() {
  return \Proxyz\callFunction(__FUNCTION__, []);
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
function linkinfo($path) {
  return \Proxyz\callFunction(__FUNCTION__, [$path]);
}
function lstat($filename) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename]);
}
function mkdir($directory, $permissions=0777, $recursive=false, $context=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$directory, $permissions, $recursive, $context]);
}
function move_uploaded_file($from, $to) {
  return \Proxyz\callFunction(__FUNCTION__, [$from, $to]);
}
function parse_ini_file($filename, $process_sections=false, $scanner_mode=INI_SCANNER_NORMAL) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename, $process_sections, $scanner_mode]);
}
function parse_ini_string($ini_string, $process_sections=false, $scanner_mode=INI_SCANNER_NORMAL) {
  return \Proxyz\callFunction(__FUNCTION__, [$ini_string, $process_sections, $scanner_mode]);
}
function pathinfo($path, $flags=PATHINFO_ALL) {
  return \Proxyz\callFunction(__FUNCTION__, [$path, $flags]);
}
function pclose($handle) {
  return \Proxyz\callFunction(__FUNCTION__, [$handle]);
}
function popen($command, $mode) {
  return \Proxyz\callFunction(__FUNCTION__, [$command, $mode]);
}
function readfile($filename, $use_include_path=false, $context=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename, $use_include_path, $context]);
}
function readlink($path) {
  return \Proxyz\callFunction(__FUNCTION__, [$path]);
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
function rename($oldname, $newname, $context=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$oldname, $newname, $context]);
}
function rewind($stream) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream]);
}
function rmdir($directory, $context=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$directory, $context]);
}
function set_file_buffer() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function stat($filename) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename]);
}
function symlink($target, $link) {
  return \Proxyz\callFunction(__FUNCTION__, [$target, $link]);
}
function tempnam($directory, $prefix) {
  return \Proxyz\callFunction(__FUNCTION__, [$directory, $prefix]);
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

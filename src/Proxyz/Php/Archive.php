<?php namespace Proxyz\Php\Archive;
// This file is dynamically generated ... do not edit 

function bzclose($bz) {
  return \Proxyz\callFunction(__FUNCTION__, [$bz]);
}
function bzcompress($data, $block_size=4, $work_factor=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$data, $block_size, $work_factor]);
}
function bzdecompress($data, $use_less_memory=false) {
  return \Proxyz\callFunction(__FUNCTION__, [$data, $use_less_memory]);
}
function bzerrno($bz) {
  return \Proxyz\callFunction(__FUNCTION__, [$bz]);
}
function bzerror($bz) {
  return \Proxyz\callFunction(__FUNCTION__, [$bz]);
}
function bzerrstr($bz) {
  return \Proxyz\callFunction(__FUNCTION__, [$bz]);
}
function bzflush($bz) {
  return \Proxyz\callFunction(__FUNCTION__, [$bz]);
}
function bzopen($file, $mode) {
  return \Proxyz\callFunction(__FUNCTION__, [$file, $mode]);
}
function bzread($bz, $length=1024) {
  return \Proxyz\callFunction(__FUNCTION__, [$bz, $length]);
}
function bzwrite($bz, $data, $length=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$bz, $data, $length]);
}
function deflate_add($context, $data, $flush_mode=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$context, $data, $flush_mode]);
}
function deflate_init($encoding, $options=[]) {
  return \Proxyz\callFunction(__FUNCTION__, [$encoding, $options]);
}
function gzclose($stream) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream]);
}
function gzcompress($data, $level=-1, $encoding=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$data, $level, $encoding]);
}
function gzdecode($data, $max_length=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$data, $max_length]);
}
function gzdeflate($data, $level=-1, $encoding=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$data, $level, $encoding]);
}
function gzencode($data, $level=-1, $encoding=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$data, $level, $encoding]);
}
function gzeof($stream) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream]);
}
function gzfile($filename, $use_include_path=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename, $use_include_path]);
}
function gzgetc($stream) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream]);
}
function gzgets($stream, $length=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream, $length]);
}
function gzgetss($zp, $length, $allowable_tags=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$zp, $length, $allowable_tags]);
}
function gzinflate($data, $max_length=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$data, $max_length]);
}
function gzopen($filename, $mode, $use_include_path=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename, $mode, $use_include_path]);
}
function gzpassthru($stream) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream]);
}
function gzputs() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function gzread($stream, $length) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream, $length]);
}
function gzrewind($stream) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream]);
}
function gzseek($stream, $offset, $whence=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream, $offset, $whence]);
}
function gztell($stream) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream]);
}
function gzuncompress($data, $max_length=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$data, $max_length]);
}
function gzwrite($stream, $data, $length=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$stream, $data, $length]);
}
function inflate_add($context, $data, $flush_mode=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$context, $data, $flush_mode]);
}
function inflate_get_read_len($context) {
  return \Proxyz\callFunction(__FUNCTION__, [$context]);
}
function inflate_get_status($context) {
  return \Proxyz\callFunction(__FUNCTION__, [$context]);
}
function inflate_init($encoding, $options=[]) {
  return \Proxyz\callFunction(__FUNCTION__, [$encoding, $options]);
}
function readgzfile($filename, $use_include_path=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename, $use_include_path]);
}
function zip_close($zip) {
  return \Proxyz\callFunction(__FUNCTION__, [$zip]);
}
function zip_entry_close($zip_entry) {
  return \Proxyz\callFunction(__FUNCTION__, [$zip_entry]);
}
function zip_entry_compressedsize($zip_entry) {
  return \Proxyz\callFunction(__FUNCTION__, [$zip_entry]);
}
function zip_entry_compressionmethod($zip_entry) {
  return \Proxyz\callFunction(__FUNCTION__, [$zip_entry]);
}
function zip_entry_filesize($zip_entry) {
  return \Proxyz\callFunction(__FUNCTION__, [$zip_entry]);
}
function zip_entry_name($zip_entry) {
  return \Proxyz\callFunction(__FUNCTION__, [$zip_entry]);
}
function zip_entry_open($zip_dp, $zip_entry, $mode="rb") {
  return \Proxyz\callFunction(__FUNCTION__, [$zip_dp, $zip_entry, $mode]);
}
function zip_entry_read($zip_entry, $len=1024) {
  return \Proxyz\callFunction(__FUNCTION__, [$zip_entry, $len]);
}
function zip_open($filename) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename]);
}
function zip_read($zip) {
  return \Proxyz\callFunction(__FUNCTION__, [$zip]);
}
function zlib_decode($data, $max_length=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$data, $max_length]);
}
function zlib_encode($data, $encoding, $level=-1) {
  return \Proxyz\callFunction(__FUNCTION__, [$data, $encoding, $level]);
}
function zlib_get_coding_type() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function methods() {
  return [
    "bzclose",
    "bzcompress",
    "bzdecompress",
    "bzerrno",
    "bzerror",
    "bzerrstr",
    "bzflush",
    "bzopen",
    "bzread",
    "bzwrite",
    "deflate_add",
    "deflate_init",
    "gzclose",
    "gzcompress",
    "gzdecode",
    "gzdeflate",
    "gzencode",
    "gzeof",
    "gzfile",
    "gzgetc",
    "gzgets",
    "gzgetss",
    "gzinflate",
    "gzopen",
    "gzpassthru",
    "gzputs",
    "gzread",
    "gzrewind",
    "gzseek",
    "gztell",
    "gzuncompress",
    "gzwrite",
    "inflate_add",
    "inflate_get_read_len",
    "inflate_get_status",
    "inflate_init",
    "readgzfile",
    "zip_close",
    "zip_entry_close",
    "zip_entry_compressedsize",
    "zip_entry_compressionmethod",
    "zip_entry_filesize",
    "zip_entry_name",
    "zip_entry_open",
    "zip_entry_read",
    "zip_open",
    "zip_read",
    "zlib_decode",
    "zlib_encode",
    "zlib_get_coding_type"
];}

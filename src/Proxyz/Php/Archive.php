<?php namespace Proxyz\Php\Archive;
// This file is dynamically generated ... do not edit 

function bzclose($bz) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$bz], 0, $count_));
}
function bzcompress($data, $block_size=4, $work_factor=0) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$data, $block_size, $work_factor], 0, $count_));
}
function bzdecompress($data, $use_less_memory=false) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$data, $use_less_memory], 0, $count_));
}
function bzerrno($bz) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$bz], 0, $count_));
}
function bzerror($bz) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$bz], 0, $count_));
}
function bzerrstr($bz) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$bz], 0, $count_));
}
function bzflush($bz) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$bz], 0, $count_));
}
function bzopen($file, $mode) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$file, $mode], 0, $count_));
}
function bzread($bz, $length=1024) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$bz, $length], 0, $count_));
}
function bzwrite($bz, $data, $length=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$bz, $data, $length], 0, $count_));
}
function deflate_add($context, $data, $flush_mode=ZLIB_SYNC_FLUSH) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$context, $data, $flush_mode], 0, $count_));
}
function deflate_init($encoding, $options=[]) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$encoding, $options], 0, $count_));
}
function gzclose($stream) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$stream], 0, $count_));
}
function gzcompress($data, $level=-1, $encoding=ZLIB_ENCODING_DEFLATE) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$data, $level, $encoding], 0, $count_));
}
function gzdecode($data, $max_length=0) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$data, $max_length], 0, $count_));
}
function gzdeflate($data, $level=-1, $encoding=ZLIB_ENCODING_RAW) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$data, $level, $encoding], 0, $count_));
}
function gzencode($data, $level=-1, $encoding=ZLIB_ENCODING_GZIP) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$data, $level, $encoding], 0, $count_));
}
function gzeof($stream) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$stream], 0, $count_));
}
function gzfile($filename, $use_include_path=0) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$filename, $use_include_path], 0, $count_));
}
function gzgetc($stream) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$stream], 0, $count_));
}
function gzgets($stream, $length=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$stream, $length], 0, $count_));
}
function gzgetss($zp, $length, $allowable_tags=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$zp, $length, $allowable_tags], 0, $count_));
}
function gzinflate($data, $max_length=0) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$data, $max_length], 0, $count_));
}
function gzopen($filename, $mode, $use_include_path=0) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$filename, $mode, $use_include_path], 0, $count_));
}
function gzpassthru($stream) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$stream], 0, $count_));
}
function gzputs() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function gzread($stream, $length) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$stream, $length], 0, $count_));
}
function gzrewind($stream) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$stream], 0, $count_));
}
function gzseek($stream, $offset, $whence=SEEK_SET) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$stream, $offset, $whence], 0, $count_));
}
function gztell($stream) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$stream], 0, $count_));
}
function gzuncompress($data, $max_length=0) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$data, $max_length], 0, $count_));
}
function gzwrite($stream, $data, $length=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$stream, $data, $length], 0, $count_));
}
function inflate_add($context, $data, $flush_mode=ZLIB_SYNC_FLUSH) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$context, $data, $flush_mode], 0, $count_));
}
function inflate_get_read_len($context) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$context], 0, $count_));
}
function inflate_get_status($context) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$context], 0, $count_));
}
function inflate_init($encoding, $options=[]) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$encoding, $options], 0, $count_));
}
function readgzfile($filename, $use_include_path=0) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$filename, $use_include_path], 0, $count_));
}
function zip_close($zip) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$zip], 0, $count_));
}
function zip_entry_close($zip_entry) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$zip_entry], 0, $count_));
}
function zip_entry_compressedsize($zip_entry) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$zip_entry], 0, $count_));
}
function zip_entry_compressionmethod($zip_entry) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$zip_entry], 0, $count_));
}
function zip_entry_filesize($zip_entry) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$zip_entry], 0, $count_));
}
function zip_entry_name($zip_entry) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$zip_entry], 0, $count_));
}
function zip_entry_open($zip_dp, $zip_entry, $mode="rb") {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$zip_dp, $zip_entry, $mode], 0, $count_));
}
function zip_entry_read($zip_entry, $len=1024) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$zip_entry, $len], 0, $count_));
}
function zip_open($filename) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$filename], 0, $count_));
}
function zip_read($zip) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$zip], 0, $count_));
}
function zlib_decode($data, $max_length=0) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$data, $max_length], 0, $count_));
}
function zlib_encode($data, $encoding, $level=-1) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$data, $encoding, $level], 0, $count_));
}
function zlib_get_coding_type() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
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

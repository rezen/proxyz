<?php namespace Proxyz\Php\Datetime;
// This file is dynamically generated ... do not edit 

function checkdate($month, $day, $year) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$month, $day, $year], 0, $count_));
}
function date($format, $timestamp=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$format, $timestamp], 0, $count_));
}
function date_add($object, $interval) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$object, $interval], 0, $count_));
}
function date_create($datetime="now", $timezone=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$datetime, $timezone], 0, $count_));
}
function date_create_from_format($format, $datetime, $timezone=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$format, $datetime, $timezone], 0, $count_));
}
function date_create_immutable($datetime="now", $timezone=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$datetime, $timezone], 0, $count_));
}
function date_create_immutable_from_format($format, $datetime, $timezone=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$format, $datetime, $timezone], 0, $count_));
}
function date_date_set($object, $year, $month, $day) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$object, $year, $month, $day], 0, $count_));
}
function date_default_timezone_get() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function date_default_timezone_set($timezoneId) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$timezoneId], 0, $count_));
}
function date_diff() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function date_format() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function date_get_last_errors() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function date_interval_create_from_date_string($datetime) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$datetime], 0, $count_));
}
function date_interval_format($format) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$format], 0, $count_));
}
function date_isodate_set($object, $year, $week, $dayOfWeek=1) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$object, $year, $week, $dayOfWeek], 0, $count_));
}
function date_modify($object, $modifier) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$object, $modifier], 0, $count_));
}
function date_offset_get() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function date_parse($datetime) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$datetime], 0, $count_));
}
function date_parse_from_format($format, $datetime) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$format, $datetime], 0, $count_));
}
function date_sub($object, $interval) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$object, $interval], 0, $count_));
}
function date_sun_info($timestamp, $latitude, $longitude) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$timestamp, $latitude, $longitude], 0, $count_));
}
function date_sunrise($timestamp, $returnFormat=SUNFUNCS_RET_STRING, $latitude=null, $longitude=null, $zenith=null, $utcOffset=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$timestamp, $returnFormat, $latitude, $longitude, $zenith, $utcOffset], 0, $count_));
}
function date_sunset($timestamp, $returnFormat=SUNFUNCS_RET_STRING, $latitude=null, $longitude=null, $zenith=null, $utcOffset=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$timestamp, $returnFormat, $latitude, $longitude, $zenith, $utcOffset], 0, $count_));
}
function date_time_set($object, $hour, $minute, $second=0, $microsecond=0) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$object, $hour, $minute, $second, $microsecond], 0, $count_));
}
function date_timestamp_get() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function date_timestamp_set($object, $timestamp) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$object, $timestamp], 0, $count_));
}
function date_timezone_get() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function date_timezone_set($object, $timezone) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$object, $timezone], 0, $count_));
}
function getdate($timestamp=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$timestamp], 0, $count_));
}
function gettimeofday($as_float=false) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$as_float], 0, $count_));
}
function gmdate($format, $timestamp=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$format, $timestamp], 0, $count_));
}
function gmmktime($hour, $minute=null, $second=null, $month=null, $day=null, $year=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$hour, $minute, $second, $month, $day, $year], 0, $count_));
}
function gmstrftime($format, $timestamp=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$format, $timestamp], 0, $count_));
}
function idate($format, $timestamp=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$format, $timestamp], 0, $count_));
}
function localtime($timestamp=null, $associative=false) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$timestamp, $associative], 0, $count_));
}
function microtime($as_float=false) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$as_float], 0, $count_));
}
function mktime($hour, $minute=null, $second=null, $month=null, $day=null, $year=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$hour, $minute, $second, $month, $day, $year], 0, $count_));
}
function strftime($format, $timestamp=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$format, $timestamp], 0, $count_));
}
function strptime($timestamp, $format) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$timestamp, $format], 0, $count_));
}
function strtotime($datetime, $baseTimestamp=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$datetime, $baseTimestamp], 0, $count_));
}
function time() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function timezone_abbreviations_list() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function timezone_identifiers_list($timezoneGroup=\DateTimeZone::ALL, $countryCode=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$timezoneGroup, $countryCode], 0, $count_));
}
function timezone_location_get($object) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$object], 0, $count_));
}
function timezone_name_from_abbr($abbr, $utcOffset=-1, $isDST=-1) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$abbr, $utcOffset, $isDST], 0, $count_));
}
function timezone_name_get($object) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$object], 0, $count_));
}
function timezone_offset_get($object, $datetime) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$object, $datetime], 0, $count_));
}
function timezone_open($timezone) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$timezone], 0, $count_));
}
function timezone_transitions_get($object, $timestampBegin=PHP_INT_MIN, $timestampEnd=PHP_INT_MAX) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$object, $timestampBegin, $timestampEnd], 0, $count_));
}
function timezone_version_get() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function methods() {
  return [
    "checkdate",
    "date",
    "date_add",
    "date_create",
    "date_create_from_format",
    "date_create_immutable",
    "date_create_immutable_from_format",
    "date_date_set",
    "date_default_timezone_get",
    "date_default_timezone_set",
    "date_diff",
    "date_format",
    "date_get_last_errors",
    "date_interval_create_from_date_string",
    "date_interval_format",
    "date_isodate_set",
    "date_modify",
    "date_offset_get",
    "date_parse",
    "date_parse_from_format",
    "date_sub",
    "date_sun_info",
    "date_sunrise",
    "date_sunset",
    "date_time_set",
    "date_timestamp_get",
    "date_timestamp_set",
    "date_timezone_get",
    "date_timezone_set",
    "getdate",
    "gettimeofday",
    "gmdate",
    "gmmktime",
    "gmstrftime",
    "idate",
    "localtime",
    "microtime",
    "mktime",
    "strftime",
    "strptime",
    "strtotime",
    "time",
    "timezone_abbreviations_list",
    "timezone_identifiers_list",
    "timezone_location_get",
    "timezone_name_from_abbr",
    "timezone_name_get",
    "timezone_offset_get",
    "timezone_open",
    "timezone_transitions_get",
    "timezone_version_get"
];}

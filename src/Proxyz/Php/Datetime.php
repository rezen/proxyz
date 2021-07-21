<?php namespace Proxyz\Php\Datetime;
// This file is dynamically generated ... do not edit 

function checkdate($month, $day, $year) {
  return \Proxyz\callFunction(__FUNCTION__, [$month, $day, $year]);
}
function date($format, $timestamp=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$format, $timestamp]);
}
function date_add($object, $interval) {
  return \Proxyz\callFunction(__FUNCTION__, [$object, $interval]);
}
function date_create($time=null, $timezone=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$time, $timezone]);
}
function date_create_from_format($format, $time, $object=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$format, $time, $object]);
}
function date_create_immutable($time=null, $timezone=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$time, $timezone]);
}
function date_create_immutable_from_format($format, $time, $object=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$format, $time, $object]);
}
function date_date_set($object, $year, $month, $day) {
  return \Proxyz\callFunction(__FUNCTION__, [$object, $year, $month, $day]);
}
function date_default_timezone_get() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function date_default_timezone_set($timezone_identifier) {
  return \Proxyz\callFunction(__FUNCTION__, [$timezone_identifier]);
}
function date_diff($object, $object2, $absolute=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$object, $object2, $absolute]);
}
function date_format($object, $format) {
  return \Proxyz\callFunction(__FUNCTION__, [$object, $format]);
}
function date_get_last_errors() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function date_interval_create_from_date_string($time) {
  return \Proxyz\callFunction(__FUNCTION__, [$time]);
}
function date_interval_format($object, $format) {
  return \Proxyz\callFunction(__FUNCTION__, [$object, $format]);
}
function date_isodate_set($object, $year, $week, $day=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$object, $year, $week, $day]);
}
function date_modify($object, $modify) {
  return \Proxyz\callFunction(__FUNCTION__, [$object, $modify]);
}
function date_offset_get($object) {
  return \Proxyz\callFunction(__FUNCTION__, [$object]);
}
function date_parse($date) {
  return \Proxyz\callFunction(__FUNCTION__, [$date]);
}
function date_parse_from_format($format, $date) {
  return \Proxyz\callFunction(__FUNCTION__, [$format, $date]);
}
function date_sub($object, $interval) {
  return \Proxyz\callFunction(__FUNCTION__, [$object, $interval]);
}
function date_sun_info($time, $latitude, $longitude) {
  return \Proxyz\callFunction(__FUNCTION__, [$time, $latitude, $longitude]);
}
function date_sunrise($time, $format=null, $latitude=null, $longitude=null, $zenith=null, $gmt_offset=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$time, $format, $latitude, $longitude, $zenith, $gmt_offset]);
}
function date_sunset($time, $format=null, $latitude=null, $longitude=null, $zenith=null, $gmt_offset=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$time, $format, $latitude, $longitude, $zenith, $gmt_offset]);
}
function date_time_set($object, $hour, $minute, $second=null, $microseconds=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$object, $hour, $minute, $second, $microseconds]);
}
function date_timestamp_get($object) {
  return \Proxyz\callFunction(__FUNCTION__, [$object]);
}
function date_timestamp_set($object, $unixtimestamp) {
  return \Proxyz\callFunction(__FUNCTION__, [$object, $unixtimestamp]);
}
function date_timezone_get($object) {
  return \Proxyz\callFunction(__FUNCTION__, [$object]);
}
function date_timezone_set($object, $timezone) {
  return \Proxyz\callFunction(__FUNCTION__, [$object, $timezone]);
}
function getdate($timestamp=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$timestamp]);
}
function gettimeofday($get_as_float=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$get_as_float]);
}
function gmdate($format, $timestamp=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$format, $timestamp]);
}
function gmmktime($hour=null, $min=null, $sec=null, $mon=null, $day=null, $year=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$hour, $min, $sec, $mon, $day, $year]);
}
function gmstrftime($format, $timestamp=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$format, $timestamp]);
}
function idate($format, $timestamp=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$format, $timestamp]);
}
function localtime($timestamp=null, $associative_array=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$timestamp, $associative_array]);
}
function microtime($get_as_float=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$get_as_float]);
}
function mktime($hour=null, $min=null, $sec=null, $mon=null, $day=null, $year=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$hour, $min, $sec, $mon, $day, $year]);
}
function strftime($format, $timestamp=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$format, $timestamp]);
}
function strptime($timestamp, $format) {
  return \Proxyz\callFunction(__FUNCTION__, [$timestamp, $format]);
}
function strtotime($time, $now=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$time, $now]);
}
function time() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function timezone_abbreviations_list() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function timezone_identifiers_list($what=null, $country=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$what, $country]);
}
function timezone_location_get($object) {
  return \Proxyz\callFunction(__FUNCTION__, [$object]);
}
function timezone_name_from_abbr($abbr, $gmtoffset=null, $isdst=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$abbr, $gmtoffset, $isdst]);
}
function timezone_name_get($object) {
  return \Proxyz\callFunction(__FUNCTION__, [$object]);
}
function timezone_offset_get($object, $datetime) {
  return \Proxyz\callFunction(__FUNCTION__, [$object, $datetime]);
}
function timezone_open($timezone) {
  return \Proxyz\callFunction(__FUNCTION__, [$timezone]);
}
function timezone_transitions_get($object, $timestamp_begin=null, $timestamp_end=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$object, $timestamp_begin, $timestamp_end]);
}
function timezone_version_get() {
  return \Proxyz\callFunction(__FUNCTION__, []);
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

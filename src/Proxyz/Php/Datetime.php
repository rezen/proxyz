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
function date_create($datetime="now", $timezone=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$datetime, $timezone]);
}
function date_create_from_format($format, $datetime, $timezone=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$format, $datetime, $timezone]);
}
function date_create_immutable($datetime="now", $timezone=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$datetime, $timezone]);
}
function date_create_immutable_from_format($format, $datetime, $timezone=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$format, $datetime, $timezone]);
}
function date_date_set($object, $year, $month, $day) {
  return \Proxyz\callFunction(__FUNCTION__, [$object, $year, $month, $day]);
}
function date_default_timezone_get() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function date_default_timezone_set($timezoneId) {
  return \Proxyz\callFunction(__FUNCTION__, [$timezoneId]);
}
function date_diff() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function date_format() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function date_get_last_errors() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function date_interval_create_from_date_string($datetime) {
  return \Proxyz\callFunction(__FUNCTION__, [$datetime]);
}
function date_interval_format($format) {
  return \Proxyz\callFunction(__FUNCTION__, [$format]);
}
function date_isodate_set($object, $year, $week, $dayOfWeek=1) {
  return \Proxyz\callFunction(__FUNCTION__, [$object, $year, $week, $dayOfWeek]);
}
function date_modify($object, $modifier) {
  return \Proxyz\callFunction(__FUNCTION__, [$object, $modifier]);
}
function date_offset_get() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function date_parse($datetime) {
  return \Proxyz\callFunction(__FUNCTION__, [$datetime]);
}
function date_parse_from_format($format, $datetime) {
  return \Proxyz\callFunction(__FUNCTION__, [$format, $datetime]);
}
function date_sub($object, $interval) {
  return \Proxyz\callFunction(__FUNCTION__, [$object, $interval]);
}
function date_sun_info($timestamp, $latitude, $longitude) {
  return \Proxyz\callFunction(__FUNCTION__, [$timestamp, $latitude, $longitude]);
}
function date_sunrise($timestamp, $returnFormat=null, $latitude=null, $longitude=null, $zenith=null, $utcOffset=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$timestamp, $returnFormat, $latitude, $longitude, $zenith, $utcOffset]);
}
function date_sunset($timestamp, $returnFormat=null, $latitude=null, $longitude=null, $zenith=null, $utcOffset=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$timestamp, $returnFormat, $latitude, $longitude, $zenith, $utcOffset]);
}
function date_time_set($object, $hour, $minute, $second=null, $microsecond=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$object, $hour, $minute, $second, $microsecond]);
}
function date_timestamp_get() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function date_timestamp_set($object, $timestamp) {
  return \Proxyz\callFunction(__FUNCTION__, [$object, $timestamp]);
}
function date_timezone_get() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function date_timezone_set($object, $timezone) {
  return \Proxyz\callFunction(__FUNCTION__, [$object, $timezone]);
}
function getdate($timestamp=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$timestamp]);
}
function gettimeofday($as_float=false) {
  return \Proxyz\callFunction(__FUNCTION__, [$as_float]);
}
function gmdate($format, $timestamp=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$format, $timestamp]);
}
function gmmktime($hour, $minute=null, $second=null, $month=null, $day=null, $year=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$hour, $minute, $second, $month, $day, $year]);
}
function gmstrftime($format, $timestamp=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$format, $timestamp]);
}
function idate($format, $timestamp=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$format, $timestamp]);
}
function localtime($timestamp=null, $associative=false) {
  return \Proxyz\callFunction(__FUNCTION__, [$timestamp, $associative]);
}
function microtime($as_float=false) {
  return \Proxyz\callFunction(__FUNCTION__, [$as_float]);
}
function mktime($hour, $minute=null, $second=null, $month=null, $day=null, $year=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$hour, $minute, $second, $month, $day, $year]);
}
function strftime($format, $timestamp=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$format, $timestamp]);
}
function strptime($timestamp, $format) {
  return \Proxyz\callFunction(__FUNCTION__, [$timestamp, $format]);
}
function strtotime($datetime, $baseTimestamp=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$datetime, $baseTimestamp]);
}
function time() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function timezone_abbreviations_list() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function timezone_identifiers_list($timezoneGroup=\DateTimeZone::ALL, $countryCode=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$timezoneGroup, $countryCode]);
}
function timezone_location_get($object) {
  return \Proxyz\callFunction(__FUNCTION__, [$object]);
}
function timezone_name_from_abbr($abbr, $utcOffset=-1, $isDST=-1) {
  return \Proxyz\callFunction(__FUNCTION__, [$abbr, $utcOffset, $isDST]);
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
function timezone_transitions_get($object, $timestampBegin=null, $timestampEnd=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$object, $timestampBegin, $timestampEnd]);
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

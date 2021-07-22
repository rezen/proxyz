<?php namespace Proxyz\Php\Xml;
// This file is dynamically generated ... do not edit 

function utf8_decode($string) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$string], 0, $count_));
}
function utf8_encode($string) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$string], 0, $count_));
}
function xml_error_string($error_code) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$error_code], 0, $count_));
}
function xml_get_current_byte_index($parser) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$parser], 0, $count_));
}
function xml_get_current_column_number($parser) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$parser], 0, $count_));
}
function xml_get_current_line_number($parser) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$parser], 0, $count_));
}
function xml_get_error_code($parser) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$parser], 0, $count_));
}
function xml_parse($parser, $data, $is_final=false) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$parser, $data, $is_final], 0, $count_));
}
function xml_parse_into_struct($parser, $data, &$values, &$index=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$parser, $data, &$values, &$index], 0, $count_));
}
function xml_parser_create($encoding=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$encoding], 0, $count_));
}
function xml_parser_create_ns($encoding=null, $separator=":") {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$encoding, $separator], 0, $count_));
}
function xml_parser_free($parser) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$parser], 0, $count_));
}
function xml_parser_get_option($parser, $option) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$parser, $option], 0, $count_));
}
function xml_parser_set_option($parser, $option, $value) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$parser, $option, $value], 0, $count_));
}
function xml_set_character_data_handler($parser, $handler) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$parser, $handler], 0, $count_));
}
function xml_set_default_handler($parser, $handler) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$parser, $handler], 0, $count_));
}
function xml_set_element_handler($parser, $start_handler, $end_handler) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$parser, $start_handler, $end_handler], 0, $count_));
}
function xml_set_end_namespace_decl_handler($parser, $handler) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$parser, $handler], 0, $count_));
}
function xml_set_external_entity_ref_handler($parser, $handler) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$parser, $handler], 0, $count_));
}
function xml_set_notation_decl_handler($parser, $handler) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$parser, $handler], 0, $count_));
}
function xml_set_object($parser, $object) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$parser, $object], 0, $count_));
}
function xml_set_processing_instruction_handler($parser, $handler) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$parser, $handler], 0, $count_));
}
function xml_set_start_namespace_decl_handler($parser, $handler) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$parser, $handler], 0, $count_));
}
function xml_set_unparsed_entity_decl_handler($parser, $handler) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$parser, $handler], 0, $count_));
}
function methods() {
  return [
    "utf8_decode",
    "utf8_encode",
    "xml_error_string",
    "xml_get_current_byte_index",
    "xml_get_current_column_number",
    "xml_get_current_line_number",
    "xml_get_error_code",
    "xml_parse",
    "xml_parse_into_struct",
    "xml_parser_create",
    "xml_parser_create_ns",
    "xml_parser_free",
    "xml_parser_get_option",
    "xml_parser_set_option",
    "xml_set_character_data_handler",
    "xml_set_default_handler",
    "xml_set_element_handler",
    "xml_set_end_namespace_decl_handler",
    "xml_set_external_entity_ref_handler",
    "xml_set_notation_decl_handler",
    "xml_set_object",
    "xml_set_processing_instruction_handler",
    "xml_set_start_namespace_decl_handler",
    "xml_set_unparsed_entity_decl_handler"
];}

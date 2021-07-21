<?php namespace Proxyz\Php\Xml;
// This file is dynamically generated ... do not edit 

function utf8_decode($string) {
  return \Proxyz\callFunction(__FUNCTION__, [$string]);
}
function utf8_encode($string) {
  return \Proxyz\callFunction(__FUNCTION__, [$string]);
}
function xml_error_string($error_code) {
  return \Proxyz\callFunction(__FUNCTION__, [$error_code]);
}
function xml_get_current_byte_index($parser) {
  return \Proxyz\callFunction(__FUNCTION__, [$parser]);
}
function xml_get_current_column_number($parser) {
  return \Proxyz\callFunction(__FUNCTION__, [$parser]);
}
function xml_get_current_line_number($parser) {
  return \Proxyz\callFunction(__FUNCTION__, [$parser]);
}
function xml_get_error_code($parser) {
  return \Proxyz\callFunction(__FUNCTION__, [$parser]);
}
function xml_parse($parser, $data, $is_final=false) {
  return \Proxyz\callFunction(__FUNCTION__, [$parser, $data, $is_final]);
}
function xml_parse_into_struct($parser, $data, &$values, &$index=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$parser, $data, &$values, &$index]);
}
function xml_parser_create($encoding=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$encoding]);
}
function xml_parser_create_ns($encoding=null, $separator=":") {
  return \Proxyz\callFunction(__FUNCTION__, [$encoding, $separator]);
}
function xml_parser_free($parser) {
  return \Proxyz\callFunction(__FUNCTION__, [$parser]);
}
function xml_parser_get_option($parser, $option) {
  return \Proxyz\callFunction(__FUNCTION__, [$parser, $option]);
}
function xml_parser_set_option($parser, $option, $value) {
  return \Proxyz\callFunction(__FUNCTION__, [$parser, $option, $value]);
}
function xml_set_character_data_handler($parser, $handler) {
  return \Proxyz\callFunction(__FUNCTION__, [$parser, $handler]);
}
function xml_set_default_handler($parser, $handler) {
  return \Proxyz\callFunction(__FUNCTION__, [$parser, $handler]);
}
function xml_set_element_handler($parser, $start_handler, $end_handler) {
  return \Proxyz\callFunction(__FUNCTION__, [$parser, $start_handler, $end_handler]);
}
function xml_set_end_namespace_decl_handler($parser, $handler) {
  return \Proxyz\callFunction(__FUNCTION__, [$parser, $handler]);
}
function xml_set_external_entity_ref_handler($parser, $handler) {
  return \Proxyz\callFunction(__FUNCTION__, [$parser, $handler]);
}
function xml_set_notation_decl_handler($parser, $handler) {
  return \Proxyz\callFunction(__FUNCTION__, [$parser, $handler]);
}
function xml_set_object($parser, $object) {
  return \Proxyz\callFunction(__FUNCTION__, [$parser, $object]);
}
function xml_set_processing_instruction_handler($parser, $handler) {
  return \Proxyz\callFunction(__FUNCTION__, [$parser, $handler]);
}
function xml_set_start_namespace_decl_handler($parser, $handler) {
  return \Proxyz\callFunction(__FUNCTION__, [$parser, $handler]);
}
function xml_set_unparsed_entity_decl_handler($parser, $handler) {
  return \Proxyz\callFunction(__FUNCTION__, [$parser, $handler]);
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

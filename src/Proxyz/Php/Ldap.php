<?php namespace Proxyz\Php\Ldap;
// This file is dynamically generated ... do not edit 

function ldap_8859_to_t61($value) {
  return \Proxyz\callFunction(__FUNCTION__, [$value]);
}
function ldap_add($ldap, $dn, $entry, $controls=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap, $dn, $entry, $controls]);
}
function ldap_add_ext($ldap, $dn, $entry, $controls=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap, $dn, $entry, $controls]);
}
function ldap_bind($ldap, $dn=null, $password=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap, $dn, $password]);
}
function ldap_bind_ext($ldap, $dn=null, $password=null, $controls=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap, $dn, $password, $controls]);
}
function ldap_close() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function ldap_compare($ldap, $dn, $attribute, $value, $controls=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap, $dn, $attribute, $value, $controls]);
}
function ldap_connect($uri=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$uri]);
}
function ldap_control_paged_result($link, $pagesize, $iscritical=false, $cookie="") {
  return \Proxyz\callFunction(__FUNCTION__, [$link, $pagesize, $iscritical, $cookie]);
}
function ldap_control_paged_result_response($link, $result, &$cookie=null, &$estimated=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$link, $result, &$cookie, &$estimated]);
}
function ldap_count_entries($ldap, $result) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap, $result]);
}
function ldap_count_references($ldap, $result) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap, $result]);
}
function ldap_delete($ldap, $dn, $controls=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap, $dn, $controls]);
}
function ldap_delete_ext($ldap, $dn, $controls=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap, $dn, $controls]);
}
function ldap_dn2ufn($dn) {
  return \Proxyz\callFunction(__FUNCTION__, [$dn]);
}
function ldap_err2str($errno) {
  return \Proxyz\callFunction(__FUNCTION__, [$errno]);
}
function ldap_errno($ldap) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap]);
}
function ldap_error($ldap) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap]);
}
function ldap_escape($value, $ignore="", $flags=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$value, $ignore, $flags]);
}
function ldap_exop($link, $reqoid, $reqdata=null, $serverctrls=null, &$retdata=null, &$retoid=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$link, $reqoid, $reqdata, $serverctrls, &$retdata, &$retoid]);
}
function ldap_exop_passwd($ldap, $user="", $old_password="", $new_password="", &$controls=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap, $user, $old_password, $new_password, &$controls]);
}
function ldap_exop_refresh($ldap, $dn, $ttl) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap, $dn, $ttl]);
}
function ldap_exop_whoami($ldap) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap]);
}
function ldap_explode_dn($dn, $with_attrib) {
  return \Proxyz\callFunction(__FUNCTION__, [$dn, $with_attrib]);
}
function ldap_first_attribute($ldap, $entry) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap, $entry]);
}
function ldap_first_entry($ldap, $result) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap, $result]);
}
function ldap_first_reference($ldap, $result) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap, $result]);
}
function ldap_free_result($result) {
  return \Proxyz\callFunction(__FUNCTION__, [$result]);
}
function ldap_get_attributes($ldap, $entry) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap, $entry]);
}
function ldap_get_dn($ldap, $entry) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap, $entry]);
}
function ldap_get_entries($ldap, $result) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap, $result]);
}
function ldap_get_option($ldap, $option, &$value=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap, $option, &$value]);
}
function ldap_get_values($ldap, $entry, $attribute) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap, $entry, $attribute]);
}
function ldap_get_values_len($ldap, $entry, $attribute) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap, $entry, $attribute]);
}
function ldap_list($ldap, $base, $filter, $attributes=[], $attributes_only=null, $sizelimit=-1, $timelimit=-1, $deref=LDAP_DEREF_NEVER, $controls=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap, $base, $filter, $attributes, $attributes_only, $sizelimit, $timelimit, $deref, $controls]);
}
function ldap_mod_add($ldap, $dn, $entry, $controls=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap, $dn, $entry, $controls]);
}
function ldap_mod_add_ext($ldap, $dn, $entry, $controls=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap, $dn, $entry, $controls]);
}
function ldap_mod_del($ldap, $dn, $entry, $controls=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap, $dn, $entry, $controls]);
}
function ldap_mod_del_ext($ldap, $dn, $entry, $controls=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap, $dn, $entry, $controls]);
}
function ldap_mod_replace($ldap, $dn, $entry, $controls=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap, $dn, $entry, $controls]);
}
function ldap_mod_replace_ext($ldap, $dn, $entry, $controls=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap, $dn, $entry, $controls]);
}
function ldap_modify() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function ldap_modify_batch($ldap, $dn, $modifications_info, $controls=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap, $dn, $modifications_info, $controls]);
}
function ldap_next_attribute($ldap, $entry) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap, $entry]);
}
function ldap_next_entry($ldap, $entry) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap, $entry]);
}
function ldap_next_reference($ldap, $entry) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap, $entry]);
}
function ldap_parse_exop($ldap, $result, &$response_data=null, &$response_oid=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap, $result, &$response_data, &$response_oid]);
}
function ldap_parse_reference($ldap, $entry, &$referrals) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap, $entry, &$referrals]);
}
function ldap_parse_result($ldap, $result, &$error_code, &$matched_dn=null, &$error_message=null, &$referrals=null, &$controls=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap, $result, &$error_code, &$matched_dn, &$error_message, &$referrals, &$controls]);
}
function ldap_read($ldap, $base, $filter, $attributes=[], $attributes_only=null, $sizelimit=-1, $timelimit=-1, $deref=LDAP_DEREF_NEVER, $controls=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap, $base, $filter, $attributes, $attributes_only, $sizelimit, $timelimit, $deref, $controls]);
}
function ldap_rename($ldap, $dn, $new_rdn, $new_parent, $delete_old_rdn, $controls=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap, $dn, $new_rdn, $new_parent, $delete_old_rdn, $controls]);
}
function ldap_rename_ext($ldap, $dn, $new_rdn, $new_parent, $delete_old_rdn, $controls=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap, $dn, $new_rdn, $new_parent, $delete_old_rdn, $controls]);
}
function ldap_sasl_bind($ldap, $dn=null, $password=null, $mech=null, $realm=null, $authc_id=null, $authz_id=null, $props=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap, $dn, $password, $mech, $realm, $authc_id, $authz_id, $props]);
}
function ldap_search($ldap, $base, $filter, $attributes=[], $attributes_only=null, $sizelimit=-1, $timelimit=-1, $deref=LDAP_DEREF_NEVER, $controls=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap, $base, $filter, $attributes, $attributes_only, $sizelimit, $timelimit, $deref, $controls]);
}
function ldap_set_option($ldap, $option, $value) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap, $option, $value]);
}
function ldap_set_rebind_proc($ldap, $callback) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap, $callback]);
}
function ldap_sort($link, $result, $sortfilter) {
  return \Proxyz\callFunction(__FUNCTION__, [$link, $result, $sortfilter]);
}
function ldap_start_tls($ldap) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap]);
}
function ldap_t61_to_8859($value) {
  return \Proxyz\callFunction(__FUNCTION__, [$value]);
}
function ldap_unbind($ldap) {
  return \Proxyz\callFunction(__FUNCTION__, [$ldap]);
}
function methods() {
  return [
    "ldap_8859_to_t61",
    "ldap_add",
    "ldap_add_ext",
    "ldap_bind",
    "ldap_bind_ext",
    "ldap_close",
    "ldap_compare",
    "ldap_connect",
    "ldap_control_paged_result",
    "ldap_control_paged_result_response",
    "ldap_count_entries",
    "ldap_count_references",
    "ldap_delete",
    "ldap_delete_ext",
    "ldap_dn2ufn",
    "ldap_err2str",
    "ldap_errno",
    "ldap_error",
    "ldap_escape",
    "ldap_exop",
    "ldap_exop_passwd",
    "ldap_exop_refresh",
    "ldap_exop_whoami",
    "ldap_explode_dn",
    "ldap_first_attribute",
    "ldap_first_entry",
    "ldap_first_reference",
    "ldap_free_result",
    "ldap_get_attributes",
    "ldap_get_dn",
    "ldap_get_entries",
    "ldap_get_option",
    "ldap_get_values",
    "ldap_get_values_len",
    "ldap_list",
    "ldap_mod_add",
    "ldap_mod_add_ext",
    "ldap_mod_del",
    "ldap_mod_del_ext",
    "ldap_mod_replace",
    "ldap_mod_replace_ext",
    "ldap_modify",
    "ldap_modify_batch",
    "ldap_next_attribute",
    "ldap_next_entry",
    "ldap_next_reference",
    "ldap_parse_exop",
    "ldap_parse_reference",
    "ldap_parse_result",
    "ldap_read",
    "ldap_rename",
    "ldap_rename_ext",
    "ldap_sasl_bind",
    "ldap_search",
    "ldap_set_option",
    "ldap_set_rebind_proc",
    "ldap_sort",
    "ldap_start_tls",
    "ldap_t61_to_8859",
    "ldap_unbind"
];}

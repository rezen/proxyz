<?php namespace Proxyz\Php\Ldap;
// This file is dynamically generated ... do not edit 

function ldap_8859_to_t61($value) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$value], 0, $count_));
}
function ldap_add($ldap, $dn, $entry, $controls=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap, $dn, $entry, $controls], 0, $count_));
}
function ldap_add_ext($ldap, $dn, $entry, $controls=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap, $dn, $entry, $controls], 0, $count_));
}
function ldap_bind($ldap, $dn=null, $password=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap, $dn, $password], 0, $count_));
}
function ldap_bind_ext($ldap, $dn=null, $password=null, $controls=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap, $dn, $password, $controls], 0, $count_));
}
function ldap_close() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function ldap_compare($ldap, $dn, $attribute, $value, $controls=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap, $dn, $attribute, $value, $controls], 0, $count_));
}
function ldap_connect($uri=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$uri], 0, $count_));
}
function ldap_control_paged_result($link, $pagesize, $iscritical=false, $cookie="") {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$link, $pagesize, $iscritical, $cookie], 0, $count_));
}
function ldap_control_paged_result_response($link, $result, &$cookie=null, &$estimated=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$link, $result, &$cookie, &$estimated], 0, $count_));
}
function ldap_count_entries($ldap, $result) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap, $result], 0, $count_));
}
function ldap_count_references($ldap, $result) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap, $result], 0, $count_));
}
function ldap_delete($ldap, $dn, $controls=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap, $dn, $controls], 0, $count_));
}
function ldap_delete_ext($ldap, $dn, $controls=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap, $dn, $controls], 0, $count_));
}
function ldap_dn2ufn($dn) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$dn], 0, $count_));
}
function ldap_err2str($errno) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$errno], 0, $count_));
}
function ldap_errno($ldap) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap], 0, $count_));
}
function ldap_error($ldap) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap], 0, $count_));
}
function ldap_escape($value, $ignore="", $flags=0) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$value, $ignore, $flags], 0, $count_));
}
function ldap_exop($link, $reqoid, $reqdata=null, $serverctrls=null, &$retdata=null, &$retoid=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$link, $reqoid, $reqdata, $serverctrls, &$retdata, &$retoid], 0, $count_));
}
function ldap_exop_passwd($ldap, $user="", $old_password="", $new_password="", &$controls=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap, $user, $old_password, $new_password, &$controls], 0, $count_));
}
function ldap_exop_refresh($ldap, $dn, $ttl) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap, $dn, $ttl], 0, $count_));
}
function ldap_exop_whoami($ldap) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap], 0, $count_));
}
function ldap_explode_dn($dn, $with_attrib) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$dn, $with_attrib], 0, $count_));
}
function ldap_first_attribute($ldap, $entry) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap, $entry], 0, $count_));
}
function ldap_first_entry($ldap, $result) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap, $result], 0, $count_));
}
function ldap_first_reference($ldap, $result) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap, $result], 0, $count_));
}
function ldap_free_result($result) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$result], 0, $count_));
}
function ldap_get_attributes($ldap, $entry) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap, $entry], 0, $count_));
}
function ldap_get_dn($ldap, $entry) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap, $entry], 0, $count_));
}
function ldap_get_entries($ldap, $result) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap, $result], 0, $count_));
}
function ldap_get_option($ldap, $option, &$value=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap, $option, &$value], 0, $count_));
}
function ldap_get_values($ldap, $entry, $attribute) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap, $entry, $attribute], 0, $count_));
}
function ldap_get_values_len($ldap, $entry, $attribute) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap, $entry, $attribute], 0, $count_));
}
function ldap_list($ldap, $base, $filter, $attributes=[], $attributes_only=0, $sizelimit=-1, $timelimit=-1, $deref=LDAP_DEREF_NEVER, $controls=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap, $base, $filter, $attributes, $attributes_only, $sizelimit, $timelimit, $deref, $controls], 0, $count_));
}
function ldap_mod_add($ldap, $dn, $entry, $controls=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap, $dn, $entry, $controls], 0, $count_));
}
function ldap_mod_add_ext($ldap, $dn, $entry, $controls=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap, $dn, $entry, $controls], 0, $count_));
}
function ldap_mod_del($ldap, $dn, $entry, $controls=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap, $dn, $entry, $controls], 0, $count_));
}
function ldap_mod_del_ext($ldap, $dn, $entry, $controls=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap, $dn, $entry, $controls], 0, $count_));
}
function ldap_mod_replace($ldap, $dn, $entry, $controls=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap, $dn, $entry, $controls], 0, $count_));
}
function ldap_mod_replace_ext($ldap, $dn, $entry, $controls=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap, $dn, $entry, $controls], 0, $count_));
}
function ldap_modify() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function ldap_modify_batch($ldap, $dn, $modifications_info, $controls=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap, $dn, $modifications_info, $controls], 0, $count_));
}
function ldap_next_attribute($ldap, $entry) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap, $entry], 0, $count_));
}
function ldap_next_entry($ldap, $entry) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap, $entry], 0, $count_));
}
function ldap_next_reference($ldap, $entry) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap, $entry], 0, $count_));
}
function ldap_parse_exop($ldap, $result, &$response_data=null, &$response_oid=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap, $result, &$response_data, &$response_oid], 0, $count_));
}
function ldap_parse_reference($ldap, $entry, &$referrals) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap, $entry, &$referrals], 0, $count_));
}
function ldap_parse_result($ldap, $result, &$error_code, &$matched_dn=null, &$error_message=null, &$referrals=null, &$controls=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap, $result, &$error_code, &$matched_dn, &$error_message, &$referrals, &$controls], 0, $count_));
}
function ldap_read($ldap, $base, $filter, $attributes=[], $attributes_only=0, $sizelimit=-1, $timelimit=-1, $deref=LDAP_DEREF_NEVER, $controls=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap, $base, $filter, $attributes, $attributes_only, $sizelimit, $timelimit, $deref, $controls], 0, $count_));
}
function ldap_rename($ldap, $dn, $new_rdn, $new_parent, $delete_old_rdn, $controls=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap, $dn, $new_rdn, $new_parent, $delete_old_rdn, $controls], 0, $count_));
}
function ldap_rename_ext($ldap, $dn, $new_rdn, $new_parent, $delete_old_rdn, $controls=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap, $dn, $new_rdn, $new_parent, $delete_old_rdn, $controls], 0, $count_));
}
function ldap_sasl_bind($ldap, $dn=null, $password=null, $mech=null, $realm=null, $authc_id=null, $authz_id=null, $props=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap, $dn, $password, $mech, $realm, $authc_id, $authz_id, $props], 0, $count_));
}
function ldap_search($ldap, $base, $filter, $attributes=[], $attributes_only=0, $sizelimit=-1, $timelimit=-1, $deref=LDAP_DEREF_NEVER, $controls=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap, $base, $filter, $attributes, $attributes_only, $sizelimit, $timelimit, $deref, $controls], 0, $count_));
}
function ldap_set_option($ldap, $option, $value) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap, $option, $value], 0, $count_));
}
function ldap_set_rebind_proc($ldap, $callback) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap, $callback], 0, $count_));
}
function ldap_sort($link, $result, $sortfilter) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$link, $result, $sortfilter], 0, $count_));
}
function ldap_start_tls($ldap) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap], 0, $count_));
}
function ldap_t61_to_8859($value) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$value], 0, $count_));
}
function ldap_unbind($ldap) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ldap], 0, $count_));
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

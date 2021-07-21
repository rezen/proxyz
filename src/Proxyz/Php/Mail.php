<?php namespace Proxyz\Php\Mail;
// This file is dynamically generated ... do not edit 

function ezmlm_hash($addr) {
  return \Proxyz\callFunction(__FUNCTION__, [$addr]);
}
function imap_8bit($string) {
  return \Proxyz\callFunction(__FUNCTION__, [$string]);
}
function imap_alerts() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function imap_append($imap, $folder, $message, $options=null, $internal_date=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap, $folder, $message, $options, $internal_date]);
}
function imap_base64($string) {
  return \Proxyz\callFunction(__FUNCTION__, [$string]);
}
function imap_binary($string) {
  return \Proxyz\callFunction(__FUNCTION__, [$string]);
}
function imap_body($imap, $message_num, $flags=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap, $message_num, $flags]);
}
function imap_bodystruct($imap, $message_num, $section) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap, $message_num, $section]);
}
function imap_check($imap) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap]);
}
function imap_clearflag_full($imap, $sequence, $flag, $options=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap, $sequence, $flag, $options]);
}
function imap_close($imap, $flags=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap, $flags]);
}
function imap_create() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function imap_createmailbox($imap, $mailbox) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap, $mailbox]);
}
function imap_delete($imap, $message_num, $flags=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap, $message_num, $flags]);
}
function imap_deletemailbox($imap, $mailbox) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap, $mailbox]);
}
function imap_errors() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function imap_expunge($imap) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap]);
}
function imap_fetch_overview($imap, $sequence, $flags=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap, $sequence, $flags]);
}
function imap_fetchbody($imap, $message_num, $section, $flags=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap, $message_num, $section, $flags]);
}
function imap_fetchheader($imap, $message_num, $flags=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap, $message_num, $flags]);
}
function imap_fetchmime($imap, $message_num, $section, $flags=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap, $message_num, $section, $flags]);
}
function imap_fetchstructure($imap, $message_num, $flags=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap, $message_num, $flags]);
}
function imap_fetchtext() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function imap_gc($imap, $flags) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap, $flags]);
}
function imap_get_quota($imap, $quota_root) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap, $quota_root]);
}
function imap_get_quotaroot($imap, $mailbox) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap, $mailbox]);
}
function imap_getacl($imap, $mailbox) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap, $mailbox]);
}
function imap_getmailboxes($imap, $reference, $pattern) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap, $reference, $pattern]);
}
function imap_getsubscribed($imap, $reference, $pattern) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap, $reference, $pattern]);
}
function imap_header() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function imap_headerinfo($imap, $message_num, $from_length=null, $subject_length=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap, $message_num, $from_length, $subject_length]);
}
function imap_headers($imap) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap]);
}
function imap_last_error() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function imap_list($imap, $reference, $pattern) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap, $reference, $pattern]);
}
function imap_listmailbox() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function imap_listscan($imap, $reference, $pattern, $content) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap, $reference, $pattern, $content]);
}
function imap_listsubscribed() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function imap_lsub($imap, $reference, $pattern) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap, $reference, $pattern]);
}
function imap_mail($to, $subject, $message, $additional_headers=null, $cc=null, $bcc=null, $return_path=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$to, $subject, $message, $additional_headers, $cc, $bcc, $return_path]);
}
function imap_mail_compose($envelope, $bodies) {
  return \Proxyz\callFunction(__FUNCTION__, [$envelope, $bodies]);
}
function imap_mail_copy($imap, $message_nums, $mailbox, $flags=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap, $message_nums, $mailbox, $flags]);
}
function imap_mail_move($imap, $message_nums, $mailbox, $flags=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap, $message_nums, $mailbox, $flags]);
}
function imap_mailboxmsginfo($imap) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap]);
}
function imap_mime_header_decode($string) {
  return \Proxyz\callFunction(__FUNCTION__, [$string]);
}
function imap_msgno($imap, $message_uid) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap, $message_uid]);
}
function imap_mutf7_to_utf8($string) {
  return \Proxyz\callFunction(__FUNCTION__, [$string]);
}
function imap_num_msg($imap) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap]);
}
function imap_num_recent($imap) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap]);
}
function imap_open($mailbox, $user, $password, $flags=null, $retries=null, $options=[]) {
  return \Proxyz\callFunction(__FUNCTION__, [$mailbox, $user, $password, $flags, $retries, $options]);
}
function imap_ping($imap) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap]);
}
function imap_qprint($string) {
  return \Proxyz\callFunction(__FUNCTION__, [$string]);
}
function imap_rename() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function imap_renamemailbox($imap, $from, $to) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap, $from, $to]);
}
function imap_reopen($imap, $mailbox, $flags=null, $retries=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap, $mailbox, $flags, $retries]);
}
function imap_rfc822_parse_adrlist($string, $default_hostname) {
  return \Proxyz\callFunction(__FUNCTION__, [$string, $default_hostname]);
}
function imap_rfc822_parse_headers($headers, $default_hostname="UNKNOWN") {
  return \Proxyz\callFunction(__FUNCTION__, [$headers, $default_hostname]);
}
function imap_rfc822_write_address($mailbox, $hostname, $personal) {
  return \Proxyz\callFunction(__FUNCTION__, [$mailbox, $hostname, $personal]);
}
function imap_savebody($imap, $file, $message_num, $section="", $flags=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap, $file, $message_num, $section, $flags]);
}
function imap_scan() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function imap_scanmailbox() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function imap_search($imap, $criteria, $flags=null, $charset="") {
  return \Proxyz\callFunction(__FUNCTION__, [$imap, $criteria, $flags, $charset]);
}
function imap_set_quota($imap, $quota_root, $mailbox_size) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap, $quota_root, $mailbox_size]);
}
function imap_setacl($imap, $mailbox, $user_id, $rights) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap, $mailbox, $user_id, $rights]);
}
function imap_setflag_full($imap, $sequence, $flag, $options=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap, $sequence, $flag, $options]);
}
function imap_sort($imap, $criteria, $reverse, $flags=null, $search_criteria=null, $charset=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap, $criteria, $reverse, $flags, $search_criteria, $charset]);
}
function imap_status($imap, $mailbox, $flags) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap, $mailbox, $flags]);
}
function imap_subscribe($imap, $mailbox) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap, $mailbox]);
}
function imap_thread($imap, $flags=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap, $flags]);
}
function imap_timeout($timeout_type, $timeout=-1) {
  return \Proxyz\callFunction(__FUNCTION__, [$timeout_type, $timeout]);
}
function imap_uid($imap, $message_num) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap, $message_num]);
}
function imap_undelete($imap, $message_num, $flags=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap, $message_num, $flags]);
}
function imap_unsubscribe($imap, $mailbox) {
  return \Proxyz\callFunction(__FUNCTION__, [$imap, $mailbox]);
}
function imap_utf7_decode($string) {
  return \Proxyz\callFunction(__FUNCTION__, [$string]);
}
function imap_utf7_encode($string) {
  return \Proxyz\callFunction(__FUNCTION__, [$string]);
}
function imap_utf8($mime_encoded_text) {
  return \Proxyz\callFunction(__FUNCTION__, [$mime_encoded_text]);
}
function imap_utf8_to_mutf7($string) {
  return \Proxyz\callFunction(__FUNCTION__, [$string]);
}
function mail($to, $subject, $message, $additional_headers=[], $additional_params="") {
  return \Proxyz\callFunction(__FUNCTION__, [$to, $subject, $message, $additional_headers, $additional_params]);
}
function methods() {
  return [
    "ezmlm_hash",
    "imap_8bit",
    "imap_alerts",
    "imap_append",
    "imap_base64",
    "imap_binary",
    "imap_body",
    "imap_bodystruct",
    "imap_check",
    "imap_clearflag_full",
    "imap_close",
    "imap_create",
    "imap_createmailbox",
    "imap_delete",
    "imap_deletemailbox",
    "imap_errors",
    "imap_expunge",
    "imap_fetch_overview",
    "imap_fetchbody",
    "imap_fetchheader",
    "imap_fetchmime",
    "imap_fetchstructure",
    "imap_fetchtext",
    "imap_gc",
    "imap_get_quota",
    "imap_get_quotaroot",
    "imap_getacl",
    "imap_getmailboxes",
    "imap_getsubscribed",
    "imap_header",
    "imap_headerinfo",
    "imap_headers",
    "imap_last_error",
    "imap_list",
    "imap_listmailbox",
    "imap_listscan",
    "imap_listsubscribed",
    "imap_lsub",
    "imap_mail",
    "imap_mail_compose",
    "imap_mail_copy",
    "imap_mail_move",
    "imap_mailboxmsginfo",
    "imap_mime_header_decode",
    "imap_msgno",
    "imap_mutf7_to_utf8",
    "imap_num_msg",
    "imap_num_recent",
    "imap_open",
    "imap_ping",
    "imap_qprint",
    "imap_rename",
    "imap_renamemailbox",
    "imap_reopen",
    "imap_rfc822_parse_adrlist",
    "imap_rfc822_parse_headers",
    "imap_rfc822_write_address",
    "imap_savebody",
    "imap_scan",
    "imap_scanmailbox",
    "imap_search",
    "imap_set_quota",
    "imap_setacl",
    "imap_setflag_full",
    "imap_sort",
    "imap_status",
    "imap_subscribe",
    "imap_thread",
    "imap_timeout",
    "imap_uid",
    "imap_undelete",
    "imap_unsubscribe",
    "imap_utf7_decode",
    "imap_utf7_encode",
    "imap_utf8",
    "imap_utf8_to_mutf7",
    "mail"
];}

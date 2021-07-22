<?php namespace Proxyz\Php\Openssl;
// This file is dynamically generated ... do not edit 

function openssl_cipher_iv_length($cipher_algo) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$cipher_algo], 0, $count_));
}
function openssl_cms_decrypt($input_filename, $output_filename, $certificate, $private_key=null, $encoding=OPENSSL_ENCODING_SMIME) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$input_filename, $output_filename, $certificate, $private_key, $encoding], 0, $count_));
}
function openssl_cms_encrypt($input_filename, $output_filename, $certificate, $headers, $flags=0, $encoding=OPENSSL_ENCODING_SMIME, $cipher_algo=OPENSSL_CIPHER_RC2_40) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$input_filename, $output_filename, $certificate, $headers, $flags, $encoding, $cipher_algo], 0, $count_));
}
function openssl_cms_read($input_filename, &$certificates) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$input_filename, &$certificates], 0, $count_));
}
function openssl_cms_sign($input_filename, $output_filename, $certificate, $private_key, $headers, $flags=0, $encoding=OPENSSL_ENCODING_SMIME, $untrusted_certificates_filename=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$input_filename, $output_filename, $certificate, $private_key, $headers, $flags, $encoding, $untrusted_certificates_filename], 0, $count_));
}
function openssl_cms_verify($input_filename, $flags=0, $certificates=null, $ca_info=[], $untrusted_certificates_filename=null, $content=null, $pk7=null, $sigfile=null, $encoding=OPENSSL_ENCODING_SMIME) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$input_filename, $flags, $certificates, $ca_info, $untrusted_certificates_filename, $content, $pk7, $sigfile, $encoding], 0, $count_));
}
function openssl_csr_export($csr, &$output, $no_text=true) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$csr, &$output, $no_text], 0, $count_));
}
function openssl_csr_export_to_file($csr, $output_filename, $no_text=true) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$csr, $output_filename, $no_text], 0, $count_));
}
function openssl_csr_get_public_key($csr, $short_names=true) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$csr, $short_names], 0, $count_));
}
function openssl_csr_get_subject($csr, $short_names=true) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$csr, $short_names], 0, $count_));
}
function openssl_csr_new($distinguished_names, &$private_key, $options=null, $extra_attributes=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$distinguished_names, &$private_key, $options, $extra_attributes], 0, $count_));
}
function openssl_csr_sign($csr, $ca_certificate, $private_key, $days, $options=null, $serial=0) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$csr, $ca_certificate, $private_key, $days, $options, $serial], 0, $count_));
}
function openssl_decrypt($data, $cipher_algo, $passphrase, $options=0, $iv="", $tag="", $aad="") {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$data, $cipher_algo, $passphrase, $options, $iv, $tag, $aad], 0, $count_));
}
function openssl_dh_compute_key($public_key, $private_key) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$public_key, $private_key], 0, $count_));
}
function openssl_digest($data, $digest_algo, $binary=false) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$data, $digest_algo, $binary], 0, $count_));
}
function openssl_encrypt($data, $cipher_algo, $passphrase, $options=0, $iv="", &$tag=null, $aad="", $tag_length=16) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$data, $cipher_algo, $passphrase, $options, $iv, &$tag, $aad, $tag_length], 0, $count_));
}
function openssl_error_string() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function openssl_free_key($key) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$key], 0, $count_));
}
function openssl_get_cert_locations() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function openssl_get_cipher_methods($aliases=false) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$aliases], 0, $count_));
}
function openssl_get_curve_names() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function openssl_get_md_methods($aliases=false) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$aliases], 0, $count_));
}
function openssl_get_privatekey() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function openssl_get_publickey() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function openssl_open($data, &$output, $encrypted_key, $private_key, $cipher_algo, $iv=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$data, &$output, $encrypted_key, $private_key, $cipher_algo, $iv], 0, $count_));
}
function openssl_pbkdf2($password, $salt, $key_length, $iterations, $digest_algo="sha1") {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$password, $salt, $key_length, $iterations, $digest_algo], 0, $count_));
}
function openssl_pkcs12_export($certificate, &$output, $private_key, $passphrase, $options=[]) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$certificate, &$output, $private_key, $passphrase, $options], 0, $count_));
}
function openssl_pkcs12_export_to_file($certificate, $output_filename, $private_key, $passphrase, $options=[]) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$certificate, $output_filename, $private_key, $passphrase, $options], 0, $count_));
}
function openssl_pkcs12_read($pkcs12, &$certificates, $passphrase) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$pkcs12, &$certificates, $passphrase], 0, $count_));
}
function openssl_pkcs7_decrypt($input_filename, $output_filename, $certificate, $private_key=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$input_filename, $output_filename, $certificate, $private_key], 0, $count_));
}
function openssl_pkcs7_encrypt($input_filename, $output_filename, $certificate, $headers, $flags=0, $cipher_algo=OPENSSL_CIPHER_RC2_40) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$input_filename, $output_filename, $certificate, $headers, $flags, $cipher_algo], 0, $count_));
}
function openssl_pkcs7_read($data, &$certificates) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$data, &$certificates], 0, $count_));
}
function openssl_pkcs7_sign($input_filename, $output_filename, $certificate, $private_key, $headers, $flags=PKCS7_DETACHED, $untrusted_certificates_filename=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$input_filename, $output_filename, $certificate, $private_key, $headers, $flags, $untrusted_certificates_filename], 0, $count_));
}
function openssl_pkcs7_verify($input_filename, $flags, $signers_certificates_filename=null, $ca_info=[], $untrusted_certificates_filename=null, $content=null, $output_filename=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$input_filename, $flags, $signers_certificates_filename, $ca_info, $untrusted_certificates_filename, $content, $output_filename], 0, $count_));
}
function openssl_pkey_derive($public_key, $private_key, $key_length=0) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$public_key, $private_key, $key_length], 0, $count_));
}
function openssl_pkey_export($key, &$output, $passphrase=null, $options=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$key, &$output, $passphrase, $options], 0, $count_));
}
function openssl_pkey_export_to_file($key, $output_filename, $passphrase=null, $options=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$key, $output_filename, $passphrase, $options], 0, $count_));
}
function openssl_pkey_free($key) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$key], 0, $count_));
}
function openssl_pkey_get_details($key) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$key], 0, $count_));
}
function openssl_pkey_get_private($private_key, $passphrase=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$private_key, $passphrase], 0, $count_));
}
function openssl_pkey_get_public($public_key) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$public_key], 0, $count_));
}
function openssl_pkey_new($options=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$options], 0, $count_));
}
function openssl_private_decrypt($data, &$decrypted_data, $private_key, $padding=OPENSSL_PKCS1_PADDING) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$data, &$decrypted_data, $private_key, $padding], 0, $count_));
}
function openssl_private_encrypt($data, &$encrypted_data, $private_key, $padding=OPENSSL_PKCS1_PADDING) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$data, &$encrypted_data, $private_key, $padding], 0, $count_));
}
function openssl_public_decrypt($data, &$decrypted_data, $public_key, $padding=OPENSSL_PKCS1_PADDING) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$data, &$decrypted_data, $public_key, $padding], 0, $count_));
}
function openssl_public_encrypt($data, &$encrypted_data, $public_key, $padding=OPENSSL_PKCS1_PADDING) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$data, &$encrypted_data, $public_key, $padding], 0, $count_));
}
function openssl_random_pseudo_bytes($length, &$strong_result=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$length, &$strong_result], 0, $count_));
}
function openssl_seal($data, &$sealed_data, &$encrypted_keys, $public_key, $cipher_algo, &$iv=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$data, &$sealed_data, &$encrypted_keys, $public_key, $cipher_algo, &$iv], 0, $count_));
}
function openssl_sign($data, &$signature, $private_key, $algorithm=OPENSSL_ALGO_SHA1) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$data, &$signature, $private_key, $algorithm], 0, $count_));
}
function openssl_spki_export($spki) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$spki], 0, $count_));
}
function openssl_spki_export_challenge($spki) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$spki], 0, $count_));
}
function openssl_spki_new($private_key, $challenge, $digest_algo=OPENSSL_ALGO_MD5) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$private_key, $challenge, $digest_algo], 0, $count_));
}
function openssl_spki_verify($spki) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$spki], 0, $count_));
}
function openssl_verify($data, $signature, $public_key, $algorithm=OPENSSL_ALGO_SHA1) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$data, $signature, $public_key, $algorithm], 0, $count_));
}
function openssl_x509_check_private_key($certificate, $private_key) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$certificate, $private_key], 0, $count_));
}
function openssl_x509_checkpurpose($certificate, $purpose, $ca_info=[], $untrusted_certificates_file=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$certificate, $purpose, $ca_info, $untrusted_certificates_file], 0, $count_));
}
function openssl_x509_export($certificate, &$output, $no_text=true) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$certificate, &$output, $no_text], 0, $count_));
}
function openssl_x509_export_to_file($certificate, $output_filename, $no_text=true) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$certificate, $output_filename, $no_text], 0, $count_));
}
function openssl_x509_fingerprint($certificate, $digest_algo="sha1", $binary=false) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$certificate, $digest_algo, $binary], 0, $count_));
}
function openssl_x509_free($certificate) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$certificate], 0, $count_));
}
function openssl_x509_parse($certificate, $short_names=true) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$certificate, $short_names], 0, $count_));
}
function openssl_x509_read($certificate) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$certificate], 0, $count_));
}
function openssl_x509_verify($certificate, $public_key) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$certificate, $public_key], 0, $count_));
}
function methods() {
  return [
    "openssl_cipher_iv_length",
    "openssl_cms_decrypt",
    "openssl_cms_encrypt",
    "openssl_cms_read",
    "openssl_cms_sign",
    "openssl_cms_verify",
    "openssl_csr_export",
    "openssl_csr_export_to_file",
    "openssl_csr_get_public_key",
    "openssl_csr_get_subject",
    "openssl_csr_new",
    "openssl_csr_sign",
    "openssl_decrypt",
    "openssl_dh_compute_key",
    "openssl_digest",
    "openssl_encrypt",
    "openssl_error_string",
    "openssl_free_key",
    "openssl_get_cert_locations",
    "openssl_get_cipher_methods",
    "openssl_get_curve_names",
    "openssl_get_md_methods",
    "openssl_get_privatekey",
    "openssl_get_publickey",
    "openssl_open",
    "openssl_pbkdf2",
    "openssl_pkcs12_export",
    "openssl_pkcs12_export_to_file",
    "openssl_pkcs12_read",
    "openssl_pkcs7_decrypt",
    "openssl_pkcs7_encrypt",
    "openssl_pkcs7_read",
    "openssl_pkcs7_sign",
    "openssl_pkcs7_verify",
    "openssl_pkey_derive",
    "openssl_pkey_export",
    "openssl_pkey_export_to_file",
    "openssl_pkey_free",
    "openssl_pkey_get_details",
    "openssl_pkey_get_private",
    "openssl_pkey_get_public",
    "openssl_pkey_new",
    "openssl_private_decrypt",
    "openssl_private_encrypt",
    "openssl_public_decrypt",
    "openssl_public_encrypt",
    "openssl_random_pseudo_bytes",
    "openssl_seal",
    "openssl_sign",
    "openssl_spki_export",
    "openssl_spki_export_challenge",
    "openssl_spki_new",
    "openssl_spki_verify",
    "openssl_verify",
    "openssl_x509_check_private_key",
    "openssl_x509_checkpurpose",
    "openssl_x509_export",
    "openssl_x509_export_to_file",
    "openssl_x509_fingerprint",
    "openssl_x509_free",
    "openssl_x509_parse",
    "openssl_x509_read",
    "openssl_x509_verify"
];}

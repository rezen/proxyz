<?php namespace Proxyz\Php\Openssl;
// This file is dynamically generated ... do not edit 

function openssl_cipher_iv_length($cipher_algo) {
  return \Proxyz\callFunction(__FUNCTION__, [$cipher_algo]);
}
function openssl_cms_decrypt($input_filename, $output_filename, $certificate, $private_key=null, $encoding=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$input_filename, $output_filename, $certificate, $private_key, $encoding]);
}
function openssl_cms_encrypt($input_filename, $output_filename, $certificate, $headers, $flags=null, $encoding=null, $cipher_algo=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$input_filename, $output_filename, $certificate, $headers, $flags, $encoding, $cipher_algo]);
}
function openssl_cms_read($input_filename, &$certificates) {
  return \Proxyz\callFunction(__FUNCTION__, [$input_filename, &$certificates]);
}
function openssl_cms_sign($input_filename, $output_filename, $certificate, $private_key, $headers, $flags=null, $encoding=null, $untrusted_certificates_filename=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$input_filename, $output_filename, $certificate, $private_key, $headers, $flags, $encoding, $untrusted_certificates_filename]);
}
function openssl_cms_verify($input_filename, $flags=null, $certificates=null, $ca_info=[], $untrusted_certificates_filename=null, $content=null, $pk7=null, $sigfile=null, $encoding=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$input_filename, $flags, $certificates, $ca_info, $untrusted_certificates_filename, $content, $pk7, $sigfile, $encoding]);
}
function openssl_csr_export($csr, &$output, $no_text=true) {
  return \Proxyz\callFunction(__FUNCTION__, [$csr, &$output, $no_text]);
}
function openssl_csr_export_to_file($csr, $output_filename, $no_text=true) {
  return \Proxyz\callFunction(__FUNCTION__, [$csr, $output_filename, $no_text]);
}
function openssl_csr_get_public_key($csr, $short_names=true) {
  return \Proxyz\callFunction(__FUNCTION__, [$csr, $short_names]);
}
function openssl_csr_get_subject($csr, $short_names=true) {
  return \Proxyz\callFunction(__FUNCTION__, [$csr, $short_names]);
}
function openssl_csr_new($distinguished_names, &$private_key, $options=null, $extra_attributes=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$distinguished_names, &$private_key, $options, $extra_attributes]);
}
function openssl_csr_sign($csr, $ca_certificate, $private_key, $days, $options=null, $serial=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$csr, $ca_certificate, $private_key, $days, $options, $serial]);
}
function openssl_decrypt($data, $cipher_algo, $passphrase, $options=null, $iv="", $tag="", $aad="") {
  return \Proxyz\callFunction(__FUNCTION__, [$data, $cipher_algo, $passphrase, $options, $iv, $tag, $aad]);
}
function openssl_dh_compute_key($public_key, $private_key) {
  return \Proxyz\callFunction(__FUNCTION__, [$public_key, $private_key]);
}
function openssl_digest($data, $digest_algo, $binary=false) {
  return \Proxyz\callFunction(__FUNCTION__, [$data, $digest_algo, $binary]);
}
function openssl_encrypt($data, $cipher_algo, $passphrase, $options=null, $iv="", &$tag=null, $aad="", $tag_length=16) {
  return \Proxyz\callFunction(__FUNCTION__, [$data, $cipher_algo, $passphrase, $options, $iv, &$tag, $aad, $tag_length]);
}
function openssl_error_string() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function openssl_free_key($key) {
  return \Proxyz\callFunction(__FUNCTION__, [$key]);
}
function openssl_get_cert_locations() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function openssl_get_cipher_methods($aliases=false) {
  return \Proxyz\callFunction(__FUNCTION__, [$aliases]);
}
function openssl_get_curve_names() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function openssl_get_md_methods($aliases=false) {
  return \Proxyz\callFunction(__FUNCTION__, [$aliases]);
}
function openssl_get_privatekey() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function openssl_get_publickey() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function openssl_open($data, &$output, $encrypted_key, $private_key, $cipher_algo, $iv=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$data, &$output, $encrypted_key, $private_key, $cipher_algo, $iv]);
}
function openssl_pbkdf2($password, $salt, $key_length, $iterations, $digest_algo="sha1") {
  return \Proxyz\callFunction(__FUNCTION__, [$password, $salt, $key_length, $iterations, $digest_algo]);
}
function openssl_pkcs12_export($certificate, &$output, $private_key, $passphrase, $options=[]) {
  return \Proxyz\callFunction(__FUNCTION__, [$certificate, &$output, $private_key, $passphrase, $options]);
}
function openssl_pkcs12_export_to_file($certificate, $output_filename, $private_key, $passphrase, $options=[]) {
  return \Proxyz\callFunction(__FUNCTION__, [$certificate, $output_filename, $private_key, $passphrase, $options]);
}
function openssl_pkcs12_read($pkcs12, &$certificates, $passphrase) {
  return \Proxyz\callFunction(__FUNCTION__, [$pkcs12, &$certificates, $passphrase]);
}
function openssl_pkcs7_decrypt($input_filename, $output_filename, $certificate, $private_key=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$input_filename, $output_filename, $certificate, $private_key]);
}
function openssl_pkcs7_encrypt($input_filename, $output_filename, $certificate, $headers, $flags=null, $cipher_algo=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$input_filename, $output_filename, $certificate, $headers, $flags, $cipher_algo]);
}
function openssl_pkcs7_read($data, &$certificates) {
  return \Proxyz\callFunction(__FUNCTION__, [$data, &$certificates]);
}
function openssl_pkcs7_sign($input_filename, $output_filename, $certificate, $private_key, $headers, $flags=null, $untrusted_certificates_filename=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$input_filename, $output_filename, $certificate, $private_key, $headers, $flags, $untrusted_certificates_filename]);
}
function openssl_pkcs7_verify($input_filename, $flags, $signers_certificates_filename=null, $ca_info=[], $untrusted_certificates_filename=null, $content=null, $output_filename=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$input_filename, $flags, $signers_certificates_filename, $ca_info, $untrusted_certificates_filename, $content, $output_filename]);
}
function openssl_pkey_derive($public_key, $private_key, $key_length=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$public_key, $private_key, $key_length]);
}
function openssl_pkey_export($key, &$output, $passphrase=null, $options=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$key, &$output, $passphrase, $options]);
}
function openssl_pkey_export_to_file($key, $output_filename, $passphrase=null, $options=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$key, $output_filename, $passphrase, $options]);
}
function openssl_pkey_free($key) {
  return \Proxyz\callFunction(__FUNCTION__, [$key]);
}
function openssl_pkey_get_details($key) {
  return \Proxyz\callFunction(__FUNCTION__, [$key]);
}
function openssl_pkey_get_private($private_key, $passphrase=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$private_key, $passphrase]);
}
function openssl_pkey_get_public($public_key) {
  return \Proxyz\callFunction(__FUNCTION__, [$public_key]);
}
function openssl_pkey_new($options=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$options]);
}
function openssl_private_decrypt($data, &$decrypted_data, $private_key, $padding=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$data, &$decrypted_data, $private_key, $padding]);
}
function openssl_private_encrypt($data, &$encrypted_data, $private_key, $padding=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$data, &$encrypted_data, $private_key, $padding]);
}
function openssl_public_decrypt($data, &$decrypted_data, $public_key, $padding=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$data, &$decrypted_data, $public_key, $padding]);
}
function openssl_public_encrypt($data, &$encrypted_data, $public_key, $padding=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$data, &$encrypted_data, $public_key, $padding]);
}
function openssl_random_pseudo_bytes($length, &$strong_result=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$length, &$strong_result]);
}
function openssl_seal($data, &$sealed_data, &$encrypted_keys, $public_key, $cipher_algo, &$iv=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$data, &$sealed_data, &$encrypted_keys, $public_key, $cipher_algo, &$iv]);
}
function openssl_sign($data, &$signature, $private_key, $algorithm=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$data, &$signature, $private_key, $algorithm]);
}
function openssl_spki_export($spki) {
  return \Proxyz\callFunction(__FUNCTION__, [$spki]);
}
function openssl_spki_export_challenge($spki) {
  return \Proxyz\callFunction(__FUNCTION__, [$spki]);
}
function openssl_spki_new($private_key, $challenge, $digest_algo=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$private_key, $challenge, $digest_algo]);
}
function openssl_spki_verify($spki) {
  return \Proxyz\callFunction(__FUNCTION__, [$spki]);
}
function openssl_verify($data, $signature, $public_key, $algorithm=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$data, $signature, $public_key, $algorithm]);
}
function openssl_x509_check_private_key($certificate, $private_key) {
  return \Proxyz\callFunction(__FUNCTION__, [$certificate, $private_key]);
}
function openssl_x509_checkpurpose($certificate, $purpose, $ca_info=[], $untrusted_certificates_file=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$certificate, $purpose, $ca_info, $untrusted_certificates_file]);
}
function openssl_x509_export($certificate, &$output, $no_text=true) {
  return \Proxyz\callFunction(__FUNCTION__, [$certificate, &$output, $no_text]);
}
function openssl_x509_export_to_file($certificate, $output_filename, $no_text=true) {
  return \Proxyz\callFunction(__FUNCTION__, [$certificate, $output_filename, $no_text]);
}
function openssl_x509_fingerprint($certificate, $digest_algo="sha1", $binary=false) {
  return \Proxyz\callFunction(__FUNCTION__, [$certificate, $digest_algo, $binary]);
}
function openssl_x509_free($certificate) {
  return \Proxyz\callFunction(__FUNCTION__, [$certificate]);
}
function openssl_x509_parse($certificate, $short_names=true) {
  return \Proxyz\callFunction(__FUNCTION__, [$certificate, $short_names]);
}
function openssl_x509_read($certificate) {
  return \Proxyz\callFunction(__FUNCTION__, [$certificate]);
}
function openssl_x509_verify($certificate, $public_key) {
  return \Proxyz\callFunction(__FUNCTION__, [$certificate, $public_key]);
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

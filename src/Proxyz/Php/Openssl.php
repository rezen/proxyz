<?php namespace Proxyz\Php\Openssl;
// This file is dynamically generated ... do not edit 

function openssl_cipher_iv_length($method) {
  return \Proxyz\callFunction(__FUNCTION__, [$method]);
}
function openssl_cms_decrypt() {
  return \Proxyz\callFunction(__FUNCTION__, func_get_args());
}
function openssl_cms_encrypt() {
  return \Proxyz\callFunction(__FUNCTION__, func_get_args());
}
function openssl_cms_read() {
  return \Proxyz\callFunction(__FUNCTION__, func_get_args());
}
function openssl_cms_sign() {
  return \Proxyz\callFunction(__FUNCTION__, func_get_args());
}
function openssl_cms_verify() {
  return \Proxyz\callFunction(__FUNCTION__, func_get_args());
}
function openssl_csr_export($csr, &$out, $notext=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$csr, &$out, $notext]);
}
function openssl_csr_export_to_file($csr, $outfilename, $notext=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$csr, $outfilename, $notext]);
}
function openssl_csr_get_public_key($csr, $use_shortnames=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$csr, $use_shortnames]);
}
function openssl_csr_get_subject($csr, $use_shortnames=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$csr, $use_shortnames]);
}
function openssl_csr_new($dn, &$privkey, $configargs=null, $extraattribs=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$dn, &$privkey, $configargs, $extraattribs]);
}
function openssl_csr_sign($csr, $x509, $priv_key, $days, $config_args=null, $serial=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$csr, $x509, $priv_key, $days, $config_args, $serial]);
}
function openssl_decrypt($data, $method, $password, $options=null, $iv=null, $tag=null, $aad=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$data, $method, $password, $options, $iv, $tag, $aad]);
}
function openssl_dh_compute_key($pub_key, $dh_key) {
  return \Proxyz\callFunction(__FUNCTION__, [$pub_key, $dh_key]);
}
function openssl_digest($data, $method, $raw_output=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$data, $method, $raw_output]);
}
function openssl_encrypt($data, $method, $password, $options=null, $iv=null, &$tag=null, $aad=null, $tag_length=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$data, $method, $password, $options, $iv, &$tag, $aad, $tag_length]);
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
function openssl_get_cipher_methods($aliases=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$aliases]);
}
function openssl_get_curve_names() {
  return \Proxyz\callFunction(__FUNCTION__, []);
}
function openssl_get_md_methods($aliases=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$aliases]);
}
function openssl_get_privatekey($key, $passphrase=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$key, $passphrase]);
}
function openssl_get_publickey($cert) {
  return \Proxyz\callFunction(__FUNCTION__, [$cert]);
}
function openssl_open($data, &$opendata, $ekey, $privkey, $method=null, $iv=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$data, &$opendata, $ekey, $privkey, $method, $iv]);
}
function openssl_pbkdf2($password, $salt, $key_length, $iterations, $digest_algorithm=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$password, $salt, $key_length, $iterations, $digest_algorithm]);
}
function openssl_pkcs12_export($x509, &$out, $priv_key, $pass, $args=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$x509, &$out, $priv_key, $pass, $args]);
}
function openssl_pkcs12_export_to_file($x509, $filename, $priv_key, $pass, $args=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$x509, $filename, $priv_key, $pass, $args]);
}
function openssl_pkcs12_read($PKCS12, &$certs, $pass) {
  return \Proxyz\callFunction(__FUNCTION__, [$PKCS12, &$certs, $pass]);
}
function openssl_pkcs7_decrypt($infilename, $outfilename, $recipcert, $recipkey=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$infilename, $outfilename, $recipcert, $recipkey]);
}
function openssl_pkcs7_encrypt($infile, $outfile, $recipcerts, $headers, $flags=null, $cipher=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$infile, $outfile, $recipcerts, $headers, $flags, $cipher]);
}
function openssl_pkcs7_read($infilename, &$certs) {
  return \Proxyz\callFunction(__FUNCTION__, [$infilename, &$certs]);
}
function openssl_pkcs7_sign($infile, $outfile, $signcert, $signkey, $headers, $flags=null, $extracertsfilename=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$infile, $outfile, $signcert, $signkey, $headers, $flags, $extracertsfilename]);
}
function openssl_pkcs7_verify($filename, $flags, $signerscerts=null, $cainfo=null, $extracerts=null, $content=null, $pk7=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$filename, $flags, $signerscerts, $cainfo, $extracerts, $content, $pk7]);
}
function openssl_pkey_derive($peer_pub_key, $priv_key, $keylen=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$peer_pub_key, $priv_key, $keylen]);
}
function openssl_pkey_export($key, &$out, $passphrase=null, $config_args=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$key, &$out, $passphrase, $config_args]);
}
function openssl_pkey_export_to_file($key, $outfilename, $passphrase=null, $config_args=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$key, $outfilename, $passphrase, $config_args]);
}
function openssl_pkey_free($key) {
  return \Proxyz\callFunction(__FUNCTION__, [$key]);
}
function openssl_pkey_get_details($key) {
  return \Proxyz\callFunction(__FUNCTION__, [$key]);
}
function openssl_pkey_get_private($key, $passphrase=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$key, $passphrase]);
}
function openssl_pkey_get_public($cert) {
  return \Proxyz\callFunction(__FUNCTION__, [$cert]);
}
function openssl_pkey_new($configargs=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$configargs]);
}
function openssl_private_decrypt($data, &$crypted, $key, $padding=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$data, &$crypted, $key, $padding]);
}
function openssl_private_encrypt($data, &$crypted, $key, $padding=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$data, &$crypted, $key, $padding]);
}
function openssl_public_decrypt($data, &$crypted, $key, $padding=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$data, &$crypted, $key, $padding]);
}
function openssl_public_encrypt($data, &$crypted, $key, $padding=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$data, &$crypted, $key, $padding]);
}
function openssl_random_pseudo_bytes($length, &$result_is_strong=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$length, &$result_is_strong]);
}
function openssl_seal($data, &$sealdata, &$ekeys, $pubkeys, $method=null, &$iv=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$data, &$sealdata, &$ekeys, $pubkeys, $method, &$iv]);
}
function openssl_sign($data, &$signature, $key, $method=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$data, &$signature, $key, $method]);
}
function openssl_spki_export($spki) {
  return \Proxyz\callFunction(__FUNCTION__, [$spki]);
}
function openssl_spki_export_challenge($spki) {
  return \Proxyz\callFunction(__FUNCTION__, [$spki]);
}
function openssl_spki_new($privkey, $challenge, $algo=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$privkey, $challenge, $algo]);
}
function openssl_spki_verify($spki) {
  return \Proxyz\callFunction(__FUNCTION__, [$spki]);
}
function openssl_verify($data, $signature, $key, $method=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$data, $signature, $key, $method]);
}
function openssl_x509_check_private_key($cert, $key) {
  return \Proxyz\callFunction(__FUNCTION__, [$cert, $key]);
}
function openssl_x509_checkpurpose($x509cert, $purpose, $cainfo=null, $untrustedfile=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$x509cert, $purpose, $cainfo, $untrustedfile]);
}
function openssl_x509_export($x509, &$out, $notext=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$x509, &$out, $notext]);
}
function openssl_x509_export_to_file($x509, $outfilename, $notext=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$x509, $outfilename, $notext]);
}
function openssl_x509_fingerprint($x509, $method=null, $raw_output=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$x509, $method, $raw_output]);
}
function openssl_x509_free($x509) {
  return \Proxyz\callFunction(__FUNCTION__, [$x509]);
}
function openssl_x509_parse($x509, $shortname=null) {
  return \Proxyz\callFunction(__FUNCTION__, [$x509, $shortname]);
}
function openssl_x509_read($cert) {
  return \Proxyz\callFunction(__FUNCTION__, [$cert]);
}
function openssl_x509_verify($cert, $key) {
  return \Proxyz\callFunction(__FUNCTION__, [$cert, $key]);
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

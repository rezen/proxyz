<?php namespace Proxyz\Php\Cryptography;
// This file is dynamically generated ... do not edit 

function hash($algo, $data, $binary=false) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$algo, $data, $binary], 0, $count_));
}
function hash_algos() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function hash_copy($context) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$context], 0, $count_));
}
function hash_equals($known_string, $user_string) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$known_string, $user_string], 0, $count_));
}
function hash_file($algo, $filename, $binary=false) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$algo, $filename, $binary], 0, $count_));
}
function hash_final($context, $binary=false) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$context, $binary], 0, $count_));
}
function hash_hkdf($algo, $key, $length=0, $info="", $salt="") {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$algo, $key, $length, $info, $salt], 0, $count_));
}
function hash_hmac($algo, $data, $key, $binary=false) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$algo, $data, $key, $binary], 0, $count_));
}
function hash_hmac_algos() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function hash_hmac_file($algo, $data, $key, $binary=false) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$algo, $data, $key, $binary], 0, $count_));
}
function hash_init($algo, $flags=0, $key="") {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$algo, $flags, $key], 0, $count_));
}
function hash_pbkdf2($algo, $password, $salt, $iterations, $length=0, $binary=false) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$algo, $password, $salt, $iterations, $length, $binary], 0, $count_));
}
function hash_update($context, $data) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$context, $data], 0, $count_));
}
function hash_update_file($context, $filename, $stream_context=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$context, $filename, $stream_context], 0, $count_));
}
function hash_update_stream($context, $stream, $length=-1) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$context, $stream, $length], 0, $count_));
}
function password_algos() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function password_get_info($hash) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$hash], 0, $count_));
}
function password_hash($password, $algo, $options=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$password, $algo, $options], 0, $count_));
}
function password_needs_rehash($hash, $algo, $options=null) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$hash, $algo, $options], 0, $count_));
}
function password_verify($password, $hash) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$password, $hash], 0, $count_));
}
function random_bytes($length) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$length], 0, $count_));
}
function random_int($min, $max) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$min, $max], 0, $count_));
}
function sodium_add(&$string1, $string2) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([&$string1, $string2], 0, $count_));
}
function sodium_base642bin($string, $id, $ignore="") {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$string, $id, $ignore], 0, $count_));
}
function sodium_bin2base64($string, $id) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$string, $id], 0, $count_));
}
function sodium_bin2hex($string) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$string], 0, $count_));
}
function sodium_compare($string1, $string2) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$string1, $string2], 0, $count_));
}
function sodium_crypto_aead_aes256gcm_decrypt($ciphertext, $additional_data, $nonce, $key) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ciphertext, $additional_data, $nonce, $key], 0, $count_));
}
function sodium_crypto_aead_aes256gcm_encrypt($message, $additional_data, $nonce, $key) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$message, $additional_data, $nonce, $key], 0, $count_));
}
function sodium_crypto_aead_aes256gcm_is_available() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function sodium_crypto_aead_aes256gcm_keygen() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function sodium_crypto_aead_chacha20poly1305_decrypt($ciphertext, $additional_data, $nonce, $key) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ciphertext, $additional_data, $nonce, $key], 0, $count_));
}
function sodium_crypto_aead_chacha20poly1305_encrypt($message, $additional_data, $nonce, $key) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$message, $additional_data, $nonce, $key], 0, $count_));
}
function sodium_crypto_aead_chacha20poly1305_ietf_decrypt($ciphertext, $additional_data, $nonce, $key) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ciphertext, $additional_data, $nonce, $key], 0, $count_));
}
function sodium_crypto_aead_chacha20poly1305_ietf_encrypt($message, $additional_data, $nonce, $key) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$message, $additional_data, $nonce, $key], 0, $count_));
}
function sodium_crypto_aead_chacha20poly1305_ietf_keygen() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function sodium_crypto_aead_chacha20poly1305_keygen() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function sodium_crypto_aead_xchacha20poly1305_ietf_decrypt($ciphertext, $additional_data, $nonce, $key) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ciphertext, $additional_data, $nonce, $key], 0, $count_));
}
function sodium_crypto_aead_xchacha20poly1305_ietf_encrypt($message, $additional_data, $nonce, $key) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$message, $additional_data, $nonce, $key], 0, $count_));
}
function sodium_crypto_aead_xchacha20poly1305_ietf_keygen() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function sodium_crypto_auth($message, $key) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$message, $key], 0, $count_));
}
function sodium_crypto_auth_keygen() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function sodium_crypto_auth_verify($mac, $message, $key) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$mac, $message, $key], 0, $count_));
}
function sodium_crypto_box($message, $nonce, $key_pair) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$message, $nonce, $key_pair], 0, $count_));
}
function sodium_crypto_box_keypair() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function sodium_crypto_box_keypair_from_secretkey_and_publickey($secret_key, $public_key) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$secret_key, $public_key], 0, $count_));
}
function sodium_crypto_box_open($ciphertext, $nonce, $key_pair) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ciphertext, $nonce, $key_pair], 0, $count_));
}
function sodium_crypto_box_publickey($key_pair) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$key_pair], 0, $count_));
}
function sodium_crypto_box_publickey_from_secretkey($secret_key) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$secret_key], 0, $count_));
}
function sodium_crypto_box_seal($message, $public_key) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$message, $public_key], 0, $count_));
}
function sodium_crypto_box_seal_open($ciphertext, $key_pair) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ciphertext, $key_pair], 0, $count_));
}
function sodium_crypto_box_secretkey($key_pair) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$key_pair], 0, $count_));
}
function sodium_crypto_box_seed_keypair($seed) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$seed], 0, $count_));
}
function sodium_crypto_generichash($message, $key="", $length=SODIUM_CRYPTO_GENERICHASH_BYTES) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$message, $key, $length], 0, $count_));
}
function sodium_crypto_generichash_final(&$state, $length=SODIUM_CRYPTO_GENERICHASH_BYTES) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([&$state, $length], 0, $count_));
}
function sodium_crypto_generichash_init($key="", $length=SODIUM_CRYPTO_GENERICHASH_BYTES) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$key, $length], 0, $count_));
}
function sodium_crypto_generichash_keygen() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function sodium_crypto_generichash_update(&$state, $message) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([&$state, $message], 0, $count_));
}
function sodium_crypto_kdf_derive_from_key($subkey_length, $subkey_id, $context, $key) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$subkey_length, $subkey_id, $context, $key], 0, $count_));
}
function sodium_crypto_kdf_keygen() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function sodium_crypto_kx_client_session_keys($client_key_pair, $server_key) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$client_key_pair, $server_key], 0, $count_));
}
function sodium_crypto_kx_keypair() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function sodium_crypto_kx_publickey($key_pair) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$key_pair], 0, $count_));
}
function sodium_crypto_kx_secretkey($key_pair) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$key_pair], 0, $count_));
}
function sodium_crypto_kx_seed_keypair($seed) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$seed], 0, $count_));
}
function sodium_crypto_kx_server_session_keys($server_key_pair, $client_key) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$server_key_pair, $client_key], 0, $count_));
}
function sodium_crypto_pwhash($length, $password, $salt, $opslimit, $memlimit, $algo=SODIUM_CRYPTO_PWHASH_ALG_DEFAULT) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$length, $password, $salt, $opslimit, $memlimit, $algo], 0, $count_));
}
function sodium_crypto_pwhash_scryptsalsa208sha256($length, $password, $salt, $opslimit, $memlimit) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$length, $password, $salt, $opslimit, $memlimit], 0, $count_));
}
function sodium_crypto_pwhash_scryptsalsa208sha256_str($password, $opslimit, $memlimit) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$password, $opslimit, $memlimit], 0, $count_));
}
function sodium_crypto_pwhash_scryptsalsa208sha256_str_verify($hash, $password) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$hash, $password], 0, $count_));
}
function sodium_crypto_pwhash_str($password, $opslimit, $memlimit) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$password, $opslimit, $memlimit], 0, $count_));
}
function sodium_crypto_pwhash_str_needs_rehash($password, $opslimit, $memlimit) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$password, $opslimit, $memlimit], 0, $count_));
}
function sodium_crypto_pwhash_str_verify($hash, $password) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$hash, $password], 0, $count_));
}
function sodium_crypto_scalarmult($n, $p) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$n, $p], 0, $count_));
}
function sodium_crypto_scalarmult_base() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function sodium_crypto_secretbox($message, $nonce, $key) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$message, $nonce, $key], 0, $count_));
}
function sodium_crypto_secretbox_keygen() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function sodium_crypto_secretbox_open($ciphertext, $nonce, $key) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$ciphertext, $nonce, $key], 0, $count_));
}
function sodium_crypto_secretstream_xchacha20poly1305_init_pull($header, $key) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$header, $key], 0, $count_));
}
function sodium_crypto_secretstream_xchacha20poly1305_init_push($key) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$key], 0, $count_));
}
function sodium_crypto_secretstream_xchacha20poly1305_keygen() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function sodium_crypto_secretstream_xchacha20poly1305_pull(&$state, $ciphertext, $additional_data="") {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([&$state, $ciphertext, $additional_data], 0, $count_));
}
function sodium_crypto_secretstream_xchacha20poly1305_push(&$state, $message, $additional_data="", $tag=SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_MESSAGE) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([&$state, $message, $additional_data, $tag], 0, $count_));
}
function sodium_crypto_secretstream_xchacha20poly1305_rekey(&$state) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([&$state], 0, $count_));
}
function sodium_crypto_shorthash($message, $key) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$message, $key], 0, $count_));
}
function sodium_crypto_shorthash_keygen() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function sodium_crypto_sign($message, $secret_key) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$message, $secret_key], 0, $count_));
}
function sodium_crypto_sign_detached($message, $secret_key) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$message, $secret_key], 0, $count_));
}
function sodium_crypto_sign_ed25519_pk_to_curve25519($public_key) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$public_key], 0, $count_));
}
function sodium_crypto_sign_ed25519_sk_to_curve25519($secret_key) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$secret_key], 0, $count_));
}
function sodium_crypto_sign_keypair() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function sodium_crypto_sign_keypair_from_secretkey_and_publickey($secret_key, $public_key) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$secret_key, $public_key], 0, $count_));
}
function sodium_crypto_sign_open($signed_message, $public_key) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$signed_message, $public_key], 0, $count_));
}
function sodium_crypto_sign_publickey($key_pair) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$key_pair], 0, $count_));
}
function sodium_crypto_sign_publickey_from_secretkey($secret_key) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$secret_key], 0, $count_));
}
function sodium_crypto_sign_secretkey($key_pair) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$key_pair], 0, $count_));
}
function sodium_crypto_sign_seed_keypair($seed) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$seed], 0, $count_));
}
function sodium_crypto_sign_verify_detached($signature, $message, $public_key) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$signature, $message, $public_key], 0, $count_));
}
function sodium_crypto_stream($length, $nonce, $key) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$length, $nonce, $key], 0, $count_));
}
function sodium_crypto_stream_keygen() {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([], 0, $count_));
}
function sodium_crypto_stream_xor($message, $nonce, $key) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$message, $nonce, $key], 0, $count_));
}
function sodium_hex2bin($string, $ignore="") {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$string, $ignore], 0, $count_));
}
function sodium_increment(&$string) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([&$string], 0, $count_));
}
function sodium_memcmp($string1, $string2) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$string1, $string2], 0, $count_));
}
function sodium_memzero(&$string) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([&$string], 0, $count_));
}
function sodium_pad($string, $block_size) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$string, $block_size], 0, $count_));
}
function sodium_unpad($string, $block_size) {
  $count_ = func_num_args();
  return \Proxyz\callFunction(__FUNCTION__, array_slice([$string, $block_size], 0, $count_));
}
function methods() {
  return [
    "hash",
    "hash_algos",
    "hash_copy",
    "hash_equals",
    "hash_file",
    "hash_final",
    "hash_hkdf",
    "hash_hmac",
    "hash_hmac_algos",
    "hash_hmac_file",
    "hash_init",
    "hash_pbkdf2",
    "hash_update",
    "hash_update_file",
    "hash_update_stream",
    "password_algos",
    "password_get_info",
    "password_hash",
    "password_needs_rehash",
    "password_verify",
    "random_bytes",
    "random_int",
    "sodium_add",
    "sodium_base642bin",
    "sodium_bin2base64",
    "sodium_bin2hex",
    "sodium_compare",
    "sodium_crypto_aead_aes256gcm_decrypt",
    "sodium_crypto_aead_aes256gcm_encrypt",
    "sodium_crypto_aead_aes256gcm_is_available",
    "sodium_crypto_aead_aes256gcm_keygen",
    "sodium_crypto_aead_chacha20poly1305_decrypt",
    "sodium_crypto_aead_chacha20poly1305_encrypt",
    "sodium_crypto_aead_chacha20poly1305_ietf_decrypt",
    "sodium_crypto_aead_chacha20poly1305_ietf_encrypt",
    "sodium_crypto_aead_chacha20poly1305_ietf_keygen",
    "sodium_crypto_aead_chacha20poly1305_keygen",
    "sodium_crypto_aead_xchacha20poly1305_ietf_decrypt",
    "sodium_crypto_aead_xchacha20poly1305_ietf_encrypt",
    "sodium_crypto_aead_xchacha20poly1305_ietf_keygen",
    "sodium_crypto_auth",
    "sodium_crypto_auth_keygen",
    "sodium_crypto_auth_verify",
    "sodium_crypto_box",
    "sodium_crypto_box_keypair",
    "sodium_crypto_box_keypair_from_secretkey_and_publickey",
    "sodium_crypto_box_open",
    "sodium_crypto_box_publickey",
    "sodium_crypto_box_publickey_from_secretkey",
    "sodium_crypto_box_seal",
    "sodium_crypto_box_seal_open",
    "sodium_crypto_box_secretkey",
    "sodium_crypto_box_seed_keypair",
    "sodium_crypto_generichash",
    "sodium_crypto_generichash_final",
    "sodium_crypto_generichash_init",
    "sodium_crypto_generichash_keygen",
    "sodium_crypto_generichash_update",
    "sodium_crypto_kdf_derive_from_key",
    "sodium_crypto_kdf_keygen",
    "sodium_crypto_kx_client_session_keys",
    "sodium_crypto_kx_keypair",
    "sodium_crypto_kx_publickey",
    "sodium_crypto_kx_secretkey",
    "sodium_crypto_kx_seed_keypair",
    "sodium_crypto_kx_server_session_keys",
    "sodium_crypto_pwhash",
    "sodium_crypto_pwhash_scryptsalsa208sha256",
    "sodium_crypto_pwhash_scryptsalsa208sha256_str",
    "sodium_crypto_pwhash_scryptsalsa208sha256_str_verify",
    "sodium_crypto_pwhash_str",
    "sodium_crypto_pwhash_str_needs_rehash",
    "sodium_crypto_pwhash_str_verify",
    "sodium_crypto_scalarmult",
    "sodium_crypto_scalarmult_base",
    "sodium_crypto_secretbox",
    "sodium_crypto_secretbox_keygen",
    "sodium_crypto_secretbox_open",
    "sodium_crypto_secretstream_xchacha20poly1305_init_pull",
    "sodium_crypto_secretstream_xchacha20poly1305_init_push",
    "sodium_crypto_secretstream_xchacha20poly1305_keygen",
    "sodium_crypto_secretstream_xchacha20poly1305_pull",
    "sodium_crypto_secretstream_xchacha20poly1305_push",
    "sodium_crypto_secretstream_xchacha20poly1305_rekey",
    "sodium_crypto_shorthash",
    "sodium_crypto_shorthash_keygen",
    "sodium_crypto_sign",
    "sodium_crypto_sign_detached",
    "sodium_crypto_sign_ed25519_pk_to_curve25519",
    "sodium_crypto_sign_ed25519_sk_to_curve25519",
    "sodium_crypto_sign_keypair",
    "sodium_crypto_sign_keypair_from_secretkey_and_publickey",
    "sodium_crypto_sign_open",
    "sodium_crypto_sign_publickey",
    "sodium_crypto_sign_publickey_from_secretkey",
    "sodium_crypto_sign_secretkey",
    "sodium_crypto_sign_seed_keypair",
    "sodium_crypto_sign_verify_detached",
    "sodium_crypto_stream",
    "sodium_crypto_stream_keygen",
    "sodium_crypto_stream_xor",
    "sodium_hex2bin",
    "sodium_increment",
    "sodium_memcmp",
    "sodium_memzero",
    "sodium_pad",
    "sodium_unpad"
];}

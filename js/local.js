// key
var key_name = "key_name";
var key_email = "key_email";

function isLocalStorageSupported() {
  if ( typeof(Storage) !== "undefined" ) {
    return true;
  } else {
    return false;
  }
}

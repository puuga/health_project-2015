// key
var key_name = "key_name";
var key_email = "key_email";

var key_qa1 = "key_qa1";
var key_qa1_e1 = "key_qa1_e1";
var key_qa1_e2 = "key_qa1_e2";

function isLocalStorageSupported() {
  if ( typeof(Storage) !== "undefined" ) {
    return true;
  } else {
    return false;
  }
}

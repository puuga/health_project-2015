<?php include 'include/db_connect_oo.php'; ?>
<?php
function sendEmail($email, $id) {
  $msg = "Entry $id Inserted.";
  $msg = wordwrap($msg,70);

  // send email if email is valid
  if (isValidEmail($email)) {
    mail($email, "Entry $id Inserted.", $msg);
  }
}

function isValidEmail($email) {
  return filter_var($email, FILTER_VALIDATE_EMAIL) && preg_match('/@.+\./', $email);
}
?>
<?php
header('Content-Type: application/json');

$post_data = array();

// read post data
foreach ($_POST as $key => $value) {
  // echo "Field ".htmlspecialchars($key)." is ".htmlspecialchars($value)."<br>";
  $post_data[htmlspecialchars($key)] = htmlspecialchars($value);
}

// save to db
$sql = "INSERT INTO data_entry (
          key_name,
          key_email,
          key_qa1,
          key_qa1_e1,
          key_qa1_e2,
          key_qa2,
          key_qa2_e1,
          key_qa3,
          key_qa3_e1,
          key_qa3_e2,
          key_qa3_e3,
          key_qa4,
          key_qa4_e1,
          key_qa4_e2,
          key_qae,
          key_qb1,
          key_qb1_e1,
          key_qb1_e2,
          key_qb1_e3,
          key_qb1_e4,
          key_qb1e,
          key_qb2,
          key_qb2_e1,
          key_qb2_e2,
          key_qb2e,
          key_qc1,
          key_qc1_e1,
          key_qc1_e2,
          key_qc1_e3,
          key_qc1e,
          key_qc2,
          key_qc2_e1,
          key_qc2_e2,
          key_qc2_e3,
          key_qc2_e4,
          key_qc2e
        )
        VALUES (
          '$post_data[key_name]',
          '$post_data[key_email]',
          '$post_data[key_qa1]',
          '$post_data[key_qa1_e1]',
          '$post_data[key_qa1_e2]',
          '$post_data[key_qa2]',
          '$post_data[key_qa2_e1]',
          '$post_data[key_qa3]',
          '$post_data[key_qa3_e1]',
          '$post_data[key_qa3_e2]',
          '$post_data[key_qa3_e3]',
          '$post_data[key_qa4]',
          '$post_data[key_qa4_e1]',
          '$post_data[key_qa4_e2]',
          '$post_data[key_qae]',
          '$post_data[key_qb1]',
          '$post_data[key_qb1_e1]',
          '$post_data[key_qb1_e2]',
          '$post_data[key_qb1_e3]',
          '$post_data[key_qb1_e4]',
          '$post_data[key_qb1e]',
          '$post_data[key_qb2]',
          '$post_data[key_qb2_e1]',
          '$post_data[key_qb2_e2]',
          '$post_data[key_qb2e]',
          '$post_data[key_qc1]',
          '$post_data[key_qc1_e1]',
          '$post_data[key_qc1_e2]',
          '$post_data[key_qc1_e3]',
          '$post_data[key_qc1e]',
          '$post_data[key_qc2]',
          '$post_data[key_qc2_e1]',
          '$post_data[key_qc2_e2]',
          '$post_data[key_qc2_e3]',
          '$post_data[key_qc2_e4]',
          '$post_data[key_qc2e]'
        )";
if ($conn->query($sql) === TRUE) {
  $post_data["id"] = $conn->insert_id;
} else {
  $post_data["sql"] = $sql;
  $post_data["error"] = $conn->error;
}

$conn->close();
echo json_encode($post_data);
?>

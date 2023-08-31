
<?php

//function writeToCsv($data, $filename) {
//    $fp = fopen($filename, 'w');
//
//    $keys = array_keys(get_object_vars($data[0]));
//    fputcsv($fp, $keys);
//
//    foreach ($data as $entry) {
//        $values = array_values(get_object_vars($entry));
//        fputcsv($fp, $values);
//    }
//
//    fclose($fp);
//}
//writeToCsv($_POST, 'henry1.csv');
//$fp = fopen()
// h:i:s a

//date_default_timezone_set('America/Chicago');
//$created_atDate = date('F d, Y');
//$data['created_at'] = $created_atDate;
//
//$fp = fopen('q.csv', 'a');
//fputcsv($fp, $data);
//fclose($fp);

//mail('HATHWJ00@mcpsmd.org', 'My Subject', $message);

?>

<?php

    $staffMember= $data["referringstaffMember"];
    echo "<h1> You have successfully submitted the form," . "</h1>". "<h4>". $staffMember . "</h4>";
    print_r($data);

?>
<br>
<br>
<a href = '<?php echo URLROOT ?>'>Back</a>
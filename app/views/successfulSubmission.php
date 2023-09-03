<!---->
<?php
//
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
//writeToCsv($data, 'henry1.csv');
////$fp = fopen()
//// h:i:s a
//
////date_default_timezone_set('America/Chicago');
////$created_atDate = date('F d, Y');
////$data['created_at'] = $created_atDate;
////
//$fp = fopen('q.csv', 'a');
//fputcsv($fp, $data);
//fclose($fp);
//
//mail('jude.hathway@gmail.com', 'My Subject', '<pre>' . $data . '</pre>');
//
//?>
<?php
//if(isset($data)) {
//    print_r($data);
//}
//
//?>


<?php

//    $staffMember= $data["referringstaffMember"];
//    echo "<h3> You have successfully soared and your birdies will be hearing from you soon," . "</h3>". "<h4>". $staffMember . "</h4>";
echo "<h3>You have successfully soared and your birdies will be hearing from you soon.</h3>";
//    print_r($data);

?>

<br>

<a href = '<?php echo URLROOT ?>'>Back</a>
<!---->
<!--<script>-->
<!--window.location.reload();-->
<!--</script>-->
<?php
/**
 * Functions to handle donation form
 *
 * @package MFYAH_2024
 */

function debug_to_console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

if ( $_POST["donation_frequency"] === "monthly") { 
  debug_to_console($_POST["donation_frequency"]);
  // $url = 'https://buy.stripe.com/eVa1605Gn3p60koaEF';
} else if ( $_POST["donation_frequency"] === "yearly") {
  debug_to_console($_POST["donation_frequency"]);
  // $url = 'https://donate.stripe.com/7sI7uogl11gYffi7su';
} else $_POST["donation_frequency"]; 
  // $url = 'https://donate.stripe.com/7sI7uogl11gYffi7su';

header( "Location: $url" );
<?php
// Path to the counter file
$counterFile = 'counter.txt';

// Check if the counter file exists
if (!file_exists($counterFile)) {
    file_put_contents($counterFile, 0);
}

// Read the current count
$counter = (int)file_get_contents($counterFile);

// Increment the counter
$counter++;

// Save the new count
file_put_contents($counterFile, $counter);

// Display the count
echo $counter;
?>

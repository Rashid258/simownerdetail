<?php

if (ISSET($_POST['search'])) {
    $keyword = $_POST['keyword'];
    $api_url = "https://simownership.com.pk/wp-admin/admin-ajax.php?action=get_number_data&get_number_data=searchdata=" . $keyword;

    // Fetch data from API
    $response = file_get_contents($api_url);
    $data = json_decode($response, true); // Decode JSON response
?>
<div class="output-container">
    <h2>Result</h2>
    <hr style="border-top:2px dotted #ccc;"/>
    <?php
if (!empty($data)) {
    foreach ($data as $key => $value) {
        if ($key === 'Join WhatsApp') continue; // Skip WhatsApp links
?>
    <div class="data-block">
        <h3><?php echo $value; ?></h3>
    </div>
    <?php
        }
    } else {
        echo "<p>No results found.</p>";
    }
    ?>
</div>
<?php
}
?>

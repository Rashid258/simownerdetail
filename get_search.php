<?php
if (ISSET($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
    $api_url = "https://simownership.com.pk/wp-admin/admin-ajax.php?action=get_number_data&get_number_data=searchdata=" . $keyword;

    // Fetch data from API
    $response = file_get_contents($api_url);
    $data = json_decode($response, true); // Decode JSON response
?>
<div>
    <h2>Details</h2>
    <hr style="border-top:1px dotted #ccc;"/>
    <?php
    if (!empty($data)) {
        // Loop through the JSON response and display it
        foreach ($data as $key => $value) {
			if ($key === 'Join WhatsApp') continue; 
            echo "<h4>{$value}</h4>";
        }
    } else {
        echo "<p>No details found.</p>";
    }
    ?>
</div>
<?php
} else {
    echo "<p>No keyword provided.</p>";
}
?>

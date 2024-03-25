<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle HTML code
    $html_code = $_POST["html_code"];

    // Handle images
    $target_dir = "assets/";
    $uploaded_images = [];
    foreach ($_FILES["images"]["tmp_name"] as $key => $tmp_name) {
        $target_file = $target_dir . basename($_FILES["images"]["name"][$key]);
        if (move_uploaded_file($tmp_name, $target_file)) {
            $uploaded_images[] = basename($target_file);
        }
    }

    // Save HTML code to a file
    $html_file = fopen("rendered_html.html", "w");
    fwrite($html_file, $html_code);
    fclose($html_file);

    // Redirect to the rendered HTML file
    header("Location: rendered_html.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Rendered HTML</title>
</head>
<body>
    <?php
    // Read the content of the rendered HTML file
    $rendered_html_content = file_get_contents("rendered_html.html");
    // Output the content
    echo html_entity_decode($rendered_html_content);
    ?>
</body>
</html>

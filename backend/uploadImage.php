// uploadImage.php
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $targetDir = "../uploads/";
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0755, true);
        }
        $filename = basename($_FILES['image']['name']);
        $targetFilePath = $targetDir . $filename;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFilePath)) {
            echo json_encode(["success" => true, "filename" => $filename]);
        } else {
            echo json_encode(["success" => false, "error" => "Failed to move uploaded file"]);
        }
    } else {
        echo json_encode(["success" => false, "error" => "No file uploaded or upload error"]);
    }
} else {
    echo json_encode(["success" => false, "error" => "Invalid request method"]);
}
?>

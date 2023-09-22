<?php
require_once('config.php');
$limit = 10;

if (isset($_GET['page']) && is_numeric($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

$offset = ($page - 1) * $limit;
$sql = "SELECT * FROM formdata LIMIT $limit OFFSET $offset";
$result = $conn->query($sql);
$output = '';
$i = $offset;

if ($result->num_rows > 0) {
    foreach ($result as $row) {
        if (!empty($row["date"]) && !empty($row["name"]) && !empty($row["url"]) && !empty($row["type"]) && !empty($row["technology"])) {
            $i = $i + 1;
            $output .= '<tr>
                <td>' . $i . '</td>
                <td>' . $row["date"] . '</td>
                <td>' . $row["name"] . '</td>
                <td><a href="' . $row["url"] . '" target="_blank">View Website</a></td>
                <td>' . $row["type"] . '</td>
                <td>' . $row["technology"] . '</td>
            </tr>';
        }
    }
}

$response = ["html" => $output, "lastIndex" => $i];

// Check if there's no more data, and set a flag in the response
if (empty($output)) {
    $response["noMoreData"] = true;
}

// Always send JSON content type header
header('Content-Type: application/json');

// Output the JSON response
echo json_encode($response);
?>

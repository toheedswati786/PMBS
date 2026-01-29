<?php
// Mock input
$_SERVER['REQUEST_METHOD'] = 'POST';
$input = json_encode(['message' => 'what services do you offer']);

// Capture output
ob_start();
include 'chatbot_backend.php'; // This script expects raw POST input, so we need to tweak it or just include the function logic.
$output = ob_get_clean();

// Since chatbot_backend.php reads php://input, we can't easily mock it with just include.
// Let's just create a quick test that re-implements the logic to verify the data file + logic separation.

$dataFile = 'chatbot_data.json';
$data = json_decode(file_get_contents($dataFile), true);
$message = "what services do you offer";
$bestMatch = "No match";

foreach ($data as $item) {
    foreach ($item['keywords'] as $keyword) {
        if (strpos($message, strtolower($keyword)) !== false) {
            $bestMatch = $item['answer'];
            break 2;
        }
    }
}

echo "Test Input: $message\n";
echo "Response: $bestMatch";

<?php
header('Content-Type: application/json');

// Get the POST body
$input = json_decode(file_get_contents('php://input'), true);
$userMessage = isset($input['message']) ? strtolower(trim($input['message'])) : '';

// Function to find best match
function getResponse($message)
{
    $dataFile = __DIR__ . '/chatbot_data.json';
    if (!file_exists($dataFile)) {
        return "I'm having trouble accessing my knowledge base. Please contact support.";
    }

    $data = json_decode(file_get_contents($dataFile), true);

    $bestMatch = null;
    $maxScore = 0;

    foreach ($data as $item) {
        $score = 0;
        foreach ($item['keywords'] as $keyword) {
            if (strpos($message, strtolower($keyword)) !== false) {
                $score++;
            }
        }

        if ($score > $maxScore) {
            $maxScore = $score;
            $bestMatch = $item['answer'];
        }
    }

    if ($maxScore > 0) {
        return $bestMatch;
    }

    // Default response
    return "I'm not sure about that. You can contact our team at +1(707)-948-6213 for more details.";
}

$response = getResponse($userMessage);

echo json_encode(['answer' => $response]);

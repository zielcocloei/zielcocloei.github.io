<?php
header("Content-Type: application/json");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

include("connect.php");

$method = $_SERVER['REQUEST_METHOD'];
$input = json_decode(file_get_contents('php://input'), true);

switch ($method) {
  case 'GET':
    handleGet($pdo);
    break;
  default:
    http_response_code(405);
    echo json_encode(['message' => 'Invalid request method', 'expected' => 'GET']);
    break;
}

function handleGet($pdo)
{
  try {
    $sql = "SELECT category_id AS id, name FROM categories";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($result);
  } catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['message' => 'Failed to fetch categories: ' . $e->getMessage()]);
  }
}
?>
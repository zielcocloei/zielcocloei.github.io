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
  case 'POST':
    handlePost($pdo, $input);
    break;
  default:
    http_response_code(405);
    echo json_encode(['message' => 'Invalid request method', 'expected' => 'GET or POST']);
    break;
}

function handleGet($pdo)
{
  try {
    $category = isset($_GET['category']) ? $_GET['category'] : 'All';
    if ($category === 'All') {
      $sql = "SELECT p.product_id AS id, p.name, p.price, c.name AS category, p.image 
              FROM products p JOIN categories c ON p.category_id = c.category_id";
      $stmt = $pdo->prepare($sql);
      $stmt->execute();
    } else {
      $sql = "SELECT p.product_id AS id, p.name, p.price, c.name AS category, p.image 
              FROM products p JOIN categories c ON p.category_id = c.category_id 
              WHERE c.name = :category";
      $stmt = $pdo->prepare($sql);
      $stmt->execute(['category' => $category]);
    }

    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($products);
  } catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['message' => 'Failed to fetch products: ' . $e->getMessage()]);
  }
}

function handlePost($pdo, $input)
{
  try {
    $category = isset($input['category']) ? $input['category'] : 'All';
    if ($category === 'All') {
      $sql = "SELECT p.product_id AS id, p.name, p.price, c.name AS category, p.image 
              FROM products p JOIN categories c ON p.category_id = c.category_id";
      $stmt = $pdo->prepare($sql);
      $stmt->execute();
    } else {
      $sql = "SELECT p.product_id AS id, p.name, p.price, c.name AS category, p.image 
              FROM products p JOIN categories c ON p.category_id = c.category_id 
              WHERE c.name = :category";
      $stmt = $pdo->prepare($sql);
      $stmt->execute(['category' => $category]);
    }

    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($products);
  } catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['message' => 'Failed to fetch products: ' . $e->getMessage()]);
  }
}
?>
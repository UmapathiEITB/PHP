<?php
$host = 'localhost';
$db   = 'your_database';
$user = 'your_username';
$pass = 'your_password';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
// Pagination parameters
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
$pageSize = 10;
$offset = ($page - 1) * $pageSize;
// Fetch paginated results
$sql = "SELECT * FROM table_name ORDER BY id LIMIT :limit OFFSET :offset";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':limit', $pageSize, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();

$users = $stmt->fetchAll();

// Display results
foreach ($users as $user) {
    echo "ID: {$user['*']} - Name: {$user['*']}<br>";
}

// Optional: Display pagination links
$totalStmt = $pdo->query("SELECT COUNT(*) FROM table_name");
$totalRows = $totalStmt->fetchColumn();
$totalPages = ceil($totalRows / $pageSize);

for ($i = 1; $i <= $totalPages; $i++) {
    /** your logic */
}
?>

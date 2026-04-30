<?php 
include 'db_connect.php'; // Σύνδεση με βάση

$current_slug = $_GET['slug'] ?? 'athens';
$stmt = $pdo->prepare("SELECT * FROM pages WHERE slug = ?");
$stmt->execute([$current_slug]);
$page = $stmt->fetch(PDO::FETCH_ASSOC);

// ΕΔΩ ΕΙΝΑΙ ΤΟ ΚΛΕΙΔΙ:
include 'header.php'; 
?>

<main class="main-content">
    <?php echo $page['content']; ?>
</main>

<?php 
include 'footer.php'; 
?>
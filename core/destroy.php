<?=
require_once '../core/db.php';

if(isset($_GET['id'])){
    $userId = $_GET['id'];

    try{
        $stmt = $conn->prepare("DELETE FROM sslc_marks WHERE id = :id");
        $stmt->bindParam(':id', $userId);
        $stmt->execute();

        header('Location: ../view/index.php');
        exit();
    }catch(PDOException $e){
        echo "Error: " . $e->$getMessage();
    }
}
?>
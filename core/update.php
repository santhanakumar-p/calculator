<?php 
if($_SERVER['REQUEST_METHOD'] == "POST"){

    require_once '../core/db.php';

    $userId = $_POST['id'];
    $rollNo = $_POST['roll_no'];
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $tamil = $_POST['tamil'];
    $english = $_POST['english'];
    $mathematics = $_POST['mathematics'];
    $science = $_POST['science'];
    $socialScience = $_POST['social_science'];

    try{
        $stmt = $conn->prepare("UPDATE sslc_marks SET roll_no = :roll_no, name = :name, dob = :dob, tamil = :tamil, english = :english, mathematics = :mathematics, science = :science, social_science = :social_science WHERE id = :id");
        $stmt->bindParam(':roll_no', $rollNo);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':dob', $dob);
        $stmt->bindParam(':tamil', $tamil);
        $stmt->bindParam(':english', $english);
        $stmt->bindParam(':mathematics', $mathematics);
        $stmt->bindParam(':science', $science);
        $stmt->bindParam(':social_science', $socialScience);
        $stmt->bindParam('id', $userId);
        $stmt->execute();

        header('Location: ../view/index.php');
        exit();
    }catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }
}
?>
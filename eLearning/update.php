<?php
include_once 'dbConnection.php';
session_start();
$email=$_SESSION['email'];

// delete feedback
if(isset($_SESSION['key'])){
    if(@$_GET['fdid'] && $_SESSION['key']=='sunny7785068889') {
        $id=@$_GET['fdid'];
        $result = mysqli_query($con,"DELETE FROM feedback WHERE id='$id' ") or die('Error');
        header("location:dash.php?q=3");
    }
}

// delete user
if(isset($_SESSION['key'])){
    if(@$_GET['demail'] && $_SESSION['key']=='sunny7785068889') {
        $demail=@$_GET['demail'];
        $r1 = mysqli_query($con,"DELETE FROM rank WHERE email='$demail' ") or die('Error');
        $r2 = mysqli_query($con,"DELETE FROM history WHERE email='$demail' ") or die('Error');
        $result = mysqli_query($con,"DELETE FROM user WHERE email='$demail' ") or die('Error');
        header("location:dash.php?q=1");
    }
}

// remove quiz
if(isset($_SESSION['key'])){
    if(@$_GET['q'] == 5 && isset($_GET['eid']) && $_SESSION['key']=='sunny7785068889') {
        $eid = $_GET['eid'];
        $q_delete = mysqli_query($con, "DELETE FROM quiz WHERE eid='$eid'");
        if ($q_delete) {
            echo "<script>alert('Quiz removed successfully!'); window.location.href='dash.php?q=0';</script>";
            exit();
        } else {
            echo "<script>alert('Error removing quiz');</script>";
        }
    }
}

// add quiz
if(isset($_SESSION['key'])){
    if(@$_GET['q'] == 'addquiz' && $_SESSION['key']=='sunny7785068889') {
        // Your code for adding a quiz goes here
    }
}

// add question
if(isset($_SESSION['key'])){
    if(@$_GET['q'] == 'addqns' && $_SESSION['key']=='sunny7785068889') {
        // Your code for adding questions goes here
    }
}

// quiz start
if(@$_GET['q'] == 'quiz' && @$_GET['step'] == 2) {
    // Your code for quiz starts here
}

// restart quiz
if(@$_GET['q'] == 'quizre' && @$_GET['step'] == 25) {
    // Your code for restarting quiz goes here
}
?>

<!-- Add link to add_quiz.php -->
<a href="add_quiz.php">Add Quiz</a>

<!-- Add link to remove_quiz.php -->
<a href="remove_quiz.php">Remove Quiz</a>

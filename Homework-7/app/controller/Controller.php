<?php

session_start();

class NoteController {
    public function create() {
        require_once __DIR__ . '/../views/notes/create.php';
    }

    public function store() {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header("Location: /notes/create");
            exit;
        }

        $title = isset($_POST['title']) ? htmlspecialchars(trim($_POST['title'])) : '';
        $description = isset($_POST['description']) ? htmlspecialchars(trim($_POST['description'])) : '';

        $errors = [];

        if (strlen($title) < 4) {
            $errors[] = "Title must be at least 4 characters long.";
        }

        if (strlen($description) < 11) {
            $errors[] = "Description must be at least 11 characters long.";
        }

        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
            header("Location: /notes/create");
            exit;
        }

        $_SESSION['success'] = "Note added successfully!";
        header("Location: /notes/create");
        exit;
    }
}

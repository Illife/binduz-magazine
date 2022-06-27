<?php

require_once __DIR__ . '/../../app/Models/Post.php';

$search = $_POST['search'];


echo "<script>location.href='http://localhost:8000/search?search=" . $search . "';</script>";

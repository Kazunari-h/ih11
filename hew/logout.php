<?php
// ==============================
// ログアウトするPHPファイル
// ==============================
session_start();

// sessionの値を消す
unset($_SESSION["email"]);

// ログインページに飛ばす処理
header("Location: ./login-input.php");
exit;

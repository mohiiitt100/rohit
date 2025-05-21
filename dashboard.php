<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: index.html');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Design Studio</title>
    <script src="https://cdn.tailwindcss.com/3.4.16"></script>
    <script>tailwind.config={theme:{extend:{colors:{primary:'#FFC107',secondary:'#1C2526'}}}}</script>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #1C2526;
            color: #FFFFFF;
        }
    </style>
</head>
<body>
    <header class="bg-secondary py-4">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-primary">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
            <a href="logout.php" class="bg-primary text-secondary font-bold px-4 py-2 rounded hover:scale-105 transition-transform duration-300">Logout</a>
        </div>
    </header>
    <section class="container mx-auto px-4 py-20">
        <h2 class="text-3xl font-bold text-primary mb-6">Your Dashboard</h2>
        <p class="text-gray-300">This is your personalized dashboard. Here you can manage your design projects and subscriptions.</p>
    </section>
</body>
</html>
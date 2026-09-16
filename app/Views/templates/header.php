<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= esc($title) ?> | SimplePOS</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            color: #1f2937;
            background: #f3f4f6;
        }

        header {
            color: white;
            background: #e7471b;
        }

        nav {
            max-width: 1000px;
            margin: auto;
            padding: 18px 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .brand {
            font-size: 22px;
            font-weight: bold;
        }

        .nav-links {
            display: flex;
            gap: 20px;
        }

        nav a {
            color: white;
            text-decoration: none;
        }

        nav a:hover {
            text-decoration: underline;
        }

        main {
            max-width: 1000px;
            min-height: calc(100vh - 140px);
            margin: auto;
            padding: 48px 24px;
        }

        h1 {
            color: #792603;
        }

        .panel {
            padding: 30px;
            background: white;
            border-radius: 10px;
        }

        table {
    width: 100%;
    margin-top: 24px;
    border-collapse: collapse;
    background: white;
    }

    th,
    td {
        padding: 14px;
        text-align: left;
        border: 1px solid #d1d5db;
    }

    th {
        color: white;
        background: #166534;
    }
    tr:nth-child(even) {
        background: #f0fdf4;
    }

    footer {
        padding: 20px;
        text-align: center;
        color: white;
        background: #111827;
    }
    </style>
</head>

<body>
<header>
    <nav>
        <div class="brand">Formative 1</div>

        <div class="nav-links">
            <a href="<?= site_url('/') ?>">Home</a>
            <a href="<?= site_url('about') ?>">About</a>
            <a href="<?= site_url('customers') ?>">Customers</a>
            <a href="<?= site_url('users') ?>">Users</a>
        </div>
    </nav>
</header>

<main>
    <section class="panel">
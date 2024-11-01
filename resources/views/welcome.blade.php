<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مرحبا</title>
    <style>
        /* تنسيق الصفحة بالكامل */
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f5f5f5;
        }

        /* تنسيق صندوق الترحيب */
        .welcome-container {
            text-align: center;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            max-width: 400px;
        }

        h1 {
            color: #4a4a4a;
            font-size: 2em;
            margin-bottom: 10px;
        }

        p {
            color: #666;
            font-size: 1.1em;
        }

        /* زر تجريبي */
        .welcome-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-size: 1em;
            transition: background-color 0.3s ease;
        }

        .welcome-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <h1>مرحبا</h1>
        <p>مرحبًا بك في مكتبة لارفيل الجديدة. نحن سعداء بوجودك هنا</p>
        <a href="#" class="welcome-button">استكشاف المزيد</a>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kalkulator Sederhana</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #00A36C;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            text-align: center;
            color: #333;
            padding: 80px;
        }

        form {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 400px;
        }

        input[type="number"], select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            background-color: #fff;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #2B65EC;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #848482;
        }
    </style>
</head>
<body>

<h1>Kalkulator Daffa</h1>

<form action="kalkulator.php" method="post">
    <input type="number" name="angka1" placeholder="Angka 1" step="any">
    <input type="number" name="angka2" placeholder="Angka 2" step="any">
    <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
        <option value="√">√</option>
        <option value="^">^</option>
        <option value="%">%</option>
        <option value="convert">$</option>
    </select>
    <input type="submit" value="Hitung">
</form>

</body>
</html>
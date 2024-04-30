<!DOCTYPE html>
<html>
<head>
    <title>Form Siswa</title>
    <style>
        body {
            font-family: Sans-serif, Helvetica;
            font-size: 12px;
            margin: 0 auto;
            padding: 20px;
            background: radial-gradient(circle, rgba(255,255,255,1) 0%, rgba(77,33,255,1) 100%); /* Warna latar belakang menggunakan gradient */
            color: white; 
        }
        h2 {
            text-align: center;
        }
        form {
            background-color: rgba(52, 73, 94, 0.7); 
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
        }

        label {
            display: block;
            margin-bottom: 8px;
            text-align: center; 
        }
        input[type="text"], select {
            width: calc(100% - 16px); 
            padding: 8px;
            margin-bottom: 12px;
            border: none;
            border-radius: 4px;
            box-sizing: border-box;
            background-color: #ecf0f1; 
            display: block; 
        }
        input[type="text"]:last-of-type { 
            margin-bottom: 20px;
        }
        input[type="submit"] {
            width: 30%; 
            padding: 8px; 
            border: none;
            border-radius: 4px;
            cursor: pointer;
            background-color: #207043; 
            color: white; 
            transition: background-color 0.3s; 
            margin: 20px auto; 
            display: block; 
        }
        input[type="submit"]:hover {
            background-color: #207043; 
        }
    </style>
</head>
<body>

<h2>Form Siswa</h2>
<form method="post" action="proses.php">
    <label for="name">Nama:</label>
    <input type="text" id="name" name="name">

    <label for="placebirth">TTL:</label>
    <input type="text" id="placebirth" name="placebirth">

    <label for="age">Usia:</label>
    <input type="text" id="age" name="age">

    <label for="gender">Jenis Kelamin:</label>
    <select id="gender" name="gender">
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
    </select>

    <label for="address">Alamat:</label>
    <input type="text" id="address" name="address">
</form>

<input type="submit" value="Submit">

</body>
</html>

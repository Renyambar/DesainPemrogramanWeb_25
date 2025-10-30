<!DOCTYPE html>
<html>
<head>
    <title>Form Aman dari HTML Injection</title>
</head>
<body>

    <h2>Form Aman</h2>
    
    <?php
    // Cek apakah form sudah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // --- Langkah 2: Menggunakan htmlspecialchars --- 
        $input = $_POST['input'];
        $input_aman = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        
        echo "<h3>Input Asli:</h3>";
        echo $input; // Menampilkan input asli (berpotensi tidak aman)
        
        echo "<h3>Input Setelah htmlspecialchars (Aman):</h3>";
        echo $input_aman; // Menampilkan input yang sudah disanitasi
        
        echo "<hr>";
        
        // --- Langkah 6: Menggunakan filter_var untuk email --- 
        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Lanjutkan dengan pengolahan email yang aman
            echo "Email yang Anda masukkan valid: " . htmlspecialchars($email);
        } else {
            // Tangani input yang tidak valid
            echo "Email yang Anda masukkan ('" . htmlspecialchars($email) . "') TIDAK valid!";
        }
    }
    ?>
    
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        
        <label for="input">Input Berbahaya (coba: <code>&lt;script&gt;alert('hack')&lt;/script&gt;</code>):</label><br>
        <input type="text" name="input" id="input" style="width: 400px;"><br><br>
        
        <label for="email">Email (coba: <code>bukanemail</code>):</label><br>
        <input type="text" name="email" id="email" style="width: 400px;"><br><br>
        
        <input type="submit" value="Submit">
    </form>

</body>
</html>
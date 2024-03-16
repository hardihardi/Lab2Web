<!DOCTYPE html>
<html>
<head>
    <title>Tugas Latihan - Form Input</title>
</head>
<body>
    <h2>Tugas - Form Input</h2>
    <form method="POST" action="">
        <label for="name">Nama:</label>
        <input type="text" name="name" id="name" required><br><br>
        
        <label for="birthdate">Tanggal Lahir:</label>
        <input type="date" name="birthdate" id="birthdate" required><br><br>
        <label for="age">Umur:</label>
        <input type="number" name="age" id="age" required><br><br>
        
        <label for="occupation">Pekerjaan:</label>
        <select name="occupation" id="occupation" required>
            <option value="Programmer">Programmer</option>
            <option value="Designer">Designer</option>
            <option value="Manager">Manager</option>
        </select><br><br>
        
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $birthdate = $_POST['birthdate'];
        $occupation = $_POST['occupation'];

        // Menghitung umur berdasarkan tanggal lahir
        $today = new DateTime();
        $birthday = new DateTime($birthdate);
        $age = $today->diff($birthday)->y;

        // Menghitung gaji berdasarkan pekerjaan
        $salary = 0;
        switch($occupation){
            case 'Programmer':
                $salary = 5000000;
                break;
            case 'Designer':
                $salary = 4000000;
                break;
            case 'Manager':
                $salary = 6000000;
                break;
        }

        // Menampilkan output
        echo "<h2>Output:</h2>";
        echo "Nama: $name<br>";
        $currentYear = date('Y');
        $birthYear = date('Y', strtotime($birthdate));
        $age = $currentYear - $birthYear;
        echo "Umur: $age tahun<br>";
        echo "Pekerjaan: $occupation<br>";
        echo "Gaji: Rp $salary<br>";
    }
    ?>
</body>
</html>
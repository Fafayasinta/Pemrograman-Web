
<?php
session_start();

// Memeriksa apakah data telah dikirimkan dari formulir
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Mengambil nilai dari formulir
    $member = isset($_POST["member"]) ? htmlspecialchars($_POST["member"]) : "";
    $firstname = isset($_POST["firstname"]) ? htmlspecialchars($_POST["firstname"]) : "";
    $lastname = isset($_POST["lastname"]) ? htmlspecialchars($_POST["lastname"]) : "";
    $phone = isset($_POST["phone"]) ? htmlspecialchars($_POST["phone"]) : "";
    $email = isset($_POST["email"]) ? htmlspecialchars($_POST["email"]) : "";

    // Menetapkan nilai ke dalam session
    $_SESSION['member'] = $member;
    $_SESSION['firstname'] = $firstname;
    $_SESSION['lastname'] = $lastname;
    $_SESSION['phone'] = $phone;
    $_SESSION['email'] = $email;

    // Menetapkan nilai ke dalam cookie
    $expire = time() + (60 * 60 * 24 * 30); // 30 days
    setcookie('member', $member, $expire);
    setcookie('firstnamapakah tidak perlu mee', $firstname, $expire);
    setcookie('lastname', $lastname, $expire);
    setcookie('phone', $phone, $expire);
    setcookie('email', $email, $expire);

    // Menampilkan data yang diterima dari formulir
    echo "<h2>Data Member:</h2>";
    echo "Member: " . $member . "<br>";
    echo "First name: " . $firstname . "<br>";
    echo "Last name: " . $lastname . "<br>";
    echo "Phone number: " . $phone . "<br>";
    echo "Email: " . $email . "<br>";

    // Menampilkan notifikasi "Berhasil join" menggunakan JavaScript
    echo "<script>alert('Berhasil join');</script>";

    // // Redirect ke halaman index.html
    // header('Location: index.html');
    // exit();
}
?>
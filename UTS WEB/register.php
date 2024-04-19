<!DOCTYPE html>
<html>
<head>
    <title>Halaman Registrasi</title>
    <!-- Menghubungkan dengan file CSS -->
    <link rel="stylesheet" href="assets/css/styleForm.css" />
    <!-- Menghubungkan dengan file js -->
    <script src="assets/js/script.js"></script>
    <!-- Menghubungkan dengan jquery -->
    <script src="jquery-3.7.1.js"></script>
    <script>
      $(document).ready(function(){
    alert("Selamat datang, Silahkan input data member!");
    });

      $(document).ready(function() {
        $("#submit").submit(function(e) {
          e.preventDefault();
          var member = $("#member").val();
          var firstname = $("#firstname").val();
          var lastname = $("#lastname").val();
          var phone = $("#phone").val();
          var email = $("#email").val();
      
          if (member == "" || firstname == "" || lastname == "" || phone == "" || email == "") {
            alert("Harap isi semua form");
          } else {
            $.ajax({
              type: "POST",
              url: "prosesRegister.php",
              data: {
                member: member,
                firstname: firstname,
                lastname: lastname,
                phone: phone,
                email: email
              },
              success: function(response) {
                alert("Selamat anda berhasil join member GYM Serena :)");
                window.location.href = "index.html";
              },
              error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
              }
            });
          }
        });
      });
    </script>
</head>

<body>
  <section class="wrapper" id="wrapper">
    <h1>Registrasi Member</h1>
    <form method="post" action="prosesRegister.php" id="submit">
      <div class="input-box">
        <div class="input-field">
          <label for="username">Member</label>
            <select name="member" id="member">
            <option value="Normal">Normal</option>
            <option value="VIP">VIP</option>
            <option value="VVIP">VVIP</option>
            </select>
          </div>

        <div class="input-field">
          <label for="username">First name</label>
          <input type="text" id="firstname" placeholder="Enter your first name" required>
        </div>

        <div class="input-field">
          <label for="username">Last name</label>
          <input type="text" id="lastname" placeholder="Enter your last name" required>
        </div>

        <div class="input-field">
          <label for="username">Phone number</label>
          <input type="text" id="phone" placeholder="Enter your number" required>
        </div>

        <div class="input-field">
          <label for="username">Email</label>
          <input type="email" id="email" placeholder="Enter your email" required>
        </div>

        <input type="submit" id="submit" value="Join">

      </form>
    </form>
  </section>
</body>


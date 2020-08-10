<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Register</title>
  </head>
  <body class="container">
    <h1>Buat Account Baru!</h1>

    <h2>Sign Up Form</h2>
    <form action="/welcome">
        <label for="firstName">First Name:</label><br><br>
        <input type="text" id="firstName"><br><br>

        <label for="lastName">Last Name:</label><br><br>
        <input type="text" id="lastName"><br><br>

        <label for="">Gender:</label><br><br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label><br><br>

        <label for="nationality">Nationality:</label><br><br>
        <select name="nationality" id="nationality">
            <option value="Indonesia">Indonesia</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Singapore">Singapore</option>
            <option value="Thailand">Thailand</option>
        </select><br><br>

        <label for="language">Language Spoken:</label><br><br>
        <input type="checkbox" id="bahasaIndonesia" name="bahasaIndonesia" value="Bahasa Indonesia">
        <label for="bahasaIndonesia">Indonesia</label><br>
        <input type="checkbox" id="bahasaEnglish" name="bahasaEnglish" value="English">
        <label for="bahasaEnglish">English</label><br>
        <input type="checkbox" id="bahasaOther" name="bahasaOther" value="Other">
        <label for="bahasaOther">Other</label><br><br>
        
        <label for="bio">Bio:</label><br><br>
        <textarea id="bio"></textarea> <br>
        <button>Submit</button>

    </form>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="css/adaptive.css">
    <link rel="icon" href="icons_svg/pizzafav.ico" type="image/x-icon">
    <title>ABOUT</title>
</head>
<body>
    <!--Navbar-->
    <?php include "header.php";?>
    <main>
        <!--Форма-->
		<div class="zachatok_block1_slide1_stranka2">
            <div class="text1_zachatok_block1_slide1_stranka2">Registration</div>
        </div>
        <div class="formular_glavna_block1_stranka3">
            <form action="/chek.php" method="post" onsubmit="return validateForm()">
                <label for="mail">Email</label><br>
                <input type="email" name="mail" id="email" placeholder="Enter mail" required><br>
                <label for="pass">Password</label><br>
				<input type="password" name="pass" id="pass" placeholder="Enter password" required><br>
				<label for="pass_chek">Password verification</label><br>
				<input type="password" name="pass_chek" id="pass_chek" placeholder="Re-enter the password" required><br>
				<button class="button_submit" type="submit">Submit</button>
            </form>
        </div>
    </main>
	<script src="/js/script.js"></script>
</body>
</html>

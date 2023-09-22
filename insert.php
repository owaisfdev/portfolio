<?php
session_start();
if ($_SESSION['success_message']) {
    echo "<div class='successmessage'>".$_SESSION['success_message']."</div>";
    echo "<script>var elements = document.getElementsByClassName('success');
    for (var i = 0; i < elements.length; i++) {
        elements[i].innerHTML = 'Record Added Successfully!';
    }</script>";
    unset($_SESSION['success_message']);
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Owais Farooq</title>
    <link rel="stylesheet" href="bootstrap.grid.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="banner area">
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1>Owais Farooq</h1>
                    <h3>WordPress Developer</h3>
                    <div class="contact">
                        <a href="mailto:owaisfdev@gmail.com"><svg fill="#000000" height="25px" width="25px" version="1.1" id="Icons" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 32 32" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M26.2,8.5c-2.2-3.2-5.6-5.2-9.3-5.5c-0.3,0-0.6,0-0.9,0c-3.7,0-7.2,1.6-9.7,4.3c-2.5,2.7-3.6,6.4-3.2,10.1 c0.7,6,5.5,10.8,11.5,11.4C15,29,15.5,29,16,29c2.6,0,5-0.7,7.2-2.2c0.5-0.3,0.6-0.9,0.3-1.4c-0.3-0.5-0.9-0.6-1.4-0.3 c-2.2,1.4-4.7,2.1-7.3,1.8c-5.1-0.5-9.1-4.6-9.7-9.7C4.7,14.1,5.7,11,7.8,8.7c2.3-2.5,5.6-3.9,9-3.6c3.2,0.2,6,1.9,7.8,4.6 c1.9,2.9,2.4,6.3,1.3,9.6l0,0.1c-0.3,1-1.3,1.7-2.4,1.7c-1.4,0-2.5-1.1-2.5-2.5V17v-2v-4c0-0.6-0.4-1-1-1s-1,0.4-1,1v0 c-0.8-0.6-1.9-1-3-1c-2.8,0-5,2.2-5,5v2c0,2.8,2.2,5,5,5c1.4,0,2.6-0.6,3.5-1.4c0.7,1.4,2.2,2.4,4,2.4c1.9,0,3.6-1.2,4.3-3.1l0-0.1 C29.1,16,28.5,11.9,26.2,8.5z M19,17c0,1.7-1.3,3-3,3s-3-1.3-3-3v-2c0-1.7,1.3-3,3-3s3,1.3,3,3V17z"></path> </g></svg> owaisfdev@gmail.com</a>
                        <a href="tel:+923430393998"><svg width="25px" height="25px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M5.11596 12.7268L8.15456 9.08666C8.46255 8.69067 8.61655 8.49267 8.69726 8.27061C8.76867 8.07411 8.79821 7.86486 8.784 7.65628C8.76793 7.42055 8.67477 7.18766 8.48846 6.72187L7.77776 4.94513C7.50204 4.25581 7.36417 3.91116 7.12635 3.68525C6.91678 3.48618 6.65417 3.3519 6.37009 3.29856C6.0477 3.23803 5.68758 3.32806 4.96733 3.50812L3 4.00002C3 14 9.99969 21 20 21L20.4916 19.0324C20.6717 18.3122 20.7617 17.952 20.7012 17.6297C20.6478 17.3456 20.5136 17.083 20.3145 16.8734C20.0886 16.6356 19.7439 16.4977 19.0546 16.222L17.4691 15.5878C16.9377 15.3752 16.672 15.2689 16.4071 15.2608C16.1729 15.2536 15.9404 15.3013 15.728 15.4002C15.4877 15.512 15.2854 15.7144 14.8807 16.1191L11.7943 19.1569" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg> +923430393998</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <p>This text is placeholder. It will be replace by the original text. This text is placeholder. It will be replace by the original text. This text is placeholder. It will be replace by the original text. This text is placeholder. It will be replace by the original text. This text is placeholder. It will be replace by the original text. This text is placeholder. It will be replace by the original text.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container formsec">
      <?php
      $correctUsername = "owaisfdev";
      $correctPassword = "my1name2is3";
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        if ($username === $correctUsername && $password === $correctPassword) {
            // The username and password match, so display the form
            $showForm = true;
        } else {
            // Incorrect username or password, do not display the form
            $showForm = false;
            $errorMessage = "<div class='error'>Incorrect username or password.</div>";
        }
    }
    else {
        // By default, do not display the form
        $showForm = false;
    }
      ?>
      <?php if ($showForm): ?>
      <h2>Insert Project</h2>
      <form action="/insertdata.php" method="post">
        <div class="error"></div>
        <div class="success"></div>
        <input type="date" name="date" id="date" required>
        <input type="url" name="url" id="url" placeholder="URL" required>
        <input type="text" name="projectname" id="projectname" placeholder="Project Name" required>
        <input type="text" name="type" id="type" placeholder="Project Type" required>
        <input type="text" name="technology" id="technology" placeholder="Project Technology" required>
        <button class="custom-btn btn-12" type="submit"><span>Submit</span><span>Submit</span></button>
      </form>
      <?php else: ?>
        <h2>Login</h2>
        <form method="post">
        <div class="error"><?php echo isset($errorMessage) ? $errorMessage : ""; ?></div>
        <input type="text" name="username" id="username" required placeholder="Username">
        <input type="password" name="password" id="password" placeholder="Password" required>
        <button class="custom-btn btn-12" type="submit"><span>Submit</span><span>Submit</span></button>
        </form>
        <?php endif; ?>
    </div>
    <script>
        setTimeout(function() {
            var element = document.querySelector('.successmessage');
            element.classList.add('hide');
        }, 3000);
    </script>
</body>
</html>
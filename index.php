<?php  
include_once "header.php";
?>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Tofy RealTime Chat</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" name="fname" placeholder="Enter your first name" required>
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" name="lname" placeholder="Enter your last name" required>
                    </div>
                </div>
                    <div class="field input">
                        <label>Email</label>
                        <input type="text" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="field input">
                        <label>password</label>
                        <input type="password" name="pass" placeholder="Enter new password " required>
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field image">
                        <label>Select Image</label>
                        <input type="file" name="image" required>
                    </div>
                    <div class="field button">
                        <input type="submit" value="Continue to Chat">
                    </div>
                    <div class="link">Already signed up? <a href="login.php">Login now </a></div>
                </div>
               
            </form>
            
        </section>
    </div>
    <script src="javascript/pass.js"></script>
    <script src="javascript/signup.js"></script>
</body>
</html>
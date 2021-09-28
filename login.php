<?php  
include_once "header.php";
?>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>Tofy RealTime Chat</header>
            <form action="#">
                <div class="error-txt"></div>
                
                    <div class="field input">
                        <label>Email</label>
                        <input type="text" name="email" placeholder="Enter your email">
                    </div>
                    <div class="field input">
                        <label>password</label>
                        <input type="password" name="pass" placeholder="Enter new password ">
                        <i class="fas fa-eye"></i>
                    </div>
                    
                    <div class="field button">
                        <input type="submit" value="Continue to Chat">
                    </div>
                    <div class="link">Not yet signed up? <a href="index.php">signup now </a></div>
                </div>
               
            </form>
            
        </section>
    </div>
    <script src="javascript/pass.js"></script>
    <script src="javascript/login.js"></script>
</body>
</html>
<footer id="footer" class="section footer">
    <div class="container">
        <div class="footer-container">
            <div class="footer-center">
                <h3>INFORMATION</h3>
                <a href="index.php?page=aboutUs">About Us</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Terms & Conditions</a>
            </div>
            <div class="footer-center">
                <h3>ACCOUNT</h3>
                <?php
                if (isset($_SESSION['username'])) {
                    echo '<a href="index.php?page=account">My Account</a>';
                    echo '<a href="index.php?page=cart">Shopping Cart</a>';
                } else {
                    echo '<a href="index.php?page=login">My Account</a>';
                    echo '<a href="index.php?page=login">Shopping Cart</a>';
                }
                ?>
            </div>
            <div class="footer-center">
                <h3><a class="contact-us" target="_blank" href="https://mail.google.com/mail/u/0/?fs=1&tf=cm&to=polar3commerce@gmail.com">CONTACT US</a></h3>
                <div>
                    <span>
                        <i class="fas fa-map-marker-alt"></i>
                    </span>
                    Rexhep Krasniqi, 10000 Prishtine, Kosovo
                </div>
                <div>
                    <span>
                        <i class="far fa-envelope"></i>
                    </span>
                    polar3commerce@gmail.com
                </div>
                <div>
                    <span>
                        <i class="fas fa-phone"></i>
                    </span>
                    044-555-666
                </div>
                <div>
                    <span>
                        <i class="far fa-paper-plane"></i>
                    </span>
                    Prishtine, XK
                </div>
            </div>
        </div>
    </div>
    </div>
</footer>
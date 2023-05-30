<footer>
    <div class="footer-container">
        <div class="footer-section">
            <h3>About Us</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel erat ipsum.</p>
        </div>
        <div class="footer-section">
            <h3>Contact</h3>
            <p>Email: info@example.com</p>
            <p>Phone: +1 123-456-7890</p>
        </div>
        <div class="footer-section">
            <h3>Follow Us</h3>
            <ul class="social-media">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
</footer>

<style>
    footer {
        background-color: #333;
        color: #fff;
        padding: 20px;
        margin-top: 100px;
    }

    .footer-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .footer-section {
        flex-basis: 30%;
        margin-bottom: 20px;
    }

    .footer-section h3 {
        margin-bottom: 10px;
    }

    .social-media {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .social-media li {
        display: inline-block;
        margin-right: 10px;
    }

    .social-media li:last-child {
        margin-right: 0;
    }

    .social-media a {
        color: #fff;
        font-size: 20px;
    }

    /* Responsive Styles */

    @media screen and (max-width: 768px) {
        .footer-section {
            flex-basis: 45%;
        }
    }

    @media screen and (max-width: 576px) {
        .footer-section {
            flex-basis: 100%;
        }
    }
</style>
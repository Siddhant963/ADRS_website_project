<html>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <style>
            /* General Styling */
footer {
    background-color: #243642;
    color: #ffff;
    padding: 40px 0;
}

.footer-content {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 20px;
    padding: 0 20px;
}

.column {
    flex: 1;
    min-width: 250px;
    max-width: 300px;
    margin-bottom: 20px;
}

.column h3 {
    font-size: 1.5em;
    margin-bottom: 15px;
}

.column p {
    font-size: 0.9em;
    line-height: 1.6;
}

.column a {
    text-decoration: none;
    color: #fff;
    font-size: 0.9em;
    display: block;
    margin-bottom: 8px;
}

.column a:hover {
    color: #243642;
}

/* Social Media buttons */
.but button {
    background-color: #ffff;
    border: none;
    padding: 10px;
    margin-right: 10px;
    margin-bottom: 10px;
    border-radius: 50%;
}

.but button:hover {
    background-color: #243642;
}

/* Google Play button */
.bg {
    background-color: #0a7e07;
    color: #fff;
    border: none;
    padding: 10px 15px;
    border-radius: 5px;
    cursor: pointer;
}

.bg:hover {
    background-color: #5cba5c;
}

/* Footer Bottom */
.footer-bottom {
    text-align: center;
    padding: 20px;
    background-color: #243642;
    margin-top: 20px;
}

/* Responsive Design */
@media (max-width: 768px) {
    .footer-content {
        flex-direction: column;
        align-items: center;
    }

    .column {
        max-width: none;
        text-align: center;
    }

    .column h3 {
        font-size: 1.3em;
    }

    .column p {
        font-size: 0.9em;
    }

    .but button {
        padding: 8px;
        margin-right: 8px;
    }

    .end p {
        font-size: 1.1em;
    }
}

@media (max-width: 480px) {
    .footer-content {
        padding: 0 10px;
    }

    .footer-bottom p {
        font-size: 0.9em;
    }

    .bg {
        font-size: 0.9em;
        padding: 8px 12px;
    }
  
}     .tushar{
    height: 15vh;
    width: 15vw;
}
        </style>
    <footer>
        <div class="footer-content">
            <div class="column">
                <h3 ><img class="tushar" src="../src/assets/images/ADRS_logo.png" alt=""></h3>
                <p>Get in touch:</p>
                <p>xyz address, Adhartal Jabalpur, Madhya Pradesh 482004</p>
                <p>Contact No:</p>
                <p>26139635566, 245642121</p>
                <p>Email id: adrstechnosoft@gmail.com</p>
            </div>
    
            <div class="column">
                <h3>Quick Links</h3>
                <p><a href="#">Website Development</a></p>
                <p><a href="#">Software Development</a></p>
                <p><a href="#">Graphic Designing</a></p>
                <p><a href="#">Mobile APP</a></p>
                <p><a href="#">Summer Internship</a></p>
                <p><a href="#">Digital marketing</a></p>
                <p><a href="#">Vocational Training</a></p>
                <p><a href="#">Privacy Policy</a></p>
            </div>
    
            <div class="column">
                <h3>Opening Hours</h3>
                <p>Monday 09:00 am - 08:00 pm</p>
                <p>Tuesday 09:00 am - 08:00 pm</p>
                <p>Wednesday 09:00 am - 08:00 pm</p>
                <p>Thursday 09:00 am - 08:00 pm</p>
                <p>Friday 09:00 am - 08:00 pm</p>
                <p>Saturday 09:00 am - 08:00 pm</p>
                <p>Sunday Closed</p>
            </div>
    
            <div class="column">
                <h3>Social Connections</h3>
                <div class="but">
                    <p><button><i class="fa-brands fa-facebook-f" style="color: rgb(255, 255, 255);"></i></button>LinkedIn</p>
                    <p><button><i class="fa-brands fa-twitter" style="color: rgb(255, 255, 255);"></i></button>Instagram</p>
                    <p><button><i class="fa-brands fa-linkedin-in" style="color: rgb(255, 255, 255);"></i></button>E-mail</p>
                    <p><button><i class="fa-brands fa-instagram" style="color: rgb(255, 255, 255);"></i></button>Github Account</p>
                </div>
                <br>
                <div class="end">
                    <p style="font-size: 21px; font-weight: 600;">Find us on Google Play Store</p>
                    <br>
                    <p><button class="bg">
                        <span class="ii"><i class="fa-brands fa-google-play" style="color: rgb(0, 0, 0);"></i></span>
                        <span class="gp">Get it on GOOGLE PLAY</span>
                    </button></p>
                </div>
            </div>
        </div>
    
        <div class="footer-bottom">
            <p>ADRS PVT LTD - All rights reserved - 2016</p>
        </div>
    </footer>
</html>
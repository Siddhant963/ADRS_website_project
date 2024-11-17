<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive 3-Box Row</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    body, html {
        height: 100%;
        margin: 0;
        background-color: #243642;
        padding: 0;
    }

    .header {
        height: 25vh;
        color: white;
        background: url("https://thumbs.dreamstime.com/z/technical-support-customer-service-business-technology-internet-concept-155284878.jpg?w=992") center/cover;
    }
    h1{
        padding-left: 20vh;
        padding-top: 10vh;
        font-family:cursive;
        font-style: oblique;
        font-weight: 200;
  }
h6{
    padding-left: 20vh;
    font-family:cursive;
        font-style: oblique;
        font-weight: 200;
}
    .card {
        height:42vh;
        display: flex;
        flex-direction: column;
        border-radius: 5px;
        overflow: hidden;
        background-repeat: no-repeat;
        background-size: cover;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* gap: 35px; */
        transition: 1s;
    }

    .card-image {
        height: 88%;
        background-size: cover;
      
        background-position: center;
    }

    .card-title {
        background-color: #387478;
        color: white;
        text-align: center;
margin-bottom: -2vh;
        height: 5vh;
        padding-top: 1vh;
        font-weight: bold;
    }
    .card:hover{
transform: scale(1.1);
z-index: 2;
    } 
</style>
<body>

<div class="header">
    <h1>Services</h1>
    <h6>Home-Services</h6>
</div>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-4 mb-4">
            <div class="card">
                <div class="card-image" style="background-image: url('web_page.webp');"></div>
                <div class="card-title">Web Development</div>
            </div>
        </div>
        <div class="col-12 col-lg-4 mb-4">
            <div class="card">
                <div class="card-image" style="background-image: url('app.webp');"></div>
                <div class="card-title">Application Development</div>
            </div>
        </div>
        <div class="col-12 col-lg-4 mb-4">
            <div class="card">
                <div class="card-image" style="background-image: url('image.png');"></div>
                <div class="card-title">Software Development</div>
            </div>
        </div>
        <div class="col-12 col-lg-4 mb-4">
            <div class="card">
                <div class="card-image" style="background-image: url('digital-marketing.webp');"></div>
                <div class="card-title">Digital Marketing</div>
            </div>
        </div>
        <div class="col-12 col-lg-4 mb-4">
            <div class="card">
                <div class="card-image" style="background-image: url('logo\ design.webp');"></div>
                <div class="card-title">Logo Design</div>
            </div>
        </div>
       
        
        <div class="col-12 col-lg-4 mb-4">
            <div class="card">
                <div class="card-image" style="background-image: url('img-graphic-designer.webp');"></div>
                <div class="card-title">Graphic Design</div>
            </div>
        </div>
        
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
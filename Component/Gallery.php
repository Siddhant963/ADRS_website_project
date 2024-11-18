<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    .full-size-image{
        height: 300px;
        padding: 100px;
        background-image: url("https://th.bing.com/th/id/OIP.NylBtwlB0o6wkz4dEsLE2gHaEK?rs=1&pid=ImgDetMain");
        background-repeat: no-repeat;
        background-size: cover;
        font-weight: 50px;
      
   }
   .img-gallary{
       height: 150px;
       width: 200px;
       margin-top: 20px;
       border: 2px solid black;
   }
   .img-gallary-div{
    height: 200px;
   
   }
   .collaege{ 
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
    width: 100vw;
    
   }
   .photo{ 
    height: 40vh;
    width: 30vw;
    margin-top: 20px;
    border: 4px solid white;
    border-radius: 10px;
   }
   .photo:hover{ 
    transform: scale(1.1);
    transition: transform 0.5s;
   }
   @media only screen and (max-width: 600px) {
.photo{
    height: 20vh;
    width: 30vw;
 
  }
}
</style>
<?php include './Nav.php'; ?>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 full-size-image ">
              <h1 class="text-light">Gallery</h1>
              <h6 class="text-light">Home-Gallery</h6>
            </div>
        </div>
    </div>
    <!-- <div class="container">
        <div class="row">
            <div class="img-gallary-div col-12 col-lg-3 col-md-4">
            <img class="img-gallary" src="">
            <img class="img-gallary" src="">
            <img class="img-gallary" src="">
            <img class="img-gallary" src="">

            </div>
            <br>
            <div class="img-gallary-div col-12 col-lg-3 col-md-4">
                <img class="img-gallary" src="">
                <img class="img-gallary" src="">
                <img class="img-gallary" src="">
                <img class="img-gallary" src="">
                </div><br>
                <div class="img-gallary-div col-12 col-lg-3 col-md-4">
                    <img class="img-gallary" src="">
                    <img class="img-gallary" src="">
                    <img class="img-gallary" src="">
                    <img class="img-gallary" src="">
                    </div><br>
                    <div class="img-gallary-div col-lg-3 col-md-4">
                        <img class="img-gallary" src="">
                        <img class="img-gallary" src="">
                        <img class="img-gallary" src="">
                        <img class="img-gallary" src="">
                        </div>
                     
        </div>
    </div> -->

    <div class="collaege container ">
        <img src="../src/assets/images/p1.jpg" alt="" class="photo">
        <img src="../src/assets/images/p5.jpg" alt="" class="photo">
        <img src="../src/assets/images/p2.jpg" alt="" class="photo">
        <img src="../src/assets/images/p3.jpg" alt="" class="photo">
        <img src="../src/assets/images/p4.jpg" alt="" class="photo">
        <img src="../src/assets/images/p6.jpg" alt="" class="photo">
        <img src="../src/assets/images/p7.jpg" alt="" class="photo">
        <img src="../src/assets/images/p1.jpg" alt="" class="photo">
        <img src="../src/assets/images/p5.jpg" alt="" class="photo">
        <img src="../src/assets/images/p4.jpg" alt="" class="photo">
    </div>
   <div>
   
   </div>
</body>
</html>
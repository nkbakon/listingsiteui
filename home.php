<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site</title>

    <link href="./include/style.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- font-awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container-fluid d-flex justify-content-start">
            <a class="navbar-brand" href="./home.php"><img src="./assets/logo.png" width="100" height="100"></a>  
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link text-dark" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-dark" href="#">About Us</a>
                </li>
                <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-list"></i> Categories
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="#"><i class="fa fa-tags"></i> Clothings</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fa fa-tablet"></i> Electronics</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fa fa-car"></i> Vehicles</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fa fa-futbol-o"></i> Outdoor</a></li>
                    <li><a class="dropdown-item" href="#"><i class="fa fa-bath"></i> Home Appliances</a></li>
                </ul>
                </li>
            </ul>
            </div>
        </div>
        <div class="container-fluid justify-content-center">
            <form class="d-flex">
            <input class="form-control me-2" type="text" id="productsearch" placeholder="Type here to search" aria-label="Search">
            </form>
        </div>

        <div class="container-fluid justify-content-end"> 
            <div>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-user-o"></i> Account
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="">Profile</a></li>
                        <li><a class="dropdown-item" href="">Orders</a></li>
                        <li><a class="dropdown-item" href="">Wish List</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="" name="logout">Sign out</a></li>
                    </ul>
                    </li>
                </ul>
            </div>
            <a class="nav-link text-dark" href="#"><i class="fa fa-shopping-cart"></i></a>                        
        </div>
    </nav><br>

    <div class="left right" style="overflow: hidden;">
        <div class="owl-carousel owl-theme">
            <div class="item"><img src="./assets/1.jpg" width="600" height="400"></div>
            <div class="item"><img src="./assets/2.jpg" width="600" height="400"></div>
            <div class="item"><img src="./assets/3.jpg" width="600" height="400"></div>
            <div class="item"><img src="./assets/4.jpg" width="600" height="400"></div>
        </div>
    </div><br>

    <div class="container">
        <div class="card">
        <div class="card-body bg-light">
            <h5 class="text-center">Clothings</h5><br>
            <div class="row producttable">
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img src="./assets/cloth1.jpg" class="card-img-top" width="200" height="250">
                        <div class="card-body">
                            <a href="" class="nav-link text-dark"><h5 class="card-title">Men's Black 90% Cotton T Shirt</h5></a>
                            <p class="card-text">Solid Color T Shirt Men's Black 90% Cotton T Shirt Summer 2022 Skateboard T Boys Skate T Shirt Top Plus Size.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img src="./assets/cloth2.jpg" class="card-img-top" width="200" height="250">
                        <div class="card-body">
                            <a href="" class="nav-link text-dark"><h5 class="card-title">Long-Sleeve Denim Work Shirt</h5></a>
                            <p class="card-text">Mens Casual Cotton Shirts Regular-fit Long-Sleeve Denim Work Shirt Two Button Front Chest Pockets & Pencil Slot Rugged Wear.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img src="./assets/cloth3.jpg" class="card-img-top" width="200" height="250">
                        <div class="card-body">
                            <a href="" class="nav-link text-dark"><h5 class="card-title">Men's Classic Relaxed Fit Flex Jean</h5></a>
                            <p class="card-text">2021 Summer Thinlce silk Men's Classic Relaxed Fit Flex Jean men High waist Business casual classic black blue denim trousers.</p>
                        </div>
                    </div>
                </div>
            </div>          
            </div>
            </div>   
        </div>
        </div>
    </div><br>

    <div class="container">
        <div class="card">
        <div class="card-body bg-light">
            <h5 class="text-center">Electronics</h5><br>
            <div class="row producttable">
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img src="./assets/elec1.jpg" class="card-img-top" width="200" height="250">
                        <div class="card-body">
                            <a href="" class="nav-link text-dark"><h5 class="card-title">Apple iPhone 12 Mini (64GB) - Blue</h5></a>
                            <p class="card-text">Apple iPhone 12 Mini is designed with high-speed 5G technology, using an A14 Bionic chipset, an edge-to-edge OLED display.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img src="./assets/elec2.jpg" class="card-img-top" width="200" height="250">
                        <div class="card-body">
                            <a href="" class="nav-link text-dark"><h5 class="card-title">MacBook Pro 14" M1 Pro 1TB (2021)</h5></a>
                            <p class="card-text">MacBook Pro 14 M1 Pro 2021 leverages the power of the Apple M1 Pro chip to deliver top performance for any professional.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img src="./assets/elec3.jpg" class="card-img-top" width="200" height="250">
                        <div class="card-body">
                            <a href="" class="nav-link text-dark"><h5 class="card-title">Beats Studio 3 Wireless Headphone</h5></a>
                            <p class="card-text">Beats Studio 3 Wireless Dual-Mode Adaptive Noise-Canceling Headphone rechargeable Bluetooth device.</p>
                        </div>
                    </div>
                </div>
            </div>          
            </div>
            </div>  
        </div>
        </div>
    </div><br>

    <div class="container">
        <div class="card">
        <div class="card-body bg-light">
            <h5 class="text-center">Vehicles</h5><br>
            <div class="row producttable">
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img src="./assets/tesla.jpg" class="card-img-top" width="200" height="250">
                        <div class="card-body">
                            <a href="" class="nav-link text-dark"><h5 class="card-title">Tesla Model S Plaid</h5></a>
                            <p class="card-text">Tesla Model S Plaid has the quickest acceleration of any vehicle in production. Updated battery architecture for all Model S trims enables back-to-back track runs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img src="./assets/nio.jpg" class="card-img-top" width="200" height="250">
                        <div class="card-body">
                            <a href="" class="nav-link text-dark"><h5 class="card-title">NIO ET5 Sedan</h5></a>
                            <p class="card-text">NIO designs and develops smart, high-performance, electric vehicle. NIO ET5, a mid-size electric sedan, is a perfect blend of NIO's supercar DNA and technological aesthetics.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card" style="width: 18rem;">
                        <img src="./assets/mach.jpg" class="card-img-top" width="200" height="250">
                        <div class="card-body">
                            <a href="" class="nav-link text-dark"><h5 class="card-title">Ford Mustang Mach-E</h5></a>
                            <p class="card-text">The Ford Mustang Mach-E is a battery electric compact crossover SUV produced by Ford. The vehicle was introduced on November 17, 2019.</p>
                        </div>
                    </div>
                </div>
            </div>          
            </div>
            </div>   
        </div>
        </div>
    </div><br>

    

<!-- Bootstrap Javascript-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>  

<!-- Owl carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
$(document).ready(function(){
  $("#productsearch").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".producttable div").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<script>
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:4,
    nav:false,
    dots:false,
    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:2
        }
    }
})
</script>

</body>
</html>
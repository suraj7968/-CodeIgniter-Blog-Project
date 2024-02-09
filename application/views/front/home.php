<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Codeignter</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <link rel="stylesheet" href="<?php echo base_url('public/css/style.css') ?>">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
   </head>
   <body>
      <header class="bg-light">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light pt-3 pb-3">
               <div class="container-fluid">
                  <div class="row w-100">
                     <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="col">
                           <a class="navbar-brand" href="#">Codeigniter Project</a>
                        </div>
                        <ul class="navbar-nav ms-auto">
                           <li class="nav-item">
                              <a class="nav-link" href="#">HOME</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#">ABOUT US</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#">SERVICES</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#">BLOG</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#">CATEGORIES</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" href="#">CONTACT US</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </nav>
         </div>
      </header>
      <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade" data-bs-ride="carousel">
         <div class="carousel-inner">
            <div class="carousel-item active">
               <img src="<?php echo base_url('public/images/slide1.jpg') ?>" class="d-block w-100 h-100" alt="..." style="object-fit: cover;">
            </div>
            <div class="carousel-item">
               <img src="<?php echo base_url('public/images/slide2.jpg') ?>" class="d-block w-100 h-100" alt="..." style="object-fit: cover;">
            </div>
            <div class="carousel-item">
               <img src="<?php echo base_url('public/images/slide3.jpg') ?>" class="d-block w-100 h-100" alt="..." style="object-fit: cover;">
            </div>
         </div>
         <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Next</span>
         </button>
      </div>
      <div class="container pt-5 pb-5">
         <h3 class="pb-3">About Company</h3>
         <p class="text-muted" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium repellat molestias quis adipisci enim, expedita saepe dolorum quos a minima, sapiente voluptate, porro officiis. Quis quisquam alias minus vel aut! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos voluptates libero ipsum corrupti quod, nisi quae reiciendis ab, maiores perspiciatis unde saepe non culpa? Reprehenderit, id amet! Dicta, animi et. </p>
         <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium repellat molestias quis adipisci enim, expedita saepe dolorum quos a minima, sapiente voluptate, porro officiis. Quis quisquam alias minus vel aut! Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos voluptates libero ipsum corrupti quod, nisi quae reiciendis ab, maiores perspiciatis unde saepe non culpa? Reprehenderit, id amet! Dicta, animi et. </p>
      </div>
      <div class="bg-light pb-4 pt-4">
         <div class="container bg-light">
            <h3 class="pb-3">OUR SERVICES</h3>
            <div class="row">
               <div class="col-md-3">
                  <div class="card" style="width: 18rem;">
                     <img src="<?php echo base_url('public/images/box1.jpg') ?>" class="card-img-top" alt="...">
                     <div class="card-body">
                        <h5 class="card-title">Website Development</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="card" style="width: 18rem;">
                     <img src="<?php echo base_url('public/images/box2.jpg') ?>" class="card-img-top" alt="...">
                     <div class="card-body">
                        <h5 class="card-title">Digitel Marketing</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="card" style="width: 18rem;">
                     <img src="<?php echo base_url('public/images/box3.jpg') ?>" class="card-img-top" alt="...">
                     <div class="card-body">
                        <h5 class="card-title">Mobile App Development</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="card" style="width: 18rem;">
                     <img src="<?php echo base_url('public/images/box4.jpg') ?>" class="card-img-top" alt="...">
                     <div class="card-body">
                        <h5 class="card-title">It Consulting Services</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <div class="pb-5 pt-5">
         <div class="container ">
            <h3 class="pb-3">LATEST BLOGS</h3>
            <div class="row">
               <div class="col-md-3">
                  <div class="card" style="width: 18rem;">
                     <img src="<?php echo base_url('public/images/box1.jpg') ?>" class="card-img-top" alt="...">
                     <div class="card-body">
                        <h5 class="card-title">Website Development</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="card" style="width: 18rem;">
                     <img src="<?php echo base_url('public/images/box2.jpg') ?>" class="card-img-top" alt="...">
                     <div class="card-body">
                        <h5 class="card-title">Digitel Marketing</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="card" style="width: 18rem;">
                     <img src="<?php echo base_url('public/images/box3.jpg') ?>" class="card-img-top" alt="...">
                     <div class="card-body">
                        <h5 class="card-title">Mobile App Development</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="card" style="width: 18rem;">
                     <img src="<?php echo base_url('public/images/box4.jpg') ?>" class="card-img-top" alt="...">
                     <div class="card-body">
                        <h5 class="card-title">It Consulting Services</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <footer class="footer">
  	 <div class="container">
  	 	<div class="row">
  	 		<div class="footer-col">
  	 			<h4>company</h4>
  	 			<ul class="p-0">
  	 				<li><a href="#">about us</a></li>
  	 				<li><a href="#">our services</a></li>
  	 				<li><a href="#">privacy policy</a></li>
  	 				<li><a href="#">affiliate program</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>get help</h4>
  	 			<ul class="p-0">
  	 				<li><a href="#">FAQ</a></li>
  	 				<li><a href="#">shipping</a></li>
  	 				<li><a href="#">returns</a></li>
  	 				<li><a href="#">order status</a></li>
  	 				<li><a href="#">payment options</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>online shop</h4>
  	 			<ul class="p-0">
  	 				<li><a href="#">watch</a></li>
  	 				<li><a href="#">bag</a></li>
  	 				<li><a href="#">shoes</a></li>
  	 				<li><a href="#">dress</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
   </body>
</html>
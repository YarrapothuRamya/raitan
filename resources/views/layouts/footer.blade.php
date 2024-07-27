<style>
  #footer {
  position: relative; /* or absolute, depending on your layout */
  z-index: 20; /* Adjust this value based on your needs */
  background-color: #fff;
}

#footer-bottom {
  position: relative; /* or absolute, depending on your layout */
  z-index: 20; /* Make sure this is less than the z-index of #footer if necessary */
}
</style>
<footer id="footer" class=" footer-border">
    <div class="container py-5 ">
      <div class="row">

        <div class="col-md-3">
          <div class="footer-menu">
            <img src="images/raitanlogo.png" alt="Justdial Logo" aria-label="Justdial" title="Justdial" height="90" width="102" class="">
            
            <div class="social-links mt-3">
              <ul class="d-flex list-unstyled gap-2">
                <li class="social">
                  <a href="#">
                    <iconify-icon class="social-icon" icon="ri:facebook-fill"></iconify-icon>
                  </a>
                </li>
                <li class="social">
                  <a href="#">
                    <iconify-icon class="social-icon" icon="ri:twitter-fill"></iconify-icon>
                  </a>
                </li>
                
                <li class="social">
                  <a href="#">
                    <iconify-icon class="social-icon" icon="ri:instagram-fill"></iconify-icon>
                  </a>
                </li>
                <li class="social">
                  <a href="#">
                    <iconify-icon class="social-icon" icon="ri:youtube-fill"></iconify-icon>
                  </a>
                </li>
                <li class="social">
                  <a href="#">
                    <iconify-icon class="social-icon" icon="ri:linkedin-fill"></iconify-icon>
                  </a>
                </li>

              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="footer-menu">
            <h3 class="text-3xl">Quick Links</h3>
            <ul class="menu-list list-unstyled leading-8">
              <li class="menu-item">
                <a href="{{ route('indexroot') }}" class="nav-link">Home</a>
              </li>
              <li class="menu-item">
                <a href="{{ route('aboutus.home') }}" class="nav-link">About us</a>
              </li>
              
              <li class="menu-item">
                <a href="{{ route('service.home') }}" class="nav-link">Services</a>
              </li>
              <li class="menu-item">
                <a href="{{ route('contactus.home') }}" class="nav-link">Conatct Us</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="footer-menu">
            <h3 class="text-3xl">Help Center</h5>
              <ul class="menu-list list-unstyled leading-8">
                <li class="menu-item">
                  <a href="{{ route('faq.home') }}" class="nav-link">FAQs</a>
                </li>
                
               
              </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div>
            <h3 class="text-3xl">Our Newsletter</h3>
            <p class="blog-paragraph fs-6 pt-1">Subscribe to our newsletter to get updates about our grand offers.</p>
            <div class="search-bar border rounded-pill border-dark-subtle px-2 mt-3">
              <form class="text-center d-flex align-items-center" action="" method="">
                <input type="text" class="form-control border-0 bg-transparent" placeholder="Enter your email here" />
                <iconify-icon class="send-icon" icon="tabler:location-filled"></iconify-icon>
              </form>
            </div>
          </div>
        </div>

      </div>
      <div class="row ">
        <div class="col-md-6 copyright">
          <p class="secondary-font">© 2024 Raitan. All Rights Reserved. Powered By RLK Infotech</p>
        </div>
        <div class="col-md-6 text-md-end">
          <p class="secondary-font"> </p>
          <p class="secondary-font"> </p>
        </div>
      </div>
    </div>
  </footer>

  <div id="footer-bottom">
    <div class="container">
      <hr class="m-0">
      
    </div>
  </div>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
  

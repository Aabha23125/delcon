  <footer class="footer">
    <div class="footer-container">
      <div class="footer-column">
        <h3>Delcon Industries</h3>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="HRSHEET.php">Product</a></li>
          <li><a href="contact.php">Conatct</a></li>
        </ul>
      </div>

      <div class="footer-column">
        <h3>Products</h3>
        <ul>
          <li><a href="HRSHEET.php">HR Sheets</a></li>
          <li><a href="CRSHEETS.php">CR sheets</a></li>
          <li><a href="CRCIRCLE.php">CR Circle</a></li>
          <li><a href="HRCIRCLE.php">HR Circle</a></li>
          <li><a href="HROPSHEETS.php">HROP Sheets</a></li>
        </ul>
      </div>

      <div class="footer-column">
        <h3>Support</h3>
        <ul>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">Request a Quote</a></li>
          <li><a href="#">Shipping & Delivery</a></li>
          <li><a href="#">FAQs</a></li>
          <li><a href="../global.php">Global</a></li>
        </ul>
      </div>

      <div class="footer-column">
        <h3>Connect</h3>
        <ul>
          <li><a href="#">LinkedIn</a></li>
          <li><a href="#">Facebook</a></li>
          <li><a href="#">Twitter</a></li>
          <li><a href="#">Email Newsletter</a></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      © 2025 Delcon Industries designed by <br>Promopact Marketing Pvt. Ltd. All rights reserved.
    </div>
  </footer>


  
  <script>
    let slides = document.querySelectorAll('.slide');
let dots = document.querySelectorAll('.dot');
let current = 0;

function showSlide(index) {
  slides.forEach((slide, i) => {
    slide.classList.toggle('active', i === index);
    dots[i].classList.toggle('active', i === index);
  });
}

function nextSlide() {
  current = (current + 1) % slides.length;
  showSlide(current);
}

dots.forEach((dot, index) => {
  dot.addEventListener('click', () => {
    current = index;
    showSlide(current);
  });
});

setInterval(nextSlide, 4000); // auto-change every 4 seconds

  </script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>
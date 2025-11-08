<?php $page_title = "About Us | Leading HROP Sheet Manufacturer & Supplier in Faridabad";
$description = "Learn more about our journey as a trusted HROP Sheet manufacturer in Faridabad. We specialize in producing durable, high-quality Hot Rolled Pickled and Oiled Sheets for various industrial and construction applications.";
$keyword = "About HROP Sheet Manufacturer, Hot Rolled Pickled & Oiled Sheet Supplier, HROP Steel Manufacturer Faridabad, Reliable HROP Sheet Company, Industrial Sheet Manufacturer";
 include('../faridabad/header.php');?>


</head>
<style>

 @font-face {
    font-family: 'Montserrat';
    src: url("font/montserrat/Montserrat-Bold.ttf");
  }

   @font-face {
    font-family: 'Roboto';
    src: url("font/roboto/Roboto-Regular.ttf");
  }

    :root               {--light-blue: #b9d1ea;
                      --blue: #618abb;
                      --dark-blue: #00235e;
                      --yellow: #fdba21;
                      --white: #fff;
                    --heading: 'Montserrat',sans-serif;
                    --para: 'Roboto',sans-serif;}
    *{box-sizing:border-box;            
    margin: 0;
        padding: 0;}
    
.about-container {
  width: 100%;
  height: 800px;
  display: flex;
  flex-direction: column-reverse;
  align-items: center;
  justify-content: center;
  gap: 40px;
}

.about-image {width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;}

.about-image img {
  width: 550px;
  height: 300px;
  border-radius: 10px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
  transition: all 400ms ease-in-out;
}

.about-image img:hover      {
                            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.8);}

.about-text {
  width: 100%;
  padding-left: 5%;
}

.about-text h2 {
  font-size: 20px;
  color: var(--dark-blue); 
  height: 60px;
  font-family: var(--heading);
}

.about-text p {width: 90%;
  height: 150px;
  font-size: 12px;
  color: #333;
  line-height: 1.6;
  font-family: var(--para);
}

.journey_txt1 p     {font-size: 8px;}

.misvis         {width: 100%;
                height: 600px;
                background: var(--blue);
                display: flex;
                flex-direction: column;
                justify-content: space-evenly;}

.mis            {width: 100%;
                height: 200px;
                display: flex;
                justify-content: end;}

.mis_img        {width: 200px;
                height: 200px;
              background: var(--white);
                border-radius: 150px 0 0 150px;}

.mis_img img    {width: 150px;
                height: 200px;}

.mis_txt        {width: 44%;
                height: 200px;
                background: var(--white);}

.mis_txt h1     {font-family: var(--heading);
                height: 80px;
                font-size: 20px;
                color: var(--dark-blue);
                display: flex;
                align-items: center;}

.mis_txt p      {font-family: var(--para);
                color: var(--dark-blue);
                font-size: 10px;
                padding-right: 4%;}

.vis            {width: 100%;
                height: 200px;
                display: flex;
                justify-content: start;}

.vis_img        {width: 200px;
                height: 200px;
              background: var(--white);
                border-radius: 0 150px 150px 0;}

.vis_img img    {width: 150px;
                height: 200px;}

.vis_txt        {width: 44%;
                height: 200px;
                background: var(--white);
                padding-left: 4%;}

.vis_txt h1     {font-family: var(--heading);
                height: 80px;
                font-size: 20px;
                color: var(--dark-blue);
                display: flex;
                align-items: center;}

.vis_txt p      {font-family: var(--para);
                color: var(--dark-blue);
                font-size: 10px;
                padding-right: 0%;}

.ahead          {width: 100%;
                height: 300px;
                display: flex;
                flex-direction: column;
                justify-content: center;}

.ahead_title      {width: 100%;
                  height: 100px;
                  display: flex;
                  justify-content: center;
                  align-items: center;
                  font-family: var(--heading);
                  font-size: 30px;
                  font-weight: 700;
                  color: var(--dark-blue);}

.ahead_para       {width: 100%;
                  height: 200px;
                  font-family: var(--para);
                  color: var(--dark-blue);
                  font-size: 15px;
                  padding: 2%;
                  text-align: center;}

        @media only screen and (min-width: 768px) {
          .about-container {
  width: 100%;
  height: 600px;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  gap: 40px;
}

.about-image {width: 40%;
            display: flex;
            justify-content: center;
            align-items: center;}

.about-image img {
  width: 550px;
  height: 300px;
  border-radius: 10px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
  transition: all 400ms ease-in-out;
}

.about-image img:hover      {
                            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.8);}

.about-text {
  width: 50%;
  padding-left: 5%;
}

.about-text h2 {
  font-size: 25px;
  color: var(--dark-blue); 
  height: 80px;
  font-family: var(--heading);
}

.about-text p {width: 90%;
  height: 250px;
  font-size: 12px;
  color: #333;
  line-height: 1.6;
  font-family: var(--para);
}

.journey_txt1 p     {font-size: 12px;}

.misvis         {width: 100%;
                height: 600px;
                background: var(--blue);
                display: flex;
                flex-direction: column;
                justify-content: space-evenly;}

.mis            {width: 100%;
                height: 200px;
                display: flex;
                justify-content: end;}

.mis_img        {width: 200px;
                height: 200px;
              background: var(--white);
                border-radius: 150px 0 0 150px;}

.mis_img img    {width: 150px;
                height: 200px;}

.mis_txt        {width: 44%;
                height: 200px;
                background: var(--white);}

.mis_txt h1     {font-family: var(--heading);
                height: 80px;
                color: var(--dark-blue);
                font-size: 30px;
                display: flex;
                align-items: center;}

.mis_txt p      {font-family: var(--para);
                color: var(--dark-blue);
                font-size: 15px;
                padding-right: 4%;}

.vis            {width: 100%;
                height: 200px;
                display: flex;
                justify-content: start;}

.vis_img        {width: 200px;
                height: 200px;
              background: var(--white);
                border-radius: 0 150px 150px 0;}

.vis_img img    {width: 150px;
                height: 200px;}

.vis_txt        {width: 44%;
                height: 200px;
                background: var(--white);
                padding-left: 4%;}

.vis_txt h1     {font-family: var(--heading);
                height: 80px;
                color: var(--dark-blue);
                font-size: 30px;
                display: flex;
                align-items: center;}

.vis_txt p      {font-family: var(--para);
                color: var(--dark-blue);
                font-size: 15px;
                padding-right: 0%;}

.ahead          {width: 100%;
                height: 400px;
                display: flex;
                flex-direction: column;
                justify-content: center;}

.ahead_title      {width: 100%;
                  height: 100px;
                  display: flex;
                  justify-content: center;
                  align-items: center;
                  font-family: var(--heading);
                  font-size: 40px;
                  font-weight: 700;
                  color: var(--dark-blue);}

.ahead_para       {width: 100%;
                  height: 200px;
                  font-family: var(--para);
                  color: var(--dark-blue);
                  font-size: 25px;
                  padding: 2%;
                  text-align: center;}
        }

     @media only screen and (min-width: 1280px){


.about-container {
  width: 100%;
  height: 800px;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  gap: 40px;
}

.about-image {width: 50%;
            display: flex;
            justify-content: center;
            align-items: center;}

.about-image img {
  width: 550px;
  height: auto;
  border-radius: 10px;
  box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
  transition: all 400ms ease-in-out;
}

.about-image img:hover      {
                            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.8);}

.about-text {
  width: 50%;
  padding-left: 5%;
}

.about-text h2 {
  font-size: 35px;
  color: var(--dark-blue); 
  height: 80px;
  font-family: var(--heading);
}

.about-text p {width: 90%;
  height: 250px;
  font-size: 18px;
  color: #333;
  line-height: 1.6;
  font-family: var(--para);
}

.misvis         {width: 100%;
                height: 600px;
                background: var(--blue);
                display: flex;
                flex-direction: column;
                justify-content: space-evenly;}

.mis            {width: 100%;
                height: 200px;
                display: flex;
                justify-content: end;}

.mis_img        {width: 200px;
                height: 200px;
              background: var(--white);
                border-radius: 150px 0 0 150px;}

.mis_img img    {width: 150px;
                height: 200px;}

.mis_txt        {width: 44%;
                height: 200px;
                background: var(--white);}

.mis_txt h1     {font-family: var(--heading);
                height: 80px;
                color: var(--dark-blue);
                display: flex;
                align-items: center;}

.mis_txt p      {font-family: var(--para);
                color: var(--dark-blue);
                padding-right: 4%;}

.vis            {width: 100%;
                height: 200px;
                display: flex;
                justify-content: start;}

.vis_img        {width: 200px;
                height: 200px;
              background: var(--white);
                border-radius: 0 150px 150px 0;}

.vis_img img    {width: 150px;
                height: 200px;}

.vis_txt        {width: 44%;
                height: 200px;
                background: var(--white);
                padding-left: 4%;}

.vis_txt h1     {font-family: var(--heading);
                height: 80px;
                color: var(--dark-blue);
                display: flex;
                align-items: center;}

.vis_txt p      {font-family: var(--para);
                color: var(--dark-blue);
                padding-right: 0%;}

.ahead          {width: 100%;
                height: 400px;
                display: flex;
                flex-direction: column;
                justify-content: center;}

.ahead_title      {width: 100%;
                  height: 100px;
                  display: flex;
                  justify-content: center;
                  align-items: center;
                  font-family: var(--heading);
                  font-size: 40px;
                  font-weight: 700;
                  color: var(--dark-blue);}

.ahead_para       {width: 100%;
                  height: 200px;
                  font-family: var(--para);
                  color: var(--dark-blue);
                  font-size: 25px;
                  padding: 2%;
                  text-align: center;}

}
</style>

        <div class="about-container">
    <div class="about-text" data-aos="fade-left" data-aos-duration="1000">
      <h2>Developing Reliability and Strength</h2>
      <p>
        At Delcon Industries, we create the foundation of industries rather 
        than merely producing steel goods. We were founded with the goal of 
        redefining quality and trust in the Faridabadn steel industry, and we 
        have developed into a reliable producer and supplier of steel circles, 
        CR & HR sheets, and related goods.<br><br>
        Our emphasis on precision engineering, robustness, and customer-focused 
        solutions is what distinguishes us. We guarantee that our clients can 
        depend on us without any compromises because every sheet and circle we 
        produce reflects our dedication to strength, consistency, and performance.
      </p>
    </div>
    <div class="about-image" data-aos="fade-right" data-aos-duration="1000">
      <img src="../img/ceo.jpg" alt="Delcon Industries">
    </div>
  </div>

  <section class="journey">
  <div class="journey_txt" data-aos="fade-right" data-aos-duration="1000">
    <p>In addition to diversifying our product line over time, we have made 
      investments in state-of-the-art facilities, robust logistics, and highly 
      qualified personnel, all of which have allowed us to produce high-quality 
      work quickly and on a large scale.</p>
  </div>
  <div class="journey_txt1" data-aos="fade-left" data-aos-duration="1000">
    <h1>Our Journey</h1>
    <p>What started out as a small business with a clear goal has grown 
      into a well-known brand throughout Faridabad's steel supply chain. Our 
      journey from trading steel products to becoming a full-fledged 
      manufacturing and distribution company is a testament to 
      perseverance, creativity, and a problem-solving mindset.</p>
  </div>
</section>

<section class="misvis">
  <div class="mis">
    <div class="mis_img"><img src="../img/mission.png" alt=""></div>
    <div class="mis_txt">
      <h1>Our Mission</h1>
      <p>To supply industries with high-performance steel products that 
        enable them to attain operational excellence. Our goal is to 
        resolve common problems involving strength, dependability, and 
        prompt availability while maintaining the principles of openness 
        and confidence.</p>
    </div>
  </div>

  <div class="vis">
    <div class="vis_txt">
      <h1>Our Vision</h1>
      <p>To be one of Faridabad's most reputable steel producers and suppliers, 
        renowned for our creativity, dependability, and enduring customer 
        relationships. In our ideal future, Delcon Industries will be known 
        for its dependability and growth-oriented teamwork.</p>
    </div>
    <div class="vis_img"><img src="../img/vision.png" alt=""></div>
  </div>
</section>

<section class="ahead">
  <div class="ahead_title">
    Looking Ahead
  </div>
  <div class="ahead_para">
    This is just the beginning of our journey. We get closer to our 
    objective of dominating the steel manufacturing industry in Faridabad 
    with each alliance we form and each product we produce. We are 
    creating a future where excellence is expected and dependability 
    is ensured by fusing cutting-edge technology, moral business conduct, 
    and a thorough understanding of our clients.
  </div>
</section>

<?php include('../faridabad/footer.php');?>
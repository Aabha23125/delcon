<?php include('header.php');?>

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

    .locations          {width: 100%;
                        height: 500px;
                        display:grid;
                        grid-template-columns:1fr 1fr 1fr;
                        grid-template-rows:1fr 1fr;
                        justify-items:center;
                        align-items:center;
                        padding-top:5%;}

    .locations a        {width: 70%;
                        height: 90px;
                        background: pink;
                        border-radius: 10px;
                        background: var(--light-blue);
                        font-family:var(--para);
                        font-size:25px;
                        text-decoration:none;
                        color: #000;
                        display:flex;
                        justify-content:center;
                        align-items:center;
                        border: 2px solid var(--dark-blue);}

    .list               {width: 70%;
                        height: 90px;
                        display:flex;
                        justify-content:center;
                        align-items:center;}
</style>
<section class="locations">
    <a href="delhi/index.php"><div class="list">DELHI</div></a>
    <a href="Faridabad/index.php"><div class="list">Faridabad</div></a>
    <a href="Gurgaon/index.php"><div class="list">Gurgaon</div></a>
    <a href="Palwal/index.php"><div class="list">Palwal</div></a>
    <a href="Sonipat/index.php"><div class="list">Sonipat</div></a>
</section>

<?php include('footer.php');?>
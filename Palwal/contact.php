<?php $page_title = "Contact Us | HROP Sheet Manufacturer & Supplier in Palwal | Get a Quote";
$description = "Get in touch with us — Palwal’s leading HROP Sheet manufacturer and supplier. Enquire about product details, pricing, and bulk orders for hot rolled pickled and oiled sheets.";
$keyword = "Contact HROP Sheet Manufacturer, HROP Sheet Supplier Palwal, Buy HROP Sheets, HROP Steel Sheet Price, HROP Sheet Manufacturer Contact";
 include('../Palwal/header.php');?>


  <style>
 @font-face {
    font-family: 'Montserrat';
    src: url("font/montserrat/Montserrat-Bold.ttf");
  }

   @font-face {
    font-family: 'Roboto';
    src: url("font/roboto/Roboto-Regular.ttf");
  }

    /* Non-responsive fixed-layout Contact Page (no media queries) */
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

        body        {background: var(--light-blue);}
     

    .page{
background:#fff;
border-radius:8px;
box-shadow:0 8px 28px rgba(15,20,25,0.08);
overflow:hidden;
display:flex;
}


.left{
width:360px;
padding:36px;
background: linear-gradient(180deg, #fff 0%, #fbfdff 100%);
border-right:1px solid #eee;
}


.brand{display:flex;
    align-items:center;
    gap:12px;
    margin-bottom:18px;}

.logo{width:48px;
    height:48px;
    border-radius:8px;
    background:var(--accent);
    display:inline-block;
    box-shadow:0 2px 6px rgba(15,76,129,0.16);}

h1{font-size:20px;
    margin:0 0 8px 0;
    font-family: var(--heading);}

p.lead{margin:0 0 16px 0;
    color:var(--muted);
    font-size:13px;}


.contact-list{margin-top:12px;}

.contact-item{margin-bottom:14px;}

.contact-item strong{display:block;
    font-size:13px;
        font-family: var(--heading);}

.contact-item span{display:block;
    color:var(--muted);
    font-size:13px;}


.hours{margin-top:10px;
    font-size:13px;
    color:var(--muted);}


.right{padding:36px;
    flex:1;}


form{display:block;}
.grid{display:grid;
    grid-template-columns:1fr 1fr;
    gap:12px 16px;
    margin-bottom:12px;}

label{font-size:23px;
    font-weight: 700;
    color:var(--dark-blue);
    display:block;
    margin-bottom:6px;
    font-family: var(--heading);}


input[type="text"], input[type="email"], input[type="tel"], textarea, select{
width:100%;
padding:10px 12px;
border:1px solid #ddd;
border-radius:6px;
font-size:14px;
box-sizing:border-box;
outline:none;
}

textarea{min-height:150px;
    resize:vertical;}


.form-header{display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:6px;}

.form-header h2{margin:0;
    font-size:18px;}

.form-header .required-note{font-size:12px;
    color:var(--muted);}


.actions{display:flex;
    align-items:center;
    gap:12px;
    margin-top:12px;}

.btn{background:var(--accent);
    color:var(--dark-blue);
    padding:10px 16px;
    border-radius:8px;
    border:none;
    cursor:pointer;
    font-weight:600;
    box-shadow:0 6px 18px rgba(15,76,129,0.12);}

.secondary{background:transparent;
    color:var(--accent);
    border:1px solid #e6eef9;
    padding:8px 12px;
    border-radius:8px;
    cursor:pointer;}

.note{font-size:22px;
    font-family: var(--heading);
    color:var(--muted);}


.map        {width: 100%;
            height: 600px;
            display: flex;
            justify-content: center;
            align-items: center;}






  </style>


  <div class="page">
<span>+91 98765 43210</span>
<div class="hours">
<strong>Hours</strong>
<div>Mon — Fri: 9:30 AM — 6:00 PM</div>
<div>Sat: 10:00 AM — 2:00 PM</div>
</div>
</div>
</aside>


<section class="right" aria-label="Contact form">
<form id="contactForm" action="#" method="post" novalidate>
<div class="form-header">
<div class="required-note">Fields marked * are required</div>
</div>


<div class="grid">
<div>
<label for="name">Full name *</label>
<input id="name" name="name" type="text" required placeholder="Your full name" />
</div>
<div>
<label for="company">Company</label>
<input id="company" name="company" type="text" placeholder="Optional" />
</div>
<div>
<label for="email">Email *</label>
<input id="email" name="email" type="email" required placeholder="you@domain.com" />
</div>
<div>
<label for="phone">Phone</label>
<input id="phone" name="phone" type="tel" placeholder="+91 98765 43210" />
</div>
</div>


<div class="subject">
<label for="subject">Subject</label>
<input id="subject" name="subject" type="text" placeholder="What is this about?" />
</div>


<div class="message">
<label for="message">Message *</label>
<textarea id="message" name="message" required placeholder="Write your message here..."></textarea>
</div>


<div class="actions">
<button class="btn" type="submit">Send message</button>
<button class="secondary" type="reset">Reset</button>
<div class="note">Or email us at <strong>shitiz@delconindustries.in</strong></div>
</div>
</form>


<div class="privacy">
<strong>Privacy:</strong> We store contact details only to respond to your request. Replace this text with your privacy policy snippet.
</div>
</section>
</div>
</div>

<div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7003.549721527062!2d77.140374!3d28.636509!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d0322516eccbd%3A0xa7ef7e49b542a8c1!2sDelcon%20Industries!5e0!3m2!1sen!2sin!4v1759571752695!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>

  <?php include('../Palwal/footer.php');?>
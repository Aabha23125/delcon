<?php $page_title = "HR sheet manufacturer in Gurgaon";
$description = "Being the top HR sheet manufacturer in Gurgaon, we are aware of the requirement for sheets that can resist extreme pressure and harsh environments. Our sheets' accurate composition and dependable";
$keyword = "HR sheet manufacturer in Gurgaon,Best HR sheet manufacturer in Gurgaon,Top HR sheet manufacturer in Gurgaon,HR sheets supplier in Gurgaon,Best HR sheets supplier in Gurgaon,Top HR sheets supplier in Gurgaon,HR Sheet Manufacturer,Trusted HR Sheets supplier in Gurgaon,Hot rolled steel sheet manufacturer in Gurgaon,Leading HR steel sheet supplier in Gurgaon,Industrial grade HR sheets manufacturer in Gurgaon,High-quality HR sheets supplier in Gurgaon,Mild steel HR sheet supplier in Gurgaon,HR sheets supplier for construction and fabrication,HR coil sheet manufacturer in Gurgaon,Affordable HR sheets price in Gurgaon,Custom size HR sheet supplier in Gurgaon,HR sheet manufacturing company in Gurgaon";
 include('../Gurgaon/header.php');?>


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

header        {width: 100%;
                  height: 350px;
                  background-image: url("../img/hr_sheets.png");
                  background-position: center;
                  background-size: 100% 100%;}

    .head_cont    {width: 100%;
                  height: 350px;
                  background: #00235e67;
                  padding-left: 5%;
                  color: #fff;
                  display: flex;
                  flex-direction: column;
                  justify-content: flex-end;}

    .head_cont h1     {width: 50%;
                      height: 50px;
                      font-family: var(--heading);
                      color: var(--yellow);
                      font-size: 25px;}

    .head_cont .title   {width: 50%;
                        height: 60px;
                        font-weight: 400;
                        font-family: var(--heading);}

    .head_cont p      {width: 50%;
                      height: 150px;
                      font-family: var(--para);
                      font-size: 10px;}

    .unique           {width: 100%;
                      height: 1200px;
                      display: flex;
                      flex-direction: column;}

    .unique_img       {width: 100%;
                      height: 400px;
                      display: flex;
                      justify-content: center;
                      align-items: center;}

    .unique_img img   {width: 350px;
                      height: 250px;
                      border-radius: 20px;}

    .unique_txt       {width: 100%;
                      height: 1000px;
                      font-size: 20px;
                      font-family: var(--heading);
                      display: flex;
                      flex-direction: column;
                      align-items: center;
                      justify-content: space-evenly;}

    .title1           {width: 90%;
                      height: 80px;
                      font-size: 25px;
                      font-family: var(--heading);
                      font-weight: 700;
                      color: var(--blue);
                      display: flex;
                      justify-content: left;
                      align-items: center;}

    .para             {width: 90%;
                      height: 100px;
                      font-family: var(--para);
                      text-align: left;
                      font-size: 15px;}

    .pts              {width: 90%;
                      height: 50px;
                      font-size: 15px;
                      font-family: var(--para);
                      display: flex;
                      align-items: center;}
    
    .pts span           {font-family: var(--heading);
                        font-size: 30px;
                        font-weight: 700;
                        color: #618abb;
                        background-image: linear-gradient(to top right, var(--yellow) 50%, var(--white) 50%);
                        width: 30px;}

    .clients             {width: 100%;
                        height: 900px;
                        background: #618abb;
                          display: flex;
                          flex-direction: column;
                        justify-content: center;
                      align-items: center;}

    .client_title       {width: 90%;
                        height: 80px;
                        color: var(--yellow);
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        font-size: 18px;
                        font-family: var(--heading);
                        font-weight: 700;}

    .client_para        {width: 90%;
                        height: 120px;
                        color: var(--white);
                        text-align: center;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        font-size: 15px;
                        font-family: var(--heading);}

    .client_point       {width: 90%;
                        height: 500px;
                        display: grid;
                        grid-template-columns: 1fr 1fr;
                        grid-template-rows: 1fr 1fr;
                        justify-items: center;
                        align-items: center;}

    .client_pts         {width: 80%;
                        height: 200px;
                        display: flex;
                        border-radius: 20px;
                        flex-direction: column;
                        justify-content: flex-start;
                        align-items: center;
                        padding: 15% 4%;
                        font-size: 15px;
                        text-align: center;
                        font-family: var(--para);
                        background: var(--white);
                      box-shadow: 0 5px 15px var(--dark-blue);}

    .fa-square-check      {color: var(--yellow);
                          font-size: 45px;}

    .fa-star              {color: var(--yellow);
                          font-size: 45px;}

    .fa-clock             {color: var(--yellow);
                          font-size: 45px;}

    .fa-gear              {color: var(--yellow);
                          font-size: 45px;}

    .client_para1       {width: 100%;
                        height: 80px;
                        font-size: 25px;
                        color: var(--white);
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        font-family: var(--para);}

    .lower              {width: 100%;
                        height: 200px;
                        display: flex;
                        flex-direction: column;
                        justify-content: center;
                        align-items: center;}

    .lower_title        {width: 80%;
                        height: 35px;
                        background-image: linear-gradient(to top, var(--yellow) 50%, var(--white) 50%);
                        font-size: 16px;
                        font-family: var(--heading);
                        font-weight: 700;
                        color: var(--blue);
                        display: flex;
                        justify-content: center;
                        align-items: center;}

    .lower_para         {width: 100%;
                        height: 120px;
                        font-size: 10px;
                        font-family: var(--para);
                        display: flex;
                        text-align: center;
                        padding: 4%;
                        justify-content: center;
                        align-items: center;}

    .rely           {width: 100%;
                      height: 900px;
                      display: flex;
                      flex-direction: column;
                      justify-content: center;
                      align-items: center;
                      background: var(--blue);}

    .rely_img       {width: 80%;
                      height: 500px;
                      display: flex;
                      justify-content: center;
                      align-items: center;}

    .rely_img img   {width: 350px;
                      height: 250px;
                      border-radius: 20px;}

    .rely_txt       {width: 80%;
                      height: 800px;
                      font-size: 20px;
                      font-family: var(--heading);
                      display: flex;
                      flex-direction: column;
                      align-items: center;
                      justify-content: center;}

    .rely_title1           {width: 100%;
                      height: 100px;
                      font-size: 20px;
                      font-family: var(--heading);
                      font-weight: 700;
                      color: var(--yellow);
                      display: flex;
                      justify-content: center;
                      align-items: center;}

    .rely_para             {width: 100%;
                      height: 150px;
                      color: var(--white);
                      font-family: var(--para);
                      text-align: center;
                      font-size: 15px;}

    .rely_pts              {width: 80%;
                      height: 40px;
                      background: var(--white);
                      font-size: 12px;
                      color: var(--dark-blue);
                      margin-top: 3%;
                      padding-right: 2%;
                      border-radius: 10px;
                      font-family: var(--para);
                      display: flex;
                      align-items: center;
                      justify-content: right;}

    .rely_pts .fa-square-check    {font-size: 30px;}
    
    .rely_pts span           {font-family: var(--heading);
                        font-size: 50px;
                        font-weight: 700;
                        color: #618abb;
                        background-image: linear-gradient(to top right, var(--yellow) 50%, var(--white) 50%);
                        width: 50px;}

@media only screen and (min-width: 768px) {
  
  .navbar             {width: 100%;
                        height: 10vh;
                        background: var(--blue);
                        backdrop-filter: blur(15px);
                        border-bottom: 3px solid var(--light-blue);
                        display: flex;
                        position: fixed;
                        top: 0;
                        z-index: 10000;}

    .logo               {width: 30%;
                        height: 9vh;
                        font-size: 28px;
                        display: flex;
                        justify-content: center;}

    .logo img           {width: 135px;
                        height: 55px;}

  .hamburger {
    display: none;
  }

  .nav-links {width: 80%;
    height: 10vh;
    display: flex !important;
    background: none;
    justify-content: end;
    align-items: center;
    font-size: 13px;
    padding-right: 20px;
    position: static;
    flex-direction: row;
    
  }

  .nav-links a {
    padding: 8px 15px;
    border: none;
    font-size: 20px;
    text-decoration: none;
    cursor: pointer;
    color: var(--white);
    transition: all 100ms ease-in-out;
    font-family: var(--heading);
  
    border-radius: 5px;}
    
    .nav-links a:hover {box-shadow: inset 4px 4px 10px var(--grey), inset -4px -4px 10px var(--white);}

    

  .dropdown {
  float: left;
  overflow: hidden;
}

.dropdown a:hover {border: none;}

.dropdown .dropbtn {
  font-size: 20px;  
  border: none;
  outline: none;
  color: var(--white);
  padding: 14px 16px;
  background-color: inherit;
  margin: 0;
  border-radius: 15px;
  
}




.dropdown-content {
  display: none;
  position: absolute;
  background: var(--dark-blue);
  min-width: 100px;
  top: 60px;
  right: 150px;
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color:var(--white);
  padding: 12px 16px;
  font-size: 15px;
  text-decoration: none;
  display: block;
  text-align: left;
  font-family: var(--para);
}

.dropdown-content a:hover {
  box-shadow: inset 4px 4px 10px var(--grey), inset -4px -4px 10px var(--white);
  background-color:var(--light-blue);
color: var(--dark-blue);
}

.dropdown:hover .dropdown-content {
  display: block;
  background: var(--dark-blue);
}

    header        {width: 100%;
                  height: 550px;
                  background-image: url("../img/hr_sheets.png");
                  background-position: center;
                  background-size: 100% 150%;}

    .head_cont    {width: 100%;
                  height: 550px;
                  background: #00235e67;
                  padding-left: 5%;
                  color: #fff;
                  display: flex;
                  flex-direction: column;
                  justify-content: flex-end;}

    .head_cont h1     {width: 50%;
                      height: 80px;
                      font-family: var(--heading);
                      color: var(--yellow);
                      font-size: 40px;}

    .head_cont .title   {width: 50%;
                        height: 60px;
                        font-weight: 700;
                        font-family: var(--heading);}

    .head_cont p      {width: 50%;
                      height: 250px;
                      font-family: var(--para);
                      font-size: 15px;}

    .unique           {width: 100%;
                      height: 1000px;
                      display: flex;
                      flex-direction:row;}

    .unique_img       {width: 50%;
                      height: 1000px;
                      display: flex;
                      justify-content: center;
                      align-items: center;}

    .unique_img img   {width: 350px;
                      height: 250px;
                      border-radius: 20px;}

    .unique_txt       {width: 50%;
                      height: 1000px;
                      font-size: 20px;
                      font-family: var(--heading);
                      display: flex;
                      flex-direction: column;
                      align-items: center;
                      justify-content: space-evenly;}

    .title1           {width: 90%;
                      height: 100px;
                      font-size: 25px;
                      font-family: var(--heading);
                      font-weight: 700;
                      color: var(--blue);
                      display: flex;
                      justify-content: left;
                      align-items: center;}

    .para             {width: 90%;
                      height: 100px;
                      font-family: var(--para);
                      text-align: left;
                      font-size: 15px;}

    .pts              {width: 90%;
                      height: 50px;
                      font-size: 15px;
                      font-family: var(--para);
                      display: flex;
                      align-items: center;}
    
    .pts span           {font-family: var(--heading);
                        font-size: 30px;
                        font-weight: 700;
                        color: #618abb;
                        background-image: linear-gradient(to top right, var(--yellow) 50%, var(--white) 50%);
                        width: 30px;}

    .clients             {width: 100%;
                        height: 700px;
                        background: #618abb;
                          display: flex;
                          flex-direction: column;
                        justify-content: center;
                      align-items: center;}

    .client_title       {width: 80%;
                        height: 80px;
                        color: var(--yellow);
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        font-size: 25px;
                        font-family: var(--heading);
                        font-weight: 700;}

    .client_para        {width: 90%;
                        height: 120px;
                        color: var(--white);
                        text-align: center;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        font-size: 15px;
                        font-family: var(--heading);}

    .client_point       {width: 90%;
                        height: 300px;
                        display: grid;
                        grid-template-columns: 1fr 1fr 1fr 1fr;
                        grid-template-rows: 1fr;
                        justify-items: center;
                        align-items: center;}

    .client_pts         {width: 80%;
                        height: 200px;
                        display: flex;
                        border-radius: 20px;
                        flex-direction: column;
                        justify-content: flex-start;
                        align-items: center;
                        padding: 15% 4%;
                        font-size: 15px;
                        text-align: center;
                        font-family: var(--para);
                        background: var(--white);
                      box-shadow: 0 5px 15px var(--dark-blue);}

    .fa-square-check      {color: var(--yellow);
                          font-size: 45px;}

    .fa-star              {color: var(--yellow);
                          font-size: 45px;}

    .fa-clock             {color: var(--yellow);
                          font-size: 45px;}

    .fa-gear              {color: var(--yellow);
                          font-size: 45px;}

    .client_para1       {width: 100%;
                        height: 80px;
                        font-size: 25px;
                        color: var(--white);
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        font-family: var(--para);}

    .lower              {width: 100%;
                        height: 300px;
                        display: flex;
                        flex-direction: column;
                        justify-content: center;
                        align-items: center;}

    .lower_title        {width: 80%;
                        height: 55px;
                        background-image: linear-gradient(to top, var(--yellow) 50%, var(--white) 50%);
                        font-size: 25px;
                        font-family: var(--heading);
                        font-weight: 700;
                        color: var(--blue);
                        display: flex;
                        justify-content: center;
                        align-items: center;}

    .lower_para         {width: 100%;
                        height: 200px;
                        font-size: 15px;
                        font-family: var(--para);
                        display: flex;
                        text-align: center;
                        padding: 4%;
                        justify-content: center;
                        align-items: center;}

    .rely           {width: 100%;
                      height: 1200px;
                      display: flex;
                      flex-direction: column;
                      justify-content: center;
                      align-items: center;
                      background: var(--blue);}

    .rely_img       {width: 80%;
                      height: 800px;
                      display: flex;
                      justify-content: center;
                      align-items: center;}

    .rely_img img   {width: 550px;
                      height: 450px;
                      border-radius: 20px;}

    .rely_txt       {width: 80%;
                      height: 800px;
                      font-size: 20px;
                      font-family: var(--heading);
                      display: flex;
                      flex-direction: column;
                      align-items: center;
                      justify-content: center;}

    .rely_title1           {width: 100%;
                      height: 100px;
                      font-size: 30px;
                      font-family: var(--heading);
                      font-weight: 700;
                      color: var(--yellow);
                      display: flex;
                      justify-content: center;
                      align-items: center;}

    .rely_para             {width: 100%;
                      height: 150px;
                      color: var(--white);
                      font-family: var(--para);
                      text-align: center;
                      font-size: 18px;}

    .rely_pts              {width: 70%;
                      height: 60px;
                      background: var(--white);
                      font-size: 20px;
                      color: var(--dark-blue);
                      margin-top: 3%;
                      padding-right: 2%;
                      border-radius: 10px;
                      font-family: var(--para);
                      display: flex;
                      align-items: center;
                      justify-content: right;}

    .rely_pts .fa-square-check    {font-size: 40px;}
    
    .rely_pts span           {font-family: var(--heading);
                        font-size: 50px;
                        font-weight: 700;
                        color: #618abb;
                        background-image: linear-gradient(to top right, var(--yellow) 50%, var(--white) 50%);
                        width: 50px;}
}

    @media only screen and (min-width: 1280px){

    .navbar             {width: 100%;
                        height: 12vh;
                        background: var(--blue);
                        border-bottom: 4px solid var(--light-blue);
                        display: flex;
                        position: fixed;
                        padding: 5px;
                        top: 0;
                        z-index: 100;}

    .logo               {width: 30%;
                        height: 12vh;
                        }

    .logo img           {width: 185px;
                        height: 75px;}

    
    .hamburger {
    display: none;
  }

  .nav-links {
    width: 100%;
    height: 12vh;
    display: flex !important;
    justify-content: end;
    align-items: center;
    flex-direction: row;
     
  }

  .nav-links a {
    padding: 10px 25px;
    color: var(--white);
    text-decoration: none;
    font-weight: 700;
    font-size: 25px;
    transition: all 100ms ease-in-out;
    cursor: pointer;
    font-family: var(--heading);
    transition: all 300ms ease-in-out;}

    .nav-links span {color: var(--yellow);}

    .nav-links a:hover {color: var(--yellow);}

    

    .dropdown {
  float: left;
  overflow: hidden;
}

.dropdown a:hover {border: none;}

.dropdown .dropbtn {
  font-size: 20px;  
  border: none;
  outline: none;
  color: var(--white);
  padding: 14px 16px;
  background-color: inherit;
  margin: 0;
  border-radius: 15px;
  
}




.dropdown-content {
  display: none;
  position: absolute;
  right: 170px;
  background: var(--dark-blue);
  min-width: 120px;

  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: var(--white);
  padding: 12px 16px;
  text-decoration: none;
  font-size: 18px;
  display: block;
  text-align: left;
  font-family: var(--heading);
  transition: all 400ms ease-in-out;
}

.dropdown-content a:hover {
  background-color: var(--light-blue);
  color: var(--dark-blue);
}

.dropdown:hover .dropdown-content {
  display: block;
}

    header        {width: 100%;
                  height: 650px;
                  background-image: url("../img/hr_sheets.png");
                  background-position: center;
                  background-size: 100% 150%;}

    .head_cont    {width: 100%;
                  height: 650px;
                  background: #00235e67;
                  padding-left: 5%;
                  color: #fff;
                  display: flex;
                  flex-direction: column;
                  justify-content: center;}

    .head_cont h1     {width: 50%;
                      height: 80px;
                      font-family: var(--heading);
                      color: var(--yellow);
                      font-size: 60px;}

    .head_cont .title   {width: 50%;
                        height: 60px;
                        font-weight: 700;
                        font-family: var(--heading);}

    .head_cont p      {width: 50%;
                      height: 200px;
                      font-family: var(--para);
                      font-size: 20px;}

    .unique           {width: 100%;
                      height: 1000px;
                      display: flex;
                      flex-direction: row;}

    .unique_img       {width: 50%;
                      height: 1000px;
                      display: flex;
                      justify-content: center;
                      align-items: center;}

    .unique_img img   {width: 550px;
                      height: 450px;
                      border-radius: 20px;}

    .unique_txt       {width: 50%;
                      height: 1000px;
                      font-size: 20px;
                      font-family: var(--heading);
                      display: flex;
                      flex-direction: column;
                      align-items: center;
                      justify-content: space-evenly;}

    .title1           {width: 90%;
                      height: 100px;
                      font-size: 30px;
                      font-family: var(--heading);
                      font-weight: 700;
                      color: var(--blue);
                      display: flex;
                      justify-content: left;
                      align-items: center;}

    .para             {width: 90%;
                      height: 160px;
                      font-family: var(--para);
                      text-align: left;
                      font-size: 18px;}

    .pts              {width: 90%;
                      height: 80px;
                      font-size: 20px;
                      font-family: var(--para);
                      display: flex;
                      align-items: center;}
    
    .pts span           {font-family: var(--heading);
                        font-size: 50px;
                        font-weight: 700;
                        color: #618abb;
                        background-image: linear-gradient(to top right, var(--yellow) 50%, var(--white) 50%);
                        width: 50px;}

    .clients             {width: 100%;
                        height: 700px;
                        background: #618abb;
                          display: flex;
                          flex-direction: column;
                        justify-content: center;
                      align-items: center;}

    .client_title       {width: 100%;
                        height: 100px;
                        color: var(--yellow);
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        font-size: 35px;
                        font-family: var(--heading);
                        font-weight: 700;}

    .client_para        {width: 100%;
                        height: 120px;
                        color: var(--white);
                        text-align: center;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        font-size: 18px;
                        font-family: var(--heading);}

    .client_point       {width: 80%;
                        height: 300px;
                        display: grid;
                        grid-template-columns: 1fr 1fr 1fr 1fr;
                        grid-template-rows: 1fr;
                        justify-items: center;
                        align-items: center;}

    .client_pts         {width: 80%;
                        height: 250px;
                        display: flex;
                        border-radius: 20px;
                        flex-direction: column;
                        justify-content: center;
                        align-items: center;
                        padding: 4%;
                        font-size: 20px;
                        text-align: center;
                        font-family: var(--para);
                        background: var(--white);
                      box-shadow: 0 5px 15px var(--dark-blue);}

    .fa-square-check      {color: var(--yellow);
                          font-size: 65px;}

    .fa-star              {color: var(--yellow);
                          font-size: 65px;}

    .fa-clock             {color: var(--yellow);
                          font-size: 65px;}

    .fa-gear              {color: var(--yellow);
                          font-size: 65px;}

    .client_para1       {width: 100%;
                        height: 80px;
                        font-size: 25px;
                        color: var(--white);
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        font-family: var(--para);}

    .lower              {width: 100%;
                        height: 300px;
                        display: flex;
                        flex-direction: column;
                        justify-content: center;
                        align-items: center;}

    .lower_title        {width: 50%;
                        height: 55px;
                        background-image: linear-gradient(to top, var(--yellow) 50%, var(--white) 50%);
                        font-size: 30px;
                        font-family: var(--heading);
                        font-weight: 700;
                        color: var(--blue);
                        display: flex;
                        justify-content: center;
                        align-items: center;}

    .lower_para         {width: 100%;
                        height: 200px;
                        font-size: 20px;
                        font-family: var(--para);
                        display: flex;
                        text-align: center;
                        padding: 4%;
                        justify-content: center;
                        align-items: center;}

    .rely           {width: 100%;
                      height: 800px;
                      display: flex;
                      flex-direction: row;
                      background: var(--blue);}

    .rely_img       {width: 50%;
                      height: 800px;
                      display: flex;
                      justify-content: center;
                      align-items: center;}

    .rely_img img   {width: 550px;
                      height: 450px;
                      border-radius: 20px;}

    .rely_txt       {width: 50%;
                      height: 800px;
                      font-size: 20px;
                      font-family: var(--heading);
                      display: flex;
                      flex-direction: column;
                      align-items: flex-end;
                      justify-content: center;}

    .rely_title1           {width: 90%;
                      height: 100px;
                      font-size: 30px;
                      font-family: var(--heading);
                      font-weight: 700;
                      color: var(--yellow);
                      display: flex;
                      justify-content: right;
                      align-items: center;}

    .rely_para             {width: 90%;
                      height: 150px;
                      color: var(--white);
                      font-family: var(--para);
                      text-align: right;
                      font-size: 18px;}

    .rely_pts              {width: 70%;
                      height: 60px;
                      background: var(--white);
                      font-size: 20px;
                      color: var(--dark-blue);
                      margin-top: 3%;
                      padding-right: 2%;
                      border-radius: 10px;
                      font-family: var(--para);
                      display: flex;
                      align-items: center;
                      justify-content: right;}

    .rely_pts .fa-square-check    {font-size: 40px;}
    
    .rely_pts span           {font-family: var(--heading);
                        font-size: 50px;
                        font-weight: 700;
                        color: #618abb;
                        background-image: linear-gradient(to top right, var(--yellow) 50%, var(--white) 50%);
                        width: 50px;}
    
    }
  </style>

    <header>
      <div class="head_cont">
        <h1>HR Sheets</h1>
        <div class="title">HR Sheets Manufacturer in Gurgaon</div>
        <p>We are a high-quality HR Sheets manufacturer in Gurgaon, which is involved in offering premium quality Hot Rolled Sheets that meet the different demands of industries today. Our HR sheets are manufactured using advanced rolling technology to ensure uniform thickness, tensile strength, and surface finish. Most popular for their excellent durability and weldability, these sheets are optimally used in construction, heavy machinery, fabrication, and automobile industries. Subjected to rigorous quality checks and advanced manufacturing units, we offer HR sheets that meet national as well as international standards.</p>
      </div>
    </header>

    <section class="unique">
      <div class="unique_img" data-aos="fade-right" data-aos-duration="1000"><img src="../img/hr_sheets.png" alt=""></div>
      <div class="unique_txt">
        <div class="title1">What Is Unique About Our HR Sheets?</div>
        <div class="para">Our HR sheets are constructed with special 
          characteristics that guarantee great usability and functionality, 
          going beyond simply creating standard sheets. As the best HR 
          sheets supplier in Gurgaon, we guarantee that each batch provides 
          unparalleled quality and consistency. Among the notable attributes 
          are:</div>
          <div class="pts"><span>1</span>&nbsp;&nbsp;Superior tensile strength for demanding uses</div>
          <div class="pts"><span>2</span>&nbsp;&nbsp;Outstanding weldability and ease of formation</div>
          <div class="pts"><span>3</span>&nbsp;&nbsp;Superior ability to withstand corrosion, wear, and damage</div>
          <div class="pts"><span>4</span>&nbsp;&nbsp;Accurate dimensions and uniform thickness</div>
          <div class="pts"><span>5</span>&nbsp;&nbsp;Available in a range of finishes, widths, and grades</div>
        <div class="para1">Our goal is still to provide products that reduce operational issues and increase productivity.</div>
      </div>
    </section>

    <section class="clients">
      <div class="client_title">Why Do Clients Continue to Use Our Services?</div>
      <div class="client_para">Customers should have access to solutions that 
        truly impact their lives, not just items, in our opinion. Being a well-
        known HR Sheet manufacturer in Gurgaon, we have established a solid reputation 
        for dependability, excellence, and customer-focused service. By selecting us, 
        you get:</div>
      <div class="client_point">
        <div class="client_pts" data-aos="fade-up" data-aos-duration="1000"><i class="fa-solid fa-square-check"></i><br>Availability of an extensive product selection with customized specs</div>
        <div class="client_pts" data-aos="fade-up" data-aos-duration="1000"><i class="fa-solid fa-star"></i><br>Affordable rates supported by robust quality control</div>
        <div class="client_pts" data-aos="fade-up" data-aos-duration="1000"><i class="fa-solid fa-clock"></i><br>On-time delivery using efficiently run logistics systems</div>
        <div class="client_pts" data-aos="fade-up" data-aos-duration="1000"><i class="fa-solid fa-gear"></i><br>A group of professionals to provide technical help and assistance</div>
      </div>
      <div class="client_para1">Customers who work with us get a reliable partner who knows what 
        they need and guarantees long-term value.</div>
    </section>

    <section class="lower">
      <div class="lower_title">HR Sheets Supplier  in Gurgaon</div>
      <div class="lower_para">As a trusted HR Sheets supplier in Gurgaon, we offer a wide range of sizes, grades, and specifications to meet varying industrial demands. Our effective logistics and ready stocks help us ship in time and provide the reliability of supply to customers in Gurgaon. Each sheet we deliver is properly tested to ensure dimensional accuracy and durability performance. For infrastructure project demands or mechanical applications, we deliver quality-driven, cost-effective solutions you can trust.</div>
    </section>

    <section class="rely">
      <div class="rely_txt">
        <div class="rely_title1">Who Can Rely on Our HR Sheets?</div>
        <div class="rely_para">Across a wide range of industries, our HR sheets are essential, 
          consistently demonstrating their resilience and flexibility. We have developed into 
          the premier HR Sheet manufacturer in Gurgaon for top industries that require performance 
          over the years. Our services include:</div>
          <div class="rely_pts">Infrastructure development and construction&nbsp;&nbsp;<i class="fa-solid fa-square-check"></i></div>
          <div class="rely_pts">Transportation and automobile equipment&nbsp;&nbsp;<i class="fa-solid fa-square-check"></i></div>
          <div class="rely_pts">Energy and oil, and gas initiatives&nbsp;&nbsp;<i class="fa-solid fa-square-check"></i></div>
          <div class="rely_pts">Fabrication and engineering firms&nbsp;&nbsp;<i class="fa-solid fa-square-check"></i></div>
          <div class="rely_pts">Railways and shipbuilding&nbsp;&nbsp;<i class="fa-solid fa-square-check"></i></div>
      </div>
      <div class="rely_img"><img src="../img/hr_sheets.png" alt=""></div>
    </section>

    <?php include('../Gurgaon/footer.php');?>
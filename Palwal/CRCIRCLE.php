<?php $page_title = "CR Circle manufacturer in Palwal";
$description = "Being the top CR Circle manufacturer in Palwal, we make sure that each product embodies our dedication to quality and functionality. This actually means that every time you receive CR Circles, they not only meet but surpass your expectations.";
$keyword = "CR Circle Manufacturer in Palwal, Best CR Circle Manufacturer in Palwal, Top CR Circle Manufacturer in Palwal, CR Circle Supplier in Palwal, Best CR Circle Supplier in Palwal, Top CR Circle Supplier in Palwal, Cold Rolled Circle Manufacturer, Trusted CR Circle Supplier in Palwal, Cold Rolled Steel Circle Manufacturer in Palwal, Leading CR Steel Circle Supplier in Palwal, Industrial Grade CR Circle Manufacturer in Palwal, High-quality CR Circles Supplier in Palwal, Mild Steel CR Circle Supplier in Palwal, CR Circles Supplier for Fabrication and Machinery, CR Coil Circle Manufacturer in Palwal, Affordable CR Circles Price in Palwal, Custom Size CR Circle Supplier in Palwal, CR Circle Manufacturing Company in Palwal";
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
                      font-size: 8px;}

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
                        height: 600px;
                        background: #618abb;
                          display: flex;
                          flex-direction: column;
                        justify-content: center;
                      align-items: center;}

    .client_title       {width: 90%;
                        height: 60px;
                        color: var(--yellow);
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        font-size: 20px;
                        font-family: var(--heading);
                        font-weight: 700;}

    .client_para        {width: 90%;
                        height: 100px;
                        color: var(--white);
                        text-align: center;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        font-size: 12px;
                        font-family: var(--heading);}

    .client_point       {width: 90%;
                        height: 300px;
                        display: grid;
                        grid-template-columns: 1fr 1fr;
                        grid-template-rows: 1fr 1fr;
                        justify-items: center;
                        align-items: center;}

    .client_pts         {width: 80%;
                        height: 100px;
                        display: flex;
                        border-radius: 10px;
                        flex-direction: column;
                        justify-content: flex-start;
                        align-items: center;
                        padding: 15% 8%;
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

    .client_para1       {width: 80%;
                        height: 80px;
                        font-size: 15px;
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
                      font-size: 25px;
                      font-family: var(--heading);
                      font-weight: 700;
                      color: var(--yellow);
                      display: flex;
                      justify-content: center;
                      align-items: center;}

    .rely_para             {width: 100%;
                      height: 100px;
                      color: var(--white);
                      font-family: var(--para);
                      text-align: center;
                      font-size: 15px;}

    .rely_pts              {width: 80%;
                      height: 60px;
                      background: var(--white);
                      font-size: 10px;
                      color: var(--dark-blue);
                      margin-top: 3%;
                      padding-right: 2%;
                      padding-left: 2%;
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

    .dispatch              {width: 100%;
                        height: 200px;
                        display: flex;
                        flex-direction: column;
                        justify-content: center;
                        align-items: center;}

    .dispatch_title        {width: 70%;
                        height: 35px;
                        background-image: linear-gradient(to top, var(--yellow) 50%, var(--white) 50%);
                        font-size: 10px;
                        font-family: var(--heading);
                        font-weight: 700;
                        color: var(--blue);
                        display: flex;
                        justify-content: center;
                        align-items: center;}

    .dispatch_para         {width: 100%;
                        height: 100px;
                        font-size: 10px;
                        font-family: var(--para);
                        display: flex;
                        text-align: center;
                        padding: 4%;
                        justify-content: center;
                        align-items: center;}

    .serve                {width: 100%;
                          height: 1100px;
                          background: var(--blue);
                          display: flex;
                          flex-direction: column;}

    .serve_txt            {width: 100%;
                          height: 700px;
                          display: flex;
                          flex-direction: column;
                          align-items: center;
                          justify-content: center;}

    .serve_title          {width: 80%;
                          height: 60px;
                          display: flex;
                          justify-content: left;
                          align-items: center;
                          font-size: 25px;
                          font-family: var(--heading);
                          font-weight: 700;
                          color: var(--yellow);}

    .serve_para          {width: 80%;
                          height: 500px;
                          display: flex;
                          flex-direction: column;
                          justify-content: space-evenly;
                          align-items: flex-start;
                          font-size: 12px;
                          font-family: var(--heading);
                          font-weight: 500;
                          color: var(--white);}

    .para_pts             {width: 80%;
                          height: 40px;
                          color: var(--dark-blue);
                          border-radius: 10px;
                          font-size:12px;
                          font-family: var(--para);
                          background: var(--light-blue);
                          display: flex;
                          align-items: center;
                          padding-left: 2%;}

    .para_pts .fa-square-check  {font-size: 20px;
                                color: var(--dark-blue);}

    .growth               {width: 100%;
                          height: 300px;
                          display: flex;
                          flex-direction: column;
                          justify-content: center;
                          align-items: center;}

    .growth_title         {width: 90%;
                          height: 100px;
                          font-size: 20px;
                          font-family: var(--heading);
                          font-weight: 700;
                          color: var(--white);
                          text-align: right;
                          display: flex;
                          justify-content: center;
                          align-items: center;}

    .growth_para         {width: 90%;
                          height: 200px;
                          font-size: 15px;
                          color: var(--white);
                          font-family: var(--para);
                          text-align: right;
                          display: flex;
                          justify-content: center;
                          align-items: center;}

    @media only screen and (min-width: 768px) {

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
                      flex-direction: row;}

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
                        height: 500px;
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
                        font-size: 30px;
                        font-family: var(--heading);
                        font-weight: 700;}

    .client_para        {width: 90%;
                        height: 80px;
                        color: var(--white);
                        text-align: center;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        font-size: 15px;
                        font-family: var(--heading);}

    .client_point       {width: 90%;
                        height: 200px;
                        display: grid;
                        grid-template-columns: 1fr 1fr 1fr 1fr;
                        grid-template-rows: 1fr;
                        justify-items: center;
                        align-items: center;}

    .client_pts         {width: 80%;
                        height: 150px;
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
                      height: 1000px;
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

    .rely_img img   {width: 550px;
                      height: 350px;
                      border-radius: 20px;}

    .rely_txt       {width: 80%;
                      height: 600px;
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
                      height: 100px;
                      color: var(--white);
                      font-family: var(--para);
                      text-align: center;
                      font-size: 18px;}

    .rely_pts              {width: 90%;
                      height: 60px;
                      background: var(--white);
                      font-size: 15px;
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

      .dispatch              {width: 100%;
                        height: 250px;
                        display: flex;
                        flex-direction: column;
                        justify-content: center;
                        align-items: center;}

    .dispatch_title        {width: 70%;
                        height: 55px;
                        background-image: linear-gradient(to top, var(--yellow) 50%, var(--white) 50%);
                        font-size: 20px;
                        font-family: var(--heading);
                        font-weight: 700;
                        color: var(--blue);
                        display: flex;
                        justify-content: center;
                        align-items: center;}

    .dispatch_para         {width: 100%;
                        height: 150px;
                        font-size: 15px;
                        font-family: var(--para);
                        display: flex;
                        text-align: center;
                        padding: 4%;
                        justify-content: center;
                        align-items: center;}

    .serve                {width: 100%;
                          height: 700px;
                          background: var(--blue);
                          display: flex;
                        flex-direction: row;}

    .serve_txt            {width: 50%;
                          height: 700px;
                          display: flex;
                          flex-direction: column;
                          align-items: center;
                          justify-content: center;}

    .serve_title          {width: 80%;
                          height: 60px;
                          display: flex;
                          justify-content: left;
                          align-items: center;
                          font-size: 25px;
                          font-family: var(--heading);
                          font-weight: 700;
                          color: var(--yellow);}

    .serve_para          {width: 80%;
                          height: 500px;
                          display: flex;
                          flex-direction: column;
                          justify-content: space-evenly;
                          align-items: flex-start;
                          font-size: 12px;
                          font-family: var(--heading);
                          font-weight: 500;
                          color: var(--white);}

    .para_pts             {width: 80%;
                          height: 40px;
                          color: var(--dark-blue);
                          border-radius: 10px;
                          font-size:12px;
                          font-family: var(--para);
                          background: var(--light-blue);
                          display: flex;
                          align-items: center;
                          padding-left: 2%;}

    .para_pts .fa-square-check  {font-size: 20px;
                                color: var(--dark-blue);}

    .growth               {width: 50%;
                          height: 700px;
                          display: flex;
                          flex-direction: column;
                          justify-content: center;
                          align-items: center;}

    .growth_title         {width: 90%;
                          height: 100px;
                          font-size: 20px;
                          font-family: var(--heading);
                          font-weight: 700;
                          color: var(--white);
                          text-align: right;
                          display: flex;
                          justify-content: center;
                          align-items: center;}

    .growth_para         {width: 90%;
                          height: 200px;
                          font-size: 15px;
                          color: var(--white);
                          font-family: var(--para);
                          text-align: right;
                          display: flex;
                          justify-content: center;
                          align-items: center;}
}

        @media only screen and (min-width: 1280px){

          .logo img     {width: 150px;}

    header        {width: 100%;
                  height: 650px;
                  background-image: url("../img/circle\ \(2\).jpg");
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
                      height: 1300px;
                      display: flex;
                      align-items: center;}

    .unique_img       {width: 50%;
                      height: 1100px;
                      display: flex;
                      justify-content: center;
                      align-items: flex-start;}

    .unique_img img   {width: 600px;
                      height: 400px;
                      border-radius: 20px;
                      position: sticky;
                      top: 150px;}

    .unique_txt       {width: 50%;
                      height: 1300px;
                      font-size: 20px;
                      font-family: var(--heading);
                      display: flex;
                      flex-direction: column;
                      align-items: center;
                      justify-content: center;}

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
                      height: 100px;
                      font-family: var(--para);
                      text-align: left;
                      font-size: 18px;}

    .pts              {width: 90%;
                      height: 150px;
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

    .para1              {width: 100%;
                        height: 80px;}

    .clients             {width: 100%;
                        height: 700px;
                        background: var(--blue);
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
                        font-size: 40px;
                        font-family: var(--heading);
                        font-weight: 700;}

    .client_para        {width: 80%;
                        height: 80px;
                        color: var(--white);
                        text-align: center;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        font-size: 20px;
                        font-family: var(--heading);}

    .client_point       {width: 90%;
                        height: 300px;
                        display: grid;
                        grid-template-columns: 1fr 1fr 1fr 1fr;
                        grid-template-rows: 1fr;
                        justify-items: center;
                        align-items: center;}

    .client_pts         {width: 80%;
                        height: 160px;
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
                      height: 400px;
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
                      font-size: 35px;
                      font-family: var(--heading);
                      font-weight: 700;
                      color: var(--yellow);
                      display: flex;
                      justify-content: right;
                      align-items: center;}

    .rely_para             {width: 90%;
                      height: 80px;
                      color: var(--white);
                      font-family: var(--para);
                      text-align: right;
                      font-size: 18px;}

    .rely_pts              {width: 90%;
                      height: 60px;
                      background: var(--white);
                      font-size: 18px;
                      color: var(--dark-blue);
                      margin-top: 3%;
                      padding-right: 2%;
                      border-radius: 10px;
                      text-align: right;
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

    .dispatch              {width: 100%;
                        height: 300px;
                        display: flex;
                        flex-direction: column;
                        justify-content: center;
                        align-items: center;}

    .dispatch_title        {width: 60%;
                        height: 55px;
                        background-image: linear-gradient(to top, var(--yellow) 50%, var(--white) 50%);
                        font-size: 30px;
                        font-family: var(--heading);
                        font-weight: 700;
                        color: var(--blue);
                        display: flex;
                        justify-content: center;
                        align-items: center;}

    .dispatch_para         {width: 100%;
                        height: 200px;
                        font-size: 20px;
                        font-family: var(--para);
                        display: flex;
                        text-align: center;
                        padding: 4%;
                        justify-content: center;
                        align-items: center;}

    .serve                {width: 100%;
                          height: 700px;
                          background: var(--blue);
                          display: flex;}

    .serve_txt            {width: 50%;
                          height: 700px;
                          display: flex;
                          flex-direction: column;
                          align-items: center;
                          justify-content: center;}

    .serve_title          {width: 80%;
                          height: 60px;
                          display: flex;
                          justify-content: center;
                          align-items: center;
                          font-size: 35px;
                          font-family: var(--heading);
                          font-weight: 700;
                          color: var(--yellow);}

    .serve_para          {width: 80%;
                          height: 500px;
                          display: flex;
                          flex-direction: column;
                          justify-content: space-evenly;
                          align-items: flex-start;
                          font-size: 15px;
                          font-family: var(--heading);
                          font-weight: 500;
                          color: var(--white);}

    .para_pts             {width: 70%;
                          height: 50px;
                          color: var(--dark-blue);
                          border-radius: 10px;
                          font-size:15px;
                          font-family: var(--para);
                          background: var(--light-blue);
                          display: flex;
                          align-items: center;
                          padding-left: 2%;}

    .para_pts .fa-square-check  {font-size: 20px;
                                color: var(--dark-blue);}

    .growth               {width: 50%;
                          height: 700px;
                          display: flex;
                          flex-direction: column;
                          justify-content: center;
                          align-items: center;}

    .growth_title         {width: 90%;
                          height: 100px;
                          font-size: 35px;
                          font-family: var(--heading);
                          font-weight: 700;
                          color: var(--white);
                          text-align: right;
                          display: flex;
                          justify-content: center;
                          align-items: center;}

    .growth_para         {width: 90%;
                          height: 300px;
                          font-size: 20px;
                          color: var(--white);
                          font-family: var(--para);
                          text-align: right;
                          display: flex;
                          justify-content: center;
                          align-items: center;}

    }
    
  </style>

    <header>
      <div class="head_cont">
        <h1>CR CIRCLE</h1>
        <div class="title">CR Circle Manufacturer in Palwal</div>
        <p>We are one of the well-known CR Circle Manufacturer s in Palwal, and we produce precision-cut Cold Rolled Circles as per strict industrial standards. Our CR circles are perfectly designed with high dimensional accuracy and superior surface finish, which makes them applicable for cookware, automotive, and engineering applications. We use high-quality CR sheets for producing smooth edges and ensuring consistent quality. Our production process is stringent, ensuring durability, uniformity, and superior performance.
</p>
      </div>
    </header>

    <section class="unique">
      <div class="unique_img" data-aos="fade-right" data-aos-duration="1000"><img src="../img/circle (3).jpg" alt=""></div>
      <div class="unique_txt">
        <div class="title1">Why Our CR Circles Are Unique</div>
        <div class="para">Selecting DELCON INDUSTRIES means investing in precisely 
                        engineered solutions rather than merely purchasing a product. 
                        Because our CR Circles blend strength, performance, and consistency, 
                        they are trusted.</div>
          <div class="pts"><span>1</span>&nbsp;&nbsp;Superior tensile strength for demanding uses</div>
          <div class="pts"><span>2</span>&nbsp;&nbsp;Superior surface sheen with constant thickness</div>
          <div class="pts"><span>3</span>&nbsp;&nbsp;Produced using sophisticated cold rolling methods</div>
          <div class="pts"><span>4</span>&nbsp;&nbsp;Durability over time for both commercial and industrial applications</div>
          <div class="pts"><span>5</span>&nbsp;&nbsp;Exact dimensions are ensured by strict tolerance control.</div>
        <div class="para1">Being a reputable CR Circle supplier in Palwal, we guarantee that the items you receive will improve the efficiency of your manufacturing.</div>
      </div>
    </section>

    <section class="clients">
      <div class="client_title">Where Our CR Circles Are Most Effective</div>
      <div class="client_para">Our CR Circles' versatility and robustness are demonstrated by their use in a 
                                variety of sectors. Regardless of the industry or application, they provide dependability.</div>
      <div class="client_point">
        <div class="client_pts" data-aos="fade-up" data-aos-duration="1000">Body parts and automotive parts</div>
        <div class="client_pts" data-aos="fade-up" data-aos-duration="1000">Precision tools and electrical appliances</div>
        <div class="client_pts" data-aos="fade-up" data-aos-duration="1000">The fabrication and engineering sectors</div>
        <div class="client_pts" data-aos="fade-up" data-aos-duration="1000">Applications for furniture and structures</div>
      </div>
      <div class="client_para1">Our CR Circles demonstrate their value wherever accuracy and durability are crucial.</div>
    </section>

    <section class="lower">
      <div class="lower_title">CR Circle Supplier in Palwal</div>
      <div class="lower_para">As a trusted CR Circle supplier in Palwal, we provide different cold rolled circles of different sizes and thicknesses. Our items are world-famous for precision, hardness, and fine finish. We maintain ready stock to address emergency orders and dispatch instantly within the region. Each CR circle is quality checked to facilitate smooth forming and fabricating process. Our commitment to timely service and quality products has established us as a trust-worthy supplier in the industrial sector of Palwal.</div>
    </section>

    <section class="rely">
      <div class="rely_txt">
        <div class="rely_title1">Why Our Clients Trust Us</div>
        <div class="rely_para">Working with a staff that comprehends your needs and provides dependable 
                                solutions is what it means to partner with DELCON INDUSTRIES.</div>
          <div class="rely_pts">On-time delivery accompanied by effective logistics assistance&nbsp;&nbsp;<i class="fa-solid fa-square-check"></i></div>
          <div class="rely_pts">Better product performance that cuts down on waste&nbsp;&nbsp;<i class="fa-solid fa-square-check"></i></div>
          <div class="rely_pts">Options for customization to satisfy a range of industrial demands&nbsp;&nbsp;<i class="fa-solid fa-square-check"></i></div>
          <div class="rely_pts">Affordable prices without sacrificing quality&nbsp;&nbsp;<i class="fa-solid fa-square-check"></i></div>
          <div class="rely_pts">Reputable brand name as an Palwaln producer of CR Circles&nbsp;&nbsp;<i class="fa-solid fa-square-check"></i></div>
      </div>
      <div class="rely_img"><img src="../img/circle (2).jpg" alt=""></div>
    </section>

    <section class="dispatch">
      <div class="dispatch_title">Deliveries & Packaging That Preserve Your Confidence</div>
      <div class="dispatch_para">We recognize the value of on-time and safe delivery. To avoid 
                                damage during handling and transit, our CR Circles are carefully 
                                packed. We guarantee product-safe packaging and prompt shipping 
                                to keep your manufacturing operating efficiently, whether you're 
                                shipping in bulk or custom consignments. We distinguish ourselves 
                                as a trustworthy CR Circle trader in Palwal with our strong logistics 
                                network.</div>
    </section>

    <section class="serve">
      <div class="serve_txt">
        <div class="serve_title">Sectors We Are Glad to Serve</div>
        <div class="serve_para">
          Our CR Circles have been used in a variety of industries, demonstrating their adaptability and reliability in all situations.
          <div class="para_pts"><i class="fa-solid fa-square-check"></i>&nbsp;&nbsp;Transportation and automobiles</div>
          <div class="para_pts"><i class="fa-solid fa-square-check"></i>&nbsp;&nbsp;Electronics and electrical</div>
          <div class="para_pts"><i class="fa-solid fa-square-check"></i>&nbsp;&nbsp;Projects involving infrastructure and construction</div>
          <div class="para_pts"><i class="fa-solid fa-square-check"></i>&nbsp;&nbsp;Heavy machinery and engineering</div>
          <div class="para_pts"><i class="fa-solid fa-square-check"></i>&nbsp;&nbsp;Infrastructure and construction</div>
          <div class="para_pts"><i class="fa-solid fa-square-check"></i>&nbsp;&nbsp;Consumer goods and furniture</div>
        This broad trust enhances our standing as a trustworthy CR Circle supplier in Palwal.
Our versatility and steady quality are demonstrated by the industries we serve.


        </div>
      </div>
      <div class="growth">
        <div class="growth_title">Reasons to Collaborate with DELCON INDUSTRIES</div>
        <div class="growth_para">The problem is that if you choose us, you're choosing a 
                                partner who appreciates your development just as much as 
                                we do. We provide more than just CR Circles; we also provide 
                                reliability, consistency, and quality. We've established 
                                enduring connections because of our years of experience,
                                 robust manufacturing base, and dedication to innovation. 
                                 DELCON INDUSTRIES is the ideal option if you're looking 
                                 for a reliable CR Circle trader in Palwal.<br><br>
                                You receive more than simply goods when you work with us; 
                                you get a partner who cares about your success.
</div>
      </div>
    </section>

    <?php include('../Palwal/footer.php');?>
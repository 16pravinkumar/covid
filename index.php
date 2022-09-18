<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include 'css/style.php' ?>
  <?php include 'links/link.php' ?>

</head>

<body>
  <!-- *************** Nav-contents* ************************ -->
  <nav class="navbar navbar-expand-lg p-3">
    <a class="navbar-brand pl-5" href="#">COVID-19</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse mr-5 " id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto text-uppercase">
        <li class="nav-item active mx-3">
          <a class="nav-link " href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="#">Symptoms</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="#">Prevention</a>
        </li>
        <li class="nav-item mx-3">
          <a class="nav-link" href="#">Conact</a>
        </li>

      </ul>

    </div>
  </nav>

  <!-- ************ Main Header ********************* -->
  <div class="main_container">
    <div class="row h-100 w-100">
      <div class="col-lg-7 col-md-7 col-12 order-lg-1 order-2">
        <div class="left-side  w-100 h-100 d-flex justify-content-center align-items-center ">
          <h1 class="ml-5"> Press conferences on COVID-19 and other global health issues </h1>
        </div>
      </div>
      <div class="col-lg-5 col-md-5 col-12 order-lg-2 order-1">
        <div class="right-side w-100 h-100 d-flex justify-content-center align-items-center mt-auto">
          <img src="images/earth.png" class="imagesearth">
        </div>
      </div>
    </div>
  </div>

  <!-- ********************** Latest Update ******************** -->
  <section class="update mb-5">
    <div class="mb-3">
      <h3 class="text-center">COVID-19 UPDATES</h3>
    </div>

    <div class="d-flex justify-content-around align-items-center mt-5 mx-5 awareness ">
      <div>
        <h2>TOTAL VACCINATION DOSES</h2>
        <h3 class="count">1,524,266</h3>
      </div>
      <div>
        <h2>TOTAL VACCINATION TODAY</h2>
        <h3 class="count">9,20,541</h3>
      </div>
      <div>
        <h2>TOTAL PEOPLE DEATH TODAY</h2>
        <h3 class="count">900</h3>
      </div>
    </div>
  </section>


  <!-- ************************* precaution section *************** -->

  <div id="precaution_id" class="sub-container">
    <div class="container-section">
      <div class="left-container">
        <img src="images/Precaution.svg " alt="">
      </div>

      <div class="right-container">
        <h1>Precaution Dose</h1>
        <p> All fully vaccinated adult citizens (18+ and have taken 2 doses) are eligible for precaution dose from 10/04/2022. Eligible citizens can avail precaution dose at any Government or Private Vaccination Centre. Citizens should carry their Final Certificate of vaccination (with details of both earlier doses). Citizens should use the same mobile number and ID card used for earlier doses.
          <br> <br>

          HCWs, FLWs and Citizens aged 60 year or more, shall continue to receive precaution dose vaccination at any CVC, including free of charge vaccination at Government Vaccination Centre. <br> <br>

          For international travel, precaution dose can be administered to such beneficiary less than 9 months to at a minimum interval of 3 months (90 days) from the date of administration of the second dose as recorded on Co-WlN as per requirement of the destination country. All Vaccination centre in the State where precaution dose is being administered are eligible to administer precaution dose.
        </p>
      </div>
    </div>
  </div>

  <!-- Symptoms Sections -->
  <div id="precaution_id" class="container-fluid  pt-5 pb-5">
    <div class="section_header mb-5 mt-5 text-center">
      <h1 class="text-uppercase">CoronaVirus Symptoms</h1>
    </div>

    <div class="container">
      <div class="row con-symp">
        <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">

            <img src="images/cough-removebg-preview.png" class="img-fluid symptom-img" alt="loading..">
            <figcaption>Cough</figcaption>
          </figure>

        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">

            <img src="images/fever-removebg-preview.png" class="img-fluid " width="155" height="155" alt="loading..">
            <figcaption>Fever</figcaption>
          </figure>

        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">

            <img src="images/cold-removebg-preview.png" class="img-fluid " width="215" height="215" alt="loading..">
            <figcaption>Cold</figcaption>
          </figure>

        </div>


      </div>

      <div class="row con-symp">
        <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">

            <img src="images/brea-removebg-preview.png" class="img-fluid " width="150" height="150" alt="loading..">
            <figcaption>difficulty breathing or shortness <br> of breath</figcaption>
          </figure>

        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">

            <img src="images/runnynose-removebg-preview.png" class="img-fluid " width="150" height="150" alt="loading..">
            <figcaption>Runny Nose</figcaption>
          </figure>

        </div>

        <div class="col-lg-4 col-md-4 col-12">
          <figure class="text-center">

            <img src="images/tiredness-removebg-preview.png" class="img-fluid " width="150" height="150" alt="loading..">
            <figcaption>TiredNess</figcaption>
          </figure>

        </div>


      </div>
    </div>

  </div>

  <!-- ******************** prevention ********************* -->
  <div id="precaution_id" class="container-fluid  pt-5 pb-5 banner">
    <div class="section_header mb-5 mt-5 text-center">
      <h1 class="text-uppercase">6 Steps Prevention Against CoronaVirus</h1>
    </div>
    <div class="container">
      <div class="row ">
        <div class="col-lg-4 col-md-4 col-12 mt-5 ">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12 ">
              <figure class="text-center">

                <img src="images/mask-removebg-preview.png" class="img-fluid covid-img-prevention " width="400" height="400" alt="loading..">

              </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12 covid-contents">
              <p>
              <figcaption>Wear a mask in public, especially indoors or when physical distancing is not possible.</figcaption>
              </p>
            </div>


          </div>

        </div>


        <div class="col-lg-4 col-md-4 col-12 mt-5 ">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12 ">
              <figure class="text-center">

                <img src="images/stay-home-removebg-preview.png" class="img-fluid covid-img-prevention" width="400" height="400" alt="loading..">

              </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12 covid-contents">
              <p>
              <figcaption>Stay home if you feel unwell and save others as well.</figcaption>
              </p>
            </div>


          </div>

        </div>


        <div class="col-lg-4 col-md-4 col-12 mt-5 ">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12 ">
              <figure class="text-center">

                <img src="images/wash-removebg-preview.png" class="img-fluid covid-img-prevention" width="800" height="800" alt="loading..">

              </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12 covid-contents">
              <p>
              <figcaption>Clean your hands for 20 sec and Use soap or other matherial which kills germs. </figcaption>
              </p>
            </div>


          </div>

        </div>
      </div>
    </div>



    <div class="container">
      <div class="row ">
        <div class="col-lg-4 col-md-4 col-12 mt-5 ">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12 ">
              <figure class="text-center">

                <img src="images/tv-removebg-preview.png" class="img-fluid covid-img-prevention" width="400" height="400" alt="loading..">

              </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12 covid-contents">
              <p>
              <figcaption>stay informed by watching news and follow the recommended practice. </figcaption>
              </p>
            </div>


          </div>

        </div>


        <div class="col-lg-4 col-md-4 col-12 mt-5 ">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12 ">
              <figure class="text-center">

                <img src="images/distance-removebg-preview.png" class="img-fluid covid-img-prevention" width="400" height="400" alt="loading..">

              </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12 covid-contents">
              <p>
              <figcaption>Maintain a safe distance from others (at least 1 metre), even if they don’t appear to be sick.</figcaption>
              </p>
            </div>


          </div>

        </div>


        <div class="col-lg-4 col-md-4 col-12 mt-5 ">
          <div class="row">
            <div class="col-lg-4 col-md-4 col-12 ">
              <figure class="text-center">

                <img src="images/covid-removebg-preview.png" class="img-fluid covid-img-prevention" width="400" height="400" alt="loading..">

              </figure>
            </div>
            <div class="col-lg-8 col-md-8 col-12 covid-contents">
              <p>
              <figcaption>Cover your nose and mouth with your bent elbow or a tissue when you cough or sneeze.</figcaption>
              </p>
            </div>


          </div>

        </div>
      </div>
    </div>





  </div>

  <!-- ****************************** Contact US ASAP ************************** -->
  <div id="precaution_id" class="container-fluid  pt-5 pb-5">
    <div class="section_header mb-5 mt-5 text-center">
      <h1 class="text-uppercase"></h1>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-8 offset-lg-2 col-12">

          <form>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4">
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="inputPassword4">
              </div>
            </div>
            <div class="form-group">
              <label for="inputAddress">Address</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="form-group">
              <label for="inputAddress2">Address 2</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity">
              </div>
              <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <select id="inputState" class="form-control">
                  <option selected>Choose...</option>
                  <option>...</option>
                </select>
              </div>
              <div class="form-group col-md-2">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" id="inputZip">
              </div>
            </div>
            <div class="form-group">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                  Check me out
                </label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
          </form>
        </div>
      </div>
    </div>


  </div>

</body>

</html>
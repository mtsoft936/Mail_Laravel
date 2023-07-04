<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Temporary Disposable Gmail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
    <div class="container-fluid p-0 align-middle">
      <!-- <nav class="nav bg-primary p-2 d-flex justify-content-around">
        <div class="d-flex">
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">10 Minute Mail</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Bulk Emails</a>
          </li>
        </div>
        <div class="d-flex">
          <li class="nav-item">
            <a class="nav-link text-white" href="#"
              ><span class="material-icons">email</span></a
            >
          </li>
        </div>
        <div class="d-flex">
          <li class="nav-item">
            <a class="nav-link text-white" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Temp Number</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">API</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="#">Premium</a>
          </li>
          <button
            class="btn d-flex btn-outline-primary align-items-center text-white border-white"
          >
            <span class="material-icons">lock</span>
            Login
          </button>
        </div>
      </nav> -->
      <div class="main-back position-fixed"></div>
      <main class="d-flex justify-content-center mt-3 align-middle">
        <div class="email-generation-modal"  style="margin-top:10vh; background-color:#f3f1f1;">
          <div
            class="bg-secondary p-2 text-center text-white font-weight-bold modal-head"
          >
            Disposable Email Address
          </div>
          <div class="modal-content p-3 d-flex flex-column align-items-center">
            <input type="text" class="mt-3 form-control" readonly p-3 />
            <button type="button" class="mt-3 btn btn-secondary text-white go-btn d-flex justify-content-center align-items-center">
              Go !
            </button>
            <div class="d-flex mt-3">
              <div class="form-check form-switch d-flex justify-content-center align-items-center check-btn">
                <input
                  class="form-check-input"
                  type="checkbox"
                  id="flexSwitchCheckChecked"
                  checked
                />
                <label class="form-check-label" for="flexSwitchCheckChecked"
                  >Domain</label
                >
              </div>
              <div class="form-check form-switch d-flex justify-content-center align-items-center check-btn">
                <input
                  class="form-check-input color-secondary"
                  type="checkbox"
                  id="flexSwitchCheckChecked"
                  checked
                />
                <label class="form-check-label" for="flexSwitchCheckChecked"
                  >+Gmail</label
                >
              </div>
              <div class="form-check form-switch d-flex justify-content-center align-items-center check-btn">
                <input
                  class="form-check-input"
                  type="checkbox"
                  id="flexSwitchCheckChecked"
                  checked
                />
                <label class="form-check-label" for="flexSwitchCheckChecked"
                  >.Gmail</label
                >
              </div>
              <div class="form-check form-switch d-flex justify-content-center align-items-center check-btn">
                <input
                  class="form-check-input"
                  type="checkbox"
                  id="flexSwitchCheckChecked"
                  checked
                />
                <label class="form-check-label" for="flexSwitchCheckChecked"
                  >GoogleMail</label
                >
              </div>
            </div>
            <button type="button" class="btn btn-secondary mt-3 d-flex generate-btn">
              Generate New <span class="material-icons text-white"> sync </span>
            </button>
            <a class="text-secondary mt-3 text-decoration-none justify-content-right">Click here for 10 minute mail
            </a>
            <a class="text-secondary mt-3 text-decoration-none justify-content-right mt-1">Click here for custom email.
            </a>
          </div>
        </div>
      </main>
      <footer class="bg-secondary pt-4 pl-5 pr-5 text-white fixed-bottom">
        <h3 class="text-center">What is Tmail</h3>
        <p>
          Tmail is a free service that allows getting instant temporary
          email it is also known as "tempmail", "10 minute mail", "throw away
          mail", "disposable mail", fake email, and "trash mail". It is used to
          prevent spam into your personal email address. Most of the sites
          require to register in order to view content, post comments,or
          download files like forums, blogs, public WI-FI spots, etc. you can
          use gmailnator to get instant email without using your real email
          address.<br />
          <br />Never use temporary mail for important information. It is a
          public email and can be accessed by anyone and your mail address is
          only temporary.
        </p>
      </footer>
    </div>
  </body>
</html>

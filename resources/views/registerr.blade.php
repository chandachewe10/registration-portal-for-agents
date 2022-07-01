<!doctype html>
<html lang="en">

<head>
  <title>MyEliana Group &mdash; myEliana Connect</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">
<style>
.btnn:link, .btnn:visited {
  background-color: orange;
  color: black;
  font-weight: 300px;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 30px;
}

.btnn:hover, .btnn:active {
  background-color: black;
  color: orange
}
.btnn1{
  
  background-color: orange;
 color: white;
 font-weight:300px;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 20px;
}
.btnn1:hover, .btnn:active {
   background-color: black;
  color: orange;
}
  @media (min-width: 768px) {
    .btnn1 {
      font-size: 2rem; } }

</style>

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar site-navbar-target" style="background:orange;" role="banner" >

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.html" class="h2 mb-0" style="color:white;">Eliana Connect<span
                  class="text-primary">.</span> </a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li class="has-children">
                  <a href="#about-section" class="nav-link">About Us</a>
                  <ul class="dropdown">
                    <li><a href="#team-section" class="nav-link">Team</a></li>
                    <li><a href="#pricing-section" class="nav-link">Pricing</a></li>
                    <li><a href="#faq-section" class="nav-link">FAQ</a></li>
                    <li><a href="#gallery-section" class="nav-link">Gallery</a></li>
                    <li><a href="#services-section" class="nav-link">Services</a></li>
                    <li><a href="#testimonials-section" class="nav-link">Testimonials</a></li>
                  </ul>
                </li>


                  <li><a href="/ecagency" class="nav-link">Login</a></li>
                <li><a href="/agency" class="nav-link"style="background:orange;">Register</a></li>
                <li class="social"><a href="#contact-section" class="nav-link"><span class="icon-facebook"></span></a>
                </li>
                <li class="social"><a href="#contact-section" class="nav-link"><span class="icon-twitter"></span></a>
                </li>
                <li class="social"><a href="#contact-section" class="nav-link"><span class="icon-linkedin"></span></a>
                </li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#"
              class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>

    </header>


    

    <section>
      <!--Here Comes about us-->
      <div class="site-section cta-big-image" id="about-section">
      <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/hero_1.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 py-5">
            <h3>Register as Eliana Connect Sales Agent</h3>
            <p class="mb-4">Register now and start earning for every sale</p>
            <form name="my-form" onsubmit="return validform()" action="{{ route('register') }}" method="POST">
               @csrf
               <input type="hidden" id="role_id" name="role_id" value="3" >
               <div class="row">
                <div class="col-md-12">
                  <div class="form-group first">
                    <label for="email">Enter Full name</label>
                    <input type="text" class="form-control" placeholder="john cena " id="full-name" name="name"required autocomplete="name" autofocus>
                  </div>    
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group first">
                    <label for="email">Email Address</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="eliana@gmail.com" required autocomplete="email">
                    @error('email')
                          <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                  </div>    
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="lname">Phone Number</label>
                    <input type="text" class="form-control" placeholder="+2600000000" id="phone"  name="phone">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="lname">Mobile Money</label>
                    <input type="text" class="form-control" placeholder="+2600000000" id="mmoney"  name="mmoney">
                  </div>    
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="lname">NRC number</label>
                    <input type="text" class="form-control" placeholder="4040/40/1" id="nrc"  name="nrc">
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="lname">Province</label>
                      <select  class="form-control" name="province_id" id="province_id" >
                      <option value="2">Lusaka</option>
                      <option value="1">Copperbelt</option>
                      <option value="5">Western</option>
                      <option value="6">Northern</option>
                      <option value="10">Luapula</option>
                      <option value="7"> North western</option>
                      <option value="8">southern</option>
                      <option value="9">Muchinga</option>
                      <option value="4">Eastern</option>
                      <option value="3">Central</option>
                     </select>
                  </div>    
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
              
                  <div class="form-group last mb-3">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                     <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                     </span>
                    @enderror
                  </div>
                </div>
                <div class="col-md-6">
              
                  <div class="form-group last mb-3">
                    <label for="re-password">Re-type Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                  </div>
                </div>
              </div>
              
              <div class="d-flex mb-5 mt-4 align-items-center">
                <div class="d-flex align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Creating an account means you're okay with our 
                  <a href="#"  data-target="#content-scroll-dialog" data-toggle="modal" class=" pmd-ripple-effect  pmd-btn-raised">Terms and Conditions</a></span>
                  <input type="checkbox" checked="checked"/>
                  <div class="control__indicator"></div>
                </label>
              </div>
              </div>
              <!-- Terms and conditions Content Modal -->
              <div tabindex="-1" class="modal pmd-modal fade" id="content-scroll-dialog" style="display: none;" aria-hidden="true">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h2 class="modal-title">Terms and Conditions</h2>
                              <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                          </div>
                          <div class="modal-body">
                            <P>This Sales Agency Agreement (the “Agreement”) is between Eliana Connect., a corporation (the “Company”) and the Sales Agent is made on the day of signing up as an Eliana Connect Sales Agent. <br>
                          
                             The Company wishes to retain Sales Agent to sell its Products (as hereinafter defined) and Sales Agent wishes to act as the Company’s exclusive Sales Agent. <br>
                            NOW THEREFORE, in consideration of the mutual covenants and provisions herein contained, and other good and valuable consideration, the receipt and sufficiency of which is acknowledged by the parties hereto the parties agree as follows: <br>
                         


                            </P>
                            
                              <p>
                              1.	APPOINTMENT OF SALES AGENT<br>
                                Subject to the provisions of the Agreement, the Company hereby appoints Sales Agent and Sales Agent hereby accepts appointment as the Sales Agent for Eliana Connect products. Sales Agent shall have the right to solicit orders
                                 for Products only from persons and entities. Any sale of Products shall be credited as sales made by Sales Agent and Sales Agent shall be entitled to the commission provided herein. 

                              </p>
                              <p>
                              2.	SALES AGENT’S OBLIGATIONS <br>
                              In addition to any and all covenants, duties and obligations of Sales Agent set forth elsewhere in this Agreement, Sales Agent agrees: 

                              </p>
                              <p>
                              2.1. To use his/her best efforts to promote the sale of the Products; <br>
                                  2.2. To use  his/her best efforts to meet the sales objectives; <br>
                                  2.3. To bear all costs and liabilities relating to the conduct of his/her business, including but not limited to the cost and expense of providing internet access, the cost of transport to find clients, and the expenses incurred for or in connection with  performance; <br>
                                

                              </p>
                                  <p>
                                  2.4. That he/she has read and understands the Code of Conduct; and that he/she acknowledges that any violation of the Code of Conduct shall constitute a material breach of this Agreement; 
                                  2.5. To render reasonable assistance to the Company, at the Company’s request, in the defense of any and all Liabilities (as defined below); <br>
                                  2.6. To refrain from disparaging the Company and its subsidiaries or its Products, or from otherwise injuring the reputation and good standing of the Company and its subsidiaries; <br>
                                  </p>
                                  <p>
                          
                                  2.7. To assist the Company, on request, in ascertaining the credit standing of and in collecting receivables from any customer; <br>
                                  2.8. To attend, at his/her own expense, all sales meetings, training sessions, seminars, trade shows and the like for which the Company reasonably requests attendance by Sales Agent; <br>
                                  2.9. To deliver all Products using documented procedures for handling, storage, packing, preservation, and delivery of such Products; <br>
                                  
                                  2.10. comply with recalls or general corrective actions initiated by the Company. <br>
                                  </p>
                                  <p>

                                  
                                  3.	ELIANA CONNECT AND OBLIGATIONS. <br>
                                  In order to assist Sales Agent in fostering the promotion and sale of the Company’s Products, the Company agrees: . <br>
                                  3.1. To use commercially reasonable efforts to make Products available to the Sales Agent to be used by customers. . <br>
                                  3.2. To provide Sales Agent with new Product information and reasonably assist Sales Agent in promotional activities; . <br>
                                  3.3. To provide Sales Agent with reasonable technical assistance, through sales seminars, meetings and training programs; . <br>
                                  </p>
                                  <p>

                                  4. ORDERS AND PAYMENT BY CUSTOMERS <br>
                                  4.1. The Sales Agent will assist the Company in obtaining the appropriate documentation needed for customers. <br>
                                  4.2. Sales orders generated by Sales Agent will be submitted directly to the Company. If Sales Agent receives any order for Products, he/she will promptly forward it to the Company. The Company will have the right at any time to reject any order in whole or in part for good cause. Good cause shall include the following: (i) the sales order fails to meet the Company’s criteria, (ii) the customer fails to meet the Company’s credit criteria, (iii) lack of Product availability due to no fault of the Company, or (iv) poor payment history by the customer.
                                  </p>
                                  <p>
                                  4.3. The Company will bill the customer for the purchased Products. Sales Agent will not bill customers for the Product unless expressly requested to do so by the Company. Payments against purchase orders are to be made directly to the Company, without intervention by Sales Agent unless expressly requested by the Company in each instance. If Sales Agent receives any payment from a customer, then Sales Agent will immediately forward the entire amount of such payment to the Company. 
                                  </p>
                                  <p>
                                  4.4. The Company will have the right, in its sole discretion, to issue credits, make discounts and allowances, and/or accept returns of the Products. Sales Agent in an effort to be competitive with the orthopedic market or to develop new customers will have the right to request the Company to issue credits, make discounts and allowances and/or accept returns of the Products. The Company shall use its sole discretion in determining whether to grant Sales Agent’s request. In the event that the Company issue credits, make discounts and allowances and/or accept returns of the Products, the Company shall be entitled to unilaterally reduce the commission rate paid to the Sales Agent with respect to all sales of Products that are subject to a credit, discount, allowance or return. The Company shall indicate such reduction in commission rate by sending written or electronic notice of such reduction to the Sales Agent. All reductions shall be effective as of the date that such notice of commission reduction was delivered to the Sales Agent. 
                                  </p>

                                  

                                  <p>
                                  5.	COMMISSIONS <br>
                                  5.1. During the term of this Agreement the Company will pay to Sales Agent a commission at the rate of K100 for every company product sold. For purposes of determining commissions, the Product shall be deemed to be sold when a properly executed purchase order is received by the Company from the customer in connection with such sale. <br>
                                  5.2.  Commissions will be released to the Sales Agent on the actual day the product has been deemed to be sold<br>
                                  5.3. The Company will keep and maintain accurate, complete and current books and records relating to commissions earned by Sales Agent. <br>
                                  </p>


                                  <p>

                                  6.	SALES OBJECTIVE <br>
                                  6.1. The Company and Sales Agent agree that the Sales Agent will be required on a weekly basis to find a minimum of 4 customers. <br>
                                  6.2. The Company and Sales Agent may add new product lines to the Product list. If new product lines are added to the Product list, the Company and Sales Agent shall establish an additional quota for such new Product. <br>
                                  </p>
                                  <p>
                                  7.	REPORTS <br>
                                  Sales Agent are requested on a daily basis to submit to the Company reports of Sales Agent’s activities performed under this Agreement. Such reports will include a listing, by name and location, of customers contacted by Sales Agent, Sales Agent’s recommendations respecting actions to be taken by the Company to secure sales, and any other pertinent matters requested by the Company to be included in such reports, for the relevant period to which the report applies. 
                                  </p>

                                  <p> 
                                  8.	TERM AND TERMINATION <br>
                                  8.1. This Agreement will become effective on the Effective Date and will continue for 6 months after the Effective Date. This agreement may be extended for additional months based on the performance of the Sales Agent. 
                                  </p>
                                  <p>
                                  8.2. This Agreement may be terminated by the Company giving a notice of termination to Sales Agent as follows: (i) at any time upon thirty (30) days  notice from the Company to the Sales Agent describing any material breach of this Agreement by Sales Agent and Sales Agent fails to cure such breach within such thirty (30) day period; (ii) at any time during the term of this Agreement if Sales Agent fails to meet its sales quotas for(iii) at any time if Sales Agent engages in behavior that, in the Company’s reasonable determination, is materially detrimental to the Company or its business reputation, including without limitation, a determination in the Company’s sole reasonable discretion that Health Care Providers have acquired too large of a percentage of the Sales Agent’s equity securities; (iv) at any time if Sales Agent becomes insolvent or bankrupt, or files a voluntary petition in bankruptcy, or has filed for an involuntary petition in bankruptcy; or (v) at any time following the end of a thirty (30) day cure period if Sales Agent fails to cure any breach of a covenant, commitment or obligation under this Agreement within thirty (30) days after receipt of written notice from the Company of such breach. 
                                  </p>
                                  <p>
                                  8.3. This Agreement may be terminated by Sales Agent as follows: (i) at any time if the Company becomes insolvent or bankrupt, or files a voluntary petition in bankruptcy, or has filed for an involuntary petition in bankruptcy; or (ii) at any time following the end of a thirty (30) day cure period if the Company fails to cure any breach of a covenant, commitment or obligation under this Agreement within thirty (30) days after receipt of written notice from the Company of such breach. 
                                  
                                  </p>

                              
                          </div>
                          <div class="modal-footer">
                              <button data-dismiss="modal"  class="btn pmd-ripple-effect btn-dark pmd-btn-flat" type="button">Cancel</button>
                              <button data-dismiss="modal"  class="btn pmd-ripple-effect btn-primary pmd-btn-flat" type="button">Continue</button>
                          </div>
                      </div>
                  </div>
              </div>
                            

              <input type="submit" value="Register" class="btn px-5 btn-info" style="background:orange;">

            </form>
          </div>
        </div>
      </div>
    </div>


      </div>

      <!--end about us-->
    </section>

<!--Here comes our Services-->


  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>


  <script src="js/main.js"></script>


</body>

</html>

<header class="header">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-md-12">
				<div class="main_head" id="myHeader">
					<div class="row align-items-center">
						<div class="col-lg-12 no_padding">
							<div class="logo">

                                    <a href="{{ route('home') }}"><img src="{{businessSetting(1)->header_logo}}" alt="logo"></a>


							</div>
						</div>
						<div class="col-lg-12 no_padding">
							<div class="menus">
								<nav class="navbar navbar-expand-lg navbar-light">
									<button class="navbar-toggler" type="button" onclick="sdbr_open()">
									  <span class="navbar-toggler-icon"></span>
									</button>
									<div class="collapse navbar-collapse" id="mySidebar">
										<ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0">
											<button onclick="sdbr_close()" class="close">&times;</button>
											<li class="nav-item"><a class="nav-link active" href="/">Home</a></li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                             CCB Dausa
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                  <li><a class="dropdown-item" href="abouts">About Dausa</a></li>
                                                  <li><a class="dropdown-item" href="#">CCB Dausa</a></li>
                                                  <li><a class="dropdown-item" href="#">Borad of Directors</a></li>
                                                  <li><a class="dropdown-item" href="#">Organization Setup</a></li>
                                                  <li><a class="dropdown-item" href="#">Administrator Message</a></li>
                                                  <li><a class="dropdown-item" href="#">MD Message</a></li>
                                                </ul>



                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="servicesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    Products & Services
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                                                  <!-- Deposit Accounts -->
                                                  <li class="dropdown-submenu">
                                                    <a class="dropdown-item dropdown-toggle" href="#">Deposit Accounts</a>
                                                    <ul class="dropdown-menu">
                                                      <li><a class="dropdown-item" href="#">a) Saving Account</a></li>
                                                      <li><a class="dropdown-item" href="#">b) Current Account</a></li>
                                                      <li><a class="dropdown-item" href="#">c) Saving Account</a></li>
                                                      <li><a class="dropdown-item" href="#">d) TDR</a></li>
                                                      <li><a class="dropdown-item" href="#">e) RD</a></li>
                                                    </ul>
                                                  </li>
                                                  <!-- Loan Accounts -->
                                                  <li><a class="dropdown-item" href="#">Loan Accounts</a></li>
                                                  <!-- Locker Facility -->
                                                  <li><a class="dropdown-item" href="#">Locker Facility</a></li>
                                                  <!-- Policy List -->
                                                  <li><a class="dropdown-item" href="#">Policy List</a></li>
                                                </ul>
                                              </li>

											<li class="nav-item"><a class="nav-link" href="#">Branches</a></li>
											{{-- <li class="nav-item"><a class="nav-link" href="#">Policies & Guidlines</a></li> --}}
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                  Forms
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                  <li><a class="dropdown-item" href="#">Account Opening Form</a></li>
                                                  <li><a class="dropdown-item" href="#">Kyc Form</a></li>
                                                  <li><a class="dropdown-item" href="#">Loan Application Form - attached</a></li>
                                                  <li><a class="dropdown-item" href="#">Locker Application Form</a></li>
                                                  <li><a class="dropdown-item" href="#">RTGS/NEFT Form</a></li>
                                                  <li><a class="dropdown-item" href="#">ATM Card Form</a></li>
                                                  <li><a class="dropdown-item" href="#">SMS Alert Form</a></li>
                                                  <li><a class="dropdown-item" href="#">Nomination Form</a></li>
                                                  <li><a class="dropdown-item" href="#">Indemnity Form</a></li>
                                                  <li><a class="dropdown-item" href="#">Change Request Form</a></li>
                                                  <li><a class="dropdown-item" href="#">15G/15H Form</a></li>
                                                  <li><a class="dropdown-item" href="#">SJSY Death Claim Form</a></li>
                                                  <li><a class="dropdown-item" href="#">PMJJBY/PMSBY/APY Form</a></li>
                                                  <li><a class="dropdown-item" href="#">Personal Accident Insurance Forms</a></li>
                                                </ul>
                                              </li>

                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                  Downloads
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                  <li><a class="dropdown-item" href="#">IFCS Code</a></li>
                                                  <li><a class="dropdown-item" href="#">MICR Code</a></li>
                                                  <li><a class="dropdown-item" href="#">Banks By Laws</a></li>
                                                  <li><a class="dropdown-item" href="#">Annual Report (Last five Years)</a></li>
                                                  <li><a class="dropdown-item" href="#">Bank Holiday List</a></li>
                                                  <li><a class="dropdown-item" href="#">Interest rate on deposited</a></li>
                                                  <li><a class="dropdown-item" href="#">Interest rate on Loan</a></li>
                                                  <li><a class="dropdown-item" href="#">Unclaimed depositor List</a></li>
                                                </ul>
                                              </li>
                                              <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                             Gallery
                                                </a>
                                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                  <li><a class="dropdown-item" href="#">Photos</a></li>
                                                </ul>
											<li class="nav-item"><a class="nav-link" href="#">Tender</a></li>
											<li class="nav-item"><a class="nav-link" href="contact">Contact</a></li>
										</ul>
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>

<style>
/* Submenu visibility */
.dropdown-submenu {
  position: relative;
}

.dropdown-submenu:hover > .dropdown-menu {
  display: block;
  position: absolute;
  top: 0;
  left: 100%;
}

.dropdown-menu {
  display: none;
  position: absolute;
  top: 0;
  left: 100%;
}
</style>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>happyNL</title>

    <link rel="icon" type="image/png" href="images/ico.png" />
    <link rel="stylesheet" href="styles/style.css">

    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css"
    />

    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
            integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
            crossorigin="anonymous"
    />

</head>
<body>
<nav class="navbar navbar-expand-lg fixed-top shadow-sm border-light navbar-light bg-light">
    <a class="navbar-brand" href="#happyNL">
        <img
                src="images/ico.png"
                width="30"
                height="30"
                alt=""
                loading="lazy"
        />
        happyNL
    </a>
    <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
    >
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a class="nav-link" href="#account">Account</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#homeseeker">HomeSeeker</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#lda">Legal Document Assistant</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#wifi">SIM Card and Wifi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#safe">Safety</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tel:+17092190068">Contact</a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="https://github.com/XuchenSun"><i class="bi bi-github"></i></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="https://www.linkedin.com/in/a2211b/"><i class="bi bi-linkedin"></i></a>
            </li>
        </ul>
    </div>
</nav>

<div class="container mt-5 pt-5" id="happyNL">
    <div class="row">
        <div class="col-lg-4 col-md-12">
            <img src="images/house.jpg" alt="image of myself" class="img-fluid" />
        </div>
        <div class="col-lg-8 col-md-12 mt-5">
            <h1 style="font-weight: bold; overflow: hidden;">
                Hello, welcome to happyNL.
            </h1>
            <p class="text-muted">
                happyNL is a website which helps people to rent a bedroom or an apartment in NL.
            </p>

            <div class="container">
                <div class="row">
                    <button type="button" class="btn btn-dark px-4">
                       <a href="#homeseeker" style="color: #deffdf;text-decoration: none;">  HomeSeeker</a>
                    </button>
                    <button
                            type="button"
                            class="btn btn-light border-success ml-2 px-4"
                            onclick="window.location.href='https://xuchensun.com/#contact'"
                    >
                        Contact Author

                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="account" class="container mt-4 pt-5">
    <h1 class="text-center" style="font-weight: bold;overflow: hidden;">Account</h1>
    <p class="text-center text-muted"> Operation About Account(register account,change password or store agreement online.)</p>
    <div class="container">
        <div class="row justify-content-md-center" >
            <button
                    type="button"
                    class="btn btn-light border-success ml-2 px-4 mt-2"
                    onclick="window.location.href='login.php'"
            >
                Please Login to use this function

            </button>


        </div>
    </div>

</div>


<div id="homeseeker" class="container mt-4 pt-5">
    <h1 class="text-center" style="font-weight: bold;overflow: hidden;">HomeSeeker</h1>
    <p class="text-center text-muted"> There are some common and useful websites which help people find a good bedroom or an apartment to rent.</p>
    <!>
    <p class="text-center text-muted" style="margin-top: -15px !important"> If you have any questions, feel free to contact me for more information.</p>
</div>
<!-- cards -->

<div class="container pt-4">

    <div class="row row-cols-1 row-cols-md-4">
        <div class="col mb-4">
            <div class="card h-100" onclick="window.location.href='https://www.facebook.com/marketplace/category/propertyrentals?exact=false&latitude=47.5631&longitude=-52.7298&radius=3'">
                <img src="img/facebook.png" class="card-img-top" alt="..." height="200">
                <div class="card-body">
                    <h5 class="card-title" style="overflow: hidden">Facebook Marketplace</h5>
                    <p class="card-text">&#160&#160&#160&#160&#160&#160Many house holders provide rental information about bedrooms or apartments on Facebook Marketplace.</p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100" onclick="window.location.href='https://www.kijiji.ca/b-apartments-condos/st-johns/c37l1700113?sort=priceAsc'">
                <img src="img/kijiji2.png" class="card-img-top" alt="..." height="200">
                <div class="card-body">
                    <h5 class="card-title" style="overflow: hidden">Kijiji Long Term Rentals</h5>
                    <p class="card-text">&#160&#160&#160&#160&#160&#160Kijiji is a popular website which a lot of people share rental information on it. They also have many information about used items.</p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100" onclick="window.location.href='https://www.rentnorthview.com/apartments/cities/st-john-s?ALL-BR=1&sliderMin=0&sliderMax=3000'">
                <img src="img/northview.png" class="card-img-top" alt="..." height="200">
                <div class="card-body">
                    <h5 class="card-title" style="overflow: hidden">Northview Apartment</h5>
                    <p class="card-text">&#160&#160&#160&#160&#160&#160Northview is a company which provides rental apartments. They have variety apartments for customers.</p>
                </div>
            </div>

        </div>

        <div class="col mb-4">
            <div class="card h-100" onclick="window.location.href='https://killamreit.com/apartments?region=St.+John%27s&maxrent='">
                <img src="img/Killam.png" class="card-img-top" alt="..." height="200">
                <div class="card-body">
                    <h5 class="card-title" style="overflow: hidden">Killam Apartment REIT</h5>
                    <p class="card-text">&#160&#160&#160&#160&#160&#160Killam Apartment REIT is also a company which provides rental information for customers.</p>
                </div>
            </div>

        </div>

        <div class="col mb-4">
            <div class="card h-100" onclick="window.location.href='https://www.facebook.com/groups/432501446882381'">
                <img src="img/mun_group.png" class="card-img-top" alt="..." height="200">
                <div class="card-body">
                    <h5 class="card-title" style="overflow: hidden">MUN Off Campus Housing Sale(Facebook Group)</h5>
                    <p class="card-text">&#160&#160&#160&#160&#160&#160 Many people share rental information for students in this group.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- cards end -->





<div id="lda" class="container mt-4 pt-5">
    <h1 class="text-center" style="font-weight: bold;overflow: hidden;">Legal Document Assistant</h1>
    <p class="text-center text-muted">There are some important legal rental documents from NL Government.</p>
    <!>
    <p class="text-center text-muted" style="margin-top: -15px !important"> A written agreement that states
        the rules and conditions of
        renting.
    </p>
</div>


<div class="container pt-4">

    <div class="row row-cols-1 row-cols-md-4">
        <div class="col mb-4">
            <div class="card h-100" onclick="window.location.href='https://www.gov.nl.ca/dgsnl/files/landlord-rental-agreement.pdf'">
                <img src="img/sla.jpg" class="card-img-top" alt="..." height="200">
                <div class="card-body">
                    <h5 class="card-title" style="overflow: hidden">Standard Rental Agreement</h5>
                    <p class="card-text">&#160&#160&#160&#160&#160&#160Residential Tenancies Act 2018, this is the most common version for rental agreement in NL.</p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100" onclick="window.location.href='https://www.gov.nl.ca/dgsnl/files/landlord-guide-for-landlords-tenants.pdf'">
                <img src="img/hands.jpg" class="card-img-top" alt="..." height="200">
                <div class="card-body">
                    <h5 class="card-title" style="overflow: hidden">A Guide for
                        Landlords and Tenants</h5>
                    <p class="card-text">&#160&#160&#160&#160&#160&#160A guide which included information about residential tenancies and provided by service.gov.nl.</p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100" onclick="window.location.href='https://www.gov.nl.ca/dgsnl/files/landlord-term-notice-to-tenant.pdf'">
                <img src="img/es.png" class="card-img-top" alt="..." height="200">
                <div class="card-body">
                    <h5 class="card-title" style="overflow: hidden">Tenant’s Notice to Terminate - Standard</h5>
                    <p class="card-text">&#160&#160&#160&#160&#160&#160 Don't want to live in the current bedroom or apartment? Finish this document and sent it to the landlord.</p>
                </div>
            </div>
        </div>

        <div class="col mb-4">
            <div class="card h-100" onclick="window.location.href='https://www.gov.nl.ca/dgsnl/files/landlord-tenants-notice-to-terminate-early-cause.pdf'">
                <img src="img/n.jpg" class="card-img-top" alt="..." height="200">
                <div class="card-body">
                    <h5 class="card-title" style="overflow: hidden">Tenant’s Notice to Terminate - Early</h5>
                    <p class="card-text">&#160&#160&#160&#160&#160&#160 Peaceful enjoyment and reasonable
                        privacy is disturbed by someone or something? Finish this document and end the tenancy between 5 to 14 days.</p>
                </div>
            </div>
        </div>
    </div>
</div>




<div id="wifi" class="container mt-4 pt-5">
    <h1 class="text-center" style="font-weight: bold;overflow: hidden;">SIM Card and Wifi</h1>
    <p class="text-center text-muted">Many Company Provide SIM Card in NL</p>
    <!>
    <p class="text-center text-muted" style="margin-top: -15px !important"> Bell,Rogers and Telus are popular in this province.
    </p>
</div>


<div class="container pt-4">

    <div class="row row-cols-1 row-cols-md-4">
        <div class="col mb-4">
            <div class="card h-100" onclick="window.location.href='https://www.bell.ca/Mobility/SIM-cards'">
                <img src="img/sim.jpg" class="card-img-top" alt="..." height="200">
                <div class="card-body">
                    <h5 class="card-title" style="overflow: hidden">Bell SIM</h5>
                    <p class="card-text">&#160&#160&#160&#160&#160&#160Bell has two kinds of telephone card: SIM and eSIM</p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100" onclick="window.location.href='https://www.rogers.com/mobility/sim-card'">
                <img src="img/sim.jpg" class="card-img-top" alt="..." height="200">
                <div class="card-body">
                    <h5 class="card-title" style="overflow: hidden">Rogers SIM</h5>
                    <p class="card-text">&#160&#160&#160&#160&#160&#160Rogers has two kinds of telephone card: SIM and eSIM</p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100" onclick="window.location.href='https://www.telus.com/en/'">
                <img src="img/sim.jpg" class="card-img-top" alt="..." height="200">
                <div class="card-body">
                    <h5 class="card-title" style="overflow: hidden">Telus</h5>
                    <p class="card-text">&#160&#160&#160&#160&#160&#160 Telus has different plans for customers.</p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100" onclick="window.location.href='https://aliant.bell.ca/Bell_Internet/Products/WiFi'">
                <img src="img/wifi.jpg" class="card-img-top" alt="..." height="200">
                <div class="card-body">
                    <h5 class="card-title" style="overflow: hidden">Bell Wifi</h5>
                    <p class="card-text">&#160&#160&#160&#160&#160&#160Bell has fastest wifi </p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100" onclick="window.location.href='https://www.rogers.com/mobility/sim-card'">
                <img src="img/wifi.jpg" class="card-img-top" alt="..." height="200">
                <div class="card-body">
                    <h5 class="card-title" style="overflow: hidden">Rogers Wifi</h5>
                    <p class="card-text">&#160&#160&#160&#160&#160&#160Rogers has two kinds of telephone card: SIM and eSIM</p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100" onclick="window.location.href='https://www.telus.com/en/internet/wifi?linktype=ge-meganav'">
                <img src="img/wifi.jpg" class="card-img-top" alt="..." height="200">
                <div class="card-body">
                    <h5 class="card-title" style="overflow: hidden">Telus</h5>
                    <p class="card-text">&#160&#160&#160&#160&#160&#160 Telus has different plans for customers.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div id="safe" class="container mt-4 pt-5">
    <h1 class="text-center" style="font-weight: bold;overflow: hidden;">Safety</h1>
    <p class="text-center text-muted">If you are in emergency, at first keep you are in safe, then call 911 for help.</p>
    <!>
    <p class="text-center text-muted" style="margin-top: -15px !important"> There are some useful information about safety.
    </p>
</div>


<div class="container pt-4">

    <div class="row row-cols-1 row-cols-md-4">
        <div class="col mb-4">
            <div class="card h-100" onclick="window.location.href='https://www.911.gov/needtocallortext911.html'">
                <img src="img/911.jpg" class="card-img-top" alt="..." height="200">
                <div class="card-body">
                    <h5 class="card-title" style="overflow: hidden">911</h5>
                    <p class="card-text">&#160&#160&#160&#160&#160&#160 911 is an emergency call in the North American.</p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100" onclick="window.location.href='https://www.rcmp-grc.gc.ca/'">
                <img src="img/RCMP.jpg" class="card-img-top" alt="..." height="200">
                <div class="card-body">
                    <h5 class="card-title" style="overflow: hidden">RCMP</h5>
                    <p class="card-text">&#160&#160&#160&#160&#160&#160 RCMP is the federal and national police service of Canada.</p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100" onclick="window.location.href='https://www.rnc.gov.nl.ca/'">
                <img src="img/RNC.png" class="card-img-top" alt="..." height="200">
                <div class="card-body">
                    <h5 class="card-title" style="overflow: hidden">RNC</h5>
                    <p class="card-text">&#160&#160&#160&#160&#160&#160 The Royal Newfoundland Constabulary (RNC) is Newfoundland and Labrador’s Provincial Police Service.Phone Number:709-729-8000</p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100" onclick="window.location.href='https://www.areavibes.com/search-results/?st=NL&ct=St.+John%27s&hd=&zip=&addr=&ll=47.5698+-52.7796'">
                <img src="img/cm.png" class="card-img-top" alt="..." height="200">
                <div class="card-body">
                    <h5 class="card-title" style="overflow: hidden" >St.John's Crime Map</h5>
                    <p class="card-text">&#160&#160&#160&#160&#160&#160According to Statistics Canada which released from 2019, this website shows the statistics of crime in St.John's,NL. </p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100" onclick="window.location.href='https://www.youtube.com/watch?v=pcn7MDpoZrY'">
                <img src="img/smoke_a.jpg" class="card-img-top" alt="..." height="200">
                <div class="card-body">
                    <h5 class="card-title" style="overflow: hidden" >Smoke Alert</h5>
                    <p class="card-text">&#160&#160&#160&#160&#160&#160This is a video that shows how smoke alert work in Youtube. </p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100" onclick="window.location.href='https://www.youtube.com/watch?v=PQV71INDaqY'">
                <img src="img/fire.jpg" class="card-img-top" alt="..." height="200">
                <div class="card-body">
                    <h5 class="card-title" style="overflow: hidden" >Fire Extinguisher</h5>
                    <p class="card-text">&#160&#160&#160&#160&#160&#160 This is a video which shows how to use fire extinguisher.</p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100" onClick="window.location='happyNL(currently developing).jar'">
                <img src="img/vpn.jpg" class="card-img-top" alt="..." height="200">
                <div class="card-body">
                    <h5 class="card-title" style="overflow: hidden" >VPN(Currently Developing)</h5>
                    <p class="card-text">&#160&#160&#160&#160&#160&#160 A virtual private network can secure your network(Java GUI Desktop App).</p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100" onclick="window.location.href='https://www.youtube.com/watch?v=zq8ErbZzcbI'">
                <img src="img/safe.jpg" class="card-img-top" alt="..." height="200">
                <div class="card-body">
                    <h5 class="card-title" style="overflow: hidden" >Prevent Identity Fraud</h5>
                    <p class="card-text">&#160&#160&#160&#160&#160&#160 Here is a video to show how to prevent identity theft.</p>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="card h-100" onclick="window.location.href='https://www.youtube.com/watch?v=Bt9cfz3euvc'">
                <img src="img/b1.jpg" class="card-img-top" alt="..." height="200">
                <div class="card-body">
                    <h5 class="card-title" style="overflow: hidden" >Security Tips for rental bedrooms or apartments</h5>
                    <p class="card-text">&#160&#160&#160&#160&#160&#160 This video shows some tips from a security standpoint.</p>
                </div>
            </div>
        </div>

    </div>
</div>



<script
        src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"
></script>
<script
        src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"
></script>


</body>
</html>

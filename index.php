<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dereja - M&E - System</title>
    <meta name="description" content="Welcome to Dereja M&E Dashboard, Data Exploration and Administration System">
    <meta name="keywords" content="Health, Emergency, Reporting, Dashboard, and, Data, Exploration, Portal, System ">
    <meta name="author" content="MERQ Consultancy">
    <link rel="icon" type="image/x-icon" href="/assets/dereja.png">
    <link rel="icon" type="image/png" href="/assets/dereja.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="dist/css/menu-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <script type="text/javascript" src="dist/js/jquery.min.js"></script>
    <script type="text/javascript" src="dist/js/menu.js"></script>
    <!-- Matomo -->
    <!--
         <script>
           var _paq = window._paq = window._paq || [];
           /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
           _paq.push(['trackPageView']);
           _paq.push(['enableLinkTracking']);
           (function() {
             var u="//healthemergencydashboard.moh.gov.et/analytics/";
             _paq.push(['setTrackerUrl', u+'matomo.php']);
             _paq.push(['setSiteId', '1']);
             var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
             g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
           })();
         </script>
         -->
    <!-- End Matomo Code -->
    <!-- Google tag (gtag.js) -->
    <!--
         <script async src="https://www.googletagmanager.com/gtag/js?id=G-DWXRQJ8HW4"></script>
         <script>
           window.dataLayer = window.dataLayer || [];
           function gtag(){dataLayer.push(arguments);}
           gtag('js', new Date());
         
           gtag('config', 'G-DWXRQJ8HW4');
         </script>
          -->
    <!-- 01 -->
    <!-- Google tag (gtag.js) -->
    <!--
         <script async src="https://www.googletagmanager.com/gtag/js?id=G-43ZGCC253M"></script>
         <script>
           window.dataLayer = window.dataLayer || [];
           function gtag(){dataLayer.push(arguments);}
           gtag('js', new Date());
         
           gtag('config', 'G-43ZGCC253M');
         </script>
          -->
    <!--  <link rel="stylesheet" href="dist/font-awesome/css/all.css">
         System Developed By MIKEINTOSHSYSTEMS AKA MICHAEL KIFLE TEFERRA
         -->
    <link rel="stylesheet" href="./styles.css">
    <script>
        function printFunction() {
            var navigationBar = document.getElementById('navigations');
            navigationBar.style.display = "none";
            document.getElementById('graphaFrames').style.width = "100%";
            window.print();
        }

        var selectedPreviusly = null;
        var selectedPreviuslyBackgroundColor = null;

        function changeIframe(url, self) {
            console.log(self);
            if (selectedPreviusly == null) {
                selectedPreviuslyBackgroundColor = self.style.backgroundColor;
                self.style.backgroundColor = "#ff9257";
                selectedPreviusly = self;

            } else {
                selectedPreviusly.style.backgroundColor = selectedPreviuslyBackgroundColor;
                selectedPreviuslyBackgroundColor = self.style.backgroundColor;
                self.style.backgroundColor = "#f32770";

                selectedPreviusly = self;
            }
            document.getElementById("iFramer").src = url;

        }
    </script>
</head>

<body>
    <!--wrapper start-->
    <div class="wrapper">
        <!--sidebar start-->
        <div class="sidebar">
            <div class="sidebar-menu">
                <center class="profile">
                    <a href="index.php">
                        <img src="https://www.dereja.com/_nuxt/img/Logo-black.7a2b5f8.svg" alt="">
                        <p></p>
                    </a>
                </center>
                <li class="item">
                    <a href="" class="menu-btn"><i class="fas fa-bar-chart-o"></i><span>Dashboard</span></a>
                </li>
                <!-- Start Candidates -->
                <li class="item" id="candidates_report">
                    <a href="#candidates_report" class="menu-btn">
                        <i class="fas fa-users"></i><span>Candidates <i class="fas fa-chevron-down drop-down"></i></span>
                    </a>
                    <div align="left" class="sub-menu">
                        <span
                            onClick="changeIframe('https://derejademo.merqconsultancy.org/public/dashboard/d0941f92-57bd-4c4a-9fe6-f961b6a573a2',this)"
                            class="parentCatagory">
                            <p class="subButtons">
                                <!-- cnd:] -->
                                <span>Candidates AIO</span></a>
                            </p>
                        </span>
                        <span onClick="changeIframe('./test.html',this)" class="parentCatagory">
                            <p class="subButtons">
                                <!-- cnd:] -->
                                <span>Report 02</span></a>
                            </p>
                        </span>
                        <span onClick="changeIframe('./test.html',this)" class="parentCatagory">
                            <p class="subButtons">
                                <!-- cnd:] -->
                                <span>Report 03</span></a>
                            </p>
                        </span>
                        <span onClick="changeIframe('./test.html',this)" class="parentCatagory">
                            <p class="subButtons">
                                <!-- cnd:] -->
                                <span>Report 04</span></a>
                            </p>
                        </span>
                        <span onClick="changeIframe('./test.html',this)" class="parentCatagory">
                            <p class="subButtons">
                                <!-- cnd:] -->
                                <span>Report 05</span></a>
                            </p>
                        </span>
                        <span onClick="changeIframe('./test.html',this)" class="parentCatagory">
                            <p class="subButtons">
                                <!-- cnd:] -->
                                <span>Report 06</span></a>
                            </p>
                        </span>
                    </div>
                </li>

                <!-- End Candidates -->

                <li class="item" id="service_reports">
                    <a href="#service_reports" class="menu-btn">
                        <i class="fas fa-calendar"></i><span>Events <i class="fas fa-chevron-down drop-down"></i></span>
                    </a>
                    <div align="left" class="sub-menu">
                        <span
                            onClick="changeIframe('https://derejademo.merqconsultancy.org/public/dashboard/9277d4b1-7410-47e7-861e-274051922cb0',this)"
                            class="parentCatagory">
                            <p class="subButtons">
                                <!-- cnd:] -->
                                <span>Event Participants AIO</span></a>
                            </p>
                        </span>
                        <span onClick="changeIframe('./test.html',this)" class="parentCatagory">
                            <p class="subButtons">
                                <!-- cnd:] -->
                                <span>Report 02</span></a>
                            </p>
                        </span>
                        <span onClick="changeIframe('./test.html',this)" class="parentCatagory">
                            <p class="subButtons">
                                <!-- cnd:] -->
                                <span>Report 03</span></a>
                            </p>
                        </span>
                        <span onClick="changeIframe('./test.html',this)" class="parentCatagory">
                            <p class="subButtons">
                                <!-- cnd:] -->
                                <span>Report 04</span></a>
                            </p>
                        </span>
                        <span onClick="changeIframe('./test.html',this)" class="parentCatagory">
                            <p class="subButtons">
                                <!-- cnd:] -->
                                <span>Report 05</span></a>
                            </p>
                        </span>
                        <span onClick="changeIframe('./test.html',this)" class="parentCatagory">
                            <p class="subButtons">
                                <!-- cnd:] -->
                                <span>Report 06</span></a>
                            </p>
                        </span>
                    </div>
                </li>
                <li class="item" id="additional_reports">
                    <a href="#additional_reports" class="menu-btn">
                        <i class="fas fa-book"></i><span>Trainings<i class="fas fa-chevron-down drop-down"></i></span>
                    </a>
                    <div class="sub-menu">
                        <span
                            onClick="changeIframe('https://derejademo.merqconsultancy.org/public/dashboard/faee4927-cfc4-4cc9-a177-9d0b8ce46c01',this)"
                            class="parentCatagory">
                            <p class="subButtons">
                                <!-- cnd:] -->
                                <span> Training Participants AIO</span></a>
                            </p>
                        </span>
                    </div>
                </li>
                                <!--Employment Start-->
                                <li class="item" id="employment_reports">
                                    <a href="#employment_reports" class="menu-btn">
                                        <i class="fas fa-briefcase"></i><span>Employment<i class="fas fa-chevron-down drop-down"></i></span>
                                    </a>
                                    <div class="sub-menu">
                                        <span
                                            onClick="changeIframe('https://derejademo.merqconsultancy.org/public/dashboard/70d0fd6e-6205-499c-9cef-588659168b70',this)"
                                            class="parentCatagory">
                                            <p class="subButtons">
                                                <!-- cnd:] -->
                                                <span> Employment AIO</span></a>
                                            </p>
                                        </span>
                                    </div>
                                </li>                              
                                <!--Employment End-->
                <li class="item" id="tabular">
                    <a href="#tabular" class="menu-btn">
                        <i class="fas fa-table"></i><span>Tabular Reports <i
                                class="fas fa-chevron-down drop-down"></i></span>
                    </a>
                    <div class="sub-menu">
                        <span onClick="changeIframe('./test.html',this)" class="parentCatagory">
                            <p class="subButtons">
                                <!-- cnd:] -->
                                <span>Table 1</span></a>
                            </p>
                        </span>
                        <span onClick="changeIframe('./test.html',this)" class="parentCatagory">
                            <p class="subButtons">
                                <!-- cnd:] -->
                                <span>Table 2</span></a>
                            </p>
                        </span>
                    </div>
                </li>
                <li class="item" id="data_admin">
                    <a href="#data_admin" class="menu-btn">
                        <i class="fas fa-cog"></i><span>Administration <i
                                class="fas fa-chevron-down drop-down"></i></span>
                    </a>
                    <div class="sub-menu">
                        <span onClick="changeIframe('./app/login.php',this)" class="parentCatagory">
                            <p class="subButtons">
                                <!-- cnd:] -->
                                <span>User's Data Exploration </span></a>
                            </p>
                        </span>
                        <span onClick="changeIframe('./app/login.php',this)" class="parentCatagory">
                            <p class="subButtons">
                                <!-- cnd:] -->
                                <span>Data Entry &amp; Admin Login </span></a>
                            </p>
                        </span>
                        <span onClick="changeIframe('./backend/forms/index.php',this)" class="parentCatagory">
                            <p class="subButtons">
                                <!-- cnd:] -->
                                <span>Forms Managment &amp; Admin </span></a>
                            </p>
                        </span>
                    </div>
                </li>
                <li class="item">
                    <a href="compareData.html" class="menu-btn"><i
                            class="fa fa-balance-scale"></i><span>Compare</span></a>
                </li>
                <li class="item" id="feedback">
                    <a href="#feedback" class="menu-btn">
                        <i class="fas fa-envelope"></i><span>Feedback <i
                                class="fas fa-chevron-down drop-down"></i></span>
                    </a>
                    <div class="sub-menu">
                        <span onClick="changeIframe('backend/forms/user_feedback.html',this)" class="parentCatagory">
                            <p class="subButtons">
                                <!-- cnd:] -->
                                <span>User Feedbacks</span></a>
                            </p>
                        </span>
                    </div>
                </li>
                <li class="item" id="analytics">
                    <a href="#analytics" class="menu-btn">
                        <i class="fas fa-line-chart"></i><span>Data Monitoring & Visitors Analytics <i
                                class="fas fa-chevron-down drop-down"></i></span>
                    </a>
                    <div class="sub-menu">
                        <span onClick="changeIframe('./test.html',this)" class="parentCatagory">
                            <p class="subButtons">
                                <!-- cnd:] -->
                                <span>Null Reports 1</span></a>
                            </p>
                        </span>
                        <span onClick="changeIframe('./test.html',this)" class="parentCatagory">
                            <p class="subButtons">
                                <!-- cnd:] -->
                                <span>Null Reports 2</span></a>
                            </p>
                        </span>
                        <span onClick="changeIframe('./test.html',this)" class="parentCatagory">
                            <p class="subButtons">
                                <!-- cnd:] -->
                                <span>Dashboard Visitors Report</span></a>
                            </p>
                        </span>
                    </div>
                </li>
            </div>
            <!--
               <p style="text-align: center;"><strong><span style="color: #00ffff;">_______________________</span></strong></p>
               <marquee behavior="scroll" direction="up" scrollamount="2">
                   <p style="text-align: center;"><span style="color: white;"><strong><span style="text-decoration: underline;">Users Guide</span></strong></span></p>
                   <p style="text-align: left;"><span style="color: #808080;"><strong><span style="text-decoration: underline;"><br></span></strong></span><span style="color: #00ccff;">Please use the <span style="text-decoration: underline;"><strong>Filters</strong> </span>available at the <span style="text-decoration: underline;"><strong>TOP</strong> </span>from <span style="text-decoration: underline;"><strong>Left</strong> </span>TO <span style="text-decoration: underline;"><strong>Right</strong> </span>starting from <span style="text-decoration: underline;"><strong>Year</strong> </span>to narrow down your filtered results!</span></p>
                   <div class="Card bordered rounded flex flex-column hover-parent hover--visibility">
                   <div class="flex-full overflow-hidden flex flex-column full-height">
                   <div class="CardVisualization flex-full flex-basis-none _2dBdQ">
                   <div class="full flex-full flex flex-column text-card-markdown dEs6g" style="text-align: left;"><span style="color: #00ccff;">If you would like to see each visualizations please use the Navigation Menu to select your desired Data set and filter accordingly.</span></div>
                   <div class="full flex-full flex flex-column text-card-markdown dEs6g" style="text-align: left;"><span style="color: #00ccff;"><br></span><span style="color: #00ccff;">→Keep Hovering on the Graphs to View detailed dataset values and Insights!</span></div>
                   <div class="full flex-full flex flex-column text-card-markdown dEs6g" style="text-align: left;"><span style="color: #00ccff;"><br>To view large visualizations please scroll down </span><span class="EKtkFWMYpwzMKOYr0GYm LQVY1Jpkk8nyJ6HBWKAk"><span style="color: #ff6600;"></span></span>
                   <p style="text-align: left;"><span style="color: #00ccff;">&nbsp;</span></p>
                   </div>
                   </div>
                   </div>
                   </div>
                   </marquee>
                   -->
            <br>
            <br>
            <br>
                <div id="counter" align="center">Loading...</div>

    <script>
        // Function to fetch the current count from the server
        function fetchCounter() {
            fetch('./analytics/visits/counter.php') // Change 'counter.php' to the server-side script that updates the counter
                .then(response => response.text())
                .then(count => {
                    document.getElementById('counter').innerText = 'Total visitors: ' + count;
                });
        }

        // Call the function when the page loads
        fetchCounter();

        // Optionally, you can refresh the counter at intervals
        // setInterval(fetchCounter, 5000); // Refresh every 5 seconds (adjust as needed)
    </script>
            
            <br>
            <p style="text-align: center;"><strong><span
                        style="color: #00ffff;">_________________________</span></strong></p>
            <br>
            <p style="text-align: center;"><small><span style="color: red;">Powered By MERQ Consultancy &copy;
                        2024<br /></span></small><strong><small><span style="color: red;"></span></small></strong></p>
            <p style="text-align: center;"><strong><span
                        style="color: #00ffff;">_________________________</span></strong></p>
            <br>
            <br>
            <br>
            <br>
            <p>
                <!--
                  <div id="widgetIframe"><iframe width="100%" height="100" src="https://healthemergencydashboard.moh.gov.et/analytics/index.php?module=Widgetize&action=iframe&disableLink=1&widget=1&moduleToWidgetize=CoreVisualizations&actionToWidgetize=singleMetricView&idSite=1&period=year&date=2022-08-19" scrolling="yes" frameborder="0" marginheight="0" marginwidth="0"></iframe></div>
                  -->
                <font color="white">By MERQ Consultancy</font>
            </p>
        </div>
        <!--sidebar end-->
        <!--header menu start-->
        <div class="header">
            <div class="header-menu">
                <div class="title">
                    <a href="index.php">
                        <span class="title-hide">
                            <a href="index.php"><img src="assets/moh_logo_c.png" alt="" width="1" height="1">
                                <p></p>
                            </a></a><span class="sec-span"></span></span>
                </div>
                <div class="sidebar-btn">
                    <i class="fas fa-bars"></i>
                </div>
                <div align="center">
                    <font color="white">
                        <h2> Dereja - M&E - System </h2>
                    </font>
                </div>
                <ul>
                    <ul>
                        <span onClick="changeIframe('./help/index.htm',this)" class="parentCatagory">
                            <p class="subButtons">
                                <!-- cnd:] -->
                                <span><i class="fas fa-question-circle"></i> </span></a>
                            </p>
                        </span>
                        <span onClick="changeIframe('./test.html',this)" class="parentCatagory">
                            <p class="subButtons">
                                <!-- cnd:] -->
                                <span><i class="fas fa-bell"></i> </span></a>
                            </p>
                        </span>
                        <span onClick="changeIframe('https://derejademo.merqconsultancy.org/auth/login?redirect=%2F',this)" class="parentCatagory">
                            <p class="subButtons">
                                <!-- cnd:] -->
                                <span><i class="fas fa-power-off"></i> </span></a>
                            </p>
                        </span>
                    </ul>
                </ul>
            </div>
        </div>
        <!--header menu end-->
        <!--main container start-->
        <div id="graphaFrames" class="main-container">
            <!--
               <iframe id="iFramer" src="https://metabase.healthemergencydashboard.moh.gov.et/public/dashboard/2e35785b-da15-4479-98eb-701e566d5c8b?year=2023&week="
                          frameborder="0" width="100%" height="100%" allowtransparency=""></iframe>
               -->
            <iframe id="iFramer"
                src="https://derejademo.merqconsultancy.org/public/dashboard/7fe22d0e-2524-49c9-bab8-4073fb257913"
                frameborder="0" width="100%" height="100%" allowtransparency=""></iframe>
        </div>
        <!--main container end-->
    </div>
    <!--wrapper end-->
</body>

</html>
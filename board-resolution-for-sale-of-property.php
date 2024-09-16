<?php
if (isset($_POST['c_name'])) {
    $c_name = $_POST['c_name'];
    $cin = $_POST['cin'];
    $meeting_date = $_POST['meeting_date'];
    $meeting_time = $_POST['meeting_time'];
    $sp = $_POST['$sp'];
    $area = $_POST['area'];
    $cp = $_POST['$cp'];
    $paddress = $_POST['paddress'];
    $designation = $_POST['designation'];
    $city = $_POST['city'];
    $dname = $_POST['dname'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $date = $_POST['date'];
    $din = $_POST['din'];
    $city = $_POST['city'];
    $flag = true;
} else {
    $flag = false;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description"
        content="Generate free Board Resolution format for sale of property in Word format quick and easy by BizFoc. Download now">
    <meta property="og:image" content="https://bizfoc.com/assets/images/favicon.png" />
    <title> Board resolution format for sale of property in word format</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="../assets/images/favicon.png" type="image/png" sizes="32x32" alt="Bizfoc">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap"
        rel="stylesheet">
    <link href="../assets/css/common-style.css" rel="stylesheet">
    <link href="../assets/css/company-page.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        .step {
            display: none;
        }

        .active-step {
            display: block;
        }

        .btn-group {
            display: flex;
            justify-content: space-between;
        }
        
        .next-btn{
            background: var(--secondary);
            width : 120px;
            border-color: var(--secondary);
        }
        
        .prev-btn{
            width : 120px;
        }
        
        .nav-tabs{
            list-style-type : none !important;
            padding-left : 0 !important;
        }
        .nav-tabs .nav-link.active {
            background-color: #007bff;
            color: white !important;
        }

        .nav-tabs .nav-link {
            cursor: pointer;
            color: var(--secondary) !important;
        }
        .nav-tabs .nav-link.active{
            background: var(--secondary) !important;
        }
        .card{
            border-radius: 8px;
            box-shadow: 4px 4px 21px 0 rgb(2 125 133 / 21%);
        }
    </style>
</head>

<body>
    <?php include ("../include/header.php"); ?>

    <div class="pb-5 content-container">

        <section class="secondary-bg w-100">
            <div class="p-4">
                <div class="container-fluid justify-content-center row">
                    <h1 class="text-white">Board Resolution for sale of property in Word format</h1>
                </div>
                <div class="container-fluid row pt-5 px-5">
                    <div class="col-md-7 text-white">
                        
                        <h3>Fill information & generate the board resolution</h3>
                        <br>
                        <ul class="mb-3  d-none d-md-block d-lg-block">
                            <li class="text-white bold">It is quicker than updating word format</li>
                            <li class="text-white">It takes 2 minutes as compared to 15-20 minutes</li>
                            <li class="text-white">Less error prone as compared to making BR in word</li>
                            <li class="text-white">We don't store information</li>
                            <li class="text-white">All fields are not mandatory</li>
                            
                        </ul>
                        <p class="mb-3 text-white d-none d-md-block d-lg-block">You can fill the information which is available in the form & click on submit. You can leave the fields blank which are not available. We don't store your information or use it in any away. Therefore, there is no unauthorized sharing or misuse of your data. </p>
                        
                    </div>
                    <div class="col-md-5 card p-4">
                        <ul class="nav nav-tabs d-md-flex d-lg-flex d-none" id="stepTabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-step="1">Step 1</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-step="2">Step 2</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-step="3">Step 3</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-step="4">Step 4</a>
                            </li>
                        </ul>
                        <form action="board-resolution-for-sale-of-property" method="post" enctype="multipart/form-data">
                            <!-- Step 1 -->
                            <div class="step active-step" id="step-1">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Company Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="c_name" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">CIN</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="cin" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Registered Address</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="address" class="form-control">
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary next-btn">Next</button>
                                </div>
                            </div>
                
                            <!-- Step 2 -->
                            <div class="step" id="step-2">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Meeting Date</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="meeting_date" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Meeting Time</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="meeting_time" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Minimum Sale Price</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="sp" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Property Address</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="paddress" class="form-control">
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-secondary prev-btn">Previous</button>
                                    <button type="button" class="btn btn-primary next-btn">Next</button>
                                </div>
                            </div>
                
                            <!-- Step 3 -->
                            <div class="step" id="step-3">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Area of the property</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="area" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Authorised Person name</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="name" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Maximum Legal Expenses</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="cp" class="form-control">
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-secondary prev-btn">Previous</button>
                                    <button type="button" class="btn btn-primary next-btn">Next</button>
                                </div>
                            </div>
                
                            <!-- Step 4 -->
                            <div class="step" id="step-4">
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Director name</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="dname" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">DIN</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="din" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">Date</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="date" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-4 col-form-label">City</label>
                                    <div class="col-sm-6">
                                        <input type="text" name="city" class="form-control">
                                    </div>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-secondary prev-btn">Previous</button>
                                    <button type="submit" class="btn btn-success" style='width:120px'>Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                      <div class="col-md-7 text-white">
                        <p class="mt-4 text-white d-md-none d-lg-none"><b>Important note:</b> It will take 2 minutes as compared 15-20 minutes to make the BR in the word fie. You can leave the fields blank which are not available & update them later. We don't store your information or use it in any away. Therefore, there is no unauthorized sharing or misuse of your data.  </p>
                    </div>

                </div>
            </div>
        </section>
        <br>
        <br>

        <section class="row container-fluid">
            <div class="col-lg-9 col-sm-12 px-lg-5 px-md-5">
                <section>
                    <h1>Board resolution format for sale of property in word format</h1>
                    <p class="text-justify">
                        If a company wants to sell the property, it needs to pass a board resolution to sell that. The
                        board resolution for sale of property should be as per the provisions of the Companies Act 2013.
                        The board resolution for sale of property must be passed and signed by the board of directors.
                        The format of the board resolution for share transfer includes the following
                    </p>
                    <div class="form-card">
                        <ul>
                            <li>Details of the Property</li>
                            <li>Area in square meters of the propertyr</li>
                            <li>Amount of sale proceeds</li>
                            <li>Name and Designation of the Authorized Signatory</li>
                            <li>Signature of Authorized Signatory</li>
                        </ul>
                    </div>
                    <p class="text-justify">
                        You can download the board resolution for sale of property in word format, which is ready to
                        use. The board resolution for sale of property provided by Bizfoc can be generated quickly,
                        saving time and reducing the chances of errors

                    </p>
                </section>

                <section>
                    <div>
                    <h2 class="head2">Format for Board Resolution for Sale of Property</h2>
                        <hr style="border-color:#000">
                        <p class="text-center"><strong>Company Name:_______</strong></p>
                        <p class="text-center"><strong>CIN: __________</strong></p>
                        <p class="text-center">
                            <strong>REGD Office Address:________</strong>
                        </p>
                        <p class="text-center">CERTIFIED TRUE COPY OF THE BOARD RESOLUTION
                            PASSED IN THE MEETING OF THE BOARD OF DIRECTORS OF THE COMPANY
                            HELD ON ________(Date) AT ________(Time) AT THE REGISTERED OFFICE OF THE COMPANY ________
                            (Address)
                        </p>
        
                        <p><strong>"RESOLVED THAT</strong> Mr. _________, Director of the Company be and is hereby authorized to
                            negotiate, settle the terms and conditions and the most advantageous price subject to a
                            minimum of Rs. ________ for sale of the company's property bearing S.No.--- situated at
                            __________ having an area of _______sq. mts and sign and execute the requisite Agreement for
                            sale, sale deed and such other documents as may be found necessary, modify or amend the
                            documents so executed where necessary and present the documents so signed by him on behalf
                            of the Company for registration before the Registrar or sub Registrar of Assurances and
                            admit execution of the documents and do all such other acts deeds and things as are
                            incidental or consequential thereto."</p>
                        <p><strong>"RESOLVED FURTHER THAT</strong> the said Mr. ___________ be and is hereby authorised to engage
                            Advocate
                            and incur necessary expenses in connection with the sale of the property mentioned above
                            subject to the maximum of Rs. ____________"</p>
                        </p>
                        <br>
                        <br>
                        <p>Certified to be True </p>
                        <br>
                        <br>


                        <p>For ________(Company Name)</p>
                        <p>Signature:</p>
                        <br>
                        <br>
                        <p>Name: ________ <br>Designation: ________<br>DIN: ________</p>

                        <p>Date: ________<br>Place: ________</p>
                    </div>
                </section>



                <section id="faq">
                    <h2 class="head2">Frequently Asked Questions (FAQ) for Board Resolution for Sale of Property</h2>
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                <span class="title">Is the signature of all directors mandatory on the board resolution
                                    for sale of property?</span>
                                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                            </div>
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p class="mb-0">No, the signatures of all directors are not mandatory on the Board
                                        Resolution for sale of property. The resolution can be signed by only one
                                        authorised director.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header collapsed" id="headingTwo" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span class="title">Does the Board Resolution for sale of property need to be certified
                                    by a professional?</span>
                                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p class="mb-0">No, the Board Resolution Format does not mandatorily need to be
                                        certified by a Professional.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header collapsed" id="headingThree" data-toggle="collapse"
                                data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span class="title">Is the Board resolution for sale of property to be on company
                                    letterhead?</span>
                                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p class="mb-0">Yes, the format and details of the Board Resolution for sale of
                                        property have to be printed on the Company’s Letterhead.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header collapsed" id="headingFour" data-toggle="collapse"
                                data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <span class="title">Who can be considered as an authorized signatory for the board
                                    resolution for sale of property?</span>
                                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p class="mb-0">The Board of Directors are considered an authorized signatory for
                                        the board resolution for sale of property.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header collapsed" id="headingFive" data-toggle="collapse"
                                data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <span class="title">Which resolution is required for the board resolution for sale of
                                    property?</span>
                                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p class="mb-0">The board resolution for sale of property is made by means of a
                                        resolution passed at the meeting of the Board.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


            </div>
            
            <div class="col-lg-3 col-md-3 col-sm-12 position-relative pr-lg-0 pr-md-0 pt-4">
                <iframe width="100%" height="200" src="https://www.youtube.com/embed/cXB4mvIpBgE?si=mnlWt_SkSn_OWXbW" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                <div class="callback-form p-4 mt-5" id="sticky-form">
                    <h5 class="mb-4 form-title">REQUEST A CALL BACK</h5>
                    <form method="post" id="form2" class="ajax-form" action="../include/form-submit.php">
                        <div class="form-group">
                            <input type="hidden" name="entity" value="board-meeting-agenda-format">
                            <input type="text" class="form-control" name="name1" required placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email1" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="mobile1" required placeholder="Mobile No.">
                        </div>
                        <div>
                            <pre class="response"></pre>
                        </div>
                        <button type="submit" class="primary-btn">Talk to Bizfoc Expert</button>
                    </form>
                    <div class="rating-wrapper">
                        <div class="mx-2">
                            <img src="../assets/images/Google.png" height="28" />
                        </div>
                        <div>
                            <p>More trusted, Verified reviews</p>
                            <p><img src="../assets/images/google_rating.png" height="15" />180+ Reviews</p>
                        </div>
                    </div>
                </div>
            </div>
            <?php include("../include/tools-links.php"); ?>
        </section>
    </div>
                    <!-- ======= Footer ======= -->
            <?php include ("../include/footer.php"); ?>

           <script>
        function Export2Doc(element, filename = '') {
            var preHtml = "<html xmlns:o='urn:schemas-microsoft-com:office:office' xmlns:w='urn:schemas-microsoft-com:office:word' xmlns='http://www.w3.org/TR/REC-html40'><head><meta charset='utf-8'><title>Export HTML To Doc</title></head><body>";
            var postHtml = "</body></html>";
            var html = preHtml + document.getElementById(element).innerHTML + postHtml;

            var blob = new Blob(['\ufeff', html], {
                type: 'application/msword'
            });

            // Specify link url
            var url = 'data:application/vnd.ms-word;charset=utf-8,' + encodeURIComponent(html);

            // Specify file name
            filename = filename ? filename + '.doc' : 'document.doc';

            // Create download link element
            var downloadLink = document.createElement("a");

            document.body.appendChild(downloadLink);

            if (navigator.msSaveOrOpenBlob) {
                navigator.msSaveOrOpenBlob(blob, filename);
            } else {
                // Create a link to the file
                downloadLink.href = url;

                // Setting the file name
                downloadLink.download = filename;

                //triggering the function
                downloadLink.click();
            }

            document.body.removeChild(downloadLink);
        }
    </script>

            <?php if ($flag == true) {
            echo '
            <div id="affidavitContent" style="display:none;" >
                <div style="text-align:center">
                <p class="text-center"><strong>' . (!empty($c_name) ? $c_name : '__________') . '<br>
                CIN: ' . (!empty($cin) ? $cin : '__________') . '<br>
                ' . (!empty($address) ? $address : '__________') . '</strong></p>
                </div>
                
                <p>CERTIFIED TRUE COPY OF THE BOARD RESOLUTION
                    PASSED IN THE MEETING OF THE BOARD OF DIRECTORS OF THE COMPANY
                    HELD ON ' . (!empty($meeting_date) ? $meeting_date : '__________') . ' AT ' . (!empty($meeting_time) ? $meeting_time : '__________') . ' AT THE REGISTERED OFFICE OF THE COMPANY ' . (!empty($address) ? $address : '__________') . '
                </p>
               
                <p><strong>"RESOLVED THAT</strong> <b>' . (!empty($name) ? $name : '__________') . '</b>, is hereby authorized to
                    negotiate, settle the terms and conditions and the most advantageous price subject to a
                    minimum of Rs. ' . (!empty($sp) ? $sp : '__________') . ' for sale of the company property situated at
                    <b>' . (!empty($paddress) ? $paddress : '__________') . '</b> having an area of <b>' . (!empty($area) ? $area : '__________') . ' </b> and sign and execute the requisite Agreement for
                    sale, sale deed and such other documents as may be found necessary, modify or amend the
                    documents so executed where necessary and present the documents so signed by him on behalf
                    of the Company for registration before the Registrar or sub Registrar of Assurances and
                    admit execution of the documents and do all such other acts deeds and things as are
                    incidental or consequential thereto."
                </p>
                <p><strong>"RESOLVED FURTHER THAT</strong> the said ' . (!empty($name) ? $name : '__________') . ' be and is hereby authorised to engage Advocate
                    and incur necessary expenses in connection with the sale of the property mentioned above
                    subject to the maximum of Rs. ' . (!empty($cp) ? $cp : '__________') . '"
                </p>
                <br>
                <br>
                <p>Certified to be True </p>
                <br>
                <br>
                
                <p>For ' . (!empty($c_name) ? $c_name : '__________') . '</p>
                <p>Signature:</p>
                <br>
                <br>
                <p><strong>Name: ' . (!empty($dname) ? $dname : '__________') . ' </strong><br>
                Designation: Director<br>
                DIN: ' . (!empty($din) ? $din : '__________') . '</p>
                
                <p>Date: ' . (!empty($date) ? $date : '__________') . '<br>
                Place: ' . (!empty($city) ? $city : '__________') . '</p>
    
            </div>

        <script>
            Export2Doc("affidavitContent","board-resolution-for-sale-of-property-' . $name . '");
           
        </script>';
                header('Location: board-resolution-for-sale-of-property');
            }
            ?>

            <script>
                $(document).ready(function () {
            let currentStep = 1;

            // Handle next button click
            $('.next-btn').click(function () {
                if (currentStep < 4) {
                    $(`#step-${currentStep}`).removeClass('active-step');
                    $(`.nav-link[data-step=${currentStep}]`).removeClass('active');
                    currentStep++;
                    $(`#step-${currentStep}`).addClass('active-step');
                    $(`.nav-link[data-step=${currentStep}]`).addClass('active');
                }
            });

            // Handle previous button click
            $('.prev-btn').click(function () {
                if (currentStep > 1) {
                    $(`#step-${currentStep}`).removeClass('active-step');
                    $(`.nav-link[data-step=${currentStep}]`).removeClass('active');
                    currentStep--;
                    $(`#step-${currentStep}`).addClass('active-step');
                    $(`.nav-link[data-step=${currentStep}]`).addClass('active');
                }
            });

            // Handle tab click
            $('.nav-link').click(function () {
                let targetStep = $(this).data('step');
                $(`#step-${currentStep}`).removeClass('active-step');
                $(`.nav-link[data-step=${currentStep}]`).removeClass('active');
                currentStep = targetStep;
                $(`#step-${currentStep}`).addClass('active-step');
                $(`.nav-link[data-step=${currentStep}]`).addClass('active');
            });
        });
            </script>

            <script src="../assets/js/form-submission.js"></script>
            <script src="../assets/js/page-script.js"></script>
                        <script src="../assets/js/tab-scroll.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</body>

</html>
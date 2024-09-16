<?php
if (isset($_POST['c_name'])) {
    $C_name = $_POST['c_name'];
    $cin = $_POST['cin'];

    $address = $_POST['address'];
   
    $d_name = $_POST['d_name'];
    $DIN = $_POST['DIN'];
    $heldondate = $_POST['heldondate'];
    $time = $_POST['time'];
    $premise_address = $_POST['premise_address'];
    $monthly_lease_rent = $_POST['monthly_lease_rent'];
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
        content="Generate free Board Resolution Format for Appointment of Managing Director in Word format quick and easy by BizFoc. Download now.">
    <meta property="og:image" content="https://bizfoc.com/assets/images/favicon.png" />
    <title>Board Resolution (BR) Format for Appointment of Managing Director (MD)</title>
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
    <link href="../assets/css/headerStyle.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>

<body>
    <?php include ("../include/header.php"); ?>




    <div class="pb-5 content-container">

        <section class="light-bg w-100">
            <div class="p-4">
                <div class="container">
                    <div>
                        <h1>Board Resolution for authorisation to sign rent agreement in Word format</h1>
                        <p class="mb-4">Create and download Board Resolution for authorisation to sign rent agreement in
                            Word format for private limited company</p>
                    </div>
                </div>
                <div class="container pt-5">
                    <form action="resolution-for-authorisation-to-sign-rent-agreement" method="post"
                        enctype="multipart/form-data">
                        <div class="form-group row justify-content-left">
                            <label class="col-sm-4 col-form-label text-lg-right text-sm-left">
                                <b>Company Name<span style="color:red;">*</span></b>
                            </label>
                            <div class="col-sm-6">
                                <input type="text" name="c_name" class="form-control" value="" required>
                            </div>
                        </div>

                        <div class="form-group row justify-content-left">
                            <label class="col-sm-4 col-form-label text-lg-right text-sm-left"><b>Company Address<span
                                        style="color:red;">*</span></b></label>
                            <div class="col-sm-6">
                                <input type="text" name="address" class="form-control" value="" required>
                            </div>
                        </div>

                        <div class="form-group row justify-content-left">
                            <label class="col-sm-4 col-form-label text-lg-right text-sm-left"><b>CIN<span
                                        style="color:red;">*</span></b></label>
                            <div class="col-sm-6">
                                <input type="text" name="cin" class="form-control" value="" required>
                            </div>
                        </div>



                        <div class="form-group row justify-content-left">
                            <label class="col-sm-4 col-form-label text-lg-right text-sm-left"><b>Director Name<span
                                        style="color:red;">*</span></b></label>
                            <div class="col-sm-6">
                                <input type="text" name="d_name" class="form-control" value="" required>
                            </div>
                        </div>

                        <div class="form-group row justify-content-left">
                            <label class="col-sm-4 col-form-label text-lg-right text-sm-left"><b>Held On Date<span
                                        style="color:red;">*</span></b></label>
                            <div class="col-sm-6">
                                <input type="date" name="heldondate" class="form-control" value="" required>
                            </div>
                        </div>

                        <div class="form-group row justify-content-left">
                            <label class="col-sm-4 col-form-label text-lg-right text-sm-left"><b>Time<span
                                        style="color:red;">*</span></b></label>
                            <div class="col-sm-6">
                                <input type="time" name="time" class="form-control" value="" required>
                            </div>
                        </div>

                        <div class="form-group row justify-content-left">
                            <label class="col-sm-4 col-form-label text-lg-right text-sm-left"><b>Premise Address<span
                                        style="color:red;">*</span></b></label>
                            <div class="col-sm-6">
                                <input type="text" name="premise_address" class="form-control" value="" required>
                            </div>
                        </div>

                        <div class="form-group row justify-content-left">
                            <label class="col-sm-4 col-form-label text-lg-right text-sm-left"><b>Monthly Lease Rent<span
                                        style="color:red;">*</span></b></label>
                            <div class="col-sm-6">
                                <input type="number" name="monthly_lease_rent" class="form-control" value="" required>
                            </div>
                        </div>

                        <div class="form-group row justify-content-left">
                            <label class="col-sm-4 col-form-label text-lg-right text-sm-left"><b>City<span
                                        style="color:red;">*</span></b></label>
                            <div class="col-sm-6">
                                <input type="text" name="city" class="form-control" value="" required>
                            </div>
                        </div>

                        <div class="form-group row justify-content-left">
                            <label class="col-sm-4 col-form-label text-lg-right text-sm-left"><b>Director DIN<span
                                        style="color:red;">*</span></b></label>
                            <div class="col-sm-6">
                                <input type="text" name="DIN" class="form-control" value="" required>
                            </div>
                        </div>
                        <center>
                            <button type="submit" class="contact_btn mb-3 my-4">Download for signature</button>
                        </center>
                    </form>
                </div>
            </div>
        </section>
        <br>
        <br>

        <section class="row container">
            <div class="col-md-8 col-lg-8">

                <section>
                    <p class="text-justify">When a company enters into a rent agreement, it needs to give authority to a
                        person who will handle all the work and sign the necessary documents. So, the board of directors
                        must pass a board resolution giving authority to sign rent agreement. The consent of the board
                        of directors is required to pass a resolution to provide authorisation to sign rent agreement.
                        The board resolution for giving the authorisation to sign rent agreement must be passed and
                        signed by the board of directors. As per the law, the board resolution format for authorisation
                        to sign rent agreement includes the following:</p>

                    <div class="form-card">
                        <ul>
                            <li>Name of the director</li>
                            <li>Address of the leased premises</li>
                            <li>Amount of monthly rent</li>
                            <li>Name and designation of the authorized signatory</li>
                            <li>Signature of the authorized signatory</li>
                        </ul>
                    </div>

                    <p class="text-justify">You can download the resolution for authorisation to sign rent agreement in
                        word format, which is ready to use. The board resolution format for authorisation to sign rent
                        agreement provided by Bizfoc can be generated quickly which will save time and reduce the
                        chances of errors.</p>
                </section>

                <section>
                    <div>
                        <h2 style="margin-bottom:0px">Format for Board Resolution for authorisation to sign rent
                            agreement</h2>
                        <hr style="border-color:#000">
                        <div style="text-align:center">
                            <p>Company Name: ________</p>
                            <p>CIN: ________</p>
                            <p>Company Address: ________</p>
                            <p>Email Id: ________ </p>
                        </div>

                        <p><strong>CERTIFIED TRUE COPY OF THE RESOLUTION PASSED IN THE MEETING OF ________ HELD ON
                                ________ AT ________ AT THE
                                REGISTERED OFFICE OF THE COMPANY</strong></p>

                                <p><strong><u>OBTAINING LOAN AGAINST SECURITIES</u></strong></p>

                        <p>The Director Mr./Mrs ________[Name of Director]., informs the board that for smooth
                            functioning and
                            expansion of business, the company is required to take on lease suitable office premises.
                            The draft agreement for the same is placed before the board and after due consideration and
                            deliberation, the board passed the following resolution:-</p>

                        <p><strong>RESOLVED THAT</strong> the consent of the board of directors is hereby accorded to
                            take on lease office premises situated at ________ [Address of Office Premises] on monthly
                            lease rent
                            of Rs XX,XXX/- Only.</p>

                        <p><strong>FURTHER RESOLVED THAT</strong> Mr./Mrs. ________[Name of Director] director of the
                            company is
                            hereby authorized to represent the company, sign and execute necessary documents and rent
                            agreement and to take all necessary action on behalf of the company.</p>

                        <p><strong>CERTIFIED TRUE COPY</strong></p>
                        <br>
                        <p>For Company Name:________</p>
                        <p><strong>Signature:</strong></p>
                        <br>
                        <br>
                        <p><strong>Name: ________</strong></p>
                        <p><strong>Designation: ________</strong></p>
                        <p><strong>DIN: ________</strong></p>

                        <p><strong>Date: ________</strong></p>
                        <p><strong>Place: ________</strong></p>
                    </div>
                </section>



                <section id="faq">
                    <h2>Frequently Asked Questions (FAQ) for Format for Resolution for Authorisation to sign rent
                        agreement</h2>
                    <div id="accordion">
                        <div class="card">
                            <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                <span class="title">Which resolution is required for authorisation to sign rent
                                    agreement?</span>
                                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p class="mb-0">The authorisation to sign rent agreement is made by means of a
                                        resolution passed
                                        at the meeting of the Board.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header collapsed" id="headingTwo" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <span class="title">Can a board resolution for authorisation to sign rent agreement be
                                    passed without convening a board meeting?</span>
                                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p class="mb-0">The board resolution for authorisation to sign rent agreement should
                                        be passed at
                                        a duly convened board meeting. However, the passing of a resolution by
                                        circulation should be
                                        declared valid as if it had been passed at a duly held meeting of the board or
                                        the committee.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header collapsed" id="headingThree" data-toggle="collapse"
                                data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <span class="title">Who can be considered as an authorized signatory for the board
                                    resolution for authorisation to sign rent agreement?</span>
                                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordion">
                                <div class="card-body">
                                    <p class="mb-0">The Board of Directors are considered an authorized signatory for
                                        the board
                                        resolution for authorisation to sign rent agreement.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header collapsed" id="heading4" data-toggle="collapse"
                                data-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                <span class="title">Is the signature of all directors mandatory on Board resolution
                                    format for authorisation to sign rent agreement?</span>
                                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                            </div>
                            <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
                                <div class="card-body">
                                    <p class="mb-0">No, the signatures of all directors are not mandatory on Board
                                        Resolution for
                                        authorisation to sign rent agreement. The resolution can be signed by only one
                                        authorized
                                        director.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header collapsed" id="heading5" data-toggle="collapse"
                                data-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                <span class="title">Does the Board Resolution format for authorisation to sign rent
                                    agreement need to be certified by a professional?</span>
                                <span class="accicon"><i class="fas fa-angle-down rotate-icon"></i></span>
                            </div>
                            <div id="collapse5" class="collapse" aria-labelledby="heading5" data-parent="#accordion">
                                <div class="card-body">
                                    <p class="mb-0">No, the Board Resolution Format does not mandatorily need to be
                                        certified by a
                                        Professional.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 position-relative pr-lg-0 pr-md-0 pt-4">
                <div class="callback-form p-4" id="sticky-form">
                    <h5 class="mb-4 form-title">REQUEST A CALL BACK</h5>
                    <form method="post" id="form2" class="ajax-form" action="../include/form-submit.php">
                        <div class="form-group">
                            <input type="hidden" name="entity"
                                value="resolution-for-authorisation-to-sign-rent-agreement">
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
        </section>
    </div>
    

    <?php include("../include/tools-links.php"); ?>
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
        <div id="exportContent" style="display:none;" >
        <div style = "text-align:center">
        <p>' . $c_name . '</p>
        <p>' . $cin . '</p>
        <p>' . $address . '</p>
    
        </div>

        <p><strong>CERTIFIED TRUE COPY OF THE RESOLUTION PASSED IN THE MEETING OF THE BOARD OF DIRECTORS
                OF ' . $c_name . ' HELD ON ' . $heldondate . ' AT ' . $time . ' AT THE
                REGISTERED OFFICE OF THE COMPANY</strong></p>

        <p>The Director Mr./Mrs. ' . $d_name . ', informs the board that for smooth functioning and
            expansion of business, the company is required to take on lease suitable office premises.
            The draft agreement for the same is placed before the board and after due consideration and
            deliberation, the board passed the following resolution:-</p>

        <p><strong>RESOLVED THAT</strong> the consent of the board of directors is hereby accorded to
            take on lease office premises situated at ' . $premise_address . ' on monthly lease rent
            of Rs ' . $monthly_lease_rent . '/- Only.</p>

        <p><strong>FURTHER RESOLVED THAT</strong> Mr./Mrs.  ' . $d_name . ' of the company is
            hereby authorized to represent the company, sign and execute necessary documents and rent
            agreement and to take all necessary action on behalf of the company.</p>

        <p><strong>CERTIFIED TRUE COPY</strong></p>
        <br>
        <p>For ' . $c_name . '</p>
        <p><strong>Signature:</strong></p>
        <br>
        <br>
        <p><strong>Name: ' . $d_name . '</strong></p>
        <p><strong>Designation: ' . $designation . '</strong></p>
        <p><strong>DIN: ' . $DIN . '</strong></p>

        <p><strong>Date:' . $date . '</strong></p>
        <p><strong>Place: ' . $city . '</strong></p>
        </div>

    <script>
        Export2Doc("exportContent","resolution-for-authorisation-to-sign-rent-agreement-' . $name . '");
        alert("Thanks for Downloading");
    </script>';
        header('Location: resolution-for-authorisation-to-sign-rent-agreement');
    }
    ?>
    <script>
        $(function () {
            var button = $("button");

            $("#form2").submit(function (event) {
                event.preventDefault();
                var form = $(this);
                // Get the form data
                var formData = {
                    name: $("input[name=name1]").val(),
                    email: $("input[name=email1]").val(),
                    entity: $("input[name=entity]").val(),
                    mobile: $("input[name=mobile1]").val()
                };

                // Process the form
                $.ajax({
                    type: 'post',
                    url: '../include/form-submit.php',
                    data: formData,
                    dataType: "json",
                    success: function (response) {
                        if (response.success) {
                            form.find(".response").text(response.message);
                        } else {
                            form.find(".response").text(response.message);
                        }
                        setTimeout(() => {
                            form[0].reset();
                            form.find(".response").hide();
                        }, 5000);
                    },
                    error: function (error) {
                        form.find(".response").text("An error occurred. Please try again.");
                    }
                });
            });
        });
    </script>
    <script src="assets/js/formPageScript.js"></script>
    <script src="./assets/js/newScript.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</body>

</html>
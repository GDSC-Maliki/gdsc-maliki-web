<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Oprec Form</title>
    <link href="{{ asset('landing/assets/img/logo.png') }}" rel="icon" />
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('landing/assets/css/opensans-font.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ asset('landing/assets/fonts/line-awesome/css/line-awesome.min.css') }}" />
    <!-- Jquery -->
    <link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css" />
    <!-- Main Style Css -->
    <link rel="stylesheet" href="{{ asset('landing/assets/css/style1.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body class="form-v4" style="
      background-image: url('{{ asset('landing/assets/img/bg.gif') }}');
      background-size: cover;
      background-repeat: no-repeat;
    ">
    <div class="splash">
        <img class="fade-in" src="{{ asset('landing/assets/img/lg.png') }}" width="50%" alt="DSC" />
    </div>
    <div class="page-content">
        <div class="form-v4-content">
            <form class="form-detail" name="submit-to-google-sheet">
                <audio controls autoplay loop id="playAudio" class="float-end">
                    <!-- <source src="{{ asset('landing/assets/img/song.ogg') }}" type="audio/mpeg" /> -->
                    <source src="{{ asset('landing/') }}assets/img/song.mp3" type="audio/mpeg" />
                    <!-- <source src="{{ asset('landing/assets/img/song.wav') }}" type="audio/mpeg" /> -->
                </audio>
                <h2>REGISTER FORM</h2>
                <!-- Email address input -->
                <div class="mb-3 form-row">
                    <label class="form-label" for="emailAddress">Email Address<span
                            class="text-danger">*</span></label>
                    <input class="form-control" id="emailAddress" type="email" placeholder="Email Address"
                        name="email" required />
                </div>

                <!-- Full Name input -->
                <div class="mb-3 form-row">
                    <label class="form-label" for="name">Full Name<span class="text-danger">*</span></label>
                    <input class="form-control" id="fullName" name="fullName" type="text" placeholder="Full name"
                        required />
                </div>

                <div class="row mb-3 form-row">
                    <!-- NIM input -->
                    <div class="col">
                        <label class="form-label" for="emailAddress">NIM<span
                                class="text-danger">*</span></label>
                        <input type="number" class="form-control" name="nim" placeholder="NIM" aria-label="NIM"
                            required />
                    </div>

                    <!-- Semester input -->
                    <div class="col">
                        <label class="form-label" for="emailAddress">Semester<span
                                class="text-danger">*</span></label>
                        <input type="number" class="form-control" name="semester" placeholder="Semester"
                            aria-label="Last name" required />
                    </div>
                </div>

                <!-- Jurusan input -->
                <div class="mb-3 form-row">
                    <label class="form-label" for="jurusan">Major<span class="text-danger">*</span>
                        <span class="text-secondary">
                            (ex. Teknik Informatika / Matematika / Ekonomi Syariah, etc.)
                        </span></label>
                    <input class="form-control" id="jurusan" type="text" placeholder="Major (Jurusan)" name="major"
                        required />
                </div>

                <!-- Nomor HP input -->
                <div class="mb-3 form-row">
                    <label class="form-label" for="nomorhp">No. Hp / WhatsApp<span
                            class="text-danger">*</span></label>
                    <input class="form-control" id="nomorhp" type="number" placeholder="No. Hp / WhatsApp" name="nohp"
                        required />
                </div>

                <!-- Motivation Letter input -->
                <div class="mb-3 form-row">
                    <label class="form-label" for="motivation letter">Motivation Letter - Min 1 Paragraph<span
                            class="text-danger">*</span></label>
                    <textarea class="form-control" id="motivationLetter" name="motivationLetter" type="text"
                        placeholder="Motivasi anda mendaftar menjadi GDSC Maliki" style="height: 10rem"
                        required></textarea>
                </div>

                <!-- CV input -->
                <div class="mb-3 form-row">
                    <label class="form-label" for="cv">Link CV<span class="text-warning">
                            (Optional but we advise you to fill in) </span><br />
                        <span class="text-secondary">We recommend that you send your CV to help yourself in the
                            future.</span>
                        <br />
                        <ul>
                            <li>
                                <a href="https://app.kinobi.asia/resume/61789fa388d261001fb13567"
                                    target="_blank">Example</a>
                            </li>
                            <li>
                                <a href="https://app.kinobi.asia/id/resume" target="_blank">Let's Make a CV</a>
                            </li>
                        </ul>
                        <span class="text-secondary">(must include https:// or http://)</span>
                    </label>
                    <input class="form-control" id="cv" type="url" placeholder="Curriculum Vitae" name="cv" />
                </div>

                <!-- Follow Social Media -->
                <div class="mb-3 form-row">
                    <label class="form-label" for="social">Screenshot Proof link below<span
                            class="text-danger">*</span><br /><span class="text-secondary">
                            (must include https:// or http://)</span></label>
                    <ul>
                        <li>
                            Screenshoot of
                            <a href="https://gdsc.community.dev/uin-maulana-malik-ibrahim-malang/" target="_blank">GDSC
                                (Join Chapter)</a>
                        </li>
                        <li>
                            Screenshoot of Share our Poster Oprec Member on Your IG Story
                        </li>
                    </ul>
                    <label class="form-label">Then send it to us via google drive link or something
                        similar</label>
                    <input class="form-control" id="proof" type="url" placeholder="Paste link here" name="proof"
                        required />
                </div>

                <div class="alert alert-success alert-dismissible fade show d-none" role="alert">
                    Thank you for registering in the GDSC community. Let's Join to our
                    discord group
                    <a href="https://discord.gg/DqJ3d3g7gw" target="_blank">Here</a> !!!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                <!-- Form submit button -->
                <div class="form-row">
                    <button class="register btn-send p-3" id="submitButton" type="submit">
                        Register
                    </button>
                    <button class="register d-none btn-loading" type="button" disabled>
                        <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                        Loading...
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        const splash = document.querySelector(".splash");
        document.addEventListener("DOMContentLoaded", (e) => {
            setTimeout(() => {
                splash.classList.add("display-none");
            }, 2500);
        });
    </script>
    <script>
        const scriptURL =
            "https://script.google.com/macros/s/AKfycbynUvvpmwtcpwzayG9z538-oCFGZKoFKD7_MDxzwKX2Rzfeyg6VewrkCfR8Jd7BE1KY/exec";
        const form = document.forms["submit-to-google-sheet"];
        console.log(form);
        const btnSend = document.querySelector(".btn-send");
        const btnLoading = document.querySelector(".btn-loading");
        const alert = document.querySelector(".alert");

        console.log(form);
        form.addEventListener("submit", (e) => {
            e.preventDefault();
            btnLoading.classList.toggle("d-none");
            btnSend.classList.toggle("d-none");
            fetch(scriptURL, {
                    method: "POST",
                    body: new FormData(form),
                })
                .then((response) => {
                    btnLoading.classList.toggle("d-none");
                    btnSend.classList.toggle("d-none");
                    alert.classList.toggle("d-none");
                    form.reset();
                    console.log("Success!", response);
                })
                .catch((error) => console.error("Error!", error.message));
        });
    </script>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

    <script>
        jQuery.validator.setDefaults({
            debug: true,
            success: function(label) {
                label.attr("id", "valid");
            },
        });
        $("#myform").validate({
            rules: {
                password: "required",
                comfirm_password: {
                    equalTo: "#password",
                },
            },
            messages: {
                first_name: {
                    required: "Please enter a firstname",
                },
                last_name: {
                    required: "Please enter a lastname",
                },
                your_email: {
                    required: "Please provide an email",
                },
                password: {
                    required: "Please enter a password",
                },
                comfirm_password: {
                    required: "Please enter a password",
                    equalTo: "Wrong Password",
                },
            },
        });
    </script>
</body>

</html>

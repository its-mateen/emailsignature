<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDIT IKY EMAIL SIGNATURE FORM</title>
    <!-- CSS files -->
    <link href="dist/css/tabler.min.css" rel="stylesheet" />
    <style>
        .image-preview {
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid #ccc;
            border-radius: 10px;
            margin-bottom: 10px;
            height: 118px;
            width: 118px;
            background-color: #f7f7f7;
            border-radius: 10px;
            /* Optional: round the corners */
            background-image: url('pic.jpg');
            /* Default image */
            background-size: cover;
            /* Scale the image to cover the div */
            background-position: center;
            /* Center the image */
            background-repeat: no-repeat;
            /* Prevent image repetition */
        }

        .image-preview img {
            max-width: 100%;
            max-height: 100%;
            border-radius: 10%;
        }

        .banner-preview {
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid #ccc;
            border-radius: 10px;
            margin-bottom: 10px;
            width: 540px;
            height: 116px;
            background-color: #f7f7f7;
        }

        .banner-preview img {
            max-width: 100%;
            max-height: 100%;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #f8f9fa;
            border-bottom: 1px solid #e5e5e5;
        }

        .header img {
            height: 50px;
        }

        .header-buttons {
            margin-left: auto;
            display: flex;
            gap: 10px;
        }

        .header button {
            padding: 10px 20px;
        }

        /* Optional: Responsive behavior */
        @media (max-width: 768px) {
            .image-preview {
                height: 150px;
                /* Adjust height for smaller screens */
            }
        }
    </style>
</head>

<body>
    <!-- Header Section -->
    <div class="header sticky-top">
        <a href="view.php">
            <img src="logo.png" alt="Logo">
        </a>
        <div class="header-buttons">
            <a href="view.php" class="btn btn-yellow">View Signatures</a>
            <a href="login.php" class="btn btn-dark">Logout</a>
        </div>
    </div>

    <div class="container py-4">
        <div class="card">
            <div class="card-header text-light" style="background-color:#000">
                <h3 class="card-title">EDIT YOUR SIGNATURE</h3>
            </div>
            <div class="card-body">
                <form action="view.php" method="get" autocomplete="off" novalidate>
                    <div class="row">
                        <!-- User Name -->
                        <!-- <div class="col-md-6 mb-3">
                            <label class="form-label">User Name</label>
                            <input type="text" class="form-control" placeholder="Enter your name">
                        </div> -->

                        <!-- Designation -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Designation</label>
                            <input type="text" class="form-control" placeholder="Enter your designation">
                        </div>

                        <!-- Email -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" placeholder="Enter your email">
                        </div>

                        <!-- Company Website URL -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Company Website</label>
                            <input type="url" class="form-control" value="https://www.iky.eu">
                        </div>

                        <!-- Address -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Address</label>
                            <input type="text" class="form-control"
                                value="Iky Entertainment, srl Boulevard Saint-Michel 65 Bte 6, 1040 Bruxelles, Belgium">
                        </div>
                    </div>
                    <!-- Social Links -->
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">YouTube Link</label>
                            <input type="url" class="form-control" value="https://youtube.com/@IKYCooking">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Pinterest Link</label>
                            <input type="url" class="form-control" value="https://www.pinterest.com/IKYCooking/">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Facebook Link</label>
                            <input type="url" class="form-control" value="https://facebook.com/IKYCooking">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">TikTok Link</label>
                            <input type="url" class="form-control" value="https://www.instagram.com/ikycooking">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Twitter Link</label>
                            <input type="url" class="form-control" value="https://x.com/Ikycooking">
                        </div>
                    </div>
                    <div class="row">
                        <!-- Profile Image -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Profile Image</label>
                            <div class="image-preview" id="profilePreview"></div>
                            <input type="file" class="form-control" id="profileImage" accept="image/*"
                                onchange="previewImage(event, 'profilePreview')">
                        </div>

                        <!-- Banner Image -->
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Banner Image <span class="text-danger"> Image Size 540 x 116
                                    pixel</span></label>
                            <div class="banner-preview" id="bannerPreview">No Banner Image</div>
                            <input type="file" class="form-control" id="bannerImage" accept="image/*"
                                onchange="previewImage(event, 'bannerPreview')">
                        </div>
                    </div>

                    <!-- TinyMCE Rich Text Field -->
                    <div class="mb-3">
                        <label class="form-label">Additional Information (Disclaimer) <span class="text-danger"> "ctr+k"
                                for Adding a Link</span></label>
                        <textarea id="tinymce-mytextarea" rows="10" placeholder="Enter your Disclaimer "></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="mb-3">
                        <button type="submit" class="btn btn-yellow w-100">Update Signature</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Libs JS -->
    <script src="dist/libs/tinymce/tinymce.min.js" defer></script>
    <!-- Tabler Core -->
    <script src="dist/js/tabler.min.js" defer></script>
    <script>
        // @formatter:off
        document.addEventListener("DOMContentLoaded", function () {
            let options = {
                selector: '#tinymce-mytextarea',
                height: 300,
                menubar: false,
                statusbar: false,
                license_key: 'gpl',
                plugins: [
                    'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview', 'anchor',
                    'searchreplace', 'visualblocks', 'code', 'fullscreen',
                    'insertdatetime', 'media', 'table', 'code', 'help', 'wordcount'
                ],
                toolbar: 'undo redo | formatselect | ' +
                    'bold italic backcolor | alignleft aligncenter ' +
                    'alignright alignjustify | bullist numlist outdent indent | ' +
                    'removeformat',
                content_style: 'body { font-family: -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif; font-size: 14px; -webkit-font-smoothing: antialiased; }'
            }
            if (localStorage.getItem("tablerTheme") === 'dark') {
                options.skin = 'oxide-dark';
                options.content_css = 'dark';
            }
            tinyMCE.init(options);
        })
        // @formatter:on
    </script>
    <script>
        // Image Preview Function
        function previewImage(event, previewElementId) {
            var reader = new FileReader();
            reader.onload = function () {
                var output = document.getElementById(previewElementId);
                output.innerHTML = '<img src="' + reader.result + '"/>';
            };
            reader.readAsDataURL(event.target.files[0]);
        }

    </script>
</body>

</html>
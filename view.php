<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signature Data View</title>
    <!-- Tabler CSS -->
    <link href="dist/css/tabler.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .card-profile {
            position: relative;
            text-align: center;
            margin-top: -60px;
        }

        .card-profile img {
            border-radius: 50%;
            border: 4px solid white;
            width: 120px;
            height: 120px;
        }

        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 10px;
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

        .card {
            transition: background-color 0.3s, color 0.3s;
        }

        .card:hover {
            background-color: #000;
            color: #e5a93a;
            border: none;
        }
    </style>
</head>

<body>

    <!-- Header Section -->
    <div class="header sticky-top">
        <a href="view.php">
            <img src="logo.png" alt="Logo">
        </a>
        <div>
            <a href="index.php" class="btn btn-yellow">Add New Signatures</a>
            <a href="login.php" class="btn btn-dark">Logout</a>
        </div>
    </div>

    <div class="container py-4">
        <div class="row">
            <!-- Repeatable Card -->
            <!-- Card Start -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="banner-preview">
                        <img src="info.png" class="card-img-top" alt="Banner Image">
                    </div>
                    <div class="card-body text-center">
                        <div class="card-profile pt-4">
                            <img src="logo.png" alt="Profile" style="height:80px; width:80px;">
                        </div>
                        <h3 class="title mt-3" style="text-transform: uppercase;">Designation Example</h3>
                        <div class="action-buttons mt-4">
                            <a href="edit.php" class="btn btn-yellow btn-icon" title="Edit"><i
                                    class="fas fa-pencil-alt"></i></a>
                            <a href="signature_view.php" target="_blank" class="btn btn-info btn-icon" title="View"><i
                                    class="fas fa-eye"></i></a>
                            <a href="#" class="btn btn-danger btn-icon" data-bs-toggle="modal"
                                data-bs-target="#modal-danger" title="Delete"><i class="fas fa-trash"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card End -->

            <!-- Card Start -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="banner-preview">
                        <img src="support.png" class="card-img-top" alt="Banner Image">
                    </div>
                    <div class="card-body text-center">
                        <div class="card-profile pt-4">
                            <img src="logo.png" alt="Profile" style="height:80px; width:80px;">
                        </div>
                        <h3 class="title mt-3" style="text-transform: uppercase;">Designation Example</h3>
                        <div class="action-buttons mt-4">
                            <a href="edit.php" class="btn btn-yellow btn-icon" title="Edit"><i
                                    class="fas fa-pencil-alt"></i></a>
                            <a href="signature_view.php" target="_blank" class="btn btn-info btn-icon" title="View"><i
                                    class="fas fa-eye"></i></a>
                            <a href="#" class="btn btn-danger btn-icon" data-bs-toggle="modal"
                                data-bs-target="#modal-danger" title="Delete"><i class="fas fa-trash"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Card End -->
        </div>
    </div>

    <!-- Delete Confirmation Modal -->
    <div class="modal modal-blur fade" id="modal-danger" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-status bg-danger"></div>
                <div class="modal-body text-center py-4">
                    <!-- Download SVG icon from http://tabler-icons.io/i/alert-triangle -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="icon mb-2 text-danger icon-lg">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 9v4" />
                        <path
                            d="M10.363 3.591l-8.106 13.534a1.914 1.914 0 0 0 1.636 2.871h16.214a1.914 1.914 0 0 0 1.636 -2.87l-8.106 -13.536a1.914 1.914 0 0 0 -3.274 0z" />
                        <path d="M12 16h.01" />
                    </svg>
                    <h3>Are you sure?</h3>
                    <div class="text-secondary">Do you really want to remove your <b class="text-danger">IKY
                            Signature</b> What you've done cannot be
                        undone.</div>
                </div>
                <div class="modal-footer">
                    <div class="w-100">
                        <div class="row">
                            <div class="col"><a href="#" class="btn w-100" data-bs-dismiss="modal">
                                    Cancel
                                </a></div>
                            <div class="col"><a href="#" class="btn btn-danger w-100" data-bs-dismiss="modal">
                                    Delete Signature
                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabler Core JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="dist/js/tabler.min.js" defer></script>
</body>

</html>
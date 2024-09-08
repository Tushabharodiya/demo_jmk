<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Shree Jamka Leuva Patel Society.">
    <meta name="robots" content="noindex, nofollow" />
    <title>Create Post</title>

    <link rel="shortcut icon" href="assets/images/favicon.png">
    
    <!-- jquery -->
    <script src="assets/js/jquery-3.7.1.min.js"></script>

    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- img cropper -->
    <script src="assets/js/croppie.min.js"></script>
    <link rel="stylesheet" href="assets/css/croppie.min.css">

    <script src="assets/js/html2canvas.min.js"></script>

    <link rel="stylesheet" href="assets/css/style.css">

</head>
<body>
    <div id="loader_container">
        <div id="loader">
            <div class="spinner-border text-white" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="main_cnt row">
            <div class="left_cols col-12 col-sm-4 col-md-3 col-xl-2">
                <div>
                    <div class="">
                        <p class="detail_heading">Enter your details</p>
                        <div class="mb-4">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Name">
                        </div>
                        <div class="mb-4">
                            <label class="form-label">Gender:</label>
                            <div class="form-check">
                                <input data-val="male" class="form-check-input" type="radio" name="flexRadioGender" id="flexRadioMale">
                                <label class="form-check-label" for="flexRadioMale">Male</label>
                            </div>
    
                            <div class="form-check">
                                <input data-val="female" class="form-check-input" type="radio" name="flexRadioGender" id="flexRadioFemale" checked>
                                <label class="form-check-label" for="flexRadioFemale">Female</label>
                            </div>
                        </div>
                        <div class="mb-5">
                            <label for="imageFile" class="form-label">Image</label>
                            <input class="form-control" accept="image/*" type="file" id="imageFile">
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-primary d-none d-sm-block download_img p-2">Download</button>
                    </div>
                </div>
            </div>
            <div class="main_body col-12 col-sm-8 col-md-9 col-xl-10">
                <div class="header d-none d-sm-block">
                    <h3>Create Post</h3>
                </div>
                <div class="poster_cnt">
                    <div class="poster_prev" id="capture">
                        <img id="profile_img" src="" alt="">
                        <img class="poster_img male" src="./assets/images/Boys.png" alt="">
                        <img class="poster_img female" src="./assets/images/Girls.png" alt="">
                        <p id="user_name_prev"></p>
                    </div>
                </div>
                <div class="p-2 my-4 mb-5 d-sm-none">
                    <button class="btn btn-primary download_img p-2">Download</button>
                </div>
                <footer class="mt-4"><a target="_blank" href="https://syphnosys.com/">Syphnosys Technology Private Limited.</a></footer>
            </div>
        </div>
    </div> 
    <img src="" id="imagePreview" alt="">
    <div class="image_prev_modal">
        <div id="upload-demo"></div>
        <div class="btn_cnt">
            <button class="upload-result btn btn-primary">Save</button>
            <button class="btn btn-secondary close_preview">Cancel</button>
        </div>
    </div>
    <script src="assets/js/script.js"></script>
    <script src="./assets/js/index.js"></script>
</body>
</html>
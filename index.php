<!DOCTYPE html>
<html>
    <head>
        <title>usereditableelements</title>
        <link rel="stylesheet" href="style.css" />
        <script src="//code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <div class="main-div">
            <div class="image-div">
                <img src="/myprojects/usereditableelements/media/images/bg.jpg" />
                <form method="POST" action="" enctype="multipart/form-data">
                <label for="file" class="upload-btn">Upload Image</label>
                <input type="file" id="file" name="file" />
                </form>
            </div>
            <div class="content-div">
                <h1 contenteditable="true">Some heading here</h1>
                <p contenteditable="true">Some paragraph here</p>
            </div>
        </div>
        <script src="jquery/index.js"></script>
    </body>
    <html>
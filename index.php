<!DOCTYPE html>
<html>
<head>
    <title>ZV Pic</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.js"></script>
    <script src="https://cdn.bootcss.com/jquery/3.4.1/jquery.min.js"></script>
    <script src="js/upload.js"></script>
    <script src="js/copy.js"></script>
</head>
<body>
    <div class='top_bar'>
        <a href="http://pic.localhost" title="Pic Home">Home</a>
        <a href="http://localhost" title="Blog Home">Blog</a>
        <a href="http://pic.localhost/album" title="Photo Album">Album</a>
        <a href="http://pic.localhost/login" title="Login">Login</a>
    </div>
    <form id="uc" class='input_pic_box'>
        <input type="file" class='input_pic' name="pic_path" value="Input Picture" accept=".jpg .png .gif" />
        <div class="text_items">
            <input type="text" name="pic_name" placeholder="Picture name" class='text_input' />
            <input type="text" name="description" placeholder="Description" class='text_input' />
            <div class='text_output_box'>
                <div id="md-link" class='text_output'>md</div>
                <input type="button" class='button' name="copy_md" value="copy" />
            </div>
            <div class='text_output_box'>
                <div id='link' class='text_output'>link</div>
                <input type="button" class='button' name="copy_or" value="copy" />
            </div>
            <div class='upload'>
                <input type="submit" class="button" name="upload" value="upload" />
            </div>
        </div>
    </form>
</body>
</html>
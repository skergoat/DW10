<!doctype html>
<html>
    <heade>
        <meta charset="utf-8">
        <title>Page sur mon parcours</title>
        <style>
            body {
                margin:0px;
            }
            nav {
                width:100vw;
                position:fixed;
                background:rgba(255, 255, 255, 0.6);
            }
            header {
                max-height:250px;
                overflow:hidden;
            }
            .container {
                margin:auto;
                width:1200px;
                display:flex;
                justify-content: space-between;
            }
            ul {
                display:flex;
                list-style-type:none;
                padding-top:10px;
            }
            ul li {
                padding-right:50px;
            }
            img {
                width:100%;
            }
            h1 {
                text-align:center;
            }
            section {
                padding:70px 50px 100px 50px;
                min-height:40vh;
            }
            footer {
                border-top:1px solid lightgrey;
                padding:30px;
                text-align:center;
                background:#f2f2f2;
            }
        </style>
    </heade>
    <body>
        <!-- navbar -->
       <?php include("components/navbar.php"); ?>
        <!-- header -->
        <header>
            <img src="assets/img/header.jpeg" alt="">
        </header>
        <!-- section -->
        <section>
            <h1>Mon super site web</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget ipsum ultrices, accumsan erat et, euismod dolor. Proin feugiat volutpat erat, a laoreet nisi sagittis quis. Etiam vulputate mollis mauris in porta. In pulvinar tortor eu enim tincidunt, sit amet efficitur lacus lobortis. In pellentesque mi justo, molestie fringilla erat lobortis ut. Mauris ullamcorper eu ex nec molestie. Aenean finibus placerat tellus luctus egestas. In feugiat mi non ante tristique, nec ornare lacus convallis. Duis et nunc scelerisque, ullamcorper ipsum id, pretium turpis.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus eget ipsum ultrices, accumsan erat et, euismod dolor. Proin feugiat volutpat erat, a laoreet nisi sagittis quis. Etiam vulputate mollis mauris in porta. In pulvinar tortor eu enim tincidunt, sit amet efficitur lacus lobortis. In pellentesque mi justo, molestie fringilla erat lobortis ut. Mauris ullamcorper eu ex nec molestie. Aenean finibus placerat tellus luctus egestas. In feugiat mi non ante tristique, nec ornare lacus convallis. Duis et nunc scelerisque, ullamcorper ipsum id, pretium turpis.</p>
        </section>
        <!-- footer -->
        <?php include("components/footer.php"); ?>
         <!-- navbar background on scroll -->
         <script src="assets/js/script.js"></script>
    </body>
</html>
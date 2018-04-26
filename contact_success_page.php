<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Trading Club at Tunis Business School</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"> <!-- main style file -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        
        <script type="text/javascript">
            $(window).on('scroll', function(){
                if($(window).scrollTop()) {
                    $('nav').addClass('black');
                }
                else{
                    $('nav').removeClass('black');
                }
            })
        </script>
    </head>
    
    <body>
        
        <div class="wrapper">
            <nav>
                <div class="logo"><img src="img/logo1.png" height="40px" /></div>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="team.html">TEAM</a></li>
                    <li><a href="projects.html">PROJECTS</a></li>
                    <li><a class="active" href="membersonly.html">MEMBERS AREA</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>
            </nav>
            <section class="sec1">
                <br><br><br><br><br><br>
                <form id="recruit">
                    <br><br><br><br><br><br><br><br>
                    <?php include'PHP_CONTACT_HANDLING/action_insert.php'; ?>
                    
                </form>
                
            <footer>
                <hr>
                <br>
                <div class="footerTEXT">Copyright TRADING CLUB TUNIS BUSINESS SCHOOL 2018</div>
                <div class="footerTEXT">Designed by: <a href="#">Wajdi Ben Abderrahmen</a></div>
            </footer>
                
            </section>
           
        
        
        </div>
        
    </body>
</html>
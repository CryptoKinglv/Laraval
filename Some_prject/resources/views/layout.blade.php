<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>3 Most recent article</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Tabs -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
   
    <!-- fancy -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />

<link rel="stylesheet" href="css/main.css">



</head>
<body>
<header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-3 main-logo">
                    <a href="index.php?page=index">
                <img src="https://i2.wp.com/www.cryptotraders.eu/wp-content/uploads/Bytecoin.png?fit=900%2C300&ssl=1">
                    </a>
                </div>
                <div class="col-xs-9">
                        <ul class="main-menu">
                            <li class="main-menu-item <?php echo $page == 'index' ? 'active' : ''; ?>">
                                <a href="/">Home</a>
                            </li>
                            <li class="main-menu-item <?php echo $page == 'article' ? 'active' : ''; ?>">
                                <a href="/articles">Article</a>
                            </li>
                            <li class="main-menu-item <?php echo $page == 'chat' ? 'active' : ''; ?>">
                                <a href="/chat">Chat</a>
                            </li>
                            <li class="main-menu-item <?php echo $page == 'regestration' ? 'active' : ''; ?>">
                                <a href="/regestration">Register</a>
                            </li>
                            <li class="main-menu-item <?php echo $page == 'about_us' ? 'active' : ''; ?>">
                                <a href="/about_us">About us</a>
                            </li>
                        </ul>
                    </div>
            </div>
             </div>
    </header>
@yield ('content')





    <footer>
            
        <h5>&copy;Bytecoin.org 2011–2018 </h5>
        </footer>
         <!-- about us Tab -->
         <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>      $('#tabs').tabs(); </script>
<!-- about us Tab -->

   <!-- fancybox -->
   <script> src="//code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
    <!-- fancybox -->

    
    <!-- chat -->    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  
<script type="text/javascript" src="js/main.js"></script>

        </body>
        </html>


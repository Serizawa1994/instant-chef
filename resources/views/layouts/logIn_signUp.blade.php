<!DOCTYPE html>
<html lang="ja">
    
    <head>
        <meta charset="utf-8">
        <title>Instatn Chef</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    </head>
    <header class="container mb-10">
        <div class="row">
            <div class="col-sm-5 mt-2">
                <div style="overflow:hidden;">
                    <div style="float:left;">
                        <img src="/Instant_Chef_img/chef-hat-309146.png" alt="Chef_Hat" style="width:60px; height:60px; margin-right:4px;">
                    </div>
                    <div style="float:left;">
                        <h1 style="margin-top:5px;"><a href="/" style="color:#ff4500; text-decoration:none;" >Instant Chef</a></h1>
                        <p style="color:#ff4500; text-align:center;">料理が大好きなあなたへ</p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <body>
        <div class="container">
            @include('commons.error_messages')
            @yield('content')
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
    </body>
</html>
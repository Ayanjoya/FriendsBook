<!DOCTYPE html>
<html>
<head>
  <title></title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5GMFFWW');</script>
<!-- End Google Tag Manager -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</head>
<body>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5GMFFWW"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  


<div class="p-4 main" style="box-shadow: 0px 10px 20px;">
  






<img src="logo.png" class="logo" >  



<h5 style="margin-top:30px; text-align: center;">Log in to soclpie</h5>

<form style="margin-top:30px;" method="post" action="login_check.php">
  <div class="form-group">

    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address" name="email">

  </div>
  <div class="form-group mt-4">

    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
  </div>

  <button type="submit" class="btn btn-primary text-white mt-3  m-auto">LogIn</button>
</form>

</div>

  
<style type="text/css">
  


html,body{
  background-color: #F19B5B;
  height: 100%;
  padding:2%;
}


.main{
  background-color: white; width: 700px;height: 400px;top:50%;left:50%;position: absolute; transform: translate(-50% , -50%);border-radius: 10px;
}

.logo{
  width:300px;background-color: white;top:00%;left:50%;position: absolute; transform: translate(-50% , -50%);border: none;padding:10px;border-radius: 10px;
}


@media only screen and (max-width: 786px) {
  .main{
    background-color: white; width: 300px;height: 300px;top:50%;left:50%;position: absolute; transform: translate(-50% , -50%);border-radius: 10px;
  }

  .logo{
    width:170px;
  }

  #emailHelp{
    display: none;
  }
}


@media only screen and (max-width: 299px) {
  .main{
    background-color: white; width: 100%;height: 50%;top:50%;left:50%;position: absolute; transform: translate(-50% , -50%);border-radius: 10px;
  }

  .logo{
    width:120px;
  }

  #emailHelp{
    display: none;
  }
}

</style>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>Corsec Tactical</title>
  <style type='text/css'>
    html,body {
      height: 100%;
    }

    * {
        -moz-box-sizing: border-box;
    }

    body {
      background-color: #efefef;
      color: #424242;
      margin: 0;
      font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;
      font-size:14px;
      line-height:1.428571429;
    }

    h1,h2,h3,h4,h5,h6,.h1,.h2,.h3,.h4,.h5,.h6{font-family:"HelveticaNeue-Light","Helvetica Neue Light","Helvetica Neue",Helvetica,Arial,"Lucida Grande",sans-serif;font-weight:normal;line-height:1.1;color:#333}h1 small,h2 small,h3 small,h4 small,h5 small,h6 small,.h1 small,.h2 small,.h3 small,.h4 small,.h5 small,.h6 small{font-weight:normal;line-height:1}
    h1,.h1{font-size:45px;line-height:48px}
    h2,.h2{font-size:36px;line-height:42px}
    h3,.h3{font-size:28px;line-height:36px}
    h4,.h4{font-size:24px;line-height:25px}
    h5,.h5{font-size:20px;line-height:24px}
    h6,.h6{font-size:14px;line-height:20px}

    a{color:#FFFFFF;padding-left:5em;}
    a:hover,a:focus{color:#E0E6F8;text-decoration:bold}

    .text-center{text-align:center}

    .wrap {
      min-height: 100%;
      .display: table;
      .height: 100%;
    }

    .top-bar {
      height: 20px;
      background: #000000;
      
    }

    :root .top-bar {
      filter: none \0/IE9;
    }

    .welcome-container {
      width: 500px;
      margin: 0 auto;
      vertical-align: text-top;
      overflow: auto;
      padding-bottom: 60px;
    }

    .coming-soon-wrap {
      margin-top: 90px;
    }

    .frowny-face {
      text-align: center;
      font-size: 130px;
      color: #919191;
      line-height: 1.1;
      margin-top: 90px;
      margin-bottom: 70px;
    }

    .welcome-container h1 {
      margin-bottom: 1em;
    }

    .btn-primary {
        background-color: #7FB141;
        border-color: #648C33;
        color: #FFFFFF;
    }

    input, button, select, textarea {
        font-family: inherit;
        font-size: inherit;
        line-height: inherit;
    }
    button, html input[type="button"], input[type="reset"], input[type="submit"] {
        cursor: pointer;
    }
    button, select {
        text-transform: none;
    }
    button, input {
        line-height: normal;
    }
    button, input, select, textarea {
        font-family: inherit;
        font-size: 100%;
        margin: 0;
    }

    .btn {
        -moz-border-bottom-colors: none;
        -moz-border-left-colors: none;
        -moz-border-right-colors: none;
        -moz-border-top-colors: none;
        border-color: transparent;
        border-image: none;
        border-radius: 0 0 0 0;
        border-style: solid;
        border-width: 0 0 3px;
        cursor: pointer;
        display: inline-block;
        font-size: 14px;
        font-weight: 300;
        line-height: 1.42857;
        margin-bottom: 0;
        padding: 8px 20px;
        text-align: center;
        vertical-align: middle;
        white-space: nowrap;
        text-decoration: none;
    }

    .btn-primary {
        background-color: #7FB141;
        border-color: #648C33;
        color: #FFFFFF;
    }


    .btn-primary:hover,
    .btn-primary:focus,
    .btn-primary:active,
    .btn-primary.active {
        background-color: #729E3A;
        border-color: #496626;
        color: #fff;
    }

    .btn:hover,
    .btn:focus {
        text-decoration: none;
    }

    .login-container {
      text-align: right;
      margin: 20px;
    }

    .footer {
      position: relative;
      margin-top: -60px; /* negative value of footer height */
      height: 60px;
      clear:both;
      text-align: center;
      font-size: 14px;
    }
  </style>
</head>
<body style="text-align:center;">
  <div class="wrap">
    <div class="top-bar">
      <a href="http://www.corsectactical.com">Home</a>
      <a href="http://www.corsectactical.com/courses.html">Courses</a>
      <a href="http://www.corsectactical.com/instructors.html">Instructors</a>
      <a href="http://www.corsectactical.com/register.html">Register</a>
      <a href="http://www.corsectactical.com/contact.html">Contact</a>

    </div>

<?php $name=$_POST['user_name']; ?>
<?php $email=$_POST['user_email']; ?>
<?php $msg=$_POST['user_message']; ?>
<?php $arr=array($name, $email, $msg); ?>
<?php $emailmsg=implode(" /n",$arr); ?>
<?php $arr=array("Web Form Submission from", $name); ?>
<?php $subject=implode(" ",$arr);?>
<?php mail("info@corsectactical.com",$subject,$emailmsg) ?>

Thank you <?php echo $_POST['user_name']; ?>, </br>
Your message has been sent to info@corsectactical.com. Someone from our team will be in touch with you soon. </br>
Regards, </br>
Corsec team</br></br>
</div>

</body>
</html>

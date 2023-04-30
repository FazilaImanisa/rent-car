<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        img{
          width: 100%;
        }
        .login {
          height: 100vh;
          width: 100%;
          /* background:radial-gradient(#343A40, #26282C); */
          position: relative;
        }
        .login_box {
          width: 800px;
          height: 400px;
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%,-50%);
          background: #fff;
          border-radius: 10px;
          box-shadow: 1px 4px 22px -8px #0004;
          display: flex;
          overflow: hidden;
        }
        .login_box .left{
          width: 41%;
          height: 100%;
          padding: 25px 25px;
          
        }
        .login_box .right{
          width: 59%;
          height: 100%  
        }
        .left .top_link a {
            color: #452A5A;
            font-weight: 400;
        }
        .left .top_link{
          height: 20px
        }
        .left .contact{
          display: flex;
            align-items: center;
            justify-content: center;
            align-self: center;
            margin: auto;
        }
        .left h3{
          text-align: center;
          margin: 40px;
        }
        .left input {
            border: none;
            width: 80%;
            margin: 15px 0px;
            border-bottom: 1px solid #4f30677d;
            padding: 7px 9px;
            width: 100%;
            overflow: hidden;
            background: transparent;
            font-weight: 600;
            font-size: 14px;
        }
        .left{
          background: linear-gradient(-45deg, #dcd7e0, #fff);
        }
        .submit {
            border: none;
            padding: 15px 70px;
            border-radius: 8px;
            display: block;
            margin: auto;
            margin-top: 30px;
            background: #343A40;
            color: #fff;
            font-weight: bold;
            -webkit-box-shadow: 0px 9px 15px -11px rgba(88,54,114,1);
            -moz-box-shadow: 0px 9px 15px -11px rgba(88,54,114,1);
            box-shadow: 0px 9px 15px -11px rgba(88,54,114,1);
        }
        .right {
          background: linear-gradient(212.38deg, rgba(52, 58, 64, 0.7) 0%, rgba(114, 119, 123, 0.71) 100%),url(https://st.depositphotos.com/2931363/3931/i/450/depositphotos_39318745-stock-photo-opening-his-new-car-close.jpg);
          color: #fff;
          position: relative;
        }

        .right .right-text{
          height: 100%;
          position: relative;
          transform: translate(0%, 40%);
        }
        .right-text h2{
          display: block;
          width: 100%;
          text-align: center;
          font-size: 50px;
          font-weight: 500;
        }
        .right-text h5{
          display: block;
          width: 100%;
          text-align: center;
          font-size: 19px;
          font-weight: 400;
        }
        .top_link img {
            width: 28px;
            padding-right: 7px;
            margin-top: -3px;
        }
    </style>
</head>
<body>
  <section class="login">
      <div class="login_box">
        <div class="left">
          <div class="contact">
            <form action="login-process.php" method="POST">
              <h3>USER LOG IN</h3>
              <input type="text" name="username" placeholder="USERNAME" required>
              <input type="password" name="password" placeholder="PASSWORD" required>
              <button class="submit" name="login">LOG IN</button>
            </form>
          </div>
        </div>
        <div class="right">
          <div class="right-text">
            <h2>RENT CAR</h2>
            <h5>THE RIDE OF YOUR LIFE</h5>
          </div>
        </div>
      </div>
    </section>
</body>
</html>

<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="LoginPage.aspx.cs" Inherits="example.LoginPage" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>

    </title>
</head>
    <style type="text/css">
        @import "bourbon";
        body {
            background-image:url("C:\Naveen\Desktop Files\Internship Spring\ORGChart\Img\backg.png")
        }
        .wrapper {
            margin-top: 100px;
            margin-bottom: 50px;
        }
        .form-signin {
          max-width: 280px;
          padding: 20px 40px 50px;
          margin: auto;
          background-color: #fff;
          border: 1px solid rgba(0,0,0,0.1);  

  .form-signin-heading, .form-control {
	      position: relative;
	      font-size: 14px;
	      height: 40px;
	      padding: 15px;
		    @include box-sizing(border-box);

		&:focus {
		  z-index: 2;
		}
	}

	input[type="text"] {
	      margin-bottom: -1px;
	      border-bottom-left-radius: 0;
	      border-bottom-right-radius: 0;
	}

	input[type="password"] {
	      margin-bottom: 20px;
	      border-top-left-radius: 0;
	      border-top-right-radius: 0;
	}
}

    </style>
<body>
    <form id="form1" runat="server">
        
          <div class="wrapper">
    <form class="form-signin">       
      <h2 class="form-signin-heading">Please login</h2>
      <input type="text" class="form-control" name="username" placeholder="Employee ID" required="" autofocus="" />
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>   
    </form>
  </div>

    </form>
</body>
</html>

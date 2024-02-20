<!DOCTYPE html>
<html lang="en">
<head>
    <!--<table><tr><td></td></tr></table>-->
<div class="header">
  <!--<h1>Header</h1>
  <p>My supercool header</p>-->
  <img class="header-img" src="img/NIHLogo.png" alt="Description">
</div>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
        }
        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        img {
          width: 100%;
          height: auto;
        }
        .header {
            /*display: flex;
            flex-direction: column;
            align-items: center; Centers content horizontally*/
            height: 44px;
            padding: 20px;
            text-align: left;
            background: #2596be;
            color: white;
            font-size: 30px;
        }

        .header-img{
            height:auto;
            width:300px;           
            display: inline-block; /* Display image as inline-block to align it with text */
    margin-right: auto; /* Auto margin right to push image to the left */
    margin-left: auto; /* Auto margin left to center-align the image */
        }

         /* Style for the footer */
  footer {
    text-align: center; /* Center-aligning the content */
    background-color: #f2f2f2; /* Background color for better visibility */
    padding: 20px; /* Adding some padding for spacing */
  }

  /* Style for the buttons */
  footer button {
    margin: 5px; /* Adding margin between buttons */
    padding: 10px 20px; /* Adding padding to buttons */
    background-color: #4CAF50; /* Green background color */
    border: none; /* Removing border */
    color: white; /* Text color */
    text-align: center; /* Center-aligning the text */
    text-decoration: none; /* Removing underlines from links */
    display: inline-block; /* Display as inline-block to respect padding and margin */
    font-size: 16px; /* Font size */
    cursor: pointer; /* Cursor style */
    border-radius: 5px; /* Adding border radius */
  }

  /* Style for button hover effect */
  footer button:hover {
    background-color: #45a049; /* Darker green color on hover */
  }

  .warning-header {
    color: #950000;
    text-transform: uppercase;
    font-size: 14px;
    font-weight: 500;
    text-align: left;
}

  .warning-text {
    margin-top: 12px;
    font-size: 14px;
    line-height: 24px;
    color: #535353;
  }

  .external-login-button {
    -webkit-box-align: center;
    align-items: center;
    background-color: #FFFFFF;
    border-radius: 4px;
    border: 2px solid #D7DCE3;
    color: #535353;
    cursor: pointer;
    display: -webkit-box;
    display: flex;
    font-weight: 500;
    line-height: 100%;
    height: 60px;
    -webkit-box-pack: center;
    justify-content: center;
    margin-right: 22px;
    margin-top: 22px;
    min-width: 156px;
    padding: 12px 20px;
    width: 168px
}
.external-login-button>img {
    margin-right: 8px;
    height: 24px
}

.external-login-button,.external-login-button:hover {
    text-decoration: none
}

.external-login-button:hover {
    text-decoration: none;
    background-color: #F4F5F7;
    color: #535353
}

@media (max-width: 767.98px) {
    .external-login-button {
        width:calc(50% - 22px)
    }
}

@media (max-width: 575.98px) {
    .external-login-button {
        width:100%;
        margin-right: 0
    }
}

.d-flex {
    display: -webkit-box !important;
    display: flex !important
}

.flex-wrap {
    flex-wrap: wrap !important
}

.align-content-between {
    align-content: space-between !important
}


    </style>
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <form action="login_process.php" method="post">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="Login">
        </form>
    </div>

    <div class="d-flex flex-wrap align-content-between external-login-container">
	
	<a href="javascript:ResearchOrgs()" class="external-login-button">
		<img alt="" src="img/Icon_ResearchOrg.svg">
		Research Organization
	</a>
	
	<a href="javascript:submitSocialLogin(1)" class="external-login-button">
		<img alt="" src="img/Icon_LoginGov.svg">
		Login.gov
	</a>
	
	<a href="javascript:submitSocialLogin(2)" class="external-login-button">
		<img alt="" src="img/Logo_HHS.svg">
		HHS AMS
	</a>
	
	<a href="javascript:submitSocialLogin(3)" class="external-login-button">
		<img alt="" src="img/Icon_Google.svg">
		Google
	</a>		
	
	<a href="javascript:submitSocialLogin(4)" class="external-login-button">
		<img alt="" src="img/Icon_Microsoft.svg">
		Microsoft
	</a>	
	
	<a href="javascript:submitSocialLogin(6)" class="external-login-button">
		<img alt="" src="img/Icon_PayPAl.svg">
		PayPal
	</a>

</div>

   <!-- <footer>
  <button>Button 1</button>
  <button>Button 2</button>
  <button>Button 3</button>
  <button>Button 4</button>
  <button>Button 5</button>
</footer>-->
<div class="col-xl-10 offset-xl-1">
<h2 class="warning-header">WARNING NOTICE:</h2>
<p class="warning-text">For public facing web pages to which the public has privileged access, e.g., clinical trial or adverse effects systems where users/patients are logging in to enter PII/PHI: You are accessing a U.S. Government web site which may contain information that must be protected under the U.S. Privacy Act or other sensitive information and is intended for Government authorized use only. Unauthorized attempts to upload information, change information, or use of this web site may result in disciplinary action, civil, and/or criminal penalties. Unauthorized users of this web site should have no expectation of privacy regarding any communications or data processed by this web site. Anyone accessing this web site expressly consents to monitoring of their actions and all communication or data transitioning or stored on or related to this web site and is advised that if such monitoring reveals possible evidence of criminal activity, NIH may provide that evidence to law enforcement officials.</p><p class="warning-text"><a href="https://www.nih.gov/web-policies-notices">NIH Web Policies and Notices</a></p>
<p class="warning-text"><a href="https://authdev.nih.gov/CertAuthV3/forms/help/nihloginprivacypolicies.html">NIH Login Service Privacy Policy</a></p>
<p class="warning-text"><a href="https://www.hhs.gov/vulnerability-disclosure-policy/index.html">HHS Vulnerability Disclosure</a></p>
</div>
</body>
</html>
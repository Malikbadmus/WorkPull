   <!DOCTYPE HTML>
    <html>
    <head>
		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Job Seeker Registration</title>
         <script type="text/javascript">
             function checkForm() {

// Fetching values from all input fields and storing them in variables.
var email = document.getElementById("emailerror").value;
var pass1 = document.getElementById("passerror").value;
var pass2 = document.getElementById("passerror2").value;
var name = document.getElementById("nameerror").value;
var mobno = document.getElementById("mobnoerror").value;
var skills = document.getElementById("skillerror").value;
//Check input Fields Should not be blanks.
var p1=document.getElementById("passnew").value;
var p2=document.getElementById("passconf").value;
    if (p1 != p2) {
        document.getElementById("passerror2").value="Password Donot Match" ;
    }
    else
    {
        document.getElementById("passerror2").value="" ;

    }

if(email == '' && pass1 == '' && pass2 == '' &&  name == "" && mobno == '' && skills =='') {
    //document.getElementById("reguser").submit();
                     return true;
}
else {
alert("Fill in with correct information");
                     return false;

}
        }

 
 </script>
    </head>
    <body>
        
        <nav class="navbar" id="insidenav">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="../index.php">Job Portal</a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Jobseeker Registraation</a></li>

               </ul>
                <ul class="nav navbar-nav navbar-right">
                    
               </ul>
             </div>
         </nav>

<div class="container">

    <div class="container">
        <div class="jumbotron">
            <h1>Register & find Jobs</h1>
            <p>
                Helps passive and active jobseekers find better jobs. Get connected with over 45000 recruiters.<br/>
                Apply to jobs in just one click. Apply to thousands of jobs posted daily.
            </p>
        </div>

    <FORM id="reguser"  METHOD="post" ACTION="process_user.php" enctype="multipart/form-data" class="form-horizontal">
    <h3 class="h3style"> Your Login Detials </h3>
    

   <div class="form-group">
    <label for="useremail" class="control-label col-sm-2">Enter your Email ID:</label>
    <div class="col-sm-4">
        <input type="email" id="useremail" name="useremail" placeholder="Your E-mail" class="form-control" required onblur="validateEmail(this)">
    </div>
    <div class="col-sm-6">
        <span id="emailerror" class="error"></span>
    </div>
</div>

   <div class="form-group">
    <label for="passnew" class="control-label col-sm-2">Create new Password:</label>
    <div class="col-sm-4">
        <input type="password" id="passnew" name="pass1" placeholder="New Password" class="form-control" required onblur="validatePassword(this)">
    </div>
    <div class="col-sm-6">
        <span id="passerror" class="error"></span>
    </div>
</div>

<div class="form-group">
    <label for="passconf" class="control-label col-sm-2">Confirm Password:</label>
    <div class="col-sm-4">
        <input type="password" id="passconf" name="pass2" placeholder="Confirm Password" class="form-control" required onblur="validateConfirmPassword(this)">
    </div>
    <div class="col-sm-6">
        <span id="passerror2" class="error"></span>
    </div>
</div>

<script type = "text/javascript">
function validatePassword(input) {
    const password = input.value;
    const passwordError = document.getElementById("passerror");

    if (!password) {
        passwordError.textContent = "Password is required.";
    } else if (password.length < 8) {
        passwordError.textContent = "Password must be at least 8 characters long.";
    } else {
        passwordError.textContent = ""; // Clear the error message when the password is valid.
    }
}

function validateConfirmPassword(input) {
    const confirmPassword = input.value;
    const password = document.getElementById("passnew").value;
    const passwordError2 = document.getElementById("passerror2");

    if (!confirmPassword) {
        passwordError2.textContent = "Please confirm your password.";
    } else if (confirmPassword !== password) {
        passwordError2.textContent = "Passwords do not match.";
    } else {
        passwordError2.textContent = ""; // Clear the error message when passwords match.
    }
}
</script>

    <div class="page-header"></div>
    <h3 class="h3style">Your Contact Information</h3>
    


   <div class="form-group">
        <label class="control-label col-sm-3" for="name">Mention your Full Name:</label>
                <div class="col-sm-4">
                    <input type="text" id="name" placeholder="Your Name" name="uname" class="form-control" 
                    required onblur="validateUsername(this)"> 
                </div>
         <label id="nameerror" class="error"></label>
    </div>

<div class="form-group">
    <label for="location" class="control-label col-sm-3">Where are you currently located?</label>
    <div class="col-sm-7">
        <div class="form-inline" id="location">
            <select name="country" class="form-control countries" id="countryId" style="width:145px;" required>
                <option value="Nigeria">Nigeria</option>
				
            </select>
            <select name="state" class="form-control states" id="stateId" style="width:145px;" required>
                <option value="Lagos State">Lagos state</option>
            </select>
            <select name="city" class="form-control cities" id="cityId" style="width:145px;">
                <option value="Lagos">Lagos</option>
            </select>
        </div>
    </div>
</div>



 <div class="form-group">
     <label class="control-label col-sm-3" for="mobno">Enter your Mobile number:</label>
                 <div class="col-sm-3"><input type="text" name="mobno" placeholder=" Mobile number" class="form-control" id="mobno" 
                    required onblur="validateMobilenum(this)">
                 </div>
                  <label id="mobnoerror" class="error"></label>
      </div>

<div class="page-header"></div>    
<h3 class="h3style"> Your Current Employment Details </h3> 


<div class="form-group"> 
    <label for="experience" class="control-label col-sm-4"> How much work experience do you have:</label>
        <div class="col-sm-4">
            <select name="experience" class="form-control" id="experience" required>
                <option value="">select </option>
                <option value="1">1 year </option>
                <option value="2">2 year </option>
                <option value="3">3 year </option>
                <option value="4">4 year </option>
                <option value="5">5 year </option>
                <option value="6">6 year </option>
                <option value="7">7 year </option>
                <option value="8">8 year </option>
                <option value="9+">9+ year </option>
         </select>
    </div>
</div>

<div class="form-group"> 
    <label class="control-label col-sm-4" for="skills"> What are your Key Skills:</label>
        <div class="col-sm-4"><input type="text" name="skills" placeholder="skills" class="form-control" name="skills" id="skills"
                                     required onblur="validatetext(this)">
        </div>
        <label id="skillerror" class="error"></label>
</div>


<div class="page-header"></div>
<h3 class="h3style"> Your Educational Qualifications </h3>


<div class="form-group"> 
    <label class="control-label col-sm-2" for="ugcourse"> Your Basic Education: </label>
     <div class="col-sm-4"> <select name="ugcourse" id="ugcourse" class=" form-control" required>
                <option value="" label="Select">Select</option>
                <option value="Not Pursuing Graduation"> Not Pursuing Graduation</option>
                <option value="B.A">B.A</option>
                <option value="B.Arch">B.Arch</option>
                <option value="BCA">BCA</option>
                <option value="B.B.A">B.B.A</option>
                <option value="B.Com">B.Com</option>
                <option value="B.Ed">B.Ed</option>
                <option value="BDS">BDS</option>
                <option value="BHM">BHM</option>
                <option value="B.Pharma">B.Pharma</option>
                <option value="B.Sc">B.Sc</option>
                <option value="B.Tech/B.E.">B.Tech/B.E.</option>
                <option value="LLB">LLB</option>
                <option value="MBBS">MBBS</option>
                <option value="Diploma">Diploma</option>
                <option value="BVSC">BVSC</option>
                <option value="Other">Other</option>
                </select>
        </div>
 </div>
 <div class="form-group"> 
    <label class="control-label col-sm-2" for="pgcourse"> Your Masters Education:</label>
        <div class="col-sm-4"> <select name="pgcourse" id="pgcourse"  class="form-control" required>
                                <option value="">Select</option>
                                <option value="Not Pursuing Post Graduation"> Not Post Pursuing Graduation</option>
                                <option value="CA">CA</option>
                                <option value="CS">CS</option>
                                <option value="ICWA (CMA)">ICWA (CMA)</option>
                                <option value="Integrated PG">Integrated PG</option>
                                <option value="LLM">LLM</option>
                                <option value="M.A">M.A</option>
                                <option value="M.Arch">M.Arch</option>
                                <option value="M.Com">M.Com</option>
                                <option value="M.Ed">M.Ed</option>
                                <option value="M.Pharma">M.Pharma</option>
                                <option value="M.Sc">M.Sc</option>
                                <option value="M.Tech">M.Tech</option>
                                <option value="MBA/PGDM">MBA/PGDM</option>
                                <option value="MCA">MCA</option>
                                <option value="MS">MS</option>
                                <option value="PG Diploma">PG Diploma</option>
                                <option value="MVSC">MVSC</option>
                                <option value="MCM">MCM</option>
                                <option value="Other">Other</option>
                            </select>
          </div>
</div>

<div class="page-header"> </div>

        <div class="form-group form-inline col-sm-10">

        <button class="btn btn-success" type="submit"  id="reg" value="submit">Register</button>
        <label class="col-sm-2"></label>
        <button class="btn btn-danger" type="reset" id="reset"> Reset </button>

</div>

    </form>
        <link rel="stylesheet" href="../bootstrap/dist/css/bootstrap.min.css">
        <link href="../css/main.css" rel="stylesheet">
        <link href="../css/jobseeker.css" rel="stylesheet">
        <script type="text/javascript" src="../js/validate.js"></script>
	 
    <script src="../js/jquery-1.12.0.min.js"></script>
    <script src="../js/bootstrap.min.js"></script> 
		
    </body>
    </html>

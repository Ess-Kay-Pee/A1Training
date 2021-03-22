<!DOCTYPE html>

<html>

  <head>
    <!--Specifying base url because of url rewriting-->
    <base href="/a1training/">

    <meta charset="UTF-8">

    <title>title</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Best IT Training Institute. We coach job seekers, IT professionals, CBSE and Engineering students in Web Development,Digital Marketing, Python, AI, ML, Data science, etc">
    <meta name="keyword" content="Python, Data Science, ML, AI, IOT, Web Development, PHP5, PHP7, Angular7/8, Javascript, ES6, ES7,
    jQuery, ASP.NET, Digital Marketing, Interview Questions and Answers, Free E-Books, SAP, C and C++, Andriod,
    IOS, React Native, React.js, Node.js, Selenium, Manual Testing">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- ALL CSS FILES -->
    <link href="css/materialize.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="css/style-mob.css" rel="stylesheet" />
<style>
.callout {
  position: fixed;
  bottom: 35px;
  right: 20px;
  margin-left: 20px;
  max-width: 300px;
  z-index: 99;
}

.callout-header {
  padding: 25px 15px;
  background: #337ab7;
  font-size: 30px;
  color: white;
}

.callout-container {
  padding: 15px;
  background-color: #ccc;
  color: black
}

.closebtn {
  position: absolute;
  top: 5px;
  right: 15px;
  color: white;
  font-size: 30px;
  cursor: pointer;
}

.closebtn:hover {
  color: lightgrey;
}
</style>
  </head>

  <body>

  <div class="col-md-4">
                    <!--<div class="ho-ex-title">
                            <h4>Upcoming Event</h4>
                        </div>-->
                    <div class="ho-ev-latest ho-ev-latest-bg-3">
                        <div class="ho-lat-ev">
                            <h4 align="center">Register</h4>
               
                        </div>
                    </div>
                    <div class="ho-st-login">
                        <ul class="tabs tabs-hom-reg">
                            <li class="tab col s6"><a href="#hom-vijay">Work As a <br>Trainer</a>
                            </li>
                            <li class="tab col s6"><a href="#hom_log">Book for demo <br>Class</a>
                            </li>
                        </ul>
                        <div id="hom-vijay" class="col s12">
                            <form name="myForm" class="col s12" autocomplete="off"  onsubmit="return validateForm()">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="text" pattern="^[a-z\d\.]{5,}$" title="only Alphabets and minimum 5 letters" class="validate"  name="fname" placeholder="Your Name">
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="text" class="validate" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="type valid email" name="fname" placeholder="Email Id">
                                       
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="number" class="validate"  pattern="[0-9]{10}" title="type valid number" title="Three letter country code" name="fname" placeholder="Contact No">
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <!--<input type="text" class="validate autocomplete"id="myInput">
                                        <label>Enter Your Skill</label>-->
                                        <input list="skill" name="browser" name="fname" placeholder="Select Your Skill">
  <datalist id="skill">
    <option value="core java trainer">
    <option value="advanced java trainer">
    <option value="Android trainer">
    <option value="IOS trainer">
    <option value="Web designing trainer">
    <option value="UI Development trainer">
    <option value="Web Development trainer">
    <option value="PHP trainer">
     <option value="Python trainer">
    <option value="Manual Testing trainer">
    <option value="Automation Testing trainer">
    <option value="Selenium trainer">
    <option value="machine learning trainer">
    <option value="selenium and python trainer">
    <option value="angular trainer">
    <option value="nodejs trainer">
        <option value="reactjs trainer">
    <option value="full stack trainer">
    <option value="mean stack trainer">
    <option value="data science trainer">
    <option value="dot net trainer">
    <option value="excel and advance excel trainer">
    <option value="digital-marketing trainer">
    <option value="SAP trainer">
     <option value="Oracle trainer">
    <option value="MySql trainer">
    <option value="SQL trainer">
    <option value="Graphic Designer trainer">
    <option value="Photoshop trainer">
    <option value="React Native trainer">
    <option value="Aptitude trainer">
    <option value="C/C++ trainer">
  </datalist>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                    <input list="mode" name="browser" name="fname" placeholder="Select Mode of Training">
  <datalist id="mode">
    <option value="Part Time">
    <option value="Full Time">
    <option value="Freelancer">
  </datalist>
                                     
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="number" class="validate"  pattern="[0-9]{2}" title="Enter valid year of experience" name="fname" placeholder="Total years of experience">
                                        
                                    </div>
                                </div>
                                 <input type="file" class="input-field col s12" style="height:25px; padding-left:0px;">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="submit" value="Register" id="reg" class="waves-effect waves-light light-btn">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="hom_log" class="col s12">
                                                    <form name="myForm" class="col s12" autocomplete="off" onsubmit="return validateForm()">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="text" class="validate" name="fname" pattern="^[a-z\d\.]{5,}$"  title="only Alphabets and minimum 5 letters" placeholder="Your Name">
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="text" class="validate" name="fname" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="type valid email" placeholder="Email Id">
                                       
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="number" class="validate"  pattern="[0-9]{10}" title="enter valid number" name="fname" placeholder="Contact No">
                                        
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <!--<input type="text" class="validate autocomplete"id="myInput">
                                        <label>Enter Your Skill</label>-->
                                        <input list="course" name="browser" name="fname" placeholder="Select Course">
  <datalist id="course">
    <option value="core java">
    <option value="advanced java">
    <option value="Android">
    <option value="IOS">
    <option value="Web designing">
    <option value="UI Development">
    <option value="Web Development">
    <option value="PHP">
     <option value="Python">
    <option value="Manual Testing">
    <option value="Automation Testing">
    <option value="Selenium">
    <option value="machine learning">
    <option value="selenium and python">
    <option value="angular">
    <option value="nodejs">
        <option value="reactjs">
    <option value="full stack">
    <option value="mean stack">
    <option value="data science">
    <option value="dot net">
    <option value="excel and advance excel">
    <option value="digital-marketing">
    <option value="SAP">
     <option value="Oracle">
    <option value="MySql">
    <option value="SQL">
    <option value="Graphic Designing">
    <option value="Photoshop">
    <option value="React Native">
    <option value="Aptitude">
    <option value="C/C++">
  </datalist>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                    <input list="class_mode" name="browser" name="fname" placeholder="Select Mode of Training">
  <datalist id="class_mode">
    <option value="Weekend(Online)">
    <option value="Weekdays(Online)">
    <option value="Weekend(Offline)">
    <option value="Weekdays(Offline)">
  </datalist>
                                     
                                    </div>
                                </div>
                        
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input type="submit" value="Register" class="waves-effect waves-light dark-btn">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	    <!-- Roadmaps MORE -->
    <script src="myscript.js"></script>
  </body>

</html>
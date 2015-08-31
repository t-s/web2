<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Submit an Idea</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/chosen/chosen.css" rel="stylesheet">
    <link href="css/plugins/colorpicker/bootstrap-colorpicker.min.css" rel="stylesheet">
    <link href="css/plugins/cropper/cropper.min.css" rel="stylesheet">
    <link href="css/plugins/switchery/switchery.css" rel="stylesheet">
    <link href="css/plugins/jasny/jasny-bootstrap.min.css" rel="stylesheet">
    <link href="css/plugins/nouslider/jquery.nouislider.css" rel="stylesheet">
    <link href="css/plugins/datapicker/datepicker3.css" rel="stylesheet">
    <link href="css/plugins/ionRangeSlider/ion.rangeSlider.css" rel="stylesheet">
    <link href="css/plugins/ionRangeSlider/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
    <link href="css/plugins/clockpicker/clockpicker.css" rel="stylesheet">
    <link href="css/plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

    <script>

    function describe_form() {

      var idea_desc = $('#idea_desc').val();
      var idea_more = $('#idea_more').val();
      var perspective = $('#perspective').val();
      var url = $('#url').val();

      var serialData = $('#describe_form').serialize();

      $.ajax({
        url: './submit_to_ideas.php',
        type: 'POST',
        data: serialData,
        success: function(data) {
          alert(data);
        }
  
      });
    

    }

       
    </script>

</head>

<body>
<!--
    <div id="wrapper">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Welcome.</span>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a7.jpg">
                                </a>
                                <div class="media-body">
                                    <small class="pull-right">46h ago</small>
                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a4.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right text-navy">5h ago</small>
                                    <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                <a href="profile.html" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/profile.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">23h ago</small>
                                    <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="mailbox.html">
                                    <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="mailbox.html">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="profile.html">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="grid_options.html">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="text-center link-block">
                                <a href="notifications.html">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>


                <li>
                    <a href="login.html">
                        <i class="fa fa-sign-out"></i> Log out
                    </a>
                </li>
            </ul>

        </nav>
        </div>-->
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h1>Describe the idea</h1>
                        </div>
                        <div class="ibox-content">
                          <!--  <form method="get" class="form-horizontal"> -->
                                <form class="form-horizontal" method="post" id="describe_form" action="submit_to_ideas.php">
                               <!-- <div class="form-group"><label class="col-sm-2 control-label">Problem Summary<h6>This is the only required field.</h6></label>
                                    <div class="col-sm-10"><input type="text" class="form-control input-sm" rows="5" name="prob_desc" required> <span class="help-block m-b-none">Limit 500 characters.</span>
                                    </div>
                                </div>-->


                                 <div class="form-group">
                                     <label class="col-sm-2 control-label">Idea Summary<h6>This is the only required field.</h6>

                                    <a onmouseover="nhpup.popup('Hint: Try to write as clearly as possible in order to maximize understanding across the widest possible audience.');"><img src="img2/help.png"></a></label>
                                        <div class="col-sm-10">
                                        <textarea class="form-control input-sm" rows="5" minlength="10" maxlength="500" id="prob_desc" name="prob_desc" required> </textarea>
                                        <span class="help-block m-b-none">Limit 500 characters.</span>
                                        </div>
                                        </div>
<!--    
                                <div class="form-group"><label class="col-sm-2 control-label">Additional Problem Information</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="prob_more"> <span class="help-block m-b-none"></span>
                                    </div>
                                </div>-->
                                <div class="form-group">
                                     <label class="col-sm-2 control-label">Additional Idea Information</label>
                                        <div class="col-sm-10">
                                        <textarea class="form-control input-sm" rows="5" maxlength="1500" name="prob_more" id="prob_more"> </textarea>
                                        <span class="help-block m-b-none"></span>
                                        </div>
                                        </div>
                                        

                               <!-- <div class="form-group"><label class="col-sm-2 control-label">Perspective</label>
                                    <div class="col-sm-10"><input type="text" class="form-control" name="prob_more"> <span class="help-block m-b-none">Provide a little background about yourself, how you came to know about this problem, and what your standpoint is.</span>
                                    </div>
                                </div>-->

                                <div class="form-group">
                                     <label class="col-sm-2 control-label">Perspective</label>
                                        <div class="col-sm-10">
                                        <textarea class="form-control input-sm" rows="1" maxlength="1500" name="perspective" id="perspective"> </textarea>
                                        <span class="help-block m-b-none">Provide a little background about yourself, how you came to know about this problem, and what your standpoint is.</span>
                                        </div>
                                        </div>
                                <div class="form-group"><label class="col-sm-2 control-label">Upload Link</label>
                                    <div class="col-sm-10"><input type="url" placeholder="http://" class="form-control" name="url" id="url"> <span class="help-block m-b-none">Have an image, video, or article that helps describe the idea?</span>
                                    </div>
                                </div>
                                <div>
                                <!---
        
                Look, it's AJAX!


                                -->
                                        <button onclick="describe_form();" class="btn btn-sm btn-primary m-t-n-xs" type="button"><strong>Submit</strong></button>
                                    </div>
                                </form>
            <div class="row">
                <div class="col-lg-12">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                        </div>
                        <div class="ibox-content">
                            <h1>What</h1>
                            <form class="form-horizontal" method="post" id="what_form" action="submit_to_ideas.php">
                                </div>
                                    <div class="container">
                                        <div class="row">
                                          <div class="col-sm-6 col-sm-6">
                                            <div class="form-group"><h4>Select a primary category:</h4></div>
                                        <div class="i-checks"><label> <input type="radio" value="option1" name="a"> <i></i> Environment</label></div>
                                        <div class="i-checks"><label> <input type="radio" value="option2" name="a"> <i></i> Society</label></div>
                                        <div class="i-checks"><label> <input type="radio" value="option3" name="a"> <i></i> Technology</label></div>
                                        <div class="i-checks"><label> <input type="radio" value="option4" name="a"> <i></i> Government</label></div>
                                        <div class="i-checks"><label> <input type="radio" value="option5" name="a"> <i></i> Health</label></div>
                                        <div class="i-checks"><label> <input type="radio" value="option6" name="a"> <i></i> Education</label></div>
                                        <div class="i-checks"><label> <input type="radio" value="option7" name="a"> <i></i> Infrastructure </label></div>
                                </div>
                                <div class="col-sm-6 col-sm-6">
                                    <div class="form-group"><h4>Select secondary categories (if applicable):</h4></div>
                                        <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i> Environment</label></div>
                                        <div class="i-checks"><label> <input type="checkbox" value="option2" name="a"> <i></i> Society</label></div>
                                        <div class="i-checks"><label> <input type="checkbox" value="option3" name="a"> <i></i> Technology</label></div>
                                        <div class="i-checks"><label> <input type="checkbox" value="option4" name="a"> <i></i> Government</label></div>
                                        <div class="i-checks"><label> <input type="checkbox" value="option5" name="a"> <i></i> Health</label></div>
                                        <div class="i-checks"><label> <input type="checkbox" value="option6" name="a"> <i></i> Education</label></div>
                                        <div class="i-checks"><label> <input type="checkbox" value="option7" name="a"> <i></i> Infrastructure </label></div>
                                </div>
                                </div> 
                                <div class="hr-line-dashed"></div>
                                    </div>
                                    <div class="row">
                                       <div class="col-sm-10">
                                <div class="form-group"><h4>Tags</h4>
                                    <input type="text" name="tags" placeholder="e.g., schools, mathematics, algebra" maxlength="500" class="form-control"> <span class="help-block m-b-none">Separate by commas.</span>
                                    </div>
                                </div>
                                <button onclick="what_form();" class="btn btn-sm btn-primary m-t-n-xs" type="button"><strong>Submit</strong></button>
                                </div>
                                   </form>


                                   
                                   <!--
                                <div class="hr-line-dashed"></div>

                                        <div class="form-group"><label class="col-sm-2 control-label">Types of problems<br></label>
                                            <div class="col-sm-10">
                                        <div class="i-checks"><label> <input type="radio" disabled="" checked="" value="option1"> <i></i>There is too little of...</label></div>
                                        <div class="i-checks"><label> <input type="radio" disabled="" checked="" value="option2"> <i></i>There is too much of...</label></div>
                                        <div class="i-checks"><label> <input type="radio" disabled="" checked="" value="option3"> <i></i>There is a waste of...</label></div>
                                        <div class="i-checks"><label> <input type="radio" disabled="" checked="" value="option4"> <i></i>We should improve upon...</label></div>-->
                                        <!-- problem relationships?-->
<!-- ___.  This leads to _____.  -->

                                    </div>
                                </div>

                                    </div>
                                </div>
                                    </div>
                                </div>
                                    </div>
                                <!-- WHO WHAT WHEN WHERE WHY HOW PAST FUTURE PRESENT-->
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>Who</h1>
                            <h4>Who is affected by this problem?</h4>
                         <!--   <div class="row">
                        <div class="col-lg-7">-->
                 <p>
                            <h5>There are over 7 billion people in the world.  For information on the world's population check out the following:</h5>
                            
                                <ul>
                                    <li><a href="http://www.census.gov/popclock/">World Population Clock</a></li>
                                    <li><a href="https://www.cia.gov/library/publications/the-world-factbook/">CIA World Factbook</a></li>

                                </ul>  
                            </p>
                        </div> 
                        </div>
                                        <form method="get" class="form-horizontal">
                                
                                <div class="form-group"><h4>Describe the group of people affected by the problem.</h4>
                                    <div class="col-sm-10"><input type="text" class="form-control input-lg" placeholder="e.g., children attending public school in Pennsylvania"> <span class="help-block m-b-none"></span>
                                    </div>
                                </div>
                        <div class="row">
                     <div class="col-sm-10">
                            <form class="form-horizontal m-t-md" action="#">
                                <div class="form-group">
                                    <h4>Estimate the number of people directly affected by this problem.</h4>
                                    <div class="col-sm-5">
                                        <div class="input-group">
                                        <input type="text" class="form-control" placeholder="e.g., 7,290,000,000" name="people_num" maxlength="14">
                                        <span class="input-group-btn"> <button type="submit" class="btn btn-primary">Submit
                                        </button></span> 
                                    </div>

                                        <span class="help-block m-b-none">Number must be between 1 and 7.5 billion</span>

                                
                            </div>
                            </div>
                              <!--  <div>
                                 <button class="btn btn-sm btn-primary m-t-n-xs" type="submit"><strong>Submit</strong></button>
                            </div>-->
                            </form>
                      
                    </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    
                                
                            

                                <!--    <div class="form-group"><p>Check the box below if over 1 billion people are directly affected by this problem.</p>
                                        <div class="i-checks"><label> <input type="checkbox" value="option1" name="a"> <i></i>Over 1 billion people</label></div>
                                </div>
                                </div>
                    <div class="row ibox-content">
                        <div class="col-sm-9">
                        
                            <p>
                            If fewer than 1 billion people are affected, use the slidebar and dropdown menu to enter an estimate of the number of people directly impacted by this problem.  
                            </p>
                            <div id="ionrange_1"></div>
                </div>
            
                            <div class="col-sm-3">
                            
                            <div class="form-group"><h4>Select the magnitude</h4>
                            <label class="font-noraml"></label>
                            <div class="input-group">
                            <select data-placeholder="Select the magnitude" class="chosen-select" style="width:150px;" tabindex="2">
                            <option value="people">people</option>
                            <option value="thousand people">thousand people</option>
                            <option value="=million people">million people</option>
                             </select>
                            </div>
                            </div>
                            </div>-->
                            
                               
                        
                        <div class="row">
                            
                                    <div class="col-sm-8">
                                        <h4>Add Note</h4>
                                        <div class="input-group">
                                        <input type="text" class="form-control" placeholder="" name="people_num" maxlength="1500">
                                        <span class="input-group-btn"> <button type="submit" class="btn btn-primary">Add
                                        </button></span> 
                                    </div>

                                    </div>
                                </div>
                            </div>
                    </div>
                   
            
       <!-- <div class="wrapper wrapper-content"> -->   
            <div class="row">
            <div class="col-lg-12">


                <div class="ibox float-e-margins">
                 
<!--                    <h5>Chosen select <small>http://harvesthq.github.io/chosen/</small></h5>-->
                    
                </div>
                <div class="ibox-content">
               <form method="get" class="form-horizontal">
                                <div class="form-group">
                 <h1>Where</h1>                   
                <label class="font-normal">Are certain geographic areas affected?</label>
                <div class="input-group">
                <select data-placeholder="Choose a continent..." class="chosen-select" multiple style="width:350px;" tabindex="4">
                <option value="">Select</option>
                <option value="North America">North America</option>
                <option value="South America">South America</option>
                <option value="Europe">Europe</option>
                <option value="Africa">Africa</option>
                <option value="Middle East">Middle East</option>
                <option value="Asia">Asia</option>
                <option value="Australia">Australia</option>
                <option value="Antarctica">Antarctica</option>
                </select>
                </div>
                </div>

               <form method="get" class="form-horizontal">
                                <div class="form-group">
                <div class="input-group">
                <select data-placeholder="Choose a country..." class="chosen-select" multiple style="width:350px;" tabindex="4">
                <option value="">Select</option>
                <option value="United States">United States</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="Afghanistan">Afghanistan</option>
                <option value="Aland Islands">Aland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
                <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote D'ivoire">Cote D'ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Curacao">Curacao</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-bissau">Guinea-bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                <option value="Korea, Republic of">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libya">Libya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macao">Macao</option>
                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                <option value="Moldova, Republic of">Moldova, Republic of</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Barthelemy">Saint Barthelemy</option>
                <option value="Saint Helena, Ascension and Tristan da Cunha">Saint Helena, Ascension and Tristan da Cunha</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Martin (French part)">Saint Martin (French part)</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Sint Maarten (Dutch part)">Sint Maarten (Dutch part)</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                <option value="South Sudan">South Sudan</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Timor-leste">Timor-leste</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela, Bolivarian Republic of">Venezuela, Bolivarian Republic of</option>
                <option value="Viet Nam">Viet Nam</option>
                <option value="Virgin Islands, British">Virgin Islands, British</option>
                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
                </select>
                </div>

                    <form method="get" class="form-horizontal">
                                <div class="col-sm-8">
                                <div class="form-group"><h4>Enter a specific area</h4>
                                    <input type="text" class="form-control input-sm" placeholder="e.g., Los Angeles, California" maxlength="250"> <span class="help-block m-b-none"></span>
                                    </div>
                                </div>
                  </div>
                                <div class="row">
                            
                                    <div class="col-sm-8">
                                        <h4>Add Note</h4>
                                        <div class="input-group">
                                        <input type="text" class="form-control" placeholder="" name="people_num" maxlength="1500">
                                        <span class="input-group-btn"> <button type="submit" class="btn btn-primary">Add
                                        </button></span> 
                                    </div>

                                    </div>
                                </div>


                </div>

            </div>
                        
   

                <div class="ibox-content">
                    <div class="row">
            <div class="col-lg-12">
               <form method="get" class="form-horizontal">
                                <div class="form-group">
                 <h1>When</h1>                   
                <label class="font-normal">When did the problem arise?  How has the problem changed throughout time?  What do you anticipate the probelm will be like in the future?</label>
                <div class="input-group">
            <p>
                <ul>
                    <li></li>

                </ul></p>
                </div>
                </div>

               <form method="get" class="form-horizontal">
                                <div class="form-group">
              
                    <form method="get" class="form-horizontal">
                                <div class="col-sm-8">
                                <div class="form-group"><h4>Enter a specific area.</h4>
                                    <input type="text" class="form-control input-sm" placeholder="e.g., Los Angeles, California" maxlength="250"> <span class="help-block m-b-none"></span>
                                    </div>maxlength="1500"
                                </div>
                  </div>
                </div>
                </div>
                <div class="row">
                            
                                    <div class="col-sm-8">
                                        <h4>Add Note</h4>
                                        <div class="input-group">
                                        <input type="text" class="form-control" placeholder="" name="people_num" maxlength="1500">
                                        <span class="input-group-btn"> <button type="submit" class="btn btn-primary">Add
                                        </button></span> 
                                    </div>

                                    </div>
                                </div>

                </div>

                <div class="ibox-content">
                    <div class="row">
            <div class="col-lg-12">
               <form method="get" class="form-horizontal">
                                <div class="form-group">
                 <h1>Why</h1>                   
                
                <div class="input-group">
            
                                <div class="form-group">
                                    <label class="font-normal">Enter a list of factors that influence the problem.</label>
                                    <input type="text" placeholder="e.g., public awareness, funding, level of expertise" class="form-control" maxlength="1200"> <span class="help-block m-b-none">Separate by commas.</span>
                                    </div>
                                </div>
                                </div>
                                </div>
                  

            </div>
            <div class="row">
                            
                                    <div class="col-sm-8">
                                        <h4>Add Note</h4>
                                        <div class="input-group">
                                        <input type="text" class="form-control" placeholder="" name="people_num" maxlength="1500">
                                        <span class="input-group-btn"> <button type="submit" class="btn btn-primary">Add
                                        </button></span> 
                                    </div>

                                    </div>
                                </div>

                                <div class="row">
                                <div class="form-group">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        <button class="btn btn-white" type="submit">Cancel</button>
                                        <button class="btn btn-primary" type="submit">Save changes</button>
                                    </div>
                                </div>
                                </div>
</div>
<input name="code" id="code" type="text" value="" >
<script type="text/javascript">
    function makeid()
    {
    var randomnumber=Math.floor(Math.random() * 20)
}
</script>
<input type="button" style="font-size:9pt" value="Generate Code" onclick="document.getElementById('code').value = makeid()">
</input>


                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--
        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2015
            </div>
        </div> -->

        </div>
        </div>


    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>

        <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Chosen -->
    <script src="js/plugins/chosen/chosen.jquery.js"></script>

   <!-- Input Mask-->
    <script src="js/plugins/jasny/jasny-bootstrap.min.js"></script>

   <!-- Data picker -->
   <script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>

   <!-- NouSlider -->
   <script src="js/plugins/nouslider/jquery.nouislider.min.js"></script>

   <!-- Switchery -->
   <script src="js/plugins/switchery/switchery.js"></script>

    <!-- IonRangeSlider -->
    <script src="js/plugins/ionRangeSlider/ion.rangeSlider.min.js"></script>

    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>

    <!-- MENU -->
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Color picker -->
    <script src="js/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>

    <!-- Clock picker -->
    <script src="js/plugins/clockpicker/clockpicker.js"></script>

    <!-- Image cropper -->
    <script src="js/plugins/cropper/cropper.min.js"></script>

    <!-- Date range use moment.js same as full calendar plugin -->
    <script src="js/plugins/fullcalendar/moment.min.js"></script>

    <!-- Date range picker -->
    <script src="js/plugins/daterangepicker/daterangepicker.js"></script>


    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- Jquery Validate -->
    <script src="js/plugins/validate/jquery.validate.min.js"></script>

    <script>
         $(document).ready(function(){

             $("#form").validate({
                 rules: {
                     prob_desc: {
                         required: true,
                         minlength: 10,
                         maxlength: 500
                     },
                     prob_more: {
                         required: false,
                         maxlength: 1500
                     },url: {
                         required: false,
                         url: true,
                         maxlength: 500
                     },
                     people_num: {
                         required: false,
                         number: true,
                         digits: true,
                         range: 0-75000000000
                     },
                     tags: {
                         required: false,
                         maxlength: 500
                     }
                     }
                 }
             });
        });
    </script>
   <!-- JSKnob -->
   <script src="js/plugins/jsKnob/jquery.knob.js"></script>

    <script>
        $(document).ready(function(){

            var $image = $(".image-crop > img")
            $($image).cropper({
                aspectRatio: 1.618,
                preview: ".img-preview",
                done: function(data) {
                    // Output the result data for cropping image.
                }
            });

            var $inputImage = $("#inputImage");
            if (window.FileReader) {
                $inputImage.change(function() {
                    var fileReader = new FileReader(),
                            files = this.files,
                            file;

                    if (!files.length) {
                        return;
                    }

                    file = files[0];

                    if (/^image\/\w+$/.test(file.type)) {
                        fileReader.readAsDataURL(file);
                        fileReader.onload = function () {
                            $inputImage.val("");
                            $image.cropper("reset", true).cropper("replace", this.result);
                        };
                    } else {
                        showMessage("Please choose an image file.");
                    }
                });
            } else {
                $inputImage.addClass("hide");
            }

            $("#download").click(function() {
                window.open($image.cropper("getDataURL"));
            });

            $("#zoomIn").click(function() {
                $image.cropper("zoom", 0.1);
            });

            $("#zoomOut").click(function() {
                $image.cropper("zoom", -0.1);
            });

            $("#rotateLeft").click(function() {
                $image.cropper("rotate", 45);
            });

            $("#rotateRight").click(function() {
                $image.cropper("rotate", -45);
            });

            $("#setDrag").click(function() {
                $image.cropper("setDragMode", "crop");
            });

            $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });

            $('#data_2 .input-group.date').datepicker({
                startView: 1,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                format: "dd/mm/yyyy"
            });

            $('#data_3 .input-group.date').datepicker({
                startView: 2,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
            });

            $('#data_4 .input-group.date').datepicker({
                minViewMode: 1,
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                todayHighlight: true
            });

            $('#data_5 .input-daterange').datepicker({
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
            });

            var elem = document.querySelector('.js-switch');
            var switchery = new Switchery(elem, { color: '#1AB394' });

            var elem_2 = document.querySelector('.js-switch_2');
            var switchery_2 = new Switchery(elem_2, { color: '#ED5565' });

            var elem_3 = document.querySelector('.js-switch_3');
            var switchery_3 = new Switchery(elem_3, { color: '#1AB394' });

            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green'
            });

            $('.demo1').colorpicker();

            var divStyle = $('.back-change')[0].style;
            $('#demo_apidemo').colorpicker({
                color: divStyle.backgroundColor
            }).on('changeColor', function(ev) {
                        divStyle.backgroundColor = ev.color.toHex();
                    });

            $('.clockpicker').clockpicker();

            $('input[name="daterange"]').daterangepicker();

            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

            $('#reportrange').daterangepicker({
                format: 'MM/DD/YYYY',
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: '12/31/2015',
                dateLimit: { days: 60 },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'right',
                drops: 'down',
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-primary',
                cancelClass: 'btn-default',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Cancel',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr','Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            }, function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            });


        });
        var config = {
                '.chosen-select'           : {},
                '.chosen-select-deselect'  : {allow_single_deselect:true},
                '.chosen-select-no-single' : {disable_search_threshold:10},
                '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
                '.chosen-select-width'     : {width:"95%"}
                }
            for (var selector in config) {
                $(selector).chosen(config[selector]);
            }

        $("#ionrange_1").ionRangeSlider({
//            values: [
//                "1", "100", "500", "1,000", "5,000", "10,000", "50,000", "100,000", "250,000", "500,000", "1 million","10 million", "50 million","100 million", "500 million", "Over 1 billion"
//            ],
            min: 1,
            max: 999,
            step: 10,
            type: 'single',
            hasGrid: true,
//            maxPostfix: " people",
            hideMinMax: false,
            hideFromTo: false
        });

        $("#ionrange_5").ionRangeSlider({
            min: 10000,
            max: 100000,
            step: 100,
            postfix: " km",
            from: 55000,
            hideMinMax: true,
            hideFromTo: false
        });

        $(".dial").knob();

        $("#basic_slider").noUiSlider({
            start: 40,
            behaviour: 'tap',
            connect: 'upper',
            range: {
                'min':  20,
                'max':  80
            }
        });

        $("#range_slider").noUiSlider({
            start: [ 40, 60 ],
            behaviour: 'drag',
            connect: true,
            range: {
                'min':  20,
                'max':  80
            }
        });

        $("#drag-fixed").noUiSlider({
            start: [ 40, 60 ],
            behaviour: 'drag-fixed',
            connect: true,
            range: {
                'min':  20,
                'max':  80
            }
        });


    </script>

    <!-- iCheck -->
    <script src="js/plugins/iCheck/icheck.min.js"></script>
        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });
        </script>
</body>

</html>

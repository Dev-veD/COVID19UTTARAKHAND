<?php include "headn.html";?>
<?php include "headerD.html";?>
<?php include "headerM.html";?>


<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="mystyle.css" rel="stylesheet">


<form id="regForm" action="ScreeningResponse.php">
  <h1>COVID19 Screening Test</h1><hr>
  <!-- One "tab" for each step in the form: -->
  <div class="row tab form-group">
    <div class="col col-md-3 col-lg-3">
       <h3>Start a screening test for COVID19 </h3><br>
        <label class=" form-control-label">Information regarding test :</label>
    </div>
    <div class="col col-md-9 col-lg-9 ">
      <ol>
      <li>Select the appropriate option. </li>
      <li>Screen Test will suggest the action to take. </li>
      <li>None of your data will be made public. </li>
      <li>Appropriate sugesstion will be given as per NHM guidelines for the COVID19. </li>
      <li>Developers are in no way responsible for the information. </li>
      <li>Give test wisely and don't get scared of results. </li>
      <li>Try as much social distancing as possible. </li>
    </ol>
    </div>
 </div>

  <div class="row tab form-group">
    <div class="col col-md-3">
       <h3>Question :</h3><br>
        <label class=" form-control-label">Do you have fever ? </label>
    </div>
    <div class="col col-md-9">
      <div class="form-check">
        <div class="radio">
          <label for="radio1" class="form-check-label ">
            <input type="radio" id="radio1" name="fever_yes" value="option1" class="form-check-input">Yes
          </label>
        </div>
        <div class="radio">
          <label for="radio2" class="form-check-label ">
            <input type="radio" id="radio2" name="fever_no" value="option2" class="form-check-input">No
          </label>
        </div>
      </div>
    </div>
 </div>

 <div class="row tab form-group">
    <div class="col col-md-3">
       <h3>Question :</h3><br>
        <label class=" form-control-label">Are you dry coughing ? </label>
    </div>
    <div class="col col-md-9">
      <div class="form-check">
        <div class="radio">
          <label for="radio1" class="form-check-label ">
            <input type="radio" id="radio1" name="dry_cough_yes" value="option1" class="form-check-input">Yes
          </label>
        </div>
        <div class="radio">
          <label for="radio2" class="form-check-label ">
            <input type="radio" id="radio2" name="dry_cough_no" value="option2" class="form-check-input">No
          </label>
        </div>
      </div>
    </div>
 </div>

 <div class="row tab form-group">
    <div class="col col-md-3">
       <h3>Question :</h3><br>
        <label class=" form-control-label">Are you feeling shortness of breath or having problem in breathing ? </label>
    </div>
    <div class="col col-md-9">
      <div class="form-check">
        <div class="radio">
          <label for="radio1" class="form-check-label ">
            <input type="radio" id="radio1" name="breathe_trouble_yes" value="option1" class="form-check-input">Yes
          </label>
        </div>
        <div class="radio">
          <label for="radio2" class="form-check-label ">
            <input type="radio" id="radio2" name="breathe_trouble_no" value="option2" class="form-check-input">No
          </label>
        </div>
      </div>
    </div>
 </div>

 <div class="row tab form-group">
    <div class="col col-md-3">
       <h3>Question :</h3><br>
        <label class=" form-control-label">Are you having chest pain? </label>
    </div>
    <div class="col col-md-9">
      <div class="form-check">
        <div class="radio">
          <label for="radio1" class="form-check-label ">
            <input type="radio" id="radio1" name="chest_pain_yes" value="option1" class="form-check-input">Yes
          </label>
        </div>
        <div class="radio">
          <label for="radio2" class="form-check-label ">
            <input type="radio" id="radio2" name="chest_pain_no" value="option2" class="form-check-input">No
          </label>
        </div>
      </div>
    </div>
 </div>

 <div class="row tab form-group">
    <div class="col col-md-3">
       <h3>Question :</h3><br>
        <label class=" form-control-label">Are your lips getting blue ? </label>
    </div>
    <div class="col col-md-9">
      <div class="form-check">
        <div class="radio">
          <label for="radio1" class="form-check-label ">
            <input type="radio" id="radio1" name="blue_lips_yes" value="option1" class="form-check-input">Yes
          </label>
        </div>
        <div class="radio">
          <label for="radio2" class="form-check-label ">
            <input type="radio" id="radio2" name="blue_lips_no" value="option2" class="form-check-input">No
          </label>
        </div>
      </div>
    </div>
 </div>

 <div class="row tab form-group">
    <div class="col col-md-3">
       <h3>Question :</h3><br>
        <label class=" form-control-label">Did you came in contact of any Positive COVID patient ? </label>
    </div>
    <div class="col col-md-9">
      <div class="form-check">
        <div class="radio">
          <label for="radio1" class="form-check-label ">
            <input type="radio" id="radio1" name="covid_contact_yes" value="option1" class="form-check-input">Yes
          </label>
        </div>
        <div class="radio">
          <label for="radio2" class="form-check-label ">
            <input type="radio" id="radio2" name="covid_contact_no" value="option2" class="form-check-input">No
          </label>
        </div>
      </div>
    </div>
 </div>

 <div class="row tab form-group">
    <div class="col col-md-3">
       <h3>Question :</h3><br>
        <label class=" form-control-label">Was there any COVID cases nearby your city? </label>
    </div>
    <div class="col col-md-9">
      <div class="form-check">
        <div class="radio">
          <label for="radio1" class="form-check-label ">
            <input type="radio" id="radio1" name="covid_city_yes" value="option1" class="form-check-input">Yes
          </label>
        </div>
        <div class="radio">
          <label for="radio2" class="form-check-label ">
            <input type="radio" id="radio2" name="covid_city_no" value="option2" class="form-check-input">No
          </label>
        </div>
      </div>
    </div>
 </div>


  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

</body>
</html>


<?php include "footm.html";?>
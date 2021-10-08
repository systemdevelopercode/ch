
  <?php include("header.php"); ?>
 <main>
  <!-- Start Multiform HTML -->
  <section class="multi_step_form" style="position:relative;z-index:0;">  
  <form id="msform" method="POST" action="process_form.php"> 
    <!-- Tittle -->
    <div class="tittle">
      <h2>Continental Horizons Consultancy and Training</h2>
      <p>Project Kick-Off Questionnaire</p>
    </div>
    <!-- progressbar -->
    <ul id="progressbar">
      <li class="active">Contact Details</li>  
      <li>Information</li> 
      <li>Project</li>
    </ul>
    <!-- fieldsets -->
    <fieldset>
      <h3>Organization Contact Details</h3>
      <h6>Marked * are Required.</h6> 
      <div class="form-row">
          <div class="form-group col-md-12">
              <label for="org_name" class="pull-left">Organization Name*</label>
          </div>
      </div>
      <div class="form-row">
          <div class="form-group col-md-12">
              <input class="form-control" type="text" name="org_name" placeholder="coca-cola">
          </div>
      </div>
      <div class="form-row">
          <div class="form-group col-md-12">
              <label for="org_name" class="pull-left">Contact Person*</label>
          </div>
      </div>
      <div class="form-row">
          <div class="form-group col-md-12">
              <input class="form-control" type="text" name="contact_fullname" placeholder="Project Manager">
          </div>
      </div>
      <div class="form-row">
          <div class="form-group col-md-12">
              <label for="org_name" class="pull-left">Contact Email*</label>
          </div>
      </div>
      <div class="form-row">
          <div class="form-group col-md-12">
              <input class="form-control" type="email" name="contact_email" placeholder="coca-cola">
          </div>
      </div>
      <div class="form-row"> 
        <div class="form-group col-md-12">
        <label for="org_name" class="pull-left">Land/Mobile Number*</label>   
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-12"> 
          <span><input type="tel" id="phone" name="country_code" class="col-md-12" placeholder="+263"></span>
          <input type="text" name="contact_number" class="form-control col-md-12" placeholder="+263 123456789">
        </div> 
      </div> 
      <div class="done_text"> 
        <a href="#" class="don_icon"><i class="ion-android-done"></i></a> 
      </div>  
      <button type="button" class="action-button previous_button">Back</button>
      <button type="button" class="next action-button">Continue</button>  
    </fieldset>
    <fieldset>
      <h3>Organization Information</h3>
      <h6>Marked with * are Required</h6>
      <div class="form-row"> 
        <div class="form-group col-md-12">
        <label for="org_name" class="pull-left">Mission*</label>   
        </div>  
      </div>
      <div class="form-row">
        <div class="form-group col-md-12"> 
        <textarea name="org_mission" class="form-control" required></textarea>
        </div> 
      </div> 
      <div class="form-row"> 
        <div class="form-group col-md-12">
        <label for="org_name" class="pull-left">Objectives*</label>   
        </div>  
      </div>
      <div class="form-row">
        <div class="form-group col-md-12"> 
          <textarea name="org_objectives" class="form-control" required></textarea>
        </div> 
      </div> 
      <div class="form-row"> 
        <div class="form-group col-md-12">
        <label for="org_name" class="pull-left">Describe and Communicate about your Organization</label>   
        </div>
      </div>
      <div class="form-row"> 
        <div class="form-group col-md-12"> 
          <textarea name="org_description" class="form-control"></textarea>
        </div> 
      </div> 
      <button type="button" class="action-button previous previous_button">Back</button>
      <button type="button" class="next action-button">Continue</button>  
    </fieldset>  
    <fieldset>
      <h3><b>Project Assistance</b></h3>
      <h6>Please provide information on where you need assistance</h6> 
      <div class="form-row"> 
        <div class="form-group col-md-12">
        <label for="org_name" class="pull-left">How do you envision your project? *</label>   
        </div> 
      </div>
      <div class="form-row"> 
        <div class="form-group col-md-12"> 
          <textarea name="project_envision" class="form-control"></textarea>
        </div> 
      </div>
      <div class="form-row"> 
        <div class="form-group col-md-12 pull-left">
        <label class="pull-left"><b>How would you want us to assist in the following:</b> </label>  
        </div>  
      </div>
      <div class="form-row">
        <div class="form-group col-md-12"> 
          <label for="org_name" class="pull-left">Project Proporsal :</label><br>
          <textarea name="project_envision" class="form-control"></textarea>
        </div> 
      </div>  
      <div class="form-row">
        <div class="form-group col-md-12"> 
          <label for="org_name" class="pull-left">Project Plan :</label><br>
          <textarea name="project_plan" class="form-control"></textarea>
        </div> 
      </div>
      <div class="form-row">
        <div class="form-group col-md-12"> 
          <label for="org_name" class="pull-left">Project Consultancy :</label><br>
          <textarea name="project_consultancy" class="form-control"></textarea>
        </div> 
      </div>
      <button type="button" class="action-button previous previous_button">Back</button> 
      <input type="submit" name="submit" class="finish action-button" value="Finish"> 
    </fieldset>  
  </form>  
</section> 
      <!-- END Multiform HTML -->
 </main>
    <?php include("../footer.php"); ?>
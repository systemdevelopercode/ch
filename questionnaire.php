<?php
include("header.php");

?>
<!-- Start of Page-->
<div class="container">
    <h3>Project Kick-Off Questionnaire</h3>
    <div class="box">
        <div class="box-inner">
            <div class="box-header">
                <h4>Questionnaire</h4>
            </div>
            <div class="box-content">
                <form class="form-group">
                <div class="row">
                    <label for="org-name">Organization Name</label><br>
                    <input type="text" name="org_name" placeholder="Organization Name">
                </div>
                <div class="row">
                    <label for="org-name">Contact Person</label><br>
                    <input type="text" name="org_contact_person" placeholder="Organization Contact Person">
                </div>
                <div class="row">
                    <label for="org-name">Primary Contact Information</label><br>
                    <input type="text" name="org_pry_contact_info" placeholder="Organization Contact information">
                </div>
                <div class="row">
                    <label for="org-name">Organization Mission</label><br>
                    <input type="text" max-length="200" name="org_mission" placeholder="Organization Mission">
                </div>
                <div class="row">
                    <label for="org-name">What would you like to communicate about your Organization?</label><br>
                    <textarea name="org_comm_msg" placeholder="Organization Information"></textarea>
                </div>
                <div class="row">
                    <label for="org-name">How would you describe your Organization?</label><br>
                    <textarea name="org_desc"></textarea>
                </div>
                <div class="row">
                    <label for="org-name">What are the objectives of your Organization?</label><br>
                    <textarea name="org_objectives"></textarea>
                </div>
                <div class="row">
                    <label for="org-name">How do you envision your project?</label><br>
                    <textarea name="org_envision"></textarea>
                </div>
                <div class="row">
                    <label for="org-name">How would you want Continental Horizons to assist in : Project Proposal/Project Plan/Project consultancy?</label>
                    <textarea name="org_assist_request"></textarea>
                </div>
                <div class="row">
                    <label for="org-name">Would you want Continental Horizons to visit your site?</label><br>
                    <br><input type="radio" name="yes" value="Yes">
                    <br><input type="radio" name="no" value="No">
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include("footer.php");

?>
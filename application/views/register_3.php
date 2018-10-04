<section id="faqs" class="padding_half bottom40">
    <div class="container submit_property">
        <h3 class="bottom20"> Contact Information </h3>

        <?php echo form_open('home/register_3', 'class="callus clearfix"'); ?>

        <div class="col-sm-6">
            <div class="single-query form-group ">
                <label>Telephone Number</label>
                <input type="text" name="tel_no" class="keyword-input" placeholder="Telephone Number">
            </div>
        </div>

        <div class="col-sm-6">
            <div class="single-query form-group ">
                <label>Fax No</label>
                <input type="text" name="fax_no" class="keyword-input" placeholder="Fax No">
            </div>
        </div>

        <div class="col-sm-6">
            <div class="single-query form-group ">
                <label>Web URL</label>
                <input name="url" type="text" class="keyword-input" placeholder="Web URL">
            </div>
        </div>

        <div class="col-sm-6">
            <div class="single-query form-group ">
                <label>Permanent Address</label>
                <input name="permanent_address" type="text" class="keyword-input" placeholder="Permanent Address">
            </div>
        </div>

        <div class="col-sm-6">
            <div class="single-query form-group ">
                <label>Present Address</label>
                <input name="present_address" type="text" class="keyword-input" placeholder="Present Address">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="single-query form-group ">
                <label>District</label>
                <input name="district" type="text" class="keyword-input" placeholder="District">
            </div>
        </div>
        <div class="col-sm-6">
            <div class="single-query form-group ">
                <label>Area</label>
                <input name="area" type="text" class="keyword-input" placeholder="Area">
            </div>
        </div>

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="query-submit-button">
                <input name="submit" type="submit" value="Next" class="submit_btn text-center text-uppercase border_radius">
            </div>
        </div>

        <?php echo form_close(); ?>
    </div>
</section>

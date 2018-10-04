<!-- Login -->
<section id="login" class="padding">
    <div class="container">
        <h3 class="hidden">hidden</h3>
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="profile-login">
                    <!-- Nav tabs -->
                   <h3 style="color: #fff; padding-top: 20px;">Login</h3>
                    <!-- Tab panes -->
                    <div class="tab-content padding_half">
                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                            <div class="agent-p-form">
                                <?php echo form_open('login', 'class="callus clearfix"'); ?>
                                    <div class="single-query form-group col-sm-12">
                                        <input type="text" class="keyword-input" name="email" placeholder="username"/>
                                    </div>
                                    <div class="single-query form-group  col-sm-12">
                                        <input type="password" class="keyword-input" name="password" placeholder="Password" />
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="col-sm-6">
                                                <div class="search-form-group white form-group text-left">
                                                    <div class="check-box-2"><i><input type="checkbox" name="check-box"></i></div>
                                                    <span>Remember Me</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 text-right">
                                                <a href="#" class="lost-pass">Lost your password?</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=" col-sm-12">
                                        <input type="submit" value="submit now" class="btn-slide border_radius">
                                    </div>
                                <?php echo form_close(); ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Login end -->


     <div class="owl-carousel homepage-slider-area">
        <div class="single-slider slide-bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <div class="slider-text">
                            <h2>We are here to make the <br>
                            education system <span>easy</span> for you </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-slider slide-bg-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <div class="slider-text">
                            <h2>We are here to make the <br>
                            education system <span>easy</span> for you </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section-padding our-team">
            <div class="section-title">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 text-center">
                            <h2>Meet Our <span>Team Member</span></h2>
                        </div>
                    </div>
                </div>
            </div>
            
                
             <div class="container">
                <div class="row">
                    <div class="col-md-12">
                         <div class="owl-carousel team-slider">
                            <div class="single-member">
                                <div class="member-bg member-bg-1"></div>
                                <div class="details">
                                    <h2>Teacher 1 <span>Subject 1</span></h2>
                                </div>
                            </div>
                            <div class="single-member">
                                <div class="member-bg member-bg-2"></div>
                                <div class="details">
                                    <h2>Teacher 2<span>Subject 2</span></h2>
                                </div>
                            </div>
                            <div class="single-member">
                                <div class="member-bg member-bg-3"></div>
                                <div class="details">
                                    <h2>Teacher 3<span>Subject 3</span></h2>
                                </div>
                            </div>
                            <div class="single-member">
                                <div class="member-bg member-bg-5"></div>
                                <div class="details">
                                    <h2>Teacher 4<span>Subject 4</span></h2>
                                </div>
                            </div>
                            <div class="single-member">
                                <div class="member-bg member-bg-4"></div>
                                <div class="details">
                                    <h2>Teacher 5<span>Subject 5</span></h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <div class="testimonial-area">
        <div class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="owl-carousel testimonial-slider">


                        <?php 
                        $sql="select name, email, message from feedback";
                         $table = mysqli_query($cn, $sql);
                         ?>

                            <?php while ($row = mysqli_fetch_assoc($table)) { ?>
                            <div class="testimonial-single-slider">
                                <p><?php echo htmlentities($row["message"]); ?></p>
                                <p class="name"><?php echo htmlentities($row["name"]); ?></p>
                            </div>

                            <?php } ?>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
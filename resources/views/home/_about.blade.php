<section id="about" class="about bg-light roomy-150">
    <div class="container">
        <div class="row">
            <div class="main_about">
                <div class="col-md-5 col-md-offset-1">
                    <div class="about_content">
                        <div class="head_right">
                            <h2>About me</h2>
                        </div>
                        <div class="about_content_text">
                            <p>{{$paragraphs['about-me-description']->value}}</p>

                            <div class="divider1 m-top-10"></div>

                            <div class="about_content_item m-top-30">
                                <h6><i class="fa fa-graduation-cap"></i> Education History</h6>
                                <ul>
                                    @foreach($educations as $education)
                                        <li><a href=""><i class="fa fa-chevron-right"></i>{{$education->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="about_content_item m-top-20">
                                <h6><i class="fa fa-briefcase"></i> Work Experiences</h6>
                                <ul>
                                    @foreach($experiences as $experience)
                                        <li><i class="fa fa-chevron-right"></i>{{$experience->name}}
                                            | {{date('Y', strtotime($experience->start_date))}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- End off col-md-6 -->

                <div class="col-md-5 col-md-offset-1 sm-m-top-50">
                    <div class="head_title text-right">
                        <h5><span class="divider"></span> my name is {{$settings['website-name']->value}}</h5>
                    </div>
                    <div class="about_left_item m-top-50">
                        <img src="{{asset('images/about-img1.jpg')}}" alt=""/>
                    </div>

                    <div class="about_socail m-top-50">
                        <ul class="list-inline">
                            <li><span class="divider"></span></li>
                            <li><a target="_blank" href="https://github.com/MBFouad/"><i class="fa fa-github fa-3x"></i></a></li>
                            <li><a target="_blank" href="https://www.facebook.com/mbahaa.eldien"><i class="fa fa-facebook fa-3x"></i></a></li>
                            <li><a target="_blank" href="https://twitter.com/Mohamed50915950"><i class="fa fa-twitter fa-3x"></i></a></li>
                            <li><a target="_blank" href="https://www.linkedin.com/in/mohamed-bahaa-el-dien-598b21102/"><i class="fa fa-linkedin fa-3x"></i></a></li>
                        </ul>
                    </div>
                </div><!-- End off col-md-6 -->

            </div><!-- End off Main About -->

        </div><!-- End off row -->
    </div><!-- End off container -->
</section><!-- End off About us Section -->
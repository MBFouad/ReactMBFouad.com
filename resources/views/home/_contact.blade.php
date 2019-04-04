<section id="contact" class="contact bg-white roomy-50">
    <div class="container">
        <div class="row">
            <div class="main_contact">
                <div class="head_title">
                    <h5><span class="divider"></span> Get enquiries now</h5>
                </div>
                <div class="col-md-5">
                    @include('partials.error')
                    <form class="m-top-50" id="contact-us-form" action="{{route('homeContactUs')}}" method="POST">
                        {!! csrf_field() !!}
                        <div class="form-group">
                            <input type="text" value="{{old('name')?old('name'):''}}" name="name" required class="form-control" placeholder="your name">
                        </div>
                        <div class="form-group">
                            <input type="text" value="{{old('email')?old('email'):''}}" name="email" required class="form-control" placeholder="your e-mail">
                        </div>
                        <div class="form-group">
                            <input type="text" value="{{old('budget')?old('budget'):''}}"  name="budget" class="form-control" placeholder="your budget">
                        </div>
                        <div class="form-group">
                            <textarea required name="message" class="form-control" rows="5"
                                      placeholder="you message">{{old('message')?old('message'):''}}</textarea>
                        </div>
                        <div class="form-group">
                            <label class="google-recaptcha-error">Recaptcha</label>
                            <div class="g-recaptcha" data-sitekey="{{env('GOOGLE_RECAPTCHA_SITE_KEY')}}"
                                 data-callback="enableFormSubmit"></div>
                        </div>
                        <div class="form_btn text-right m-top-50">
                            <button type="submit" class="btn btn-primary" disabled="disabled">Send</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 col-md-offset-1 sm-m-top-50">
                    <div class="contact_content">
                        <div class="head_right">
                            <h2>contact me</h2>
                        </div>

                        <div class="contact_content_text">
                            <p>{{$paragraphs['contact-us-description']->value}}</p>
                            <ul class="m-top-50">
                                <li>{{$settings['contact-us-address']->value}}
                                </li>
                                <li class="phone">{{$settings['contact-us-phone']->value}}</li>
                                <li class="info">{{$settings['contact-us-email']->value}}</li>
                            </ul>

                            <div class="author_text text-right">
                                <h5>Regards!</h5>
                                <h1>{{$settings['website-name']->value}}</h1>
                                <h6>{{str_replace('#','',$settings['first-hash-tag']->value)}}
                                    & {{str_replace('#','',$settings['second-hash-tag']->value)}}</h6>
                            </div>
                            <div class="copyright text-right m-top-80">
                                <p class="wow fadeInRight">Made with <i class="fa fa-heart"></i> by <a
                                            href="{{route('homeIndex')}}">{{$settings['website-logo']->value}}</a>2018.
                                    All
                                    Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

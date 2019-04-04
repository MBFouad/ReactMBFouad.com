@extends('layout.layout')
@section('content')
    <section id="portfolio" class="portfolio bg-white roomy-150">
        <div class="container">
            <div class="row">
                <div class="main_portfolio">

                    <div class="col-md-10 col-md-offset-1 sm-m-top-50">
                        <div class="portfolio_content">
                            <div class="head_right">
                                <h2>portfolio</h2>
                            </div>

                            <div class="portfolio_content_text">
                                <p>{{$paragraphs['portfolio-description']->value}}</p>
                            </div>
                        </div>

                        <div class="may_client m-top-50">
                            <div class="head_title text-center">
                                <h5><span class="divider"></span> my clients<span class="divider"></span></h5>
                            </div>
                            <div class="client_brand m-top-60 text-center">
                                <div class="list-inline">
                                    @foreach($projects as $project )
                                        <div class="col-md-4 col-sm-6 col-xs-12 no-padding height-160">
                                            <a href="{{$project->url}}">
                                                <img class="project-img"
                                                     src="{{getProjectImage($project->image)}}"
                                                     alt="{{$project->name}}"/>
                                            </a>
                                            <h6>{{$project->name}}(<b>{{$project->company_name}}</b>)</h6>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div><!-- End off col-md-6  -->

                </div>
            </div>
        </div>
    </section>
@endsection
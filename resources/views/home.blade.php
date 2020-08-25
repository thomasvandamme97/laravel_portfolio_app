@extends('layouts.app')

@section('masthead')
    <div class="masthead-overlay mb-5">
        <div class="container">
            <div id="profile" class="row profile">
                <div class="col-md-4 profile-avatar">
                    <img class="img-fluid" src="storage/profile/{{ $profile->image }}" alt="">
                </div>
                <div class="col-md-8 profile-details">
                    <p class="profile-name">{{ $profile->first_name }} {{ $profile->last_name }}_</p>
                    <p class="profile-title">{{ $profile->title }}</p>
                    <div class="profile-contacts">
                        <dl class="contact-list">
                            <dt>Leeftijd</dt>
                            <dd>{{ $profile->age }}</dd>
                            <dt>Telefoonnummer</dt>
                            <dd>{{ $profile->phone }}</dd>
                            <dt>Email</dt>
                            <dd><a href="mailto:{{ $profile->email }}">{{ $profile->email }}</a></dd>
                            <dt>Adres</dt>
                            <dd>{{ $profile->address }}</dd>
                        </dl>
                    </div>
                    @if($profile->linkedin || $profile->github)
                    <div class="profile-social">
                        @if($profile->linkedin)
                        <a target="_blank" href="https://{{ $profile->linkedin }}">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        @endif
                        @if($profile->github)
                            <a target="_blank" href="https://{{ $profile->github }}">
                                <i class="fab fa-github-square"></i>
                            </a>
                        @endif
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@section('intro')
    <div class="container py-5 px-2">
        <div class="row">
            <div class="col-md-10">
                <h2>Hi_</h2>
                <p class="mb-5">{{ $profile->description }}</p>
                <a class="btn btn-file" href="storage/cv/{{ $profile->cv }}" download="{{ $profile->cv }}"><i class="fas fa-download pr-1"></i>download cv</a>
            </div>
        </div>
    </div>
@endsection

@section('resume')
    <div class="container py-5 px-2">
        <div id="resume" class="anchor"></div>
        <div class="row mb-5">
            <div class="col-md-10">
                <h2>Overzicht_</h2>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-10 resume">
                <h3 class="resume-title mb-5">educatie</h3>
            </div>
            @foreach($educations as $education)
            <div class="col-md-10 block">
                <p class="block-title">{{ $education->name }} - {{ $education->diploma }}</p>
                <p class="block-period">{{ $education->start_year }} - {{ $education->end_year }} <span class="block-org">&commat;{{ $education->school }}</span></p>
            </div>
            @endforeach
        </div>
        <div class="row mb-5">
            <div class="col-md-10 resume">
                <h3 class="resume-title mb-5">werkervaring</h3>
            </div>
            @foreach($employments as $employment)
                <div class="col-md-10 block">
                    <p class="block-title">{{ $employment->title }}</p>
                    <p class="block-period">{{ $employment->start_year }} - {{ $employment->end_year }} <span class="block-org">&commat;{{ $employment->company }}</span></p>
                    <p class="block-description">{{ $employment->description }}</p>
                </div>
            @endforeach
        </div>
        <div class="row mb-5">
            <div class="col-md-12 resume">
                <h3 class="resume-title mb-5">algemene skills</h3>
            </div>
            <div class="col-md-5 mr-auto">
                @foreach($skills as $skill)
                    @if($loop->odd)
                        <div class="skill mb-4">
                            <p class="d-flex justify-content-between">
                                <span>{{ $skill->name }}</span>
                                <span>{{ $skill->percentage }}%</span>
                            </p>
                            <div class="skill-progress">
                                <div class="skill-progress-value" style="width:{{ $skill->percentage }}%;"></div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="col-md-5 mr-auto">
                @foreach($skills as $skill)
                    @if($loop->even)
                        <div class="skill mb-4">
                            <p class="d-flex justify-content-between">
                                <span>{{ $skill->name }}</span>
                                <span>{{ $skill->percentage }}%</span>
                            </p>
                            <div class="skill-progress">
                                <div class="skill-progress-value" style="width:{{ $skill->percentage }}%;"></div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            @foreach($softskills as $softskill)
            <div class="col-md-4">
                <div class="softskill mb-5">
                    <p class="softskill-name">{{ $softskill->name }}</p>
                    <p class="softskill-desc">{{ $softskill->description }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection

@section('portfolio')
    <div class="container py-5 px-2">
        <div id="portfolio" class="anchor"></div>
        <div class="row">
            <div class="col-md-12">
                <h2 class="mb-5">Portfolio_</h2>
            </div>
        </div>
        @foreach($projects as $project)
        <div class="row project-card mb-5">
            <div class="col-md-6 col-lg-5 project-image">
                <img class="img-fluid" src="storage/projects/{{ $project->image }}" alt="">
            </div>
            <div class="col-md-6 col-lg-7 pt-5 pb-4 pr-3 pl-4 project-details">
                <h3>{{ $project->title }}</h3>
                <p>{{ $project->description }}</p>
                <a href="https://{{ $project->link }}">{{ $project->link }}</a>
            </div>
        </div>
        @endforeach
    </div>
@endsection

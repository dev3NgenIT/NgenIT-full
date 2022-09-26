@extends('frontend.master')

@section('content')

<!-- header section -->
@include('frontend.header')
<!-- header section End -->


<!-- banner start -->
@include('frontend.banner')
<!-- banner start end-->

<div>
    {{-- <img src="{{asset('assets/frontend/image/Logo/logo.png')}}" alt=""> --}}
    <img src="{{$blog->logo ? asset ('storage/' . $blog->logo) : asset('assets/frontend/image/Logo/logo.png')}}" alt="">

</div>
<h2>{{$blog['title']}}</h2>
<p>{{$blog['description']}}</p>

<!-- top product section end -->

@include('frontend.footer');


@endsection




{{-- @endsection --}}

{{-- <br><br>

<title>How Westerra Prioritized Digital Transformation in the Face of Disruption</title>

<h1>How Westerra Prioritized Digital Transformation in the Face of Disruption</h1>

<h2>
    Disruption came to every organization in 2020, but some were able to bounce back faster than others. Learn how
    Westerra Credit Union
    was able to put its IT modernization plans on hold while dealing with disruption and then pick them right back up
    again just a few
    months later.
</h2>

<div>Tags, Tags, Tags </div> <br>

<img src="assets/image/slider/insightbanner.jpg" alt="non-blade">
<img src="{{asset('image/slider/insightbanner.jpg')}}" alt="blade">
<p>
    Of course, Groves and the Westerra team aren’t stopping here ─ there’s always another project on the horizon.
    “Workspace ONE I think is going to take a lot a lot of time this year,” said Groves. “It has a lot of features and
    the idea is really to continue to leverage what we already have because we already have all the tools we need, which
    is a great spot to be in.”

    <br> <br>

    The team wants to explore some additional work around:

    <br> <br>

    Multi-factor authentication
    Identity and access management
    Employee onboarding and offboarding automation
    “We're not planning any major new transformations. Now we're focused on using what we have and frankly, kind of
    seeing where things land as things reopen and businesses respond. I think we're waiting to see what that looks
    like.”

    <br> <br>

    For Westerra Credit Union, digital transformation wasn’t something to be managed overnight, but rather a goal to
    achieve in due time. In 2018, the company began to take a good look at where it was going as a company and how it
    might differentiate from other banking institutions. Technology was a big driving factor for the members so Westerra
    started exploring how it could deliver a modern technology experience.

    <br> <br>

    Dan Groves, Westerra’s VP of IT, said this desire for a modern IT experience was what influenced the decision to
    invest in IT modernization and improve the employee experience:

    <br> <br>

    “We had to look at how we could do things differently, but still maintain proper controls, security, compliance and
    regulatory needs. All of that had to be balanced with our users’ ability to work. That’s been our biggest
    challenge.”

    <br> <br>
</p>
<br><br> --}}
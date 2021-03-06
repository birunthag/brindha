@extends('layouts.main')

@section('content')
<div class="container" id="about">
    <div class="row">
        <!-- sidebar -->
        <div class="col-md-3 sidebar">
            <!-- Sections Menu-->
            @include('layouts._partials.about_menu')
        </div>
      <!--main content-->
      <div class="col-md-9">
        <h2 class="title-divider">
          <span>The <span class="de-em">Team (Grid)</span></span>
          <small>Our team of stars! (Vector images by <a href="http://www.vectorportal.com/">Vectorportal</a>)</small>
        </h2>
        
        <!-- The team -->
        <div class="team team-grid margin-top-large">
          <div class="row" data-toggle="isotope-grid" data-isotope-options='{"layoutMode": "fitRows", "itemSelector": ".grid-item"}'>
            
            <!--Team Member jimi-->
            <div class="col-xs-6 col-sm-4 col-md-3 grid-item">
              <div class="team-member">
                <a href="team-member.htm" title="View Jimi's profile">
                  <img src="img/team/jimi.jpg" class="img-thumbnail" alt="Jimi" />
                </a>
                <h5 class="name">
                  <a href="team-member.htm" title="View Jimi's profile">Jimi</a>
                </h5>
                <p class="role">Founder & developer</p>
                <div class="social-media-branding social-media-branding-xs">
                  <!--@todo: replace with real social share links -->
                  <a href="#" class="social-link branding-twitter"><i class="fa fa-twitter-square"></i></a>
                  <a href="#" class="social-link branding-facebook"><i class="fa fa-facebook-square"></i></a>
                  <a href="#" class="social-link branding-linkedin"><i class="fa fa-linkedin-square"></i></a>
                  <a href="#" class="social-link branding-google-plus"><i class="fa fa-google-plus-square"></i></a>
                </div>
              </div>
            </div>
            
            <!--Team Member adele-->
            <div class="col-xs-6 col-sm-4 col-md-3 grid-item">
              <div class="team-member">
                <a href="team-member.htm" title="View Adele's profile">
                  <img src="img/team/adele.jpg" class="img-thumbnail" alt="Adele" />
                </a>
                <h5 class="name">
                  <a href="team-member.htm" title="View Adele's profile">Adele</a>
                </h5>
                <p class="role">Founder & designer</p>
                <div class="social-media-branding social-media-branding-xs">
                  <!--@todo: replace with real social share links -->
                  <a href="#" class="social-link branding-twitter"><i class="fa fa-twitter-square"></i></a>
                  <a href="#" class="social-link branding-facebook"><i class="fa fa-facebook-square"></i></a>
                  <a href="#" class="social-link branding-linkedin"><i class="fa fa-linkedin-square"></i></a>
                  <a href="#" class="social-link branding-google-plus"><i class="fa fa-google-plus-square"></i></a>
                </div>
              </div>
            </div>
            
            <!--Team Member bono-->
            <div class="col-xs-6 col-sm-4 col-md-3 grid-item">
              <div class="team-member">
                <a href="team-member.htm" title="View Bono's profile">
                  <img src="img/team/bono.jpg" class="img-thumbnail" alt="Bono" />
                </a>
                <h5 class="name">
                  <a href="team-member.htm" title="View Bono's profile">Bono</a>
                </h5>
                <p class="role">The Tech Guy</p>
                <div class="social-media-branding social-media-branding-xs">
                  <!--@todo: replace with real social share links -->
                  <a href="#" class="social-link branding-twitter"><i class="fa fa-twitter-square"></i></a>
                  <a href="#" class="social-link branding-facebook"><i class="fa fa-facebook-square"></i></a>
                  <a href="#" class="social-link branding-linkedin"><i class="fa fa-linkedin-square"></i></a>
                  <a href="#" class="social-link branding-google-plus"><i class="fa fa-google-plus-square"></i></a>
                </div>
              </div>
            </div>
            
            <!--Team Member robert-->
            <div class="col-xs-6 col-sm-4 col-md-3 grid-item">
              <div class="team-member">
                <a href="team-member.htm" title="View Robert's profile">
                  <img src="img/team/robert.jpg" class="img-thumbnail" alt="Robert" />
                </a>
                <h5 class="name">
                  <a href="team-member.htm" title="View Robert's profile">Robert</a>
                </h5>
                <p class="role">Junior designer</p>
                <div class="social-media-branding social-media-branding-xs">
                  <!--@todo: replace with real social share links -->
                  <a href="#" class="social-link branding-twitter"><i class="fa fa-twitter-square"></i></a>
                  <a href="#" class="social-link branding-facebook"><i class="fa fa-facebook-square"></i></a>
                  <a href="#" class="social-link branding-linkedin"><i class="fa fa-linkedin-square"></i></a>
                  <a href="#" class="social-link branding-google-plus"><i class="fa fa-google-plus-square"></i></a>
                </div>
              </div>
            </div>
            
            <!--Team Member steve-->
            <div class="col-xs-6 col-sm-4 col-md-3 grid-item">
              <div class="team-member">
                <a href="team-member.htm" title="View Steve's profile">
                  <img src="img/team/steve.jpg" class="img-thumbnail" alt="Steve" />
                </a>
                <h5 class="name">
                  <a href="team-member.htm" title="View Steve's profile">Steve</a>
                </h5>
                <p class="role">Sales Manager</p>
                <div class="social-media-branding social-media-branding-xs">
                  <!--@todo: replace with real social share links -->
                  <a href="#" class="social-link branding-twitter"><i class="fa fa-twitter-square"></i></a>
                  <a href="#" class="social-link branding-facebook"><i class="fa fa-facebook-square"></i></a>
                  <a href="#" class="social-link branding-linkedin"><i class="fa fa-linkedin-square"></i></a>
                  <a href="#" class="social-link branding-google-plus"><i class="fa fa-google-plus-square"></i></a>
                </div>
              </div>
            </div>
            
            <!--Team Member jolie-->
            <div class="col-xs-6 col-sm-4 col-md-3 grid-item">
              <div class="team-member">
                <a href="team-member.htm" title="View Jolie's profile">
                  <img src="img/team/jolie.jpg" class="img-thumbnail" alt="Jolie" />
                </a>
                <h5 class="name">
                  <a href="team-member.htm" title="View Jolie's profile">Jolie</a>
                </h5>
                <p class="role">Marketing Expert</p>
                <div class="social-media-branding social-media-branding-xs">
                  <!--@todo: replace with real social share links -->
                  <a href="#" class="social-link branding-twitter"><i class="fa fa-twitter-square"></i></a>
                  <a href="#" class="social-link branding-facebook"><i class="fa fa-facebook-square"></i></a>
                  <a href="#" class="social-link branding-linkedin"><i class="fa fa-linkedin-square"></i></a>
                  <a href="#" class="social-link branding-google-plus"><i class="fa fa-google-plus-square"></i></a>
                </div>
              </div>
            </div>
            
            <!--Team Member obama-->
            <div class="col-xs-6 col-sm-4 col-md-3 grid-item">
              <div class="team-member">
                <a href="team-member.htm" title="View Obama's profile">
                  <img src="img/team/obama.jpg" class="img-thumbnail" alt="Obama" />
                </a>
                <h5 class="name">
                  <a href="team-member.htm" title="View Obama's profile">Obama</a>
                </h5>
                <p class="role">Project Manager</p>
                <div class="social-media-branding social-media-branding-xs">
                  <!--@todo: replace with real social share links -->
                  <a href="#" class="social-link branding-twitter"><i class="fa fa-twitter-square"></i></a>
                  <a href="#" class="social-link branding-facebook"><i class="fa fa-facebook-square"></i></a>
                  <a href="#" class="social-link branding-linkedin"><i class="fa fa-linkedin-square"></i></a>
                  <a href="#" class="social-link branding-google-plus"><i class="fa fa-google-plus-square"></i></a>
                </div>
              </div>
            </div>
            
            <!--Team Member kate-->
            <div class="col-xs-6 col-sm-4 col-md-3 grid-item">
              <div class="team-member">
                <a href="team-member.htm" title="View Kate's profile">
                  <img src="img/team/kate.jpg" class="img-thumbnail" alt="Kate" />
                </a>
                <h5 class="name">
                  <a href="team-member.htm" title="View Kate's profile">Kate</a>
                </h5>
                <p class="role">Project Manager</p>
                <div class="social-media-branding social-media-branding-xs">
                  <!--@todo: replace with real social share links -->
                  <a href="#" class="social-link branding-twitter"><i class="fa fa-twitter-square"></i></a>
                  <a href="#" class="social-link branding-facebook"><i class="fa fa-facebook-square"></i></a>
                  <a href="#" class="social-link branding-linkedin"><i class="fa fa-linkedin-square"></i></a>
                  <a href="#" class="social-link branding-google-plus"><i class="fa fa-google-plus-square"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!--Customer testimonial-->
        <div class="block testimonials margin-top-large margin-bottom-large" id="testimonials">
          <h3 class="title-divider">
            <span>Highly <span class="de-em">Recommended</span></span>
            <small>99% of our customers recommend us!</small>
          </h3>
          <div class="row">
            <div class="col-md-4">
              <blockquote>
                <p>"It's totally awesome, we're could imagine life without it!"</p>
                <small>
                  <img src="img/team/jimi.jpg" alt="Jimi Bloggs" class="img-circle" />
                  Jimi Bloggs <span class="spacer">/</span> <a href="#">@mrjimi</a>
                </small>
              </blockquote>
            </div>
            <div class="col-md-4">
              <blockquote>
                <p>"10 out of 10, highly recommended!"</p>
                <small>
                  <img src="img/team/steve.jpg" alt="Jimi Bloggs" class="img-circle" />
                  Steve Bloggs <span class="spacer">/</span> <a href="#">Founder of Apple</a>
                </small>
              </blockquote>
            </div>
            <div class="col-md-4">
              <blockquote>
                <p>"Our productivity & sales are up! Couldn't be happier!"</p>
                <small>
                  <img src="img/team/adele.jpg" alt="Adele Bloggs" class="img-circle" />
                  Adele Bloggs <span class="spacer">/</span> <a href="#">@iamadele</a>
                </small>
              </blockquote>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@stop
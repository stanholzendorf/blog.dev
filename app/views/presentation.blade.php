@extends('layout.master')

@section('content')
<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{{ action('HomeController@welcomePage') }}}">Company X</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="{{{ action('HomeController@welcomePage') }}}">Home</a></li>
            <li class="active"><a href="{{{ action('HomeController@presentPage') }}}">Presentation</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

<div class="container">
	<div class="row well" id="well">
		<h3>The Lead-in!</h3>
		<p>The following list is prioritized according to how I develop applications/websites:</p>
		<ol>
			<li>Separation of concerns -<br>
			<p>I believe that without separating and prioritizing requirements one inevitable runs into problems down the road.</p>
			</li>
			<li>Maintainability -<br>
			<p>Ensuring that a site is structured well ans easily maintainable makes future additions and/or updates much easier.</p>
			</li>
			<li>Application/Site performance -<br>
			<p>Performance is part of the User-experience and the overall quality of the end product.</p>
			</li>
			<li>Rapid development -<br>
			<p>Of course timely delivery is important and not to be neglected, however not ensuring the above items first, the delivered product could potentially lack the desired results.</p>
			</li>
		</ol>
		<br>
		<br>
		<br>
		<h3>Analytical Skills!</h3>
		<p>An example of an existing high traffic web application that I think provides excellent usability for the user:</p>
		<ul>
			<li>The Google Search Engine and most of its suite in general. Google is used daily by millions of users worldwide and when it comes to usability it does not get much simple and straight forward as Google.</li>
			<li>Tumblr is another high traffic web app that in regards to usability is pretty easy to pick up</li>
			<li>And of course imgur, which I am using below.......</li>
		</ul>
		

		<br>
		<br>
		<br>
		<h3>Complete Function 1</h3>
		<p>
		Complete the function showHighlight() so that it returns a boolean. Return true if $requestedUrl is the same as $myUrl. Return true if $requestedUrl is located in the same section as $myUrl, but only if $myUrl is a landing page. Return true if $myUrl is the landing page of a parent section to $requestedUrl. Assume the variables $myUrl and $requestedUrl contain valid absolute URL paths as strings. Assume that a root, section, or subsection landing page always has "index.html" for its filename, and that any other page does not.
		</p>
		<blockquote class="imgur-embed-pub" lang="en" data-id="HXPfMq4"><a href="//imgur.com/HXPfMq4">View post on imgur.com</a></blockquote><script async src="//s.imgur.com/min/embed.js" charset="utf-8"></script>
		<br>
		<br>
		<h3>Complete Function 2</h3>
		<p>
		Complete the function getBreadcrumbNavigation() so that it returns a string of HTML code. Assume the variable $breadcrumbs contains an array of Webpage objects with valid values for its member variables. The returned HTML code should be an ordered list of links. The last entry in the array is the current page and should show the anchor text, but should not have an anchor tag around it.
		</p>
		<blockquote class="imgur-embed-pub" lang="en" data-id="WDCM3Ms"><a href="//imgur.com/WDCM3Ms">View post on imgur.com</a></blockquote><script async src="//s.imgur.com/min/embed.js" charset="utf-8"></script>
	</div>

</div>
 
 @stop



@section('bottom-script')
    
@stop
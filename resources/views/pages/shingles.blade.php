@extends('welcome')
@section('content')
@include('shingleslayout')
<!-- side bar end -->

<div id="content" class="content" style="height: auto !important;">
<div class="body_content">
    
    <h1>Buying Shingles</h1>
    <div>
        <ul id="navlist">
    	<li><a href="{{url('/shingles')}}" id="current">How to Buy Roofing Shingles</a></li>
    	<li><a href="{{url('/shinglesPrice')}}">Shingle Pricing</a></li>
    	<li><a href="{{url('/shinglesRating')}}">Shingle Ratings</a></li>
    	<li><a href="{{url('/shinglesReviews')}}">Shingle Reviews</a></li>
        </ul>
    </div>
    <p>
        Replacing a roof on an existing home or installing one on a new home isn't a project to be taken lightly. Homeowners 
        face a number of important decisions when deciding which <b>shingles to buy</b>. Budget, weather, appearance, and other 
        factors will influence the type of shingles you choose.
    </p>

    <h3>The Price of Shingles</h3>
    <p>
        To begin, you need to <a href="{{url('/measure/roof')}}">measure your roof</a>.
        Shingles are priced per square; a square is defined as 100 square feet. <a href="{{url('/shingles/asphalt')}}">Asphalt shingles</a>, 
        which consumers use the most, can cost from $50 to $150 per square. 
        The popular <a href="{{url('/shingles/tile')}}">clay tiles</a> that create a Mediterranean look run as much as $500 per 
        square, while concrete and <a href="{{url('/shingles/metal')}}">metal shingles</a> vary from about $100 to $600 per square. 
        At the top of the price list are <a href="{{url('/shingles/slate')}}">slate shingles</a>, 
        which may cost up to $1,000 per square. Keep in mind that these costs don't always include the expense 
        of removing the old roof or the labor involved in a professional installation.
        More information is available <a href="{{url('/shingles/pricing')}}">here</a>.
    </p>
    <h3>Considering Weather</h3>
    <p>
        Climate plays a big role in determining the type of roofing material you want. If you live in an area that experiences 
        varying seasons, you'll need to think about snow accumulation and moisture in the fall and winter months and sun exposure 
        in the summer. Snow and rain lead to mildew and rot if the wrong materials are used and solar heat will dry out shingles 
        and overheat the home unless its properly insulated. Also, many of the drier regions now require strict adherence to 
        fireproofing standards.  You'll want to consider <a href="{{url('/definitions/fire_ratings')}}">fire ratings</a> and
        <a href="{{url('/definitions/hail_ratings')}}">hail ratings</a> when selecting the best roofing materials.
    </p>
    <h3>The Appearance of your Roof</h3>
    <p>
        Aesthetics count for a lot when making roofing shingle choices. Although many consider it something of an afterthought, 
        the roof plays a major role in the home's appearance. Fortunately some of the more expensive materials, such as shakes, 
        now use substances manufactured to withstand extreme weather conditions and fire danger. Many builders and homeowners 
        are embracing these engineered imitations to keep costs down.
    </p>
    <p>
        If you're just replacing a few shingles (perhaps because of storm damage) you may want to consider the best way to
        <a href="{{url('/shingles/mismatching-shingles')}}">match new shingles to the old</a>.
    </p>
    <h3>Longevity</h3>
    <p>
        People in the US tend to move several times during their lives. For that reason they may choose to install a cheaper roof, 
        since they won't be around long enough to worry about replacing it. Of course a quality roof may add to the resale value 
        of the home. It's also important to note that better materials come with longer warranties.
    </p>
    <p>
        Other factors to consider when choosing roofing shingles include the slope of the roof and how much weight the house can 
        support. It's crucial for anyone thinking about a new roof to do their homework. Research the various types of shingles 
        online or in home improvement publications. You can also talk to a <a href="{{url('/choose-roofing-contractor')}}">trusted 
        roofing contractor</a> and seek advice from friends and neighbors that have gone through the process.
    </p>
    <div style="width:100%;text-align:center;">
<script id="mNCC" language="javascript">
    medianet_width = "600";
    medianet_height = "250";
    medianet_crid = "911555769";
    medianet_versionId = "3111299"; 
  </script>
<script src="//contextual.media.net/nmedianet.js?cid=8CU6B6W8F"></script><div id="1679861867891899714"><iframe id="_mN_main_1679861867891899714" marginwidth="0" marginheight="0" scrolling="NO" width="100%" height="250" frameborder="NO"></iframe></div>
</div>
</div> 
@endsection
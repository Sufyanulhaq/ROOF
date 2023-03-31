@extends('welcome')
@section('content')
@include('shingleslayout')

<div id="content" class="content">
<div class="body_content">
    
    <h1>Roll Roofing</h1>
    <p>
	Roll roofing is as an asphalt product which is available in a roll form. It is very popular because of its low
	cost when compared to other types of roofing materials. In addition, roll roofing requires little effort or
	technical skill to install. Lastly, another benefit of roll roofing is that only one layer is needed and the
	product will meet most roofing needs.
    </p>
 
    <h3>How Long Will Roll Roofing Last?</h3>
    <p>
	Roll roofing is durable and lasts for 6-12 years. The product is made from asphalt coated fiberglass or felt,
	which is the same material used in shingles.
    </p>
    <h3>Common Problems with Roll Roofing</h3>
    <p>
	Roll roofing material is very delicate and can be susceptible to extreme weather conditions. In very low
	temperatures, for example, the material may crack. In order to lay roll roofing when the temperature is cold, the
	material will need to first be warmed up. The best temperature for installation is at least 50 degrees.
    </p>
    <h3>Roll Roofing Ratings</h3>
    <p>
	Roll roofing is measured by the American Society for Testing &amp; Materials standard and has a rating of ASTM
	D6380. More information is available <a href="http://www.astm.org/Standards/D6380.htm">here</a>.
    </p>
    <h3>Popular Roll Roofing Brands</h3>
    <p>
	</p><ul>
	  <li><a href="{{url('/shingles/brands/owens-corning')}}">Owens Corning</a></li>
	  <li><a href="{{url('/shingles/brands/certainteed')}}">CertainTeed</a></li>
	  <li><a href="{{url('/shingles/brands/tamko')}}">Tamko</a></li>
	  <li><a href="{{url('/shingles/brands/atlas')}}">Atlas</a></li>
	  <li>Warrior Roofing</li>
	</ul>
    <p></p>
    <div style="width:100%;text-align:center;">
<script id="mNCC" language="javascript">
    medianet_width = "600";
    medianet_height = "250";
    medianet_crid = "911555769";
    medianet_versionId = "3111299"; 
  </script>
<script src="//contextual.media.net/nmedianet.js?cid=8CU6B6W8F"></script>
</div>
</div>
	
	    
	</div>

    @endsection
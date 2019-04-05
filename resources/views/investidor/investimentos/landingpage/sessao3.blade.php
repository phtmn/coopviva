<section class="section section-lg">
   
<div class="container">
   
        
      <div class="row d-flex justify-content-center ">
         @forelse($galerias as $g)

        <div class="col-xs-12 "><!--corpo-da-galeria-->
			    <div class="col-xs-12 hovereffect">
                <div>
              
                    <a href="{{$g->aws_url}}" data-fancybox="gallery" data-caption="{{$g->legenda}}" class="">
                            <img src = "{{$g->aws_url}}" class="img-fluid " alt = "" style="width:255px; height:255px;" />
                            
                    </a>
                </div>  
            </div>
        </div><!--//corpo-da-galeria-->
			{{--	<hr>  --}}
            {{--<div class="col-lg-3 col-md-4 col-xs-6 thumb"> --}}
                {{--<a class="thumbnail" href="#" data-image-id="" data-toggle="modal" data-title=""--}}
                   {{--data-image="{{$g->aws_url}}"  --}}
                   {{--data-target="#image-gallery"> --}}
                    {{--<img class="" style="width:300px; height:200px;"--}}
                        {{-- src="{{$g->aws_url}}" --}}
                         {{--alt="{{$g->legenda}}"> --}}
                {{--</a> --}}
            {{--</div> --}}
            @empty
            <p>não há fotos para exibir</p>
            @endforelse                  
  </div><!---/row--->
</div><!--/container-->


<script>
    $('[data-fancybox="gallery"]').fancybox({
    // Options will go here
    });
    $().fancybox({
    selector : '.imglist a:visible'
    }); 
</script>
</section>


@section('css')
<style>
.hovereffect {
width:100%;
height:100%;
float:left;
overflow:hidden;
position:relative;
text-align:center;
cursor:default;

}

.hovereffect .overlay {
width:100%;
height:100%;
position:absolute;
overflow:hidden;
top:0;
left:0;
opacity:0;
background-color:rgba(0,0,0,0.5);
-webkit-transition:all .4s ease-in-out;
transition:all .4s ease-in-out
}

.hovereffect img {
display:block;
/*position:relative;*/
-webkit-transition:all .4s linear;
transition:all .4s linear;
margin: 2px;
}

.hovereffect h2 {
text-transform:uppercase;
color:#fff;
text-align:center;
position:relative;
font-size:17px;
background:rgba(0,0,0,0.6);
-webkit-transform:translatey(-100px);
-ms-transform:translatey(-100px);
transform:translatey(-100px);
-webkit-transition:all .2s ease-in-out;
transition:all .2s ease-in-out;
padding:10px;
}

.hovereffect a.info {
text-decoration:none;
display:inline-block;
text-transform:uppercase;
color:#fff;
border:1px solid #fff;
background-color:transparent;
opacity:0;
filter:alpha(opacity=0);
-webkit-transition:all .2s ease-in-out;
transition:all .2s ease-in-out;
margin:50px 0 0;
padding:7px 14px;
}

.hovereffect a.info:hover {
box-shadow:0 0 5px #fff;
}

.hovereffect:hover img {
-ms-transform:scale(1.2);
-webkit-transform:scale(1.2);
transform:scale(1.2);
}

.hovereffect:hover .overlay {
opacity:1;
filter:alpha(opacity=100);
}

.hovereffect:hover h2,.hovereffect:hover a.info {
opacity:1;
filter:alpha(opacity=100);
-ms-transform:translatey(0);
-webkit-transform:translatey(0);
transform:translatey(0);
}

.hovereffect:hover a.info {
-webkit-transition-delay:.2s;
transition-delay:.2s;
}

</style>
<!--.:::::::carregamento-da-galleria::::::::.-->
<script src = "// code.jquery.com/jquery-3.2.1.min.js"> </script>
<script src = "jquery.fancybox.min.js"> </script>
@stop


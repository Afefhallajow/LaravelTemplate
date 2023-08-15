<div class="sidebar">
    <div class="navbar-header">
        <ul>
            <li ><a  href="{{url('/home')}}">
                    <span class="fa fa-home"></span>
                    <h3 class="brand-text"> لوحة التحكم</h3>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary" data-feather="disc" data-ticon="disc"></i></a></li>
        </ul>
    </div>


<div id="mainmenu">
<ul>
<li id="h">


    <a href="#home"><i class="fa fa-fw fa-home"></i> Home</a>
    <ul  class="br-menu" >
    <li>ad</li>
    <li>ss</li>
    </ul>

</li>
    <li id="h"><a href="#services"><i class="fa fa-fw fa-wrench"></i> Services</a>
    <ul  class="br-menu" >
        <li>



            <a href="#ddd"><i class="fa fa-fw fa-wrench"></i> asfs</a></li>
        <li>ss</li>
    </ul>


    </li><li ><a href="#clients"><i class="fa fa-fw fa-user"></i> Clients</a>
    </li><li><a href="#contact"><i class="fa fa-fw fa-envelope"></i> Contact</a>
    </li>
</ul>
</div>
</div>





@section('js')
<script>
        $(document).ready(function(){
            $("ul .br-menu ").css("display", "none");


        // $("ul li").click(function(){
        //     $("ul ul").slideUp();
        //     $(this).find('ul').slideToggle();
        // });
        $('ul #h').click(function () {
        $(this).siblings().find('ul').slideUp();
        $(this).find('ul').slideToggle();
    });

    });
</script>
<script >
    $(document).ready(function(e)  {
        $(document).on('click', '#menubutton', function(e)     {
     var a=document.getElementsByClassName('sidebar').item(0);
a.style.display="block";
            console.log("afasf");
        });


        $(document).click(function(e){
var width=$(window).width();
console.log(width)
           if(width<760){
            if ($(e.target).is('.sidebar,.sidebar *,#menubutton')) {
console.log("sid");
                return;
            }
            else
            {
                document.getElementsByClassName("sidebar").item(0).style.display = 'none';
            }}
        });
        });


</script>

@endsection


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$setting->website_name}}| {{$setting->business_tag}}</title>
    <link rel="icon" type="image/x-icon" href="{{url($setting->favicon)}}">

    <!-- Include Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('public/frontend/css/flaticon.css')}}">
    <link rel="stylesheet" href="https://www.abashonmela.pro/public/sites/css/owl.carousel.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Bengali:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/backend/plugins/toastr/toastr.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+Bengali:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css_v=2.3.css')}}">
    
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    
    <link href="{{asset('public/frontend/css/style.css')}}" rel="stylesheet">
</head>
<body>
    @include('frontend.include.header')
    
    @include('frontend.include.details_banner')

    @yield('content')

    @include('frontend.include.footer')











  
<!-- Include Bootstrap JS and jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{asset('public/backend/plugins/toastr/toastr.min.js')}}"></script>
<script src="https://www.abashonmela.pro/public/sites/js/owl.carousel.min.js"></script>
<script src="https://www.abashonmela.pro/public/sites/js/jquery.appear.js"></script>    
<script src="https://www.abashonmela.pro/public/sites/js/main.js?v=2.3"></script>
<script src="https://www.abashonmela.pro/public/sites/js/bootstrap.bundle.min.js"></script>
@yield('script')
<script>
    $('.openModal').click(function(){
        var id = $(this).attr('data-id');
        $.ajax({url:"doctorAppointment.php?id="+id,cache:false,success:function(result){
            $(".modal-content").html(result);
        }});
    });

    $(document).ready(function() {
        $('#submitbutton').prop("disabled",true);
  });


  

    </script>
    <script>
    $('.button').html((i, html) => {
        return '<span><i>' + $.trim(html).split('').join('</i><i>') + '</i></span>';
    });
    </script>
    <script>
        function myFunction() {
        var id = $('#category_id').val();
        $.ajax({
            url: "{{ url("/get-size-category/") }}/"+id,
            type: 'get',
            success: function(data) {
                
                    $('select[name="size_id"]').empty();
                    $.each(data, function(key,data){
                        $('select[name="size_id"]').append('<option value="'+ data.id +'">'+ data.size +'</option>');
                    });
                    $('#submitbutton').prop("disabled",false);
            }
            });
    }
</script>

<script>
    $(document).ready(function() {

        $("#owl-demo").owlCarousel({

            autoPlay: 3000, //Set AutoPlay to 3 seconds

            items : 4,
            itemsDesktop : [1199,3],
            itemsDesktopSmall : [979,3]

        });

        });
</script>

<script>
        @if(Session::has('messege'))
          var type="{{Session::get('alert-type','info')}}"
          switch(type){
              case 'info':
                   toastr.info("{{ Session::get('messege') }}");
                   break;
              case 'success':
                  toastr.success("{{ Session::get('messege') }}");
                  break;
              case 'warning':
                 toastr.warning("{{ Session::get('messege') }}");
                  break;
              case 'error':
                  toastr.error("{{ Session::get('messege') }}");
                  break;
                }
        @endif
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>
</html>
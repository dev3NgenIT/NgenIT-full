<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGen IT Corporate</title>
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;900&display=swap" rel="stylesheet">
    <!-- fontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <!-- slick slider -->
    <link rel="stylesheet" href="{{asset('assets/frontend/css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/slick-theme.css')}}">
    <!-- bootstrap link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <!-- css link -->
    
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">

</head>

<body>
    

    @yield('content')


    <!-- medium modal -->
    <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="justify-content: flex-end">
                    <button type="button" style="border:none; background:transparent" class="close" id="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="mediumBody">
                </div>
            </div>
        </div>
    </div>  


    
    <!-- bootstrap jsBundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- jquery cdn -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- slick slider -->

    <script src="{{asset('assets/frontend/js/slick.min.js')}}"></script>

    {{-- mobile nav --}}


    <!-- js link -->
    <script src="{{asset('frontend/js/main.js')}}"></script>
    <script src="{{asset('assets/frontend/js/main.js')}}"></script>

    <!--For Country and State-->
    <script>
                $(document).ready(function(){
                
                $('.dynamic').change(function(){
                if($(this).val() != '')
                {
                var select = $(this).attr("id");
                var value = $(this).val();
                var dependent = $(this).data('dependent');
                var _token = $('input[name="_token"]').val();
                $.ajax({
                    url:"{{ route('dynamicdependent.fetch') }}",
                    method:"POST",
                    data:{select:select, value:value, _token:_token, dependent:dependent},
                    success:function(result)
                    {
                    $('#'+dependent).html(result);
                    }
                
                })
                }
                });
                
                $('#country').change(function(){
                $('#state').val('');
                $('#city').val('');
                });
                
                $('#state').change(function(){
                $('#city').val('');
                });
                
                
                });
     </script>

    
<!--For Auto Submit -->
    <script>
        $('#search').on('keyup', function(){
            search();
        });
        // search();
        function search(){
            var keyword = $('#search').val();
            $.post('{{ route("product.search") }}',
            {
                _token: $('meta[name="csrf-token"]').attr('content'),
                keyword:keyword
            },
            function(data){
                table_post_row(data);
                console.log(data);
            });

            if(keyword == ''){
                $('td').css('display','none')
            }
        }

        
        // table row with ajax

        function table_post_row(res){
        let htmlView = '';
        if(res.sproducts.length <= 0){
            htmlView+= `
            <tr>
                <td colspan="4">No data.</td>
            </tr>`;
        }
        for(let i = 0; i < res.sproducts.length; i++){
            htmlView += `
                <tr>
                <td>`+ (i+1) +`</td>
                    <td>`+res.sproducts[i].title+`</td>
                </tr>`;
        }
            $('tbody').html(htmlView);
        }
    </script>
        
    </body>

</html>
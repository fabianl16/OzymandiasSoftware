@extends('layouts.app')
@section('content')
<div class="card card-body mx-auto text-center bg-claro">
    <!-- bradcam_area  -->
    <div class="bradcam_area bradcam_bg_5">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>@lang('Calculations')</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->
 <!--================Blog Area =================-->
 <section class="blog_area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    <div class="card card-calculation mx-auto text-left bg-blanco">
                        <article class="blog_item">
                            <form action="#">          
                                <div class="input-group-icon mt-10">
                                    <div class="icon"><i class="fa fa-bars" aria-hidden="true"></i></div>
                                    <div class="form-select" id="default-select">
                                        <select id="tank_select" class="nice-select">
                                            <option value="">Selecione tanque</option>
                                            @foreach ($tanks as $tank)           
                                            <option value="{{$tank->Tank_code}}">Tanque {{$tank->Tank_code}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="mt-10">
                                    <input type="text"  name="last_name" placeholder="Inserte TAN"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Inserte TAN'" required
                                        class="single-input" id="cc-TAN">
                                </div>
                                
                                <section class="button-area">
                                    <div class="container box_1170 border-top-generic">
                                        <div class="button-group-area">
                                            <button class="genric-btn primary-border e-large" id="calculatebtn">Calcular NH3 toxico</button>
                                            <button class="genric-btn danger-border e-large" id="registerbtn">Registrar calculo</button>

                                        </div>

                                    </div>
                                    <div class="form-select">                                       
                                        <div class="about_area">
                                            <h4>Nivel de Amoniaco no-ionizado (tóxico) NH3-N</h4>
                                            <div class="container">
                                                    <div class="col-lg-6">
                                                        <div class="about_info pl-10">
                                                            <div class="info_inner">
                                                                <div class="customer_info d-flex">
                                                                    <div class="single_info d-flex align-items-baseline">
                                                                        <span class="counter" id="resultado">00.00</span>
                                                                        
                                                                    </div>
                                                                </div>
                
                                                            </div>
                
                                                        </div>
                                                    </div>
                
                
                                            </div>
                                        </div>

                                    </div>
                                    
                                </section>
                            </form>
                        </article>
                        <div class="whole-wrap">
                            <div class="container box_1170">
                                <div class="section-top-border">
                                    <h3 class="mb-30">Rangos de amoniaco no-ionizado (tóxico) NH3-N</h3>
                                    <div class="progress-table-wrap">
                                        <div class="progress-table">
                                            <div class="table-head">
                                                <div class="serial">#</div>
                                                <div class="country">Toxicidad</div>
                                                <div class="visit">Rango</div>
                                                <div class="percentage">Peligrosidad</div>
                                            </div>
                                            <div class="table-row">
                                                <div class="serial">01</div>
                                                <div class="country"> <img src="img/elements/seguro.png" width="50" height="30">Seguro</div>
                                                <div class="visit">0.03</div>
                                                <div class="percentage">
                                                    <div class="progress">
                                                        <div class="progress-bar color-4" role="progressbar" style="width: 10%"
                                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table-row">
                                                <div class="serial">02</div>
                                                <div class="country"> <img src="img/elements/toxicidadcronica.png" width="50" height="30">Toxicidad cronica</div>
                                                <div class="visit">0.03-0.023</div>
                                                <div class="percentage">
                                                    <div class="progress">
                                                        <div class="progress-bar color-1" role="progressbar" style="width: 25%"
                                                            aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table-row">
                                                <div class="serial">03</div>
                                                <div class="country"> <img src="img/elements/toxicidadaguda.png" width="50" height="30">Toxicidad aguda</div>
                                                <div class="visit">0.023-0.4</div>
                                                <div class="percentage">
                                                    <div class="progress">
                                                        <div class="progress-bar color-3" role="progressbar" style="width: 55%"
                                                            aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table-row">
                                                <div class="serial">04</div>
                                                <div class="country"> <img src="img/elements/toxicidadletal.png" width="50" height="30">Toxicidad letal</div>
                                                <div class="visit">0.4</div>
                                                <div class="percentage">
                                                    <div class="progress">
                                                        <div class="progress-bar color-2" role="progressbar" style="width: 100%"
                                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget single_monitor">
                       <div class="our_facilitics_area facilites_page">
                           <div class="container">
                               <div class="row">

                            <div class="col-lg-4 col-md-6">
                        <div class="input-group mb-3">
                            <h3>@lang('Temperature')</h3>
                            <div class="about_area">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="about_info pl-10">
                                                <div class="info_inner">
                                                    <div class="customer_info d-flex">
                                                        <div class="single_info d-flex align-items-baseline">
                                                            <span class="counter" id="temperature">00.00</span>
                                                            <h2>C°</h2>
                                                        </div>
                                                    </div>
    
                                                </div>
    
                                            </div>
                                        </div>
    
                                    </div>
    
                                </div>
                            </div>
                            
                        </div>
                    </div>
                               </div>

                           </div>

                       </div>
                    </aside>
                    <aside class="single_sidebar_widget single_monitor">
                        <div class="our_facilitics_area facilites_page">
                            <div class="container">
                                <div class="row">
 
                             <div class="col-lg-4 col-md-6">
                         <div class="input-group mb-3">
                             <h3>@lang('Salinity')</h3>
                             <div class="about_area">
                                 <div class="container">
                                     <div class="row">
                                         <div class="col-lg-6">
                                             <div class="about_info pl-10">
                                                 <div class="info_inner">
                                                     <div class="customer_info d-flex">
                                                         <div class="single_info d-flex align-items-baseline">
                                                             <span class="counter" id="salinity">00.00</span>
                                                             <h2>PSU</h2>
                                                         </div>
                                                     </div>
     
                                                 </div>
     
                                             </div>
                                         </div>
     
                                     </div>
     
                                 </div>
                             </div>
                          
                             
                         </div>
                     </div>
                                </div>
 
                            </div>
 
                        </div>
                     </aside>
                     <aside class="single_sidebar_widget single_monitor">
                        <div class="our_facilitics_area facilites_page">
                            <div class="container">
                                <div class="row">
 
                             <div class="col-lg-4 col-md-6">
                         <div class="input-group mb-3">
                             <h3>@lang('PH')</h3>
                             <div class="about_area">
                                 <div class="container">
                                     <div class="row">
                                         <div class="col-lg-6">
                                             <div class="about_info pl-10">
                                                 <div class="info_inner">
                                                     <div class="customer_info d-flex">
                                                         <div class="single_info d-flex align-items-baseline">
                                                             <span class="counter" id="ph">00.00</span>
                                                             <h2>UM</h2>
                                                         </div>
                                                     </div>
     
                                                 </div>
     
                                             </div>
                                         </div>
     
                                     </div>
     
                                 </div>
                             </div>
                             
                             
                         </div>
                     </div>
                                </div>
 
                            </div>
 
                        </div>
                     </aside>

                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->
</div>



@endsection
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
<script>
    $( document ).ready(function() {

       //// debugger;
        $('#tank_select').change(function(){
            const tank_code = $(this).val();
            var sal = 0;
            var temp = 0;
            var ph = 0;
            var id =0;
            var amoniacoNoIonizado= 0;
            var TAN = 0;

            
            $.ajax({
                url: "/tank/getdata/"+tank_code,
                type: 'GET' ,
                success: function(response){
                  $('#ph').html(response.ph);
                  $('#salinity').html(response.salinity);
                  $('#temperature').html(response.temperature);
                  $('#date_time').html(response.date_time)
                  sal= response.salinity;
                  temp= response.temperature;
                  ph= response.ph;   
                  id= response.id;               
                }});  
        $('#calculatebtn').click(function (e) {
            e.preventDefault();
            var tan = $('#cc-TAN').val();
                  if (tan == '' || tan.type=='text'){
                    alert("Para iniciar calculo de amoniaco no ionizado del tanque seleccionado debe insertar el valor TAN del tanque");
                  return false;
                  }else{
                  var mol = (19.9273*sal/(1000-1.005109*sal));
                  var pka8 = (9.245+0.116*mol);
                  var elev= Math.pow(10,(pka8+0.0324*(298-temp-273)+0.0415*1.0/(temp+273)-ph));
                  var amonniaUnionized= (1/(1+elev));
                  var TotalAmoniaco= tan*amonniaUnionized;
                  var amoniacoIonizado= tan-TotalAmoniaco;
                  document.getElementById("resultado").innerHTML = TotalAmoniaco;
                  amoniacoNoIonizado= TotalAmoniaco;
                  TAN= tan;

                  }

        })

        $.ajaxSetup({

            headers: {

            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                    }

});

        $('#registerbtn').click(function (e) {
            e.preventDefault
            
            $.ajax({

            type:'POST',

            url:'ammonia/calculate',

            data:{ammonia: amoniacoNoIonizado, TAN:TAN, parameter_id:id},

            success:function(data){

            alert(data.success);

}

});



        })            
           

        })

});
</script>
@endpush
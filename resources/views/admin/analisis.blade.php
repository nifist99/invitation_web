@extends('crudbooster::admin_template')
@section('content')

@push('head')

@endpush

 <section class="content">
      <div class="container-fluid">
        <!--<h2 id="demo"></h2>-->
        <div class="row">
            <div class="col-sm-12">
                <div class="box box-info">
                 <div class="box-header">
                   <i class="fa fa-list"></i>
     
                   <h3 class="box-title">Analisis Pesan dan Pengunjung</h3>
                   <!-- tools box -->
                   <div class="pull-right box-tools">
                           <div class="btn-group">
                       <button type="button" class="btn btn-info">
                           @if($bulan_result !=null)
                           {{$bulan_result}}
                           @else
                           {{date('M')}}
                           @endif
                           
                           </button>
                       <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                         <span class="caret"></span>
                         <span class="sr-only">Toggle Dropdown</span>
                       </button>
                       
                       <ul class="dropdown-menu" role="menu">
                           <li><a href="{{CRUDBooster::mainpath('detail/'.$id)}}">Tampilkan Bulan Sekarang</a></li>
                         <li class="divider"></li>
                         @foreach($bulan as $row)
                         <li><a href="{{CRUDBooster::mainpath('detail/'.$id.'/?bulan='.$row['id'])}}">{{$row['bulan']}}</a></li>
                         @endforeach
                       </ul>
                     </div>
                   </div>
                   <!-- /. tools -->
                 </div>
                 <div class="box-body">
                     <canvas id="myChart_analisis" width="100%"></canvas>
                     </div>
                     </div>
                     </div>
                     
      
            
</div>
</div>
</section>
@push('bottom')
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.0/dist/chart.min.js"></script>
<script>
    var ctx_analisis = document.getElementById('myChart_analisis').getContext('2d');
    var myChart_analisis = new Chart(ctx_analisis, {
    type: 'bar',
    data: {
        labels: [@php echo $hari; @endphp],
        datasets: [{
            label: '# Pesan',
            data: [{{$pesan}}],
            backgroundColor:'#F6A9A9',
            borderColor:'#F6A9A9',
            borderWidth: 1
        },{
            label: '# Pengunjung',
            data: [{{$pengunjung}}],
            backgroundColor:'#FFBF86',
            borderColor:'#FFBF86',
            borderWidth: 1
        }
        ],
        
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
</script>
@endpush

@endsection
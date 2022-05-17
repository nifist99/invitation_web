<!-- First you need to extend the CB layout -->
@extends('crudbooster::admin_template')
@section('content')
<!-- Your custom  HTML goes here -->
@push('head')
<style>
    .card-undangan{
    box-shadow: -1px 3px 32px -10px rgba(33,33,33,0.39);
    -webkit-box-shadow: -1px 3px 32px -10px rgba(33,33,33,0.39);
    -moz-box-shadow: -1px 3px 32px -10px rgba(33,33,33,0.39);
    color: white;
    padding: 10px;
    height:auto;
    width: 90%;
    border-radius: 10px;
    background-color: white;
    }
    .font-p{
        color: black;
    }
    .font-label{
        color: rgb(255, 195, 105);
        font-size: 14px;
    }

@media (max-width: 740px) {

.card-undangan{
  width: 100%;

}

}
</style>
@endpush

@if(count($result)!=0)
<div class="container">
    <div class="row">
        @foreach($result as $key)
        <div class="col-md-6 col-sm-12" style="margin-top: 20px">
            <div class="card-undangan">
                <div class='form-group'>
                    <label class="font-label">Nama</label>
                    <div>
                        <p class="font-p">{{$key->nama}}</p>
                    </div>

                    <label class="font-label">Tema</label>
                    <div>
                        <p class="font-p">{{$key->tema}}</p>
                    </div>

                    <label class="font-label">Music</label>
                    <div>
                        <p class="font-p">{{$key->music}}</p>
                    </div>

                    <label class="font-label">Status</label>
                    <div>
                        <p class="font-p">{{$key->status}}</p>
                    </div>

                    <label class="font-label">Url</label>
                    <div>
                        <a href="{{url('wedding/'.$key->url_web)}}" target="_blank">{{url('wedding/'.$key->url_web)}}</a>
                    </div>

                  </div>
                  <hr>
                  @php
                   $url=url('admin/day_wedding'); 
                   $url_sub='&parent_table=day_wedding&parent_columns=nama&parent_columns_alias=&parent_id='.$key->id.'&foreign_key=id_day_wedding';
                  @endphp
                  <div>
                    <a href="{{url('/admin/day_wedding_pesan?return_url='.$url.'/'.$url_sub)}}" class="btn btn-sm btn-danger"><i class="fa fa-envelope"></i> Pesan Online</a>
                    <a href="{{url('/admin/day_wedding_tamu?return_url='.$url.'/'.$url_sub)}}" class="btn btn-success btn-sm"><i class="fa fa-users"></i> Tamu Undangan</a>
                    <a href="{{url('/admin/day_gift?return_url='.$url.'/'.$url_sub)}}" class="btn btn-info btn-sm"><i class="fa fa-list"></i> kondangan online</a>
                    <a href="{{CRUDBooster::mainpath('detail/'.$key->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-bar-chart"></i> Analisis</a>
                  </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@else
<div class="container">
    <h3 style="color: black">Silahkan hubungi admin untuk melakukan activasi undangan wedding wa :088223348715</h3>
</div>

@endif
@endsection
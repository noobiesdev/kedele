@extends('layouts.main')

@section('title', "Kontak")

@section('content')
    <div class="container-fluid">

      <div class="row heading-bg">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
          <h4 class="txt-dark">Kontak</h4>
        </div>
        <!-- Breadcrumb -->
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
          <ol class="breadcrumb">
          <li><a href="{{route('dashboard')}}">Dasbor</a></li>
          <li><a href="#">Desain</a></li>
          <li><a href="#">Website</a></li>
          <li class="active"><span>Kontak</span></li>
          </ol>
        </div>
        <!-- /Breadcrumb -->
      </div>

      <!-- Row -->

      <div class="col-md-9">
				<div class="panel panel-default card-view">
					<div class="panel-wrapper collapse in">
						<div class="panel-body">
							<div class="row">
								<div class="col-sm-12 col-xs-12">
									<div class="form-wrap">
                    <form class="form-horizontal" method="POST" action="{{ route('website.update') }}" autocomplete="off">
                      @csrf
                      <div class="form-group">
                        <label class="control-label mb-10" for="fb">Whatsapp</label>
                        <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-whatsapp"></i> </div>
                          <input type="text" name="whatsapp" class="form-control" id="fb" placeholder="Whatsapp" value="{{$usaha['whatsapp']}}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label mb-10" for="fb">Facebook</label>
                        <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-facebook"></i> </div>
                          <input type="text" name="facebook" class="form-control" id="fb" placeholder="Facebook" value="{{$usaha['facebook']}}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label mb-10" for="ig">Instagram</label>
                        <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-instagram"></i> </div>
                          <input type="text" name="instagram" class="form-control" id="ig" placeholder="Id Instagram" value="{{$usaha['instagram']}}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label mb-10" for="tw">Twitter</label>
                        <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-twitter"></i> </div>
                          <input type="text" name="twitter" class="form-control" id="tw" placeholder="Twitter" value="{{$usaha['twitter']}}">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label mb-10" for="other">Marketplace</label>
                        <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-shopping-bag"></i> </div>
                          <input type="text" name="marketplace" class="form-control" id="other" placeholder="URL/ Link toko online" value="{{$usaha['marketplace']}}">
                        </div>
                      </div>
                      <div class="form-group mb-0">
                          <button type="submit" class="btn btn-success ">Simpan</button>
                      </div>
                    </form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
      <!-- /Row -->
@endsection

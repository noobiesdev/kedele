@extends('layouts.usaha.basic')

@section('title'){{$usaha->nama}}@endsection

@section('css')
<style media="screen">
  :root {
    --primer: #27ae60;
    --sekunder: #ffffff;
  }
</style>
<link href="{{ asset('main/css/style.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('content')

<!-- Header -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full" bgcolor="#1d3650" style="background-color: rgb(29, 54, 80);">
	<tr>
		<td align="center" style="background-image: url('{{ asset(`template-usaha/basic/images/header_bg.jpg`) }}'); background-position: center top; background-repeat:no-preat!important; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; background-position: center center; background-repeat: no-repeat;" id="BGheaderChange">
			<!-- Wrapper -->
			<table class="mobile" align="center" border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td align="center">

						<!-- Nav Mobile Wrapper -->
						<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" align="center">

									<!-- SORTABLE -->
									<div class="sortable_inner ui-sortable">

									<!-- Start Nav -->
									<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full" object="drag-module-small">
										<tr>
											<td width="100%" valign="middle" align="center" class="logo">

												<!-- Logo -->
												<table width="120" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
													<tr>
														<td height="62" valign="middle" align="center" width="100%" class="fullCenter" style="line-height: 1px;" >
															<a href="#" style="text-decoration: none;">
																<img src="{{ asset('assets/logo_emblem.png') }}" width="65" alt="" border="0"  class="hover">
															</a>
														</td>
													</tr>
												</table>
												<!-- Buy Now -->
												<table width="100" border="0" cellpadding="0" cellspacing="0" align="right" style="text-align: right; font-size: 13px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
													<tr>
														<td width="100%" height="0" style="font-size: 1px; line-height: 1px;" class="h20">&nbsp;</td>
													</tr>
													<tr>
														<td height="70" valign="middle" width="100%"  style="font-family: Helvetica, Arial, sans-serif; color: var(--primer); text-transform: uppercase;">
															<span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;"><a href="#" style="text-decoration: none; color: var(--primer);" class="underline">Buy Now!</a></span>
														</td>
													</tr>
												</table>

												<!-- Nav -->
												<table width="340" border="0" cellpadding="0" cellspacing="0" align="right" style="text-align: right; font-size: 13px; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
													<tr>
														<td width="100%" height="0" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td height="70" valign="middle" width="100%"  style="font-family: Helvetica, Arial, sans-serif; color: rgb(255, 255, 255); text-transform: uppercase;"class="h40">
														</td>
													</tr>
												</table>

											</td>
										</tr>
										<tr>
											<td width="100%" height="10">
											</td>
										</tr>
									</table>
									<!-- End Nav -->

									</div>


									<!-- SORTABLE -->
									<div class="sortable_inner ui-sortable">

									<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full" align="center" border="0" width="100%" cellpadding="0" cellspacing="0" object="drag-module-small">
										<tr>
											<td height="30" width="100%">
											</td>
										</tr>
									</table><!-- End Space -->

									<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full" align="center" border="0" width="100%" cellpadding="0" cellspacing="0" object="drag-module-small">
										<tr>
											<td height="40" width="100%">
											</td>
										</tr>
									</table><!-- End Space -->
									<!-- Text -->
									<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="mobile" border="0" width="600" cellpadding="0" cellspacing="0" object="drag-module-small">
										<tr>
											<td align="center" width="100%" style="font-size: 40px; color: rgb(255, 255, 255); text-align: center; font-family: Helvetica, Arial, sans-serif; font-weight: bold; vertical-align: top;" class="font32">
														<span style="color: var(--primer); font-weight: bold;" class="font36">
															<span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight:normal; word-break: break-word;">
																{!!$usaha->website->judul_jumbotron!!}
															</span>
														</span>
														<span style="color: rgb(255, 255, 255); font-weight: 100;" class="font36">
															<span style="font-family: 'proxima_novalight', Helvetica; font-weight:normal; word-break: break-word;">
																<br class="erase">
																{!!$usaha->website->teks_jumbotron!!}
															</span>
														</span>
											</td>
										</tr>
									</table>

									<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="mobile" border="0" width="600" cellpadding="0" cellspacing="0" object="drag-module-small">
										<tr>
											<td height="60" width="100%"></td>
										</tr>
									</table>

									<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter" object="drag-module-small">
										<tr>
											<td width="100%" align="center">

												<!-- Centered Buttons -->
												<table border="0" cellpadding="0" cellspacing="0" align="center" class="mcenter">
												<!--[if mso]><v:shape><table width="58%" border="0" cellpadding="0" cellspacing="0" align="center""></v:shape><![endif]-->
													<tr>
														<td width="100%" align="center">


															<table border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; margin-right: 13px;" class="mcenter">
																<tr>
																	<td width="100%" align="center">

																		<table border="0" cellpadding="0" cellspacing="0" align="left" class="mcenter">
																			<tr>
																				<td align="right" height="38" bgcolor="var(--primer)"style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; padding-left: 20px; padding-right: 20px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; color: rgb(255, 255, 255); text-transform: uppercase; background-color: var(--primer);">

																					<span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;">
																						<a href="#produk" class="btn" style="color: rgb(255, 255, 255); font-size: 12px; text-decoration: none; line-height: 30px; width: 100%;"class="underline">Produk</a>
																					</span>
																				</td>
																			</tr>
																		</table>

																	</td>
																</tr>
																<tr>
																	<td height="0" class="h20" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
																</tr>
															</table>


															<table border="0" cellpadding="0" cellspacing="0" align="right" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; margin-left: 13px;" class="mcenter">
																<tr>
																	<td width="auto" align="center">

																		<table border="0" cellpadding="0" cellspacing="0" align="right" style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; padding-left: 20px; padding-right: 20px; border: 2px solid rgb(255, 255, 255); color: rgb(255, 255, 255);">
																			<tr>
																				<td width="auto" align="center" height="34" style="font-weight: bold; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase; color: rgb(255, 255, 255);">
																					<span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;">
																						<a href="#" data-toggle="modal" class="btn" data-target=".modal-detail" style="color: rgb(255, 255, 255); font-size: 12px; text-decoration: none; line-height: 30px; width: 100%;" class="underline">Detail</a>
																					</span>
																				</td>
																			</tr>
																		</table>
                                    @include('usaha.basic.detail')

																	</td>
																</tr>
															</table>

														</td>
													</tr>
												</table><!-- End 2 Buttons -->

											</td>
										</tr>
									</table>

									<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full" align="center" border="0" width="100%" cellpadding="0" cellspacing="0" object="drag-module-small">
										<tr>
											<td height="50" width="100%">
											</td>
										</tr>
									</table><!-- End Space -->

									<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full" align="center" border="0" width="100%" cellpadding="0" cellspacing="0" object="drag-module-small">
										<tr>
											<td height="50" width="100%">
											</td>
										</tr>
									</table><!-- End Space -->

									</div><!-- End SORTABLE -->

								</td>
							</tr>
						</table>

					</td>
				</tr>
			</table><!-- End Wrapper -->

		</div>
		</td>
	</tr>
</table>
<!-- Header End -->

<div class="container">
    <div class="row row-grid align-items-center my-md">
      <div class="col">
        abc
      </div>
      <div class="col">
        abc
      </div>
    </div>
</div>


<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full" bgcolor="#f3f5f9" style="background-color: rgb(243, 245, 249);">
	<tr>
		<td width="100%" align="center">


			<!-- Wrapper -->
			<table class="mobile" align="center" border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td align="center">

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full">
							<tr>
								<td width="100%" height="50"></td>
							</tr>
						</table><!-- End Space -->

						<!-- Wrapper -->
						<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" align="center" valign="top">

									<!-- Headline -->
									<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;" class="fullCenter">
										<tr>
											<td valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 22px; color: rgb(1, 1, 1); line-height: 26px; font-weight: normal;"class="fullCenter" >
												<span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;">Our Sponsors</span>
											</td>
										</tr>
										<tr>
											<td width="100%" height="55" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
									</table>

									<table width="296" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="sponsor100">
										<tr>
											<td width="50%" style="text-align: center;" valign="top">

												<table border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="sponsor100">
													<tr>
														<td valign="top" align="center">

															<table width="100" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
																<tr>
																	<td width="100" align="center" class="image100" >
																		<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/sponsor_100px_1.png') }}" width="100" alt="" border="0" class="hover" ></a>
																	</td>
																</tr>
															</table>

														</td>
													</tr>
												</table>

											</td>
											<td width="50%" style="text-align: center;" valign="top" align="center">

												<table border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="sponsor100">
													<tr>
														<td valign="top" align="center">

															<table width="100" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
																<tr>
																	<td width="100" align="center" class="image100" >
																		<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/sponsor_100px_2.png') }}" width="100" alt="" border="0" class="hover" ></a>
																	</td>
																</tr>
															</table>

														</td>
													</tr>
												</table>

											</td>
										</tr>
									</table>

									<!-- Space -->
									<table width="1" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full">
										<tr>
											<td width="100%" height="40" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
									</table><!-- End Space -->

									<table width="296" border="0" cellpadding="0" cellspacing="0" align="right" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="sponsor100">
										<tr>
											<td width="50%" style="text-align: center;" valign="top">

												<table border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="sponsor100">
													<tr>
														<td valign="top" align="center">

															<table width="100" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
																<tr>
																	<td width="100" align="center" class="image100" >
																		<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/sponsor_100px_3.png') }}" width="100" alt="" border="0" class="hover" ></a>
																	</td>
																</tr>
															</table>

														</td>
													</tr>
												</table>

											</td>
											<td width="50%" style="text-align: center;" valign="top" align="center">

												<table border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="sponsor100">
													<tr>
														<td valign="top" align="center">

															<table width="100" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
																<tr>
																	<td width="100" align="center" class="image100" >
																		<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/sponsor_100px_4.png') }}" width="100" alt="" border="0" class="hover" ></a>
																	</td>
																</tr>
															</table>

														</td>
													</tr>
												</table>

											</td>
										</tr>
									</table>

								</td>
							</tr>
						</table><!-- End Wrapper 2 -->

						<!-- Space -->
						<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="65"></td>
							</tr>
						</table><!-- End Space -->

					</td>
				</tr>
			</table><!-- End Wrapper -->

		</div>
		</td>
	</tr>
</table>

<!-- Seperator 1 -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full" bgcolor="var(--primer)" style="background-color: var(--primer);">
	<tr>
		<td align="center" style="background-image: url('images/seperator1.jpg'); background-position: center top; background-repeat:no-preat!important; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; background-position: center center; background-repeat: no-repeat;" id="sep1">
			<!-- Wrapper -->
			<table class="mobile" align="center" border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td align="center">

						<!-- Wrapper -->
						<table class="full" align="center" border="0" width="600" cellpadding="0" cellspacing="0">
							<tr>
								<td width="100%" align="center">

									<!-- Text -->
									<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="mobile" border="0" width="600" cellpadding="0" cellspacing="0" align="center">
										<tr>
											<td height="60" width="100%" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
										<tr>
											<td width="100" align="center" class="image80">
												<table width="100" border="0" cellpadding="0" cellspacing="0" align="center">
													<tr>
														<td width="100" height="auto" style="text-align: center;"  align="center"><a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/image_80px_1.png') }}" width="80" alt="" border="0"  class="hover"></a>
														</td>
													</tr>
												</table>
											</td>
										</tr>
										<tr>
											<td width="100%" height="30" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
										<tr>
											<td valign="top" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 20px; color: rgb(255, 255, 255); line-height: 26px; font-weight: bold;"class="fullCenter" >
												<span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;">
													{{$usaha->user->nama}}
												</span>
											</td>
										</tr>
										<tr>
											<div class="d-flex justify-content-center">
                         <div class="p-2 bd-highlight">
                           <i class="fa fa-whatsapp"></i>
                         </div>
                         <div class="p-2 bd-highlight">
                           <i class="fa fa-facebook"></i>
                         </div>
                         <div class="p-2 bd-highlight">
                           <i class="fa fa-instagram"></i>
                         </div>
                         <div class="p-2 bd-highlight">
                           <i class="fa fa-twitter"></i>
                         </div>
                         <div class="p-2 bd-highlight">
                           <i class="fa fa-shopping-bag"></i>
                         </div>
                      </div>
										</tr>
										<tr>
											<td height="40" width="100%" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>

										<tr>
											<td width="auto" align="center">

												<table border="0" cellpadding="0" cellspacing="0" align="center" style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; padding-left: 20px; padding-right: 20px; border: 2px solid rgb(255, 255, 255); color: rgb(255, 255, 255);">
													<tr>
														<td width="auto" align="center" height="35" style="font-weight: bold; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase; color: rgb(255, 255, 255);">
															<span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;">
																<a href="#" style="color: rgb(255, 255, 255); font-size: 12px; text-decoration: none; line-height: 30px; width: 100%;" class="underline">About me</a>
															</span>
														</td>
													</tr>
												</table>

											</td>
										</tr>
										<!----------------- End Button Center ----------------->
										<tr>
											<td height="60" width="100%" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
									</table>

								</td>
							</tr>
						</table>

					</td>
				</tr>
			</table><!-- End Wrapper -->

		</div>
		</td>
	</tr>
</table>
<!-- Seperator 1 End -->

<!-- Wrapper 2 -->
<!-- <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full"  bgcolor="#ffffff"style="background-color: rgb(255, 255, 255);">
	<tr>
		<td width="100%" valign="top" align="center">

			<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile">
				<tr>
					<td align="center">

						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="30" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
							</tr>
						</table>

					</td>
				</tr>
			</table>

		</div>
		</td>
	</tr>
</table> -->


<!-- Wrapper 2 -->

<!-- Wrapper 2 -->
<!-- <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full"  bgcolor="#f3f5f9"style="background-color: rgb(243, 245, 249);"> -->
	<tr>
		<td width="100%" valign="top" align="center">


			<!-- Wrapper -->
			<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile">
				<tr>
					<td align="center">

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="45"></td>
							</tr>
						</table><!-- End Space -->

					</td>
				</tr>
			</table><!-- End Wrapper -->

		</div>
		</td>
	</tr>
</table><!-- Wrapper 2 -->
<!-- Wrapper 3 -->
<!-- <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full" bgcolor="#f3f5f9" style="background-color: rgb(243, 245, 249);"> -->
	<tr>
		<td width="100%" align="center">


			<!-- Wrapper -->
			<table class="mobile" align="center" border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td align="center">

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full">
							<tr>
								<td width="100%" height="50"></td>
							</tr>
						</table><!-- End Space -->

						<!-- Wrapper -->
						<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" align="center" valign="top">

									<table width="296" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="sponsor100">
										<tr>
											<td width="50%" style="text-align: center;" valign="top">

												<table border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="sponsor100">
													<tr>
														<td valign="top" align="center">

															<table border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
																<tr>
																	<td width="50" align="center" class="image50">
																		<a href="#" style="text-decoration: none;" id="rotator"><img src="{{ asset('template-usaha/basic/images/icon_50px_3.png') }}" width="50" alt="" border="0" ></a>
																	</td>
																</tr>
															</table>

														</td>
													</tr>
													<tr>
														<td width="100%" height="20" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td valign="middle" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 30px; color: rgb(1, 1, 1); line-height: 18px; text-transform: uppercase;" class="fullCenter">
															<span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;">98</span>
														</td>
													</tr>
													<tr>
														<td width="100%" height="15" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td valign="middle" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 12px; color: rgb(1, 1, 1); line-height: 18px; text-transform: uppercase;" class="fullCenter">
															<span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;">PROJECTS FINISHED</span>
														</td>
													</tr>
												</table>

											</td>
											<td width="50%" style="text-align: center;" valign="top" align="center">

												<table border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="sponsor100">
													<tr>
														<td valign="top" align="center">

															<table border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
																<tr>
																	<td width="50" align="center" class="image50">
																		<a href="#" style="text-decoration: none;" id="rotator"><img src="{{ asset('template-usaha/basic/images/icon_50px_4.png') }}" width="50" alt="" border="0" ></a>
																	</td>
																</tr>
															</table>

														</td>
													</tr>
													<tr>
														<td width="100%" height="20" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td valign="middle" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 30px; color: rgb(1, 1, 1); line-height: 18px; text-transform: uppercase;" class="fullCenter">
															<span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;">23</span>
														</td>
													</tr>
													<tr>
														<td width="100%" height="15" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td valign="middle" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 12px; color: rgb(1, 1, 1); line-height: 18px; text-transform: uppercase;" class="fullCenter">
															<span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;">cups of coffee</span>
														</td>
													</tr>
												</table>

											</td>
										</tr>
									</table>

									<!-- Space -->
									<table width="1" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full">
										<tr>
											<td width="100%" height="40" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
									</table><!-- End Space -->

									<table width="296" border="0" cellpadding="0" cellspacing="0" align="right" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="sponsor100">
										<tr>
											<td width="50%" style="text-align: center;" valign="top" align="center">

												<table border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="sponsor100">
													<tr>
														<td valign="top" align="center">

															<table border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
																<tr>
																	<td width="50" align="center" class="image50">
																		<a href="#" style="text-decoration: none;" id="rotator"><img src="{{ asset('template-usaha/basic/images/icon_50px_5.png') }}" width="50" alt="" border="0" ></a>
																	</td>
																</tr>
															</table>

														</td>
													</tr>
													<tr>
														<td width="100%" height="20" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td valign="middle" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 30px; color: rgb(1, 1, 1); line-height: 18px; text-transform: uppercase;" class="fullCenter">
															<span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;">87</span>
														</td>
													</tr>
													<tr>
														<td width="100%" height="15" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td valign="middle" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 12px; color: rgb(1, 1, 1); line-height: 18px; text-transform: uppercase;" class="fullCenter">
															<span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;">awards won</span>
														</td>
													</tr>
												</table>

											</td>
											<td width="50%" style="text-align: center;" valign="top" align="center">

												<table border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="sponsor100">
													<tr>
														<td valign="top" align="center">

															<table border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
																<tr>
																	<td width="50" align="center" class="image50">
																		<a href="#" style="text-decoration: none;" id="rotator"><img src="{{ asset('template-usaha/basic/images/icon_50px_6.png') }}" width="50" alt="" border="0" ></a>
																	</td>
																</tr>
															</table>

														</td>
													</tr>
													<tr>
														<td width="100%" height="20" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td valign="middle" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 30px; color: rgb(1, 1, 1); line-height: 18px; text-transform: uppercase;" class="fullCenter">
															<span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;">99</span>
														</td>
													</tr>
													<tr>
														<td width="100%" height="15" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td valign="middle" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 12px; color: rgb(1, 1, 1); line-height: 18px; text-transform: uppercase;" class="fullCenter">
															<span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;">happy customers</span>
														</td>
													</tr>
												</table>

											</td>
										</tr>
									</table>

								</td>
							</tr>
						</table><!-- End Wrapper 2 -->

						<!-- Space -->
						<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="50"></td>
							</tr>
						</table><!-- End Space -->

					</td>
				</tr>
			</table><!-- End Wrapper -->

		</div>
		</td>
	</tr>
</table>



<!-- Wrapper 5 (4 images top) -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full" >
	<tr>
		<td width="100%" valign="top" bgcolor="#1d3650"style="background-color: rgb(29, 54, 80);">


			<!-- Wrapper -->
			<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
				<tr>
					<td>

						<!-- Wrapper -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="left" class="full">
							<tr>
								<td width="100%" class="image100Scale">

									<!-- 4x Images Top -->
									<table width="49%" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; width: 50%;" class="fullCenter">
										<tr>
											<td width="25%" style="line-height: 1px; background-color: rgb(29, 54, 80);" bgcolor="#1d3650" class="image100Scale">
												<a href="#" style="text-decoration: none;" class="opacity"><img src="{{ asset('template-usaha/basic/images/image_225px_1.jpg') }}" alt="" border="0" width="25%" height="auto" style="width: 25%; height: auto;" class="hover" ></a>
											</td>
											<td width="25%" style="line-height: 1px; background-color: rgb(29, 54, 80);" bgcolor="#1d3650" class="image100Scale">
												<a href="#" style="text-decoration: none;" class="opacity"><img src="{{ asset('template-usaha/basic/images/image_225px_2.jpg') }}" alt="" border="0" width="25%" height="auto" style="width: 25%; height: auto;" class="hover" ></a>
											</td>
										</tr>
									</table>

									<table width="49%" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; width: 50%;" class="fullCenter">
											<tr><td width="25%" style="line-height: 1px; background-color: rgb(29, 54, 80);" bgcolor="#1d3650" class="image100Scale">
												<a href="#" style="text-decoration: none;" class="opacity"><img src="{{ asset('template-usaha/basic/images/image_225px_3.jpg') }}" alt="" border="0" width="25%" height="auto" style="width: 25%; height: auto;" class="hover" ></a>
											</td>
											<td width="25%" style="line-height: 1px; background-color: rgb(29, 54, 80);" bgcolor="#1d3650" class="image100Scale">
												<a href="#" style="text-decoration: none;" class="opacity"><img src="{{ asset('template-usaha/basic/images/image_225px_4.jpg') }}" alt="" border="0" width="25%" height="auto" style="width: 25%; height: auto;" class="hover" ></a>
											</td>
										</tr>
									</table>

								</td>
							</tr>
						</table><!-- End Wrapper 2 -->

					</td>
				</tr>
			</table><!-- End Wrapper -->

		</div>
		</td>
	</tr>
</table><!-- Wrapper 5 -->


<!-- Wrapper 5 (4 images top) -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full" >
	<tr>
		<td width="100%" valign="top" bgcolor="#1d3650"style="background-color: rgb(29, 54, 80);">


			<!-- Wrapper -->
			<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
				<tr>
					<td>

						<!-- Wrapper -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="left" class="full">
							<tr>
								<td width="100%" class="image100Scale">

									<!-- 4x Images Top -->
									<table width="49%" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; width: 50%;" class="fullCenter">
										<tr>
											<td width="25%" style="line-height: 1px; background-color: rgb(29, 54, 80);" bgcolor="#1d3650" class="image100Scale">
												<a href="#" style="text-decoration: none;" class="opacity"><img src="{{ asset('template-usaha/basic/images/image_225px_5.jpg') }}" alt="" border="0" width="25%" height="auto" style="width: 25%; height: auto;" class="hover" ></a>
											</td>
											<td width="25%" style="line-height: 1px; background-color: rgb(29, 54, 80);" bgcolor="#1d3650" class="image100Scale">
												<a href="#" style="text-decoration: none;" class="opacity"><img src="{{ asset('template-usaha/basic/images/image_225px_6.jpg') }}" alt="" border="0" width="25%" height="auto" style="width: 25%; height: auto;" class="hover" ></a>
											</td>
										</tr>
									</table>

									<table width="49%" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; width: 50%;" class="fullCenter">
											<tr><td width="25%" style="line-height: 1px; background-color: rgb(29, 54, 80);" bgcolor="#1d3650" class="image100Scale">
												<a href="#" style="text-decoration: none;" class="opacity"><img src="{{ asset('template-usaha/basic/images/image_225px_7.jpg') }}" alt="" border="0" width="25%" height="auto" style="width: 25%; height: auto;" class="hover" ></a>
											</td>
											<td width="25%" style="line-height: 1px; background-color: rgb(29, 54, 80);" bgcolor="#1d3650" class="image100Scale">
												<a href="#" style="text-decoration: none;" class="opacity"><img src="{{ asset('template-usaha/basic/images/image_225px_8.jpg') }}" alt="" border="0" width="25%" height="auto" style="width: 25%; height: auto;" class="hover" ></a>
											</td>
										</tr>
									</table>

								</td>
							</tr>
						</table><!-- End Wrapper 2 -->

					</td>
				</tr>
			</table><!-- End Wrapper -->

		</div>
		</td>
	</tr>
</table><!-- Wrapper 5 -->
@endsection

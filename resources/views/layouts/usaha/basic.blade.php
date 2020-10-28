<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
	<title>@yield('title')</title>
	@include('layouts.favicon')
	<link href="{{ asset('main/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('template-usaha/basic/basic.css') }}" rel="stylesheet" type="text/css"/>
	@yield('css')
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" yahoo="fix">
<div class="ui-sortable" id="sort_them">

@yield('content')

<!-- Footer -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full" bgcolor="#1d3650" style="background-color: rgb(29, 54, 80);">
	<tr>
		<td align="center" valign="top">


			<!-- Wrapper -->
			<table class="mobile" align="center" border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td>

						<!-- Wrapper -->
						<table class="full" align="center" border="0" width="600" cellpadding="0" cellspacing="0">
							<tr>
								<td width="100%">

									<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full" align="center" border="0" width="100%" cellpadding="0" cellspacing="0">
										<tr>
											<td height="25" width="100%">
											</td>
										</tr>
									</table>

									<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full" align="center" border="0" width="100%" cellpadding="0" cellspacing="0">
										<tr>
											<td style="font-size: 13px; color: rgb(255, 255, 255); font-family: Helvetica, Arial, sans-serif; line-height: 22px; vertical-align: top; font-weight: normal;" align="center" width="100%">

													<span style="font-family: 'proxima_nova_rgregular', Helvetica;">
														Copyright © 2015

														<span style="color: var(--primer);">
															RocketWay</span>.
															All Rights Reserved.


													</span>

											</td>
										</tr>
									</table>

									<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full" align="center" border="0" width="100%" cellpadding="0" cellspacing="0">
										<tr>
											<td height="25" width="100%"></td>
										</tr>
										<tr>
											<td height="1" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
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
<!-- Footer End -->
</div>
<script src="{{ asset('main/vendors/bower_components/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('main/vendors/bower_components/jquery/dist/jquery-mask.min.js') }}"></script>
<script src="{{ asset('main/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
</body></html>	<style>body{ background: none !important; } </style>

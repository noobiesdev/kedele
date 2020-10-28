<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0;">
	<title>@yield('title')</title>
	@include('layouts.favicon')
	<link href="{{ asset('main/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
	<link href="{{ asset('template-usaha/basic/basic.css') }}" rel="stylesheet" type="text/css"/>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" yahoo="fix">
<div class="ui-sortable" id="sort_them">
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
																<img src="{{ asset('template-usaha/basic/images/logo.png') }}" width="120" alt="" border="0"  class="hover">
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
														<td height="70" valign="middle" width="100%"  style="font-family: Helvetica, Arial, sans-serif; color: rgb(249, 97, 69); text-transform: uppercase;">
															<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;"><!--<![endif]--><a href="#" style="text-decoration: none; color: rgb(249, 97, 69);" class="underline">Buy Now!</a><!--[if !mso]><!--></span><!--<![endif]-->


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
															<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;"><!--<![endif]--><a href="#" style="text-decoration: none; color: rgb(255, 255, 255);" class="underline">Support</a><!--[if !mso]><!--></span><!--<![endif]-->
															 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;"><!--<![endif]--><a href="#" style="text-decoration: none; color: rgb(255, 255, 255);" class="underline">Blog</a><!--[if !mso]><!--></span><!--<![endif]-->&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;"><!--<![endif]--><a href="#" style="text-decoration: none; color: rgb(255, 255, 255);" class="underline">Home</a><!--[if !mso]><!--></span><!--<![endif]-->

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
											<td align="center" width="100%" style="font-size: 40px; color: rgb(255, 255, 255); text-align: center; font-family: Helvetica, Arial, sans-serif; line-height: 48px; font-weight: bold; vertical-align: top;" class="font32">


														<span style="color: rgb(249, 97, 69); font-weight: bold;" class="font36">

															<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight:normal; word-break: break-word;"><!--<![endif]-->

																Phoenix

															<!--[if !mso]><!--></span><!--<![endif]-->
														</span>

														<span style="color: rgb(255, 255, 255); font-weight: 100;" class="font36">
															<!--[if !mso]><!--><span style="font-family: 'proxima_novalight', Helvetica; font-weight:normal; word-break: break-word;"><!--<![endif]-->

																Headphones.

																<br class="erase">

																They Simply
															<!--[if !mso]><!--></span><!--<![endif]-->
														</span>

														<span style="color: rgb(255, 255, 255); font-weight: bold;" class="font36">

															<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight:normal; word-break: break-word;"><!--<![endif]-->
																Rock.
															<!--[if !mso]><!--></span><!--<![endif]-->
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
												<!--[if !mso]><!--><table border="0" cellpadding="0" cellspacing="0" align="center" class="mcenter"><!--<![endif]-->
												<!--[if mso]><v:shape><table width="58%" border="0" cellpadding="0" cellspacing="0" align="center""></v:shape><![endif]-->
													<tr>
														<td width="100%" align="center">


															<table border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; margin-right: 13px;" class="mcenter">
																<tr>
																	<td width="100%" align="center">

																		<table border="0" cellpadding="0" cellspacing="0" align="left" class="mcenter">
																			<tr>
																				<td align="right" height="38" bgcolor="#f96145"style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; padding-left: 20px; padding-right: 20px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; color: rgb(255, 255, 255); text-transform: uppercase; background-color: rgb(249, 97, 69);">

																					<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;"><!--<![endif]-->
																						<a href="#"  style="color: rgb(255, 255, 255); font-size: 12px; text-decoration: none; line-height: 30px; width: 100%;"class="underline">start today!</a>
																					<!--[if !mso]><!--></span><!--<![endif]-->
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
																<!----------------- Button ----------------->
																<tr>
																	<td width="auto" align="center">

																		<table border="0" cellpadding="0" cellspacing="0" align="right" style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; padding-left: 20px; padding-right: 20px; border: 2px solid rgb(255, 255, 255); color: rgb(255, 255, 255);">
																			<tr>
																				<td width="auto" align="center" height="34" style="font-weight: bold; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase; color: rgb(255, 255, 255);">
																					<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;"><!--<![endif]-->
																						<a href="#" style="color: rgb(255, 255, 255); font-size: 12px; text-decoration: none; line-height: 30px; width: 100%;" class="underline">Learn More</a>
																					<!--[if !mso]><!--></span><!--<![endif]-->
																				</td>
																			</tr>
																		</table>

																	</td>
																</tr>
																<!----------------- End Button Center ----------------->
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

<!-- Wrapper 2 -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full"  bgcolor="#ffffff"style="background-color: rgb(255, 255, 255);">
	<tr>
		<td width="100%" valign="top" align="center">


			<!-- Wrapper -->
			<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile">
				<tr>
					<td align="center">

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="65"></td>
							</tr>
						</table><!-- End Space -->

						<!-- Wrapper -->
						<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" align="center">

									<!-- Icon 1 -->
									<table width="180" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;" class="fullCenter">
										<tr>
											<td width="150" align="center" class="image100">
												<table width="100" border="0" cellpadding="0" cellspacing="0" align="center">
													<tr>
														<td width="100" height="auto" style="text-align: center;" ><a href="#" style="text-decoration: none;" id="rotator"><img src="{{ asset('template-usaha/basic/images/image_100px_1.png') }}" width="100" alt="" border="0" ></a>
														</td>
													</tr>
												</table>
											</td>
										</tr>
										<tr>
											<td width="100%" height="25" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
										<tr>
											<td valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 20px; color: rgb(1, 1, 1); line-height: 24px; font-weight: normal;"class="fullCenter" >
												<!--[if !mso]><!--><span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;"><!--<![endif]-->Fully Tested<!--[if !mso]><!--></span><!--<![endif]-->
											</td>
										</tr>
										<tr>
											<td width="100%" height="25" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
										<tr>
											<td valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: rgb(135, 135, 135); line-height: 22px;" class="fullCenter">
												<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;"><!--<![endif]-->Online marketing will be dominated by dynamic content marketing.<!--[if !mso]><!--></span><!--<![endif]-->
											</td>
										</tr>
										<tr>
											<td width="100%" height="25" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
									</table>

									<!-- Space -->
									<table width="30" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full">
										<tr>
											<td width="100%" height="40" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
									</table>

									<!-- Icon 2 -->
									<table width="180" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;" class="fullCenter">
										<tr>
											<td width="150" align="center" class="image100">
												<table width="100" border="0" cellpadding="0" cellspacing="0" align="center">
													<tr>
														<td width="100" height="auto" style="text-align: center;" ><a href="#" style="text-decoration: none;" id="rotator"><img src="{{ asset('template-usaha/basic/images/image_100px_2.png') }}" width="100" alt="" border="0" ></a>
														</td>
													</tr>
												</table>
											</td>
										</tr>
										<tr>
											<td width="100%" height="25" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
										<tr>
											<td valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 20px; color: rgb(1, 1, 1); line-height: 24px; font-weight: normal;"class="fullCenter" >
												<!--[if !mso]><!--><span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;"><!--<![endif]-->Great Features<!--[if !mso]><!--></span><!--<![endif]-->
											</td>
										</tr>
										<tr>
											<td width="100%" height="25" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
										<tr>
											<td valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: rgb(135, 135, 135); line-height: 22px;" class="fullCenter">
												<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;"><!--<![endif]-->Online marketing will be dominated by dynamic content marketing.<!--[if !mso]><!--></span><!--<![endif]-->
											</td>
										</tr>
										<tr>
											<td width="100%" height="25" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
									</table>

									<!-- Space -->
									<table width="1" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full">
										<tr>
											<td width="100%" height="40" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
									</table>

									<!-- Icon 3 -->
									<table width="180" border="0" cellpadding="0" cellspacing="0" align="right" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;" class="fullCenter">
										<tr>
											<td width="150" align="center" class="image100">
												<table width="100" border="0" cellpadding="0" cellspacing="0" align="center">
													<tr>
														<td width="100" height="auto" style="text-align: center;" ><a href="#" style="text-decoration: none;" id="rotator"><img src="{{ asset('template-usaha/basic/images/image_100px_3.png') }}" width="100" alt="" border="0" ></a>
														</td>
													</tr>
												</table>
											</td>
										</tr>
										<tr>
											<td width="100%" height="25" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
										<tr>
											<td valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 20px; color: rgb(1, 1, 1); line-height: 24px; font-weight: normal;"class="fullCenter" >
												<!--[if !mso]><!--><span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;"><!--<![endif]-->Awesome Design<!--[if !mso]><!--></span><!--<![endif]-->
											</td>
										</tr>
										<tr>
											<td width="100%" height="25" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
										<tr>
											<td valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: rgb(135, 135, 135); line-height: 22px;" class="fullCenter">
												<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;"><!--<![endif]-->Online marketing will be dominated by dynamic content marketing.<!--[if !mso]><!--></span><!--<![endif]-->
											</td>
										</tr>
										<tr>
											<td width="100%" height="25" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
									</table>

								</td>
							</tr>
						</table><!-- End Wrapper -->

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="40" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
							</tr>
						</table><!-- End Space -->

					</td>
				</tr>
			</table><!-- End Wrapper -->

		</div>
		</td>
	</tr>
</table><!-- Wrapper 2 -->

<!-- Wrapper 2 -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full"  bgcolor="#f3f5f9"style="background-color: rgb(243, 245, 249);">
	<tr>
		<td width="100%" valign="top" align="center">


			<!-- Wrapper -->
			<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile">
				<tr>
					<td align="center">

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="65"></td>
							</tr>
						</table><!-- End Space -->

						<!-- Wrapper -->
						<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" align="center">

									<!-- Column Left -->
									<table width="290" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; -webkit-box-shadow: 2px 3px 0px 0px rgba(50, 50, 50, 0.4); -moz-box-shadow: 2px 3px 0px 0px rgba(50, 50, 50, 0.4); box-shadow: 0px 2px 0px 0px rgba(173, 173, 173, 0.3);" class="fullCenter">
										<tr>
											<td valign="top" width="100%" class="pad30" bgcolor="#ffffff"style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; background-color: rgb(255, 255, 255);">


												<table width="240" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse: collapse; text-align: center; background-color: rgb(255, 255, 255);" class="fullCenter" bgcolor="#ffffff">
													<tr>
														<td width="100%" height="30" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td width="100" align="center" class="image50">
															<table width="100" border="0" cellpadding="0" cellspacing="0" align="center">
																<tr>
																	<td width="100" height="auto" style="text-align: center;" ><a href="#" style="text-decoration: none;" id="rotator"><img src="{{ asset('template-usaha/basic/images/icon_50px_1.png') }}" width="50" alt="" border="0" ></a>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
													<tr>
														<td width="100%" height="30" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td align="center" valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 20px; color: rgb(1, 1, 1); line-height: 24px; font-weight: normal;"class="fullCenter" >
															<!--[if !mso]><!--><span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;"><!--<![endif]-->Fantastic coding Headphones for the Win!<!--[if !mso]><!--></span><!--<![endif]-->
														</td>
													</tr>
													<tr>
														<td width="100%" height="25" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td align="center" valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: rgb(135, 135, 135); line-height: 22px;" class="fullCenter">
															<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;"><!--<![endif]-->Online marketing in 2014 will be dominated by dynamic content (blogging) and social media. Next year social media marketing will no longer<!--[if !mso]><!--></span><!--<![endif]-->
														</td>
													</tr>
													<tr>
														<td width="100%" height="30"></td>
													</tr>
													<!----------------- Button Center ----------------->
													<tr>
														<td class="buttonScale" width="auto" align="center">

															<table border="0" cellpadding="0" cellspacing="0" align="center" class="buttonScale">
																<tr>
																	<td width="auto" align="center" height="37" bgcolor="#f96145"style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; padding-left: 20px; padding-right: 20px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; color: rgb(255, 255, 255); text-transform: uppercase; background-color: rgb(249, 97, 69);">

																		<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;"><!--<![endif]-->
																			<a href="#"  style="color: rgb(255, 255, 255); font-size: 12px; text-decoration: none; line-height: 30px; width: 100%;"class="underline">Read More</a>
																		<!--[if !mso]><!--></span><!--<![endif]-->
																	</td>
																</tr>
															</table>

														</td>
													</tr>
													<tr>
														<td width="100%" height="40" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
												</table>

											</td>
										</tr>
									</table>

									<!-- Space -->
									<table width="1" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full">
										<tr>
											<td width="100%" height="20" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
									</table><!-- End Space -->

									<!-- Column Right -->
									<table width="290" border="0" cellpadding="0" cellspacing="0" align="right" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; -webkit-box-shadow: 2px 3px 0px 0px rgba(50, 50, 50, 0.4); -moz-box-shadow: 2px 3px 0px 0px rgba(50, 50, 50, 0.4); box-shadow: 0px 2px 0px 0px rgba(173, 173, 173, 0.3);" class="fullCenter">
										<tr>
											<td valign="top" width="100%" class="pad30" bgcolor="#ffffff"style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; background-color: rgb(255, 255, 255);">


												<table width="240" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse: collapse; text-align: center; background-color: rgb(255, 255, 255);" class="fullCenter" bgcolor="#ffffff">
													<tr>
														<td width="100%" height="30" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td width="100" align="center" class="image50">
															<table width="100" border="0" cellpadding="0" cellspacing="0" align="center">
																<tr>
																	<td width="100" height="auto" style="text-align: center;" ><a href="#" style="text-decoration: none;" id="rotator"><img src="{{ asset('template-usaha/basic/images/icon_50px_2.png') }}" width="50" alt="" border="0" ></a>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
													<tr>
														<td width="100%" height="30" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td align="center" valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 20px; color: rgb(1, 1, 1); line-height: 24px; font-weight: normal;"class="fullCenter" >
															<!--[if !mso]><!--><span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;"><!--<![endif]-->2015’s Best Back to School Headphones<!--[if !mso]><!--></span><!--<![endif]-->
														</td>
													</tr>
													<tr>
														<td width="100%" height="25" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td align="center" valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: rgb(135, 135, 135); line-height: 22px;" class="fullCenter">
															<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;"><!--<![endif]-->Over the last few years SEO’s have debated on whether social signals have any effect on search results and if they do how much weight do these <!--[if !mso]><!--></span><!--<![endif]-->
														</td>
													</tr>
													<tr>
														<td width="100%" height="30"></td>
													</tr>
													<!----------------- Button Center ----------------->
													<tr>
														<td class="buttonScale" width="auto" align="center">

															<table border="0" cellpadding="0" cellspacing="0" align="center" class="buttonScale">
																<tr>
																	<td width="auto" align="center" height="37" bgcolor="#f96145"style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; padding-left: 20px; padding-right: 20px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; color: rgb(255, 255, 255); text-transform: uppercase; background-color: rgb(249, 97, 69);">

																		<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;"><!--<![endif]-->
																			<a href="#"  style="color: rgb(255, 255, 255); font-size: 12px; text-decoration: none; line-height: 30px; width: 100%;"class="underline">Read More</a>
																		<!--[if !mso]><!--></span><!--<![endif]-->
																	</td>
																</tr>
															</table>

														</td>
													</tr>
													<tr>
														<td width="100%" height="40" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
												</table>

											</td>
										</tr>
									</table>

								</td>
							</tr>
						</table><!-- End Wrapper -->

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
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
</table><!-- Wrapper 2 -->

<!-- Seperator 1 -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full" bgcolor="#f96145" style="background-color: rgb(249, 97, 69);">
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
												<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;"><!--<![endif]-->
													Cindy Theron
												<!--[if !mso]><!--></span><!--<![endif]-->
											</td>
										</tr>
										<tr>
											<td width="100%" height="25" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
										<tr>
											<td valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: rgb(255, 255, 255); line-height: 22px;" class="fullCenter">
												<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;"><!--<![endif]-->Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.<!--[if !mso]><!--></span><!--<![endif]-->
											</td>
										</tr>
										<tr>
											<td height="40" width="100%" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
										<!----------------- Button Center ----------------->
										<tr>
											<td width="auto" align="center">

												<table border="0" cellpadding="0" cellspacing="0" align="center" style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; padding-left: 20px; padding-right: 20px; border: 2px solid rgb(255, 255, 255); color: rgb(255, 255, 255);">
													<tr>
														<td width="auto" align="center" height="35" style="font-weight: bold; font-family: Helvetica, Arial, sans-serif; text-transform: uppercase; color: rgb(255, 255, 255);">
															<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;"><!--<![endif]-->
																<a href="#" style="color: rgb(255, 255, 255); font-size: 12px; text-decoration: none; line-height: 30px; width: 100%;" class="underline">About me</a>
															<!--[if !mso]><!--></span><!--<![endif]-->
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
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full"  bgcolor="#ffffff"style="background-color: rgb(255, 255, 255);">
	<tr>
		<td width="100%" valign="top" align="center">


			<!-- Wrapper -->
			<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile">
				<tr>
					<td align="center">

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="30" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
							</tr>
						</table><!-- End Space -->

					</td>
				</tr>
			</table><!-- End Wrapper -->

		</div>
		</td>
	</tr>
</table><!-- Wrapper 2 -->

<!-- Wrapper 2 -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full" bgcolor="#ffffff" style="background-color: rgb(255, 255, 255);">
	<tr>
		<td width="100%" valign="top" align="center">


			<!-- Wrapper -->
			<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile">
				<tr>
					<td align="center">

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="30"></td>
							</tr>
						</table><!-- End Space -->

						<!-- Wrapper -->
						<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" align="center" class="image198">

									<!-- Image 198px - 1 -->
									<table width="198" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;" class="fullCenter">
										<tr>
											<td width="100%" align="center" class="fullCenter" style="line-height: 1px;" >
												<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/image_198px_1.png') }}" width="198" alt="" border="0" class="hover" ></a>
											</td>
										</tr>
									</table>

									<!-- Image 198px - 2 -->
									<table width="198" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;" class="fullCenter">
										<tr>
											<td width="100%" align="center" class="fullCenter" style="line-height: 1px;" >
												<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/image_198px_2.png') }}" width="198" alt="" border="0" class="hover" ></a>
											</td>
										</tr>
									</table>

									<!-- Image 198px - 3 -->
									<table width="198" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;" class="fullCenter">
										<tr>
											<td width="100%" align="center" class="fullCenter" style="line-height: 1px;" >
												<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/image_198px_3.png') }}" width="198" alt="" border="0" class="hover" ></a>
											</td>
										</tr>
									</table>

								</td>
							</tr>
						</table><!-- End Wrapper -->

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="18"></td>
							</tr>
						</table><!-- End Space -->

					</td>
				</tr>
			</table><!-- End Wrapper -->

		</div>
		</td>
	</tr>
</table><!-- Wrapper 2 -->

<!-- Wrapper 2 -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full" bgcolor="#ffffff" style="background-color: rgb(255, 255, 255);">
	<tr>
		<td width="100%" valign="top" align="center">


			<!-- Wrapper -->
			<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile">
				<tr>
					<td align="center">

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="18"></td>
							</tr>
						</table><!-- End Space -->

						<!-- Wrapper -->
						<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" align="center">

									<!-- Text Right -->
									<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
										<tr>
											<td valign="top" width="100%" style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 22px; color: rgb(1, 1, 1); line-height: 28px; font-weight: bold;"class="fullCenter" >
												<!--[if !mso]><!--><span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;"><!--<![endif]-->
													Go Anywhere with our new Serie of Summer Headphones
												<!--[if !mso]><!--></span><!--<![endif]-->
											</td>
										</tr>
										<tr>
											<td width="100%" height="20"></td>
										</tr>
										<tr>
											<td width="100%" valign="top" style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: rgb(135, 135, 135); line-height: 24px; font-weight: normal;" class="fullCenter">

													<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;"><!--<![endif]-->
														Many website owners may find themselves confused or deflated by the lack of traffic their website is bringing in especially when they’ve been working hard to achieve high rankings within the search engines and promoting themselves frequently on social networks but what could be causing the websites downfall?
													<!--[if !mso]><!--></span><!--<![endif]-->
												<p>
											</td>
										</tr>
										<tr>
											<td width="100%" height="30"></td>
										</tr>
										<!----------------- Button Left, Scale Center ----------------->
										<tr>
											<td class="buttonScale" width="auto" align="left">

												<table border="0" cellpadding="0" cellspacing="0" align="left" class="buttonScale">
													<tr>
														<td width="auto" align="center" height="37" bgcolor="#f96145"style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; padding-left: 20px; padding-right: 20px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; color: rgb(255, 255, 255); text-transform: uppercase; background-color: rgb(249, 97, 69);">

															<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;"><!--<![endif]-->
																<a href="#"  style="color: rgb(255, 255, 255); font-size: 12px; text-decoration: none; line-height: 30px; width: 100%;"class="underline">Read More</a>
															<!--[if !mso]><!--></span><!--<![endif]-->
														</td>
													</tr>
												</table>

											</td>
										</tr>
									</table>

								</td>
							</tr>
						</table><!-- End Wrapper -->

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
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
</table><!-- Wrapper 2 -->

<!-- Wrapper 2 -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full"  bgcolor="#f3f5f9"style="background-color: rgb(243, 245, 249);">
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

<!-- Wrapper 2 -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full"  bgcolor="#f3f5f9"style="background-color: rgb(243, 245, 249);">
	<tr>
		<td width="100%" valign="top" align="center">


			<!-- Wrapper -->
			<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile">
				<tr>
					<td align="center">

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="15"></td>
							</tr>
						</table><!-- End Space -->

						<!-- Wrapper -->
						<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" align="center">

									<!-- Column Left -->
									<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; -webkit-box-shadow: 2px 3px 0px 0px rgba(50, 50, 50, 0.4); -moz-box-shadow: 2px 3px 0px 0px rgba(50, 50, 50, 0.4); box-shadow: 0px 2px 0px 0px rgba(173, 173, 173, 0.3);" class="fullCenter">
										<tr>
											<td valign="top" width="100%" class="pad30" bgcolor="#ffffff"style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; background-color: rgb(255, 255, 255);">

												<!-- Space -->
												<table width="40" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="erase">
													<tr>
														<td width="100%" height="20" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
												</table><!-- End Space -->

												<!-- Space -->
												<table width="40" border="0" cellpadding="0" cellspacing="0" align="right" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="erase">
													<tr>
														<td width="100%" height="20" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
												</table><!-- End Space -->

												<table width="142" border="0" cellpadding="0" cellspacing="0" align="right" style="border-collapse: collapse; text-align: center; background-color: rgb(255, 255, 255);" class="fullCenter" bgcolor="#ffffff">
													<tr>
														<td width="100%" height="40" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td width="100" align="center" class="image142">
															<table width="100" border="0" cellpadding="0" cellspacing="0" align="center">
																<tr>
																	<td width="100" height="auto" style="text-align: center;" ><a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/image_142px_1.png') }}" width="142" alt="" border="0"  class="hover"></a>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
													<tr>
														<td width="100%" height="40" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
												</table>

												<table width="330" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse: collapse; text-align: center; background-color: rgb(255, 255, 255);" class="fullCenter" bgcolor="#ffffff">
													<tr>
														<td width="100%" height="40" style="font-size: 1px; line-height: 1px;" class="erase">&nbsp;</td>
													</tr>
													<tr>
														<td valign="middle" width="100%" style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 20px; color: rgb(1, 1, 1); line-height: 24px; font-weight: normal;"class="fullCenter" >
															<!--[if !mso]><!--><span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;"><!--<![endif]-->What are you waiting for? Save 10% on select models until Jan 10th<!--[if !mso]><!--></span><!--<![endif]-->
														</td>
													</tr>
													<tr>
														<td width="100%" height="25" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td valign="middle" width="100%" style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: rgb(135, 135, 135); line-height: 22px;" class="fullCenter">
															<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;"><!--<![endif]-->Basic search engine optimisation is essential for any website. SEO will help your website to be found within the search engines keywords relating to...<!--[if !mso]><!--></span><!--<![endif]-->
														</td>
													</tr>
													<tr>
														<td width="100%" height="30" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<!----------------- Button Center ----------------->
													<tr>
														<td class="buttonScale" width="auto" align="left">

															<table border="0" cellpadding="0" cellspacing="0" align="left" class="buttonScale">
																<tr>
																	<td width="auto" align="center" height="37" bgcolor="#f96145"style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; padding-left: 20px; padding-right: 20px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; color: rgb(255, 255, 255); text-transform: uppercase; background-color: rgb(249, 97, 69);">

																		<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;"><!--<![endif]-->
																			<a href="#"  style="color: rgb(255, 255, 255); font-size: 12px; text-decoration: none; line-height: 30px; width: 100%;"class="underline">Read More</a>
																		<!--[if !mso]><!--></span><!--<![endif]-->
																	</td>
																</tr>
															</table>

														</td>
													</tr>
													<tr>
														<td width="100%" height="40" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
												</table>

											</td>
										</tr>
									</table>

								</td>
							</tr>
						</table><!-- End Wrapper -->

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="15"></td>
							</tr>
						</table><!-- End Space -->

					</td>
				</tr>
			</table><!-- End Wrapper -->

		</div>
		</td>
	</tr>
</table><!-- Wrapper 2 -->

<!-- Wrapper 2 -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full"  bgcolor="#f3f5f9"style="background-color: rgb(243, 245, 249);">
	<tr>
		<td width="100%" valign="top" align="center">


			<!-- Wrapper -->
			<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile">
				<tr>
					<td align="center">

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="15"></td>
							</tr>
						</table><!-- End Space -->

						<!-- Wrapper -->
						<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" align="center">

									<!-- Column Left -->
									<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; -webkit-box-shadow: 2px 3px 0px 0px rgba(50, 50, 50, 0.4); -moz-box-shadow: 2px 3px 0px 0px rgba(50, 50, 50, 0.4); box-shadow: 0px 2px 0px 0px rgba(173, 173, 173, 0.3);" class="fullCenter">
										<tr>
											<td valign="top" width="100%" class="pad30" bgcolor="#ffffff"style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; background-color: rgb(255, 255, 255);">

												<!-- Space -->
												<table width="40" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="erase">
													<tr>
														<td width="100%" height="20" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
												</table><!-- End Space -->

												<!-- Space -->
												<table width="40" border="0" cellpadding="0" cellspacing="0" align="right" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="erase">
													<tr>
														<td width="100%" height="20" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
												</table><!-- End Space -->

												<table width="142" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse: collapse; text-align: center; background-color: rgb(255, 255, 255);" class="fullCenter" bgcolor="#ffffff">
													<tr>
														<td width="100%" height="40" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td width="100" align="center" class="image142">
															<table width="100" border="0" cellpadding="0" cellspacing="0" align="center">
																<tr>
																	<td width="100" height="auto" style="text-align: center;" ><a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/image_142px_2.png') }}" width="142" alt="" border="0"  class="hover"></a>
																	</td>
																</tr>
															</table>
														</td>
													</tr>
												</table>

												<table width="330" border="0" cellpadding="0" cellspacing="0" align="right" style="border-collapse: collapse; text-align: center; background-color: rgb(255, 255, 255);" class="fullCenter" bgcolor="#ffffff">
													<tr>
														<td width="100%" height="40" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td valign="middle" width="100%" style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 20px; color: rgb(1, 1, 1); line-height: 24px; font-weight: normal;"class="fullCenter" >
															<!--[if !mso]><!--><span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;"><!--<![endif]-->Here’s some of Headroom Staffers Enjoying Epic Summers<!--[if !mso]><!--></span><!--<![endif]-->
														</td>
													</tr>
													<tr>
														<td width="100%" height="25" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td valign="middle" width="100%" style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: rgb(135, 135, 135); line-height: 22px;" class="fullCenter">
															<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;"><!--<![endif]-->Basic search engine optimisation is essential for any website. SEO will help your website to be found within the search engines keywords relating to...<!--[if !mso]><!--></span><!--<![endif]-->
														</td>
													</tr>
													<tr>
														<td width="100%" height="30"></td>
													</tr>
													<!----------------- Button Center ----------------->
													<tr>
														<td class="buttonScale" width="auto" align="left">

															<table border="0" cellpadding="0" cellspacing="0" align="left" class="buttonScale">
																<tr>
																	<td width="auto" align="center" height="37" bgcolor="#f96145"style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; padding-left: 20px; padding-right: 20px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; color: rgb(255, 255, 255); text-transform: uppercase; background-color: rgb(249, 97, 69);">

																		<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;"><!--<![endif]-->
																			<a href="#"  style="color: rgb(255, 255, 255); font-size: 12px; text-decoration: none; line-height: 30px; width: 100%;"class="underline">Read More</a>
																		<!--[if !mso]><!--></span><!--<![endif]-->
																	</td>
																</tr>
															</table>

														</td>
													</tr>
													<tr>
														<td width="100%" height="40" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
												</table>

											</td>
										</tr>
									</table>

								</td>
							</tr>
						</table><!-- End Wrapper -->

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="15"></td>
							</tr>
						</table><!-- End Space -->

					</td>
				</tr>
			</table><!-- End Wrapper -->

		</div>
		</td>
	</tr>
</table><!-- Wrapper 2 -->

<!-- Wrapper 2 -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full"  bgcolor="#f3f5f9"style="background-color: rgb(243, 245, 249);">
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

<!-- Wrapper 2 -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full" >
	<tr>
		<td width="100%" valign="top" align="center">


			<!-- Wrapper -->
			<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full" bgcolor="#f96145"style="background-color: rgb(249, 97, 69);">
				<tr>
					<td align="center">

						<!-- Column Left -->
						<table width="50%" border="0" cellpadding="0" cellspacing="0" align="left" class="full" style="border-collapse: collapse; text-align: center; background-color: rgb(249, 97, 69);" bgcolor="#f96145">
							<tr>
								<td width="100%" align="center">

									<!-- Space -->
									<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
										<tr>
											<td width="100%" height="38"></td>
										</tr>
									</table><!-- End Space -->

									<!-- Wrapper -->
									<table width="300" border="0" cellpadding="0" cellspacing="0" align="right" class="mobile">
										<tr>
											<td width="100%" align="center">

												<!-- Text Left -->
												<table width="250" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;" class="fullCenter">
													<tr>
														<td valign="middle" width="100%" style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 20px; color: rgb(255, 255, 255); line-height: 24px; font-weight: normal;"class="fullCenter" >
															<!--[if !mso]><!--><span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;"><!--<![endif]-->Unheard and Never Seen Before Combo Sale<!--[if !mso]><!--></span><!--<![endif]-->
														</td>
													</tr>
													<tr>
														<td width="100%" height="24" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td valign="middle" width="100%" style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: rgb(255, 255, 255); line-height: 22px;" class="fullCenter">
															<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;"><!--<![endif]-->Many website owners may find themselves confused or deflated by the lack of traffic their website is bringing in especially when they’ve been working what could be causing the websites downfall?<!--[if !mso]><!--></span><!--<![endif]-->
														</td>
													</tr>
													<tr>
														<td width="100%" height="38">
														</td>
													</tr>
												</table><!-- End Wrapper -->

											</td>
										</tr>
									</table><!-- End Wrapper -->

								</td>
							</tr>
						</table><!-- End Column Left -->

						<!-- Column Right -->
						<table width="49%" border="0" cellpadding="0" cellspacing="0" align="right" class="full" bgcolor="#1d3650" style="border-collapse: collapse; text-align: center; background-color: rgb(29, 54, 80);">
							<tr>
								<td width="100%" align="center" bgcolor="#1d3650"style="background-color: rgb(29, 54, 80);">

									<!-- 3 Icons Top -->
									<table width="300" border="0" cellpadding="0" cellspacing="0" align="left" class="full" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
										<tr>
											<td width="100%" align="center" valign="top">

												<!-- SORTABLE -->
												<div class="sortable_inner ui-sortable">

												<!-- 3 Icons Top -->
												<table width="300" border="0" cellpadding="0" cellspacing="0" align="center" class="full" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" object="drag-module-small">
													<tr>
														<td width="100%" align="center" valign="top" class="icon100">

															<!-- 3 x 100px Icons Top -->
															<table width="300" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;" class="tableCenter">
																<tr>
																	<td width="33%" align="center" class="mcenter" style="line-height: 1px; text-align: center;" >
																		<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/icon_100px_1.jpg') }}" width="100" alt="" border="0" align="left" style="margin:0" class="brightness" ></a>
																	</td>
																	<td width="33%" align="center" class="mcenter" style="line-height: 1px; text-align: center;" >
																		<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/icon_100px_2.jpg') }}" width="100" alt="" border="0" align="left" style="margin:0" class="brightness" ></a>
																	</td><td width="33%" align="center" class="mcenter" style="line-height: 1px; text-align: center;" >
																		<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/icon_100px_3.jpg') }}" width="100" alt="" border="0" align="left" style="margin:0" class="brightness" ></a>
																	</td>
																</tr>
															</table><!-- End Wrapper -->

														</td>
													</tr>
												</table>

												<!-- 3 Icons Middle -->
												<table width="300" border="0" cellpadding="0" cellspacing="0" align="center" class="full" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" object="drag-module-small">
													<tr>
														<td width="100%" align="center" valign="top" class="icon100">

															<!-- 3 x 100px Icons Middle -->
															<table width="300" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;" class="tableCenter">
																<tr>
																	<td width="33%" align="center" class="mcenter" style="line-height: 1px; text-align: center;" >
																		<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/icon_100px_4.jpg') }}" width="100" alt="" border="0" align="left" style="margin:0" class="brightness" ></a>
																	</td>
																	<td width="33%" align="center" class="mcenter" style="line-height: 1px; text-align: center;" >
																		<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/icon_100px_5.jpg') }}" width="100" alt="" border="0" align="left" style="margin:0" class="brightness" ></a>
																	</td><td width="33%" align="center" class="mcenter" style="line-height: 1px; text-align: center;" >
																		<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/icon_100px_6.jpg') }}" width="100" alt="" border="0" align="left" style="margin:0" class="brightness" ></a>
																	</td>
																</tr>
															</table><!-- End Wrapper -->

														</td>
													</tr>
												</table>

												<!-- 3 Icons Bottom -->
												<table width="300" border="0" cellpadding="0" cellspacing="0" align="center" class="full" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" object="drag-module-small">
													<tr>
														<td width="100%" align="center" valign="top" class="icon100">

															<!-- 3 x 100px Icons Top -->
															<table width="300" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;" class="tableCenter">
																<tr>
																	<td width="33%" align="center" class="mcenter" style="line-height: 1px; text-align: center;" >
																		<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/icon_100px_7.jpg') }}" width="100" alt="" border="0" align="left" style="margin:0" class="brightness" ></a>
																	</td>
																	<td width="33%" align="center" class="mcenter" style="line-height: 1px; text-align: center;" >
																		<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/icon_100px_8.jpg') }}" width="100" alt="" border="0" align="left" style="margin:0" class="brightness" ></a>
																	</td><td width="33%" align="center" class="mcenter" style="line-height: 1px; text-align: center;" >
																		<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/icon_100px_9.jpg') }}" width="100" alt="" border="0" align="left" style="margin:0" class="brightness" ></a>
																	</td>
																</tr>
															</table><!-- End Wrapper -->

														</td>
													</tr>
												</table><!-- End Wrapper -->

												</div>

											</td>
										</tr>
									</table>

								</td>
							</tr>
						</table><!-- End Column Right -->

					</td>
				</tr>
			</table><!-- End Wrapper -->

		</div>
		</td>
	</tr>
</table><!-- Wrapper 2 -->

<!-- Wrapper 2 -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full" bgcolor="#ffffff" style="background-color: rgb(255, 255, 255);">
	<tr>
		<td width="100%" valign="top" align="center">


			<!-- Wrapper -->
			<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile">
				<tr>
					<td align="center">

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="65"></td>
							</tr>
						</table><!-- End Space -->

						<!-- Wrapper -->
						<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" align="center">

									<!-- Image 600px - 1 -->
									<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;" class="fullCenter">
										<tr>
											<td width="600" align="center" class="image600" >
												<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/image_600px_1.png') }}" width="600" alt="" border="0" class="hover" ></a>
											</td>
										</tr>
										<tr>
											<td width="100%" height="30"></td>
										</tr>
										<tr>
											<td valign="top" width="100%" style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 22px; color: rgb(1, 1, 1); line-height: 28px; font-weight: bold;"class="fullCenter" >
												<!--[if !mso]><!--><span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;"><!--<![endif]-->
													Sure-Fire Father’s Day Gifts
												<!--[if !mso]><!--></span><!--<![endif]-->
											</td>
										</tr>
										<tr>
											<td width="100%" height="20"></td>
										</tr>
										<tr>
											<td width="100%" valign="top" style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: rgb(135, 135, 135); line-height: 24px; font-weight: normal;" class="fullCenter">

													<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;"><!--<![endif]-->
														Many website owners may find themselves confused or deflated by the lack of traffic their website is bringing in especially when they’ve been working hard to achieve high rankings within the search engines and promoting themselves frequently on social networks but what could be causing the websites downfall?
													<!--[if !mso]><!--></span><!--<![endif]-->
												<p>
											</td>
										</tr>
										<tr>
											<td width="100%" height="30"></td>
										</tr>
										<!----------------- Button Left, Scale Center ----------------->
										<tr>
											<td class="buttonScale" width="auto" align="left">

												<table border="0" cellpadding="0" cellspacing="0" align="left" class="buttonScale">
													<tr>
														<td width="auto" align="center" height="37" bgcolor="#f96145"style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; padding-left: 20px; padding-right: 20px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; color: rgb(255, 255, 255); text-transform: uppercase; background-color: rgb(249, 97, 69);">

															<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;"><!--<![endif]-->
																<a href="#"  style="color: rgb(255, 255, 255); font-size: 12px; text-decoration: none; line-height: 30px; width: 100%;"class="underline">Read More</a>
															<!--[if !mso]><!--></span><!--<![endif]-->
														</td>
													</tr>
												</table>

											</td>
										</tr>
									</table>

								</td>
							</tr>
						</table><!-- End Wrapper -->

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
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
</table><!-- Wrapper 2 -->

<!-- Wrapper 3 -->
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
															<!--[if !mso]><!--><span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;"><!--<![endif]-->98<!--[if !mso]><!--></span><!--<![endif]-->
														</td>
													</tr>
													<tr>
														<td width="100%" height="15" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td valign="middle" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 12px; color: rgb(1, 1, 1); line-height: 18px; text-transform: uppercase;" class="fullCenter">
															<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;"><!--<![endif]-->PROJECTS FINISHED<!--[if !mso]><!--></span><!--<![endif]-->
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
															<!--[if !mso]><!--><span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;"><!--<![endif]-->23<!--[if !mso]><!--></span><!--<![endif]-->
														</td>
													</tr>
													<tr>
														<td width="100%" height="15" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td valign="middle" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 12px; color: rgb(1, 1, 1); line-height: 18px; text-transform: uppercase;" class="fullCenter">
															<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;"><!--<![endif]-->cups of coffee<!--[if !mso]><!--></span><!--<![endif]-->
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
															<!--[if !mso]><!--><span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;"><!--<![endif]-->87<!--[if !mso]><!--></span><!--<![endif]-->
														</td>
													</tr>
													<tr>
														<td width="100%" height="15" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td valign="middle" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 12px; color: rgb(1, 1, 1); line-height: 18px; text-transform: uppercase;" class="fullCenter">
															<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;"><!--<![endif]-->awards won<!--[if !mso]><!--></span><!--<![endif]-->
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
															<!--[if !mso]><!--><span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;"><!--<![endif]-->99<!--[if !mso]><!--></span><!--<![endif]-->
														</td>
													</tr>
													<tr>
														<td width="100%" height="15" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
													</tr>
													<tr>
														<td valign="middle" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 12px; color: rgb(1, 1, 1); line-height: 18px; text-transform: uppercase;" class="fullCenter">
															<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;"><!--<![endif]-->happy customers<!--[if !mso]><!--></span><!--<![endif]-->
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

<!-- Wrapper 2 -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full" bgcolor="#ffffff" style="background-color: rgb(255, 255, 255);">
	<tr>
		<td width="100%" valign="top" align="center">


			<!-- Wrapper -->
			<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile">
				<tr>
					<td align="center">

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="60"></td>
							</tr>
						</table><!-- End Space -->

						<!-- Wrapper -->
						<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" align="center">

									<!-- Image 275px - 1 -->
									<table width="275" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;" class="fullCenter">
										<tr>
											<td width="100%" align="center" class="image275" >
												<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/image_275px_1.png') }}" width="275" alt="" border="0" class="hover" ></a>
											</td>
										</tr>
										<tr>
											<td width="100%" height="25"></td>
										</tr>
										<tr>
											<td valign="top" width="100%" style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 20px; color: rgb(1, 1, 1); line-height: 26px; font-weight: bold;"class="fullCenter" >
												<!--[if !mso]><!--><span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;"><!--<![endif]-->
													Try our New High Resolution Player
												<!--[if !mso]><!--></span><!--<![endif]-->
											</td>
										</tr>
										<tr>
											<td width="100%" height="20"></td>
										</tr>
										<tr>
											<td width="100%" valign="top" style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: rgb(135, 135, 135); line-height: 24px; font-weight: normal;" class="fullCenter">

													<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;"><!--<![endif]-->
														Online marketing in 2014 will be dominated by dynamic content (blogging) and social media. Next year social media marketing...
													<!--[if !mso]><!--></span><!--<![endif]-->
												<p>
											</td>
										</tr>
										<tr>
											<td width="100%" height="30"></td>
										</tr>
										<!----------------- Button Left, Scale Center ----------------->
										<tr>
											<td class="buttonScale" width="auto" align="left">

												<table border="0" cellpadding="0" cellspacing="0" align="left" class="buttonScale">
													<tr>
														<td width="auto" align="center" height="37" bgcolor="#f96145"style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; padding-left: 20px; padding-right: 20px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; color: rgb(255, 255, 255); text-transform: uppercase; background-color: rgb(249, 97, 69);">

															<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;"><!--<![endif]-->
																<a href="#"  style="color: rgb(255, 255, 255); font-size: 12px; text-decoration: none; line-height: 30px; width: 100%;"class="underline">Read More</a>
															<!--[if !mso]><!--></span><!--<![endif]-->
														</td>
													</tr>
												</table>

											</td>
										</tr>
									</table>

									<!-- Space -->
									<table width="1" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full">
										<tr>
											<td width="100%" height="50" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
									</table><!-- End Space -->

									<!-- Text Right -->
									<table width="280" border="0" cellpadding="0" cellspacing="0" align="right" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="fullCenter">
										<tr>
											<td width="100%" align="center" class="image275" >
												<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/image_275px_2.png') }}" width="275" alt="" border="0" class="hover" ></a>
											</td>
										</tr>
										<tr>
											<td width="100%" height="25"></td>
										</tr>
										<tr>
											<td valign="top" width="100%" style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 20px; color: rgb(1, 1, 1); line-height: 26px; font-weight: bold;"class="fullCenter" >
												<!--[if !mso]><!--><span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;"><!--<![endif]-->
													Ever Wondered why our Headphones get Makeovers?
												<!--[if !mso]><!--></span><!--<![endif]-->
											</td>
										</tr>
										<tr>
											<td width="100%" height="20"></td>
										</tr>
										<tr>
											<td width="100%" valign="top" style="text-align: left; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: rgb(135, 135, 135); line-height: 24px; font-weight: normal;" class="fullCenter">

													<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;"><!--<![endif]-->
														Online marketing in 2014 will be dominated by dynamic content (blogging) and social media. Next year social media marketing...
													<!--[if !mso]><!--></span><!--<![endif]-->
												<p>
											</td>
										</tr>
										<tr>
											<td width="100%" height="30"></td>
										</tr>
										<!----------------- Button Left, Scale Center ----------------->
										<tr>
											<td class="buttonScale" width="auto" align="left">

												<table border="0" cellpadding="0" cellspacing="0" align="left" class="buttonScale">
													<tr>
														<td width="auto" align="center" height="37" bgcolor="#f96145"style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; padding-left: 20px; padding-right: 20px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; color: rgb(255, 255, 255); text-transform: uppercase; background-color: rgb(249, 97, 69);">

															<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;"><!--<![endif]-->
																<a href="#"  style="color: rgb(255, 255, 255); font-size: 12px; text-decoration: none; line-height: 30px; width: 100%;"class="underline">Read More</a>
															<!--[if !mso]><!--></span><!--<![endif]-->
														</td>
													</tr>
												</table>

											</td>
										</tr>
									</table>

								</td>
							</tr>
						</table><!-- End Wrapper -->

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
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
</table><!-- Wrapper 2 -->

<!-- Wrapper 2 -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full"  bgcolor="#f3f5f9"style="background-color: rgb(243, 245, 249);">
	<tr>
		<td width="100%" valign="top" align="center">


			<!-- Wrapper -->
			<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile">
				<tr>
					<td align="center">

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="70"></td>
							</tr>
						</table><!-- End Space -->

						<!-- Wrapper -->
						<table width="600" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" align="center">

									<!-- Image 175px - 1 -->
									<table width="175" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;" class="fullCenter">
										<tr>
											<td width="150" align="center" class="image175">
												<table width="100" border="0" cellpadding="0" cellspacing="0" align="center">
													<tr>
														<td width="100" height="auto" style="text-align: center;" ><a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/image_175px_1.png') }}" width="175" alt="" border="0"  class="hover"></a>
														</td>
													</tr>
												</table>
											</td>
										</tr>
										<tr>
											<td width="100%" height="25" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
										<tr>
											<td valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 20px; color: rgb(1, 1, 1); line-height: 24px; font-weight: normal;"class="fullCenter" >
												<!--[if !mso]><!--><span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;"><!--<![endif]-->Quality<!--[if !mso]><!--></span><!--<![endif]-->
											</td>
										</tr>
										<tr>
											<td width="100%" height="20" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
										<tr>
											<td valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: rgb(135, 135, 135); line-height: 22px;" class="fullCenter">
												<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;"><!--<![endif]-->Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec sed odio dui. Nullam id dolor id nibh.<!--[if !mso]><!--></span><!--<![endif]-->
											</td>
										</tr>
										<tr>
											<td width="100%" height="30"></td>
										</tr>
										<!----------------- Button Center ----------------->
										<tr>
											<td class="buttonScale" width="auto" align="center">

												<table border="0" cellpadding="0" cellspacing="0" align="center" class="buttonScale">
													<tr>
														<td width="auto" align="center" height="37" bgcolor="#f96145"style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; padding-left: 20px; padding-right: 20px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; color: rgb(255, 255, 255); text-transform: uppercase; background-color: rgb(249, 97, 69);">

															<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;"><!--<![endif]-->
																<a href="#"  style="color: rgb(255, 255, 255); font-size: 12px; text-decoration: none; line-height: 30px; width: 100%;"class="underline">Read More</a>
															<!--[if !mso]><!--></span><!--<![endif]-->
														</td>
													</tr>
												</table>

											</td>
										</tr>
									</table>

									<!-- Space -->
									<table width="36" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full">
										<tr>
											<td width="100%" height="50" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
									</table>

									<!-- Image 175px - 2 -->
									<table width="175" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;" class="fullCenter">
										<tr>
											<td width="150" align="center" class="image175">
												<table width="100" border="0" cellpadding="0" cellspacing="0" align="center">
													<tr>
														<td width="100" height="auto" style="text-align: center;" ><a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/image_175px_2.png') }}" width="175" alt="" border="0"  class="hover"></a>
														</td>
													</tr>
												</table>
											</td>
										</tr>
										<tr>
											<td width="100%" height="25" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
										<tr>
											<td valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 20px; color: rgb(1, 1, 1); line-height: 24px; font-weight: normal;"class="fullCenter" >
												<!--[if !mso]><!--><span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;"><!--<![endif]-->Strength<!--[if !mso]><!--></span><!--<![endif]-->
											</td>
										</tr>
										<tr>
											<td width="100%" height="20" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
										<tr>
											<td valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: rgb(135, 135, 135); line-height: 22px;" class="fullCenter">
												<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;"><!--<![endif]-->Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec sed odio dui. Nullam id dolor id nibh.<!--[if !mso]><!--></span><!--<![endif]-->
											</td>
										</tr>
										<tr>
											<td width="100%" height="30"></td>
										</tr>
										<!----------------- Button Center ----------------->
										<tr>
											<td class="buttonScale" width="auto" align="center">

												<table border="0" cellpadding="0" cellspacing="0" align="center" class="buttonScale">
													<tr>
														<td width="auto" align="center" height="37" bgcolor="#f96145"style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; padding-left: 20px; padding-right: 20px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; color: rgb(255, 255, 255); text-transform: uppercase; background-color: rgb(249, 97, 69);">

															<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;"><!--<![endif]-->
																<a href="#"  style="color: rgb(255, 255, 255); font-size: 12px; text-decoration: none; line-height: 30px; width: 100%;"class="underline">Read More</a>
															<!--[if !mso]><!--></span><!--<![endif]-->
														</td>
													</tr>
												</table>

											</td>
										</tr>
									</table>

									<!-- Space -->
									<table width="1" border="0" cellpadding="0" cellspacing="0" align="left" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full">
										<tr>
											<td width="100%" height="50" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
									</table>

									<!-- Image 175px - 3 -->
									<table width="180" border="0" cellpadding="0" cellspacing="0" align="right" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-align: center;" class="fullCenter">
										<tr>
											<td width="150" align="center" class="image175">
												<table width="100" border="0" cellpadding="0" cellspacing="0" align="center">
													<tr>
														<td width="100" height="auto" style="text-align: center;" ><a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/image_175px_3.png') }}" width="175" alt="" border="0"  class="hover"></a>
														</td>
													</tr>
												</table>
											</td>
										</tr>
										<tr>
											<td width="100%" height="25" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
										<tr>
											<td valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 20px; color: rgb(1, 1, 1); line-height: 24px; font-weight: normal;"class="fullCenter" >
												<!--[if !mso]><!--><span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;"><!--<![endif]-->Detail<!--[if !mso]><!--></span><!--<![endif]-->
											</td>
										</tr>
										<tr>
											<td width="100%" height="20" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
										</tr>
										<tr>
											<td valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: rgb(135, 135, 135); line-height: 22px;" class="fullCenter">
												<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;"><!--<![endif]-->Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Donec sed odio dui. Nullam id dolor id nibh.<!--[if !mso]><!--></span><!--<![endif]-->
											</td>
										</tr>
										<tr>
											<td width="100%" height="30"></td>
										</tr>
										<!----------------- Button Center ----------------->
										<tr>
											<td class="buttonScale" width="auto" align="center">

												<table border="0" cellpadding="0" cellspacing="0" align="center" class="buttonScale">
													<tr>
														<td width="auto" align="center" height="37" bgcolor="#f96145"style="border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; padding-left: 20px; padding-right: 20px; font-weight: bold; font-family: Helvetica, Arial, sans-serif; color: rgb(255, 255, 255); text-transform: uppercase; background-color: rgb(249, 97, 69);">

															<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;"><!--<![endif]-->
																<a href="#"  style="color: rgb(255, 255, 255); font-size: 12px; text-decoration: none; line-height: 30px; width: 100%;"class="underline">Read More</a>
															<!--[if !mso]><!--></span><!--<![endif]-->
														</td>
													</tr>
												</table>

											</td>
										</tr>
									</table>

								</td>
							</tr>
						</table><!-- End Wrapper -->

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="65" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
							</tr>
						</table><!-- End Space -->

					</td>
				</tr>
			</table><!-- End Wrapper -->

		</div>
		</td>
	</tr>
</table><!-- Wrapper 2 -->

<!-- Seperator 3 -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full" bgcolor="#1d3650" style="background-color: rgb(29, 54, 80);">
	<tr>
		<td align="center" style="background-image: url('images/seperator2.jpg'); background-position: center top; background-repeat:no-preat!important; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover; background-position: center center; background-repeat: no-repeat;" id="sep2">


			<!-- Wrapper -->
			<table class="mobile" align="center" border="0" width="100%" cellpadding="0" cellspacing="0">
				<tr>
					<td align="center">

						<!-- Wrapper -->
						<table class="full" align="center" border="0" width="600" cellpadding="0" cellspacing="0">
							<tr>
								<td width="100%" align="center">

									<!-- SORTABLE -->
									<div class="sortable_inner ui-sortable">

									<!-- Text -->
									<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" align="center" class="mobile" border="0" width="600" cellpadding="0" cellspacing="0" object="drag-module-small">
										<tr>
											<td height="55" width="100%">
											</td>
										</tr>
									</table>

									<table align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="mobile" border="0" width="600" cellpadding="0" cellspacing="0" object="drag-module-small">
										<tr>
											<td width="200" align="center" style="text-align: center">

												<table align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="mobile" border="0" width="200" cellpadding="0" cellspacing="0">
													<tr>
														<td width="200" align="center" style="text-align: center" class="avatar89" >
															<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/avatar_80px_1.png') }}" width="80" alt="" border="0" class="hover" ></a>
														</td>
													</tr>
												</table>
											</td>
										</tr>
									</table>

									<!-- Text -->
									<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="mobile" border="0" width="600" cellpadding="0" cellspacing="0" object="drag-module-small">
										<tr>
											<td height="30" width="100%">
											</td>
										</tr>
									</table>

									<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="mobile" border="0" width="600" cellpadding="0" cellspacing="0" object="drag-module-small">
										<tr>
											<td valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 22px; color: rgb(249, 97, 69); line-height: 24px; font-weight: bold;"class="fullCenter" >
												<!--[if !mso]><!--><span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;"><!--<![endif]-->We are known All Over The Globe<!--[if !mso]><!--></span><!--<![endif]-->
											</td>
										</tr>
									</table>

									<!-- Text -->
									<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="mobile" border="0" width="600" cellpadding="0" cellspacing="0" object="drag-module-small">
										<tr>
											<td height="30" width="100%">
											</td>
										</tr>
									</table>

									<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="mobile" border="0" width="600" cellpadding="0" cellspacing="0" object="drag-module-small">
										<tr>
											<td align="center" width="100%" style="font-size: 14px; color: rgb(255, 255, 255); text-align: center; font-family: Helvetica, Arial, sans-serif; line-height: 24px; font-weight: bold; vertical-align: top; font-style: italic;">


														<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight:normal;"><!--<![endif]-->
														“Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoet dolore magna aliquam erat volutpat.”<!--[if !mso]><!--></span><!--<![endif]-->


											</td>
										</tr>
									</table>

									<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="mobile" border="0" width="600" cellpadding="0" cellspacing="0" object="drag-module-small">
										<tr>
											<td height="30" width="100%">
											</td>
										</tr>
									</table>

									<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="mobile" border="0" width="600" cellpadding="0" cellspacing="0" object="drag-module-small">
										<tr>
											<td valign="middle" width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 14px; color: rgb(255, 255, 255); line-height: 20px; font-weight: bold;"class="fullCenter" >
												<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgbold', Helvetica; font-weight: normal;"><!--<![endif]-->Jonathan Strong<!--[if !mso]><!--></span><!--<![endif]-->
											</td>
										</tr>
									</table>

									<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="mobile" border="0" width="600" cellpadding="0" cellspacing="0" object="drag-module-small">
										<tr>
											<td align="center" width="100%" style="font-size: 14px; color: rgb(255, 255, 255); text-align: center; font-family: Helvetica, Arial, sans-serif; line-height: 24px; font-weight: bold; vertical-align: top; font-style: italic;">


														<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight:normal;"><!--<![endif]-->Owner Music Group<!--[if !mso]><!--></span><!--<![endif]-->


											</td>
										</tr>
									</table>

									<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="mobile" border="0" width="600" cellpadding="0" cellspacing="0" object="drag-module-small">
										<tr>
											<td height="55" width="100%">
											</td>
										</tr>
									</table>

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
<!-- Seperator 3 End -->

<!-- Wrapper 3 -->
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
												<!--[if !mso]><!--><span style="font-family: 'proxima_novasemibold', Helvetica; font-weight: normal;"><!--<![endif]-->Our Sponsors<!--[if !mso]><!--></span><!--<![endif]-->
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

<!-- Wrapper 2 -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full"  bgcolor="#ffffff"style="background-color: rgb(255, 255, 255);">
	<tr>
		<td width="100%" valign="top" align="center">


			<!-- Wrapper -->
			<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="mobile">
				<tr>
					<td align="center">

						<!-- Space -->
						<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full">
							<tr>
								<td width="100%" height="40"></td>
							</tr>
						</table><!-- End Space -->

					</td>
				</tr>
			</table><!-- End Wrapper -->

		</div>
		</td>
	</tr>
</table><!-- Wrapper 2 -->

<!-- Social Media -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full" bgcolor="#ffffff" style="background-color: rgb(255, 255, 255);">
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
											<td height="12" width="100%">
											</td>
										</tr>
									</table>

									<table width="100%" border="0" cellpadding="0" cellspacing="0" align="left" style="text-align: center;" class="fullCenter">
										<tr>
											<td valign="top" align="center">

												<table width="130" border="0" cellpadding="0" cellspacing="0" align="center" style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;">
													<tr>
														<td width="17" align="center" class="icon17" >
															<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/social_icon_17px_1.png') }}" width="17" alt="" border="0" class="hover" ></a>
														</td>
														<td width="17" align="center" class="icon17" >
															<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/social_icon_17px_2.png') }}" width="17" alt="" border="0" class="hover" ></a>
														</td>
														<td width="17" align="center" class="icon17" >
															<a href="#" style="text-decoration: none;"><img src="{{ asset('template-usaha/basic/images/social_icon_17px_3.png') }}" width="17" alt="" border="0" class="hover" ></a>
														</td>
													</tr>
												</table>

											</td>
										</tr>
									</table>

									<table style="border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;" class="full" align="center" border="0" width="100%" cellpadding="0" cellspacing="0">
										<tr>
											<td height="25" width="100%" style="font-size: 1px; line-height: 1px;">&nbsp;</td>
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
<!-- End Social Media -->

<!-- Unsubscribe -->
<table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" class="full" bgcolor="#ffffff" style="background-color: rgb(255, 255, 255);">
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

									<table width="100%" border="0" cellpadding="0" cellspacing="0" align="left" style="text-align: center;" class="fullCenter">
										<tr>
											<td width="100%" style="text-align: center; font-family: Helvetica, Arial, sans-serif; font-size: 13px; color: rgb(135, 135, 135); line-height: 24px; word-break: break-word;"class="fullCenter" >




													<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;"><!--<![endif]-->
													<a href="http://www.check_online.com" target="_blank" style="color: rgb(135, 135, 135); text-decoration: none;"class="underline" >Check online</a>
													<!--[if !mso]><!--></span><!--<![endif]-->

													&nbsp; | &nbsp;

													<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;"><!--<![endif]-->
													<!--subscribe--><a href="#" style="color: rgb(135, 135, 135); text-decoration: none;"class="underline" >Unsubscribe</a><!--unsub-->
													<!--[if !mso]><!--></span><!--<![endif]-->

													&nbsp; | &nbsp;

													<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgregular', Helvetica; font-weight: normal;"><!--<![endif]-->
													<a href="mailto:infor@mail.com" target="_blank" style="color: rgb(135, 135, 135); text-decoration: none;"class="underline" >Forward to a friend</a>
													<!--[if !mso]><!--></span><!--<![endif]-->



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
<!-- Unsubscribe End -->

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

													<!--[if !mso]><!--><span style="font-family: 'proxima_nova_rgregular', Helvetica;"><!--<![endif]-->
														Copyright © 2015

														<span style="color: rgb(249, 97, 69);">
															RocketWay</span>.
															All Rights Reserved.


													<!--[if !mso]><!--></span><!--<![endif]-->

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

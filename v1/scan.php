<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>TownCenter</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
                <!-- Begin Google Analytics -->
        <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37561318-1']);
  _gaq.push(['_setDomainName', 'towncenter.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
        <!-- End Google Analytics -->
        
	</head>
	<body>
	<?php include 'header.php'; ?>
		<section>
			<article>
				<div class="container">
					<div class="row-fluid span12">
						<div class="sub_main_container">
							<p class="scan_title">Directory Listing Scan Results</p>
							<div class="scan_container">
								<div class="scan_error_content">
									<p class="scan_error_title">255</p>
									<p class="scan_error_txt">Location Data<br/>Errors Detected</p>
								</div>
								<img src="images/scan_arrow.png" width="24" height="44" class="scan_arrow_img"/>
								<input type="button" value="Update" class="scan_update_btn"/>
							</div>
							<div class="clear-fix"></div>
							<p class="scan_error_sub">The Bathroom Supply, 2408 2nd Ave, Newport Beach, CA,</p>
							<a href="#" class="scan_error_phone">(714)361-8457</a>
							<p class="scan_error_phone_txt">(This isn't my business informaion)</p>
							<div class="clear-fix"></div>
							<table class="scan_error_table">
								<thead>
									<tr>
										<td></td>
										<td>Business Name</td>
										<td>Address</td>
										<td>Phone</td>
										<td>Special Offer</td>
										<td>Status</td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td class="scan_td_1">Yahoo!</td>
										<td class="scan_td_2"></td>
										<td class="scan_td_3"><div class="scan_error_found">NOT FOUND</div></td>
										<td class="scan_td_4"></td>
										<td class="scan_td_5">Not standing out</td>
										<td class="scan_td_6">
											<div class="scan_wrong_number">
												<span><img src="images/scan_close.png" width="11" height="11"/></span><p>Not found</p>
											</div>
										</td>
									</tr>
									<tr>
										<td class="scan_td_1">Yelp</td>
										<td class="scan_td_2"></td>
										<td class="scan_td_3"><div class="scan_error_found">NOT FOUND</div></td>
										<td class="scan_td_4"></td>
										<td class="scan_td_5">Not standing out</td>
										<td class="scan_td_6">
											<div class="scan_wrong_number">
												<span><img src="images/scan_close.png" width="11" height="11"/></span><p>Not found</p>
											</div>
										</td>
									</tr>
									<tr>
										<td class="scan_td_1">WhitePages</td>
										<td class="scan_td_2"></td>
										<td class="scan_td_3"><div class="scan_error_found">NOT FOUND</div></td>
										<td class="scan_td_4"></td>
										<td class="scan_td_5">Not standing out</td>
										<td class="scan_td_6">
											<div class="scan_wrong_number">
												<span><img src="images/scan_close.png" width="11" height="11"/></span><p>Not found</p>
											</div>
										</td>
									</tr>
									<tr>
										<td class="scan_td_1">MapQuest<br/><a href="#" class="scan_error_view">view listing</a></td>
										<td class="scan_td_2">The Bathroom Supply</td>
										<td class="scan_td_3">2048 2nd Ave, San Diego, CA 92101</td>
										<td class="scan_td_4">6195736396</td>
										<td class="scan_td_5">Not standing out</td>
										<td class="scan_td_6">
											<div class="scan_wrong_number">
												<span><img src="images/scan_close.png" width="11" height="11"/></span><p>Wrong Phone Number</p>
											</div>
										</td>
									</tr>
									<tr>
										<td class="scan_td_1">Superpages</td>
										<td class="scan_td_2"></td>
										<td class="scan_td_3"><div class="scan_error_found">NOT FOUND</div></td>
										<td class="scan_td_4"></td>
										<td class="scan_td_5">Not standing out</td>
										<td class="scan_td_6">
											<div class="scan_wrong_number">
												<span><img src="images/scan_close.png" width="11" height="11"/></span><p>Not found</p>
											</div>
										</td>
									</tr>
								</tbody>
							</table>
						</div>						
					</div>
				</div>
			</article>
		</section>
		<?php include 'footer.php'; ?>
	</body>
</html>

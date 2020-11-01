<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Caesar Chiper | Program Kriptografi</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="assets/plugins/node-waves/waves.css" rel="stylesheet" />
	
	
    <!-- Bootstrap Select Css -->
    <link href="../..assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="assets/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="assets/css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-blue">
<?php
		
		if (isset($_POST['submit'])){
		
		// ini untuk convert string menjadi uppercase
		function cltn($char){
		$char = strtoupper($char);
		$ord = ord($char);
		return ($ord > 64 && $ord < 91) ? ($ord - 64) : false;
		}

		// Fungsi Enkripsi
		// Ambil Value Inputan
		function encrypt_cipher($str, $plus){
		// Validasi Input Jika Benar Numeric dan String
		if( is_numeric($plus) && $plus <= 26 && is_string($str) ) {
		// Membuat Variabel $al dengan Nilai Array (a-z)
		$al = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
		$nstr = '';
		// Convert Inputan String Ke Array Pake str_split
		foreach( str_split($str) as $i => $v ) {
		//convert string menjadi uppercase
		if( cltn($v) ) {
		$ltn = cltn($v) - 1;
		if( ( $ltn + $plus ) > 25 ) {
		$nstr .= $al[( $ltn + $plus ) - 25];
		}else{
		$nstr .= $al[$ltn+$plus];
		}
		}else{
		$nstr .= $v;
		}
		}
		return $nstr;
		}else{
		return false;	
		}
		}

		} // end isset
		?>	
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html">Program Kriptografi Caesar Chiper</a>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">Menu Navigasi</li>

                    <li>
									
					<li class="active">
						<a href="caesar.php">
                            <span>Caesar Cipher</span>
                        </a>
					</li>
					 </div>
            <!-- #Menu -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar --> <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
			<div class="row">
				<?php
				function Cipher($ch, $key)
				{
				 if (!ctype_alpha($ch))
				 return $ch;
				 $offset = ord(ctype_upper($ch) ? 'A' : 'a');
				 return chr(fmod(((ord($ch) + $key) - $offset), 26) + $offset);
				}
				?>

					<div class="col-sm-6">
						<div class="card">
							<div class="body">
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane fade in active" id="home">
										<b>PlainText</b><br><br>
												<div class="row clearfix">
													<div class="col-sm-12" id="caesar">
														<form  action="caesar.php#caesar" method="get">
															<div class="form-group">
																<div class="form-line" >
																	<input class="form-control no-resize" placeholder="Masukan PlainText..." name="enkripsi" value="<?php
																	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));

																	function Decipher($input, $key)
																	{
																		return Encipher($input, 26 - $key);
																	}
																	$text = $_GET['dekripsi'];
																	$deret = $_GET['jd_dekripsi'];
																	echo $cipherText = Decipher($text, $deret);
																	?>"></input>
																</div>
															</div>
															<div class="form-group">
																<div class="form-line" >
																	<input class="form-control no-resize" type="number" placeholder="Masukan Jumlah Deret..." name="jd_enkripsi"></input>
																</div>
															</div>
															<button type="submit" value="Enkripsi" class="btn bg-blue waves-effect" onclick="Decipher();">
															<span>ENKRIPSI</span>
															</button>
														</form>
											</div>	
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-sm-6">
						<div class="card">
							<div class="body">
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane fade in active" id="home">
										<b>CipherText</b><br><br>
												<div class="row clearfix">
													<div class="col-sm-12" id="caesar">
														<form  action="caesar.php#caesar" method="get">
															<div class="form-group">
																<div class="form-line" >
																	<input class="form-control no-resize" placeholder="CipherText..." value="<?php
																	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
																	function Encipher($input, $key)
																	{
																		$output = "";

																		$inputArr = str_split($input);
																		foreach ($inputArr as $ch)
																			$output .= Cipher($ch, $key);

																		return $output;
																	}
																	$text = $_GET['enkripsi'];
																	$deret = $_GET['jd_enkripsi'];
																	echo $cipherText = Encipher($text, $deret);
																	?>" name="dekripsi"></input>
																</div>
															</div>
															<div class="form-group">
																<div class="form-line" >
																	<input class="form-control no-resize" type="number" placeholder="Masukan Jumlah Deret..." name="jd_dekripsi"></input>
																</div>
															</div>
															<button type="submit" value="dekripsi" class="btn bg-blue waves-effect" >
															<span>DEKRIPSI</span>
														</button>
														</form>
													</div>
												</div>
									</div>
								</div>
							</div>
						</div>
					</div>		
					
			</div>
		</div>
            <!-- #END# Example Tab -->   
	   
    </section>

	    <!-- Select Plugin Js -->
    <script src="../..assets//plugins/bootstrap-select/js/bootstrap-select.js"></script>
	
    <!-- Jquery Core Js -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="assets/plugins/bootstrap/js/bootstrap.js"></script>
	
	    <!-- Select Plugin Js -->
    <script src="../..assets//plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Select Plugin Js -->
    <script src="assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="assets/plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="assets/plugins/jquery-countto/jquery.countTo.js"></script>


    <!-- Custom Js -->
    <script src="assets/js/admin.js"></script>
    <script src="assets/js/pages/index.js"></script>
	
	    <link href="../../assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Demo Js -->
    <script src="assets/js/demo.js"></script>
</body>
</html>
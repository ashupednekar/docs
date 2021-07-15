<?php
	session_start();
	if (!$_SESSION['login']) {
		$dirname = $_SERVER['REQUEST_URI'];

		if (substr($dirname, -1) != '/') {
			$dirname=dirname($dirname).'/';
		} else {
			$dirname = preg_replace('~/+~', '/', $dirname);
		}

		header("Location: ".$dirname."../login.php?redirect=payment/index.php");
	}
?>
<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  
  <link rel="canonical" href="https://affinsys.com/payment/">
  <link rel="shortcut icon" href="../img/favicon.ico">
  <title>Payment - amigo-auth</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700|Roboto+Slab:400,700|Inconsolata:400,700" />

  <link rel="stylesheet" href="../css/theme.css" />
  <link rel="stylesheet" href="../css/theme_extra.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.5.0/styles/github.min.css" />
  
  <script>
    // Current page data
    var mkdocs_page_name = "Payment";
    var mkdocs_page_input_path = "payment.md";
    var mkdocs_page_url = "/payment/";
  </script>
  
  <script src="../js/jquery-2.1.1.min.js" defer></script>
  <script src="../js/modernizr-2.8.3.min.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.5.0/highlight.min.js"></script>
  <script>hljs.initHighlightingOnLoad();</script> 
</head>

<body class="wy-body-for-nav" role="document">

  <div class="wy-grid-for-nav">

    
    <nav data-toggle="wy-nav-shift" class="wy-nav-side stickynav">
    <div class="wy-side-scroll">
      <div class="wy-side-nav-search">
        <a href=".." class="icon icon-home"> amigo-auth</a>
        <div role="search">
  <form id ="rtd-search-form" class="wy-form" action="../search.php" method="get">
      <input type="text" name="q" placeholder="Search docs" title="Type search term here" />
  </form>
</div>
      </div>

      <div class="wy-menu wy-menu-vertical" data-spy="affix" role="navigation" aria-label="main navigation">
                <ul>
                    <li class="toctree-l1"><a class="reference internal" href="..">Intro</a>
                    </li>
                </ul>
                <ul class="current">
                    <li class="toctree-l1 current"><a class="reference internal current" href="./">Payment</a>
    <ul class="current">
    <li class="toctree-l2"><a class="reference internal" href="#this-submodule-takes-care-of-the-processes-involved-in-the-following-main-use-cases">This submodule takes care of the processes involved in the following main use-cases</a>
    </li>
    </ul>
                    </li>
                </ul>
                <p class="caption"><span class="caption-text">Source</span></p>
                <ul>
                    <li class="toctree-l1"><a class="reference internal" href="../source/">Index</a>
                    </li>
                </ul>
      </div>
    </div>
    </nav>

    <section data-toggle="wy-nav-shift" class="wy-nav-content-wrap">

      
      <nav class="wy-nav-top" role="navigation" aria-label="top navigation">
        <i data-toggle="wy-nav-top" class="fa fa-bars"></i>
        <a href="..">amigo-auth</a>
      </nav>

      
      <div class="wy-nav-content">
        <div class="rst-content">
          <div role="navigation" aria-label="breadcrumbs navigation">
  <ul class="wy-breadcrumbs">
    <li><a href="..">Docs</a> &raquo;</li>
    
      
    
    <li>Payment</li>
    <li class="wy-breadcrumbs-aside">
      
    </li>
  </ul>
  
  <hr/>
</div>

          <div role="main">
            <div class="section">
              
                <h3 id="payment-system">Payment System</h3>
<p><img alt="image" src="https://www.onlineinvoices.com/css/images/features/additional_features.png" /></p>
<p>Built to fit right in to out omni-channel ecosystem, amigo payments help users, merchants and SME's by giving them an out of the box tool to seamlessly add Invoicing, RTP and much more within their existing applications or even cutting edge consumer interaction platforms like whatsapp, messenger, google assistant and so on...</p>
<h6 id="this-submodule-takes-care-of-the-processes-involved-in-the-following-main-use-cases">This submodule takes care of the processes involved in the following main use-cases</h6>
<ul>
<li>Invoice Management</li>
<li>Request-to-Pay</li>
<li>Money Transfer</li>
</ul>
<p>Let's take a deeper dive into each of these.</p>
              
            </div>
          </div>
          <footer>
  
    <div class="rst-footer-buttons" role="navigation" aria-label="footer navigation">
      
        <a href="../source/" class="btn btn-neutral float-right" title="Index">Next <span class="icon icon-circle-arrow-right"></span></a>
      
      
        <a href=".." class="btn btn-neutral" title="Intro"><span class="icon icon-circle-arrow-left"></span> Previous</a>
      
    </div>
  

  <hr/>

  <div role="contentinfo">
    <!-- Copyright etc -->
    
  </div>

  Built with <a href="https://www.mkdocs.org/">MkDocs</a> using a <a href="https://github.com/snide/sphinx_rtd_theme">theme</a> provided by <a href="https://readthedocs.org">Read the Docs</a>.
</footer>
      
        </div>
      </div>

    </section>

  </div>

  <div class="rst-versions" role="note" aria-label="versions">
  <span class="rst-current-version" data-toggle="rst-current-version">
    
    
      <span><a href=".." style="color: #fcfcfc">&laquo; Previous</a></span>
    
    
      <span><a href="../source/" style="color: #fcfcfc">Next &raquo;</a></span>
    
  </span>
</div>
    <script>var base_url = '..';</script>
    <script src="../js/theme_extra.js" defer></script>
    <script src="../js/theme.js" defer></script>
      <script src="../search/main.js" defer></script>
    <script defer>
        window.onload = function () {
            SphinxRtdTheme.Navigation.enable(true);
        };
    </script>

</body>
</html>

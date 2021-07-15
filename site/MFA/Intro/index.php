<?php
	session_start();
	if (!$_SESSION['login']) {
		$dirname = $_SERVER['REQUEST_URI'];

		if (substr($dirname, -1) != '/') {
			$dirname=dirname($dirname).'/';
		} else {
			$dirname = preg_replace('~/+~', '/', $dirname);
		}

		header("Location: ".$dirname."../../login.php?redirect=MFA/Intro/index.php");
	}
?>
<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  
  <link rel="canonical" href="https://affinsys.com/MFA/Intro/">
  <link rel="shortcut icon" href="../../img/favicon.ico">
  <title>Intro - amigo-auth</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700|Roboto+Slab:400,700|Inconsolata:400,700" />

  <link rel="stylesheet" href="../../css/theme.css" />
  <link rel="stylesheet" href="../../css/theme_extra.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.5.0/styles/github.min.css" />
  
  <script>
    // Current page data
    var mkdocs_page_name = "Intro";
    var mkdocs_page_input_path = "MFA/Intro.md";
    var mkdocs_page_url = "/MFA/Intro/";
  </script>
  
  <script src="../../js/jquery-2.1.1.min.js" defer></script>
  <script src="../../js/modernizr-2.8.3.min.js" defer></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.5.0/highlight.min.js"></script>
  <script>hljs.initHighlightingOnLoad();</script> 
</head>

<body class="wy-body-for-nav" role="document">

  <div class="wy-grid-for-nav">

    
    <nav data-toggle="wy-nav-shift" class="wy-nav-side stickynav">
    <div class="wy-side-scroll">
      <div class="wy-side-nav-search">
        <a href="../.." class="icon icon-home"> amigo-auth</a>
        <div role="search">
  <form id ="rtd-search-form" class="wy-form" action="../../search.php" method="get">
      <input type="text" name="q" placeholder="Search docs" title="Type search term here" />
  </form>
</div>
      </div>

      <div class="wy-menu wy-menu-vertical" data-spy="affix" role="navigation" aria-label="main navigation">
                <ul>
                    <li class="toctree-l1"><a class="reference internal" href="../..">Intro</a>
                    </li>
                </ul>
                <ul>
                    <li class="toctree-l1"><a class="reference internal" href="../../payment/">Payment</a>
                    </li>
                </ul>
                <p class="caption"><span class="caption-text">Auth</span></p>
                <ul>
                    <li class="toctree-l1"><a class="reference internal" href="../../Auth/Configurations/">Configurations</a>
                    </li>
                    <li class="toctree-l1"><a class="reference internal" href="../../Auth/Data%20Flow/">Data Flow</a>
                    </li>
                    <li class="toctree-l1"><a class="reference internal" href="../../Auth/Database%20Schema/">Database Schema</a>
                    </li>
                    <li class="toctree-l1"><a class="reference internal" href="../../Auth/Intro/">Intro</a>
                    </li>
                    <li class="toctree-l1"><a class="reference internal" href="../../Auth/Use%20Cases/">Use Cases</a>
                    </li>
                </ul>
                <p class="caption"><span class="caption-text">Core</span></p>
                <ul>
                    <li class="toctree-l1"><a class="reference internal" href="../../Core/Why%20amigo-auth/">Why amigo auth</a>
                    </li>
                </ul>
                <p class="caption"><span class="caption-text">MFA</span></p>
                <ul class="current">
                    <li class="toctree-l1"><a class="reference internal" href="../Configurations/">Configurations</a>
                    </li>
                    <li class="toctree-l1"><a class="reference internal" href="../Data%20Flow/">Data Flow</a>
                    </li>
                    <li class="toctree-l1"><a class="reference internal" href="../Database%20Schema/">Database Schema</a>
                    </li>
                    <li class="toctree-l1 current"><a class="reference internal current" href="./">Intro</a>
                    </li>
                    <li class="toctree-l1"><a class="reference internal" href="../Use%20Cases/">Use Cases</a>
                    </li>
                </ul>
                <p class="caption"><span class="caption-text">Onboarding</span></p>
                <ul>
                    <li class="toctree-l1"><a class="reference internal" href="../../Onboarding/Configurations/">Configurations</a>
                    </li>
                    <li class="toctree-l1"><a class="reference internal" href="../../Onboarding/Data%20Flow/">Data Flow</a>
                    </li>
                    <li class="toctree-l1"><a class="reference internal" href="../../Onboarding/Database%20Schema/">Database Schema</a>
                    </li>
                    <li class="toctree-l1"><a class="reference internal" href="../../Onboarding/Intro/">Intro</a>
                    </li>
                    <li class="toctree-l1"><a class="reference internal" href="../../Onboarding/Use%20Cases/">Use Cases</a>
                    </li>
                </ul>
                <p class="caption"><span class="caption-text">User Journey</span></p>
                <ul>
                    <li class="toctree-l1"><a class="reference internal" href="../../User%20Journey/Birds%20eye%20view/">Birds eye view</a>
                    </li>
                    <li class="toctree-l1"><a class="reference internal" href="../../User%20Journey/Chatbanking/">Chatbanking</a>
                    </li>
                </ul>
                <p class="caption"><span class="caption-text">Wallet</span></p>
                <ul>
                    <li class="toctree-l1"><a class="reference internal" href="../../Wallet/Configurations/">Configurations</a>
                    </li>
                    <li class="toctree-l1"><a class="reference internal" href="../../Wallet/Data%20Flow/">Data Flow</a>
                    </li>
                    <li class="toctree-l1"><a class="reference internal" href="../../Wallet/Database%20Schema/">Database Schema</a>
                    </li>
                    <li class="toctree-l1"><a class="reference internal" href="../../Wallet/Intro/">Intro</a>
                    </li>
                    <li class="toctree-l1"><a class="reference internal" href="../../Wallet/Use%20Cases/">Use Cases</a>
                    </li>
                </ul>
                <p class="caption"><span class="caption-text">Source</span></p>
                <ul>
                    <li class="toctree-l1"><a class="reference internal" href="../../source/">Index</a>
                    </li>
                </ul>
      </div>
    </div>
    </nav>

    <section data-toggle="wy-nav-shift" class="wy-nav-content-wrap">

      
      <nav class="wy-nav-top" role="navigation" aria-label="top navigation">
        <i data-toggle="wy-nav-top" class="fa fa-bars"></i>
        <a href="../..">amigo-auth</a>
      </nav>

      
      <div class="wy-nav-content">
        <div class="rst-content">
          <div role="navigation" aria-label="breadcrumbs navigation">
  <ul class="wy-breadcrumbs">
    <li><a href="../..">Docs</a> &raquo;</li>
    
      
        
          <li>MFA &raquo;</li>
        
      
    
    <li>Intro</li>
    <li class="wy-breadcrumbs-aside">
      
    </li>
  </ul>
  
  <hr/>
</div>

          <div role="main">
            <div class="section">
              
                
              
            </div>
          </div>
          <footer>
  
    <div class="rst-footer-buttons" role="navigation" aria-label="footer navigation">
      
        <a href="../Use%20Cases/" class="btn btn-neutral float-right" title="Use Cases">Next <span class="icon icon-circle-arrow-right"></span></a>
      
      
        <a href="../Database%20Schema/" class="btn btn-neutral" title="Database Schema"><span class="icon icon-circle-arrow-left"></span> Previous</a>
      
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
    
    
      <span><a href="../Database%20Schema/" style="color: #fcfcfc">&laquo; Previous</a></span>
    
    
      <span><a href="../Use%20Cases/" style="color: #fcfcfc">Next &raquo;</a></span>
    
  </span>
</div>
    <script>var base_url = '../..';</script>
    <script src="../../js/theme_extra.js" defer></script>
    <script src="../../js/theme.js" defer></script>
      <script src="../../search/main.js" defer></script>
    <script defer>
        window.onload = function () {
            SphinxRtdTheme.Navigation.enable(true);
        };
    </script>

</body>
</html>

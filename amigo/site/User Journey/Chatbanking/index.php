<?php
	session_start();
	if (!$_SESSION['login']) {
		$dirname = $_SERVER['REQUEST_URI'];

		if (substr($dirname, -1) != '/') {
			$dirname=dirname($dirname).'/';
		} else {
			$dirname = preg_replace('~/+~', '/', $dirname);
		}

		header("Location: ".$dirname."../../login.php?redirect=User Journey/Chatbanking/index.php");
	}
?>
<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  
  <link rel="canonical" href="https://affinsys.com/User%20Journey/Chatbanking/">
  <link rel="shortcut icon" href="../../img/favicon.ico">
  <title>Chatbanking - amigo-auth</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700|Roboto+Slab:400,700|Inconsolata:400,700" />

  <link rel="stylesheet" href="../../css/theme.css" />
  <link rel="stylesheet" href="../../css/theme_extra.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.5.0/styles/github.min.css" />
  
  <script>
    // Current page data
    var mkdocs_page_name = "Chatbanking";
    var mkdocs_page_input_path = "User Journey/Chatbanking.md";
    var mkdocs_page_url = "/User%20Journey/Chatbanking/";
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
                <ul>
                    <li class="toctree-l1"><a class="reference internal" href="../../MFA/Configurations/">Configurations</a>
                    </li>
                    <li class="toctree-l1"><a class="reference internal" href="../../MFA/Data%20Flow/">Data Flow</a>
                    </li>
                    <li class="toctree-l1"><a class="reference internal" href="../../MFA/Database%20Schema/">Database Schema</a>
                    </li>
                    <li class="toctree-l1"><a class="reference internal" href="../../MFA/Intro/">Intro</a>
                    </li>
                    <li class="toctree-l1"><a class="reference internal" href="../../MFA/Use%20Cases/">Use Cases</a>
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
                <p class="caption"><span class="caption-text">Payment</span></p>
                <ul>
                    <li class="toctree-l1"><a class="reference internal" href="../../Payment/Database%20Schema/">Database Schema</a>
                    </li>
                    <li class="toctree-l1"><a class="reference internal" href="../../Payment/Intro/">Intro</a>
                    </li>
                    <li class="toctree-l1"><a class="reference internal" href="../../Payment/Request%20Management/">Request Management</a>
                    </li>
                    <li class="toctree-l1"><a class="reference internal" href="../../Payment/Settlement/">Settlement</a>
                    </li>
                </ul>
                <p class="caption"><span class="caption-text">User Journey</span></p>
                <ul class="current">
                    <li class="toctree-l1"><a class="reference internal" href="../Birds%20eye%20view/">Birds eye view</a>
                    </li>
                    <li class="toctree-l1 current"><a class="reference internal current" href="./">Chatbanking</a>
    <ul class="current">
    <li class="toctree-l2"><a class="reference internal" href="#what-does-a-secure-whatsapp-banking-customer-journey-look-like">What does a secure WhatsApp banking customer journey look like?</a>
        <ul>
    <li class="toctree-l3"><a class="reference internal" href="#for-existing-customers">For Existing customers</a>
    </li>
    <li class="toctree-l3"><a class="reference internal" href="#for-new-to-bank-ntb-customers">For New to bank (NTB) Customers</a>
    </li>
        </ul>
    </li>
    </ul>
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
    
      
        
          <li>User Journey &raquo;</li>
        
      
    
    <li>Chatbanking</li>
    <li class="wy-breadcrumbs-aside">
      
    </li>
  </ul>
  
  <hr/>
</div>

          <div role="main">
            <div class="section">
              
                <h2 id="secure-chatbanking-journey">Secure Chatbanking journey</h2>
<h3 id="what-does-a-secure-whatsapp-banking-customer-journey-look-like">What does a secure WhatsApp banking customer journey look like?</h3>
<p>WhatsApp banking is replacing erstwhile USSD based mobile banking and Mobile apps due to additional security and convenience. Here’s a comprehensive list of security features we implemented at our partner banks to ensure their customers get the most secure user experience.   </p>
<h4 id="for-existing-customers">For Existing customers</h4>
<ol>
<li>
<p><strong>Registration with progressive profiling or MFA</strong> - A customer can only register with their Registered mobile number after a secondary verification from either a digital channel API or verification of personal information   </p>
</li>
<li>
<p><strong>Chat Banking credentials</strong> - When the customers register they can create their own id and PIN, which will serve as the second factor of authentication for subsequent sessions. This ID is created outside of WhatsApp to prevent leaving traces in the chat history. The chat banking id and pin are not revealed anywhere in the conversations.   </p>
</li>
<li>
<p><strong>Secure Session Management</strong> - A user session is created every time a customer logs in and this session is valid for a predefined period of activity or till the time the customer explicitly logs out of the session.</p>
</li>
</ol>
<p><img alt="Digital onboarding options" src="https://www.bankbuddy.ai/img/posts_img/digital-onboarding-options.png" /></p>
<ol>
<li>
<p><strong>KYC levels</strong> - There are KYC levels defined for customers to impose transaction and amount limits for risk management and compliance purposes. The limits can be set for individual transactions or aggregate transactions.   </p>
</li>
<li>
<p><strong>Secure 2-factor authentication</strong> is done via OTP for all financial transactions like bill payments and transfers, this also ensures that the system cannot be compromised on a session on WhatsApp web.   </p>
</li>
<li>
<p><strong>Data protection</strong> - All sensitive data displayed in WhatsApp is masked, PDF receipts are auto-generated for confirmations of all financial transactions. The platform allows you to secure PDF receipts and statements on your phone using passwords. So even if the customer loses their phone, their financial information is secure.</p>
</li>
</ol>
<h4 id="for-new-to-bank-ntb-customers">For New to bank (NTB) Customers</h4>
<p>Secure Onboarding - It just takes a minute to open a wallet irrespective of whether you hold an account with the bank or not.   </p>
<p>Regular accounts like CASA, Joint accounts, SME accounts can be opened instantaneously and securely from WhatsApp and other channels with a variety of options like Debit freeze, NID check, Face match, Liveness detection, and branch/agent for second level authentication.   </p>
<p>Safer than cash - if you need to lend or give someone money, you can transfer money to their mobile even though they do not have a wallet. All they need to do is register themselves with the special link sent to them over SMS, and use that money safely. You can also have proof of giving money!   </p>
<p><img alt="Digital onboarding options" src="https://www.bankbuddy.ai/img/posts_img/digital-onboarding-options.png" /></p>
<p>Customers can start using your wallet with someone funding their wallet - with KYC (national id and address proof), you can have your full-fledged Digital Banking Wallet as good as having a banking account.</p>
<p><img alt="screenshot" src="https://i.ibb.co/4J3Hcfb/Screenshot-2021-07-14-at-12-08-17-PM.png" /></p>
              
            </div>
          </div>
          <footer>
  
    <div class="rst-footer-buttons" role="navigation" aria-label="footer navigation">
      
        <a href="../../Wallet/Configurations/" class="btn btn-neutral float-right" title="Configurations">Next <span class="icon icon-circle-arrow-right"></span></a>
      
      
        <a href="../Birds%20eye%20view/" class="btn btn-neutral" title="Birds eye view"><span class="icon icon-circle-arrow-left"></span> Previous</a>
      
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
    
    
      <span><a href="../Birds%20eye%20view/" style="color: #fcfcfc">&laquo; Previous</a></span>
    
    
      <span><a href="../../Wallet/Configurations/" style="color: #fcfcfc">Next &raquo;</a></span>
    
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






<!DOCTYPE html>
<html>
  <head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object# article: http://ogp.me/ns/article# profile: http://ogp.me/ns/profile#">
    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>emogrifier/Classes/Emogrifier.php at master · jjriv/emogrifier · GitHub</title>
    <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub" />
    <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub" />
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-144.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144.png" />
    <meta property="fb:app_id" content="1401488693436528"/>

      <meta content="@github" name="twitter:site" /><meta content="summary" name="twitter:card" /><meta content="jjriv/emogrifier" name="twitter:title" /><meta content="emogrifier - Converts CSS styles into inline style attributes in your HTML code." name="twitter:description" /><meta content="https://1.gravatar.com/avatar/3ab7ce512822984d7049428dd23ab0c3?d=https%3A%2F%2Fidenticons.github.com%2F7cd0f83c813456bf39a1b2bfcb4e900b.png&amp;r=x&amp;s=400" name="twitter:image:src" />
<meta content="GitHub" property="og:site_name" /><meta content="object" property="og:type" /><meta content="https://1.gravatar.com/avatar/3ab7ce512822984d7049428dd23ab0c3?d=https%3A%2F%2Fidenticons.github.com%2F7cd0f83c813456bf39a1b2bfcb4e900b.png&amp;r=x&amp;s=400" property="og:image" /><meta content="jjriv/emogrifier" property="og:title" /><meta content="https://github.com/jjriv/emogrifier" property="og:url" /><meta content="emogrifier - Converts CSS styles into inline style attributes in your HTML code." property="og:description" />

    <meta name="hostname" content="github-fe138-cp1-prd.iad.github.net">
    <meta name="ruby" content="ruby 2.1.0p0-github-tcmalloc (87d8860372) [x86_64-linux]">
    <link rel="assets" href="https://github.global.ssl.fastly.net/">
    <link rel="conduit-xhr" href="https://ghconduit.com:25035/">
    <link rel="xhr-socket" href="/_sockets" />


    <meta name="msapplication-TileImage" content="/windows-tile.png" />
    <meta name="msapplication-TileColor" content="#ffffff" />
    <meta name="selected-link" value="repo_source" data-pjax-transient />
    <meta content="collector.githubapp.com" name="octolytics-host" /><meta content="collector-cdn.github.com" name="octolytics-script-host" /><meta content="github" name="octolytics-app-id" /><meta content="C0F1DAA1:22D9:3968D58:52FCFEA9" name="octolytics-dimension-request_id" />
    

    
    
    <link rel="icon" type="image/x-icon" href="/favicon.ico" />

    <meta content="authenticity_token" name="csrf-param" />
<meta content="5By3OZD20BEOOAUY5LqnXsKEuzNnbi4LPhChBAt8XiI=" name="csrf-token" />

    <link href="https://github.global.ssl.fastly.net/assets/github-1d6e450b54230462761f7f0fb692c60039b0e67c.css" media="all" rel="stylesheet" type="text/css" />
    <link href="https://github.global.ssl.fastly.net/assets/github2-b4dcbb73b0e43228627f42f62e0587eed9d692fb.css" media="all" rel="stylesheet" type="text/css" />
    


      <script src="https://github.global.ssl.fastly.net/assets/frameworks-693e11922dcacc3a7408a911fe1647da4febd3bd.js" type="text/javascript"></script>
      <script async="async" defer="defer" src="https://github.global.ssl.fastly.net/assets/github-b741f7e70431fc287ccebb131cd57d59fee617b5.js" type="text/javascript"></script>
      
      <meta http-equiv="x-pjax-version" content="8a2e8fb661b4aa49c088cdc4b6f4622b">

        <link data-pjax-transient rel='permalink' href='/jjriv/emogrifier/blob/ec76e0cdb429b81a53d35e913760fd7b581cd107/Classes/Emogrifier.php'>

  <meta name="description" content="emogrifier - Converts CSS styles into inline style attributes in your HTML code." />

  <meta content="4063419" name="octolytics-dimension-user_id" /><meta content="jjriv" name="octolytics-dimension-user_login" /><meta content="14871640" name="octolytics-dimension-repository_id" /><meta content="jjriv/emogrifier" name="octolytics-dimension-repository_nwo" /><meta content="true" name="octolytics-dimension-repository_public" /><meta content="false" name="octolytics-dimension-repository_is_fork" /><meta content="14871640" name="octolytics-dimension-repository_network_root_id" /><meta content="jjriv/emogrifier" name="octolytics-dimension-repository_network_root_nwo" />
  <link href="https://github.com/jjriv/emogrifier/commits/master.atom" rel="alternate" title="Recent Commits to emogrifier:master" type="application/atom+xml" />

  </head>


  <body class="logged_out  env-production  vis-public page-blob">
    <div class="wrapper">
      
      
      
      


      
      <div class="header header-logged-out">
  <div class="container clearfix">

    <a class="header-logo-wordmark" href="https://github.com/">
      <span class="mega-octicon octicon-logo-github"></span>
    </a>

    <div class="header-actions">
        <a class="button primary" href="/join">Sign up</a>
      <a class="button signin" href="/login?return_to=%2Fjjriv%2Femogrifier%2Fblob%2Fmaster%2FClasses%2FEmogrifier.php">Sign in</a>
    </div>

    <div class="command-bar js-command-bar  in-repository">

      <ul class="top-nav">
          <li class="explore"><a href="/explore">Explore</a></li>
        <li class="features"><a href="/features">Features</a></li>
          <li class="enterprise"><a href="https://enterprise.github.com/">Enterprise</a></li>
          <li class="blog"><a href="/blog">Blog</a></li>
      </ul>
        <form accept-charset="UTF-8" action="/search" class="command-bar-form" id="top_search_form" method="get">

<input type="text" data-hotkey="/ s" name="q" id="js-command-bar-field" placeholder="Search or type a command" tabindex="1" autocapitalize="off"
    
    
      data-repo="jjriv/emogrifier"
      data-branch="master"
      data-sha="77f62c664692b645b4b828a1e3d24c3fc72b5c4e"
  >

    <input type="hidden" name="nwo" value="jjriv/emogrifier" />

    <div class="select-menu js-menu-container js-select-menu search-context-select-menu">
      <span class="minibutton select-menu-button js-menu-target">
        <span class="js-select-button">This repository</span>
      </span>

      <div class="select-menu-modal-holder js-menu-content js-navigation-container">
        <div class="select-menu-modal">

          <div class="select-menu-item js-navigation-item js-this-repository-navigation-item selected">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" class="js-search-this-repository" name="search_target" value="repository" checked="checked" />
            <div class="select-menu-item-text js-select-button-text">This repository</div>
          </div> <!-- /.select-menu-item -->

          <div class="select-menu-item js-navigation-item js-all-repositories-navigation-item">
            <span class="select-menu-item-icon octicon octicon-check"></span>
            <input type="radio" name="search_target" value="global" />
            <div class="select-menu-item-text js-select-button-text">All repositories</div>
          </div> <!-- /.select-menu-item -->

        </div>
      </div>
    </div>

  <span class="octicon help tooltipped downwards" aria-label="Show command bar help">
    <span class="octicon octicon-question"></span>
  </span>


  <input type="hidden" name="ref" value="cmdform">

</form>
    </div>

  </div>
</div>




          <div class="site" itemscope itemtype="http://schema.org/WebPage">
    
    <div class="pagehead repohead instapaper_ignore readability-menu">
      <div class="container">
        

<ul class="pagehead-actions">


  <li>
    <a href="/login?return_to=%2Fjjriv%2Femogrifier"
    class="minibutton with-count js-toggler-target star-button tooltipped upwards"
    aria-label="You must be signed in to use this feature" rel="nofollow">
    <span class="octicon octicon-star"></span>Star
  </a>

    <a class="social-count js-social-count" href="/jjriv/emogrifier/stargazers">
      11
    </a>

  </li>

    <li>
      <a href="/login?return_to=%2Fjjriv%2Femogrifier"
        class="minibutton with-count js-toggler-target fork-button tooltipped upwards"
        aria-label="You must be signed in to fork a repository" rel="nofollow">
        <span class="octicon octicon-git-branch"></span>Fork
      </a>
      <a href="/jjriv/emogrifier/network" class="social-count">
        11
      </a>
    </li>
</ul>

        <h1 itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="entry-title public">
          <span class="repo-label"><span>public</span></span>
          <span class="mega-octicon octicon-repo"></span>
          <span class="author">
            <a href="/jjriv" class="url fn" itemprop="url" rel="author"><span itemprop="title">jjriv</span></a>
          </span>
          <span class="repohead-name-divider">/</span>
          <strong><a href="/jjriv/emogrifier" class="js-current-repository js-repo-home-link">emogrifier</a></strong>

          <span class="page-context-loader">
            <img alt="Octocat-spinner-32" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
          </span>

        </h1>
      </div><!-- /.container -->
    </div><!-- /.repohead -->

    <div class="container">
      

      <div class="repository-with-sidebar repo-container new-discussion-timeline js-new-discussion-timeline  ">
        <div class="repository-sidebar">
            

<div class="sunken-menu vertical-right repo-nav js-repo-nav js-repository-container-pjax js-octicon-loaders">
  <div class="sunken-menu-contents">
    <ul class="sunken-menu-group">
      <li class="tooltipped leftwards" aria-label="Code">
        <a href="/jjriv/emogrifier" aria-label="Code" class="selected js-selected-navigation-item sunken-menu-item" data-gotokey="c" data-pjax="true" data-selected-links="repo_source repo_downloads repo_commits repo_tags repo_branches /jjriv/emogrifier">
          <span class="octicon octicon-code"></span> <span class="full-word">Code</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

        <li class="tooltipped leftwards" aria-label="Issues">
          <a href="/jjriv/emogrifier/issues" aria-label="Issues" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-gotokey="i" data-selected-links="repo_issues /jjriv/emogrifier/issues">
            <span class="octicon octicon-issue-opened"></span> <span class="full-word">Issues</span>
            <span class='counter'>3</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>        </li>

      <li class="tooltipped leftwards" aria-label="Pull Requests">
        <a href="/jjriv/emogrifier/pulls" aria-label="Pull Requests" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-gotokey="p" data-selected-links="repo_pulls /jjriv/emogrifier/pulls">
            <span class="octicon octicon-git-pull-request"></span> <span class="full-word">Pull Requests</span>
            <span class='counter'>1</span>
            <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>


    </ul>
    <div class="sunken-menu-separator"></div>
    <ul class="sunken-menu-group">

      <li class="tooltipped leftwards" aria-label="Pulse">
        <a href="/jjriv/emogrifier/pulse" aria-label="Pulse" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="pulse /jjriv/emogrifier/pulse">
          <span class="octicon octicon-pulse"></span> <span class="full-word">Pulse</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped leftwards" aria-label="Graphs">
        <a href="/jjriv/emogrifier/graphs" aria-label="Graphs" class="js-selected-navigation-item sunken-menu-item" data-pjax="true" data-selected-links="repo_graphs repo_contributors /jjriv/emogrifier/graphs">
          <span class="octicon octicon-graph"></span> <span class="full-word">Graphs</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>

      <li class="tooltipped leftwards" aria-label="Network">
        <a href="/jjriv/emogrifier/network" aria-label="Network" class="js-selected-navigation-item sunken-menu-item js-disable-pjax" data-selected-links="repo_network /jjriv/emogrifier/network">
          <span class="octicon octicon-git-branch"></span> <span class="full-word">Network</span>
          <img alt="Octocat-spinner-32" class="mini-loader" height="16" src="https://github.global.ssl.fastly.net/images/spinners/octocat-spinner-32.gif" width="16" />
</a>      </li>
    </ul>


  </div>
</div>

              <div class="only-with-full-nav">
                

  

<div class="clone-url open"
  data-protocol-type="http"
  data-url="/users/set_protocol?protocol_selector=http&amp;protocol_type=clone">
  <h3><strong>HTTPS</strong> clone URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="https://github.com/jjriv/emogrifier.git" readonly="readonly">

    <span class="js-zeroclipboard url-box-clippy minibutton zeroclipboard-button" data-clipboard-text="https://github.com/jjriv/emogrifier.git" data-copied-hint="copied!" title="copy to clipboard"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>

  

<div class="clone-url "
  data-protocol-type="subversion"
  data-url="/users/set_protocol?protocol_selector=subversion&amp;protocol_type=clone">
  <h3><strong>Subversion</strong> checkout URL</h3>
  <div class="clone-url-box">
    <input type="text" class="clone js-url-field"
           value="https://github.com/jjriv/emogrifier" readonly="readonly">

    <span class="js-zeroclipboard url-box-clippy minibutton zeroclipboard-button" data-clipboard-text="https://github.com/jjriv/emogrifier" data-copied-hint="copied!" title="copy to clipboard"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>


<p class="clone-options">You can clone with
      <a href="#" class="js-clone-selector" data-protocol="http">HTTPS</a>,
      or <a href="#" class="js-clone-selector" data-protocol="subversion">Subversion</a>.
  <span class="octicon help tooltipped upwards" aria-label="Get help on which URL is right for you.">
    <a href="https://help.github.com/articles/which-remote-url-should-i-use">
    <span class="octicon octicon-question"></span>
    </a>
  </span>
</p>



                <a href="/jjriv/emogrifier/archive/master.zip"
                   class="minibutton sidebar-button"
                   title="Download this repository as a zip file"
                   rel="nofollow">
                  <span class="octicon octicon-cloud-download"></span>
                  Download ZIP
                </a>
              </div>
        </div><!-- /.repository-sidebar -->

        <div id="js-repo-pjax-container" class="repository-content context-loader-container" data-pjax-container>
          


<!-- blob contrib key: blob_contributors:v21:6ec84ce8b4e3d24da430edc900693baf -->

<p title="This is a placeholder element" class="js-history-link-replace hidden"></p>

<a href="/jjriv/emogrifier/find/master" data-pjax data-hotkey="t" class="js-show-file-finder" style="display:none">Show File Finder</a>

<div class="file-navigation">
  

<div class="select-menu js-menu-container js-select-menu" >
  <span class="minibutton select-menu-button js-menu-target" data-hotkey="w"
    data-master-branch="master"
    data-ref="master"
    role="button" aria-label="Switch branches or tags" tabindex="0">
    <span class="octicon octicon-git-branch"></span>
    <i>branch:</i>
    <span class="js-select-button">master</span>
  </span>

  <div class="select-menu-modal-holder js-menu-content js-navigation-container" data-pjax>

    <div class="select-menu-modal">
      <div class="select-menu-header">
        <span class="select-menu-title">Switch branches/tags</span>
        <span class="octicon octicon-remove-close js-menu-close"></span>
      </div> <!-- /.select-menu-header -->

      <div class="select-menu-filters">
        <div class="select-menu-text-filter">
          <input type="text" aria-label="Filter branches/tags" id="context-commitish-filter-field" class="js-filterable-field js-navigation-enable" placeholder="Filter branches/tags">
        </div>
        <div class="select-menu-tabs">
          <ul>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="branches" class="js-select-menu-tab">Branches</a>
            </li>
            <li class="select-menu-tab">
              <a href="#" data-tab-filter="tags" class="js-select-menu-tab">Tags</a>
            </li>
          </ul>
        </div><!-- /.select-menu-tabs -->
      </div><!-- /.select-menu-filters -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="branches">

        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


            <div class="select-menu-item js-navigation-item selected">
              <span class="select-menu-item-icon octicon octicon-check"></span>
              <a href="/jjriv/emogrifier/blob/master/Classes/Emogrifier.php"
                 data-name="master"
                 data-skip-pjax="true"
                 rel="nofollow"
                 class="js-navigation-open select-menu-item-text js-select-button-text css-truncate-target"
                 title="master">master</a>
            </div> <!-- /.select-menu-item -->
        </div>

          <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

      <div class="select-menu-list select-menu-tab-bucket js-select-menu-tab-bucket" data-tab-filter="tags">
        <div data-filterable-for="context-commitish-filter-field" data-filterable-type="substring">


        </div>

        <div class="select-menu-no-results">Nothing to show</div>
      </div> <!-- /.select-menu-list -->

    </div> <!-- /.select-menu-modal -->
  </div> <!-- /.select-menu-modal-holder -->
</div> <!-- /.select-menu -->

  <div class="breadcrumb">
    <span class='repo-root js-repo-root'><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/jjriv/emogrifier" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">emogrifier</span></a></span></span><span class="separator"> / </span><span itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a href="/jjriv/emogrifier/tree/master/Classes" data-branch="master" data-direction="back" data-pjax="true" itemscope="url"><span itemprop="title">Classes</span></a></span><span class="separator"> / </span><strong class="final-path">Emogrifier.php</strong> <span class="js-zeroclipboard minibutton zeroclipboard-button" data-clipboard-text="Classes/Emogrifier.php" data-copied-hint="copied!" title="copy to clipboard"><span class="octicon octicon-clippy"></span></span>
  </div>
</div>


  <div class="commit file-history-tease">
    <img alt="Roman Ožana" class="main-avatar js-avatar" data-user="105520" height="24" src="https://2.gravatar.com/avatar/d5adcf70fd01a3ba35e2385f7aa3085a?d=https%3A%2F%2Fidenticons.github.com%2F3ea69a3b3fecbb68d82dec11ca4904fa.png&amp;r=x&amp;s=140" width="24" />
    <span class="author"><a href="/OzzyCzech" rel="author">OzzyCzech</a></span>
    <time class="js-relative-date" data-title-format="YYYY-MM-DD HH:mm:ss" datetime="2014-02-12T07:37:11-08:00" title="2014-02-12 07:37:11">February 12, 2014</time>
    <div class="commit-title">
        <a href="/jjriv/emogrifier/commit/81877e4b2eeaf1d774a1bdd0658090d4b4e369a2" class="message" data-pjax="true" title="Ignore all Warnings produce by DOMDocument::loadHTML()">Ignore all Warnings produce by DOMDocument::loadHTML()</a>
    </div>

    <div class="participation">
      <p class="quickstat"><a href="#blob_contributors_box" rel="facebox"><strong>3</strong> contributors</a></p>
          <a class="avatar tooltipped downwards" title="oliverklee" href="/jjriv/emogrifier/commits/master/Classes/Emogrifier.php?author=oliverklee"><img alt="Oliver Klee" class=" js-avatar" data-user="765746" height="20" src="https://0.gravatar.com/avatar/a67bdda975c9fa3ce7c57b5892d7be83?d=https%3A%2F%2Fidenticons.github.com%2Fc27d5a9f5d33e5ae7b538a751c8d1325.png&amp;r=x&amp;s=140" width="20" /></a>
    <a class="avatar tooltipped downwards" title="OzzyCzech" href="/jjriv/emogrifier/commits/master/Classes/Emogrifier.php?author=OzzyCzech"><img alt="Roman Ožana" class=" js-avatar" data-user="105520" height="20" src="https://2.gravatar.com/avatar/d5adcf70fd01a3ba35e2385f7aa3085a?d=https%3A%2F%2Fidenticons.github.com%2F3ea69a3b3fecbb68d82dec11ca4904fa.png&amp;r=x&amp;s=140" width="20" /></a>
    <a class="avatar tooltipped downwards" title="jjriv" href="/jjriv/emogrifier/commits/master/Classes/Emogrifier.php?author=jjriv"><img alt="John Reeve" class=" js-avatar" data-user="4063419" height="20" src="https://1.gravatar.com/avatar/3ab7ce512822984d7049428dd23ab0c3?d=https%3A%2F%2Fidenticons.github.com%2F7cd0f83c813456bf39a1b2bfcb4e900b.png&amp;r=x&amp;s=140" width="20" /></a>


    </div>
    <div id="blob_contributors_box" style="display:none">
      <h2 class="facebox-header">Users who have contributed to this file</h2>
      <ul class="facebox-user-list">
          <li class="facebox-user-list-item">
            <img alt="Oliver Klee" class=" js-avatar" data-user="765746" height="24" src="https://0.gravatar.com/avatar/a67bdda975c9fa3ce7c57b5892d7be83?d=https%3A%2F%2Fidenticons.github.com%2Fc27d5a9f5d33e5ae7b538a751c8d1325.png&amp;r=x&amp;s=140" width="24" />
            <a href="/oliverklee">oliverklee</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="Roman Ožana" class=" js-avatar" data-user="105520" height="24" src="https://2.gravatar.com/avatar/d5adcf70fd01a3ba35e2385f7aa3085a?d=https%3A%2F%2Fidenticons.github.com%2F3ea69a3b3fecbb68d82dec11ca4904fa.png&amp;r=x&amp;s=140" width="24" />
            <a href="/OzzyCzech">OzzyCzech</a>
          </li>
          <li class="facebox-user-list-item">
            <img alt="John Reeve" class=" js-avatar" data-user="4063419" height="24" src="https://1.gravatar.com/avatar/3ab7ce512822984d7049428dd23ab0c3?d=https%3A%2F%2Fidenticons.github.com%2F7cd0f83c813456bf39a1b2bfcb4e900b.png&amp;r=x&amp;s=140" width="24" />
            <a href="/jjriv">jjriv</a>
          </li>
      </ul>
    </div>
  </div>

<div class="file-box">
  <div class="file">
    <div class="meta">
      <div class="info file-name">
        <span class="icon"><b class="octicon octicon-file-text"></b></span>
        <span class="mode" title="File Mode">file</span>
        <span class="meta-divider"></span>
          <span>683 lines (605 sloc)</span>
          <span class="meta-divider"></span>
        <span>24.178 kb</span>
      </div>
      <div class="actions">
        <div class="button-group">
              <a class="minibutton disabled tooltipped leftwards" href="#"
                 aria-label="You must be signed in to make or propose changes">Edit</a>
          <a href="/jjriv/emogrifier/raw/master/Classes/Emogrifier.php" class="button minibutton " id="raw-url">Raw</a>
            <a href="/jjriv/emogrifier/blame/master/Classes/Emogrifier.php" class="button minibutton js-update-url-with-hash">Blame</a>
          <a href="/jjriv/emogrifier/commits/master/Classes/Emogrifier.php" class="button minibutton " rel="nofollow">History</a>
        </div><!-- /.button-group -->
          <a class="minibutton danger disabled empty-icon tooltipped leftwards" href="#"
             aria-label="You must be signed in to make or propose changes">
          Delete
        </a>
      </div><!-- /.actions -->
    </div>
        <div class="blob-wrapper data type-php js-blob-data">
        <table class="file-code file-diff tab-size-8">
          <tr class="file-code-line">
            <td class="blob-line-nums">
              <span id="L1" rel="#L1">1</span>
<span id="L2" rel="#L2">2</span>
<span id="L3" rel="#L3">3</span>
<span id="L4" rel="#L4">4</span>
<span id="L5" rel="#L5">5</span>
<span id="L6" rel="#L6">6</span>
<span id="L7" rel="#L7">7</span>
<span id="L8" rel="#L8">8</span>
<span id="L9" rel="#L9">9</span>
<span id="L10" rel="#L10">10</span>
<span id="L11" rel="#L11">11</span>
<span id="L12" rel="#L12">12</span>
<span id="L13" rel="#L13">13</span>
<span id="L14" rel="#L14">14</span>
<span id="L15" rel="#L15">15</span>
<span id="L16" rel="#L16">16</span>
<span id="L17" rel="#L17">17</span>
<span id="L18" rel="#L18">18</span>
<span id="L19" rel="#L19">19</span>
<span id="L20" rel="#L20">20</span>
<span id="L21" rel="#L21">21</span>
<span id="L22" rel="#L22">22</span>
<span id="L23" rel="#L23">23</span>
<span id="L24" rel="#L24">24</span>
<span id="L25" rel="#L25">25</span>
<span id="L26" rel="#L26">26</span>
<span id="L27" rel="#L27">27</span>
<span id="L28" rel="#L28">28</span>
<span id="L29" rel="#L29">29</span>
<span id="L30" rel="#L30">30</span>
<span id="L31" rel="#L31">31</span>
<span id="L32" rel="#L32">32</span>
<span id="L33" rel="#L33">33</span>
<span id="L34" rel="#L34">34</span>
<span id="L35" rel="#L35">35</span>
<span id="L36" rel="#L36">36</span>
<span id="L37" rel="#L37">37</span>
<span id="L38" rel="#L38">38</span>
<span id="L39" rel="#L39">39</span>
<span id="L40" rel="#L40">40</span>
<span id="L41" rel="#L41">41</span>
<span id="L42" rel="#L42">42</span>
<span id="L43" rel="#L43">43</span>
<span id="L44" rel="#L44">44</span>
<span id="L45" rel="#L45">45</span>
<span id="L46" rel="#L46">46</span>
<span id="L47" rel="#L47">47</span>
<span id="L48" rel="#L48">48</span>
<span id="L49" rel="#L49">49</span>
<span id="L50" rel="#L50">50</span>
<span id="L51" rel="#L51">51</span>
<span id="L52" rel="#L52">52</span>
<span id="L53" rel="#L53">53</span>
<span id="L54" rel="#L54">54</span>
<span id="L55" rel="#L55">55</span>
<span id="L56" rel="#L56">56</span>
<span id="L57" rel="#L57">57</span>
<span id="L58" rel="#L58">58</span>
<span id="L59" rel="#L59">59</span>
<span id="L60" rel="#L60">60</span>
<span id="L61" rel="#L61">61</span>
<span id="L62" rel="#L62">62</span>
<span id="L63" rel="#L63">63</span>
<span id="L64" rel="#L64">64</span>
<span id="L65" rel="#L65">65</span>
<span id="L66" rel="#L66">66</span>
<span id="L67" rel="#L67">67</span>
<span id="L68" rel="#L68">68</span>
<span id="L69" rel="#L69">69</span>
<span id="L70" rel="#L70">70</span>
<span id="L71" rel="#L71">71</span>
<span id="L72" rel="#L72">72</span>
<span id="L73" rel="#L73">73</span>
<span id="L74" rel="#L74">74</span>
<span id="L75" rel="#L75">75</span>
<span id="L76" rel="#L76">76</span>
<span id="L77" rel="#L77">77</span>
<span id="L78" rel="#L78">78</span>
<span id="L79" rel="#L79">79</span>
<span id="L80" rel="#L80">80</span>
<span id="L81" rel="#L81">81</span>
<span id="L82" rel="#L82">82</span>
<span id="L83" rel="#L83">83</span>
<span id="L84" rel="#L84">84</span>
<span id="L85" rel="#L85">85</span>
<span id="L86" rel="#L86">86</span>
<span id="L87" rel="#L87">87</span>
<span id="L88" rel="#L88">88</span>
<span id="L89" rel="#L89">89</span>
<span id="L90" rel="#L90">90</span>
<span id="L91" rel="#L91">91</span>
<span id="L92" rel="#L92">92</span>
<span id="L93" rel="#L93">93</span>
<span id="L94" rel="#L94">94</span>
<span id="L95" rel="#L95">95</span>
<span id="L96" rel="#L96">96</span>
<span id="L97" rel="#L97">97</span>
<span id="L98" rel="#L98">98</span>
<span id="L99" rel="#L99">99</span>
<span id="L100" rel="#L100">100</span>
<span id="L101" rel="#L101">101</span>
<span id="L102" rel="#L102">102</span>
<span id="L103" rel="#L103">103</span>
<span id="L104" rel="#L104">104</span>
<span id="L105" rel="#L105">105</span>
<span id="L106" rel="#L106">106</span>
<span id="L107" rel="#L107">107</span>
<span id="L108" rel="#L108">108</span>
<span id="L109" rel="#L109">109</span>
<span id="L110" rel="#L110">110</span>
<span id="L111" rel="#L111">111</span>
<span id="L112" rel="#L112">112</span>
<span id="L113" rel="#L113">113</span>
<span id="L114" rel="#L114">114</span>
<span id="L115" rel="#L115">115</span>
<span id="L116" rel="#L116">116</span>
<span id="L117" rel="#L117">117</span>
<span id="L118" rel="#L118">118</span>
<span id="L119" rel="#L119">119</span>
<span id="L120" rel="#L120">120</span>
<span id="L121" rel="#L121">121</span>
<span id="L122" rel="#L122">122</span>
<span id="L123" rel="#L123">123</span>
<span id="L124" rel="#L124">124</span>
<span id="L125" rel="#L125">125</span>
<span id="L126" rel="#L126">126</span>
<span id="L127" rel="#L127">127</span>
<span id="L128" rel="#L128">128</span>
<span id="L129" rel="#L129">129</span>
<span id="L130" rel="#L130">130</span>
<span id="L131" rel="#L131">131</span>
<span id="L132" rel="#L132">132</span>
<span id="L133" rel="#L133">133</span>
<span id="L134" rel="#L134">134</span>
<span id="L135" rel="#L135">135</span>
<span id="L136" rel="#L136">136</span>
<span id="L137" rel="#L137">137</span>
<span id="L138" rel="#L138">138</span>
<span id="L139" rel="#L139">139</span>
<span id="L140" rel="#L140">140</span>
<span id="L141" rel="#L141">141</span>
<span id="L142" rel="#L142">142</span>
<span id="L143" rel="#L143">143</span>
<span id="L144" rel="#L144">144</span>
<span id="L145" rel="#L145">145</span>
<span id="L146" rel="#L146">146</span>
<span id="L147" rel="#L147">147</span>
<span id="L148" rel="#L148">148</span>
<span id="L149" rel="#L149">149</span>
<span id="L150" rel="#L150">150</span>
<span id="L151" rel="#L151">151</span>
<span id="L152" rel="#L152">152</span>
<span id="L153" rel="#L153">153</span>
<span id="L154" rel="#L154">154</span>
<span id="L155" rel="#L155">155</span>
<span id="L156" rel="#L156">156</span>
<span id="L157" rel="#L157">157</span>
<span id="L158" rel="#L158">158</span>
<span id="L159" rel="#L159">159</span>
<span id="L160" rel="#L160">160</span>
<span id="L161" rel="#L161">161</span>
<span id="L162" rel="#L162">162</span>
<span id="L163" rel="#L163">163</span>
<span id="L164" rel="#L164">164</span>
<span id="L165" rel="#L165">165</span>
<span id="L166" rel="#L166">166</span>
<span id="L167" rel="#L167">167</span>
<span id="L168" rel="#L168">168</span>
<span id="L169" rel="#L169">169</span>
<span id="L170" rel="#L170">170</span>
<span id="L171" rel="#L171">171</span>
<span id="L172" rel="#L172">172</span>
<span id="L173" rel="#L173">173</span>
<span id="L174" rel="#L174">174</span>
<span id="L175" rel="#L175">175</span>
<span id="L176" rel="#L176">176</span>
<span id="L177" rel="#L177">177</span>
<span id="L178" rel="#L178">178</span>
<span id="L179" rel="#L179">179</span>
<span id="L180" rel="#L180">180</span>
<span id="L181" rel="#L181">181</span>
<span id="L182" rel="#L182">182</span>
<span id="L183" rel="#L183">183</span>
<span id="L184" rel="#L184">184</span>
<span id="L185" rel="#L185">185</span>
<span id="L186" rel="#L186">186</span>
<span id="L187" rel="#L187">187</span>
<span id="L188" rel="#L188">188</span>
<span id="L189" rel="#L189">189</span>
<span id="L190" rel="#L190">190</span>
<span id="L191" rel="#L191">191</span>
<span id="L192" rel="#L192">192</span>
<span id="L193" rel="#L193">193</span>
<span id="L194" rel="#L194">194</span>
<span id="L195" rel="#L195">195</span>
<span id="L196" rel="#L196">196</span>
<span id="L197" rel="#L197">197</span>
<span id="L198" rel="#L198">198</span>
<span id="L199" rel="#L199">199</span>
<span id="L200" rel="#L200">200</span>
<span id="L201" rel="#L201">201</span>
<span id="L202" rel="#L202">202</span>
<span id="L203" rel="#L203">203</span>
<span id="L204" rel="#L204">204</span>
<span id="L205" rel="#L205">205</span>
<span id="L206" rel="#L206">206</span>
<span id="L207" rel="#L207">207</span>
<span id="L208" rel="#L208">208</span>
<span id="L209" rel="#L209">209</span>
<span id="L210" rel="#L210">210</span>
<span id="L211" rel="#L211">211</span>
<span id="L212" rel="#L212">212</span>
<span id="L213" rel="#L213">213</span>
<span id="L214" rel="#L214">214</span>
<span id="L215" rel="#L215">215</span>
<span id="L216" rel="#L216">216</span>
<span id="L217" rel="#L217">217</span>
<span id="L218" rel="#L218">218</span>
<span id="L219" rel="#L219">219</span>
<span id="L220" rel="#L220">220</span>
<span id="L221" rel="#L221">221</span>
<span id="L222" rel="#L222">222</span>
<span id="L223" rel="#L223">223</span>
<span id="L224" rel="#L224">224</span>
<span id="L225" rel="#L225">225</span>
<span id="L226" rel="#L226">226</span>
<span id="L227" rel="#L227">227</span>
<span id="L228" rel="#L228">228</span>
<span id="L229" rel="#L229">229</span>
<span id="L230" rel="#L230">230</span>
<span id="L231" rel="#L231">231</span>
<span id="L232" rel="#L232">232</span>
<span id="L233" rel="#L233">233</span>
<span id="L234" rel="#L234">234</span>
<span id="L235" rel="#L235">235</span>
<span id="L236" rel="#L236">236</span>
<span id="L237" rel="#L237">237</span>
<span id="L238" rel="#L238">238</span>
<span id="L239" rel="#L239">239</span>
<span id="L240" rel="#L240">240</span>
<span id="L241" rel="#L241">241</span>
<span id="L242" rel="#L242">242</span>
<span id="L243" rel="#L243">243</span>
<span id="L244" rel="#L244">244</span>
<span id="L245" rel="#L245">245</span>
<span id="L246" rel="#L246">246</span>
<span id="L247" rel="#L247">247</span>
<span id="L248" rel="#L248">248</span>
<span id="L249" rel="#L249">249</span>
<span id="L250" rel="#L250">250</span>
<span id="L251" rel="#L251">251</span>
<span id="L252" rel="#L252">252</span>
<span id="L253" rel="#L253">253</span>
<span id="L254" rel="#L254">254</span>
<span id="L255" rel="#L255">255</span>
<span id="L256" rel="#L256">256</span>
<span id="L257" rel="#L257">257</span>
<span id="L258" rel="#L258">258</span>
<span id="L259" rel="#L259">259</span>
<span id="L260" rel="#L260">260</span>
<span id="L261" rel="#L261">261</span>
<span id="L262" rel="#L262">262</span>
<span id="L263" rel="#L263">263</span>
<span id="L264" rel="#L264">264</span>
<span id="L265" rel="#L265">265</span>
<span id="L266" rel="#L266">266</span>
<span id="L267" rel="#L267">267</span>
<span id="L268" rel="#L268">268</span>
<span id="L269" rel="#L269">269</span>
<span id="L270" rel="#L270">270</span>
<span id="L271" rel="#L271">271</span>
<span id="L272" rel="#L272">272</span>
<span id="L273" rel="#L273">273</span>
<span id="L274" rel="#L274">274</span>
<span id="L275" rel="#L275">275</span>
<span id="L276" rel="#L276">276</span>
<span id="L277" rel="#L277">277</span>
<span id="L278" rel="#L278">278</span>
<span id="L279" rel="#L279">279</span>
<span id="L280" rel="#L280">280</span>
<span id="L281" rel="#L281">281</span>
<span id="L282" rel="#L282">282</span>
<span id="L283" rel="#L283">283</span>
<span id="L284" rel="#L284">284</span>
<span id="L285" rel="#L285">285</span>
<span id="L286" rel="#L286">286</span>
<span id="L287" rel="#L287">287</span>
<span id="L288" rel="#L288">288</span>
<span id="L289" rel="#L289">289</span>
<span id="L290" rel="#L290">290</span>
<span id="L291" rel="#L291">291</span>
<span id="L292" rel="#L292">292</span>
<span id="L293" rel="#L293">293</span>
<span id="L294" rel="#L294">294</span>
<span id="L295" rel="#L295">295</span>
<span id="L296" rel="#L296">296</span>
<span id="L297" rel="#L297">297</span>
<span id="L298" rel="#L298">298</span>
<span id="L299" rel="#L299">299</span>
<span id="L300" rel="#L300">300</span>
<span id="L301" rel="#L301">301</span>
<span id="L302" rel="#L302">302</span>
<span id="L303" rel="#L303">303</span>
<span id="L304" rel="#L304">304</span>
<span id="L305" rel="#L305">305</span>
<span id="L306" rel="#L306">306</span>
<span id="L307" rel="#L307">307</span>
<span id="L308" rel="#L308">308</span>
<span id="L309" rel="#L309">309</span>
<span id="L310" rel="#L310">310</span>
<span id="L311" rel="#L311">311</span>
<span id="L312" rel="#L312">312</span>
<span id="L313" rel="#L313">313</span>
<span id="L314" rel="#L314">314</span>
<span id="L315" rel="#L315">315</span>
<span id="L316" rel="#L316">316</span>
<span id="L317" rel="#L317">317</span>
<span id="L318" rel="#L318">318</span>
<span id="L319" rel="#L319">319</span>
<span id="L320" rel="#L320">320</span>
<span id="L321" rel="#L321">321</span>
<span id="L322" rel="#L322">322</span>
<span id="L323" rel="#L323">323</span>
<span id="L324" rel="#L324">324</span>
<span id="L325" rel="#L325">325</span>
<span id="L326" rel="#L326">326</span>
<span id="L327" rel="#L327">327</span>
<span id="L328" rel="#L328">328</span>
<span id="L329" rel="#L329">329</span>
<span id="L330" rel="#L330">330</span>
<span id="L331" rel="#L331">331</span>
<span id="L332" rel="#L332">332</span>
<span id="L333" rel="#L333">333</span>
<span id="L334" rel="#L334">334</span>
<span id="L335" rel="#L335">335</span>
<span id="L336" rel="#L336">336</span>
<span id="L337" rel="#L337">337</span>
<span id="L338" rel="#L338">338</span>
<span id="L339" rel="#L339">339</span>
<span id="L340" rel="#L340">340</span>
<span id="L341" rel="#L341">341</span>
<span id="L342" rel="#L342">342</span>
<span id="L343" rel="#L343">343</span>
<span id="L344" rel="#L344">344</span>
<span id="L345" rel="#L345">345</span>
<span id="L346" rel="#L346">346</span>
<span id="L347" rel="#L347">347</span>
<span id="L348" rel="#L348">348</span>
<span id="L349" rel="#L349">349</span>
<span id="L350" rel="#L350">350</span>
<span id="L351" rel="#L351">351</span>
<span id="L352" rel="#L352">352</span>
<span id="L353" rel="#L353">353</span>
<span id="L354" rel="#L354">354</span>
<span id="L355" rel="#L355">355</span>
<span id="L356" rel="#L356">356</span>
<span id="L357" rel="#L357">357</span>
<span id="L358" rel="#L358">358</span>
<span id="L359" rel="#L359">359</span>
<span id="L360" rel="#L360">360</span>
<span id="L361" rel="#L361">361</span>
<span id="L362" rel="#L362">362</span>
<span id="L363" rel="#L363">363</span>
<span id="L364" rel="#L364">364</span>
<span id="L365" rel="#L365">365</span>
<span id="L366" rel="#L366">366</span>
<span id="L367" rel="#L367">367</span>
<span id="L368" rel="#L368">368</span>
<span id="L369" rel="#L369">369</span>
<span id="L370" rel="#L370">370</span>
<span id="L371" rel="#L371">371</span>
<span id="L372" rel="#L372">372</span>
<span id="L373" rel="#L373">373</span>
<span id="L374" rel="#L374">374</span>
<span id="L375" rel="#L375">375</span>
<span id="L376" rel="#L376">376</span>
<span id="L377" rel="#L377">377</span>
<span id="L378" rel="#L378">378</span>
<span id="L379" rel="#L379">379</span>
<span id="L380" rel="#L380">380</span>
<span id="L381" rel="#L381">381</span>
<span id="L382" rel="#L382">382</span>
<span id="L383" rel="#L383">383</span>
<span id="L384" rel="#L384">384</span>
<span id="L385" rel="#L385">385</span>
<span id="L386" rel="#L386">386</span>
<span id="L387" rel="#L387">387</span>
<span id="L388" rel="#L388">388</span>
<span id="L389" rel="#L389">389</span>
<span id="L390" rel="#L390">390</span>
<span id="L391" rel="#L391">391</span>
<span id="L392" rel="#L392">392</span>
<span id="L393" rel="#L393">393</span>
<span id="L394" rel="#L394">394</span>
<span id="L395" rel="#L395">395</span>
<span id="L396" rel="#L396">396</span>
<span id="L397" rel="#L397">397</span>
<span id="L398" rel="#L398">398</span>
<span id="L399" rel="#L399">399</span>
<span id="L400" rel="#L400">400</span>
<span id="L401" rel="#L401">401</span>
<span id="L402" rel="#L402">402</span>
<span id="L403" rel="#L403">403</span>
<span id="L404" rel="#L404">404</span>
<span id="L405" rel="#L405">405</span>
<span id="L406" rel="#L406">406</span>
<span id="L407" rel="#L407">407</span>
<span id="L408" rel="#L408">408</span>
<span id="L409" rel="#L409">409</span>
<span id="L410" rel="#L410">410</span>
<span id="L411" rel="#L411">411</span>
<span id="L412" rel="#L412">412</span>
<span id="L413" rel="#L413">413</span>
<span id="L414" rel="#L414">414</span>
<span id="L415" rel="#L415">415</span>
<span id="L416" rel="#L416">416</span>
<span id="L417" rel="#L417">417</span>
<span id="L418" rel="#L418">418</span>
<span id="L419" rel="#L419">419</span>
<span id="L420" rel="#L420">420</span>
<span id="L421" rel="#L421">421</span>
<span id="L422" rel="#L422">422</span>
<span id="L423" rel="#L423">423</span>
<span id="L424" rel="#L424">424</span>
<span id="L425" rel="#L425">425</span>
<span id="L426" rel="#L426">426</span>
<span id="L427" rel="#L427">427</span>
<span id="L428" rel="#L428">428</span>
<span id="L429" rel="#L429">429</span>
<span id="L430" rel="#L430">430</span>
<span id="L431" rel="#L431">431</span>
<span id="L432" rel="#L432">432</span>
<span id="L433" rel="#L433">433</span>
<span id="L434" rel="#L434">434</span>
<span id="L435" rel="#L435">435</span>
<span id="L436" rel="#L436">436</span>
<span id="L437" rel="#L437">437</span>
<span id="L438" rel="#L438">438</span>
<span id="L439" rel="#L439">439</span>
<span id="L440" rel="#L440">440</span>
<span id="L441" rel="#L441">441</span>
<span id="L442" rel="#L442">442</span>
<span id="L443" rel="#L443">443</span>
<span id="L444" rel="#L444">444</span>
<span id="L445" rel="#L445">445</span>
<span id="L446" rel="#L446">446</span>
<span id="L447" rel="#L447">447</span>
<span id="L448" rel="#L448">448</span>
<span id="L449" rel="#L449">449</span>
<span id="L450" rel="#L450">450</span>
<span id="L451" rel="#L451">451</span>
<span id="L452" rel="#L452">452</span>
<span id="L453" rel="#L453">453</span>
<span id="L454" rel="#L454">454</span>
<span id="L455" rel="#L455">455</span>
<span id="L456" rel="#L456">456</span>
<span id="L457" rel="#L457">457</span>
<span id="L458" rel="#L458">458</span>
<span id="L459" rel="#L459">459</span>
<span id="L460" rel="#L460">460</span>
<span id="L461" rel="#L461">461</span>
<span id="L462" rel="#L462">462</span>
<span id="L463" rel="#L463">463</span>
<span id="L464" rel="#L464">464</span>
<span id="L465" rel="#L465">465</span>
<span id="L466" rel="#L466">466</span>
<span id="L467" rel="#L467">467</span>
<span id="L468" rel="#L468">468</span>
<span id="L469" rel="#L469">469</span>
<span id="L470" rel="#L470">470</span>
<span id="L471" rel="#L471">471</span>
<span id="L472" rel="#L472">472</span>
<span id="L473" rel="#L473">473</span>
<span id="L474" rel="#L474">474</span>
<span id="L475" rel="#L475">475</span>
<span id="L476" rel="#L476">476</span>
<span id="L477" rel="#L477">477</span>
<span id="L478" rel="#L478">478</span>
<span id="L479" rel="#L479">479</span>
<span id="L480" rel="#L480">480</span>
<span id="L481" rel="#L481">481</span>
<span id="L482" rel="#L482">482</span>
<span id="L483" rel="#L483">483</span>
<span id="L484" rel="#L484">484</span>
<span id="L485" rel="#L485">485</span>
<span id="L486" rel="#L486">486</span>
<span id="L487" rel="#L487">487</span>
<span id="L488" rel="#L488">488</span>
<span id="L489" rel="#L489">489</span>
<span id="L490" rel="#L490">490</span>
<span id="L491" rel="#L491">491</span>
<span id="L492" rel="#L492">492</span>
<span id="L493" rel="#L493">493</span>
<span id="L494" rel="#L494">494</span>
<span id="L495" rel="#L495">495</span>
<span id="L496" rel="#L496">496</span>
<span id="L497" rel="#L497">497</span>
<span id="L498" rel="#L498">498</span>
<span id="L499" rel="#L499">499</span>
<span id="L500" rel="#L500">500</span>
<span id="L501" rel="#L501">501</span>
<span id="L502" rel="#L502">502</span>
<span id="L503" rel="#L503">503</span>
<span id="L504" rel="#L504">504</span>
<span id="L505" rel="#L505">505</span>
<span id="L506" rel="#L506">506</span>
<span id="L507" rel="#L507">507</span>
<span id="L508" rel="#L508">508</span>
<span id="L509" rel="#L509">509</span>
<span id="L510" rel="#L510">510</span>
<span id="L511" rel="#L511">511</span>
<span id="L512" rel="#L512">512</span>
<span id="L513" rel="#L513">513</span>
<span id="L514" rel="#L514">514</span>
<span id="L515" rel="#L515">515</span>
<span id="L516" rel="#L516">516</span>
<span id="L517" rel="#L517">517</span>
<span id="L518" rel="#L518">518</span>
<span id="L519" rel="#L519">519</span>
<span id="L520" rel="#L520">520</span>
<span id="L521" rel="#L521">521</span>
<span id="L522" rel="#L522">522</span>
<span id="L523" rel="#L523">523</span>
<span id="L524" rel="#L524">524</span>
<span id="L525" rel="#L525">525</span>
<span id="L526" rel="#L526">526</span>
<span id="L527" rel="#L527">527</span>
<span id="L528" rel="#L528">528</span>
<span id="L529" rel="#L529">529</span>
<span id="L530" rel="#L530">530</span>
<span id="L531" rel="#L531">531</span>
<span id="L532" rel="#L532">532</span>
<span id="L533" rel="#L533">533</span>
<span id="L534" rel="#L534">534</span>
<span id="L535" rel="#L535">535</span>
<span id="L536" rel="#L536">536</span>
<span id="L537" rel="#L537">537</span>
<span id="L538" rel="#L538">538</span>
<span id="L539" rel="#L539">539</span>
<span id="L540" rel="#L540">540</span>
<span id="L541" rel="#L541">541</span>
<span id="L542" rel="#L542">542</span>
<span id="L543" rel="#L543">543</span>
<span id="L544" rel="#L544">544</span>
<span id="L545" rel="#L545">545</span>
<span id="L546" rel="#L546">546</span>
<span id="L547" rel="#L547">547</span>
<span id="L548" rel="#L548">548</span>
<span id="L549" rel="#L549">549</span>
<span id="L550" rel="#L550">550</span>
<span id="L551" rel="#L551">551</span>
<span id="L552" rel="#L552">552</span>
<span id="L553" rel="#L553">553</span>
<span id="L554" rel="#L554">554</span>
<span id="L555" rel="#L555">555</span>
<span id="L556" rel="#L556">556</span>
<span id="L557" rel="#L557">557</span>
<span id="L558" rel="#L558">558</span>
<span id="L559" rel="#L559">559</span>
<span id="L560" rel="#L560">560</span>
<span id="L561" rel="#L561">561</span>
<span id="L562" rel="#L562">562</span>
<span id="L563" rel="#L563">563</span>
<span id="L564" rel="#L564">564</span>
<span id="L565" rel="#L565">565</span>
<span id="L566" rel="#L566">566</span>
<span id="L567" rel="#L567">567</span>
<span id="L568" rel="#L568">568</span>
<span id="L569" rel="#L569">569</span>
<span id="L570" rel="#L570">570</span>
<span id="L571" rel="#L571">571</span>
<span id="L572" rel="#L572">572</span>
<span id="L573" rel="#L573">573</span>
<span id="L574" rel="#L574">574</span>
<span id="L575" rel="#L575">575</span>
<span id="L576" rel="#L576">576</span>
<span id="L577" rel="#L577">577</span>
<span id="L578" rel="#L578">578</span>
<span id="L579" rel="#L579">579</span>
<span id="L580" rel="#L580">580</span>
<span id="L581" rel="#L581">581</span>
<span id="L582" rel="#L582">582</span>
<span id="L583" rel="#L583">583</span>
<span id="L584" rel="#L584">584</span>
<span id="L585" rel="#L585">585</span>
<span id="L586" rel="#L586">586</span>
<span id="L587" rel="#L587">587</span>
<span id="L588" rel="#L588">588</span>
<span id="L589" rel="#L589">589</span>
<span id="L590" rel="#L590">590</span>
<span id="L591" rel="#L591">591</span>
<span id="L592" rel="#L592">592</span>
<span id="L593" rel="#L593">593</span>
<span id="L594" rel="#L594">594</span>
<span id="L595" rel="#L595">595</span>
<span id="L596" rel="#L596">596</span>
<span id="L597" rel="#L597">597</span>
<span id="L598" rel="#L598">598</span>
<span id="L599" rel="#L599">599</span>
<span id="L600" rel="#L600">600</span>
<span id="L601" rel="#L601">601</span>
<span id="L602" rel="#L602">602</span>
<span id="L603" rel="#L603">603</span>
<span id="L604" rel="#L604">604</span>
<span id="L605" rel="#L605">605</span>
<span id="L606" rel="#L606">606</span>
<span id="L607" rel="#L607">607</span>
<span id="L608" rel="#L608">608</span>
<span id="L609" rel="#L609">609</span>
<span id="L610" rel="#L610">610</span>
<span id="L611" rel="#L611">611</span>
<span id="L612" rel="#L612">612</span>
<span id="L613" rel="#L613">613</span>
<span id="L614" rel="#L614">614</span>
<span id="L615" rel="#L615">615</span>
<span id="L616" rel="#L616">616</span>
<span id="L617" rel="#L617">617</span>
<span id="L618" rel="#L618">618</span>
<span id="L619" rel="#L619">619</span>
<span id="L620" rel="#L620">620</span>
<span id="L621" rel="#L621">621</span>
<span id="L622" rel="#L622">622</span>
<span id="L623" rel="#L623">623</span>
<span id="L624" rel="#L624">624</span>
<span id="L625" rel="#L625">625</span>
<span id="L626" rel="#L626">626</span>
<span id="L627" rel="#L627">627</span>
<span id="L628" rel="#L628">628</span>
<span id="L629" rel="#L629">629</span>
<span id="L630" rel="#L630">630</span>
<span id="L631" rel="#L631">631</span>
<span id="L632" rel="#L632">632</span>
<span id="L633" rel="#L633">633</span>
<span id="L634" rel="#L634">634</span>
<span id="L635" rel="#L635">635</span>
<span id="L636" rel="#L636">636</span>
<span id="L637" rel="#L637">637</span>
<span id="L638" rel="#L638">638</span>
<span id="L639" rel="#L639">639</span>
<span id="L640" rel="#L640">640</span>
<span id="L641" rel="#L641">641</span>
<span id="L642" rel="#L642">642</span>
<span id="L643" rel="#L643">643</span>
<span id="L644" rel="#L644">644</span>
<span id="L645" rel="#L645">645</span>
<span id="L646" rel="#L646">646</span>
<span id="L647" rel="#L647">647</span>
<span id="L648" rel="#L648">648</span>
<span id="L649" rel="#L649">649</span>
<span id="L650" rel="#L650">650</span>
<span id="L651" rel="#L651">651</span>
<span id="L652" rel="#L652">652</span>
<span id="L653" rel="#L653">653</span>
<span id="L654" rel="#L654">654</span>
<span id="L655" rel="#L655">655</span>
<span id="L656" rel="#L656">656</span>
<span id="L657" rel="#L657">657</span>
<span id="L658" rel="#L658">658</span>
<span id="L659" rel="#L659">659</span>
<span id="L660" rel="#L660">660</span>
<span id="L661" rel="#L661">661</span>
<span id="L662" rel="#L662">662</span>
<span id="L663" rel="#L663">663</span>
<span id="L664" rel="#L664">664</span>
<span id="L665" rel="#L665">665</span>
<span id="L666" rel="#L666">666</span>
<span id="L667" rel="#L667">667</span>
<span id="L668" rel="#L668">668</span>
<span id="L669" rel="#L669">669</span>
<span id="L670" rel="#L670">670</span>
<span id="L671" rel="#L671">671</span>
<span id="L672" rel="#L672">672</span>
<span id="L673" rel="#L673">673</span>
<span id="L674" rel="#L674">674</span>
<span id="L675" rel="#L675">675</span>
<span id="L676" rel="#L676">676</span>
<span id="L677" rel="#L677">677</span>
<span id="L678" rel="#L678">678</span>
<span id="L679" rel="#L679">679</span>
<span id="L680" rel="#L680">680</span>
<span id="L681" rel="#L681">681</span>
<span id="L682" rel="#L682">682</span>

            </td>
            <td class="blob-line-code"><div class="code-body highlight"><pre><div class='line' id='LC1'><span class="o">&lt;?</span><span class="nx">php</span></div><div class='line' id='LC2'><span class="k">namespace</span> <span class="nx">Pelago</span><span class="p">;</span></div><div class='line' id='LC3'><br/></div><div class='line' id='LC4'><span class="sd">/**</span></div><div class='line' id='LC5'><span class="sd"> * This class provides functions for converting CSS styles into inline style attributes in your HTML code.</span></div><div class='line' id='LC6'><span class="sd"> *</span></div><div class='line' id='LC7'><span class="sd"> * For more information, please see the README.md file.</span></div><div class='line' id='LC8'><span class="sd"> *</span></div><div class='line' id='LC9'><span class="sd"> * @author Cameron Brooks</span></div><div class='line' id='LC10'><span class="sd"> * @author Jaime Prado</span></div><div class='line' id='LC11'><span class="sd"> */</span></div><div class='line' id='LC12'><span class="k">class</span> <span class="nc">Emogrifier</span> <span class="p">{</span></div><div class='line' id='LC13'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC14'><span class="sd">     * @var string</span></div><div class='line' id='LC15'><span class="sd">     */</span></div><div class='line' id='LC16'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">const</span> <span class="no">ENCODING</span> <span class="o">=</span> <span class="s1">&#39;UTF-8&#39;</span><span class="p">;</span></div><div class='line' id='LC17'><br/></div><div class='line' id='LC18'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC19'><span class="sd">     * @var integer</span></div><div class='line' id='LC20'><span class="sd">     */</span></div><div class='line' id='LC21'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">const</span> <span class="no">CACHE_KEY_CSS</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC22'><br/></div><div class='line' id='LC23'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC24'><span class="sd">     * @var integer</span></div><div class='line' id='LC25'><span class="sd">     */</span></div><div class='line' id='LC26'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">const</span> <span class="no">CACHE_KEY_SELECTOR</span> <span class="o">=</span> <span class="mi">1</span><span class="p">;</span></div><div class='line' id='LC27'><br/></div><div class='line' id='LC28'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC29'><span class="sd">     * @var integer</span></div><div class='line' id='LC30'><span class="sd">     */</span></div><div class='line' id='LC31'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">const</span> <span class="no">CACHE_KEY_XPATH</span> <span class="o">=</span> <span class="mi">2</span><span class="p">;</span></div><div class='line' id='LC32'><br/></div><div class='line' id='LC33'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC34'><span class="sd">     * for calculating nth-of-type and nth-child selectors</span></div><div class='line' id='LC35'><span class="sd">     *</span></div><div class='line' id='LC36'><span class="sd">     * @var integer</span></div><div class='line' id='LC37'><span class="sd">     */</span></div><div class='line' id='LC38'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">const</span> <span class="no">INDEX</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC39'><br/></div><div class='line' id='LC40'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC41'><span class="sd">     * for calculating nth-of-type and nth-child selectors</span></div><div class='line' id='LC42'><span class="sd">     *</span></div><div class='line' id='LC43'><span class="sd">     * @var integer</span></div><div class='line' id='LC44'><span class="sd">     */</span></div><div class='line' id='LC45'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">const</span> <span class="no">MULTIPLIER</span> <span class="o">=</span> <span class="mi">1</span><span class="p">;</span></div><div class='line' id='LC46'><br/></div><div class='line' id='LC47'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC48'><span class="sd">     * @var string</span></div><div class='line' id='LC49'><span class="sd">     */</span></div><div class='line' id='LC50'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">const</span> <span class="no">ID_ATTRIBUTE_MATCHER</span> <span class="o">=</span> <span class="s1">&#39;/(\\w+)?\\#([\\w\\-]+)/&#39;</span><span class="p">;</span></div><div class='line' id='LC51'><br/></div><div class='line' id='LC52'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC53'><span class="sd">     * @var string</span></div><div class='line' id='LC54'><span class="sd">     */</span></div><div class='line' id='LC55'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">const</span> <span class="no">CLASS_ATTRIBUTE_MATCHER</span> <span class="o">=</span> <span class="s1">&#39;/(\\w+|[\\*\\]])?((\\.[\\w\\-]+)+)/&#39;</span><span class="p">;</span></div><div class='line' id='LC56'><br/></div><div class='line' id='LC57'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC58'><span class="sd">     * @var string</span></div><div class='line' id='LC59'><span class="sd">     */</span></div><div class='line' id='LC60'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">private</span> <span class="nv">$html</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC61'><br/></div><div class='line' id='LC62'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC63'><span class="sd">     * @var string</span></div><div class='line' id='LC64'><span class="sd">     */</span></div><div class='line' id='LC65'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">private</span> <span class="nv">$css</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC66'><br/></div><div class='line' id='LC67'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC68'><span class="sd">     * @var array&lt;string&gt;</span></div><div class='line' id='LC69'><span class="sd">     */</span></div><div class='line' id='LC70'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">private</span> <span class="nv">$unprocessableHtmlTags</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;wbr&#39;</span><span class="p">);</span></div><div class='line' id='LC71'><br/></div><div class='line' id='LC72'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC73'><span class="sd">     * @var array&lt;array&gt;</span></div><div class='line' id='LC74'><span class="sd">     */</span></div><div class='line' id='LC75'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">private</span> <span class="nv">$caches</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC76'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">self</span><span class="o">::</span><span class="na">CACHE_KEY_CSS</span> <span class="o">=&gt;</span> <span class="k">array</span><span class="p">(),</span></div><div class='line' id='LC77'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">self</span><span class="o">::</span><span class="na">CACHE_KEY_SELECTOR</span> <span class="o">=&gt;</span> <span class="k">array</span><span class="p">(),</span></div><div class='line' id='LC78'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nx">self</span><span class="o">::</span><span class="na">CACHE_KEY_XPATH</span> <span class="o">=&gt;</span> <span class="k">array</span><span class="p">(),</span></div><div class='line' id='LC79'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC80'><br/></div><div class='line' id='LC81'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC82'><span class="sd">     * the visited nodes with the XPath paths as array keys</span></div><div class='line' id='LC83'><span class="sd">     *</span></div><div class='line' id='LC84'><span class="sd">     * @var array&lt;\DOMNode&gt;</span></div><div class='line' id='LC85'><span class="sd">     */</span></div><div class='line' id='LC86'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">private</span> <span class="nv">$visitedNodes</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC87'><br/></div><div class='line' id='LC88'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC89'><span class="sd">     * the styles to apply to the nodes with the XPath paths as array keys for the outer array and the attribute names/values</span></div><div class='line' id='LC90'><span class="sd">     * as key/value pairs for the inner array</span></div><div class='line' id='LC91'><span class="sd">     *</span></div><div class='line' id='LC92'><span class="sd">     * @var array&lt;array&gt;&lt;string&gt;</span></div><div class='line' id='LC93'><span class="sd">     */</span></div><div class='line' id='LC94'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">private</span> <span class="nv">$styleAttributesForNodes</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC95'><br/></div><div class='line' id='LC96'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC97'><span class="sd">     * This attribute applies to the case where you want to preserve your original text encoding.</span></div><div class='line' id='LC98'><span class="sd">     *</span></div><div class='line' id='LC99'><span class="sd">     * By default, emogrifier translates your text into HTML entities for two reasons:</span></div><div class='line' id='LC100'><span class="sd">     *</span></div><div class='line' id='LC101'><span class="sd">     * 1. Because of client incompatibilities, it is better practice to send out HTML entities rather than unicode over email.</span></div><div class='line' id='LC102'><span class="sd">     *</span></div><div class='line' id='LC103'><span class="sd">     * 2. It translates any illegal XML characters that DOMDocument cannot work with.</span></div><div class='line' id='LC104'><span class="sd">     *</span></div><div class='line' id='LC105'><span class="sd">     * If you would like to preserve your original encoding, set this attribute to TRUE.</span></div><div class='line' id='LC106'><span class="sd">     *</span></div><div class='line' id='LC107'><span class="sd">     * @var boolean</span></div><div class='line' id='LC108'><span class="sd">     */</span></div><div class='line' id='LC109'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="nv">$preserveEncoding</span> <span class="o">=</span> <span class="k">FALSE</span><span class="p">;</span></div><div class='line' id='LC110'><br/></div><div class='line' id='LC111'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC112'><span class="sd">     * The constructor.</span></div><div class='line' id='LC113'><span class="sd">     *</span></div><div class='line' id='LC114'><span class="sd">     * @param string $html the HTML to emogrify, must be UTF-8-encoded</span></div><div class='line' id='LC115'><span class="sd">     * @param string $css the CSS to merge, must be UTF-8-encoded</span></div><div class='line' id='LC116'><span class="sd">     */</span></div><div class='line' id='LC117'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">__construct</span><span class="p">(</span><span class="nv">$html</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$css</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC118'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">setHtml</span><span class="p">(</span><span class="nv">$html</span><span class="p">);</span></div><div class='line' id='LC119'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">setCss</span><span class="p">(</span><span class="nv">$css</span><span class="p">);</span></div><div class='line' id='LC120'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC121'><br/></div><div class='line' id='LC122'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC123'><span class="sd">     * The destructor.</span></div><div class='line' id='LC124'><span class="sd">     */</span></div><div class='line' id='LC125'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">__destruct</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC126'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">purgeVisitedNodes</span><span class="p">();</span></div><div class='line' id='LC127'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC128'><br/></div><div class='line' id='LC129'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC130'><span class="sd">     * Sets the HTML to emogrify.</span></div><div class='line' id='LC131'><span class="sd">     *</span></div><div class='line' id='LC132'><span class="sd">     * @param string $html the HTML to emogrify, must be UTF-8-encoded</span></div><div class='line' id='LC133'><span class="sd">     *</span></div><div class='line' id='LC134'><span class="sd">     * @return void</span></div><div class='line' id='LC135'><span class="sd">     */</span></div><div class='line' id='LC136'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">setHtml</span><span class="p">(</span><span class="nv">$html</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC137'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">html</span> <span class="o">=</span> <span class="nv">$html</span><span class="p">;</span></div><div class='line' id='LC138'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC139'><br/></div><div class='line' id='LC140'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC141'><span class="sd">     * Sets the CSS to merge with the HTML.</span></div><div class='line' id='LC142'><span class="sd">     *</span></div><div class='line' id='LC143'><span class="sd">     * @param string $css the CSS to merge, must be UTF-8-encoded</span></div><div class='line' id='LC144'><span class="sd">     *</span></div><div class='line' id='LC145'><span class="sd">     * @return void</span></div><div class='line' id='LC146'><span class="sd">     */</span></div><div class='line' id='LC147'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">setCss</span><span class="p">(</span><span class="nv">$css</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC148'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">css</span> <span class="o">=</span> <span class="nv">$css</span><span class="p">;</span></div><div class='line' id='LC149'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC150'><br/></div><div class='line' id='LC151'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC152'><span class="sd">     * Clears all caches.</span></div><div class='line' id='LC153'><span class="sd">     *</span></div><div class='line' id='LC154'><span class="sd">     * @return void</span></div><div class='line' id='LC155'><span class="sd">     */</span></div><div class='line' id='LC156'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">private</span> <span class="k">function</span> <span class="nf">clearAllCaches</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC157'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">clearCache</span><span class="p">(</span><span class="nx">self</span><span class="o">::</span><span class="na">CACHE_KEY_CSS</span><span class="p">);</span></div><div class='line' id='LC158'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">clearCache</span><span class="p">(</span><span class="nx">self</span><span class="o">::</span><span class="na">CACHE_KEY_SELECTOR</span><span class="p">);</span></div><div class='line' id='LC159'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">clearCache</span><span class="p">(</span><span class="nx">self</span><span class="o">::</span><span class="na">CACHE_KEY_XPATH</span><span class="p">);</span></div><div class='line' id='LC160'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC161'><br/></div><div class='line' id='LC162'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC163'><span class="sd">     * Clears a single cache by key.</span></div><div class='line' id='LC164'><span class="sd">     *</span></div><div class='line' id='LC165'><span class="sd">     * @param integer $key the cache key, must be CACHE_KEY_CSS, CACHE_KEY_SELECTOR or CACHE_KEY_XPATH</span></div><div class='line' id='LC166'><span class="sd">     *</span></div><div class='line' id='LC167'><span class="sd">     * @return void</span></div><div class='line' id='LC168'><span class="sd">     *</span></div><div class='line' id='LC169'><span class="sd">     * @throws \InvalidArgumentException</span></div><div class='line' id='LC170'><span class="sd">     */</span></div><div class='line' id='LC171'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">private</span> <span class="k">function</span> <span class="nf">clearCache</span><span class="p">(</span><span class="nv">$key</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC172'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$allowedCacheKeys</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span><span class="nx">self</span><span class="o">::</span><span class="na">CACHE_KEY_CSS</span><span class="p">,</span> <span class="nx">self</span><span class="o">::</span><span class="na">CACHE_KEY_SELECTOR</span><span class="p">,</span> <span class="nx">self</span><span class="o">::</span><span class="na">CACHE_KEY_XPATH</span><span class="p">);</span></div><div class='line' id='LC173'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">in_array</span><span class="p">(</span><span class="nv">$key</span><span class="p">,</span> <span class="nv">$allowedCacheKeys</span><span class="p">,</span> <span class="k">TRUE</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC174'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">\InvalidArgumentException</span><span class="p">(</span><span class="s1">&#39;Invalid cache key: &#39;</span> <span class="o">.</span> <span class="nv">$key</span><span class="p">,</span> <span class="mi">1391822035</span><span class="p">);</span></div><div class='line' id='LC175'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC176'><br/></div><div class='line' id='LC177'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">caches</span><span class="p">[</span><span class="nv">$key</span><span class="p">]</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC178'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC179'><br/></div><div class='line' id='LC180'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC181'><span class="sd">     * Purges the visited nodes.</span></div><div class='line' id='LC182'><span class="sd">     *</span></div><div class='line' id='LC183'><span class="sd">     * @return void</span></div><div class='line' id='LC184'><span class="sd">     */</span></div><div class='line' id='LC185'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">private</span> <span class="k">function</span> <span class="nf">purgeVisitedNodes</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC186'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">visitedNodes</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC187'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">styleAttributesForNodes</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC188'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC189'><br/></div><div class='line' id='LC190'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC191'><span class="sd">     * Marks a tag for removal.</span></div><div class='line' id='LC192'><span class="sd">     *</span></div><div class='line' id='LC193'><span class="sd">     * There are some HTML tags that DOMDocument cannot process, and it will throw an error if it encounters them.</span></div><div class='line' id='LC194'><span class="sd">     * In particular, DOMDocument will complain if you try to use HTML5 tags in an XHTML document.</span></div><div class='line' id='LC195'><span class="sd">     *</span></div><div class='line' id='LC196'><span class="sd">     * Note: The tags will not be removed if they have any content.</span></div><div class='line' id='LC197'><span class="sd">     *</span></div><div class='line' id='LC198'><span class="sd">     * @param string $tagName the tag name, e.g., &quot;p&quot;</span></div><div class='line' id='LC199'><span class="sd">     *</span></div><div class='line' id='LC200'><span class="sd">     * @return void</span></div><div class='line' id='LC201'><span class="sd">     */</span></div><div class='line' id='LC202'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">addUnprocessableHtmlTag</span><span class="p">(</span><span class="nv">$tagName</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC203'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">unprocessableHtmlTags</span><span class="p">[]</span> <span class="o">=</span> <span class="nv">$tagName</span><span class="p">;</span></div><div class='line' id='LC204'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC205'><br/></div><div class='line' id='LC206'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC207'><span class="sd">     * Drops a tag from the removal list.</span></div><div class='line' id='LC208'><span class="sd">     *</span></div><div class='line' id='LC209'><span class="sd">     * @param string $tagName the tag name, e.g., &quot;p&quot;</span></div><div class='line' id='LC210'><span class="sd">     *</span></div><div class='line' id='LC211'><span class="sd">     * @return void</span></div><div class='line' id='LC212'><span class="sd">     */</span></div><div class='line' id='LC213'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">removeUnprocessableHtmlTag</span><span class="p">(</span><span class="nv">$tagName</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC214'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$key</span> <span class="o">=</span> <span class="nb">array_search</span><span class="p">(</span><span class="nv">$tagName</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">unprocessableHtmlTags</span><span class="p">,</span> <span class="k">TRUE</span><span class="p">);</span></div><div class='line' id='LC215'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$key</span> <span class="o">!==</span> <span class="k">FALSE</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC216'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">unset</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">unprocessableHtmlTags</span><span class="p">[</span><span class="nv">$key</span><span class="p">]);</span></div><div class='line' id='LC217'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC218'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC219'><br/></div><div class='line' id='LC220'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC221'><span class="sd">     * Applies the CSS you submit to the HTML you submit.</span></div><div class='line' id='LC222'><span class="sd">     *</span></div><div class='line' id='LC223'><span class="sd">     * This method places the CSS inline.</span></div><div class='line' id='LC224'><span class="sd">     *</span></div><div class='line' id='LC225'><span class="sd">     * @return string</span></div><div class='line' id='LC226'><span class="sd">     *</span></div><div class='line' id='LC227'><span class="sd">     * @throws \BadMethodCallException</span></div><div class='line' id='LC228'><span class="sd">     */</span></div><div class='line' id='LC229'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">public</span> <span class="k">function</span> <span class="nf">emogrify</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC230'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">html</span> <span class="o">===</span> <span class="s1">&#39;&#39;</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC231'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">throw</span> <span class="k">new</span> <span class="nx">\BadMethodCallException</span><span class="p">(</span><span class="s1">&#39;Please set some HTML first before calling emogrify.&#39;</span><span class="p">,</span> <span class="mi">1390393096</span><span class="p">);</span></div><div class='line' id='LC232'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC233'><br/></div><div class='line' id='LC234'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$xmlDocument</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">createXmlDocument</span><span class="p">();</span></div><div class='line' id='LC235'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$xpath</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">\DOMXPath</span><span class="p">(</span><span class="nv">$xmlDocument</span><span class="p">);</span></div><div class='line' id='LC236'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">clearAllCaches</span><span class="p">();</span></div><div class='line' id='LC237'><br/></div><div class='line' id='LC238'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// before be begin processing the CSS file, parse the document and normalize all existing CSS attributes (changes &#39;DISPLAY: none&#39; to &#39;display: none&#39;);</span></div><div class='line' id='LC239'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// we wouldn&#39;t have to do this if DOMXPath supported XPath 2.0.</span></div><div class='line' id='LC240'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// also store a reference of nodes with existing inline styles so we don&#39;t overwrite them</span></div><div class='line' id='LC241'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">purgeVisitedNodes</span><span class="p">();</span></div><div class='line' id='LC242'><br/></div><div class='line' id='LC243'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$nodesWithStyleAttributes</span> <span class="o">=</span> <span class="nv">$xpath</span><span class="o">-&gt;</span><span class="na">query</span><span class="p">(</span><span class="s1">&#39;//*[@style]&#39;</span><span class="p">);</span></div><div class='line' id='LC244'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$nodesWithStyleAttributes</span> <span class="o">!==</span> <span class="k">FALSE</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC245'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/** @var $nodeWithStyleAttribute \DOMNode */</span></div><div class='line' id='LC246'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span> <span class="p">(</span><span class="nv">$nodesWithStyleAttributes</span> <span class="k">as</span> <span class="nv">$node</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC247'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$normalizedOriginalStyle</span> <span class="o">=</span> <span class="nb">preg_replace_callback</span><span class="p">(</span></div><div class='line' id='LC248'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;/[A-z\\-]+(?=\\:)/S&#39;</span><span class="p">,</span></div><div class='line' id='LC249'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">function</span> <span class="p">(</span><span class="k">array</span> <span class="nv">$m</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC250'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nx">strtolower</span><span class="p">(</span><span class="nv">$m</span><span class="p">[</span><span class="mi">0</span><span class="p">]);</span></div><div class='line' id='LC251'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">},</span></div><div class='line' id='LC252'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$node</span><span class="o">-&gt;</span><span class="na">getAttribute</span><span class="p">(</span><span class="s1">&#39;style&#39;</span><span class="p">)</span></div><div class='line' id='LC253'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC254'><br/></div><div class='line' id='LC255'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// in order to not overwrite existing style attributes in the HTML, we have to save the original HTML styles</span></div><div class='line' id='LC256'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$nodePath</span> <span class="o">=</span> <span class="nv">$node</span><span class="o">-&gt;</span><span class="na">getNodePath</span><span class="p">();</span></div><div class='line' id='LC257'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">styleAttributesForNodes</span><span class="p">[</span><span class="nv">$nodePath</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC258'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">styleAttributesForNodes</span><span class="p">[</span><span class="nv">$nodePath</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">parseCssDeclarationBlock</span><span class="p">(</span><span class="nv">$normalizedOriginalStyle</span><span class="p">);</span></div><div class='line' id='LC259'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">visitedNodes</span><span class="p">[</span><span class="nv">$nodePath</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$node</span><span class="p">;</span></div><div class='line' id='LC260'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC261'><br/></div><div class='line' id='LC262'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$node</span><span class="o">-&gt;</span><span class="na">setAttribute</span><span class="p">(</span><span class="s1">&#39;style&#39;</span><span class="p">,</span> <span class="nv">$normalizedOriginalStyle</span><span class="p">);</span></div><div class='line' id='LC263'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC264'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC265'><br/></div><div class='line' id='LC266'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// grab any existing style blocks from the html and append them to the existing CSS</span></div><div class='line' id='LC267'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// (these blocks should be appended so as to have precedence over conflicting styles in the existing CSS)</span></div><div class='line' id='LC268'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$css</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">css</span><span class="p">;</span></div><div class='line' id='LC269'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$styleNodes</span> <span class="o">=</span> <span class="nv">$xpath</span><span class="o">-&gt;</span><span class="na">query</span><span class="p">(</span><span class="s1">&#39;//style&#39;</span><span class="p">);</span></div><div class='line' id='LC270'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$styleNodes</span> <span class="o">!==</span> <span class="k">FALSE</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC271'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/** @var $styleNode \DOMNode */</span></div><div class='line' id='LC272'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span> <span class="p">(</span><span class="nv">$styleNodes</span> <span class="k">as</span> <span class="nv">$styleNode</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC273'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// append the css</span></div><div class='line' id='LC274'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$css</span> <span class="o">.=</span> <span class="s2">&quot;</span><span class="se">\n\n</span><span class="s2">&quot;</span> <span class="o">.</span> <span class="nv">$styleNode</span><span class="o">-&gt;</span><span class="na">nodeValue</span><span class="p">;</span></div><div class='line' id='LC275'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// remove the &lt;style&gt; node</span></div><div class='line' id='LC276'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$styleNode</span><span class="o">-&gt;</span><span class="na">parentNode</span><span class="o">-&gt;</span><span class="na">removeChild</span><span class="p">(</span><span class="nv">$styleNode</span><span class="p">);</span></div><div class='line' id='LC277'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC278'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC279'><br/></div><div class='line' id='LC280'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// filter the CSS</span></div><div class='line' id='LC281'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$search</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC282'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// get rid of css comment code</span></div><div class='line' id='LC283'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;/\\/\\*.*\\*\\//sU&#39;</span><span class="p">,</span></div><div class='line' id='LC284'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// strip out any import directives</span></div><div class='line' id='LC285'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;/^\\s*@import\\s[^;]+;/misU&#39;</span><span class="p">,</span></div><div class='line' id='LC286'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// strip any empty media enclosures</span></div><div class='line' id='LC287'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;/^\\s*@media\\s[^{]+{\\s*}/misU&#39;</span><span class="p">,</span></div><div class='line' id='LC288'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// strip out all media rules that are not &#39;screen&#39; or &#39;all&#39; (these don&#39;t apply to email)</span></div><div class='line' id='LC289'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;/^\\s*@media\\s+((aural|braille|embossed|handheld|print|projection|speech|tty|tv)\\s*,*\\s*)+{.*}\\s*}/misU&#39;</span><span class="p">,</span></div><div class='line' id='LC290'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// get rid of remaining media type rules</span></div><div class='line' id='LC291'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;/^\\s*@media\\s[^{]+{(.*})\\s*}/misU&#39;</span><span class="p">,</span></div><div class='line' id='LC292'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC293'><br/></div><div class='line' id='LC294'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$replace</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC295'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;&#39;</span><span class="p">,</span></div><div class='line' id='LC296'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;&#39;</span><span class="p">,</span></div><div class='line' id='LC297'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;&#39;</span><span class="p">,</span></div><div class='line' id='LC298'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;&#39;</span><span class="p">,</span></div><div class='line' id='LC299'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;\\1&#39;</span><span class="p">,</span></div><div class='line' id='LC300'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC301'><br/></div><div class='line' id='LC302'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$css</span> <span class="o">=</span> <span class="nb">preg_replace</span><span class="p">(</span><span class="nv">$search</span><span class="p">,</span> <span class="nv">$replace</span><span class="p">,</span> <span class="nv">$css</span><span class="p">);</span></div><div class='line' id='LC303'><br/></div><div class='line' id='LC304'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$cssKey</span> <span class="o">=</span> <span class="nb">md5</span><span class="p">(</span><span class="nv">$css</span><span class="p">);</span></div><div class='line' id='LC305'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">caches</span><span class="p">[</span><span class="nx">self</span><span class="o">::</span><span class="na">CACHE_KEY_CSS</span><span class="p">][</span><span class="nv">$cssKey</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC306'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// process the CSS file for selectors and definitions</span></div><div class='line' id='LC307'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">preg_match_all</span><span class="p">(</span><span class="s1">&#39;/(?:^|[^{}])\\s*([^{]+){([^}]*)}/mis&#39;</span><span class="p">,</span> <span class="nv">$css</span><span class="p">,</span> <span class="nv">$matches</span><span class="p">,</span> <span class="nx">PREG_SET_ORDER</span><span class="p">);</span></div><div class='line' id='LC308'><br/></div><div class='line' id='LC309'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$allSelectors</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC310'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span> <span class="p">(</span><span class="nv">$matches</span> <span class="k">as</span> <span class="nv">$key</span> <span class="o">=&gt;</span> <span class="nv">$selectorString</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC311'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// if there is a blank definition, skip</span></div><div class='line' id='LC312'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">strlen</span><span class="p">(</span><span class="nx">trim</span><span class="p">(</span><span class="nv">$selectorString</span><span class="p">[</span><span class="mi">2</span><span class="p">])))</span> <span class="p">{</span></div><div class='line' id='LC313'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">continue</span><span class="p">;</span></div><div class='line' id='LC314'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC315'><br/></div><div class='line' id='LC316'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// else split by commas and duplicate attributes so we can sort by selector precedence</span></div><div class='line' id='LC317'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$selectors</span> <span class="o">=</span> <span class="nb">explode</span><span class="p">(</span><span class="s1">&#39;,&#39;</span><span class="p">,</span> <span class="nv">$selectorString</span><span class="p">[</span><span class="mi">1</span><span class="p">]);</span></div><div class='line' id='LC318'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span> <span class="p">(</span><span class="nv">$selectors</span> <span class="k">as</span> <span class="nv">$selector</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC319'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// don&#39;t process pseudo-elements and behavioral (dynamic) pseudo-classes; ONLY allow structural pseudo-classes</span></div><div class='line' id='LC320'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">strpos</span><span class="p">(</span><span class="nv">$selector</span><span class="p">,</span> <span class="s1">&#39;:&#39;</span><span class="p">)</span> <span class="o">!==</span> <span class="k">FALSE</span> <span class="o">&amp;&amp;</span> <span class="o">!</span><span class="nb">preg_match</span><span class="p">(</span><span class="s1">&#39;/:\\S+\\-(child|type)\\(/i&#39;</span><span class="p">,</span> <span class="nv">$selector</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC321'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">continue</span><span class="p">;</span></div><div class='line' id='LC322'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC323'><br/></div><div class='line' id='LC324'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$allSelectors</span><span class="p">[]</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;selector&#39;</span> <span class="o">=&gt;</span> <span class="nx">trim</span><span class="p">(</span><span class="nv">$selector</span><span class="p">),</span></div><div class='line' id='LC325'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;attributes&#39;</span> <span class="o">=&gt;</span> <span class="nx">trim</span><span class="p">(</span><span class="nv">$selectorString</span><span class="p">[</span><span class="mi">2</span><span class="p">]),</span></div><div class='line' id='LC326'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// keep track of where it appears in the file, since order is important</span></div><div class='line' id='LC327'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;line&#39;</span> <span class="o">=&gt;</span> <span class="nv">$key</span><span class="p">,</span></div><div class='line' id='LC328'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC329'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC330'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC331'><br/></div><div class='line' id='LC332'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// now sort the selectors by precedence</span></div><div class='line' id='LC333'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">usort</span><span class="p">(</span><span class="nv">$allSelectors</span><span class="p">,</span> <span class="k">array</span><span class="p">(</span><span class="nv">$this</span><span class="p">,</span><span class="s1">&#39;sortBySelectorPrecedence&#39;</span><span class="p">));</span></div><div class='line' id='LC334'><br/></div><div class='line' id='LC335'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">caches</span><span class="p">[</span><span class="nx">self</span><span class="o">::</span><span class="na">CACHE_KEY_CSS</span><span class="p">][</span><span class="nv">$cssKey</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$allSelectors</span><span class="p">;</span></div><div class='line' id='LC336'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC337'><br/></div><div class='line' id='LC338'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">caches</span><span class="p">[</span><span class="nx">self</span><span class="o">::</span><span class="na">CACHE_KEY_CSS</span><span class="p">][</span><span class="nv">$cssKey</span><span class="p">]</span> <span class="k">as</span> <span class="nv">$value</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC339'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// query the body for the xpath selector</span></div><div class='line' id='LC340'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$nodesMatchingCssSelectors</span> <span class="o">=</span> <span class="nv">$xpath</span><span class="o">-&gt;</span><span class="na">query</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">translateCssToXpath</span><span class="p">(</span><span class="nx">trim</span><span class="p">(</span><span class="nv">$value</span><span class="p">[</span><span class="s1">&#39;selector&#39;</span><span class="p">])));</span></div><div class='line' id='LC341'><br/></div><div class='line' id='LC342'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/** @var $node \DOMNode */</span></div><div class='line' id='LC343'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span> <span class="p">(</span><span class="nv">$nodesMatchingCssSelectors</span> <span class="k">as</span> <span class="nv">$node</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC344'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// if it has a style attribute, get it, process it, and append (overwrite) new stuff</span></div><div class='line' id='LC345'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$node</span><span class="o">-&gt;</span><span class="na">hasAttribute</span><span class="p">(</span><span class="s1">&#39;style&#39;</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC346'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// break it up into an associative array</span></div><div class='line' id='LC347'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$oldStyleDeclarations</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">parseCssDeclarationBlock</span><span class="p">(</span><span class="nv">$node</span><span class="o">-&gt;</span><span class="na">getAttribute</span><span class="p">(</span><span class="s1">&#39;style&#39;</span><span class="p">));</span></div><div class='line' id='LC348'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$newStyleDeclarations</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">parseCssDeclarationBlock</span><span class="p">(</span><span class="nv">$value</span><span class="p">[</span><span class="s1">&#39;attributes&#39;</span><span class="p">]);</span></div><div class='line' id='LC349'><br/></div><div class='line' id='LC350'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// new styles overwrite the old styles (not technically accurate, but close enough)</span></div><div class='line' id='LC351'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$combinedArray</span> <span class="o">=</span> <span class="nb">array_merge</span><span class="p">(</span><span class="nv">$oldStyleDeclarations</span><span class="p">,</span> <span class="nv">$newStyleDeclarations</span><span class="p">);</span></div><div class='line' id='LC352'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$style</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC353'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span> <span class="p">(</span><span class="nv">$combinedArray</span> <span class="k">as</span> <span class="nv">$attributeName</span> <span class="o">=&gt;</span> <span class="nv">$attributeValue</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC354'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$style</span> <span class="o">.=</span> <span class="p">(</span><span class="nx">strtolower</span><span class="p">(</span><span class="nv">$attributeName</span><span class="p">)</span> <span class="o">.</span> <span class="s1">&#39;:&#39;</span> <span class="o">.</span> <span class="nv">$attributeValue</span> <span class="o">.</span> <span class="s1">&#39;;&#39;</span><span class="p">);</span></div><div class='line' id='LC355'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC356'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC357'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// otherwise create a new style</span></div><div class='line' id='LC358'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$style</span> <span class="o">=</span> <span class="nx">trim</span><span class="p">(</span><span class="nv">$value</span><span class="p">[</span><span class="s1">&#39;attributes&#39;</span><span class="p">]);</span></div><div class='line' id='LC359'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC360'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$node</span><span class="o">-&gt;</span><span class="na">setAttribute</span><span class="p">(</span><span class="s1">&#39;style&#39;</span><span class="p">,</span> <span class="nv">$style</span><span class="p">);</span></div><div class='line' id='LC361'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC362'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC363'><br/></div><div class='line' id='LC364'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// now iterate through the nodes that contained inline styles in the original HTML</span></div><div class='line' id='LC365'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">styleAttributesForNodes</span> <span class="k">as</span> <span class="nv">$nodePath</span> <span class="o">=&gt;</span> <span class="nv">$styleAttributesForNode</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC366'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$node</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">visitedNodes</span><span class="p">[</span><span class="nv">$nodePath</span><span class="p">];</span></div><div class='line' id='LC367'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$currentStyleAttributes</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">parseCssDeclarationBlock</span><span class="p">(</span><span class="nv">$node</span><span class="o">-&gt;</span><span class="na">getAttribute</span><span class="p">(</span><span class="s1">&#39;style&#39;</span><span class="p">));</span></div><div class='line' id='LC368'><br/></div><div class='line' id='LC369'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$combinedArray</span> <span class="o">=</span> <span class="nb">array_merge</span><span class="p">(</span><span class="nv">$currentStyleAttributes</span><span class="p">,</span> <span class="nv">$styleAttributesForNode</span><span class="p">);</span></div><div class='line' id='LC370'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$style</span> <span class="o">=</span> <span class="s1">&#39;&#39;</span><span class="p">;</span></div><div class='line' id='LC371'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span> <span class="p">(</span><span class="nv">$combinedArray</span> <span class="k">as</span> <span class="nv">$attributeName</span> <span class="o">=&gt;</span> <span class="nv">$attributeValue</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC372'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$style</span> <span class="o">.=</span> <span class="p">(</span><span class="nx">strtolower</span><span class="p">(</span><span class="nv">$attributeName</span><span class="p">)</span> <span class="o">.</span> <span class="s1">&#39;:&#39;</span> <span class="o">.</span> <span class="nv">$attributeValue</span> <span class="o">.</span> <span class="s1">&#39;;&#39;</span><span class="p">);</span></div><div class='line' id='LC373'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC374'><br/></div><div class='line' id='LC375'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$node</span><span class="o">-&gt;</span><span class="na">setAttribute</span><span class="p">(</span><span class="s1">&#39;style&#39;</span><span class="p">,</span> <span class="nv">$style</span><span class="p">);</span></div><div class='line' id='LC376'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC377'><br/></div><div class='line' id='LC378'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// This removes styles from your email that contain display:none.</span></div><div class='line' id='LC379'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// We need to look for display:none, but we need to do a case-insensitive search. Since DOMDocument only supports XPath 1.0,</span></div><div class='line' id='LC380'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// lower-case() isn&#39;t available to us. We&#39;ve thus far only set attributes to lowercase, not attribute values. Consequently, we need</span></div><div class='line' id='LC381'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// to translate() the letters that would be in &#39;NONE&#39; (&quot;NOE&quot;) to lowercase.</span></div><div class='line' id='LC382'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$nodesWithStyleDisplayNone</span> <span class="o">=</span> <span class="nv">$xpath</span><span class="o">-&gt;</span><span class="na">query</span><span class="p">(</span><span class="s1">&#39;//*[contains(translate(translate(@style,&quot; &quot;,&quot;&quot;),&quot;NOE&quot;,&quot;noe&quot;),&quot;display:none&quot;)]&#39;</span><span class="p">);</span></div><div class='line' id='LC383'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// The checks on parentNode and is_callable below ensure that if we&#39;ve deleted the parent node,</span></div><div class='line' id='LC384'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// we don&#39;t try to call removeChild on a nonexistent child node</span></div><div class='line' id='LC385'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$nodesWithStyleDisplayNone</span><span class="o">-&gt;</span><span class="na">length</span> <span class="o">&gt;</span> <span class="mi">0</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC386'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/** @var $node \DOMNode */</span></div><div class='line' id='LC387'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span> <span class="p">(</span><span class="nv">$nodesWithStyleDisplayNone</span> <span class="k">as</span> <span class="nv">$node</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC388'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$node</span><span class="o">-&gt;</span><span class="na">parentNode</span> <span class="o">&amp;&amp;</span> <span class="nb">is_callable</span><span class="p">(</span><span class="k">array</span><span class="p">(</span><span class="nv">$node</span><span class="o">-&gt;</span><span class="na">parentNode</span><span class="p">,</span><span class="s1">&#39;removeChild&#39;</span><span class="p">)))</span> <span class="p">{</span></div><div class='line' id='LC389'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$node</span><span class="o">-&gt;</span><span class="na">parentNode</span><span class="o">-&gt;</span><span class="na">removeChild</span><span class="p">(</span><span class="nv">$node</span><span class="p">);</span></div><div class='line' id='LC390'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC391'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC392'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC393'><br/></div><div class='line' id='LC394'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">preserveEncoding</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC395'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nb">mb_convert_encoding</span><span class="p">(</span><span class="nv">$xmlDocument</span><span class="o">-&gt;</span><span class="na">saveHTML</span><span class="p">(),</span> <span class="nx">self</span><span class="o">::</span><span class="na">ENCODING</span><span class="p">,</span> <span class="s1">&#39;HTML-ENTITIES&#39;</span><span class="p">);</span></div><div class='line' id='LC396'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC397'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$xmlDocument</span><span class="o">-&gt;</span><span class="na">saveHTML</span><span class="p">();</span></div><div class='line' id='LC398'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC399'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC400'><br/></div><div class='line' id='LC401'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC402'><span class="sd">     * Creates a DOMDocument instance with the current HTML.</span></div><div class='line' id='LC403'><span class="sd">     *</span></div><div class='line' id='LC404'><span class="sd">     * @return \DOMDocument</span></div><div class='line' id='LC405'><span class="sd">     */</span></div><div class='line' id='LC406'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">private</span> <span class="k">function</span> <span class="nf">createXmlDocument</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC407'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$xmlDocument</span> <span class="o">=</span> <span class="k">new</span> <span class="nx">\DOMDocument</span><span class="p">;</span></div><div class='line' id='LC408'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$xmlDocument</span><span class="o">-&gt;</span><span class="na">encoding</span> <span class="o">=</span> <span class="nx">self</span><span class="o">::</span><span class="na">ENCODING</span><span class="p">;</span></div><div class='line' id='LC409'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$xmlDocument</span><span class="o">-&gt;</span><span class="na">strictErrorChecking</span> <span class="o">=</span> <span class="k">FALSE</span><span class="p">;</span></div><div class='line' id='LC410'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$xmlDocument</span><span class="o">-&gt;</span><span class="na">formatOutput</span> <span class="o">=</span> <span class="k">TRUE</span><span class="p">;</span></div><div class='line' id='LC411'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">libxml_use_internal_errors</span><span class="p">(</span><span class="k">TRUE</span><span class="p">);</span></div><div class='line' id='LC412'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$xmlDocument</span><span class="o">-&gt;</span><span class="na">loadHTML</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getUnifiedHtml</span><span class="p">());</span></div><div class='line' id='LC413'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">libxml_clear_errors</span><span class="p">();</span></div><div class='line' id='LC414'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$xmlDocument</span><span class="o">-&gt;</span><span class="na">normalizeDocument</span><span class="p">();</span></div><div class='line' id='LC415'><br/></div><div class='line' id='LC416'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$xmlDocument</span><span class="p">;</span></div><div class='line' id='LC417'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC418'><br/></div><div class='line' id='LC419'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC420'><span class="sd">     * Returns the HTML with the non-ASCII characters converts into HTML entities and the unprocessable HTML tags removed.</span></div><div class='line' id='LC421'><span class="sd">     *</span></div><div class='line' id='LC422'><span class="sd">     * @return string the unified HTML</span></div><div class='line' id='LC423'><span class="sd">     *</span></div><div class='line' id='LC424'><span class="sd">     * @throws \BadMethodCallException</span></div><div class='line' id='LC425'><span class="sd">     */</span></div><div class='line' id='LC426'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">private</span> <span class="k">function</span> <span class="nf">getUnifiedHtml</span><span class="p">()</span> <span class="p">{</span></div><div class='line' id='LC427'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="k">empty</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">unprocessableHtmlTags</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC428'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$unprocessableHtmlTags</span> <span class="o">=</span> <span class="nb">implode</span><span class="p">(</span><span class="s1">&#39;|&#39;</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">unprocessableHtmlTags</span><span class="p">);</span></div><div class='line' id='LC429'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$bodyWithoutUnprocessableTags</span> <span class="o">=</span> <span class="nb">preg_replace</span><span class="p">(</span><span class="s1">&#39;/&lt;\\/?(&#39;</span> <span class="o">.</span> <span class="nv">$unprocessableHtmlTags</span> <span class="o">.</span> <span class="s1">&#39;)[^&gt;]*&gt;/i&#39;</span><span class="p">,</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">html</span><span class="p">);</span></div><div class='line' id='LC430'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC431'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$bodyWithoutUnprocessableTags</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">html</span><span class="p">;</span></div><div class='line' id='LC432'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC433'><br/></div><div class='line' id='LC434'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nb">mb_convert_encoding</span><span class="p">(</span><span class="nv">$bodyWithoutUnprocessableTags</span><span class="p">,</span> <span class="s1">&#39;HTML-ENTITIES&#39;</span><span class="p">,</span> <span class="nx">self</span><span class="o">::</span><span class="na">ENCODING</span><span class="p">);</span></div><div class='line' id='LC435'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC436'><br/></div><div class='line' id='LC437'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC438'><span class="sd">     * @param array $a</span></div><div class='line' id='LC439'><span class="sd">     * @param array $b</span></div><div class='line' id='LC440'><span class="sd">     *</span></div><div class='line' id='LC441'><span class="sd">     * @return integer</span></div><div class='line' id='LC442'><span class="sd">     */</span></div><div class='line' id='LC443'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">private</span> <span class="k">function</span> <span class="nf">sortBySelectorPrecedence</span><span class="p">(</span><span class="k">array</span> <span class="nv">$a</span><span class="p">,</span> <span class="k">array</span> <span class="nv">$b</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC444'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$precedenceA</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getCssSelectorPrecedence</span><span class="p">(</span><span class="nv">$a</span><span class="p">[</span><span class="s1">&#39;selector&#39;</span><span class="p">]);</span></div><div class='line' id='LC445'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$precedenceB</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">getCssSelectorPrecedence</span><span class="p">(</span><span class="nv">$b</span><span class="p">[</span><span class="s1">&#39;selector&#39;</span><span class="p">]);</span></div><div class='line' id='LC446'><br/></div><div class='line' id='LC447'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// We want these sorted in ascending order so selectors with lesser precedence get processed first and</span></div><div class='line' id='LC448'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// selectors with greater precedence get sorted last.</span></div><div class='line' id='LC449'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// The parenthesis around the -1 are necessary to avoid a PHP_CodeSniffer warning about missing spaces around</span></div><div class='line' id='LC450'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// arithmetic operators.</span></div><div class='line' id='LC451'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// @see http://forge.typo3.org/issues/55605</span></div><div class='line' id='LC452'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$precedenceForEquals</span> <span class="o">=</span> <span class="p">(</span><span class="nv">$a</span><span class="p">[</span><span class="s1">&#39;line&#39;</span><span class="p">]</span> <span class="o">&lt;</span> <span class="nv">$b</span><span class="p">[</span><span class="s1">&#39;line&#39;</span><span class="p">]</span> <span class="o">?</span> <span class="p">(</span><span class="o">-</span><span class="mi">1</span><span class="p">)</span> <span class="o">:</span> <span class="mi">1</span><span class="p">);</span></div><div class='line' id='LC453'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$precedenceForNotEquals</span> <span class="o">=</span> <span class="p">(</span><span class="nv">$precedenceA</span> <span class="o">&lt;</span> <span class="nv">$precedenceB</span> <span class="o">?</span> <span class="p">(</span><span class="o">-</span><span class="mi">1</span><span class="p">)</span> <span class="o">:</span> <span class="mi">1</span><span class="p">);</span></div><div class='line' id='LC454'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="p">(</span><span class="nv">$precedenceA</span> <span class="o">===</span> <span class="nv">$precedenceB</span><span class="p">)</span> <span class="o">?</span> <span class="nv">$precedenceForEquals</span> <span class="o">:</span> <span class="nv">$precedenceForNotEquals</span><span class="p">;</span></div><div class='line' id='LC455'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC456'><br/></div><div class='line' id='LC457'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC458'><span class="sd">     * @param string $selector</span></div><div class='line' id='LC459'><span class="sd">     *</span></div><div class='line' id='LC460'><span class="sd">     * @return integer</span></div><div class='line' id='LC461'><span class="sd">     */</span></div><div class='line' id='LC462'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">private</span> <span class="k">function</span> <span class="nf">getCssSelectorPrecedence</span><span class="p">(</span><span class="nv">$selector</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC463'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$selectorKey</span> <span class="o">=</span> <span class="nb">md5</span><span class="p">(</span><span class="nv">$selector</span><span class="p">);</span></div><div class='line' id='LC464'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">caches</span><span class="p">[</span><span class="nx">self</span><span class="o">::</span><span class="na">CACHE_KEY_SELECTOR</span><span class="p">][</span><span class="nv">$selectorKey</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC465'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$precedence</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC466'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$value</span> <span class="o">=</span> <span class="mi">100</span><span class="p">;</span></div><div class='line' id='LC467'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// ids: worth 100, classes: worth 10, elements: worth 1</span></div><div class='line' id='LC468'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$search</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;\\#&#39;</span><span class="p">,</span><span class="s1">&#39;\\.&#39;</span><span class="p">,</span><span class="s1">&#39;&#39;</span><span class="p">);</span></div><div class='line' id='LC469'><br/></div><div class='line' id='LC470'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span> <span class="p">(</span><span class="nv">$search</span> <span class="k">as</span> <span class="nv">$s</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC471'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nx">trim</span><span class="p">(</span><span class="nv">$selector</span> <span class="o">==</span> <span class="s1">&#39;&#39;</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC472'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">break</span><span class="p">;</span></div><div class='line' id='LC473'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC474'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$number</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC475'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$selector</span> <span class="o">=</span> <span class="nb">preg_replace</span><span class="p">(</span><span class="s1">&#39;/&#39;</span> <span class="o">.</span> <span class="nv">$s</span> <span class="o">.</span> <span class="s1">&#39;\\w+/&#39;</span><span class="p">,</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$selector</span><span class="p">,</span> <span class="o">-</span><span class="mi">1</span><span class="p">,</span> <span class="nv">$number</span><span class="p">);</span></div><div class='line' id='LC476'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$precedence</span> <span class="o">+=</span> <span class="p">(</span><span class="nv">$value</span> <span class="o">*</span> <span class="nv">$number</span><span class="p">);</span></div><div class='line' id='LC477'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$value</span> <span class="o">/=</span> <span class="mi">10</span><span class="p">;</span></div><div class='line' id='LC478'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC479'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">caches</span><span class="p">[</span><span class="nx">self</span><span class="o">::</span><span class="na">CACHE_KEY_SELECTOR</span><span class="p">][</span><span class="nv">$selectorKey</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$precedence</span><span class="p">;</span></div><div class='line' id='LC480'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC481'><br/></div><div class='line' id='LC482'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">caches</span><span class="p">[</span><span class="nx">self</span><span class="o">::</span><span class="na">CACHE_KEY_SELECTOR</span><span class="p">][</span><span class="nv">$selectorKey</span><span class="p">];</span></div><div class='line' id='LC483'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC484'><br/></div><div class='line' id='LC485'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC486'><span class="sd">     * Right now, we support all CSS 1 selectors and most CSS2/3 selectors.</span></div><div class='line' id='LC487'><span class="sd">     *</span></div><div class='line' id='LC488'><span class="sd">     * @see http://plasmasturm.org/log/444/</span></div><div class='line' id='LC489'><span class="sd">     *</span></div><div class='line' id='LC490'><span class="sd">     * @param string $cssSelector</span></div><div class='line' id='LC491'><span class="sd">     *</span></div><div class='line' id='LC492'><span class="sd">     * @return string</span></div><div class='line' id='LC493'><span class="sd">     */</span></div><div class='line' id='LC494'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">private</span> <span class="k">function</span> <span class="nf">translateCssToXpath</span><span class="p">(</span><span class="nv">$cssSelector</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC495'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$cssSelector</span> <span class="o">=</span> <span class="nx">trim</span><span class="p">(</span><span class="nv">$cssSelector</span><span class="p">);</span></div><div class='line' id='LC496'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$xpathKey</span> <span class="o">=</span> <span class="nb">md5</span><span class="p">(</span><span class="nv">$cssSelector</span><span class="p">);</span></div><div class='line' id='LC497'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$this</span><span class="o">-&gt;</span><span class="na">caches</span><span class="p">[</span><span class="nx">self</span><span class="o">::</span><span class="na">CACHE_KEY_XPATH</span><span class="p">][</span><span class="nv">$xpathKey</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC498'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// returns an Xpath selector</span></div><div class='line' id='LC499'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$search</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC500'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Matches any element that is a child of parent.</span></div><div class='line' id='LC501'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;/\\s+&gt;\\s+/&#39;</span><span class="p">,</span></div><div class='line' id='LC502'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Matches any element that is an adjacent sibling.</span></div><div class='line' id='LC503'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;/\\s+\\+\\s+/&#39;</span><span class="p">,</span></div><div class='line' id='LC504'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Matches any element that is a descendant of an parent element element.</span></div><div class='line' id='LC505'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;/\\s+/&#39;</span><span class="p">,</span></div><div class='line' id='LC506'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// first-child pseudo-selector</span></div><div class='line' id='LC507'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;/([^\\/]+):first-child/i&#39;</span><span class="p">,</span></div><div class='line' id='LC508'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// last-child pseudo-selector</span></div><div class='line' id='LC509'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;/([^\\/]+):last-child/i&#39;</span><span class="p">,</span></div><div class='line' id='LC510'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Matches element with attribute</span></div><div class='line' id='LC511'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;/(\\w)\\[(\\w+)\\]/&#39;</span><span class="p">,</span></div><div class='line' id='LC512'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Matches element with EXACT attribute</span></div><div class='line' id='LC513'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;/(\\w)\\[(\\w+)\\=[\&#39;&quot;]?(\\w+)[\&#39;&quot;]?\\]/&#39;</span><span class="p">,</span></div><div class='line' id='LC514'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC515'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$replace</span> <span class="o">=</span> <span class="k">array</span><span class="p">(</span></div><div class='line' id='LC516'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;/&#39;</span><span class="p">,</span></div><div class='line' id='LC517'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;/following-sibling::*[1]/self::&#39;</span><span class="p">,</span></div><div class='line' id='LC518'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;//&#39;</span><span class="p">,</span></div><div class='line' id='LC519'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;*[1]/self::\\1&#39;</span><span class="p">,</span></div><div class='line' id='LC520'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;*[last()]/self::\\1&#39;</span><span class="p">,</span></div><div class='line' id='LC521'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;\\1[@\\2]&#39;</span><span class="p">,</span></div><div class='line' id='LC522'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;\\1[@\\2=&quot;\\3&quot;]&#39;</span><span class="p">,</span></div><div class='line' id='LC523'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC524'><br/></div><div class='line' id='LC525'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$cssSelector</span> <span class="o">=</span> <span class="s1">&#39;//&#39;</span> <span class="o">.</span> <span class="nb">preg_replace</span><span class="p">(</span><span class="nv">$search</span><span class="p">,</span> <span class="nv">$replace</span><span class="p">,</span> <span class="nv">$cssSelector</span><span class="p">);</span></div><div class='line' id='LC526'><br/></div><div class='line' id='LC527'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$cssSelector</span> <span class="o">=</span> <span class="nb">preg_replace_callback</span><span class="p">(</span><span class="nx">self</span><span class="o">::</span><span class="na">ID_ATTRIBUTE_MATCHER</span><span class="p">,</span> <span class="k">array</span><span class="p">(</span><span class="nv">$this</span><span class="p">,</span> <span class="s1">&#39;matchIdAttributes&#39;</span><span class="p">),</span> <span class="nv">$cssSelector</span><span class="p">);</span></div><div class='line' id='LC528'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$cssSelector</span> <span class="o">=</span> <span class="nb">preg_replace_callback</span><span class="p">(</span><span class="nx">self</span><span class="o">::</span><span class="na">CLASS_ATTRIBUTE_MATCHER</span><span class="p">,</span> <span class="k">array</span><span class="p">(</span><span class="nv">$this</span><span class="p">,</span> <span class="s1">&#39;matchClassAttributes&#39;</span><span class="p">),</span> <span class="nv">$cssSelector</span><span class="p">);</span></div><div class='line' id='LC529'><br/></div><div class='line' id='LC530'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// Advanced selectors are going to require a bit more advanced emogrification.</span></div><div class='line' id='LC531'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// When we required PHP 5.3, we could do this with closures.</span></div><div class='line' id='LC532'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$cssSelector</span> <span class="o">=</span> <span class="nb">preg_replace_callback</span><span class="p">(</span></div><div class='line' id='LC533'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;/([^\\/]+):nth-child\\(\s*(odd|even|[+\-]?\\d|[+\\-]?\\d?n(\\s*[+\\-]\\s*\\d)?)\\s*\\)/i&#39;</span><span class="p">,</span></div><div class='line' id='LC534'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">array</span><span class="p">(</span><span class="nv">$this</span><span class="p">,</span> <span class="s1">&#39;translateNthChild&#39;</span><span class="p">),</span> <span class="nv">$cssSelector</span></div><div class='line' id='LC535'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC536'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$cssSelector</span> <span class="o">=</span> <span class="nb">preg_replace_callback</span><span class="p">(</span></div><div class='line' id='LC537'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;/([^\\/]+):nth-of-type\\(\s*(odd|even|[+\-]?\\d|[+\\-]?\\d?n(\\s*[+\\-]\\s*\\d)?)\\s*\\)/i&#39;</span><span class="p">,</span></div><div class='line' id='LC538'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">array</span><span class="p">(</span><span class="nv">$this</span><span class="p">,</span> <span class="s1">&#39;translateNthOfType&#39;</span><span class="p">),</span> <span class="nv">$cssSelector</span></div><div class='line' id='LC539'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">);</span></div><div class='line' id='LC540'><br/></div><div class='line' id='LC541'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$this</span><span class="o">-&gt;</span><span class="na">caches</span><span class="p">[</span><span class="nx">self</span><span class="o">::</span><span class="na">CACHE_KEY_SELECTOR</span><span class="p">][</span><span class="nv">$xpathKey</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$cssSelector</span><span class="p">;</span></div><div class='line' id='LC542'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC543'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">caches</span><span class="p">[</span><span class="nx">self</span><span class="o">::</span><span class="na">CACHE_KEY_SELECTOR</span><span class="p">][</span><span class="nv">$xpathKey</span><span class="p">];</span></div><div class='line' id='LC544'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC545'><br/></div><div class='line' id='LC546'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC547'><span class="sd">     * @param array $match</span></div><div class='line' id='LC548'><span class="sd">     *</span></div><div class='line' id='LC549'><span class="sd">     * @return string</span></div><div class='line' id='LC550'><span class="sd">     */</span></div><div class='line' id='LC551'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">private</span> <span class="k">function</span> <span class="nf">matchIdAttributes</span><span class="p">(</span><span class="k">array</span> <span class="nv">$match</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC552'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="p">(</span><span class="nb">strlen</span><span class="p">(</span><span class="nv">$match</span><span class="p">[</span><span class="mi">1</span><span class="p">])</span> <span class="o">?</span> <span class="nv">$match</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span> <span class="o">:</span> <span class="s1">&#39;*&#39;</span><span class="p">)</span> <span class="o">.</span> <span class="s1">&#39;[@id=&quot;&#39;</span> <span class="o">.</span> <span class="nv">$match</span><span class="p">[</span><span class="mi">2</span><span class="p">]</span> <span class="o">.</span> <span class="s1">&#39;&quot;]&#39;</span><span class="p">;</span></div><div class='line' id='LC553'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC554'><br/></div><div class='line' id='LC555'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC556'><span class="sd">     * @param array $match</span></div><div class='line' id='LC557'><span class="sd">     *</span></div><div class='line' id='LC558'><span class="sd">     * @return string</span></div><div class='line' id='LC559'><span class="sd">     */</span></div><div class='line' id='LC560'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">private</span> <span class="k">function</span> <span class="nf">matchClassAttributes</span><span class="p">(</span><span class="k">array</span> <span class="nv">$match</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC561'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="p">(</span><span class="nb">strlen</span><span class="p">(</span><span class="nv">$match</span><span class="p">[</span><span class="mi">1</span><span class="p">])</span> <span class="o">?</span> <span class="nv">$match</span><span class="p">[</span><span class="mi">1</span><span class="p">]</span> <span class="o">:</span> <span class="s1">&#39;*&#39;</span><span class="p">)</span> <span class="o">.</span> <span class="s1">&#39;[contains(concat(&quot; &quot;,@class,&quot; &quot;),concat(&quot; &quot;,&quot;&#39;</span> <span class="o">.</span></div><div class='line' id='LC562'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">implode</span><span class="p">(</span></div><div class='line' id='LC563'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="s1">&#39;&quot;,&quot; &quot;))][contains(concat(&quot; &quot;,@class,&quot; &quot;),concat(&quot; &quot;,&quot;&#39;</span><span class="p">,</span></div><div class='line' id='LC564'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nb">explode</span><span class="p">(</span><span class="s1">&#39;.&#39;</span><span class="p">,</span> <span class="nx">substr</span><span class="p">(</span><span class="nv">$match</span><span class="p">[</span><span class="mi">2</span><span class="p">],</span> <span class="mi">1</span><span class="p">))</span></div><div class='line' id='LC565'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">)</span> <span class="o">.</span> <span class="s1">&#39;&quot;,&quot; &quot;))]&#39;</span><span class="p">;</span></div><div class='line' id='LC566'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC567'><br/></div><div class='line' id='LC568'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC569'><span class="sd">     * @param array $match</span></div><div class='line' id='LC570'><span class="sd">     *</span></div><div class='line' id='LC571'><span class="sd">     * @return string</span></div><div class='line' id='LC572'><span class="sd">     */</span></div><div class='line' id='LC573'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">private</span> <span class="k">function</span> <span class="nf">translateNthChild</span><span class="p">(</span><span class="k">array</span> <span class="nv">$match</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC574'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">parseNth</span><span class="p">(</span><span class="nv">$match</span><span class="p">);</span></div><div class='line' id='LC575'><br/></div><div class='line' id='LC576'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$result</span><span class="p">[</span><span class="nx">self</span><span class="o">::</span><span class="na">MULTIPLIER</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC577'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$result</span><span class="p">[</span><span class="nx">self</span><span class="o">::</span><span class="na">MULTIPLIER</span><span class="p">]</span> <span class="o">&lt;</span> <span class="mi">0</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC578'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span><span class="p">[</span><span class="nx">self</span><span class="o">::</span><span class="na">MULTIPLIER</span><span class="p">]</span> <span class="o">=</span> <span class="nb">abs</span><span class="p">(</span><span class="nv">$result</span><span class="p">[</span><span class="nx">self</span><span class="o">::</span><span class="na">MULTIPLIER</span><span class="p">]);</span></div><div class='line' id='LC579'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nb">sprintf</span><span class="p">(</span><span class="s1">&#39;*[(last() - position()) mod %u = %u]/self::%s&#39;</span><span class="p">,</span> <span class="nv">$result</span><span class="p">[</span><span class="nx">self</span><span class="o">::</span><span class="na">MULTIPLIER</span><span class="p">],</span> <span class="nv">$result</span><span class="p">[</span><span class="nx">self</span><span class="o">::</span><span class="na">INDEX</span><span class="p">],</span> <span class="nv">$match</span><span class="p">[</span><span class="mi">1</span><span class="p">]);</span></div><div class='line' id='LC580'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC581'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nb">sprintf</span><span class="p">(</span><span class="s1">&#39;*[position() mod %u = %u]/self::%s&#39;</span><span class="p">,</span> <span class="nv">$result</span><span class="p">[</span><span class="nx">self</span><span class="o">::</span><span class="na">MULTIPLIER</span><span class="p">],</span> <span class="nv">$result</span><span class="p">[</span><span class="nx">self</span><span class="o">::</span><span class="na">INDEX</span><span class="p">],</span> <span class="nv">$match</span><span class="p">[</span><span class="mi">1</span><span class="p">]);</span></div><div class='line' id='LC582'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC583'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC584'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nb">sprintf</span><span class="p">(</span><span class="s1">&#39;*[%u]/self::%s&#39;</span><span class="p">,</span> <span class="nv">$result</span><span class="p">[</span><span class="nx">self</span><span class="o">::</span><span class="na">INDEX</span><span class="p">],</span> <span class="nv">$match</span><span class="p">[</span><span class="mi">1</span><span class="p">]);</span></div><div class='line' id='LC585'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC586'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC587'><br/></div><div class='line' id='LC588'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC589'><span class="sd">     * @param array $match</span></div><div class='line' id='LC590'><span class="sd">     *</span></div><div class='line' id='LC591'><span class="sd">     * @return string</span></div><div class='line' id='LC592'><span class="sd">     */</span></div><div class='line' id='LC593'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">private</span> <span class="k">function</span> <span class="nf">translateNthOfType</span><span class="p">(</span><span class="k">array</span> <span class="nv">$match</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC594'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span> <span class="o">=</span> <span class="nv">$this</span><span class="o">-&gt;</span><span class="na">parseNth</span><span class="p">(</span><span class="nv">$match</span><span class="p">);</span></div><div class='line' id='LC595'><br/></div><div class='line' id='LC596'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$result</span><span class="p">[</span><span class="nx">self</span><span class="o">::</span><span class="na">MULTIPLIER</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC597'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nv">$result</span><span class="p">[</span><span class="nx">self</span><span class="o">::</span><span class="na">MULTIPLIER</span><span class="p">]</span> <span class="o">&lt;</span> <span class="mi">0</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC598'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$result</span><span class="p">[</span><span class="nx">self</span><span class="o">::</span><span class="na">MULTIPLIER</span><span class="p">]</span> <span class="o">=</span> <span class="nb">abs</span><span class="p">(</span><span class="nv">$result</span><span class="p">[</span><span class="nx">self</span><span class="o">::</span><span class="na">MULTIPLIER</span><span class="p">]);</span></div><div class='line' id='LC599'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nb">sprintf</span><span class="p">(</span><span class="s1">&#39;%s[(last() - position()) mod %u = %u]&#39;</span><span class="p">,</span> <span class="nv">$match</span><span class="p">[</span><span class="mi">1</span><span class="p">],</span> <span class="nv">$result</span><span class="p">[</span><span class="nx">self</span><span class="o">::</span><span class="na">MULTIPLIER</span><span class="p">],</span> <span class="nv">$result</span><span class="p">[</span><span class="nx">self</span><span class="o">::</span><span class="na">INDEX</span><span class="p">]);</span></div><div class='line' id='LC600'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC601'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nb">sprintf</span><span class="p">(</span><span class="s1">&#39;%s[position() mod %u = %u]&#39;</span><span class="p">,</span> <span class="nv">$match</span><span class="p">[</span><span class="mi">1</span><span class="p">],</span> <span class="nv">$result</span><span class="p">[</span><span class="nx">self</span><span class="o">::</span><span class="na">MULTIPLIER</span><span class="p">],</span> <span class="nv">$result</span><span class="p">[</span><span class="nx">self</span><span class="o">::</span><span class="na">INDEX</span><span class="p">]);</span></div><div class='line' id='LC602'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC603'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC604'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nb">sprintf</span><span class="p">(</span><span class="s1">&#39;%s[%u]&#39;</span><span class="p">,</span> <span class="nv">$match</span><span class="p">[</span><span class="mi">1</span><span class="p">],</span> <span class="nv">$result</span><span class="p">[</span><span class="nx">self</span><span class="o">::</span><span class="na">INDEX</span><span class="p">]);</span></div><div class='line' id='LC605'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC606'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC607'><br/></div><div class='line' id='LC608'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC609'><span class="sd">     * @param array $match</span></div><div class='line' id='LC610'><span class="sd">     *</span></div><div class='line' id='LC611'><span class="sd">     * @return array</span></div><div class='line' id='LC612'><span class="sd">     */</span></div><div class='line' id='LC613'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">private</span> <span class="k">function</span> <span class="nf">parseNth</span><span class="p">(</span><span class="k">array</span> <span class="nv">$match</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC614'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">in_array</span><span class="p">(</span><span class="nx">strtolower</span><span class="p">(</span><span class="nv">$match</span><span class="p">[</span><span class="mi">2</span><span class="p">]),</span> <span class="k">array</span><span class="p">(</span><span class="s1">&#39;even&#39;</span><span class="p">,</span><span class="s1">&#39;odd&#39;</span><span class="p">)))</span> <span class="p">{</span></div><div class='line' id='LC615'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$index</span> <span class="o">=</span> <span class="nx">strtolower</span><span class="p">(</span><span class="nv">$match</span><span class="p">[</span><span class="mi">2</span><span class="p">])</span> <span class="o">==</span> <span class="s1">&#39;even&#39;</span> <span class="o">?</span> <span class="mi">0</span> <span class="o">:</span> <span class="mi">1</span><span class="p">;</span></div><div class='line' id='LC616'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">array</span><span class="p">(</span><span class="nx">self</span><span class="o">::</span><span class="na">MULTIPLIER</span> <span class="o">=&gt;</span> <span class="mi">2</span><span class="p">,</span> <span class="nx">self</span><span class="o">::</span><span class="na">INDEX</span> <span class="o">=&gt;</span> <span class="nv">$index</span><span class="p">);</span></div><div class='line' id='LC617'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">elseif</span> <span class="p">(</span><span class="nb">stripos</span><span class="p">(</span><span class="nv">$match</span><span class="p">[</span><span class="mi">2</span><span class="p">],</span> <span class="s1">&#39;n&#39;</span><span class="p">)</span> <span class="o">===</span> <span class="k">FALSE</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC618'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="c1">// if there is a multiplier</span></div><div class='line' id='LC619'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$index</span> <span class="o">=</span> <span class="nb">intval</span><span class="p">(</span><span class="nb">str_replace</span><span class="p">(</span><span class="s1">&#39; &#39;</span><span class="p">,</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$match</span><span class="p">[</span><span class="mi">2</span><span class="p">]));</span></div><div class='line' id='LC620'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">array</span><span class="p">(</span><span class="nx">self</span><span class="o">::</span><span class="na">INDEX</span> <span class="o">=&gt;</span> <span class="nv">$index</span><span class="p">);</span></div><div class='line' id='LC621'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC622'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="nb">isset</span><span class="p">(</span><span class="nv">$match</span><span class="p">[</span><span class="mi">3</span><span class="p">]))</span> <span class="p">{</span></div><div class='line' id='LC623'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$multipleTerm</span> <span class="o">=</span> <span class="nb">str_replace</span><span class="p">(</span><span class="nv">$match</span><span class="p">[</span><span class="mi">3</span><span class="p">],</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$match</span><span class="p">[</span><span class="mi">2</span><span class="p">]);</span></div><div class='line' id='LC624'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$index</span> <span class="o">=</span> <span class="nb">intval</span><span class="p">(</span><span class="nb">str_replace</span><span class="p">(</span><span class="s1">&#39; &#39;</span><span class="p">,</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$match</span><span class="p">[</span><span class="mi">3</span><span class="p">]));</span></div><div class='line' id='LC625'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC626'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$multipleTerm</span> <span class="o">=</span> <span class="nv">$match</span><span class="p">[</span><span class="mi">2</span><span class="p">];</span></div><div class='line' id='LC627'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$index</span> <span class="o">=</span> <span class="mi">0</span><span class="p">;</span></div><div class='line' id='LC628'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC629'><br/></div><div class='line' id='LC630'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$multiplier</span> <span class="o">=</span> <span class="nb">str_ireplace</span><span class="p">(</span><span class="s1">&#39;n&#39;</span><span class="p">,</span> <span class="s1">&#39;&#39;</span><span class="p">,</span> <span class="nv">$multipleTerm</span><span class="p">);</span></div><div class='line' id='LC631'><br/></div><div class='line' id='LC632'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">strlen</span><span class="p">(</span><span class="nv">$multiplier</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC633'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$multiplier</span> <span class="o">=</span> <span class="mi">1</span><span class="p">;</span></div><div class='line' id='LC634'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">elseif</span> <span class="p">(</span><span class="nv">$multiplier</span> <span class="o">==</span> <span class="mi">0</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC635'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">array</span><span class="p">(</span><span class="nx">self</span><span class="o">::</span><span class="na">INDEX</span> <span class="o">=&gt;</span> <span class="nv">$index</span><span class="p">);</span></div><div class='line' id='LC636'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span> <span class="k">else</span> <span class="p">{</span></div><div class='line' id='LC637'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$multiplier</span> <span class="o">=</span> <span class="nb">intval</span><span class="p">(</span><span class="nv">$multiplier</span><span class="p">);</span></div><div class='line' id='LC638'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC639'><br/></div><div class='line' id='LC640'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">while</span> <span class="p">(</span><span class="nv">$index</span> <span class="o">&lt;</span> <span class="mi">0</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC641'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$index</span> <span class="o">+=</span> <span class="nb">abs</span><span class="p">(</span><span class="nv">$multiplier</span><span class="p">);</span></div><div class='line' id='LC642'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC643'><br/></div><div class='line' id='LC644'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="k">array</span><span class="p">(</span><span class="nx">self</span><span class="o">::</span><span class="na">MULTIPLIER</span> <span class="o">=&gt;</span> <span class="nv">$multiplier</span><span class="p">,</span> <span class="nx">self</span><span class="o">::</span><span class="na">INDEX</span> <span class="o">=&gt;</span> <span class="nv">$index</span><span class="p">);</span></div><div class='line' id='LC645'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC646'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC647'><br/></div><div class='line' id='LC648'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sd">/**</span></div><div class='line' id='LC649'><span class="sd">     * Parses a CSS declaration block into property name/value pairs.</span></div><div class='line' id='LC650'><span class="sd">     *</span></div><div class='line' id='LC651'><span class="sd">     * Example:</span></div><div class='line' id='LC652'><span class="sd">     *</span></div><div class='line' id='LC653'><span class="sd">     * The declaration block</span></div><div class='line' id='LC654'><span class="sd">     *</span></div><div class='line' id='LC655'><span class="sd">     *   &quot;color: #000; font-weight: bold;&quot;</span></div><div class='line' id='LC656'><span class="sd">     *</span></div><div class='line' id='LC657'><span class="sd">     * will be parsed into the following array:</span></div><div class='line' id='LC658'><span class="sd">     *</span></div><div class='line' id='LC659'><span class="sd">     *   &quot;color&quot; =&gt; &quot;#000&quot;</span></div><div class='line' id='LC660'><span class="sd">     *   &quot;font-weight&quot; =&gt; &quot;bold&quot;</span></div><div class='line' id='LC661'><span class="sd">     *</span></div><div class='line' id='LC662'><span class="sd">     * @param string $cssDeclarationBlock the CSS declaration block without the curly braces, may be empty</span></div><div class='line' id='LC663'><span class="sd">     *</span></div><div class='line' id='LC664'><span class="sd">     * @return array the CSS declarations with the property names as array keys and the property values as array values</span></div><div class='line' id='LC665'><span class="sd">     */</span></div><div class='line' id='LC666'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">private</span> <span class="k">function</span> <span class="nf">parseCssDeclarationBlock</span><span class="p">(</span><span class="nv">$cssDeclarationBlock</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC667'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$properties</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC668'><br/></div><div class='line' id='LC669'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$declarations</span> <span class="o">=</span> <span class="nb">explode</span><span class="p">(</span><span class="s1">&#39;;&#39;</span><span class="p">,</span> <span class="nv">$cssDeclarationBlock</span><span class="p">);</span></div><div class='line' id='LC670'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">foreach</span> <span class="p">(</span><span class="nv">$declarations</span> <span class="k">as</span> <span class="nv">$declaration</span><span class="p">)</span> <span class="p">{</span></div><div class='line' id='LC671'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$matches</span> <span class="o">=</span> <span class="k">array</span><span class="p">();</span></div><div class='line' id='LC672'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">if</span> <span class="p">(</span><span class="o">!</span><span class="nb">preg_match</span><span class="p">(</span><span class="s1">&#39;/ *([a-z\-]+) *: *([^;]+) */&#39;</span><span class="p">,</span> <span class="nv">$declaration</span><span class="p">,</span> <span class="nv">$matches</span><span class="p">))</span> <span class="p">{</span></div><div class='line' id='LC673'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">continue</span><span class="p">;</span></div><div class='line' id='LC674'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC675'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$propertyName</span> <span class="o">=</span> <span class="nv">$matches</span><span class="p">[</span><span class="mi">1</span><span class="p">];</span></div><div class='line' id='LC676'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$propertyValue</span> <span class="o">=</span> <span class="nv">$matches</span><span class="p">[</span><span class="mi">2</span><span class="p">];</span></div><div class='line' id='LC677'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="nv">$properties</span><span class="p">[</span><span class="nv">$propertyName</span><span class="p">]</span> <span class="o">=</span> <span class="nv">$propertyValue</span><span class="p">;</span></div><div class='line' id='LC678'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC679'><br/></div><div class='line' id='LC680'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="k">return</span> <span class="nv">$properties</span><span class="p">;</span></div><div class='line' id='LC681'>&nbsp;&nbsp;&nbsp;&nbsp;<span class="p">}</span></div><div class='line' id='LC682'><span class="p">}</span></div></pre></div></td>
          </tr>
        </table>
  </div>

  </div>
</div>

<a href="#jump-to-line" rel="facebox[.linejump]" data-hotkey="l" class="js-jump-to-line" style="display:none">Jump to Line</a>
<div id="jump-to-line" style="display:none">
  <form accept-charset="UTF-8" class="js-jump-to-line-form">
    <input class="linejump-input js-jump-to-line-field" type="text" placeholder="Jump to line&hellip;" autofocus>
    <button type="submit" class="button">Go</button>
  </form>
</div>

        </div>

      </div><!-- /.repo-container -->
      <div class="modal-backdrop"></div>
    </div><!-- /.container -->
  </div><!-- /.site -->


    </div><!-- /.wrapper -->

      <div class="container">
  <div class="site-footer">
    <ul class="site-footer-links right">
      <li><a href="https://status.github.com/">Status</a></li>
      <li><a href="http://developer.github.com">API</a></li>
      <li><a href="http://training.github.com">Training</a></li>
      <li><a href="http://shop.github.com">Shop</a></li>
      <li><a href="/blog">Blog</a></li>
      <li><a href="/about">About</a></li>

    </ul>

    <a href="/">
      <span class="mega-octicon octicon-mark-github" title="GitHub"></span>
    </a>

    <ul class="site-footer-links">
      <li>&copy; 2014 <span title="0.02714s from github-fe138-cp1-prd.iad.github.net">GitHub</span>, Inc.</li>
        <li><a href="/site/terms">Terms</a></li>
        <li><a href="/site/privacy">Privacy</a></li>
        <li><a href="/security">Security</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
  </div><!-- /.site-footer -->
</div><!-- /.container -->


    <div class="fullscreen-overlay js-fullscreen-overlay" id="fullscreen_overlay">
  <div class="fullscreen-container js-fullscreen-container">
    <div class="textarea-wrap">
      <textarea name="fullscreen-contents" id="fullscreen-contents" class="js-fullscreen-contents" placeholder="" data-suggester="fullscreen_suggester"></textarea>
          <div class="suggester-container">
              <div class="suggester fullscreen-suggester js-navigation-container" id="fullscreen_suggester"
                 data-url="/jjriv/emogrifier/suggestions/commit">
              </div>
          </div>
    </div>
  </div>
  <div class="fullscreen-sidebar">
    <a href="#" class="exit-fullscreen js-exit-fullscreen tooltipped leftwards" aria-label="Exit Zen Mode">
      <span class="mega-octicon octicon-screen-normal"></span>
    </a>
    <a href="#" class="theme-switcher js-theme-switcher tooltipped leftwards"
      aria-label="Switch themes">
      <span class="octicon octicon-color-mode"></span>
    </a>
  </div>
</div>



    <div id="ajax-error-message" class="flash flash-error">
      <span class="octicon octicon-alert"></span>
      <a href="#" class="octicon octicon-remove-close close js-ajax-error-dismiss"></a>
      Something went wrong with that request. Please try again.
    </div>

  </body>
</html>


<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')):
    throw new NotFoundException();
endif;

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $this->Html->charset('UTF-8'); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>..:: Academia de Software Libre Guarico ::..</title>

    <!-- CSS -->
    <?php
    echo $this->Html->css(array('bootstrap.min.css','font-awesome.min.css','animate.min.css','lightbox.css','syntax/shCore.css','syntax/shThemeDefault.css',
								'style.css','color-default.css','width-boxed.css'), array('media' => 'screen')); 
    ?>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- Setting Options -->
    <div id="color-switcher" class="animated fadeIn animation-dalay-10">
        <div id="color-switcher-tab">
            <i class="fa fa-gear fa fa-2x"></i>
        </div>
        <div id="color-switcher-content">
            <h3>Color Selector</h3>
            <a href="#" rel="color-default.css" class="color default">default</a>
            <a href="#" rel="color-niceblue.css" class="color niceblue">niceblue</a>
            <a href="#" rel="color-intenseblue.css" class="color intenseblue">intenseblue</a>
            <a href="#" rel="color-otherblue.css" class="color otherblue">otherblue</a>
            <a href="#" rel="color-blue.css" class="color blue">blue</a>
            <a href="#" rel="color-puregreen.css" class="color puregreen">puregreen</a>
            <a href="#" rel="color-grassgreen.css" class="color grassgreen">grassgreen</a>
            <a href="#" rel="color-green.css" class="color green">green</a>        
            <a href="#" rel="color-olive.css" class="color olive">olive</a>
            <a href="#" rel="color-gold.css" class="color gold">gold</a>
            <a href="#" rel="color-orange.css" class="color orange">orange</a>
            <a href="#" rel="color-pink.css" class="color pink">pink</a>
            <a href="#" rel="color-fuchsia.css" class="color fuchsia">fuchsia</a>
            <a href="#" rel="color-violet.css" class="color violet">violet</a>
            <a href="#" rel="color-red.css" class="color red">red</a>
            

            <h3>Container Selector</h3>
            <div class="btn-group">
                <button href="#" class="option btn btn-sm btn-primary" rel="width-boxed.css">Boxed</button>
                <button href="#" class="option btn btn-sm btn-primary" rel="width-full.css">Full Width</button>
            </div>
        </div>
    </div> <!-- color-switcher -->

    <div class="boxed animated fadeIn animation-delay-5">

        <header id="header" class="hidden-xs">
            <div class="container">
                <div id="header-title">
                    <h1 class="animated fadeInDown"><a href="index.html">Open <span>Mind</span></a></h1>
                    <p class="animated fadeInLeft">Clean and elegant theme</p>
                </div>

                <div id="social-header" class="hidden-xs">
                    <a href="#" class="social-icon soc-twitter animated fadeInDown animation-delay-1"><i class="fa fa-twitter"></i></a>
                    <a href="#" class="social-icon soc-google-plus animated fadeInDown animation-delay-2"><i class="fa fa-google-plus"></i></a>
                    <a href="#" class="social-icon soc-facebook animated fadeInDown animation-delay-3"><i class="fa fa-facebook"></i></a>
                    <a href="#" class="social-icon soc-instagram animated fadeInDown animation-delay-4"><i class="fa fa-instagram"></i></a>
                    <a href="#" class="social-icon soc-pinterest animated fadeInDown animation-delay-5"><i class="fa fa-pinterest"></i></a>
                    <a href="#" class="social-icon soc-linkedin animated fadeInDown animation-delay-6"><i class="fa fa-linkedin"></i></a>
                    <a href="#" class="social-icon soc-github animated fadeInDown animation-delay-7"><i class="fa fa-github"></i></a>
                </div>

                <div id="search-header" class="hidden-xs animated bounceInRight">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
                            </span>
                    </div><!-- /input-group -->
                </div>
            </div> <!-- container -->
        </header> <!-- header -->

        <nav class="navbar navbar-static-top navbar-mind" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-brand visible-xs" href="index.html">Open <span>Mind</span></a>

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-mind-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars fa-inverse"></i>
                    </button>
                </div>
                
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-mind-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li class="active"><a href="index.html">Home Option 1</a></li>
                                <li><a href="home2.html">Home Option 2</a></li>
                            </ul>
                        </li> <!-- dropdown -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">UI Elements <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="css.html">CSS</a></li>
                                <li><a href="components.html">Components</a></li>
                                <li><a href="additional_components.html">Additional Components</a></li>
                                <li><a href="layout.html">Layout</a></li>
                            </ul>
                        </li> <!-- dropdown -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="about.html">About us</a></li>
                                <li><a href="team.html">Our Team</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="coming.html">Coming Soon</a></li>
                                <li><a href="coming2.html">Coming Soon Option 2</a></li>
                                <li><a href="timeline.html">Timeline</a></li>
                                <li><a href="404.html">Error 404</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="full.html">Full Page</a></li>
                                <li class="dropdown-header">User Pages</li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="profile.html">Profile</a></li>
                            </ul>
                        </li> <!-- dropdown -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="blog.html">Blog Right Sidebar</a></li>
                                <li><a href="blog_right.html">Blog Left Sidebar</a></li>
                                <li><a href="blog_full.html">Blog Full</a></li>
                                <li><a href="single.html">Blog Single</a></li>
                                <li><a href="blog2.html">Blog Other Option</a></li>
                            </ul>
                        </li> <!-- dropdown -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li><a href="portfolio2.html">Portfolio Option 2</a></li>
                                <li><a href="portfolio_item.html">Portfolio item</a></li>
                            </ul>
                        </li> <!-- dropdown -->
                    </ul> <!-- nav nabvar-nav -->

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login</a>
                            <div class="dropdown-menu dropdown-login animated fadeInUp">
                                <form role="form">
                                    <h4 class="section-title">Login Form</h4>
         
                                    <div class="form-group">
                                        <div class="input-group login-input">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                        <br>
                                        <div class="input-group login-input">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                            <input type="password" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> Remember me
                                            </label>
                                        </div>
                                        <button type="submit" class="btn btn-primary pull-right">Login</button>
                                        <div class="clearfix"></div>
                                    </div>
                                </form>      
                            </div>
                        </li> <!-- dropdown -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">User name</a>
                            <div class="dropdown-menu dropdown-profile animated fadeInUp">
                                <img src="img/avatar.jpg" class="imageborder alignleft" alt="image"> 
                                <h4>Administrator</h4>
                                prueba@prueba.com<br>
                                <a href="profile.html">Profile</a> | <a href="#">Logout</a>

                            </div>
                        </li> <!-- dropdown -->
                    </ul> <!-- nav nabvar-nav -->
                </div><!-- navbar-collapse -->
            </div> <!-- container -->
        </nav> <!-- navbar navbar-default -->

        <section>
            <div id="carousel-example-generic" class="carousel carousel-mind slide" data-ride="carousel" data-interval="5000">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-sm-7">
                                    <div class="carousel-caption">
                                        <div class="carousel-text">
                                           <h1 class="animated fadeInDownBig">The template that adapts to all projects</h1>
                                           <ul class="list-unstyled carousel-list">
                                               <li class="animated bounceInLeft"><i class="fa fa-code"></i><span>Built with Bootstrap</span></li>
                                               <li class="animated bounceInLeft"><i class="fa fa-html5"></i><span>HTML5 and CSS3</span></li>
                                               <li class="animated bounceInLeft"><i class="fa fa-table"></i><span>Responsive Template</span></li>
                                           </ul>
                                       </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-5 hidden-xs carousel-img-wrap">
                                    <div class="carousel-img">
                                        <img src="img/pre.png" class="img-responsive animated bounceInUp" alt="Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 col-sm-8">
                                    <div class="carousel-caption">
                                        <div class="carousel-text">
                                           <h1 class="animated fadeInDownBig">design your own template very easily</h1>
                                           <ul class="list-unstyled carousel-list">
                                               <li class="animated bounceInLeft"><i class="fa fa-eye"></i><span>More Than 15 Colors</span></li>
                                               <li class="animated bounceInLeft"><i class="fa fa-th-large"></i><span>Customizable Components</span></li>
                                               <li class="animated bounceInLeft"><i class="fa fa-files-o"></i><span>Over 25 pages ready to use</span></li>
                                           </ul>
                                       </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-4 hidden-xs carousel-img-wrap">
                                    <div class="carousel-img">
                                        <img src="img/pre2.png" class="img-responsive animated bounceInUp" alt="Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-md-7 col-sm-9">
                                    <div class="carousel-caption">
                                        <div class="carousel-text">
                                           <h1 class="animated fadeInDownBig">Wordpress version coming soon</h1>
                                           <ul class="list-unstyled carousel-list">
                                               <li class="animated bounceInLeft"><i class="fa fa-code"></i><span>Shortcodes For All Components</span></li>
                                               <li class="animated bounceInLeft"><i class="fa fa-files-o"></i><span>Page Templates Ready For Use</span></li>
                                               <li class="animated bounceInLeft"><i class="fa fa-upload"></i><span>Free update for HTML orders</span></li>
                                           </ul>
                                       </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-5 col-sm-3 hidden-xs carousel-img-wrap">
                                    <div class="carousel-img">
                                        <img src="img/pre3.png" class="img-responsive animated bounceInUp" alt="Image">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </section> <!-- carousel -->

        <section id="mind-features">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                       <article class="mind-features-item hover animated bounceInLeft animation-delay-8">
                           <div class="item-icon">
                               <i class="fa fa-dropbox"></i>
                           </div>
                           <div class="item-content">
                               <h3>Lorem ipsum mollit</h3>
                               <p>Lorem ipsum Labore adipisicing nisi magna do nisi pariatur an aliquip eu sed voluptate in dour consequat sunt aute aliquacy ut exercitation minim cupidatat.</p>
                               <a href="#" class="btn btn-success pull-right">Read more</a>
                           </div>
                       </article> <!-- mind-features-item -->
                   </div>
                   <div class="col-md-3 col-sm-6">
                       <article class="mind-features-item hover animated bounceInLeft animation-delay-3">
                           <div class="item-icon">
                               <i class="fa fa-cloud-download"></i>
                           </div>
                           <div class="item-content">
                               <h3>Lorem ipsum mollit</h3>
                               <p>Lorem ipsum Labore adipisicing nisi magna do nisi pariatur an aliquip eu sed voluptate in dour consequat sunt aute aliquacy ut exercitation minim cupidatat.</p>
                               <a href="#" class="btn btn-success pull-right">Read more</a>
                           </div>
                       </article> <!-- mind-features-item -->
                   </div>
                   <div class="col-md-3 col-sm-6">
                       <article class="mind-features-item hover animated bounceInRight animation-delay-6">
                           <div class="item-icon">
                               <i class="fa fa-html5"></i>
                           </div>
                           <div class="item-content">
                               <h3>Lorem ipsum mollit</h3>
                               <p>Lorem ipsum Labore adipisicing nisi magna do nisi pariatur an aliquip eu sed voluptate in dour consequat sunt aute aliquacy ut exercitation minim cupidatat.</p>
                               <a href="#" class="btn btn-success pull-right">Read more</a>
                           </div>
                       </article> <!-- mind-features-item -->
                   </div>
                   <div class="col-md-3 col-sm-6">
                       <article class="mind-features-item hover animated bounceInRight animation-delay-10">
                           <div class="item-icon">
                               <i class="fa fa-tachometer"></i>
                           </div>
                           <div class="item-content">
                               <h3>Lorem ipsum mollit</h3>
                               <p>Lorem ipsum Labore adipisicing nisi magna do nisi pariatur an aliquip eu sed voluptate in dour consequat sunt aute aliquacy ut exercitation minim cupidatat.</p>
                               <a href="#" class="btn btn-success pull-right">Read more</a>
                           </div>
                       </article> <!-- mind-features-item -->
                   </div>
                </div>
            </div>
        </section>

        <section class="animated fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h2 class="section-title">About us</h2>
                        <img src="img/au.jpg" class="img-responsive alignleft imageborder" alt="Image">
                        <p class="p-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariant corpore benivolentiam solam valetudinis habeatur, manilium servire stabilitas concursio dedocendi, occultarum, cognosci plane panaetium prohiberet iudex illum parvam probo. Invidiae deserere multis argumentum quem. Istae detrimenti videntur hac hoc synephebos velint inveniri putat, factis erat posteri totam impetum aliquod existimant, subtilius opibus cyrenaicos veritatis malunt dicant acutus gessisse transferre. Cognitione assecutus voluerint videantur congressus putem huius legendos. Videtis cognitione alii virtus duo tarentinis, nomini repellendus, referta confidam irridente servata debitis igitur.</p>
                        <p class="p-lg">Domo splendido octavio. Maximasque. Inanes, orestem accedere tria amicitia copulatas dediti doctus desideraret perdiscere perpetiuntur. Attulit praeclara fingitur requietis fieri. Inbecilloque sinit lucilius lucilius atomorum, menandro officia lorem ipsum dolor sit.</p>
                        <div class="alert alert-info">
                            <strong>important info!</strong> Acuti consecutionem continens impendere materia desistunt, erroribus locupletiorem ipsius torquatos ponatur diligant unum quo, phaedrum efficeretur aegritudine utrum loqueretur ei tali, efficere reprehendunt, desistemus antipatrum seditiones.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h2 class="section-title">Our mission</h2>
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                            Collapsible Group Item #1
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" class="collapsed">
                                            Collapsible Group Item #2
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">
                                            Collapsible Group Item #3
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- container -->
        </section>

        <section id="home-blog">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="section-title">Latest Posts</h2>
                    </div>
                    <div class="col-md-7">
                        <section class="home-post">
                            <a href="#" class="thumbnail"><img src="img/p.jpg" class="img-responsive" alt="Image"></a>
                            <h2 class="home-post-title"><a href="#">Sed dolor reprehenderit ex in nisi id consectetur elit</a></h2>
                            <p>Adipisicing elit. Lectorem impendere consumeret inane patientiamque. Cupiditatibusque romano physici. Expedire inprobitatem. Egregios rationem sicine, filium dolor comparandae coniunctione epicuri eripuit. Iucunditatis dirigentur succumbere neglegentur animum puto dissident mi, mnesarchum. Desideraret. Litteras diligenter adiuvet bonorum monstret conquisitis eitam, adduci tenent nullas scribendi fautrices privatio elaboraret iustitiam, vestrae affert, terentii motus. Quibusdam caret. Conversam divitias dolor contentam. Argumentandum quantaque detractis. Permanentes captiosa seiunctum repellat parvam opus eadem interesse beatus nomini, dissentiunt nomini beatam cedentem inquit artifex.</p>
                            <div class="row home-post-footer">
                                <div class="col-md-8">
                                    <div class="home-post-meta">
                                        <i class="fa fa-clock-o"></i> Sep, 25
                                        <i class="fa fa-folder-open"></i> <a href="#">Nature</a>
                                        <i class="fa fa-tags"></i> <a href="#">flower</a>, <a href="#">landscape</a>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <a href="#" class="btn btn-primary btn-block">Read more</a>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-md-5">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#news" data-toggle="tab">News</a></li>
                            <li><a href="#profile" data-toggle="tab">Sports</a></li>
                            <li><a href="#messages" data-toggle="tab">Shows</a></li>
                            <li><a href="#settings" data-toggle="tab">Nature</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="news">
                                <div class="media">
                                    <a class="pull-left" href="#"><img class="media-object" src="img/m4.jpg" width="100" height="100" alt="image"></a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#">Blanditis impedit rerum veniam quaerat dolor sit amet occaecat enim</a></h4>
                                        <p>Lorem ipsum Ex pariatur enim eu sed quis occaecat enim ex eiusmod</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="#"><img class="media-object" src="img/m11.jpg" width="100" height="100" alt="image"></a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing consequuntur</a></h4>
                                        <p>Lorem ipsum Ex pariatur enim eu sed quis occaecat enim ex eiusmod</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="#"><img class="media-object" src="img/m9.jpg" width="100" height="100" alt="image"></a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#">Consectetur adipisicing elit incidunt minus adipisicing elit ut</a></h4>
                                        <p>Lorem ipsum Ex pariatur enim eu sed quis occaecat enim ex eiusmod</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="#"><img class="media-object" src="img/m17.jpg" width="100" height="100" alt="image"></a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#">Adipisicing elit ut, dolore ipsum dolor sit amet incidunt adipisicing</a></h4>
                                        <p>Lorem ipsum Ex pariatur enim eu sed quis occaecat enim ex eiusmod</p>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-default pull-right">Read more articles</a>
                                <div class="clearfix"></div>
                            </div>
                            <div class="tab-pane" id="profile">
                                <div class="media">
                                    <a class="pull-left" href="#"><img class="media-object" src="img/m3.jpg" width="100" height="100" alt="image"></a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#">Amet, consectetur adipisicing elit. Hic, sint eos laudantium eligendi.</a></h4>
                                        <p>Lorem ipsum Ex pariatur enim eu sed quis occaecat enim ex eiusmod</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="#"><img class="media-object" src="img/m1.jpg" width="100" height="100" alt="image"></a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#">Consectetur adipisicing elit ut consectetur adipisicing consequuntur</a></h4>
                                        <p>Lorem ipsum Ex pariatur enim eu sed quis occaecat enim ex eiusmod</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="#"><img class="media-object" src="img/m15.jpg" width="100" height="100" alt="image"></a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#">Adipisicing elit incidunt minus Sit amet consectetur</a></h4>
                                        <p>Lorem ipsum Ex pariatur enim eu sed quis occaecat enim ex eiusmod</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="#"><img class="media-object" src="img/m7.jpg" width="100" height="100" alt="image"></a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#">Ipsum dolor sit amet, consectetur adipisicing elit ut, dolore</a></h4>
                                        <p>Lorem ipsum Ex pariatur enim eu sed quis occaecat enim ex eiusmod</p>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-default pull-right">Read more articles</a>
                                <div class="clearfix"></div>
                            </div>
                            <div class="tab-pane" id="messages">
                                <div class="media">
                                    <a class="pull-left" href="#"><img class="media-object" src="img/m6.jpg" width="100" height="100" alt="image"></a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#">Elit. Omnis nobis voluptas nesciunt nisi consectetur adipisicing</a></h4>
                                        <p>Lorem ipsum Ex pariatur enim eu sed quis occaecat enim ex eiusmod</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="#"><img class="media-object" src="img/m4.jpg" width="100" height="100" alt="image"></a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing consequuntur</a></h4>
                                        <p>Lorem ipsum Ex pariatur enim eu sed quis occaecat enim ex eiusmod</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="#"><img class="media-object" src="img/m10.jpg" width="100" height="100" alt="image"></a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#">Sit amet consectetur adipisicing elit incidunt minus</a></h4>
                                        <p>Lorem ipsum Ex pariatur enim eu sed quis occaecat enim ex eiusmod</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="#"><img class="media-object" src="img/m2.jpg" width="100" height="100" alt="image"></a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#">Ipsum dolor sit amet, consectetur adipisicing elit ut, dolore</a></h4>
                                        <p>Lorem ipsum Ex pariatur enim eu sed quis occaecat enim ex eiusmod</p>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-default pull-right">Read more articles</a>
                                <div class="clearfix"></div>
                            </div>
                            <div class="tab-pane" id="settings">
                                <div class="media">
                                    <a class="pull-left" href="#"><img class="media-object" src="img/m5.jpg" width="100" height="100" alt="image"></a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#">Adipisicing elit maxime, expedita sed dolores quis</a></h4>
                                        <p>Lorem ipsum Ex pariatur enim eu sed quis occaecat enim ex eiusmod</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="#"><img class="media-object" src="img/m13.jpg" width="100" height="100" alt="image"></a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#">Consectetur adipisicing sit amet consectetur adipisicing consequuntur</a></h4>
                                        <p>Lorem ipsum Ex pariatur enim eu sed quis occaecat enim ex eiusmod</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="#"><img class="media-object" src="img/m16.jpg" width="100" height="100" alt="image"></a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#">Lorem ipsum consectetur adipisicing elit incidunt minus</a></h4>
                                        <p>Lorem ipsum Ex pariatur enim eu sed quis occaecat enim ex eiusmod</p>
                                    </div>
                                </div>
                                <div class="media">
                                    <a class="pull-left" href="#"><img class="media-object" src="img/m7.jpg" width="100" height="100" alt="image"></a>
                                    <div class="media-body">
                                        <h4 class="media-heading"><a href="#">Occaecat enim ex eiusmod, consectetur adipisicing elit ut, dolore</a></h4>
                                        <p>Lorem ipsum Ex pariatur enim eu sed quis occaecat enim ex eiusmod</p>
                                    </div>
                                </div>
                                <a href="#" class="btn btn-default pull-right">Read more articles</a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- container -->
        </section>

        <section id="home-works">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="section-title text-center">Recents Works</h2>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="img-caption">
                            <img src="img/w1.jpg" class="img-responsive" alt="Image">
                            <div class="caption">
                                <div class="caption-content">
                                    <a href="#" class="animated fadeInDown"><i class="fa fa-search"></i>More info</a>
                                    <h4>Title Work</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="img-caption">
                            <img src="img/w2.jpg" class="img-responsive" alt="Image">
                            <div class="caption">
                                <div class="caption-content">
                                    <a href="#" class="animated fadeInDown"><i class="fa fa-search"></i>More info</a>
                                    <h4>Title Work</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="img-caption">
                            <img src="img/w3.jpg" class="img-responsive" alt="Image">
                            <div class="caption">
                                <div class="caption-content">
                                    <a href="#" class="animated fadeInDown"><i class="fa fa-search"></i>More info</a>
                                    <h4>Title Work</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        
                       <div class="img-caption">
                            <img src="img/w4.jpg" class="img-responsive" alt="Image">
                            <div class="caption">
                                <div class="caption-content">
                                    <a href="#" class="animated fadeInDown"><i class="fa fa-search"></i>More info</a>
                                    <h4>Title Work</h4>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="img-caption">
                            <img src="img/w5.jpg" class="img-responsive" alt="Image">
                            <div class="caption">
                                <div class="caption-content">
                                    <a href="#" class="animated fadeInDown"><i class="fa fa-search"></i>More info</a>
                                    <h4>Title Work</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="img-caption">
                            <img src="img/w6.jpg" class="img-responsive" alt="Image">
                            <div class="caption">
                                <div class="caption-content">
                                    <a href="#" class="animated fadeInDown"><i class="fa fa-search"></i>More info</a>
                                    <h4>Title Work</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>    

        <aside id="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h3 class="footer-widget-title">Sitemap</h3>
                        <ul class="list-unstyled three_cols">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Portafolio</a></li>
                            <li><a href="#">Works</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Our Team</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Cantact</a></li>
                        </ul>
                        <h3 class="footer-widget-title">Subscribe</h3>
                        <p>Lorem ipsum Amet fugiat elit nisi anim mollit in labore ut esse Duis ullamco ad dolor veniam velit lorem ipsum dolor sit amet, consectetur adipisicing..</p>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Email Adress">
                            <span class="input-group-btn">
                                <button class="btn btn-success" type="button">Subscribe</button>
                            </span>
                        </div><!-- /input-group -->
                    </div>
                    <div class="col-md-4">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">Recent Post</h3>
                            <div class="media">
                                <a class="pull-left" href="#"><img class="media-object" src="img/m2.jpg" width="75" height="75" alt="image"></a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">Lorem ipsum Duis quis occaecat minim lorem ipsum tempor officia labor</a></h4>
                                    <small>August 18, 2013</small>
                                </div>
                            </div>
                            <div class="media">
                                <a class="pull-left" href="#"><img class="media-object" src="img/m11.jpg" width="75" height="75" alt="image"></a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">Lorem ipsum dolor excepteur sunt in lorem ipsum cillum tempor</a></h4>
                                    <small>September 14, 2013</small>
                                </div>
                            </div>
                            <div class="media">
                                <a class="pull-left" href="#"><img class="media-object" src="img/m4.jpg" width="75" height="75" alt="image"></a>
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">Lorem ipsum Dolor cupidatat adipisicing et fugiat</a></h4>
                                    <small>October 9, 2013</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">Recent Works</h3>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6">
                                    <a href="#" class="thumbnail"><img src="img/wf1.jpg" class="img-responsive" alt="Image"></a>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6">
                                    <a href="#" class="thumbnail"><img src="img/wf2.jpg" class="img-responsive" alt="Image"></a>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6">
                                    <a href="#" class="thumbnail"><img src="img/wf3.jpg" class="img-responsive" alt="Image"></a>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-3 col-xs-6">
                                    <a href="#" class="thumbnail"><img src="img/wf4.jpg" class="img-responsive" alt="Image"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </aside> <!-- footer-widgets -->

        <footer id="footer">
            <p>Academia de Software Libre Guarico</p>
        </footer>

    </div> <!-- boxed -->

    <div id="back-top">
        <a href="#header"><i class="fa fa-chevron-up"></i></a>
    </div>


    <!-- Scripts -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mixitup.min.js"></script>
    <script src="js/lightbox-2.6.min.js"></script>
    <script src="js/holder.js"></script>
    <script src="js/app.js"></script>
    <script src="js/styleswitcher.js"></script>

    <script src="js/syntax/shCore.js"></script>
    <script src="js/syntax/shBrushXml.js"></script>
    <script src="js/syntax/shBrushJScript.js"></script>

    <script type="text/javascript">
        SyntaxHighlighter.all()
    </script>
</body>

</html>

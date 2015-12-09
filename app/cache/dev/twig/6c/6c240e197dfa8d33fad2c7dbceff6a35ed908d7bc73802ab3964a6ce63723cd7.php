<?php

/* ::layout.html.twig */
class __TwigTemplate_ebab531e67ff2dda4d8eb4821c834d820313e796238751f017b27fece359c196 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'dciss_body' => array($this, 'block_dciss_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5264a5bf7143db615e676b0a932989512cef5bd4a7ebdb9fa5af58d1bb83967b = $this->env->getExtension("native_profiler");
        $__internal_5264a5bf7143db615e676b0a932989512cef5bd4a7ebdb9fa5af58d1bb83967b->enter($__internal_5264a5bf7143db615e676b0a932989512cef5bd4a7ebdb9fa5af58d1bb83967b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <title>First App With Symfony II</title>

    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dcissmyappblog/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
   
    <!-- Custom CSS -->
\t<link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dcissmyappblog/css/clean-blog.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t 
\t 
    <!-- Custom Fonts -->
    <link href=\"http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
    <style type=\"text/css\">
    .fork-me {
  z-index: 2;
  width: 12% !important;
  position: absolute;
  top: 0;
  right: 0;
}
.fork-me img {
  width: 100%;
}
    </style>

</head>

<body>
<a class=\"fork-me\" href=\"https://github.com/nfouka\">
                <img src=\"http://htmlcsstherightway.org/assets/forkme-banner.png\" alt=\"GitHub!\">
</a>
    <!-- Navigation -->
    <nav class=\"navbar navbar-default navbar-custom navbar-fixed-top\">
        <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header page-scroll\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\">";
        // line 62
        echo $this->env->getExtension('translator')->getTranslator()->trans("project", array(), "messages");
        echo "</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-left\">
                    <li>
                        <a href=\"index.html\">Home</a>
                    </li>
                    <li>
                        <a href=\"about.html\">About Me</a>
                    </li>
                    <li>
                        <a href=\"post.html\">Sample Post</a>
                    </li>
                    <li>
                        <a href=\"contact.html\">Contact</a>
                    </li>
                   
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
   
    <header class=\"intro-header\" style=\"background-image: url(";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dcissmyappblog/img/home-bg.jpg"), "html", null, true);
        echo ")\">
    
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                    <div class=\"site-heading\">
                        <h1 style=\"color:#F07E22;\">";
        // line 97
        echo $this->env->getExtension('translator')->getTranslator()->trans("project", array(), "messages");
        echo "</h1>
                        <hr class=\"small\">
                        <span class=\"subheading\">By Nadir.Fouka@dciss.org</span>
                       
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class=\"container\">
    
     <div id=\"content\" class=\"span9\">
             ";
        // line 111
        $this->displayBlock('dciss_body', $context, $blocks);
        // line 113
        echo "     </div>
    
    
";
        // line 171
        echo "    </div>

    <hr>

    <!-- Footer -->
    <footer>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1\">
                    <ul class=\"list-inline text-center\">
                        <li>
                            <a href=\"#\">
                                <span class=\"fa-stack fa-lg\">
                                    <i class=\"fa fa-circle fa-stack-2x\"></i>
                                    <i class=\"fa fa-twitter fa-stack-1x fa-inverse\"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\">
                                <span class=\"fa-stack fa-lg\">
                                    <i class=\"fa fa-circle fa-stack-2x\"></i>
                                    <i class=\"fa fa-facebook fa-stack-1x fa-inverse\"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href=\"https://github.com/nfouka\">
                                <span class=\"fa-stack fa-lg\">
                                    <i class=\"fa fa-circle fa-stack-2x\"></i>
                                    <i class=\"fa fa-github fa-stack-1x fa-inverse\"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p class=\"copyright text-muted\">Copyright &copy; Your Website 2016 Site Designed by nadir.fouka@dciss.org Grenoble University</p>
                </div>
            </div>
        </div>
    </footer>

 
 <script type=\"text/javascript\" src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dcissmyappblog/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
 <script type=\"text/javascript\" src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dcissmyappblog/js/clean-blog.min.js"), "html", null, true);
        echo "\"></script>
 <script type=\"text/javascript\" src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/dcissmyappblog/js/jquery.js"), "html", null, true);
        echo "\"></script>
 
</body>

</html>




";
        // line 228
        echo "
";
        // line 230
        echo "
";
        // line 235
        echo "
";
        // line 237
        echo "
";
        // line 243
        echo "
";
        // line 252
        echo "
";
        // line 262
        echo "
";
        // line 270
        echo "
";
        // line 272
        echo "
";
        // line 277
        echo "
";
        // line 279
        echo "#}
";
        // line 283
        echo "
";
        // line 286
        echo "


";
        
        $__internal_5264a5bf7143db615e676b0a932989512cef5bd4a7ebdb9fa5af58d1bb83967b->leave($__internal_5264a5bf7143db615e676b0a932989512cef5bd4a7ebdb9fa5af58d1bb83967b_prof);

    }

    // line 111
    public function block_dciss_body($context, array $blocks = array())
    {
        $__internal_f6426864fc57be0b315bd2b692b99d1195f061867953ccf03bb13a24a24d83dc = $this->env->getExtension("native_profiler");
        $__internal_f6426864fc57be0b315bd2b692b99d1195f061867953ccf03bb13a24a24d83dc->enter($__internal_f6426864fc57be0b315bd2b692b99d1195f061867953ccf03bb13a24a24d83dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dciss_body"));

        // line 112
        echo "             ";
        
        $__internal_f6426864fc57be0b315bd2b692b99d1195f061867953ccf03bb13a24a24d83dc->leave($__internal_f6426864fc57be0b315bd2b692b99d1195f061867953ccf03bb13a24a24d83dc_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 112,  267 => 111,  257 => 286,  254 => 283,  251 => 279,  248 => 277,  245 => 272,  242 => 270,  239 => 262,  236 => 252,  233 => 243,  230 => 237,  227 => 235,  224 => 230,  221 => 228,  209 => 215,  205 => 214,  201 => 213,  157 => 171,  152 => 113,  150 => 111,  133 => 97,  124 => 91,  92 => 62,  45 => 18,  39 => 15,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* */
/* <head>*/
/* */
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/* */
/*     <title>First App With Symfony II</title>*/
/* */
/*     <!-- Bootstrap Core CSS -->*/
/*     <link href="{{ asset('bundles/dcissmyappblog/css/bootstrap.min.css') }}" rel="stylesheet">*/
/*    */
/*     <!-- Custom CSS -->*/
/* 	<link href="{{ asset('bundles/dcissmyappblog/css/clean-blog.min.css') }}" rel="stylesheet">*/
/* 	 */
/* 	 */
/*     <!-- Custom Fonts -->*/
/*     <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">*/
/*     <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>*/
/*     <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>*/
/* */
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/*     <style type="text/css">*/
/*     .fork-me {*/
/*   z-index: 2;*/
/*   width: 12% !important;*/
/*   position: absolute;*/
/*   top: 0;*/
/*   right: 0;*/
/* }*/
/* .fork-me img {*/
/*   width: 100%;*/
/* }*/
/*     </style>*/
/* */
/* </head>*/
/* */
/* <body>*/
/* <a class="fork-me" href="https://github.com/nfouka">*/
/*                 <img src="http://htmlcsstherightway.org/assets/forkme-banner.png" alt="GitHub!">*/
/* </a>*/
/*     <!-- Navigation -->*/
/*     <nav class="navbar navbar-default navbar-custom navbar-fixed-top">*/
/*         <div class="container-fluid">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header page-scroll">*/
/*                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                     <span class="sr-only">Toggle navigation</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="index.html">{% trans %}project{% endtrans %}</a>*/
/*             </div>*/
/* */
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                 <ul class="nav navbar-nav navbar-left">*/
/*                     <li>*/
/*                         <a href="index.html">Home</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="about.html">About Me</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="post.html">Sample Post</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="contact.html">Contact</a>*/
/*                     </li>*/
/*                    */
/*                 </ul>*/
/*             </div>*/
/*             <!-- /.navbar-collapse -->*/
/*         </div>*/
/*         <!-- /.container -->*/
/*     </nav>*/
/* */
/*     <!-- Page Header -->*/
/*     <!-- Set your background image for this header on the line below. -->*/
/*    */
/*     <header class="intro-header" style="background-image: url({{ asset('bundles/dcissmyappblog/img/home-bg.jpg') }})">*/
/*     */
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*                     <div class="site-heading">*/
/*                         <h1 style="color:#F07E22;">{% trans %}project{% endtrans %}</h1>*/
/*                         <hr class="small">*/
/*                         <span class="subheading">By Nadir.Fouka@dciss.org</span>*/
/*                        */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </header>*/
/* */
/*     <!-- Main Content -->*/
/*     <div class="container">*/
/*     */
/*      <div id="content" class="span9">*/
/*              {% block dciss_body %}*/
/*              {% endblock %}*/
/*      </div>*/
/*     */
/*     */
/* {#         <div class="row">#}*/
/* {#             <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">#}*/
/* {#                 <div class="post-preview">#}*/
/* {#                     <a href="post.html">#}*/
/* {#                         <h2 class="post-title">#}*/
/* {#                             Man must explore, and this is exploration at its greatest#}*/
/* {#                         </h2>#}*/
/* {#                         <h3 class="post-subtitle">#}*/
/* {#                             Problems look mighty small from 150 miles up#}*/
/* {#                         </h3>#}*/
/* {#                     </a>#}*/
/* {#                     <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 24, 2014</p>#}*/
/* {#                 </div>#}*/
/* {#                 <hr>#}*/
/* {#                 <div class="post-preview">#}*/
/* {#                     <a href="post.html">#}*/
/* {#                         <h2 class="post-title">#}*/
/* {#                             I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.#}*/
/* {#                         </h2>#}*/
/* {#                     </a>#}*/
/* {#                     <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 18, 2014</p>#}*/
/* {#                 </div>#}*/
/* {#                 <hr>#}*/
/* {#                 <div class="post-preview">#}*/
/* {#                     <a href="post.html">#}*/
/* {#                         <h2 class="post-title">#}*/
/* {#                             Science has not yet mastered prophecy#}*/
/* {#                         </h2>#}*/
/* {#                         <h3 class="post-subtitle">#}*/
/* {#                             We predict too much for the next year and yet far too little for the next ten.#}*/
/* {#                         </h3>#}*/
/* {#                     </a>#}*/
/* {#                     <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on August 24, 2014</p>#}*/
/* {#                 </div>#}*/
/* {#                 <hr>#}*/
/* {#                 <div class="post-preview">#}*/
/* {#                     <a href="post.html">#}*/
/* {#                         <h2 class="post-title">#}*/
/* {#                             Failure is not an option#}*/
/* {#                         </h2>#}*/
/* {#                         <h3 class="post-subtitle">#}*/
/* {#                             Many say exploration is part of our destiny, but it’s actually our duty to future generations.#}*/
/* {#                         </h3>#}*/
/* {#                     </a>#}*/
/* {#                     <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on July 8, 2014</p>#}*/
/* {#                 </div>#}*/
/* {#                 <hr>#}*/
/* {#                 <!-- Pager -->#}*/
/* {#                 <ul class="pager">#}*/
/* {#                     <li class="next">#}*/
/* {#                         <a href="#">Older Posts &rarr;</a>#}*/
/* {#                     </li>#}*/
/* {#                 </ul>#}*/
/* {#             </div>#}*/
/* {#         </div>#}*/
/*     </div>*/
/* */
/*     <hr>*/
/* */
/*     <!-- Footer -->*/
/*     <footer>*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">*/
/*                     <ul class="list-inline text-center">*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <span class="fa-stack fa-lg">*/
/*                                     <i class="fa fa-circle fa-stack-2x"></i>*/
/*                                     <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>*/
/*                                 </span>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="#">*/
/*                                 <span class="fa-stack fa-lg">*/
/*                                     <i class="fa fa-circle fa-stack-2x"></i>*/
/*                                     <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>*/
/*                                 </span>*/
/*                             </a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="https://github.com/nfouka">*/
/*                                 <span class="fa-stack fa-lg">*/
/*                                     <i class="fa fa-circle fa-stack-2x"></i>*/
/*                                     <i class="fa fa-github fa-stack-1x fa-inverse"></i>*/
/*                                 </span>*/
/*                             </a>*/
/*                         </li>*/
/*                     </ul>*/
/*                     <p class="copyright text-muted">Copyright &copy; Your Website 2016 Site Designed by nadir.fouka@dciss.org Grenoble University</p>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </footer>*/
/* */
/*  */
/*  <script type="text/javascript" src="{{ asset('bundles/dcissmyappblog/js/bootstrap.min.js') }}"></script>*/
/*  <script type="text/javascript" src="{{ asset('bundles/dcissmyappblog/js/clean-blog.min.js') }}"></script>*/
/*  <script type="text/javascript" src="{{ asset('bundles/dcissmyappblog/js/jquery.js') }}"></script>*/
/*  */
/* </body>*/
/* */
/* </html>*/
/* */
/* */
/* */
/* */
/* {# <!DOCTYPE html>#}*/
/* {# <html>#}*/
/* {# <head>#}*/
/* {#     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />#}*/
/* */
/* {#     <title>{% block title %}Sdz{% endblock %}</title>#}*/
/* */
/* {#     {% block stylesheets %}#}*/
/* {#         <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" type="text/css" />#}*/
/* {#     {% endblock %}#}*/
/* {# </head>#}*/
/* */
/* {# <body>#}*/
/* */
/* {# {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}#}*/
/* {#     Connecté en tant que {{ app.user.username }} - <a href="{{ path('fos_user_security_logout') }}">Déconnexion</a>#}*/
/* {# {% else %}#}*/
/* {#     <a href="{{ path('fos_user_security_login') }}">Connexion</a>#}*/
/* {# {% endif %}#}*/
/* */
/* {# <div class="container">#}*/
/* {#     <div id="header" class="hero-unit">#}*/
/* {#         <h1>Mon Projet AVEC Symfony 2.8</h1>#}*/
/* {#         <p>Ce projet est propulsé par Symfony2, et construit grâce au tutoriel du siteduzero.</p>#}*/
/* {#         <p><a class="btn btn-primary btn-large" href="http://www.siteduzero.com/informatique/tutoriels/developpez-votre-site-web-avec-le-framework-symfony2">#}*/
/* {#                 Lire le tutoriel »#}*/
/* {#             </a></p>#}*/
/* {#     </div>#}*/
/* */
/* {#     <div class="row">#}*/
/* {#         <div id="menu" class="span3">#}*/
/* {#             <h3>Le blog</h3>#}*/
/* {#             <ul class="nav nav-pills nav-stacked">#}*/
/* {#                 <li><a href="{{ path('sdzblog_accueil') }}">Accueil du blog</a></li>#}*/
/* {#                 {% if is_granted('ROLE_AUTEUR') %}#}*/
/* {#                     <li><a href="{{ path('sdzblog_ajouter') }}">Ajouter un article</a></li>#}*/
/* {#                 {% endif %}#}*/
/* {#             </ul>#}*/
/* */
/* {#             {{ render(controller("SdzBlogBundle:Blog:menu", {'nombre': 3})) }}#}*/
/* {#         </div>#}*/
/* {#         <div id="content" class="span9">#}*/
/* {#             {% block body %}#}*/
/* {#             {% endblock %}#}*/
/* {#         </div>#}*/
/* {#     </div>#}*/
/* */
/* {#     <hr>#}*/
/* */
/* {#     <footer>#}*/
/* {#         <p>Bootstrap Theme , © 2016 Designed By Nadir Fouka </p>#}*/
/* {#     </footer>#}*/
/* {# </div>#}*/
/* */
/* {# {% block javascripts %}#}*/
/* {#     {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}#}*/
/* {#     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>#}*/
/* {#     <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>#}*/
/* {# {% endblock %}#}*/
/* */
/* {# </body>#}*/
/* {# </html>#}*/
/* */
/* */
/* */
/* */

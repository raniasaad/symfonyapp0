<?php

/* OCCoreBundle::layout.html.twig */
class __TwigTemplate_6563dca1df188d8f2e9f8e7a937f6397aa8c511ebc6813d40b1262e4ac751a3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10d69cc97f741a04f7aa674915960f1c7d32a4873ee55b8e00849348bf947a5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_10d69cc97f741a04f7aa674915960f1c7d32a4873ee55b8e00849348bf947a5f->enter($__internal_10d69cc97f741a04f7aa674915960f1c7d32a4873ee55b8e00849348bf947a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle::layout.html.twig"));

        $__internal_fd5ba05d90f91e1993b4d537fae1d4738d41424dae17704be8549a684155f053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd5ba05d90f91e1993b4d537fae1d4738d41424dae17704be8549a684155f053->enter($__internal_fd5ba05d90f91e1993b4d537fae1d4738d41424dae17704be8549a684155f053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle::layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "  </head>

  <body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Ma plateforme d'annonces</h1>
      <p>
        Ce projet est propulsé par Symfony, et construit grâce au MOOC OpenClassrooms et SensioLabs.
      </p>
      <p>
        <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">
          Participer au MOOC »
        </a>
      </p>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\">Accueil</a></li>
          <li><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_add");
        echo "\">Ajouter une annonce</a></li>
        </ul>

        <h4>Dernières annonces</h4>
        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("OCPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © ";
        // line 51
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
  </div>

  ";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "
  </body>
</html>
";
        
        $__internal_10d69cc97f741a04f7aa674915960f1c7d32a4873ee55b8e00849348bf947a5f->leave($__internal_10d69cc97f741a04f7aa674915960f1c7d32a4873ee55b8e00849348bf947a5f_prof);

        
        $__internal_fd5ba05d90f91e1993b4d537fae1d4738d41424dae17704be8549a684155f053->leave($__internal_fd5ba05d90f91e1993b4d537fae1d4738d41424dae17704be8549a684155f053_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_30b2c8463bcc9d48299b931013aff2af43d8ebc0ea2ef645566c1d869ad5146c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30b2c8463bcc9d48299b931013aff2af43d8ebc0ea2ef645566c1d869ad5146c->enter($__internal_30b2c8463bcc9d48299b931013aff2af43d8ebc0ea2ef645566c1d869ad5146c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_77cda177596ac85baae2551e242401fba7e5b16dfa4811f4b5458920bf6a226d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77cda177596ac85baae2551e242401fba7e5b16dfa4811f4b5458920bf6a226d->enter($__internal_77cda177596ac85baae2551e242401fba7e5b16dfa4811f4b5458920bf6a226d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_77cda177596ac85baae2551e242401fba7e5b16dfa4811f4b5458920bf6a226d->leave($__internal_77cda177596ac85baae2551e242401fba7e5b16dfa4811f4b5458920bf6a226d_prof);

        
        $__internal_30b2c8463bcc9d48299b931013aff2af43d8ebc0ea2ef645566c1d869ad5146c->leave($__internal_30b2c8463bcc9d48299b931013aff2af43d8ebc0ea2ef645566c1d869ad5146c_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_23942abed0c4cfc21cb912b92e1dcce98a33576ea9372c12bdc2df5ccfdde11b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23942abed0c4cfc21cb912b92e1dcce98a33576ea9372c12bdc2df5ccfdde11b->enter($__internal_23942abed0c4cfc21cb912b92e1dcce98a33576ea9372c12bdc2df5ccfdde11b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_fc8f5cd5be3b3733e3908ba0227bd047c7293becf98a171b4a7e215c5c14717e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc8f5cd5be3b3733e3908ba0227bd047c7293becf98a171b4a7e215c5c14717e->enter($__internal_fc8f5cd5be3b3733e3908ba0227bd047c7293becf98a171b4a7e215c5c14717e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "      ";
        // line 13
        echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_fc8f5cd5be3b3733e3908ba0227bd047c7293becf98a171b4a7e215c5c14717e->leave($__internal_fc8f5cd5be3b3733e3908ba0227bd047c7293becf98a171b4a7e215c5c14717e_prof);

        
        $__internal_23942abed0c4cfc21cb912b92e1dcce98a33576ea9372c12bdc2df5ccfdde11b->leave($__internal_23942abed0c4cfc21cb912b92e1dcce98a33576ea9372c12bdc2df5ccfdde11b_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_241d9e0c2828f3d3369a882b965b20063161fb8580c9264ee05bf6f0cb59ebfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_241d9e0c2828f3d3369a882b965b20063161fb8580c9264ee05bf6f0cb59ebfd->enter($__internal_241d9e0c2828f3d3369a882b965b20063161fb8580c9264ee05bf6f0cb59ebfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a4de72a5c1870a997c889990ae476b6d75e7e0f8bd3a086270a2e265ac9b96c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4de72a5c1870a997c889990ae476b6d75e7e0f8bd3a086270a2e265ac9b96c2->enter($__internal_a4de72a5c1870a997c889990ae476b6d75e7e0f8bd3a086270a2e265ac9b96c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "        ";
        
        $__internal_a4de72a5c1870a997c889990ae476b6d75e7e0f8bd3a086270a2e265ac9b96c2->leave($__internal_a4de72a5c1870a997c889990ae476b6d75e7e0f8bd3a086270a2e265ac9b96c2_prof);

        
        $__internal_241d9e0c2828f3d3369a882b965b20063161fb8580c9264ee05bf6f0cb59ebfd->leave($__internal_241d9e0c2828f3d3369a882b965b20063161fb8580c9264ee05bf6f0cb59ebfd_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e0f59f2f5f3d5d5d1883b450a9ca3547121e840a523545501207513c1f272a7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0f59f2f5f3d5d5d1883b450a9ca3547121e840a523545501207513c1f272a7b->enter($__internal_e0f59f2f5f3d5d5d1883b450a9ca3547121e840a523545501207513c1f272a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_9575f23a3a3f4641b29988079b6bb9d695edb34561673d328cd428f09d67abd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9575f23a3a3f4641b29988079b6bb9d695edb34561673d328cd428f09d67abd3->enter($__internal_9575f23a3a3f4641b29988079b6bb9d695edb34561673d328cd428f09d67abd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "    ";
        // line 57
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_9575f23a3a3f4641b29988079b6bb9d695edb34561673d328cd428f09d67abd3->leave($__internal_9575f23a3a3f4641b29988079b6bb9d695edb34561673d328cd428f09d67abd3_prof);

        
        $__internal_e0f59f2f5f3d5d5d1883b450a9ca3547121e840a523545501207513c1f272a7b->leave($__internal_e0f59f2f5f3d5d5d1883b450a9ca3547121e840a523545501207513c1f272a7b_prof);

    }

    public function getTemplateName()
    {
        return "OCCoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 57,  184 => 56,  175 => 55,  165 => 44,  156 => 43,  145 => 13,  143 => 12,  134 => 11,  116 => 9,  103 => 60,  101 => 55,  94 => 51,  86 => 45,  84 => 43,  78 => 40,  71 => 36,  67 => 35,  45 => 15,  43 => 11,  38 => 9,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/CoreBundle/Resources/views/layout.html.twig #}

<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>{% block title %}OC Plateforme{% endblock %}</title>

    {% block stylesheets %}
      {# On charge le CSS de bootstrap depuis le site directement #}
      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    {% endblock %}
  </head>

  <body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Ma plateforme d'annonces</h1>
      <p>
        Ce projet est propulsé par Symfony, et construit grâce au MOOC OpenClassrooms et SensioLabs.
      </p>
      <p>
        <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">
          Participer au MOOC »
        </a>
      </p>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"{{ path('oc_platform_home') }}\">Accueil</a></li>
          <li><a href=\"{{ path('oc_platform_add') }}\">Ajouter une annonce</a></li>
        </ul>

        <h4>Dernières annonces</h4>
        {{ render(controller(\"OCPlatformBundle:Advert:menu\", {'limit': 3})) }}
      </div>
      <div id=\"content\" class=\"col-md-9\">
        {% block body %}
        {% endblock %}
      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>
    </footer>
  </div>

  {% block javascripts %}
    {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  {% endblock %}

  </body>
</html>
", "OCCoreBundle::layout.html.twig", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/src/OC/CoreBundle/Resources/views/layout.html.twig");
    }
}

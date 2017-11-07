<?php

/* OCCoreBundle::layout.html.twig */
class __TwigTemplate_c36e586be69e6409ff8f9032101024bb56d2f26f57ce217ea612f8b8ada730ce extends Twig_Template
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
        $__internal_f76d143d861c5371ab9a4673b2f2025ced2edb10cca62a258ef8ff482aa42dff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f76d143d861c5371ab9a4673b2f2025ced2edb10cca62a258ef8ff482aa42dff->enter($__internal_f76d143d861c5371ab9a4673b2f2025ced2edb10cca62a258ef8ff482aa42dff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle::layout.html.twig"));

        $__internal_13d150fdb403b0804b25e8ae8ea72e79708515937f3ba5600243d90b9ad7b3b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13d150fdb403b0804b25e8ae8ea72e79708515937f3ba5600243d90b9ad7b3b4->enter($__internal_13d150fdb403b0804b25e8ae8ea72e79708515937f3ba5600243d90b9ad7b3b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle::layout.html.twig"));

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
        
        $__internal_f76d143d861c5371ab9a4673b2f2025ced2edb10cca62a258ef8ff482aa42dff->leave($__internal_f76d143d861c5371ab9a4673b2f2025ced2edb10cca62a258ef8ff482aa42dff_prof);

        
        $__internal_13d150fdb403b0804b25e8ae8ea72e79708515937f3ba5600243d90b9ad7b3b4->leave($__internal_13d150fdb403b0804b25e8ae8ea72e79708515937f3ba5600243d90b9ad7b3b4_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_33406da2d2d8ac95660d4abae6ca08d4b461b9830cf3eec531db81b00f6a2a86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33406da2d2d8ac95660d4abae6ca08d4b461b9830cf3eec531db81b00f6a2a86->enter($__internal_33406da2d2d8ac95660d4abae6ca08d4b461b9830cf3eec531db81b00f6a2a86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4c8d79a89610c2b0052089aeb68f3d92fdbafacaa596b169e9b25f5c506adcf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c8d79a89610c2b0052089aeb68f3d92fdbafacaa596b169e9b25f5c506adcf7->enter($__internal_4c8d79a89610c2b0052089aeb68f3d92fdbafacaa596b169e9b25f5c506adcf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_4c8d79a89610c2b0052089aeb68f3d92fdbafacaa596b169e9b25f5c506adcf7->leave($__internal_4c8d79a89610c2b0052089aeb68f3d92fdbafacaa596b169e9b25f5c506adcf7_prof);

        
        $__internal_33406da2d2d8ac95660d4abae6ca08d4b461b9830cf3eec531db81b00f6a2a86->leave($__internal_33406da2d2d8ac95660d4abae6ca08d4b461b9830cf3eec531db81b00f6a2a86_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_51a0834ee1f9970aeb0e1e808b9e41cb20c87e7a1cddd29270d9a9aff1bcf051 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51a0834ee1f9970aeb0e1e808b9e41cb20c87e7a1cddd29270d9a9aff1bcf051->enter($__internal_51a0834ee1f9970aeb0e1e808b9e41cb20c87e7a1cddd29270d9a9aff1bcf051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_e6f2f0516a97fd71e496aab92ea6acb083fc56bf68d5d20f9b5cd012ce6010e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6f2f0516a97fd71e496aab92ea6acb083fc56bf68d5d20f9b5cd012ce6010e3->enter($__internal_e6f2f0516a97fd71e496aab92ea6acb083fc56bf68d5d20f9b5cd012ce6010e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "      ";
        // line 13
        echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_e6f2f0516a97fd71e496aab92ea6acb083fc56bf68d5d20f9b5cd012ce6010e3->leave($__internal_e6f2f0516a97fd71e496aab92ea6acb083fc56bf68d5d20f9b5cd012ce6010e3_prof);

        
        $__internal_51a0834ee1f9970aeb0e1e808b9e41cb20c87e7a1cddd29270d9a9aff1bcf051->leave($__internal_51a0834ee1f9970aeb0e1e808b9e41cb20c87e7a1cddd29270d9a9aff1bcf051_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_da9baac8735fe979eb0a6bddc06b4bbf0067c1af886af91fab43541e558a319f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da9baac8735fe979eb0a6bddc06b4bbf0067c1af886af91fab43541e558a319f->enter($__internal_da9baac8735fe979eb0a6bddc06b4bbf0067c1af886af91fab43541e558a319f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4a9487a2a0239f746c106800675f29faa29d6257e5137cb085b0176f703403eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a9487a2a0239f746c106800675f29faa29d6257e5137cb085b0176f703403eb->enter($__internal_4a9487a2a0239f746c106800675f29faa29d6257e5137cb085b0176f703403eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "        ";
        
        $__internal_4a9487a2a0239f746c106800675f29faa29d6257e5137cb085b0176f703403eb->leave($__internal_4a9487a2a0239f746c106800675f29faa29d6257e5137cb085b0176f703403eb_prof);

        
        $__internal_da9baac8735fe979eb0a6bddc06b4bbf0067c1af886af91fab43541e558a319f->leave($__internal_da9baac8735fe979eb0a6bddc06b4bbf0067c1af886af91fab43541e558a319f_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ddb1e94126175b3d12407a3bdd552316ea116a5ecb5d0e300c578a98e4523211 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddb1e94126175b3d12407a3bdd552316ea116a5ecb5d0e300c578a98e4523211->enter($__internal_ddb1e94126175b3d12407a3bdd552316ea116a5ecb5d0e300c578a98e4523211_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_07823c804053fdb7e5b3aa2cf8122f41741b11d4c14d8eb038db5b13406407d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07823c804053fdb7e5b3aa2cf8122f41741b11d4c14d8eb038db5b13406407d6->enter($__internal_07823c804053fdb7e5b3aa2cf8122f41741b11d4c14d8eb038db5b13406407d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "    ";
        // line 57
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_07823c804053fdb7e5b3aa2cf8122f41741b11d4c14d8eb038db5b13406407d6->leave($__internal_07823c804053fdb7e5b3aa2cf8122f41741b11d4c14d8eb038db5b13406407d6_prof);

        
        $__internal_ddb1e94126175b3d12407a3bdd552316ea116a5ecb5d0e300c578a98e4523211->leave($__internal_ddb1e94126175b3d12407a3bdd552316ea116a5ecb5d0e300c578a98e4523211_prof);

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

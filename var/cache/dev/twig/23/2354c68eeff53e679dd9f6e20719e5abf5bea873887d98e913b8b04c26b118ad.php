<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_7f39091cf16c1a680dd4fa7967faa73b4dd0a3945e39d3df9bec5a6fe6115397 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:add.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c4719babb4ef9ade98f60b85b50ab769880d9a620dfe38fc82b923bac2e02de5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4719babb4ef9ade98f60b85b50ab769880d9a620dfe38fc82b923bac2e02de5->enter($__internal_c4719babb4ef9ade98f60b85b50ab769880d9a620dfe38fc82b923bac2e02de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $__internal_fe6af35a1a8c614fe37fa02a8254c382f6fb01497eb6d025c4c97418854e7ea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe6af35a1a8c614fe37fa02a8254c382f6fb01497eb6d025c4c97418854e7ea9->enter($__internal_fe6af35a1a8c614fe37fa02a8254c382f6fb01497eb6d025c4c97418854e7ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4719babb4ef9ade98f60b85b50ab769880d9a620dfe38fc82b923bac2e02de5->leave($__internal_c4719babb4ef9ade98f60b85b50ab769880d9a620dfe38fc82b923bac2e02de5_prof);

        
        $__internal_fe6af35a1a8c614fe37fa02a8254c382f6fb01497eb6d025c4c97418854e7ea9->leave($__internal_fe6af35a1a8c614fe37fa02a8254c382f6fb01497eb6d025c4c97418854e7ea9_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3e9c1f7b252f43da96fbce8edc2fcf420565c1821a82bc18a5d73c6bdc23e67d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e9c1f7b252f43da96fbce8edc2fcf420565c1821a82bc18a5d73c6bdc23e67d->enter($__internal_3e9c1f7b252f43da96fbce8edc2fcf420565c1821a82bc18a5d73c6bdc23e67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_91a61b8ae2d228e80ee77d51be38a2677d000d805dd97df89627f42f5e16451c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91a61b8ae2d228e80ee77d51be38a2677d000d805dd97df89627f42f5e16451c->enter($__internal_91a61b8ae2d228e80ee77d51be38a2677d000d805dd97df89627f42f5e16451c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <h2>Ajouter une annonce</h2>

  ";
        // line 9
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>

";
        
        $__internal_91a61b8ae2d228e80ee77d51be38a2677d000d805dd97df89627f42f5e16451c->leave($__internal_91a61b8ae2d228e80ee77d51be38a2677d000d805dd97df89627f42f5e16451c_prof);

        
        $__internal_3e9c1f7b252f43da96fbce8edc2fcf420565c1821a82bc18a5d73c6bdc23e67d->leave($__internal_3e9c1f7b252f43da96fbce8edc2fcf420565c1821a82bc18a5d73c6bdc23e67d_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 9,  49 => 6,  40 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/add.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block body %}

  <h2>Ajouter une annonce</h2>

  {{ include(\"OCPlatformBundle:Advert:form.html.twig\") }}

  <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>

{% endblock %}
", "OCPlatformBundle:Advert:add.html.twig", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/src/OC/PlatformBundle/Resources/views/Advert/add.html.twig");
    }
}

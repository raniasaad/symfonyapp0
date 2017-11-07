<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_6bb31e474177f4f32fe54330ae9a9083dd82f4af58f0c299ee90a2930fe9f51e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "OCPlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a8bcf11071db1a6d7b4af940806d67d16622f4f9340dc2370f9f7e972e13ef80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8bcf11071db1a6d7b4af940806d67d16622f4f9340dc2370f9f7e972e13ef80->enter($__internal_a8bcf11071db1a6d7b4af940806d67d16622f4f9340dc2370f9f7e972e13ef80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $__internal_bd55cbe167c9e41b48f1fee2904ffb6470b8d98e9bb82835061b326a5b1c7d82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd55cbe167c9e41b48f1fee2904ffb6470b8d98e9bb82835061b326a5b1c7d82->enter($__internal_bd55cbe167c9e41b48f1fee2904ffb6470b8d98e9bb82835061b326a5b1c7d82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8bcf11071db1a6d7b4af940806d67d16622f4f9340dc2370f9f7e972e13ef80->leave($__internal_a8bcf11071db1a6d7b4af940806d67d16622f4f9340dc2370f9f7e972e13ef80_prof);

        
        $__internal_bd55cbe167c9e41b48f1fee2904ffb6470b8d98e9bb82835061b326a5b1c7d82->leave($__internal_bd55cbe167c9e41b48f1fee2904ffb6470b8d98e9bb82835061b326a5b1c7d82_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1641dee63559d52431b837ac7e97d4d814dbcc84f517842f426f62c29ae6d126 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1641dee63559d52431b837ac7e97d4d814dbcc84f517842f426f62c29ae6d126->enter($__internal_1641dee63559d52431b837ac7e97d4d814dbcc84f517842f426f62c29ae6d126_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7473deb9a28e34856f3b8883668d90890e21b35c1d84ea8bf845238fa088d27d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7473deb9a28e34856f3b8883668d90890e21b35c1d84ea8bf845238fa088d27d->enter($__internal_7473deb9a28e34856f3b8883668d90890e21b35c1d84ea8bf845238fa088d27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_7473deb9a28e34856f3b8883668d90890e21b35c1d84ea8bf845238fa088d27d->leave($__internal_7473deb9a28e34856f3b8883668d90890e21b35c1d84ea8bf845238fa088d27d_prof);

        
        $__internal_1641dee63559d52431b837ac7e97d4d814dbcc84f517842f426f62c29ae6d126->leave($__internal_1641dee63559d52431b837ac7e97d4d814dbcc84f517842f426f62c29ae6d126_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_a58fba723b0dd60d485e762edc80e10c3dfa01bf2fd9f22fb9006a5869b7ca61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a58fba723b0dd60d485e762edc80e10c3dfa01bf2fd9f22fb9006a5869b7ca61->enter($__internal_a58fba723b0dd60d485e762edc80e10c3dfa01bf2fd9f22fb9006a5869b7ca61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_47758a656033a417941494af9dedc376b097009785f478dfc48f70f4200a7359 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47758a656033a417941494af9dedc376b097009785f478dfc48f70f4200a7359->enter($__internal_47758a656033a417941494af9dedc376b097009785f478dfc48f70f4200a7359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Annonces</h1>

  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_47758a656033a417941494af9dedc376b097009785f478dfc48f70f4200a7359->leave($__internal_47758a656033a417941494af9dedc376b097009785f478dfc48f70f4200a7359_prof);

        
        $__internal_a58fba723b0dd60d485e762edc80e10c3dfa01bf2fd9f22fb9006a5869b7ca61->leave($__internal_a58fba723b0dd60d485e762edc80e10c3dfa01bf2fd9f22fb9006a5869b7ca61_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_99ba724f58d11bac3bbf56547182158b78405b6572dc1223cefd52b988fae8ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99ba724f58d11bac3bbf56547182158b78405b6572dc1223cefd52b988fae8ea->enter($__internal_99ba724f58d11bac3bbf56547182158b78405b6572dc1223cefd52b988fae8ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_6d9e5a933b89e0ffa5fe2dee7c7dca1b737d01e563360db5c7866d718c6fb1c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d9e5a933b89e0ffa5fe2dee7c7dca1b737d01e563360db5c7866d718c6fb1c9->enter($__internal_6d9e5a933b89e0ffa5fe2dee7c7dca1b737d01e563360db5c7866d718c6fb1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_6d9e5a933b89e0ffa5fe2dee7c7dca1b737d01e563360db5c7866d718c6fb1c9->leave($__internal_6d9e5a933b89e0ffa5fe2dee7c7dca1b737d01e563360db5c7866d718c6fb1c9_prof);

        
        $__internal_99ba724f58d11bac3bbf56547182158b78405b6572dc1223cefd52b988fae8ea->leave($__internal_99ba724f58d11bac3bbf56547182158b78405b6572dc1223cefd52b988fae8ea_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 18,  96 => 17,  85 => 19,  82 => 17,  76 => 12,  73 => 10,  64 => 9,  51 => 6,  42 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/layout.html.twig #}

{% extends \"OCCoreBundle::layout.html.twig\" %}

{% block title %}
  Annonces - {{ parent() }}
{% endblock %}

{% block body %}

  {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}
  <h1>Annonces</h1>

  <hr>

  {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}
  {% block ocplatform_body %}
  {% endblock %}

{% endblock %}
", "OCPlatformBundle::layout.html.twig", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/src/OC/PlatformBundle/Resources/views/layout.html.twig");
    }
}

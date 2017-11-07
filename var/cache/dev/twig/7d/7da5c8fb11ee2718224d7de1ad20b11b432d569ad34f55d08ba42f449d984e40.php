<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_919505e7391dfce28a96363308534ad39579ef9ce08bc33eccb552c0e1653a17 extends Twig_Template
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
        $__internal_26398c2397d898108f15acb3089a35d9a06292eeecb1000175f8beb51111b20d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26398c2397d898108f15acb3089a35d9a06292eeecb1000175f8beb51111b20d->enter($__internal_26398c2397d898108f15acb3089a35d9a06292eeecb1000175f8beb51111b20d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $__internal_0a6a5f0615e21b0edc0e15f78a6604e19c1830431107d10a9abc92e1adc083f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a6a5f0615e21b0edc0e15f78a6604e19c1830431107d10a9abc92e1adc083f8->enter($__internal_0a6a5f0615e21b0edc0e15f78a6604e19c1830431107d10a9abc92e1adc083f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26398c2397d898108f15acb3089a35d9a06292eeecb1000175f8beb51111b20d->leave($__internal_26398c2397d898108f15acb3089a35d9a06292eeecb1000175f8beb51111b20d_prof);

        
        $__internal_0a6a5f0615e21b0edc0e15f78a6604e19c1830431107d10a9abc92e1adc083f8->leave($__internal_0a6a5f0615e21b0edc0e15f78a6604e19c1830431107d10a9abc92e1adc083f8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_da851958f59723b98cc4046142d1e9c4e0b08d6cceecd1e44a4b7af8f7ef2d36 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da851958f59723b98cc4046142d1e9c4e0b08d6cceecd1e44a4b7af8f7ef2d36->enter($__internal_da851958f59723b98cc4046142d1e9c4e0b08d6cceecd1e44a4b7af8f7ef2d36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4d88a121f5ec6c42b4928a59f5e70d09948b6ebb6f6bc640f10dde50b42a0066 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d88a121f5ec6c42b4928a59f5e70d09948b6ebb6f6bc640f10dde50b42a0066->enter($__internal_4d88a121f5ec6c42b4928a59f5e70d09948b6ebb6f6bc640f10dde50b42a0066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4d88a121f5ec6c42b4928a59f5e70d09948b6ebb6f6bc640f10dde50b42a0066->leave($__internal_4d88a121f5ec6c42b4928a59f5e70d09948b6ebb6f6bc640f10dde50b42a0066_prof);

        
        $__internal_da851958f59723b98cc4046142d1e9c4e0b08d6cceecd1e44a4b7af8f7ef2d36->leave($__internal_da851958f59723b98cc4046142d1e9c4e0b08d6cceecd1e44a4b7af8f7ef2d36_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_613f835167f94d0ceda5eda0659116a65461f1ffb8fa80604a57d8fc289042cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_613f835167f94d0ceda5eda0659116a65461f1ffb8fa80604a57d8fc289042cb->enter($__internal_613f835167f94d0ceda5eda0659116a65461f1ffb8fa80604a57d8fc289042cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_39f556cfd23672aebb34d1b00a76339805dc79084b45db86a00575b9cd196054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39f556cfd23672aebb34d1b00a76339805dc79084b45db86a00575b9cd196054->enter($__internal_39f556cfd23672aebb34d1b00a76339805dc79084b45db86a00575b9cd196054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_39f556cfd23672aebb34d1b00a76339805dc79084b45db86a00575b9cd196054->leave($__internal_39f556cfd23672aebb34d1b00a76339805dc79084b45db86a00575b9cd196054_prof);

        
        $__internal_613f835167f94d0ceda5eda0659116a65461f1ffb8fa80604a57d8fc289042cb->leave($__internal_613f835167f94d0ceda5eda0659116a65461f1ffb8fa80604a57d8fc289042cb_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_9d25e2f91a19499c0e43b4d1b32e37864593b76787f6dd4643b66e185270d4d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d25e2f91a19499c0e43b4d1b32e37864593b76787f6dd4643b66e185270d4d8->enter($__internal_9d25e2f91a19499c0e43b4d1b32e37864593b76787f6dd4643b66e185270d4d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_ae1eb466d8d0b680fb0f6f542cbdb6d697cd818fa09d1eb8a3d37df4b6815f0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae1eb466d8d0b680fb0f6f542cbdb6d697cd818fa09d1eb8a3d37df4b6815f0e->enter($__internal_ae1eb466d8d0b680fb0f6f542cbdb6d697cd818fa09d1eb8a3d37df4b6815f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_ae1eb466d8d0b680fb0f6f542cbdb6d697cd818fa09d1eb8a3d37df4b6815f0e->leave($__internal_ae1eb466d8d0b680fb0f6f542cbdb6d697cd818fa09d1eb8a3d37df4b6815f0e_prof);

        
        $__internal_9d25e2f91a19499c0e43b4d1b32e37864593b76787f6dd4643b66e185270d4d8->leave($__internal_9d25e2f91a19499c0e43b4d1b32e37864593b76787f6dd4643b66e185270d4d8_prof);

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

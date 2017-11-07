<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_3ee525eb4f519d66013c8537c637a6f3515c22e819db2b6e98839e6c1734844b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa03e1d403e76965b241f946c8ad20bd2bf369902ced2e4161a5717fc3628114 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa03e1d403e76965b241f946c8ad20bd2bf369902ced2e4161a5717fc3628114->enter($__internal_aa03e1d403e76965b241f946c8ad20bd2bf369902ced2e4161a5717fc3628114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_e606fe3725f09d97f857e3072fe49069c0a21270d68909a99893ae86dc107c00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e606fe3725f09d97f857e3072fe49069c0a21270d68909a99893ae86dc107c00->enter($__internal_e606fe3725f09d97f857e3072fe49069c0a21270d68909a99893ae86dc107c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa03e1d403e76965b241f946c8ad20bd2bf369902ced2e4161a5717fc3628114->leave($__internal_aa03e1d403e76965b241f946c8ad20bd2bf369902ced2e4161a5717fc3628114_prof);

        
        $__internal_e606fe3725f09d97f857e3072fe49069c0a21270d68909a99893ae86dc107c00->leave($__internal_e606fe3725f09d97f857e3072fe49069c0a21270d68909a99893ae86dc107c00_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9e23325860ed50adb2872d9606a76be74ec5a037827831158271438e8e09d154 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e23325860ed50adb2872d9606a76be74ec5a037827831158271438e8e09d154->enter($__internal_9e23325860ed50adb2872d9606a76be74ec5a037827831158271438e8e09d154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4d6f288b711ad3a9b129b744ef59004cedefa5b6b04352be3b34145115fd29ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d6f288b711ad3a9b129b744ef59004cedefa5b6b04352be3b34145115fd29ca->enter($__internal_4d6f288b711ad3a9b129b744ef59004cedefa5b6b04352be3b34145115fd29ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_4d6f288b711ad3a9b129b744ef59004cedefa5b6b04352be3b34145115fd29ca->leave($__internal_4d6f288b711ad3a9b129b744ef59004cedefa5b6b04352be3b34145115fd29ca_prof);

        
        $__internal_9e23325860ed50adb2872d9606a76be74ec5a037827831158271438e8e09d154->leave($__internal_9e23325860ed50adb2872d9606a76be74ec5a037827831158271438e8e09d154_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c9942db380060024d0918ef75a6ccc7e0246d5b8ea65689a653a5700399d085 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c9942db380060024d0918ef75a6ccc7e0246d5b8ea65689a653a5700399d085->enter($__internal_6c9942db380060024d0918ef75a6ccc7e0246d5b8ea65689a653a5700399d085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_df3dfad4ae7b5f84946fd5ef5eab168a7b28f9662546d2e03b00b935bc55425d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df3dfad4ae7b5f84946fd5ef5eab168a7b28f9662546d2e03b00b935bc55425d->enter($__internal_df3dfad4ae7b5f84946fd5ef5eab168a7b28f9662546d2e03b00b935bc55425d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_df3dfad4ae7b5f84946fd5ef5eab168a7b28f9662546d2e03b00b935bc55425d->leave($__internal_df3dfad4ae7b5f84946fd5ef5eab168a7b28f9662546d2e03b00b935bc55425d_prof);

        
        $__internal_6c9942db380060024d0918ef75a6ccc7e0246d5b8ea65689a653a5700399d085->leave($__internal_6c9942db380060024d0918ef75a6ccc7e0246d5b8ea65689a653a5700399d085_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}

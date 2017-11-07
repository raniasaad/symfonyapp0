<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_4fe0126cea834c2021a568bc22188a6a6babe007ed6f1aff9514e87b8ba11595 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a237395e41efe888e36b88d8976f082fef712914080f5ea2512e01a3a15ee485 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a237395e41efe888e36b88d8976f082fef712914080f5ea2512e01a3a15ee485->enter($__internal_a237395e41efe888e36b88d8976f082fef712914080f5ea2512e01a3a15ee485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_1166fd41a67dec7de12606dfcef2d1097517db4b832aa233a850ba0b02b06093 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1166fd41a67dec7de12606dfcef2d1097517db4b832aa233a850ba0b02b06093->enter($__internal_1166fd41a67dec7de12606dfcef2d1097517db4b832aa233a850ba0b02b06093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a237395e41efe888e36b88d8976f082fef712914080f5ea2512e01a3a15ee485->leave($__internal_a237395e41efe888e36b88d8976f082fef712914080f5ea2512e01a3a15ee485_prof);

        
        $__internal_1166fd41a67dec7de12606dfcef2d1097517db4b832aa233a850ba0b02b06093->leave($__internal_1166fd41a67dec7de12606dfcef2d1097517db4b832aa233a850ba0b02b06093_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_587e77a721b99e345be5f7bb107307c32983b29f84acec08a95d5ddf6ce0a32d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_587e77a721b99e345be5f7bb107307c32983b29f84acec08a95d5ddf6ce0a32d->enter($__internal_587e77a721b99e345be5f7bb107307c32983b29f84acec08a95d5ddf6ce0a32d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1656c60fa9772348f5d60c9a7d0b4c3b3da24100b4f28bc8918adcf2269f500f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1656c60fa9772348f5d60c9a7d0b4c3b3da24100b4f28bc8918adcf2269f500f->enter($__internal_1656c60fa9772348f5d60c9a7d0b4c3b3da24100b4f28bc8918adcf2269f500f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_1656c60fa9772348f5d60c9a7d0b4c3b3da24100b4f28bc8918adcf2269f500f->leave($__internal_1656c60fa9772348f5d60c9a7d0b4c3b3da24100b4f28bc8918adcf2269f500f_prof);

        
        $__internal_587e77a721b99e345be5f7bb107307c32983b29f84acec08a95d5ddf6ce0a32d->leave($__internal_587e77a721b99e345be5f7bb107307c32983b29f84acec08a95d5ddf6ce0a32d_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_2da81086e56fe990dac7e002e9880d6a8525945dc170e79eed0b6d428d155856 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2da81086e56fe990dac7e002e9880d6a8525945dc170e79eed0b6d428d155856->enter($__internal_2da81086e56fe990dac7e002e9880d6a8525945dc170e79eed0b6d428d155856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dfa854c4bdb02d16afe56cf37a619ef609da7b5bee2c588675ee009354963b81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfa854c4bdb02d16afe56cf37a619ef609da7b5bee2c588675ee009354963b81->enter($__internal_dfa854c4bdb02d16afe56cf37a619ef609da7b5bee2c588675ee009354963b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_dfa854c4bdb02d16afe56cf37a619ef609da7b5bee2c588675ee009354963b81->leave($__internal_dfa854c4bdb02d16afe56cf37a619ef609da7b5bee2c588675ee009354963b81_prof);

        
        $__internal_2da81086e56fe990dac7e002e9880d6a8525945dc170e79eed0b6d428d155856->leave($__internal_2da81086e56fe990dac7e002e9880d6a8525945dc170e79eed0b6d428d155856_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d5fea156702c651f0b5591730590d73c2a1ea67478cd269264e9ba2f349cf86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d5fea156702c651f0b5591730590d73c2a1ea67478cd269264e9ba2f349cf86->enter($__internal_2d5fea156702c651f0b5591730590d73c2a1ea67478cd269264e9ba2f349cf86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_714bbfe06b6067acb52cc4ca659e6e5c1a2e1a6fe2620dfd3fb4d81e9a7a8db4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_714bbfe06b6067acb52cc4ca659e6e5c1a2e1a6fe2620dfd3fb4d81e9a7a8db4->enter($__internal_714bbfe06b6067acb52cc4ca659e6e5c1a2e1a6fe2620dfd3fb4d81e9a7a8db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_714bbfe06b6067acb52cc4ca659e6e5c1a2e1a6fe2620dfd3fb4d81e9a7a8db4->leave($__internal_714bbfe06b6067acb52cc4ca659e6e5c1a2e1a6fe2620dfd3fb4d81e9a7a8db4_prof);

        
        $__internal_2d5fea156702c651f0b5591730590d73c2a1ea67478cd269264e9ba2f349cf86->leave($__internal_2d5fea156702c651f0b5591730590d73c2a1ea67478cd269264e9ba2f349cf86_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_52c432c68a1784b956f4d55926d2f563c9e598302fe2d1b3e738d48e1c5a4cc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_25ed0cc72f692168ccc5831824da63e2849261c1032785e58d130e82a4995694 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_25ed0cc72f692168ccc5831824da63e2849261c1032785e58d130e82a4995694->enter($__internal_25ed0cc72f692168ccc5831824da63e2849261c1032785e58d130e82a4995694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_dcc695980462ebd1dc95537890fbcb266217ffd750c2ade310e0a5895a6fd98f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dcc695980462ebd1dc95537890fbcb266217ffd750c2ade310e0a5895a6fd98f->enter($__internal_dcc695980462ebd1dc95537890fbcb266217ffd750c2ade310e0a5895a6fd98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_25ed0cc72f692168ccc5831824da63e2849261c1032785e58d130e82a4995694->leave($__internal_25ed0cc72f692168ccc5831824da63e2849261c1032785e58d130e82a4995694_prof);

        
        $__internal_dcc695980462ebd1dc95537890fbcb266217ffd750c2ade310e0a5895a6fd98f->leave($__internal_dcc695980462ebd1dc95537890fbcb266217ffd750c2ade310e0a5895a6fd98f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_707b4d3e92fdf8dad601d52f4ab7bd0c2db1ffc2204f1fd97d4795a1afc49aea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_707b4d3e92fdf8dad601d52f4ab7bd0c2db1ffc2204f1fd97d4795a1afc49aea->enter($__internal_707b4d3e92fdf8dad601d52f4ab7bd0c2db1ffc2204f1fd97d4795a1afc49aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_03c0ef6d4dffce1554f088f4b63589f6406b62d418546735a8a82852872dcccf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03c0ef6d4dffce1554f088f4b63589f6406b62d418546735a8a82852872dcccf->enter($__internal_03c0ef6d4dffce1554f088f4b63589f6406b62d418546735a8a82852872dcccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_03c0ef6d4dffce1554f088f4b63589f6406b62d418546735a8a82852872dcccf->leave($__internal_03c0ef6d4dffce1554f088f4b63589f6406b62d418546735a8a82852872dcccf_prof);

        
        $__internal_707b4d3e92fdf8dad601d52f4ab7bd0c2db1ffc2204f1fd97d4795a1afc49aea->leave($__internal_707b4d3e92fdf8dad601d52f4ab7bd0c2db1ffc2204f1fd97d4795a1afc49aea_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_1dc9840235c698b6e20649677d5008ea786c0e888e0f5f2d912f257820ddc1df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dc9840235c698b6e20649677d5008ea786c0e888e0f5f2d912f257820ddc1df->enter($__internal_1dc9840235c698b6e20649677d5008ea786c0e888e0f5f2d912f257820ddc1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3ccf9413f0310779bfbe9b095f20f866b33537b0a25f766b473402c5dc5c452c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ccf9413f0310779bfbe9b095f20f866b33537b0a25f766b473402c5dc5c452c->enter($__internal_3ccf9413f0310779bfbe9b095f20f866b33537b0a25f766b473402c5dc5c452c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_3ccf9413f0310779bfbe9b095f20f866b33537b0a25f766b473402c5dc5c452c->leave($__internal_3ccf9413f0310779bfbe9b095f20f866b33537b0a25f766b473402c5dc5c452c_prof);

        
        $__internal_1dc9840235c698b6e20649677d5008ea786c0e888e0f5f2d912f257820ddc1df->leave($__internal_1dc9840235c698b6e20649677d5008ea786c0e888e0f5f2d912f257820ddc1df_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_66bd723d962283fe8659e6ba096016a737d41637e841aae900fd943184a815ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66bd723d962283fe8659e6ba096016a737d41637e841aae900fd943184a815ad->enter($__internal_66bd723d962283fe8659e6ba096016a737d41637e841aae900fd943184a815ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_4d6fb7c4baf6bfa311038db68674ee20e0e8954902528efcf462f3f0d53f25a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d6fb7c4baf6bfa311038db68674ee20e0e8954902528efcf462f3f0d53f25a6->enter($__internal_4d6fb7c4baf6bfa311038db68674ee20e0e8954902528efcf462f3f0d53f25a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_4d6fb7c4baf6bfa311038db68674ee20e0e8954902528efcf462f3f0d53f25a6->leave($__internal_4d6fb7c4baf6bfa311038db68674ee20e0e8954902528efcf462f3f0d53f25a6_prof);

        
        $__internal_66bd723d962283fe8659e6ba096016a737d41637e841aae900fd943184a815ad->leave($__internal_66bd723d962283fe8659e6ba096016a737d41637e841aae900fd943184a815ad_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

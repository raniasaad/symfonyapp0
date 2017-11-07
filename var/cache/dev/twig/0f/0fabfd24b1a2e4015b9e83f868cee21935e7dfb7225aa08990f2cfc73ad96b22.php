<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_b2f8046f02df92d8a895beafb1e809f4c60a187d20c9a1a62b11c80e8a46182d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4c0c4dcfe6cba2d4d98245fca39193b17a0ad1fc12770058e7ad20fa1996d18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4c0c4dcfe6cba2d4d98245fca39193b17a0ad1fc12770058e7ad20fa1996d18->enter($__internal_e4c0c4dcfe6cba2d4d98245fca39193b17a0ad1fc12770058e7ad20fa1996d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_6e8094d047cc853d3ae7298452422d7d7e665ae73c79c3a96e1938dd74494889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e8094d047cc853d3ae7298452422d7d7e665ae73c79c3a96e1938dd74494889->enter($__internal_6e8094d047cc853d3ae7298452422d7d7e665ae73c79c3a96e1938dd74494889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4c0c4dcfe6cba2d4d98245fca39193b17a0ad1fc12770058e7ad20fa1996d18->leave($__internal_e4c0c4dcfe6cba2d4d98245fca39193b17a0ad1fc12770058e7ad20fa1996d18_prof);

        
        $__internal_6e8094d047cc853d3ae7298452422d7d7e665ae73c79c3a96e1938dd74494889->leave($__internal_6e8094d047cc853d3ae7298452422d7d7e665ae73c79c3a96e1938dd74494889_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_d7efcdf3eb1375bdb2497c347feae8d2c0015172676998173e933c5cfcaf9782 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7efcdf3eb1375bdb2497c347feae8d2c0015172676998173e933c5cfcaf9782->enter($__internal_d7efcdf3eb1375bdb2497c347feae8d2c0015172676998173e933c5cfcaf9782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_3aa8afb26b76d4360e2f56612a8180639cae2a914d9b4325e2828245af8daf51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aa8afb26b76d4360e2f56612a8180639cae2a914d9b4325e2828245af8daf51->enter($__internal_3aa8afb26b76d4360e2f56612a8180639cae2a914d9b4325e2828245af8daf51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_3aa8afb26b76d4360e2f56612a8180639cae2a914d9b4325e2828245af8daf51->leave($__internal_3aa8afb26b76d4360e2f56612a8180639cae2a914d9b4325e2828245af8daf51_prof);

        
        $__internal_d7efcdf3eb1375bdb2497c347feae8d2c0015172676998173e933c5cfcaf9782->leave($__internal_d7efcdf3eb1375bdb2497c347feae8d2c0015172676998173e933c5cfcaf9782_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b2a2b3bbb326f80e913d0edeb288ee675505be2485e7d021497b45154e3c232d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2a2b3bbb326f80e913d0edeb288ee675505be2485e7d021497b45154e3c232d->enter($__internal_b2a2b3bbb326f80e913d0edeb288ee675505be2485e7d021497b45154e3c232d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ee0aad4c374e2801cd6d345b8189f11d8492079d10eeea32bd8ed3812b8e2cbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee0aad4c374e2801cd6d345b8189f11d8492079d10eeea32bd8ed3812b8e2cbd->enter($__internal_ee0aad4c374e2801cd6d345b8189f11d8492079d10eeea32bd8ed3812b8e2cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_ee0aad4c374e2801cd6d345b8189f11d8492079d10eeea32bd8ed3812b8e2cbd->leave($__internal_ee0aad4c374e2801cd6d345b8189f11d8492079d10eeea32bd8ed3812b8e2cbd_prof);

        
        $__internal_b2a2b3bbb326f80e913d0edeb288ee675505be2485e7d021497b45154e3c232d->leave($__internal_b2a2b3bbb326f80e913d0edeb288ee675505be2485e7d021497b45154e3c232d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}

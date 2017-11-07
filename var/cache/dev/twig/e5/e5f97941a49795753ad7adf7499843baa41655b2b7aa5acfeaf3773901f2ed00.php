<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_001ec319e56b05cdf9c9542561587dc367de6b139dec9406243e318a64bdc777 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_78bcf8ec464fda5395400dc54d711a4908ec9b6484e96aea7ac507600ff93de1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78bcf8ec464fda5395400dc54d711a4908ec9b6484e96aea7ac507600ff93de1->enter($__internal_78bcf8ec464fda5395400dc54d711a4908ec9b6484e96aea7ac507600ff93de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_af1ab0f71f431027b91146c110a85e5e20fcabad381e1c30b99135608198e020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af1ab0f71f431027b91146c110a85e5e20fcabad381e1c30b99135608198e020->enter($__internal_af1ab0f71f431027b91146c110a85e5e20fcabad381e1c30b99135608198e020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78bcf8ec464fda5395400dc54d711a4908ec9b6484e96aea7ac507600ff93de1->leave($__internal_78bcf8ec464fda5395400dc54d711a4908ec9b6484e96aea7ac507600ff93de1_prof);

        
        $__internal_af1ab0f71f431027b91146c110a85e5e20fcabad381e1c30b99135608198e020->leave($__internal_af1ab0f71f431027b91146c110a85e5e20fcabad381e1c30b99135608198e020_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3b6507442a425a89c88694cc6659ef651cef9daca5be0cae5b68b6c24c43c1f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b6507442a425a89c88694cc6659ef651cef9daca5be0cae5b68b6c24c43c1f6->enter($__internal_3b6507442a425a89c88694cc6659ef651cef9daca5be0cae5b68b6c24c43c1f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_26601c80543b4e0038154dc748f211784e0a3efd89c58c70bff8476358e3ff9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26601c80543b4e0038154dc748f211784e0a3efd89c58c70bff8476358e3ff9e->enter($__internal_26601c80543b4e0038154dc748f211784e0a3efd89c58c70bff8476358e3ff9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_26601c80543b4e0038154dc748f211784e0a3efd89c58c70bff8476358e3ff9e->leave($__internal_26601c80543b4e0038154dc748f211784e0a3efd89c58c70bff8476358e3ff9e_prof);

        
        $__internal_3b6507442a425a89c88694cc6659ef651cef9daca5be0cae5b68b6c24c43c1f6->leave($__internal_3b6507442a425a89c88694cc6659ef651cef9daca5be0cae5b68b6c24c43c1f6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}

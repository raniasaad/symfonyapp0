<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8006b7f8fc2624f01b3de6d52decc5ff3e8fa8050fc8435cce232d4e154540ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a17d8c04399d0f04f6550641b4917470cc18078f73d02cc18fa27318d6cb46d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a17d8c04399d0f04f6550641b4917470cc18078f73d02cc18fa27318d6cb46d->enter($__internal_7a17d8c04399d0f04f6550641b4917470cc18078f73d02cc18fa27318d6cb46d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5b288102af36ed39cf08772ac3560355cecd3bba50eead6db74399b017ded76d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b288102af36ed39cf08772ac3560355cecd3bba50eead6db74399b017ded76d->enter($__internal_5b288102af36ed39cf08772ac3560355cecd3bba50eead6db74399b017ded76d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a17d8c04399d0f04f6550641b4917470cc18078f73d02cc18fa27318d6cb46d->leave($__internal_7a17d8c04399d0f04f6550641b4917470cc18078f73d02cc18fa27318d6cb46d_prof);

        
        $__internal_5b288102af36ed39cf08772ac3560355cecd3bba50eead6db74399b017ded76d->leave($__internal_5b288102af36ed39cf08772ac3560355cecd3bba50eead6db74399b017ded76d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e7b7d5c9bd6cedb164d929e4832c8f2a06f02097e273e9579dd72ee7a8d3e6de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7b7d5c9bd6cedb164d929e4832c8f2a06f02097e273e9579dd72ee7a8d3e6de->enter($__internal_e7b7d5c9bd6cedb164d929e4832c8f2a06f02097e273e9579dd72ee7a8d3e6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7531897de43df3631b1f0727d83bb2a62cf19f27b60e385eebc518567d35ecf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7531897de43df3631b1f0727d83bb2a62cf19f27b60e385eebc518567d35ecf1->enter($__internal_7531897de43df3631b1f0727d83bb2a62cf19f27b60e385eebc518567d35ecf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7531897de43df3631b1f0727d83bb2a62cf19f27b60e385eebc518567d35ecf1->leave($__internal_7531897de43df3631b1f0727d83bb2a62cf19f27b60e385eebc518567d35ecf1_prof);

        
        $__internal_e7b7d5c9bd6cedb164d929e4832c8f2a06f02097e273e9579dd72ee7a8d3e6de->leave($__internal_e7b7d5c9bd6cedb164d929e4832c8f2a06f02097e273e9579dd72ee7a8d3e6de_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dd19bf346fb42b71c54801fd1e001cb6fd1d7c3a1cc6f69f8654c4e5daf94ea7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd19bf346fb42b71c54801fd1e001cb6fd1d7c3a1cc6f69f8654c4e5daf94ea7->enter($__internal_dd19bf346fb42b71c54801fd1e001cb6fd1d7c3a1cc6f69f8654c4e5daf94ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9c704c526ed47a352b6b9ac9357d4b5c4a64b87a1d5576b34f19f719bc465ee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c704c526ed47a352b6b9ac9357d4b5c4a64b87a1d5576b34f19f719bc465ee7->enter($__internal_9c704c526ed47a352b6b9ac9357d4b5c4a64b87a1d5576b34f19f719bc465ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_9c704c526ed47a352b6b9ac9357d4b5c4a64b87a1d5576b34f19f719bc465ee7->leave($__internal_9c704c526ed47a352b6b9ac9357d4b5c4a64b87a1d5576b34f19f719bc465ee7_prof);

        
        $__internal_dd19bf346fb42b71c54801fd1e001cb6fd1d7c3a1cc6f69f8654c4e5daf94ea7->leave($__internal_dd19bf346fb42b71c54801fd1e001cb6fd1d7c3a1cc6f69f8654c4e5daf94ea7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_524b66a552838d7b30428e31fdf6fb7873f15cbe02d95de46c507e688a8fc5c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_524b66a552838d7b30428e31fdf6fb7873f15cbe02d95de46c507e688a8fc5c4->enter($__internal_524b66a552838d7b30428e31fdf6fb7873f15cbe02d95de46c507e688a8fc5c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_820bf542e46ef2053996e293b99a69de790618b16cb815ad586418cf2b1423be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_820bf542e46ef2053996e293b99a69de790618b16cb815ad586418cf2b1423be->enter($__internal_820bf542e46ef2053996e293b99a69de790618b16cb815ad586418cf2b1423be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_820bf542e46ef2053996e293b99a69de790618b16cb815ad586418cf2b1423be->leave($__internal_820bf542e46ef2053996e293b99a69de790618b16cb815ad586418cf2b1423be_prof);

        
        $__internal_524b66a552838d7b30428e31fdf6fb7873f15cbe02d95de46c507e688a8fc5c4->leave($__internal_524b66a552838d7b30428e31fdf6fb7873f15cbe02d95de46c507e688a8fc5c4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}

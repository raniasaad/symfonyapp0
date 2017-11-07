<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_504b4c769556d0dec363c5a1ba46cd1ccd966e1af8d1a9aa5a5f438d60d29ae7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_9bfb71eba4bfed7f8f31a086f985f99d000f78b136dd0dea15a78a6537ba31e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bfb71eba4bfed7f8f31a086f985f99d000f78b136dd0dea15a78a6537ba31e7->enter($__internal_9bfb71eba4bfed7f8f31a086f985f99d000f78b136dd0dea15a78a6537ba31e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_12768aa4dfba87b7d79b5a1e2441757ea34dcba2e0543bdc8cbe0adeca6544be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12768aa4dfba87b7d79b5a1e2441757ea34dcba2e0543bdc8cbe0adeca6544be->enter($__internal_12768aa4dfba87b7d79b5a1e2441757ea34dcba2e0543bdc8cbe0adeca6544be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9bfb71eba4bfed7f8f31a086f985f99d000f78b136dd0dea15a78a6537ba31e7->leave($__internal_9bfb71eba4bfed7f8f31a086f985f99d000f78b136dd0dea15a78a6537ba31e7_prof);

        
        $__internal_12768aa4dfba87b7d79b5a1e2441757ea34dcba2e0543bdc8cbe0adeca6544be->leave($__internal_12768aa4dfba87b7d79b5a1e2441757ea34dcba2e0543bdc8cbe0adeca6544be_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ce4530e21123273a3f9fa63ac3d5fb81163614ce34a6cbbe9e6a8ebb3e8e7740 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce4530e21123273a3f9fa63ac3d5fb81163614ce34a6cbbe9e6a8ebb3e8e7740->enter($__internal_ce4530e21123273a3f9fa63ac3d5fb81163614ce34a6cbbe9e6a8ebb3e8e7740_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_fee3688c898f44b883f33af2e90386e89833b2f8f7457fedb22df0aef392d481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fee3688c898f44b883f33af2e90386e89833b2f8f7457fedb22df0aef392d481->enter($__internal_fee3688c898f44b883f33af2e90386e89833b2f8f7457fedb22df0aef392d481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fee3688c898f44b883f33af2e90386e89833b2f8f7457fedb22df0aef392d481->leave($__internal_fee3688c898f44b883f33af2e90386e89833b2f8f7457fedb22df0aef392d481_prof);

        
        $__internal_ce4530e21123273a3f9fa63ac3d5fb81163614ce34a6cbbe9e6a8ebb3e8e7740->leave($__internal_ce4530e21123273a3f9fa63ac3d5fb81163614ce34a6cbbe9e6a8ebb3e8e7740_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8678bde5550eb53612f9a61ec44c51e6de41cf245b4f197e8ca926845da91c8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8678bde5550eb53612f9a61ec44c51e6de41cf245b4f197e8ca926845da91c8a->enter($__internal_8678bde5550eb53612f9a61ec44c51e6de41cf245b4f197e8ca926845da91c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_63a5dc646b234185f890549a6f64246692fd1cfea6832a9ced38bb6b7454473b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63a5dc646b234185f890549a6f64246692fd1cfea6832a9ced38bb6b7454473b->enter($__internal_63a5dc646b234185f890549a6f64246692fd1cfea6832a9ced38bb6b7454473b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_63a5dc646b234185f890549a6f64246692fd1cfea6832a9ced38bb6b7454473b->leave($__internal_63a5dc646b234185f890549a6f64246692fd1cfea6832a9ced38bb6b7454473b_prof);

        
        $__internal_8678bde5550eb53612f9a61ec44c51e6de41cf245b4f197e8ca926845da91c8a->leave($__internal_8678bde5550eb53612f9a61ec44c51e6de41cf245b4f197e8ca926845da91c8a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ed8b16381eba155c84ef1e5a204b7d7e857d5d7d7506a3b752b5498396b3009b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed8b16381eba155c84ef1e5a204b7d7e857d5d7d7506a3b752b5498396b3009b->enter($__internal_ed8b16381eba155c84ef1e5a204b7d7e857d5d7d7506a3b752b5498396b3009b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_9d5b01d9b110b7de3f6651d401187570112f4ebcb9a0e780ad3f07cd96bce5de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d5b01d9b110b7de3f6651d401187570112f4ebcb9a0e780ad3f07cd96bce5de->enter($__internal_9d5b01d9b110b7de3f6651d401187570112f4ebcb9a0e780ad3f07cd96bce5de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_9d5b01d9b110b7de3f6651d401187570112f4ebcb9a0e780ad3f07cd96bce5de->leave($__internal_9d5b01d9b110b7de3f6651d401187570112f4ebcb9a0e780ad3f07cd96bce5de_prof);

        
        $__internal_ed8b16381eba155c84ef1e5a204b7d7e857d5d7d7506a3b752b5498396b3009b->leave($__internal_ed8b16381eba155c84ef1e5a204b7d7e857d5d7d7506a3b752b5498396b3009b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

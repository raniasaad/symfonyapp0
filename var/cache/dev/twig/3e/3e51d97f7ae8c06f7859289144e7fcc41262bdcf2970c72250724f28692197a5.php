<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_8d75d46680520b17a436b17adebc419e865bc5fb1e9380c89c0f2d5ba5bb5b37 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_2f9b8525e7b3b5967756b0f9053e2fc14714e6f770a7e46b8d18809c992922a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f9b8525e7b3b5967756b0f9053e2fc14714e6f770a7e46b8d18809c992922a6->enter($__internal_2f9b8525e7b3b5967756b0f9053e2fc14714e6f770a7e46b8d18809c992922a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_8cdeb56c2cb40f5132eed01a42be0697bef8ee65b40f85d4a4d4fec1e22d07e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cdeb56c2cb40f5132eed01a42be0697bef8ee65b40f85d4a4d4fec1e22d07e3->enter($__internal_8cdeb56c2cb40f5132eed01a42be0697bef8ee65b40f85d4a4d4fec1e22d07e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2f9b8525e7b3b5967756b0f9053e2fc14714e6f770a7e46b8d18809c992922a6->leave($__internal_2f9b8525e7b3b5967756b0f9053e2fc14714e6f770a7e46b8d18809c992922a6_prof);

        
        $__internal_8cdeb56c2cb40f5132eed01a42be0697bef8ee65b40f85d4a4d4fec1e22d07e3->leave($__internal_8cdeb56c2cb40f5132eed01a42be0697bef8ee65b40f85d4a4d4fec1e22d07e3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bb78ab6e87754b3939a2b690fdc58579255e0c681c7f3b5bc56812493e05e333 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb78ab6e87754b3939a2b690fdc58579255e0c681c7f3b5bc56812493e05e333->enter($__internal_bb78ab6e87754b3939a2b690fdc58579255e0c681c7f3b5bc56812493e05e333_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_64e291859a19c09da9df6e79b56df870ed615330dfa0ec6372a75afad49844aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64e291859a19c09da9df6e79b56df870ed615330dfa0ec6372a75afad49844aa->enter($__internal_64e291859a19c09da9df6e79b56df870ed615330dfa0ec6372a75afad49844aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_64e291859a19c09da9df6e79b56df870ed615330dfa0ec6372a75afad49844aa->leave($__internal_64e291859a19c09da9df6e79b56df870ed615330dfa0ec6372a75afad49844aa_prof);

        
        $__internal_bb78ab6e87754b3939a2b690fdc58579255e0c681c7f3b5bc56812493e05e333->leave($__internal_bb78ab6e87754b3939a2b690fdc58579255e0c681c7f3b5bc56812493e05e333_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1e212078574318422418d5a69abfcd8c3d862900a13bd88c73147c67590f0594 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e212078574318422418d5a69abfcd8c3d862900a13bd88c73147c67590f0594->enter($__internal_1e212078574318422418d5a69abfcd8c3d862900a13bd88c73147c67590f0594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f9b0c2ab64db535cdc4167eb3dda2f788474a371070324fb96c261de0acb0baa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9b0c2ab64db535cdc4167eb3dda2f788474a371070324fb96c261de0acb0baa->enter($__internal_f9b0c2ab64db535cdc4167eb3dda2f788474a371070324fb96c261de0acb0baa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f9b0c2ab64db535cdc4167eb3dda2f788474a371070324fb96c261de0acb0baa->leave($__internal_f9b0c2ab64db535cdc4167eb3dda2f788474a371070324fb96c261de0acb0baa_prof);

        
        $__internal_1e212078574318422418d5a69abfcd8c3d862900a13bd88c73147c67590f0594->leave($__internal_1e212078574318422418d5a69abfcd8c3d862900a13bd88c73147c67590f0594_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_31f799557f7aa5129757a721284ef7623e0b8183160588ec3b8e391f577bffad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31f799557f7aa5129757a721284ef7623e0b8183160588ec3b8e391f577bffad->enter($__internal_31f799557f7aa5129757a721284ef7623e0b8183160588ec3b8e391f577bffad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e478a5b79d6162d8560a4e9377f1cc09195641bdcbf55eafab8d46577133a6dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e478a5b79d6162d8560a4e9377f1cc09195641bdcbf55eafab8d46577133a6dc->enter($__internal_e478a5b79d6162d8560a4e9377f1cc09195641bdcbf55eafab8d46577133a6dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_e478a5b79d6162d8560a4e9377f1cc09195641bdcbf55eafab8d46577133a6dc->leave($__internal_e478a5b79d6162d8560a4e9377f1cc09195641bdcbf55eafab8d46577133a6dc_prof);

        
        $__internal_31f799557f7aa5129757a721284ef7623e0b8183160588ec3b8e391f577bffad->leave($__internal_31f799557f7aa5129757a721284ef7623e0b8183160588ec3b8e391f577bffad_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

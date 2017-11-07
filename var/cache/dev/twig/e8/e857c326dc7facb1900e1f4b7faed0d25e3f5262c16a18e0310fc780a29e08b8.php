<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_f80b1eb8133ce2f1327e469d2067b6386b3f775cc04d0b50eb74197424412f04 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_cb3ddff9715cc271de17b9fd6271cb19cac0f3d66cd0837d7ba19d3f11abf7ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb3ddff9715cc271de17b9fd6271cb19cac0f3d66cd0837d7ba19d3f11abf7ae->enter($__internal_cb3ddff9715cc271de17b9fd6271cb19cac0f3d66cd0837d7ba19d3f11abf7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_51dba53584f39ee2ef70f145339cafc301517455444e5a3ad62b4277edd660dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51dba53584f39ee2ef70f145339cafc301517455444e5a3ad62b4277edd660dd->enter($__internal_51dba53584f39ee2ef70f145339cafc301517455444e5a3ad62b4277edd660dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb3ddff9715cc271de17b9fd6271cb19cac0f3d66cd0837d7ba19d3f11abf7ae->leave($__internal_cb3ddff9715cc271de17b9fd6271cb19cac0f3d66cd0837d7ba19d3f11abf7ae_prof);

        
        $__internal_51dba53584f39ee2ef70f145339cafc301517455444e5a3ad62b4277edd660dd->leave($__internal_51dba53584f39ee2ef70f145339cafc301517455444e5a3ad62b4277edd660dd_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_832295131947054666ff5acf2e668a6b5ae99f45617c8b672086d705417d3238 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_832295131947054666ff5acf2e668a6b5ae99f45617c8b672086d705417d3238->enter($__internal_832295131947054666ff5acf2e668a6b5ae99f45617c8b672086d705417d3238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6420a933f70cbbf98622f61b1ce77a0173922dbfc757d22e12b9c6460211aebc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6420a933f70cbbf98622f61b1ce77a0173922dbfc757d22e12b9c6460211aebc->enter($__internal_6420a933f70cbbf98622f61b1ce77a0173922dbfc757d22e12b9c6460211aebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6420a933f70cbbf98622f61b1ce77a0173922dbfc757d22e12b9c6460211aebc->leave($__internal_6420a933f70cbbf98622f61b1ce77a0173922dbfc757d22e12b9c6460211aebc_prof);

        
        $__internal_832295131947054666ff5acf2e668a6b5ae99f45617c8b672086d705417d3238->leave($__internal_832295131947054666ff5acf2e668a6b5ae99f45617c8b672086d705417d3238_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bfa200a3e67cde234da66e689394fff4c33ec23576e5781d5479dfe58fed815e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfa200a3e67cde234da66e689394fff4c33ec23576e5781d5479dfe58fed815e->enter($__internal_bfa200a3e67cde234da66e689394fff4c33ec23576e5781d5479dfe58fed815e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c765399a7eb71690cdad54b108a053ee74a628f7f39998156e299f14bed4bd76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c765399a7eb71690cdad54b108a053ee74a628f7f39998156e299f14bed4bd76->enter($__internal_c765399a7eb71690cdad54b108a053ee74a628f7f39998156e299f14bed4bd76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_c765399a7eb71690cdad54b108a053ee74a628f7f39998156e299f14bed4bd76->leave($__internal_c765399a7eb71690cdad54b108a053ee74a628f7f39998156e299f14bed4bd76_prof);

        
        $__internal_bfa200a3e67cde234da66e689394fff4c33ec23576e5781d5479dfe58fed815e->leave($__internal_bfa200a3e67cde234da66e689394fff4c33ec23576e5781d5479dfe58fed815e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f57e6f9cb1181c85413b1b62f1259cbbe39ff86805d1587cdddea55c0e2aff81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f57e6f9cb1181c85413b1b62f1259cbbe39ff86805d1587cdddea55c0e2aff81->enter($__internal_f57e6f9cb1181c85413b1b62f1259cbbe39ff86805d1587cdddea55c0e2aff81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_56297634c365b7bba7f6c01c441d5d44c056c6e88fcf54289907b0226c9dca0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56297634c365b7bba7f6c01c441d5d44c056c6e88fcf54289907b0226c9dca0a->enter($__internal_56297634c365b7bba7f6c01c441d5d44c056c6e88fcf54289907b0226c9dca0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_56297634c365b7bba7f6c01c441d5d44c056c6e88fcf54289907b0226c9dca0a->leave($__internal_56297634c365b7bba7f6c01c441d5d44c056c6e88fcf54289907b0226c9dca0a_prof);

        
        $__internal_f57e6f9cb1181c85413b1b62f1259cbbe39ff86805d1587cdddea55c0e2aff81->leave($__internal_f57e6f9cb1181c85413b1b62f1259cbbe39ff86805d1587cdddea55c0e2aff81_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
", "WebProfilerBundle:Collector:exception.html.twig", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}

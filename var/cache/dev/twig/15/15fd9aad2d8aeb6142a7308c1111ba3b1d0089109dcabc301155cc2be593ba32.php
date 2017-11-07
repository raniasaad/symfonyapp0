<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_9466e417e249a318888b58122bf20acec49cfb00615723c50ad6f136d987ab60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3aa8361828a949cdb6cc88f7de70935b11a494b6626ba75e6d3c1f06c6a2817c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aa8361828a949cdb6cc88f7de70935b11a494b6626ba75e6d3c1f06c6a2817c->enter($__internal_3aa8361828a949cdb6cc88f7de70935b11a494b6626ba75e6d3c1f06c6a2817c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_628d781334a6a993ce5c851cd7e72a1564692975dd2672d6a7b4b6a33f07bb32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_628d781334a6a993ce5c851cd7e72a1564692975dd2672d6a7b4b6a33f07bb32->enter($__internal_628d781334a6a993ce5c851cd7e72a1564692975dd2672d6a7b4b6a33f07bb32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_3aa8361828a949cdb6cc88f7de70935b11a494b6626ba75e6d3c1f06c6a2817c->leave($__internal_3aa8361828a949cdb6cc88f7de70935b11a494b6626ba75e6d3c1f06c6a2817c_prof);

        
        $__internal_628d781334a6a993ce5c851cd7e72a1564692975dd2672d6a7b4b6a33f07bb32->leave($__internal_628d781334a6a993ce5c851cd7e72a1564692975dd2672d6a7b4b6a33f07bb32_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.rdf.twig", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}

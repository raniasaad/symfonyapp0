<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_30580389b5c7aa14b386ed61dd443937efe4af3739aaf902d640f73372264a55 extends Twig_Template
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
        $__internal_f84923a616a3bad99e02a0c80666b85d77b456994dfc0b9e6f3e4f0391932b7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f84923a616a3bad99e02a0c80666b85d77b456994dfc0b9e6f3e4f0391932b7b->enter($__internal_f84923a616a3bad99e02a0c80666b85d77b456994dfc0b9e6f3e4f0391932b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_996ce6874320d33175c8723a60a3fcfa01e63890d0cff6db841b0f64730f6e6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_996ce6874320d33175c8723a60a3fcfa01e63890d0cff6db841b0f64730f6e6c->enter($__internal_996ce6874320d33175c8723a60a3fcfa01e63890d0cff6db841b0f64730f6e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_f84923a616a3bad99e02a0c80666b85d77b456994dfc0b9e6f3e4f0391932b7b->leave($__internal_f84923a616a3bad99e02a0c80666b85d77b456994dfc0b9e6f3e4f0391932b7b_prof);

        
        $__internal_996ce6874320d33175c8723a60a3fcfa01e63890d0cff6db841b0f64730f6e6c->leave($__internal_996ce6874320d33175c8723a60a3fcfa01e63890d0cff6db841b0f64730f6e6c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}

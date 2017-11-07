<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_cc4a9aeb42171e8566527e4036889ae5fdc4fa6be7c1916557ee7b861d4bd1d0 extends Twig_Template
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
        $__internal_7111fd3a2d62087b429193b5c61354dc1d3633b46e5c81fe1bd9d12ffbde229c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7111fd3a2d62087b429193b5c61354dc1d3633b46e5c81fe1bd9d12ffbde229c->enter($__internal_7111fd3a2d62087b429193b5c61354dc1d3633b46e5c81fe1bd9d12ffbde229c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_4b684f1c57ef0ca5d97b0541174f08cf96c5b9fe66deb33ad1a4226fe4043766 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b684f1c57ef0ca5d97b0541174f08cf96c5b9fe66deb33ad1a4226fe4043766->enter($__internal_4b684f1c57ef0ca5d97b0541174f08cf96c5b9fe66deb33ad1a4226fe4043766_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })())));
        echo "
";
        
        $__internal_7111fd3a2d62087b429193b5c61354dc1d3633b46e5c81fe1bd9d12ffbde229c->leave($__internal_7111fd3a2d62087b429193b5c61354dc1d3633b46e5c81fe1bd9d12ffbde229c_prof);

        
        $__internal_4b684f1c57ef0ca5d97b0541174f08cf96c5b9fe66deb33ad1a4226fe4043766->leave($__internal_4b684f1c57ef0ca5d97b0541174f08cf96c5b9fe66deb33ad1a4226fe4043766_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}

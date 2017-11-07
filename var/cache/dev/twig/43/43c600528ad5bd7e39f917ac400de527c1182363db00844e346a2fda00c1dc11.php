<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_21f90cf27df5ef399fad89b188241747e3c89ea570ee3c045fcad7194100fdd7 extends Twig_Template
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
        $__internal_562edd882c80405419c6e27c3f0cd466fb4c3c7e16f7c430702db44914338867 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_562edd882c80405419c6e27c3f0cd466fb4c3c7e16f7c430702db44914338867->enter($__internal_562edd882c80405419c6e27c3f0cd466fb4c3c7e16f7c430702db44914338867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_05ce9b66ab353687167dd923d2b4a52246cf09aa1052315e88c620cae07952c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05ce9b66ab353687167dd923d2b4a52246cf09aa1052315e88c620cae07952c2->enter($__internal_05ce9b66ab353687167dd923d2b4a52246cf09aa1052315e88c620cae07952c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_562edd882c80405419c6e27c3f0cd466fb4c3c7e16f7c430702db44914338867->leave($__internal_562edd882c80405419c6e27c3f0cd466fb4c3c7e16f7c430702db44914338867_prof);

        
        $__internal_05ce9b66ab353687167dd923d2b4a52246cf09aa1052315e88c620cae07952c2->leave($__internal_05ce9b66ab353687167dd923d2b4a52246cf09aa1052315e88c620cae07952c2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}

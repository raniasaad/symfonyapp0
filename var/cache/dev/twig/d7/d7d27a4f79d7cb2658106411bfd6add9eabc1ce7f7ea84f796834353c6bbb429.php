<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_b58aa8bdf83513bbf385c5579ace92992553c52f8b79c57f73245c647d9547d4 extends Twig_Template
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
        $__internal_a383f2045789228a18b1eb729f35453b73c9e0c31d606117a99478da8211c560 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a383f2045789228a18b1eb729f35453b73c9e0c31d606117a99478da8211c560->enter($__internal_a383f2045789228a18b1eb729f35453b73c9e0c31d606117a99478da8211c560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_2243ce5a75d55d49acd1ff9c7b02f2271b978bfdb6db1897f2c8b5fbfd9dabc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2243ce5a75d55d49acd1ff9c7b02f2271b978bfdb6db1897f2c8b5fbfd9dabc9->enter($__internal_2243ce5a75d55d49acd1ff9c7b02f2271b978bfdb6db1897f2c8b5fbfd9dabc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_a383f2045789228a18b1eb729f35453b73c9e0c31d606117a99478da8211c560->leave($__internal_a383f2045789228a18b1eb729f35453b73c9e0c31d606117a99478da8211c560_prof);

        
        $__internal_2243ce5a75d55d49acd1ff9c7b02f2271b978bfdb6db1897f2c8b5fbfd9dabc9->leave($__internal_2243ce5a75d55d49acd1ff9c7b02f2271b978bfdb6db1897f2c8b5fbfd9dabc9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}

<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_e6f3f0f3ec9d017eafd6677baaa3cc06bfd156ad88355c9e2161a81fe1e4c361 extends Twig_Template
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
        $__internal_b891f0048ccac2115a8eacb18551e98560370ffd47d30cd19ca44e07313277c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b891f0048ccac2115a8eacb18551e98560370ffd47d30cd19ca44e07313277c7->enter($__internal_b891f0048ccac2115a8eacb18551e98560370ffd47d30cd19ca44e07313277c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_6d144518943652293a4e7c9153b632dae27a7c8010ddcb16e7ac21a38e7c788c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d144518943652293a4e7c9153b632dae27a7c8010ddcb16e7ac21a38e7c788c->enter($__internal_6d144518943652293a4e7c9153b632dae27a7c8010ddcb16e7ac21a38e7c788c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_b891f0048ccac2115a8eacb18551e98560370ffd47d30cd19ca44e07313277c7->leave($__internal_b891f0048ccac2115a8eacb18551e98560370ffd47d30cd19ca44e07313277c7_prof);

        
        $__internal_6d144518943652293a4e7c9153b632dae27a7c8010ddcb16e7ac21a38e7c788c->leave($__internal_6d144518943652293a4e7c9153b632dae27a7c8010ddcb16e7ac21a38e7c788c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}

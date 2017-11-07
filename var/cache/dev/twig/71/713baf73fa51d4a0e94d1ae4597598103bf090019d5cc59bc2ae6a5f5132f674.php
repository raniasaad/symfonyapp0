<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_3ce701f261eb8f48a57257bb5818cd161535e22841a87410542836ec840cd508 extends Twig_Template
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
        $__internal_c9f4909bb575d4eef8aa688bd959fe297f8db162a78aecbb17001ab00331391d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9f4909bb575d4eef8aa688bd959fe297f8db162a78aecbb17001ab00331391d->enter($__internal_c9f4909bb575d4eef8aa688bd959fe297f8db162a78aecbb17001ab00331391d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_f190b24fdb1e66da88c6838d854fcc2d51086fce4db1b62bc95ef8066c08cfa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f190b24fdb1e66da88c6838d854fcc2d51086fce4db1b62bc95ef8066c08cfa7->enter($__internal_f190b24fdb1e66da88c6838d854fcc2d51086fce4db1b62bc95ef8066c08cfa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_c9f4909bb575d4eef8aa688bd959fe297f8db162a78aecbb17001ab00331391d->leave($__internal_c9f4909bb575d4eef8aa688bd959fe297f8db162a78aecbb17001ab00331391d_prof);

        
        $__internal_f190b24fdb1e66da88c6838d854fcc2d51086fce4db1b62bc95ef8066c08cfa7->leave($__internal_f190b24fdb1e66da88c6838d854fcc2d51086fce4db1b62bc95ef8066c08cfa7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
", "TwigBundle:Exception:exception.js.twig", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}

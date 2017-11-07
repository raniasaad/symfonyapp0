<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_b867d7ccf91f2ca86a31d373e5ef02f9db122ae197c5a0c6e6c446c87f595933 extends Twig_Template
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
        $__internal_1f4a304b89f5fe671e2bfa64d4e09e359c273951aa2d16175d5751301a7ce572 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f4a304b89f5fe671e2bfa64d4e09e359c273951aa2d16175d5751301a7ce572->enter($__internal_1f4a304b89f5fe671e2bfa64d4e09e359c273951aa2d16175d5751301a7ce572_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_cbbe440c2ca400026cb02a6a3977ece81f2c89e2921ab1e6e7058101663d151f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbbe440c2ca400026cb02a6a3977ece81f2c89e2921ab1e6e7058101663d151f->enter($__internal_cbbe440c2ca400026cb02a6a3977ece81f2c89e2921ab1e6e7058101663d151f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 4, $this->getSourceContext()); })());
        echo " ";
        echo (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 4, $this->getSourceContext()); })());
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_1f4a304b89f5fe671e2bfa64d4e09e359c273951aa2d16175d5751301a7ce572->leave($__internal_1f4a304b89f5fe671e2bfa64d4e09e359c273951aa2d16175d5751301a7ce572_prof);

        
        $__internal_cbbe440c2ca400026cb02a6a3977ece81f2c89e2921ab1e6e7058101663d151f->leave($__internal_cbbe440c2ca400026cb02a6a3977ece81f2c89e2921ab1e6e7058101663d151f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}

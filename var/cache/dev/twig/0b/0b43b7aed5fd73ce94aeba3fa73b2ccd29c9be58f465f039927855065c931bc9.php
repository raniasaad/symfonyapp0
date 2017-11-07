<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_b342591aa99ecb3d871bf9477764f56783dd05b0ca388558d9ad51775b14bab6 extends Twig_Template
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
        $__internal_69b1cc28d2a586f5e5ff3ec20bc7ee29b676cfca964dd27b98ba5e777135191a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69b1cc28d2a586f5e5ff3ec20bc7ee29b676cfca964dd27b98ba5e777135191a->enter($__internal_69b1cc28d2a586f5e5ff3ec20bc7ee29b676cfca964dd27b98ba5e777135191a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_bc89fa1d179695c43f321d97256105be0663a1275e56c30dcfd82c5b6be6f694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc89fa1d179695c43f321d97256105be0663a1275e56c30dcfd82c5b6be6f694->enter($__internal_bc89fa1d179695c43f321d97256105be0663a1275e56c30dcfd82c5b6be6f694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_69b1cc28d2a586f5e5ff3ec20bc7ee29b676cfca964dd27b98ba5e777135191a->leave($__internal_69b1cc28d2a586f5e5ff3ec20bc7ee29b676cfca964dd27b98ba5e777135191a_prof);

        
        $__internal_bc89fa1d179695c43f321d97256105be0663a1275e56c30dcfd82c5b6be6f694->leave($__internal_bc89fa1d179695c43f321d97256105be0663a1275e56c30dcfd82c5b6be6f694_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}

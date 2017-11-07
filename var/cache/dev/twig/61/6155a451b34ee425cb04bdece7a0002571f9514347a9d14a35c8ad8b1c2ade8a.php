<?php

/* OCPlatformBundle:Advert:form.html.twig */
class __TwigTemplate_56cd7f2085f4fd7e9a497f87c33c16d1b26f022c2921615cb1b1b5c214d6bdab extends Twig_Template
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
        $__internal_5427ba60b3a05bd368928693a2f052c66d782177471c39cdf81c7d54a80afee1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5427ba60b3a05bd368928693a2f052c66d782177471c39cdf81c7d54a80afee1->enter($__internal_5427ba60b3a05bd368928693a2f052c66d782177471c39cdf81c7d54a80afee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

        $__internal_c4b05a90e2c436cfab70f5b27bf38d7f5eef02053a8fddba70e41806cd5d0380 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4b05a90e2c436cfab70f5b27bf38d7f5eef02053a8fddba70e41806cd5d0380->enter($__internal_c4b05a90e2c436cfab70f5b27bf38d7f5eef02053a8fddba70e41806cd5d0380_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

        // line 2
        echo "
<h3>Formulaire d'annonce</h3>

<div class=\"well\">
  ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form');
        echo "
</div>";
        
        $__internal_5427ba60b3a05bd368928693a2f052c66d782177471c39cdf81c7d54a80afee1->leave($__internal_5427ba60b3a05bd368928693a2f052c66d782177471c39cdf81c7d54a80afee1_prof);

        
        $__internal_c4b05a90e2c436cfab70f5b27bf38d7f5eef02053a8fddba70e41806cd5d0380->leave($__internal_c4b05a90e2c436cfab70f5b27bf38d7f5eef02053a8fddba70e41806cd5d0380_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 6,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/form.html.twig #}

<h3>Formulaire d'annonce</h3>

<div class=\"well\">
  {{ form(form) }}
</div>", "OCPlatformBundle:Advert:form.html.twig", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/src/OC/PlatformBundle/Resources/views/Advert/form.html.twig");
    }
}

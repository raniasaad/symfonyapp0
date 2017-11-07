<?php

/* OCPlatformBundle:Advert:form.html.twig */
class __TwigTemplate_3ec5e3b6a6e6a742dd31299b25d897a92ea6c3ccb8922d5a1f9879080d02da49 extends Twig_Template
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
        $__internal_60c253295580a20d73964efd82421b431a29fb81accc839482446efd6b8ab0f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60c253295580a20d73964efd82421b431a29fb81accc839482446efd6b8ab0f8->enter($__internal_60c253295580a20d73964efd82421b431a29fb81accc839482446efd6b8ab0f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

        $__internal_1178e5d934f0f971b09a5395c559c1e1725b135a0e770277514fe6945041244c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1178e5d934f0f971b09a5395c559c1e1725b135a0e770277514fe6945041244c->enter($__internal_1178e5d934f0f971b09a5395c559c1e1725b135a0e770277514fe6945041244c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:form.html.twig"));

        // line 2
        echo "
<h3>Formulaire d'annonce</h3>

<div class=\"well\">
  ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form');
        echo "
</div>";
        
        $__internal_60c253295580a20d73964efd82421b431a29fb81accc839482446efd6b8ab0f8->leave($__internal_60c253295580a20d73964efd82421b431a29fb81accc839482446efd6b8ab0f8_prof);

        
        $__internal_1178e5d934f0f971b09a5395c559c1e1725b135a0e770277514fe6945041244c->leave($__internal_1178e5d934f0f971b09a5395c559c1e1725b135a0e770277514fe6945041244c_prof);

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

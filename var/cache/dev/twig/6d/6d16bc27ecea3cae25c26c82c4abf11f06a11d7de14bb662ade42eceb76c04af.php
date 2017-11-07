<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_6ff9d9ec470c737a74dbbdd63fa15e6ec449b5d088236b9d448f9446ec74e4ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:add.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3ed17b851495c56ce0ed8b60e7aee028ee568803cbab3b31ea11b8a8c2ea5f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3ed17b851495c56ce0ed8b60e7aee028ee568803cbab3b31ea11b8a8c2ea5f4->enter($__internal_d3ed17b851495c56ce0ed8b60e7aee028ee568803cbab3b31ea11b8a8c2ea5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $__internal_f531ba1191ba602766a0db71b5d68d1476f2ffa7a62077ce12876eb65a432dc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f531ba1191ba602766a0db71b5d68d1476f2ffa7a62077ce12876eb65a432dc5->enter($__internal_f531ba1191ba602766a0db71b5d68d1476f2ffa7a62077ce12876eb65a432dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3ed17b851495c56ce0ed8b60e7aee028ee568803cbab3b31ea11b8a8c2ea5f4->leave($__internal_d3ed17b851495c56ce0ed8b60e7aee028ee568803cbab3b31ea11b8a8c2ea5f4_prof);

        
        $__internal_f531ba1191ba602766a0db71b5d68d1476f2ffa7a62077ce12876eb65a432dc5->leave($__internal_f531ba1191ba602766a0db71b5d68d1476f2ffa7a62077ce12876eb65a432dc5_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_aa6ac73d4f7cd9663ab1f5ee4c6c0a22bff6993c4369f85a3b5dbf16ead32ce8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa6ac73d4f7cd9663ab1f5ee4c6c0a22bff6993c4369f85a3b5dbf16ead32ce8->enter($__internal_aa6ac73d4f7cd9663ab1f5ee4c6c0a22bff6993c4369f85a3b5dbf16ead32ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_21544d72e078b42ae346eb91ed0a06ea2de09b192c6d34cfc72eef8927f287c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21544d72e078b42ae346eb91ed0a06ea2de09b192c6d34cfc72eef8927f287c9->enter($__internal_21544d72e078b42ae346eb91ed0a06ea2de09b192c6d34cfc72eef8927f287c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <h2>Ajouter une annonce</h2>

  ";
        // line 9
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>

";
        
        $__internal_21544d72e078b42ae346eb91ed0a06ea2de09b192c6d34cfc72eef8927f287c9->leave($__internal_21544d72e078b42ae346eb91ed0a06ea2de09b192c6d34cfc72eef8927f287c9_prof);

        
        $__internal_aa6ac73d4f7cd9663ab1f5ee4c6c0a22bff6993c4369f85a3b5dbf16ead32ce8->leave($__internal_aa6ac73d4f7cd9663ab1f5ee4c6c0a22bff6993c4369f85a3b5dbf16ead32ce8_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 9,  49 => 6,  40 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/add.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block body %}

  <h2>Ajouter une annonce</h2>

  {{ include(\"OCPlatformBundle:Advert:form.html.twig\") }}

  <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>

{% endblock %}
", "OCPlatformBundle:Advert:add.html.twig", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/src/OC/PlatformBundle/Resources/views/Advert/add.html.twig");
    }
}

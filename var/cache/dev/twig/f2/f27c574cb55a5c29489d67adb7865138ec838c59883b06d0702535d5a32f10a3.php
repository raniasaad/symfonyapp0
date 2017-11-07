<?php

/* OCPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_1078bcc221dc4e5f4677c200ab59078e4b812d26bcc379fd1861346bb17dba7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:edit.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_afc2fedf2c50a7b215e2af716b68521e86ab0b4861ac1413b4e6369667a37fde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afc2fedf2c50a7b215e2af716b68521e86ab0b4861ac1413b4e6369667a37fde->enter($__internal_afc2fedf2c50a7b215e2af716b68521e86ab0b4861ac1413b4e6369667a37fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $__internal_4227a52e5e575daf0a211587c47cb3e16a215ce75a06302778c0595b4f97946d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4227a52e5e575daf0a211587c47cb3e16a215ce75a06302778c0595b4f97946d->enter($__internal_4227a52e5e575daf0a211587c47cb3e16a215ce75a06302778c0595b4f97946d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_afc2fedf2c50a7b215e2af716b68521e86ab0b4861ac1413b4e6369667a37fde->leave($__internal_afc2fedf2c50a7b215e2af716b68521e86ab0b4861ac1413b4e6369667a37fde_prof);

        
        $__internal_4227a52e5e575daf0a211587c47cb3e16a215ce75a06302778c0595b4f97946d->leave($__internal_4227a52e5e575daf0a211587c47cb3e16a215ce75a06302778c0595b4f97946d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_396e2651e464dab0d19baabf0d0896eff62ba6ff1d3a9c5be8d4f97905b1de73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_396e2651e464dab0d19baabf0d0896eff62ba6ff1d3a9c5be8d4f97905b1de73->enter($__internal_396e2651e464dab0d19baabf0d0896eff62ba6ff1d3a9c5be8d4f97905b1de73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_669a2ab8d658481370f15d6f2aa2a828f9b3b40b9d74f2b89196f27e337349cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_669a2ab8d658481370f15d6f2aa2a828f9b3b40b9d74f2b89196f27e337349cc->enter($__internal_669a2ab8d658481370f15d6f2aa2a828f9b3b40b9d74f2b89196f27e337349cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_669a2ab8d658481370f15d6f2aa2a828f9b3b40b9d74f2b89196f27e337349cc->leave($__internal_669a2ab8d658481370f15d6f2aa2a828f9b3b40b9d74f2b89196f27e337349cc_prof);

        
        $__internal_396e2651e464dab0d19baabf0d0896eff62ba6ff1d3a9c5be8d4f97905b1de73->leave($__internal_396e2651e464dab0d19baabf0d0896eff62ba6ff1d3a9c5be8d4f97905b1de73_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_82119842b98da758d8b7283c96865bddbe9d3e8537f321fc3d64970a737c458a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82119842b98da758d8b7283c96865bddbe9d3e8537f321fc3d64970a737c458a->enter($__internal_82119842b98da758d8b7283c96865bddbe9d3e8537f321fc3d64970a737c458a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_654b0005898973da8bdf83c25d7d2ffddd316e9046f3e174c785f71f44b3c519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_654b0005898973da8bdf83c25d7d2ffddd316e9046f3e174c785f71f44b3c519->enter($__internal_654b0005898973da8bdf83c25d7d2ffddd316e9046f3e174c785f71f44b3c519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Modifier une annonce</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit générale de l'annonce déjà publiée.
  </p>

  <p>
    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["advert"]) || array_key_exists("advert", $context) ? $context["advert"] : (function () { throw new Twig_Error_Runtime('Variable "advert" does not exist.', 21, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

";
        
        $__internal_654b0005898973da8bdf83c25d7d2ffddd316e9046f3e174c785f71f44b3c519->leave($__internal_654b0005898973da8bdf83c25d7d2ffddd316e9046f3e174c785f71f44b3c519_prof);

        
        $__internal_82119842b98da758d8b7283c96865bddbe9d3e8537f321fc3d64970a737c458a->leave($__internal_82119842b98da758d8b7283c96865bddbe9d3e8537f321fc3d64970a737c458a_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 21,  77 => 13,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/edit.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
  Modifier une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

  <h2>Modifier une annonce</h2>

  {{ include(\"OCPlatformBundle:Advert:form.html.twig\") }}

  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit générale de l'annonce déjà publiée.
  </p>

  <p>
    <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

{% endblock %}
", "OCPlatformBundle:Advert:edit.html.twig", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/src/OC/PlatformBundle/Resources/views/Advert/edit.html.twig");
    }
}

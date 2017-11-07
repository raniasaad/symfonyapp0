<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_4199d0a1ad97bce5d8121ff210bf5311b927a5d3dae9f179bddee9a634b1a41b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:index.html.twig", 3);
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
        $__internal_f71fa710b911076abdb66eacf20b299b0874a98b087ecd9041fa50580c9e4165 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f71fa710b911076abdb66eacf20b299b0874a98b087ecd9041fa50580c9e4165->enter($__internal_f71fa710b911076abdb66eacf20b299b0874a98b087ecd9041fa50580c9e4165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $__internal_bc34e1b670704f5b592fe8c1e5b8974650587d514ad00177a8246ee182047a53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc34e1b670704f5b592fe8c1e5b8974650587d514ad00177a8246ee182047a53->enter($__internal_bc34e1b670704f5b592fe8c1e5b8974650587d514ad00177a8246ee182047a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f71fa710b911076abdb66eacf20b299b0874a98b087ecd9041fa50580c9e4165->leave($__internal_f71fa710b911076abdb66eacf20b299b0874a98b087ecd9041fa50580c9e4165_prof);

        
        $__internal_bc34e1b670704f5b592fe8c1e5b8974650587d514ad00177a8246ee182047a53->leave($__internal_bc34e1b670704f5b592fe8c1e5b8974650587d514ad00177a8246ee182047a53_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e133324def8957e13a9f00c081b74bf4030b93dbf1d6624bd7ad644629860806 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e133324def8957e13a9f00c081b74bf4030b93dbf1d6624bd7ad644629860806->enter($__internal_e133324def8957e13a9f00c081b74bf4030b93dbf1d6624bd7ad644629860806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f9a1907fd297cf6afd23e22b96ccc21f620c0084b4cbb9e48ad3d15652cb971c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a1907fd297cf6afd23e22b96ccc21f620c0084b4cbb9e48ad3d15652cb971c->enter($__internal_f9a1907fd297cf6afd23e22b96ccc21f620c0084b4cbb9e48ad3d15652cb971c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_f9a1907fd297cf6afd23e22b96ccc21f620c0084b4cbb9e48ad3d15652cb971c->leave($__internal_f9a1907fd297cf6afd23e22b96ccc21f620c0084b4cbb9e48ad3d15652cb971c_prof);

        
        $__internal_e133324def8957e13a9f00c081b74bf4030b93dbf1d6624bd7ad644629860806->leave($__internal_e133324def8957e13a9f00c081b74bf4030b93dbf1d6624bd7ad644629860806_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_c1ad6d9d99e54174fa2fa9370f9a029132e43adab983d3a407c9b2c06c2bd833 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1ad6d9d99e54174fa2fa9370f9a029132e43adab983d3a407c9b2c06c2bd833->enter($__internal_c1ad6d9d99e54174fa2fa9370f9a029132e43adab983d3a407c9b2c06c2bd833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_099811a2f42442e292961c50632c851c99c774890311864320d5d1cc008cacae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_099811a2f42442e292961c50632c851c99c774890311864320d5d1cc008cacae->enter($__internal_099811a2f42442e292961c50632c851c99c774890311864320d5d1cc008cacae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Liste des annonces</h2>

  <ul>
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) || array_key_exists("listAdverts", $context) ? $context["listAdverts"] : (function () { throw new Twig_Error_Runtime('Variable "listAdverts" does not exist.', 14, $this->getSourceContext()); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 15
            echo "      <li>
        <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_view", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "title", array()), "html", null, true);
            echo "
        </a>
        par ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "author", array()), "html", null, true);
            echo ",
        le ";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "      <li>Pas (encore !) d'annonces</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "  </ul>

";
        
        $__internal_099811a2f42442e292961c50632c851c99c774890311864320d5d1cc008cacae->leave($__internal_099811a2f42442e292961c50632c851c99c774890311864320d5d1cc008cacae_prof);

        
        $__internal_c1ad6d9d99e54174fa2fa9370f9a029132e43adab983d3a407c9b2c06c2bd833->leave($__internal_c1ad6d9d99e54174fa2fa9370f9a029132e43adab983d3a407c9b2c06c2bd833_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 25,  107 => 23,  99 => 20,  95 => 19,  90 => 17,  86 => 16,  83 => 15,  78 => 14,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
  Accueil - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

  <h2>Liste des annonces</h2>

  <ul>
    {% for advert in listAdverts %}
      <li>
        <a href=\"{{ path('oc_platform_view', {'id': advert.id}) }}\">
          {{ advert.title }}
        </a>
        par {{ advert.author }},
        le {{ advert.date|date('d/m/Y') }}
      </li>
    {% else %}
      <li>Pas (encore !) d'annonces</li>
    {% endfor %}
  </ul>

{% endblock %}
", "OCPlatformBundle:Advert:index.html.twig", "/var/www/vhosts/localhost.localdomain/httpdocs/Apps/symfonyapp/src/OC/PlatformBundle/Resources/views/Advert/index.html.twig");
    }
}
